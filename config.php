<?php
// arquivo de configurações de conexão ao banco de dados

require 'environment.php'; 

$config = array(); 

if(ENVIRONMENT == 'development') {
	define("BASE_URL", "http://localhost/estrutura_mvc/");
	//define("BASE_URL", "http://localhost/php.pc/04_SUP_AVANCADO/02_ESTRUTURA%20MVC/03_INDEX_REWRITE/")
	// configurações do servidor local
	//define("BASE_URL", "http://localhost/03_INDEX_REWRITE/");
	$config['dbname'] = 'estrutura_mvc'; 
	$config['host'] = 'localhost'; 
	$config['dbuser'] = 'root'; 
	$config['dbpass'] = ''; 

} else {
	// configurações do servidor da hospedagem
	//define("BASE_URL", "http://localhost/03_INDEX_REWRITE/");
	$config['dbname'] = 'estrutura_mvc'; 
	$config['host'] = 'localhost'; 
	$config['dbuser'] = 'root'; 
	$config['dbpass'] = ''; 
}

global $db; 

try {
	$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']); 

} catch(PDOExcaption $e) {
	echo "ERRO: ".$e->getMessage();
	exit;
}


?>