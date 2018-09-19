<? 
require_once 'Crud.class.php';
class Pessoa extends Crud{
    protected $tabela = 'pessoa';
    protected $id;
    protected $nome;
    protected $receita;
    protected $login;
    protected $senha;
    protected $situacao;
    protected $cadastro;

    public function __construct(){
        $this->situacao = "Situação";
    }
    public function insert(){
        $sql = "INSERT INTO (".
        "     pes_nome,                     ".
        "     pes_receita,                  ".
        "     pes_login,                    ".
        "     pes_senha,                    ".
        "     pes_situacao,                 ".
        "     pes_cadastro                  ".
        ") VALUES (                         ".
        "    :nome,                         ".
        "    :receita,                      ".
        "    :login,                        ".
        "    :senha,                        ".
        "    :situacao,                     ".
        "    :cadastro                      ".
        "    )";
        $smtp = Conexao::prepare($sqlSelect);
        $smtp->bindParam(':nome',       $this->nome,                   PDO::PARM_STR);
        $smtp->bindParam(':receita',    $this->receita,                PDO::PARM_STR);
        $smtp->bindParam(':login',      $this->login,                  PDO::PARM_STR);
        $smtp->bindParam(':senha',      $this->senha,                  PDO::PARM_STR);
        $smtp->bindParam(':situacao',   $this->situacao,               PDO::PARM_STR);
        $smtp->bindParam(':cadastro',   $this->cadastro,               PDO::PARM_STR);
        $smtp->execute();

        return $smtp->fetch();
    }

    public function update($coluna, $value){
        $sql = "UPDATE {$this->tabela} SET    ". 
        "    pes_nome = :nome,                ".
        "    pes_receita = :receita,          ".
        "    pes_login = :login,              ".
        "    pes_senha = :senha,              ".
        "    pes_situacao = :situacao,        ".  
        "    pes_cadastro = :cadastro,        ".
        " WHERE    pes_id = :id               ";

        $smtp = Conexao::prepare($sqlSelect);
        $smtp->bindParam(':nome',       $this->nome,                   PDO::PARM_STR);
        $smtp->bindParam(':receita',    $this->receita,                PDO::PARM_STR);
        $smtp->bindParam(':login',      $this->login,                  PDO::PARM_STR);
        $smtp->bindParam(':senha',      $this->senha,                  PDO::PARM_STR);
        $smtp->bindParam(':situacao',   $this->situacao,               PDO::PARM_STR);
        $smtp->bindParam(':cadastro',   $this->cadastro,               PDO::PARM_STR);
        $smtp->execute();

        return $smtp->fetch();
    }
}
