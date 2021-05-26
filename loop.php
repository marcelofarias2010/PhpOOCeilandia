<?php

//$i = 1;
//
//do{
//    echo "<li>$i - Marcelo Farias </li>";
//    $i++;
//}while ($i <= 10);
//for($i = 1; $i <= 10; $i++){
//    echo "<li>$i - Marcelo Alves Farias </li>";
//}
//$nomes = array("Paulo","Lucas","Luciana","Bruna","Andre");
//
//foreach ($nomes as $value) {
//    echo "Nome: $value <br>";
//}
//
//foreach ($nomes as $key => $value) {
//    echo "Indice: $key - $value <br>";
//}

for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
        continue;
    }
    echo "The number is: $x <br>";
}