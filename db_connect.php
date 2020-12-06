<?php
//conexao
$servername = "localhost";
$username = "root";
$password = "";
$db = "crud";

$connect = mysqli_connect($servername,$username, $password, $db);
mysqli_set_charset($connect, "utf8");

if (mysqli_connect_error()): 
	echo "Erro na conexao".mysqli_connect_error();
endif;