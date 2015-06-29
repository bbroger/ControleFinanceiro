<?php

require_once 'PHPUnit/Extensions/SeleniumTestCase.php';

class NavegadorTest extends PHPUnit_Extensions_SeleniumTestCase
{
    protected function setUp()
    {
        $this->setBrowser('*chrome'); // indicando qual browser ele vai usar
        $this->setBrowserUrl('http://localhost/ControleFinanceiro/'); // Qual é a URL que ele vai usar
    }

    public function testTitle()
    {
        $this->open('/'); // Com base no setBrowserURL
        $this->assertTitle('Logar'); // Verificando se o títuo é este
    }
}

?>