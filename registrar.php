<?php


$conn = new MongoClient();

$db = $conn->conta;

$colecao = $db->conta;

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$usuario = array(
    "usuario" => $usuario,
    "senha" => $senha,
);
$colecao->insert($usuario);




     if($usuario!=0){

         header("location: index.php?cadastro=ok");

     }else{

         header("location: index.php?cadastro nao efetuado!");

     }






?>