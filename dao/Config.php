<?php 
setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portugues");
date_default_timezone_set("America/Sao_Paulo");

spl_autoload_register(function($class_name){
	$filename = "class" . DIRECTORY_SEPARATOR . $class_name . ".php";//Concatenação da pasta de classes
	if (file_exists(($filename))){
		require_once($filename);
	}
})

?>