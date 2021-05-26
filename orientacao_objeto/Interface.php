<?php

require './class/Dominio.php';
require './class/EmpresaX.php';

$senac = new EmpresaX();
echo "O endereço do site é ".$senac->site."<br>";
echo "A empresa é ".$senac->empresa;

echo "<br>O nome da empresa é ". Dominio::$nomeEmpresa;