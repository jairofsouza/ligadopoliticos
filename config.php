<?php include 'properties.php';
	
	$host = getProperty("db.host=");
	$user = getProperty("db.user=");
	$pass = getProperty("db.pass=");
	$pltc = getProperty("db.pltc=");
	
	$conexao = mysql_connect($host,$user,$pass);
	if(!$conexao){
    		die('Não foi possível conectar: ' . mysql_error());
	}
	echo 'Conexão bem sucedida';

	//$conexao = mysql_connect("localhost","root","");
	mysql_select_db($pltc, $conexao);
	mysql_set_charset("utf8");

?>
