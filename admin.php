<?php session_start(); ?>

<?php

if((!isset ($_SESSION['usuario']) == true) && (!isset ($_SESSION['senha']) == true)) 
{ 
unset($_SESSION['usuario']); 
unset($_SESSION['senha']);
header("location:index.php"); 
}

?>

<!doctype html>

<html>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="estilo2.css"/>
<head> 
 <title>admin</title>


</head>

<body>

<?php 

$secao_usuario = $_SESSION['usuario'];
$secao_senha = $_SESSION['senha'];
?>
<?php
if(isset($_REQUEST['sair'])){

    session_destroy();
    header("location:index.php");
}
?>

<div id="topo">
    <table>
        <tr>
    <td><h1> Logado como : <?php  echo $secao_usuario; ?></h1></td>
            <td><a href="?sair"><img src="logout-button-md.png"></a></td>
        </tr>
    </table>
</div>

<div id="media">
    <form action="" method="POST">
    <h3>Preencha os valores dos campos como o exemplo a baixo:</h3>
   <h2>EX: "99.999,9"</h2>
   <h2> Os campos que não tiveram gastos, devem ser preenchidos com : "0.00" </h2>

    </form>
        <br />
        <br />
        <br />

         <fieldset>
		<legend>Calcule seus gastos mensais</legend>
		<form action="form.php" method="POST">

            <label for="num0">Digite seu(ua) salário/renda mensal:
            <input name="num0" required="required" placeholder="R$ '99.999,9' "/> </label><br /><br /><br />

			<label for="num1">Alguel/Prestação:
            <input name="num1" required="required" placeholder="R$ '99.999,9' "/></label> <br />

            <label for="num2">Empréstimo Sobre Valor da Casa:
            <input name="num2" required="required" placeholder="R$ '99.999,9' " /></label> <br />

            <label for="num3">Água,Esgoto,Lixo:
            <input name="num3" required="required" placeholder="R$ '99.999,9'"/></label> <br />

            <label for="num4">Telefone , Celular:
            <input name="num4" required="required" placeholder="R$ '99.999,9' " /></label> <br />

            <label for="num5">Condomínio:
            <input name="num5" required="required" placeholder="R$ '99.999,9' "/></label> <br />

            <label for="num6">IPTU:
            <input name="num6" required="required" placeholder="R$ '99.999,9' "/></label> <br />

            <label for="num7">Seguro:
            <input name="num7" required="required" placeholder="R$ '99.999,9' " /></label> <br />

            <label for="num8">Convenio:
            <input name="num8" required="required" placeholder="R$ '99.999,9' "/></label> <br />

            <label for="num9">Televisão por Assinatura:
            <input name="num9" required="required" placeholder="R$ '99.999,9' " /></label> <br />

            <label for="num10">Casa(Mercado, Móveis , Eletrodomésticos, etc.):
            <input name="num10"required="required"  placeholder="R$ '99.999,9' "/></label> <br />

            <label for="num11">Manutenção / Reparo de casa:
            <input name="num11" required="required" placeholder="R$ '99.999,9' "/></label> <br />

            <label for="num12">Internet:
            <input name="num12" required="required" placeholder="R$ '99.999,9' " /></label> <br />

            <label for="num13">Limpeza da casa:
            <input name="num13"required="required" placeholder="R$ '99.999,9' "/></label> <br />

            <label for="num14">Passagem de ônibus/trem:
            <input name="num14" required="required" placeholder="R$ '99.999,9' " /></label> <br />

            <label for="num15">Táxi:
            <input name="num15" required="required" placeholder="R$ '99.999,9' "/></label> <br />

            <label for="num16">Prestação do carro:
            <input name="num16" required="required" placeholder="R$ '99.999,9' "/></label> <br />

            <label for="num17">Combustível:
            <input name="num17"required="required" placeholder="R$ '99.999,9' " /></label> <br />

            <label for="num18">Manutenção do carro:
            <input name="num18"required="required" placeholder="R$ '99.999,9' "/></label> <br />

            <label for="num19">IPVA:
            <input name="num19" required="required" placeholder="R$ '99.999,9' " /></label> <br />

            <label for="num20">Reparo para o carro:
            <input name="num20" required="required" placeholder="R$ '99.999,9' "/></label> <br />

            <label for="num21">Manutenção do carro:
            <input name="num21"required="required" placeholder="R$ '99.999,9' "/></label> <br />

            <label for="num22">Seguro do carro:
            <input name="num22" required="required" placeholder="R$ '99.999,9' " /></label> <br />

            <label for="num23">Licenciamento:
            <input name="num23" required="required" placeholder="R$ '99.999,9' "/></label> <br />

            <label for="num24">Outros:
            <input name="num24" required="required" placeholder="R$ '99.999,9' "/></label><br/>
            <input type="submit" name="visualizar" value="Visualizar Resultado" />
            <input type="submit" name="excel" value="Salvar Resultado" />
		</form>

         </fieldset>
	</div>

</body>
</html>