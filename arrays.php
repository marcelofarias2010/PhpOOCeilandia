<?php

$carros = array("Fiat", "Ford", "BMW", "Volks", "Mercedes", "Audi");
$qntdCar = count($carros);
$numbers = array(4, 6, 2, 22, 11);
sort($numbers); // ordena um array indexado em ordem ascendente
rsort($carros); // ordena um array indexado em ordem descendente

list($car1,$car2,$car3,$car4,$car5,$car6) = $carros;

echo $car1."<br>";
echo $car2."<br>";
echo $car3."<br>";
echo $car4."<br>";

//foreach ($carros as $value) {
//    echo "$value <br>";
//}

$idades = array("Marcelo" => "40", "João" => "35", "Peter" => "35", "Ben" => "37", "Joe" => "43");
$idades['Marcos'] = "21";
$idades['Maria'] = "27";
$idades['Daniel'] = "80";

asort($idades); // ordena o valor em ordem ascedente
ksort($idades); // ordena a chave em ordem ascedente
arsort($idades); // ordena o valor em ordem descendente
krsort($idades); // ordena a chave em ordem descendente

//foreach ($idades as $key => $value) {
//    echo "$value <br>";
//}

$cars = array(array("Volvo", 22, 18), array("BMW", 15, 13), array("Saab", 5, 2), array("Land Rover", 17, 15));

//for ($row = 0; $row < 4; $row++) {
//    echo "<p><b>Linha nº $row</b></p>";
//    echo "<ul>";
//    for ($col = 0; $col < 3; $col++) {
//        echo "<li>" . $cars[$row][$col] . "</li>";
//    }
//    echo "</ul>";
//}
//
//for ($row = 0; $row < 4; $row++) {
//    echo "<table border=1>";
//    echo "<tr>";
//    for ($col = 0; $col < 3; $col++) {
//        echo "<td>" . $cars[$row][$col] . "</td>";
//    }
//    echo "</tr>";
//    echo "</table>";
//}