<?php
//conexao
$servername = "ixnzh1cxch6rtdrx.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username = "y97ggnccrr89167r";
$password = "rdn20m8ld5opdhwg";
$db = "f1nzzxyvkkqvzkho";

$connect = mysqli_connect($servername,$username, $password, $db);
mysqli_set_charset($connect, "utf8");

if (mysqli_connect_error()): 
	echo "Erro na conexao".mysqli_connect_error();
endif;
