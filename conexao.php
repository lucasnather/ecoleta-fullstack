<?php 

require_once 'global.php';

$localhost= $_ENV['HOST'];
$username= $_ENV['USERNAME'];
$password= $_ENV['PASSWORD'];
$dbname= $_ENV['DB_NAME'];

$conexao = mysqli_connect($localhost, $username, $password, $dbname);

?>