<!doctype html>

<html lang="pt-br">
<meta charset="utf-8">
<head>
    <title>Novo Usuário</title>
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
    <form name="form" action="registrar.php" method="post" enctype="multipart"/form-data" id="form">
    <label>Usuario</label>
    <input type="password" name="usuario" id="usuario" required="required" placeholder="Nome de usuario">
    <br/>
    <br/><label>Senha</label>
    <input type="password" name="senha" id="senha" required="required" placeholder="Sua senha">
    <br/>
    <br/>
    <input type="submit" name="salvar" id="salvar" value="Cadastrar">

    </form>



</div>
</body>
</html>