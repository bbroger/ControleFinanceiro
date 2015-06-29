<?php
//$conn = mysql_connect('127.0.0.1','root','') or die(mysql_error());
//$banco = mysql_select_db('conta') or die(mysql_error());

$mongo = new Mongo('mongodb://waltim:123456@ds047762.mongolab.com:47762/minhaconta');
//$mongo = new Mongo();
$db = $mongo->conta;

$colecao = $db->conta;


?>