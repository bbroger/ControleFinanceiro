<?php

if (isset($_REQUEST['logar'])) {


    $usuario = $_REQUEST['usuario'];
    $senha = $_REQUEST['senha'];
    $uri = "mongodb://waltim:123456@ds047762.mongolab.com:47762/minhaconta";
    $options = array("connectTimeoutMS" => 30000);
    $mongo = new Mongo($uri, $options );
//    $mongo = new Mongo();
    $db = $mongo->conta;
    $user = $db->conta->findOne(array("usuario" => $usuario, "senha" => $senha));


    if ($user == 0) {
        echo 'Usuario ou senha incorreta!';
    } else {
        $_SESSION['usuario'] = $usuario;
        $_SESSION['senha'] = $senha;

        header("location: admin.php");
    }
}

?>
