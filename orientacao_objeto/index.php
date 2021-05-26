<?php

include __DIR__."/class/Frutas.php";
include __DIR__."/class/Morango.php";
include __DIR__."/class/Manga.php";

$morango = new Morango();
$morango->setNome("Morango azedo");
$morango->setCor("Verde");

$manga = new Manga();
$manga->setNome("Manga Rosa");
$manga->setCor("Rosa");


$morango->intro();
echo '<br> <b>'.$morango->getNome().'</b><br>';
$morango->mensagem();
echo '<br> <b>'.$morango->getCor().'</b><br>';
$manga->intro();
echo '<br> <b>'.$manga->getNome().'</b><br>';
$manga->mensagem();
echo '<br> <b>'.$manga->getCor().'</b><br>';

echo $morango::RECEITA;
