<?php 

function trataNome($name){
	if(!$name){
		throw new Exception("Nenhum nome foi informado.", 1);		
	}

	echo ucfirst($name)."<br>";
}


try {
	trataNome("Joao");
	trataNome("");
} catch (Exception $e) {
	echo "ERRO: ".$e->getMessage()."<br>";
}finally{
	echo "Executou o try!";
}


?>