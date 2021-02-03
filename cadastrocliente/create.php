<?php 
include_once 'db_connet.php';

if(isset($_POST['btn-cadastrar'])):
$nome = mysqli_escape_string($connect, $_POST['nome']);
$apelido = mysqli_escape_string($connect, $_POST['apelido']);
$email = mysqli_escape_string($connect, $_POST['email']);
$idade = mysqli_escape_string($connect, $_POST['idade']);

$sql = "INSERT INTO cadastro(nome, apelido, email, idade) VALUES ('$nome' , '$apelido', '$email', '$idade')";
if(mysqli_query($connect, $sql));
	header('location: ../cadastro.php?sucesso');
else;
	header('location: ../cadastro.php?erro');
endif;
	endif;