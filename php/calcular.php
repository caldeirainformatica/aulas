<?php

$nome = $_GET['nome'];
$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];
$numero3 = $_GET['numero3'];

$total = $numero1 + $numero2 + $numero3;

echo "<h1>Seu nome é $nome é o total dos numeros é $total </h1>";