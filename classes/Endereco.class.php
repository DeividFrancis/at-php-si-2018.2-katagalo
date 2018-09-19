    <? 
    require_once 'Crud.class.php';
     class Endereco extends Crud{
        protected $tabela = 'endereco';
        protected $id;
        // protected $cidId;
        protected $endereco;
        protected $numero;
        protected $bairro;
        protected $complemento;
        protected $cidade;  
        protected $cadastro;
        protected $cep;
        protected $localizacao;
        protected $situacao;
        protected $uf;



        public function insert(){
            $sql = "INSERT INTO (
                
                end_endereco,
                end_numero,
                end_bairro,
                end_complemento,
                end_cidade,
                end_cadastro,
                end_cep,
                end_localizacao,
                end_situacao,
                end_uf
            ) VALUES (
                :endereco,
                :numero,
                :bairro,
                :complemento,
                :cidade,
                :cadastro,
                :cep,
                :localizacao,
                :situacao,
                :uf,
                

                )";
            $smtp = Conexao::prepare($sqlSelect);
            $smtp->bindParam(':id',         $this->id,                     PDO::PARM_INT);
            $smtp->bindParam(':endereco',       $this->endereco,                   PDO::PARM_STR);
            $smtp->bindParam(':numero',    $this->numero,                PDO::PARM_STR);
            $smtp->bindParam(':bairro',      $this->bairro,                  PDO::PARM_STR);
            $smtp->bindParam(':complemento',      $this->complemento,                  PDO::PARM_STR);
            $smtp->bindParam(':cidade',   $this->cidade,               PDO::PARM_STR);
            $smtp->bindParam(':cadastro',   $this->cadastro,               PDO::PARM_STR);
            $smtp->bindParam(':cep',   $this->cep,               PDO::PARM_STR);
            $smtp->bindParam(':localizacao',   $this->localizacao,               PDO::PARM_STR);
            $smtp->bindParam(':situacao',   $this->situacao,               PDO::PARM_STR);
            $smtp->bindParam(':uf',   $this->uf,               PDO::PARM_STR);
            $smtp->execute();

            return $smtp->fetch();
        }

        public function update($coluna, $value){
            $sql = "UPDATE {$this->tabela} SET 
                end_endereco    = :enderecom,
                end_numero      = :numero,
                end_bairro      = :bairro,
                end_complemento = :complemento,
                end_cidade      = :cidade,
                end_cadastro    = :cadastro,
                end_cep         = :cep,
                end_localizacao = :localizacao,
                end_situacao    = :situacao

                WHERE end_id = :id ";

            $smtp = Conexao::prepare($sqlSelect);
            $smtp->bindParam(':endereco',          $this->endereco,                   PDO::PARM_STR);
            $smtp->bindParam(':numero',            $this->numero,                     PDO::PARM_STR);
            $smtp->bindParam(':bairro',            $this->bairro,                     PDO::PARM_STR);
            $smtp->bindParam(':complemento',       $this->complemento,                PDO::PARM_STR);
            $smtp->bindParam(':cidade',            $this->cidade,                     PDO::PARM_STR);
            $smtp->bindParam(':cadastro',          $this->cadastro,                   PDO::PARM_STR);
            $smtp->bindParam(':cep',               $this->cep,                        PDO::PARM_STR);
            $smtp->bindParam(':localizacao',       $this->localizacao,                PDO::PARM_STR);
            $smtp->bindParam(':situacao',          $this->situacao,                   PDO::PARM_STR);
            $smtp->bindParam(':uf',                $this->uf,                         PDO::PARM_STR);
            $smtp->execute();

            return $smtp->fetch();


                
           
                }
       
            }
        }
    }