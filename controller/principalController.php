<?php
$method = filter_input(INPUT_SERVER, 'REQUEST_METHOD');
if($method != "POST"){
    header("HTTP/1.0 404 Not Found");
    exit();
}

function __autoload($classe){require_once "../classes/{$classe}.class.php";}
$class = filter_input(INPUT_POST, 'class');
$class = strtolower($class);
$class = ucfirst($class);

$action = filter_input(INPUT_POST, 'action');
$action = strtolower($action);
$obj = new $class();
    foreach ($obj->getVars() as $key => $value) {
        $val = $_POST[$key];
        if($val == null) continue;
        $obj->set($key,$val);
    }
    // $obj->insert();
    var_dump($obj);

switch ($action) {
    case 'salvar':
        $obj->insert();
        break;
    
    case 'deletar':
        $obj->delete();
        break;
    
    case 'alterar':
        $obj->update();
        break;
    
    default:
        echo "Somente as ações 'salvar', 'deletar', 'alterar' são validas";
        break;
}

    ?>