<?php 

require_once "config.php";
var_dump($_SESSION);


echo "<p>save_path:".session_save_path()."</p>";

echo "<p>Session status</p>";

var_dump(session_status());

switch(session_status()){
	case PHP_SESSION_DISABLED:
		echo "<p>As sessções estiverm desabilitadas</p>";
	break;

	case PHP_SESSION_NONE:
		echo "<p>as sessões estiverem habilitadas, mas nenhuma existir</p>";

	break;	

	case PHP_SESSION_ACTIVE:
		echo "<p>as sessões estiverem habilitadas, e uma existir</p>";

	break;
}


 ?>