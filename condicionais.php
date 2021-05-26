<?php
date_default_timezone_set("America/Sao_Paulo");
$tempo = Date("H");

if($tempo < "11"){
    echo "Bom dia";
}else if($tempo > "18"){
    echo "Boa noite";
}else{
    echo "Boa tarde";
}
echo "<br><br><br>";

$corfavorita = "preto";

switch ($corfavorita){
    case "preto":
        echo "sua cor favorita é preto";
        break;
    case "vermelho":
        echo "sua cor favorita é vermelho";
        break;
    case "azul":
        echo "sua cor favorita é azul";
        break;
    case "verde":
        echo "sua cor favorita é verde";
        break;
    case "amarelo":
        echo "sua cor favorita é amarelo";
        break;
    default :
        echo "sua cor favorita não é preto, vermelho, azul, verde e nem amarelo";
}