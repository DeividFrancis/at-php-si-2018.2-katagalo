<?php
/**
 * Created by PhpStorm.
 * User: cleiton
 * Date: 12/09/18
 * Time: 20:00
 */

require_once "Crud.class.php";

class CampanhaProduto extends Crud
{

    protected $camp_id;
    protected $cam_id;
    protected $pro_id;
    protected $camp_precoPromocao;
    protected $camp_situacao;
    protected $camp_cadastro;

    /**
     * @return mixed
     */
    public function getCampId()
    {
        return $this->camp_id;
    }

    /**
     * @param mixed $camp_id
     */
    public function setCampId($camp_id)
    {
        $this->camp_id = $camp_id;
    }

    /**
     * @return mixed
     */
    public function getCamId()
    {
        return $this->cam_id;
    }

    /**
     * @param mixed $cam_id
     */
    public function setCamId($cam_id)
    {
        $this->cam_id = $cam_id;
    }

    /**
     * @return mixed
     */
    public function getProId()
    {
        return $this->pro_id;
    }

    /**
     * @param mixed $pro_id
     */
    public function setProId($pro_id)
    {
        $this->pro_id = $pro_id;
    }

    /**
     * @return mixed
     */
    public function getCampPrecoPromocao()
    {
        return $this->camp_precoPromocao;
    }

    /**
     * @param mixed $camp_precoPromocao
     */
    public function setCampPrecoPromocao($camp_precoPromocao)
    {
        $this->camp_precoPromocao = $camp_precoPromocao;
    }

    /**
     * @return mixed
     */
    public function getCampSituacao()
    {
        return $this->camp_situacao;
    }

    /**
     * @param mixed $camp_situacao
     */
    public function setCampSituacao($camp_situacao)
    {
        $this->camp_situacao = $camp_situacao;
    }

    /**
     * @return mixed
     */
    public function getCampCadastro()
    {
        return $this->camp_cadastro;
    }

    /**
     * @param mixed $camp_cadastro
     */
    public function setCampCadastro($camp_cadastro)
    {
        $this->camp_cadastro = $camp_cadastro;
    }

    public function update($field, $id){
        $sql = "UPDATE {$this->tabela} SET cam_id = :cam_id, pro_id = :pro_id, camp_precopromocao = :camp_precopromocao,"
                ."camp_situacao = :camp_situacao, camp_cadastro = :camp_cadastro WHERE camp_id = :camp_id";
        $smtp = Conexao::prepare($sql);
        $smtp->bindParam('camp_id',             $this->camp_id,            PDO::PARAM_INT);
        $smtp->bindParam('cam_id',              $this->cam_id,             PDO::PARAM_INT);
        $smtp->bindParam('pro_id',              $this->pro_id,             PDO::PARAM_INT);
        $smtp->bindParam('camp_precopromocao',  $this->camp_precoPromocao, PDO::PARAM_INT);
        $smtp->bindParam('camp_situacao',       $this->camp_situacao,      PDO::PARAM_INT);
        $smtp->bindParam('camp_cadastro',       $this->camp_cadastro,      PDO::PARAM_STR);
        $smtp->execute();

        return $smtp->fetch();
    }

    public function insert(){
        $sql = "INSERT {$this->tabela} SET cam_id = :cam_id, pro_id = :pro_id, camp_precopromocao = :camp_precopromocao,"
            ."camp_situacao = :camp_situacao, camp_cadastro = :camp_cadastro";
        $smtp = Conexao::prepare($sql);
        $smtp->bindParam('cam_id',              $this->cam_id,             PDO::PARAM_INT);
        $smtp->bindParam('pro_id',              $this->pro_id,             PDO::PARAM_INT);
        $smtp->bindParam('camp_precopromocao',  $this->camp_precoPromocao, PDO::PARAM_INT);
        $smtp->bindParam('camp_situacao',       $this->camp_situacao,      PDO::PARAM_INT);
        $smtp->bindParam('camp_cadastro',       $this->camp_cadastro,      PDO::PARAM_STR);
        $smtp->execute();

        return $smtp->fetch();
    }




}