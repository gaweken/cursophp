<?php
	spl_autoload_register(function($nameClass){
		$dirClass = "classes";
		$filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php";
		if(file_exists($filename)){
			require_once($filename);
		}
	});

	$conn = new mysqli("localhost", "root", "", "dbphp7");

	if($conn->connect_error){
		echo "Error: ". $conn->connect_error;
	}
?>