<?php

require_once 'Crud.class.php';
class Campanha extends Crud
{

    protected $cam_id;
    protected $loj_id;
    protected $cam_descricao;
    protected $cam_inicio;
    protected $cam_fim;
    protected $cam_observacao;
    protected $cam_situacao;
    protected $cam_cadastro;

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
    public function getLojId()
    {
        return $this->loj_id;
    }

    /**
     * @param mixed $loj_id
     */
    public function setLojId($loj_id)
    {
        $this->loj_id = $loj_id;
    }

    /**
     * @return mixed
     */
    public function getCamDescricao()
    {
        return $this->cam_descricao;
    }

    /**
     * @param mixed $cam_descricao
     */
    public function setCamDescricao($cam_descricao)
    {
        $this->cam_descricao = $cam_descricao;
    }

    /**
     * @return mixed
     */
    public function getCamInicio()
    {
        return $this->cam_inicio;
    }

    /**
     * @param mixed $cam_inicio
     */
    public function setCamInicio($cam_inicio)
    {
        $this->cam_inicio = $cam_inicio;
    }

    /**
     * @return mixed
     */
    public function getCamFim()
    {
        return $this->cam_fim;
    }

    /**
     * @param mixed $cam_fim
     */
    public function setCamFim($cam_fim)
    {
        $this->cam_fim = $cam_fim;
    }

    /**
     * @return mixed
     */
    public function getCamObservacao()
    {
        return $this->cam_observacao;
    }

    /**
     * @param mixed $cam_observacao
     */
    public function setCamObservacao($cam_observacao)
    {
        $this->cam_observacao = $cam_observacao;
    }

    /**
     * @return mixed
     */
    public function getCamSituacao()
    {
        return $this->cam_situacao;
    }

    /**
     * @param mixed $cam_situacao
     */
    public function setCamSituacao($cam_situacao)
    {
        $this->cam_situacao = $cam_situacao;
    }

    /**
     * @return mixed
     */
    public function getCamCadastro()
    {
        return $this->cam_cadastro;
    }

    /**
     * @param mixed $cam_cadastro
     */
    public function setCamCadastro($cam_cadastro)
    {
        $this->cam_cadastro = $cam_cadastro;
    }






    public function update($field, $id){
        $sql = "UPDATE {$this->tabela} SET loj_id = :loj_id, cam_descricao = :cam_descricao,"
                ."cam_inicio = :cam_inicio, cam_fim = :cam_fim, cam_observacao = :cam_observacao,"
                ."cam_situacao = :cam_situacao, cam_cadastro = :cam_cadastro WHERE cam_id = :cam_id";
        $smtp = Conexao::prepare($sql);
        $smtp->bindParam('cam_id',               $this->cam_id,             PDO::PARAM_INT);
        $smtp->bindParam('loj_id',               $this->loj_id,             PDO::PARAM_INT);
        $smtp->bindParam('cam_descricao',        $this->cam_descricao,      PDO::PARAM_STR);
        $smtp->bindParam('cam_inicio',           $this->cam_inicio,         PDO::PARAM_STR);
        $smtp->bindParam('cam_fim',              $this->cam_fim,            PDO::PARAM_STR);
        $smtp->bindParam('cam_observacao',       $this->cam_observacao,     PDO::PARAM_STR);
        $smtp->bindParam('cam_situacao',         $this->cam_situacao,       PDO::PARAM_INT);
        $smtp->bindParam('cam_cadastro',         $this->cam_cadastro,       PDO::PARAM_STR);
        $smtp->execute();

        return $smtp->fetch();
    }

    public function insert(){
        $sql = "INSERT {$this->tabela} SET loj_id = :loj_id, cam_descricao = :cam_descricao,"
            ."cam_inicio = :cam_inicio, cam_fim = :cam_fim, cam_observacao = :cam_observacao,"
            ."cam_situacao = :cam_situacao, cam_cadastro = :cam_cadastro";
        $smtp = Conexao::prepare($sql);
        $smtp->bindParam('loj_id',               $this->loj_id,             PDO::PARAM_INT);
        $smtp->bindParam('cam_descricao',        $this->cam_descricao,      PDO::PARAM_STR);
        $smtp->bindParam('cam_inicio',           $this->cam_inicio,         PDO::PARAM_STR);
        $smtp->bindParam('cam_fim',              $this->cam_fim,            PDO::PARAM_STR);
        $smtp->bindParam('cam_observacao',       $this->cam_observacao,     PDO::PARAM_STR);
        $smtp->bindParam('cam_situacao',         $this->cam_situacao,       PDO::PARAM_INT);
        $smtp->bindParam('cam_cadastro',         $this->cam_cadastro,       PDO::PARAM_STR);
        $smtp->execute();

        return $smtp->fetch();
    }

}