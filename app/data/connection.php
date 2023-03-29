<?php
// include database configuration 
require_once 'data/configuration.php';
// create a PDO object 
// une chaine de connection 
$dsn = "pgsql:host=pgdb; port=5432; dbname=appdb;";
// 
$dsn = sprintf(
    "%s:host=%s; port=%d; dbname=%s;",
    $config['drive'],
    $config['host'],
    $config['port'],
    $config['database']
);
//echo "DSN = $dsn<br>";

//create a pDO object 
// Argument:
//- A dsn
// - the user 
//- the password
// connection to database ( it is a connector to the database )
$pdo = new \PDO($dsn, $config['user'], $config['password']);
//echo "Connection ok.<br>"; 

// connect to schema postgres
if ( $config['drive']== 'pgsql'){
$sql = 'SET SEARCH_PATH TO '.$config['schema'];
//echo "SQL: $sql";
}

// Execute a Query on Postgres
// query() is a method of the PDO object 
// -> is equivalent to  . in java 
$pdo->query($sql);
?>
