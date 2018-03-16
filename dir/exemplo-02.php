<?php

	date_default_timezone_set("America/Sao_Paulo");
	$images = scandir("images");

	/*foreach ($images as $item){
		if(is_dir($item)){
			echo "<b>Diretorio:</b> ". $item . "<br/>";
		}else
			echo "<b>Arquivo: </b>".$item . "<br/>";
	}*/
	$data = array();
	foreach ($images as $item){
		if(!in_array($item, array(".",".."))){
			$filename = "images" . DIRECTORY_SEPARATOR . $item;

			$info = pathinfo($filename);
			$info["size"] = filesize($filename);
			$info["modified"] = date("d/m/Y H:i:s", filemtime($filename));
			$info["url"] = "https://localhost/cursophp/dir/" . str_replace("\\", "/", $filename);
			array_push($data, $info);
		}
	}
	echo json_encode($data);
?>