<?php
/**
 * Created by PhpStorm.
 * User: Walter
 * Date: 29/06/2015
 * Time: 10:58
 */
require 'vendor/autoload.php';
class calculadora3Test extends PHPUnit_Framework_TestCase {

    public function testSomar()
    {
        $classe = new calculadora3();
        $soma = $this->assertEquals(4,$classe->somar(2, 2),'Resultado invalido!');
        echo '2 mais 2 = ' . $classe->somar(2, 2).'<br>';
    }
    public function testSubtrair()
    {
        $classe = new calculadora3();
        $subtrair = $this->assertEquals(2,$classe->subtrair(4, 2),'Resultado invalido!!');
        echo '4 menos 2 = ' . $classe->subtrair(4, 2).'<br>';
    }
    public function testDividir()
    {
        $classe = new calculadora3();
        $divisao = $this->assertEquals(3,$classe->dividir(6, 2),'Resultado invalido!!');
        echo '6 dividido por 2 = ' . $classe->dividir(6, 2).'<br>';
    }
    public function testMultiplicar()
    {
        $classe = new calculadora3();
        $multiplicacao = $this->assertEquals(8,$classe->multiplicar(4, 2),'Resultado invalido!');
        echo '4 vezes 2 = ' . $classe->multiplicar(4, 2) .'<br>';
    }
    public function testSomarArray()
    {
        $classe = new calculadora3();
        $resultado = $this->assertEquals(6,$classe->somarArray([1,2,3]),'Resultado invalido!');
        echo 'a soma dos numeros da lista é de = ' . $classe->somarArray([1,2,3]) .'<br>';
    }
    public function testSubtrairArray()
    {
        $classe = new calculadora3();
        $resultado = $this->assertEquals(-6,$classe->subtrairArray([1,2,3]),'Resultado invalido!');
        echo 'a subtração dos numeros da lista é de = ' . $classe->subtrairArray([1,2,3]) .'<br>';
    }
    public function testDividirArray()
    {
        $classe = new calculadora3();
        $resultado = $this->assertEquals(0,$classe->dividirArray([1,2,3]),'Resultado invalido!');
        echo 'a divisão dos numeros da lista é de = ' . $classe->dividirArray([1,2,3]) .'<br>';
    }
    public function testMultiplicarArray()
    {
        $classe = new calculadora3();
        $resultado = $this->assertEquals(12,$classe->multiplicarArray([2,2,3]),'Resultado invalido!');
        echo 'a multiplicação dos numeros da lista é de = ' . $classe->multiplicarArray([2,2,3]) .'<br>';
    }
    public function testSomarArrayVazio()
    {
        $classe = new calculadora3();
        $resultado = $this->assertEquals(0,$classe->somarArrayVazio([]),'Resultado invalido!');
        echo 'a soma com lista vazia é = ' . $classe->somarArrayVazio([]) .'<br>';
    }
    public function testSubtrairArrayVazio()
    {
        $classe = new calculadora3();
        $resultado = $this->assertEquals(0,$classe->subtrairArrayVazio([]),'Resultado invalido!');
        echo 'a subtração com lista vazia é = ' . $classe->subtrairArrayVazio([]) .'<br>';
    }
    public function testDividirArrayVazio()
    {
        $classe = new calculadora3();
        $resultado = $this->assertEquals(0,$classe->dividirArrayVazio([]),'Resultado invalido!');
        echo 'a divisão com lista vazia é = ' . $classe->dividirArrayVazio([]) .'<br>';
    }
    public function testMultiplicarArrayVazio()
    {
        $classe = new calculadora3();
        $resultado = $this->assertEquals(0,$classe->multiplicarArrayVazio([]),'Resultado invalido!');
        echo 'a multiplicação com lista vazia é = ' . $classe->multiplicarArrayVazio([]) .'<br>';
    }
    public function testSomarDoisResultados()
    {
        $classe = new calculadora3();
        $soma = $this->assertEquals(8,$classe->somarDoisResultados(2, 2),'Resultado invalido!');
        echo 'A soma dos resultados é = ' . $classe->somarDoisResultados(2, 2).'<br>';
    }
    public function testSubtrairDoisResultados()
    {
        $classe = new calculadora3();
        $subtrair = $this->assertEquals(0,$classe->subtrairDoisResultados(4, 2),'Resultado invalido!!');
        echo 'A subtração dos resultados é = ' . $classe->subtrairDoisResultados(4, 2).'<br>';
    }
    public function testDividirDoisResultados()
    {
        $classe = new calculadora3();
        $divisao = $this->assertEquals(1,$classe->dividirDoisResultados(6, 2),'Resultado invalido!!');
        echo 'A divisão dos resultados é = ' . $classe->dividirDoisResultados(6, 2).'<br>';
    }
    public function testMultiplicarDoisResultados()
    {
        $classe = new calculadora3();
        $multiplicacao = $this->assertEquals(64,$classe->multiplicarDoisResultados(4, 2),'Resultado invalido!');
        echo 'A multiplicação dos resultados é = ' . $classe->multiplicarDoisResultados(4, 2) .'<br>';
    }
    public function testEquacaoDeSegundoGrau()
    {
        $classe = new calculadora3();
        $Equacao = $this->assertEquals('3 é o valor do x1, e o de x2 é 2',$classe->equacaoDeSegundoGrau(1,-5,6),'Resultado invalido!');
        echo 'os valores de x1 e x2 respectivamente são: ' . $classe->equacaoDeSegundoGrau(1,-5,6) .'<br>';
    }
    public function testPorcentagem10()
    {
        $classe = new calculadora3();
        $resultado = $this->assertEquals(10,$classe->porcentagem10(100),'Resultado invalido!');
        echo '10% de 100 é: '.$classe->porcentagem10(100).'<br>';
    }
    public function testPorcentagem20()
    {
        $classe = new calculadora3();
        $resultado = $this->assertEquals(20,$classe->porcentagem20(100),'Resultado invalido!');
        echo '20% de 100 é: '.$classe->porcentagem20(100).'<br>';
    }
    public function testPorcentagem30()
    {
        $classe = new calculadora3();
        $resultado = $this->assertEquals(30,$classe->porcentagem30(100),'Resultado invalido!');
        echo '30% de 100 é: '.$classe->porcentagem30(100).'<br>';
    }
    public function testPorcentagem40()
    {
        $classe = new calculadora3();
        $resultado = $this->assertEquals(40,$classe->porcentagem40(100),'Resultado invalido!');
        echo '40% de 100 é: '.$classe->porcentagem40(100).'<br>';
    }
    public function testPorcentagem50()
    {
        $classe = new calculadora3();
        $resultado = $this->assertEquals(50,$classe->porcentagem50(100),'Resultado invalido!');
        echo '50% de 100 é: '.$classe->porcentagem50(100).'<br>';
    }
    public function testPorcentagem60()
    {
        $classe = new calculadora3();
        $resultado = $this->assertEquals(60,$classe->porcentagem60(100),'Resultado invalido!');
        echo '60% de 100 é: '.$classe->porcentagem60(100).'<br>';
    }
    public function testPorcentagem70()
    {
        $classe = new calculadora3();
        $resultado = $this->assertEquals(70,$classe->porcentagem70(100),'Resultado invalido!');
        echo '70% de 100 é: '.$classe->porcentagem70(100).'<br>';
    }
    public function testPorcentagem80()
    {
        $classe = new calculadora3();
        $resultado = $this->assertEquals(80,$classe->porcentagem80(100),'Resultado invalido!');
        echo '80% de 100 é: '.$classe->porcentagem80(100).'<br>';
    }
    public function testPorcentagem90()
    {
        $classe = new calculadora3();
        $resultado = $this->assertEquals(90,$classe->porcentagem90(100),'Resultado invalido!');
        echo '90% de 100 é: '.$classe->porcentagem90(100).'<br>';
    }
    public function testCosAmaisB() {
        $classe = new calculadora3();
        $result = $this->assertEquals(0.09,$classe->cosAmaisB(0.9,0.6,0.9,0.5),'Resultado invalido!');
        echo 'Cosseno de ( A + B ) é = ' .$classe->cosAmaisB(0.9,0.6,0.9,0.5) .'<br>';
    }
    public function testCosAmenosB() {
        $classe = new calculadora3();
        $result = $this->assertEquals(0.99,$classe->cosAmenosB(0.9,0.6,0.9,0.5),'Resultado invalido!');
        echo 'Cosseno de ( A - B ) é = ' .$classe->cosAmenosB(0.9,0.6,0.9,0.5) .'<br>';
    }
    public function testSenAmenosB() {
        $classe = new calculadora3();
        $result = $this->assertEquals(0.09,$classe->senMenosB(0.9,0.6,0.9,0.5),'Resultado invalido!');
        echo 'Seno de ( A - B ) é = ' .$classe->senMenosB(0.9,0.6,0.9,0.5) .'<br>';
    }
    public function testSenAmaisB() {
        $classe = new calculadora3();
        $result = $this->assertEquals(0.99,$classe->senAmaisB(0.9,0.6,0.9,0.5),'Resultado invalido!');
        echo 'Seno de ( A + B ) é = ' .$classe->senAmaisB(0.9,0.6,0.9,0.5) .'<br>';
    }
    public function testQuebrarSequenciaCaracter() {
        $classe = new calculadora3();
        $frase = "Quebra uma seqüência";
        $result = $this->assertEquals('Quebra uma seqüência',$classe->quebrarSequenciaCaracter($frase),'Resultado invalido!');
    }
    public function testCalculaRaizQuadrada() {
        $classe = new calculadora3();
        $numero = 64;
        $result = $this->assertEquals(8,$classe->calculaRaizQuadrada($numero),'Resultado invalido!');
        echo '<br>'.'A raiz de 64 é: '.$classe->calculaRaizQuadrada($numero).'<br>';
    }
    public function testPorcentagem15()
    {
        $classe = new calculadora3();
        $resultado = $this->assertEquals(15,$classe->porcentagem15(100),'Resultado invalido!');
        echo '15% de 100 é: '.$classe->porcentagem15(100).'<br>';
    }
    public function testPorcentagem25()
    {
        $classe = new calculadora3();
        $resultado = $this->assertEquals(25,$classe->porcentagem25(100),'Resultado invalido!');
        echo '25% de 100 é: '.$classe->porcentagem25(100).'<br>';
    }
    public function testPorcentagem35()
    {
        $classe = new calculadora3();
        $resultado = $this->assertEquals(35,$classe->porcentagem35(100),'Resultado invalido!');
        echo '35% de 100 é: '.$classe->porcentagem35(100).'<br>';
    }
    public function testPorcentagem45()
    {
        $classe = new calculadora3();
        $resultado = $this->assertEquals(45,$classe->porcentagem45(100),'Resultado invalido!');
        echo '45% de 100 é: '.$classe->porcentagem45(100).'<br>';
    }
    public function testPorcentagem55()
    {
        $classe = new calculadora3();
        $resultado = $this->assertEquals(55,$classe->porcentagem55(100),'Resultado invalido!');
        echo '55% de 100 é: '.$classe->porcentagem55(100).'<br>';
    }
    public function testPorcentagem11()
    {
        $classe = new calculadora3();
        $resultado = $this->assertEquals(11,$classe->porcentagem11(100),'Resultado invalido!');
        echo '11% de 100 é: '.$classe->porcentagem11(100).'<br>';
    }
    public function testPorcentagem12()
    {
        $classe = new calculadora3();
        $resultado = $this->assertEquals(12,$classe->porcentagem12(100),'Resultado invalido!');
        echo '12% de 100 é: '.$classe->porcentagem12(100).'<br>';
    }
    public function testPorcentagem22()
    {
        $classe = new calculadora3();
        $resultado = $this->assertEquals(22,$classe->porcentagem22(100),'Resultado invalido!');
        echo '22% de 100 é: '.$classe->porcentagem22(100).'<br>';
    }
    public function testPorcentagem37()
    {
        $classe = new calculadora3();
        $resultado = $this->assertEquals(37,$classe->porcentagem37(100),'Resultado invalido!');
        echo '37% de 100 é: '.$classe->porcentagem37(100).'<br>';
    }
    public function testPorcentagem42()
    {
        $classe = new calculadora3();
        $resultado = $this->assertEquals(42,$classe->porcentagem42(100),'Resultado invalido!');
        echo '42% de 100 é: '.$classe->porcentagem42(100).'<br>';
    }
    public function testEquacaoDeSegundoGrau2()
    {
        $classe = new calculadora3();
        $Equacao = $this->assertEquals('3 é o valor do x1, e o de x2 é 2',$classe->equacaoDeSegundoGrau2(1,-5,6),'Resultado invalido!');
        echo 'os valores de x1 e x2 respectivamente são: ' . $classe->equacaoDeSegundoGrau2(1,-5,6) .'<br>';
    }
    public function testEquacaoDeSegundoGrau3()
    {
        $classe = new calculadora3();
        $Equacao = $this->assertEquals('3 é o valor do x1, e o de x2 é 2',$classe->equacaoDeSegundoGrau3(1,-5,6),'Resultado invalido!');
        echo 'os valores de x1 e x2 respectivamente são: ' . $classe->equacaoDeSegundoGrau3(1,-5,6) .'<br>';
    }
    public function testEquacaoDeSegundoGrau4()
    {
        $classe = new calculadora3();
        $Equacao = $this->assertEquals('3 é o valor do x1, e o de x2 é 2',$classe->equacaoDeSegundoGrau4(1,-5,6),'Resultado invalido!');
        echo 'os valores de x1 e x2 respectivamente são: ' . $classe->equacaoDeSegundoGrau4(1,-5,6) .'<br>';
    }
    public function testQuebrarSequenciaCaracter2() {
        $classe = new calculadora3();
        $frase = "Teste de quebra de texto 2";
        $result = $this->assertEquals('Teste de quebra de texto 2',$classe->quebrarSequenciaCaracter2($frase),'Resultado invalido!');
    }
    public function testQuebrarSequenciaCaracter3() {
        $classe = new calculadora3();
        $frase = "Teste de quebra de texto 3";
        $result = $this->assertEquals('Teste de quebra de texto 3',$classe->quebrarSequenciaCaracter3($frase),'Resultado invalido!');
    }
    public function testQuebrarSequenciaCaracter4() {
        $classe = new calculadora3();
        $frase = "testando um metodo chato de teste";
        $result = $this->assertEquals('testando um metodo chato de teste',$classe->quebrarSequenciaCaracter4($frase),'Resultado invalido!');
    }
    public function testQuebrarSequenciaCaracter5() {
        $classe = new calculadora3();
        $frase = "Já cansei de fazer porra de teste";
        $result = $this->assertEquals('Já cansei de fazer porra de teste',$classe->quebrarSequenciaCaracter5($frase),'Resultado invalido!');
    }
    public function testSomar2()
    {
        $classe = new calculadora3();
        $soma = $this->assertEquals(4,$classe->somar2(2, 2),'Resultado invalido!');
        echo '2 mais 2 = ' . $classe->somar2(2, 2).'<br>';
    }
    public function testSomar3()
    {
        $classe = new calculadora3();
        $soma = $this->assertEquals(4,$classe->somar3(2, 2),'Resultado invalido!');
        echo '2 mais 2 = ' . $classe->somar3(2, 2).'<br>';
    }
    public function testSomar4()
    {
        $classe = new calculadora3();
        $soma = $this->assertEquals(4,$classe->somar4(2, 2),'Resultado invalido!');
        echo '2 mais 2 = ' . $classe->somar4(2, 2).'<br>';
    }
}
 