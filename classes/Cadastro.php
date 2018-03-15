<?php
	class Cadastro {
		private $nome;
		private $email;
		private $senha;

		public function __get($propriedade):string{
			return $this->$propriedade;
		}

		public function __set($propriedade, $valor){
			$this->$propriedade = $valor;
		}

		public function __toString(){
			return json_encode(array(
				"nome"=>$this->nome,
				"email"=>$this->email,
				"senha"=>$this->senha
			));
		}
	}
?>