<?php session_start(); include 'conn.php';?>
<!doctype html>

<html lang="pt-br">
<meta charset="utf-8">
<head> 
 <title>Logar</title>
<link rel="stylesheet" type="text/css" href="estilo.css"/>

</head>

<body>
<div id="topo">
    <table>
        <tr>
            <td>
                <h1>Controle Finaceiro</h1>
            </td>
        </tr>
    </table>
</div>

<div id="formulario">
<form name="form" method="post" enctype="multipart"/form-data" id="form">

    <label>Usuario</label>
<input type="password" name="usuario" id="usuario" required="required" placeholder="Nome de usuario">
<br/>
    <br/><label>Senha</label>
<input type="password" name="senha" id="senha" required="required" placeholder="Sua senha">
<br/>
<br/>
<input type="submit" name="logar" id="logar" value="Logar">

</form>
    <a href="cadastro.php"><img src="cadastrar.jpg"></a>
<?php include 'logar.php'; ?>
</div> 
</body>
</html>