<?php

require_once 'models/Category.php';
require_once 'Utils.php';

$categorie1 = new Category('1', 'Мяч');

echo $categorie1->getName();
echo '<br>';
echo $categorie1->getSlug();

echo '<br>';
echo $categorie1->setName('Гантеля');
echo $categorie1->getName();
echo '<br>';
echo $categorie1->getSlug();
