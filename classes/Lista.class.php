	   <? 
		require_once 'Crud.class.php'
		 class Lista extends Crud{
			 protected $tabela = 'lista';
			 protected $id;
			 protected $campanhaproduto;
			 protected $quantidade;
			 protected $situacao;
			 protected $cadastro;

			public function insert(){
			  $sql = "INSERT INTO (
                  camp_id,
			      loj_quantidade,
		          loj_situacao,
		          loj_cadastro
			    ) VALUES(
			      :campanhaproduto,
			      :quantidade,
			      :fantasia,
			      :situacao,
			      :cadastro

	 		      )";

	   		    $smtp = Conexao::prepare($sqlSelect);
	            $smtp->bindParam(':campanhaproduto',         $this->campanhaproduto,                     PDO::PARM_INT);
	            $smtp->bindParam(':quantidade',         $this->quantidade,                     PDO::PARM_INT);
	            $smtp->bindParam(':situacao',       $this->situacao,                   PDO::PARM_STR);
	            $smtp->bindParam(':cadastro',    $this->cadastro,               PDO::PARM_STR);
	            $smtp->execute();

	            return $smtp->fetch();

			     }
			public function update($coluna, $value){
			  $sql = "UPDATE {$this->tabela} SET  
			      camp_id = : campanhaproduto,  
			  	  loj_quantidade= :quantidade,
			  	  loj_situacao = :situacao,
			  	  loj_cadastro = :cadastro
			  	
			  	  WHERE lista_id = :id ";

			  	$smtp = Conexao::prepare($sqlSelect);
	            $smtp->bindParam(':campanhaproduto',       $this->campanhaproduto,                   PDO::PARM_STR);
	            $smtp->bindParam(':quantidade',       $this->quantidade,                   PDO::PARM_STR);
	            $smtp->bindParam(':situacao',    $this->situacao,                PDO::PARM_STR);
	            $smtp->bindParam(':cadastro',      $this->cadastro,                  PDO::PARM_STR);
	            $smtp->execute();

	            return $smtp->fetch();


			    }

		 }

	}