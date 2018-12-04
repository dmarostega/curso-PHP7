<?php 
function __autoload($nome){
	var_dump($nome);
	require_once("$nome.php");

}


$novaPessoa = new Pessoa();

echo $novaPessoa;


 ?>