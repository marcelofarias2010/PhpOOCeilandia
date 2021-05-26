<?php

include './app/Template.php';
include './web/Template.php';

use orientacao_oo\Web as T;
use App as A;

$web = new T\Template();
$app = new A\Template();

var_dump($web,$app);

