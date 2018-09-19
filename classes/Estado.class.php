    <? 
    require_once 'Crud.class.php';
     class Estado extends Crud{
        protected $tabela = 'estado';
        protected $id;
        protected $sigla;
        protected $situacao;
        protected $cadastro;
        


        public function insert(){
            $sql = "INSERT INTO (
                est_sigla
                est_situacao,
                est_cadastro
            ) VALUES (
                :sigla,
                :situacao,
                :cadastro,
                )";
            $smtp = Conexao::prepare($sqlSelect);
            $smtp->bindParam(':sigla',    $this->sigla,                PDO::PARM_STR);
            $smtp->bindParam(':situacao',      $this->situacao,                  PDO::PARM_STR);
            $smtp->bindParam(':cadastro',      $this->cadastro,                  PDO::PARM_STR);
            $smtp->execute();

            return $smtp->fetch();
        }

        public function update($coluna, $value){
            $sql = "UPDATE {$this->tabela} SET 
                est_sigla = :sigla,
                est_situacao, = :situacao,
                est_cadastro, = :cadastro,

                WHERE est_id = :id ";

            $smtp = Conexao::prepare($sqlSelect);
            $smtp->bindParam(':sigla',    $this->sigla,                PDO::PARM_STR);
            $smtp->bindParam(':situacao',     $this->situacao,                  PDO::PARM_STR);
            $smtp->bindParam(':cadastro',      $this->cadastro,                  PDO::PARM_STR);
            $smtp->execute();

            return $smtp->fetch();


                
           
                }
       
            }
        }
    }