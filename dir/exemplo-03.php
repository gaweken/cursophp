<?php
date_default_timezone_set("America/Sao_Paulo");
	$file = fopen("log.txt","a+");// W+ para substituir o conteudo do arquivo a+ para adicionar conteudo no final do arquivo

	fwrite($file, "Data: ".date("d/m/Y H:i:s \r\n"));

	fclose($file);
?>