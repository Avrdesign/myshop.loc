<?php
/**
 * Created by PhpStorm.
 * User: alexandrzanko
 * Date: 7/13/17
 * Time: 3:25 PM
 */
session_start();
require_once '../Utils.php';
require_once 'Admin.php';
require_once '../DB/DBManager.php';
require_once '../Entity/CategoriesRelation.php';
require_once '../Models/Category.php';
Admin::adminValid();

// category add to data base
$name = $_POST["name"];

$message = "Ошика сервера!";
$status = "danger";

if (empty($name)){
    $message = "Название не должно быть пустым";
}else{
    $slug = Utils::rusToLat($name);
    $categoryRelation = new CategoriesRelation();
    $category = $categoryRelation->getCategoryBySlug($categorySlug);
    if (isset($category)){
        $message = "Категории $slug существует";
        $status = "danger";
    }else{
        $category = new Category($name);
        if($categoryRelation->insertCategory($category)){
            $message = "Категория успешно добавлена!";
            $status = "success";
        }else{
            $message = "Ошибка при сохранении данных!";
            $status = "danger";
        }
    }
}

$_SESSION["message"] = array(
    "status"    =>  $status,
    "text"      =>  $message
);
header('Location:  /admin/?page=categories');
