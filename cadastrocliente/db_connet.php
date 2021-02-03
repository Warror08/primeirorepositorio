<?php 
$servername="localhost";
$username="root";
$password="";
$db_name="cadastrar_cliente";


$connect = mysqli_connect($servername, $username, $password, $db_name);

if(mysqli_connect_error()):
echo "Erro na conexão: ".mysql_connect_error();
endif;