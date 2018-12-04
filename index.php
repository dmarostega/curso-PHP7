<?php 

require_once("config.php");

if(isset($_GET['ndir']) && $_GET['ndir'] !== ""){
	if(!is_dir($_GET['ndir'])){
		mkdir($_GET['ndir']);
		echo "<p>Novo Diretório criado com sucesso: ".$_GET['ndir']."</p>";
	}else{
		echo "<p>Diretório ".$_GET['ndir']." já existe!! </p>";
	}
	echo "<a href=\"javascript:void(0)\"
		onclick=\"Javasript:window.location='/".HOST."'\">Return</a>";

}else{ //end isset $_GET['ndir']

$dir = scandir(__DIR__);

foreach($dir as $k => $v){

	if(!in_array($v,array(".","..",".git","index.php","config.php"))){
		if(scandir(__DIR__.DIRECTORY_SEPARATOR.$v)){
			echo "<a href=\"$v\">[".count(scandir(__DIR__.DIRECTORY_SEPARATOR.$v ))."]$v</a>";
			echo "<a style=\"color:red\" href=\"#\" onclick=\"#\">x</a><br>";
		}
	}
}
?>
<form  action="#" method="get">
	<label for="indir">Digite um nome para novo diretório: </label><br>
	<input type="text" id="indir" name="ndir" />
	<button type="submit">Testar</button>
</form>
<?php

}
?>