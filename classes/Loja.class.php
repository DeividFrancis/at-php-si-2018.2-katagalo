	   <? 
		require_once 'Crud.class.php'
		 class Loja extends Crud{
			 protected $tabela = 'loja';
			 protected $id;
			 protected $fantasia;
			 protected $situacao;
			 protected $cadastro;

			public function insert(){
			  $sql = "INSERT INTO (

			      loj_fantasia,
		          loj_situacao,
		          loj_cadastro
			    ) VALUES(
			      :fantasia,
			      :situacao,
			      :cadastro

	 		      )";

	   		    $smtp = Conexao::prepare($sqlSelect);
	            $smtp->bindParam(':fantasia',         $this->fantasia,                     PDO::PARM_INT);
	            $smtp->bindParam(':situacao',       $this->situacao,                   PDO::PARM_STR);
	            $smtp->bindParam(':cadastro',    $this->cadastro,               PDO::PARM_STR);
	            $smtp->execute();

	            return $smtp->fetch();

			     }
			public function update($coluna, $value){
			  $sql = "UPDATE {$this->tabela} SET
			  	  loj_fantasia = :fantasia,
			  	  loj_situacao = :situacao,
			  	  loj_cadastro = :cadastro
			  	
			  	  WHERE loj_id = :id ";

			  	$smtp = Conexao::prepare($sqlSelect);
	            $smtp->bindParam(':fantasia',       $this->fantasia,                   PDO::PARM_STR);
	            $smtp->bindParam(':situacao',    $this->situacao,                PDO::PARM_STR);
	            $smtp->bindParam(':cadastro',      $this->cadastro,                  PDO::PARM_STR);
	            $smtp->execute();

	            return $smtp->fetch();


			    }

		 }

	}