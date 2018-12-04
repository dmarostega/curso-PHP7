<?php 

require_once("config.php");

use Cliente\Cadastro;

$cad=new Cadastro();

$cad->setNome("Diogo M Oliveira");
$cad->setEmail("dmarostega@gmail.com.br");
$cad->setSenha("*-*****");


$cad->registrarVenda();
 ?>