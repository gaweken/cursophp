<?php 

class usuario {
	private $idusuario;
	private $deslogin;
	private $dessenha;
	private $dtcadastro;


	public function __get($atributo){
		return $this->$atributo;
	}

	public function __set($atributo, $valor){
		$this->$atributo = $valor;
	}

	public function loadByID($id){
		$sql = new Sql();
		$result = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(":ID"=>$id));
		if(isset($result[0])){
			$row = $result[0];

			$this->idusuario = $row['idusuario'];
			$this->deslogin = $row['deslogin'];
			$this->dessenha = $row['dessenha'];
			$this->dtcadastro = new Datetime($row['dtcadastro']);
		}
	}

	public static function getList(){
		$sql = new Sql();
		return $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");
	}

	public static function search($login){
		$sql = new Sql();
		return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH ORDER BY deslogin", array(":SEARCH"=>"%".$login."%"));
	}

	public function __toString(){
		return json_encode(array(
			"idusuario"=>$this->idusuario,
			"deslogin"=>$this->deslogin,
			"dessenha"=>$this->dessenha,
			"dtcadastro"=>$this->dtcadastro->format("d/m/Y h:i:s")
		));
	}
}
?>