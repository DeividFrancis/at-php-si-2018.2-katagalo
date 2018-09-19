<?php
require_once 'Crud.class.php';
class Produto extends Crud{
    protected $tabela = "Produto";
    protected $id;
    protected $lojId;
    protected $procId;
    protected $barcode;
    protected $descricao;
    protected $imagem;
    protected $preco;
    protected $situação;
    protected $cadastro;

    public function insert(){}
    public function update($coluna, $value){}
}