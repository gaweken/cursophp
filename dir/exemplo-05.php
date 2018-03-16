<?php 
/*$file = fopen("teste.txt", "w+");

fclose($file);


unlink("teste.txt"); // Remove arquivo*/

if(!is_dir("teste")) mkdir("teste");

foreach (scandir("teste") as $item){
	if (!in_array($item, array(".", ".."))){
		unlink("teste/" . $item);
	}
}

 ?>