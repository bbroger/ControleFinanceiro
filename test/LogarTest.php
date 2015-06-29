<?php

require 'vendor/autoload.php';

class LogarTest extends PHPUnit_Extensions_SeleniumTestCase
{
    protected function setUp()
    {
        $this->setHost('localhost');
        $this->setBrowser('*chrome');
        $this->setBrowserUrl('http://localhost/ControleFinanceiro/');
    }

    public function testHasLogarform()
    {
        $this->url('index.php');

        $usuario = $this->byName('usuario');
        $senha = $this->byName('senha');

        $this->assertEquals('', $usuario->value());
        $this->assertEquals('', $senha->value());
    }

    public function testLogarFormSubmitsToAdmin()
    {
        $this->url('index.php');

        $form = $this->byCssSelector('form');
        $action = $form->attribute('action');
        $this->assertContains('admin.php',$action);

        $this->byName('usuario')->value('walter');
        $this->byName('senha')->value('123456');
        $form->submit();

        $bemvindo = $this->byCssSelector('h1')->Text();

        $this->assertEquals('Logado como : walter', $bemvindo);
    }
}

?>