 <?php

/**
*
*/
abstract class Crud
{

  protected $tabela;

  abstract public function insert();
  abstract public function update($coluna, $value);

  public function listALL(){
    $querySelect = "SELECT * FROM {$this->tabela}";
    $smtp = Conexao::prepare($querySelect);
    $smtp->execute();

    return $smtp->fetchAll();
  }

  public function search($field, $id){
    $sqlSelect = "SELECT * FROM {$this->tabela} WHERE {$field} = :parameter ";
    $smtp = Conexao::prepare($sqlSelect);
    // $smtp->bindParam(':parameter',$id,PDO::PARM_INT);
    $smtp->bindValue(':parameter',$id);
    $smtp->execute();

    return $smtp->fetch();
  }

  public function delete($key, $value)
  {
    $sqlSelect = "DELETE FROM {$this->tabela} WHERE {$key} = :val ";
    $smtp = Conexao::prepare($sqlSelect);
    // $smtp->bindParam(':parameter',$id,PDO::PARM_INT);
    $smtp->bindValue(':val',$value);
    $smtp->execute();

    return $smtp->fetch();
  }
  
  public function get($atributo) {
    if(isset($this->$atributo)){
      return  $this->$atributo;
    }else{
      return "Err Get";
    }
  }

  public function set($atributo, $valor) {
      $this->$atributo = $valor;
  }

  public function getVars(){
    return get_object_vars($this);
   }

}