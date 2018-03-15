<?php
class MinhaClasse {
	private $nome;


	public function __construct(){
		$this->nome = "Felipe";
	}
	
	public function __set($propriedade, $valor){
		$this->$propriedade = $valor;
	}

	public function __get($propriedade){
		return $this->$propriedade;
	}

	public function retornaNome (){
		return "O meu nome é: ".$this->nome;
	}


}

?>