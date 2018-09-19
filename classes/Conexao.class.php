<?php


/**
*
*/
final class Conexao
{

  private function __construct(){

  }

  public static function open()
  { 
    if (!defined('user')) {
      define('user', 'deivid');
    }
    if (!defined('host')) {
      define('host', 'postgres');
    }
    if (!defined('pass')) {
      define('pass', '1234');
    }
    if (!defined('data')) {
      define('data', 'aulaPDO');
    }
    if (!defined('port')) {
      define('port', '5432');
    }
    if (!defined('base')) {
      define('base', 'pgsql');
    }

    try {
      switch (base) {

        case 'mysql':
        $conn = new PDO('mysql.host='.host.';port='.port.';dbname='.data,user,pass);
        $array = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES uft8');
        break;

        case 'pgsql':
        $conn = new PDO('pgsql:dbname='.data.'; user='.user.'; password='.pass.'; host='.host.'; port='.port);
        break;

        case 'oci':
        $conn = new PDO('oci:dbname='.data.','.user.','.pass);
        break;

        case 'mssql':
        $conn = new PDO('mssql:host='.host.','.port.';'.'dbname='.data,user,pass);
        break;

      }
    } catch (PDOException $e) {
      echo "Erro ".$e->getMessage();
    }

    // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    return $conn;
  }

  public static function prepare($sql)
  {
    return self::open()->prepare($sql);
  }

}

?>
