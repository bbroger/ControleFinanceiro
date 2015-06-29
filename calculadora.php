<?php session_start();



if((!isset ($_SESSION['usuario']) == true) && (!isset ($_SESSION['senha']) == true)) 
{ 
unset($_SESSION['usuario']); 
unset($_SESSION['senha']);
header("location:index.php");
}

else
    if( isset($_POST['num0']) && isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['num3']) && isset($_POST['num4'])
        && isset($_POST['num5']) && isset($_POST['num6'])&& isset($_POST['num7'])&& isset($_POST['num8'])
        && isset($_POST['num9'])&& isset($_POST['num10'])&& isset($_POST['num11'])&& isset($_POST['num12'])&& isset($_POST['num13'])
        && isset($_POST['num14'])&& isset($_POST['num15'])&& isset($_POST['num16'])&& isset($_POST['num17'])&& isset($_POST['num18'])
        && isset($_POST['num19'])&& isset($_POST['num20'])&& isset($_POST['num21'])&& isset($_POST['num22'])&& isset($_POST['num23'])
        && isset($_POST['num24'])) {
        $gastos = ( $_POST['num1'] + $_POST['num2'] + $_POST['num3'] + $_POST['num4'] + $_POST['num5']+ $_POST['num6']+ $_POST['num7']
            + $_POST['num8']+ $_POST['num9']+ $_POST['num10']+ $_POST['num11']+ $_POST['num12']+ $_POST['num13']+ $_POST['num14']+
            $_POST['num15']+ $_POST['num16']+ $_POST['num17']+ $_POST['num18']+ $_POST['num19']+ $_POST['num20']+ $_POST['num21']+
            $_POST['num22']+ $_POST['num23']+ $_POST['num24']);

         $temp = str_replace('.', '', $_POST['num0']);
         $temp = str_replace(',', '.', $temp);
         $salario = str_replace('#', '.', $temp);
         $gastos2 = ($salario - $gastos );
         $porcentagem = $gastos2*100 / $salario;
         $data = date("d/m/y");


} else {
	echo "Digite os valores para calcular seus gastos!";
	echo '<a href="admin.php">Voltar</a>';
}

?>

<!doctype html>

<html>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="estilo2.css"/>
<head>
<title>Calculadora</title>


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



<div id="organizacao">
    <table>
        <tr>
            <td>

<div id="Respostas">
    <table>

        <tr>
            <td>&#8212;&nbsp;<?php echo"Data :".$data;?></td>
        </tr>

        <tr>
            <td>&#8212;&nbsp;<?php echo"Seu(Sua) salário/renda é de : R$ " .$_POST['num0'];?></td>
        </tr>
        </br>
        </br>

<tr>
        <td>&#8212;&nbsp;<?php echo "O valor total dos seus gastos foram de : R$ " . number_format($gastos,2,',','.');?></td>
</tr>
    </br>
 </br>

        <tr>
        <td>&#8212;&nbsp;<?php
echo "O que sobrou do seu salário/renda : R$ " . number_format($gastos2,2,',','.');
?></td>
        </tr>
</br>
</br>
        <tr>
        <td>&#8212;&nbsp;<?php
            echo "A porcentagem de sobra é de : " . number_format($porcentagem,2,',','.') ."%";
            if ($porcentagem >= 60)
            {
                echo '<img src="bandeira_verde.jpg" alt="bandeira_verde">';
            }
            else if ($porcentagem < 60 && $porcentagem > 40) {
                echo '<img src="bandeira_laranja.jpg" alt="bandeira_laranja">';
            }
            else if ($porcentagem <  40) {
                echo '<img src="bandeira_vermelha.jpg" alt="bandeira_vermelha">';
            }
            ?></td>


        </tr>

        </br>
</br>

    </table>

            </td>
            <td>
<div id="tabela2">
    <table>
    <tr>
        <td>    
               <img src="Capturar.PNG">

        </td>
    </tr>
    </table>
</div>
</div>
</td>
        </tr>
    </table>
<?php
echo '<br /><a href="admin.php"><img src="fechar.gif"></a>';
?>



</body>
</html>