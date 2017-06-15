<?php
require_once 'models/Product.php';
require_once 'models/TechProduct.php';
require_once 'Utils.php';

$product1 = new TechProduct(1, 'Шуруповерт', 'Аккумуляторный, 12В', 'werwerr.jpg', 50, false, 2);

echo 'ID: ';
echo $product1->getId();
echo '<br>';
echo $product1->getName();
echo '<br>';
echo $product1->getDescription();
echo '<br>';
echo $product1->getIcon();
echo '<br>';
echo 'Стоимоcть: ';
echo $product1->getPrice();
echo '<br>';

echo 'Наличие на складе - ';
echo $product1->getExists() ? 'Да': 'Нет';


