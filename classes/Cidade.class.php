    <? 
    require_once 'Crud.class.php';
     class Cidade extends Crud{
        protected $tabela = 'cidade';
        protected $id;
        protected $estado;
        protected $descricao;
        protected $situacao;
        protected $cadastro;
        


        public function insert(){
            $sql = "INSERT INTO (
                est_id
                cid_descricao,
                cid_situacao,
                cid_cadastro
            ) VALUES (
                :estado,
                :descricao,
                :situacao,
                :cadastro,
                )";
            $smtp = Conexao::prepare($sqlSelect);
            $smtp->bindParam(':estado',       $this->estado,                   PDO::PARM_STR);
            $smtp->bindParam(':descricao',    $this->descricao,                PDO::PARM_STR);
            $smtp->bindParam(':situacao',      $this->situacao,                  PDO::PARM_STR);
            $smtp->bindParam(':cadastro',      $this->cadastro,                  PDO::PARM_STR);
            $smtp->execute();

            return $smtp->fetch();
        }

        public function update($coluna, $value){
            $sql = "UPDATE {$this->tabela} SET 
                est_id = :estado,
                cid_descricao = :descricao,
                cid_situacao, = :situacao,
                cid_cadastro, = :cadastro,

                WHERE cid_id = :id ";

            $smtp = Conexao::prepare($sqlSelect);
            $smtp->bindParam(':estado',       $this->estado,                   PDO::PARM_STR);
            $smtp->bindParam(':descricao',    $this->descricaoao,                PDO::PARM_STR);
            $smtp->bindParam(':situacao',     $this->situacao,                  PDO::PARM_STR);
            $smtp->bindParam(':cadastro',      $this->cadastro,                  PDO::PARM_STR);
            $smtp->execute();

            return $smtp->fetch();


                
           
                }
       
            }
        }
    }