<?php
class Produto extends Crud{
  protected $tabela = 'PRODUTO';
  private $pro_id;
  private $loj_id;
  private $proc_id;
  private $pro_barcod;
  private $pro_descricao;
  private $pro_imagem;
  private $pro_preco;
  private $pro_situacao;
  private $pro_cadastro;

  public function insert(){
    $sqlInsert = "insert into {$this->tabela} (pro_id, loj_id, proc_id, pro_barcod, pro_descricao, pro_imagem, pro_preco, pro_situacao, pro_cadastro) values (:pro_id, :loj_id, :proc_id, :pro_barcod, :pro_descricao, :pro_imagem, :pro_preco, :pro_situacao, :pro_cadastro)";
    $stmt = Conexao::prepare($sqlInsert);
    $stmt->bindParam(':pro_id', $this->pro_id, PDO::PARAM_STR);
    $stmt->bindParam(':loj_id', $this->loj_id, PDO::PARAM_STR);
    $stmt->bindParam(':proc_id', $this->proc_id, PDO::PARAM_STR);
    $stmt->bindParam(':pro_barcod', $this->pro_barcod, PDO::PARAM_STR);
    $stmt->bindParam(':pro_descricao', $this->pro_descricao, PDO::PARAM_STR);
    $stmt->bindParam(':pro_imagem', $this->pro_imagem, PDO::PARAM_STR);
    $stmt->bindParam(':pro_preco', $this->pro_preco, PDO::PARAM_STR);
    $stmt->bindParam(':pro_situacao', $this->pro_situacao, PDO::PARAM_STR);
    $stmt->bindParam(':pro_cadastro', $this->pro_cadastro, PDO::PARAM_STR);
    $stmt->execute();
  }

  public function update ($campo, $id){
    $sqlUpdate = "update {$this->tabela} set pro_id= :Ppro_id, loj_id= :Ploj_id, proc_id= :Pproc_id, pro_barcod= :Ppro_barcod, pro_descricao= :Ppro_descricao, pro_imagem= :Ppro_imagem, pro_preco= :Ppro_preco, pro_situacao= :Ppro_situacao, pro_cadastro= :Ppro_cadastro where {$campo} = :param";
    $stmt = Conexao::prepare($sqlUpdate);
    $stmt->bindParam(':Ppro_id', $this->pro_id, PDO::PARAM_STR);
    $stmt->bindParam(':Ploj_id', $this->loj_id, PDO::PARAM_STR);
    $stmt->bindParam(':Pproc_id', $this->proc_id, PDO::PARAM_STR);
    $stmt->bindParam(':Ppro_barcod', $this->pro_barcod, PDO::PARAM_STR);
    $stmt->bindParam(':Ppro_descricao', $this->pro_descricao, PDO::PARAM_STR);
    $stmt->bindParam(':Ppro_imagem', $this->pro_imagem, PDO::PARAM_STR);
    $stmt->bindParam(':Ppro_preco', $this->pro_preco, PDO::PARAM_STR);
    $stmt->bindParam(':Ppro_situacao', $this->pro_situacao, PDO::PARAM_STR);
    $stmt->bindParam(':Ppro_cadastro', $this->pro_cadastro, PDO::PARAM_STR);
    $stmt->bindParam(':param', '$id', PDO::PARAM_INT);
    $stmt->execute();

  }

  public function getPro_Id(){
    return $this->pro_id;
  }

  public function getLoj_Id(){
    return $this->loj_id;
  }

  public function getProc_Id(){
    return $this->proc_id;
  }

  public function getPro_Barcod(){
    return $this->pro_barcod;
  }

  public function getPro_Descricao(){
    return $this->pro_descricao;
  }

  public function getPro_Imagem(){
    return $this->pro_imagem;
  }

  public function getPro_Preco(){
    return $this->pro_preco;
  }

  public function getPro_Situacao(){
    return $this->pro_situacao;
  }

  public function getPro_Cadastro(){
    return $this->pro_cadastro;
  }

  public function setPro_Id($pro_id){
    $this->pro_id = $pro_id;
  }

  public function setLoj_Id($loj_id){
    $this->loj_id = $loj_id;
  }

  public function setProc_Id($proc_id){
    $this->proc_id = $proc_id;
  }

  public function setPro_Barcod($pro_barcod){
    $this->pro_barcod = $pro_barcod;
  }

  public function setPro_Descricao($pro_descricao){
    $this->pro_descricao = $pro_descricao;
  }

  public function setPro_Imagem($pro_imagem){
    $this->pro_imagem = $pro_imagem;
  }

  public function setPro_Preco($pro_preco){
    $this->pro_preco = $pro_preco;
  }

  public function setPro_Situacao($pro_situacao){
    $this->pro_situacao = $pro_situacao;
  }

  public function setPro_Cadastro($pro_cadastro){
    $this->pro_cadastro = $pro_cadastro;
  }
}
 ?>
