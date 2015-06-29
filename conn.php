<?php
//$conn = mysql_connect('127.0.0.1','root','') or die(mysql_error());
//$banco = mysql_select_db('conta') or die(mysql_error());

$mongo = new Mongo('mongodb://waltimlmm:ds4na5ck@ds047762.mongolab.com:47762/minhaconta');

$db = $mongo->conta;

$colecao = $db->conta;


?>