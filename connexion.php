<?php 
	define("DBHOSTE", "locamhost");
	define("DBNAME", "projet");
	define("DBUSER", "root");
	define("DBPASS", "1234");
try {

	$dsn="mysql:".DBNAME.",host:".DBHOSTE;
	$db = new PDO($dsn,DBUSER,DBPASS);
	$db ->exec("SET NAMES UTF-8");
	echo "connexion reussi";
} catch (Exception $e) {
	die($e->getMessage);
}
 ?>