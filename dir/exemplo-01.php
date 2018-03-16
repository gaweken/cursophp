<?php
	$dirname = "images";
	if(!is_dir($dirname)){
		mkdir($dirname); // Criar o diretorio
		echo "O diretorio $dirname foi criado com sucesso!";
	}else {
		//rmdir($dirname); //Remover o diretorio
		//echo "O diretorio $dirname já existe";
	}
?>