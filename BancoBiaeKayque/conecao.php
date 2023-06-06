<?php
$servidor ="localhost:3306";
$usuario = "root";
$senha = "12345678";
$banco = "BD_Teste";
$comando = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha);
?>