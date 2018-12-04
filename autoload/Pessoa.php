<?php 


class Pessoa{
	private $nome = "Diogo Oliveira";
	private $idade = 35;
	private $documento ='51515616-4458';


	function __tostring(){
		return "Cidadão de nome: ".$this->nome.", Idade: ".$this->idade."<BR> DOcumento é : ".$this->documento."<br/><br/>";
	}

}




 ?>