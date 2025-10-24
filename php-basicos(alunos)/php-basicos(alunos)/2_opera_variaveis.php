<?php

//Montagem de url
// http://localhost/php_basico/2_opera_variaveis.php/?numero1=10&numero2=5

//  Variáveis que recebem valores pela URL (Metodo GET)
$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];

if (isset($numero1) && ($numero2)) {
    $numero1 = (int)$numero1;
    $numero2 = (int)$numero2;
}

//Calculos
$soma = $numero1 + $numero2;
$multiplicacao = $numero1 * $numero2;

//Exibe
echo "Soma: $soma <br>";
echo "Multiplicação: $multiplicacao <br>";

?>