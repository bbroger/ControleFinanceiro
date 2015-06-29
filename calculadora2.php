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

$secao_usuario = $_SESSION['usuario'];
$secao_senha = $_SESSION['senha'];

$html = "

<table  width='50%' border='3'>
	   <tr>
	   <td>Nome</td>
	      <td>$secao_usuario</td>
	   </tr>
	   <tr>
	      <td>Data</td>
	      <td>$data</td>

	   </tr>
	   <tr>
	      <td>Salario/Renda</td>
	      <td>$salario </td>
   </tr>
	   <tr>
	      <td>Total Gastos</td>
	      <td>$gastos</td>

	   </tr>
	    <tr>
	      <td>Salario/Renda Atual</td>
	      <td>$gastos2</td>

	   </tr>
	   <tr>
	      <td>Porcentagem de Salario/Renda Final</td>
	      <td>$porcentagem %</td>

	   </tr>
	</table>

	";

?>

<?php

   header("Content-type: application/vnd.ms-excel");


   header("Content-type: application/force-download");


	   header("Content-Disposition: attachment; filename=".$secao_usuario."-".$data.".xls");

	   header("Pragma: no-cache");

	   echo $html;

	?>

