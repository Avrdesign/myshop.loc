<?php
require_once 'models/Product.php';
require_once 'models/TechProduct.php';
require_once 'models/FeedBack.php';
require_once 'Utils.php';
require_once 'DB/DBManager.php';


$db = DBManager::getDB();
echo '<pre>';
var_dump($db->getAllData("users"));
echo '</pre>';









