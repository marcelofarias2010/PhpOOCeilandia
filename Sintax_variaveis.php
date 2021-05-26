<?php

$num1 = 5;
$num2 = 2;

$soma = $num1 + $num2;
$sub = $num1 - $num2;
$div = $num1 / $num2;
$mult = $num1 * $num2;
$exp = $num1 ** $num2;
$mod = $num1 % $num2;

$soma /= $num2;

echo "A soma é ".$soma."<br>";
echo "A subtração é ".$sub."<br>";
echo "A divisão é ".$div."<br>";
echo "A multiplicação é ".$mult."<br>";
echo "A exponenciação é ".$exp."<br>";
echo "O resto da divisão é ".$mod."<br>";
