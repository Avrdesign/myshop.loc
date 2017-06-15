<?php

/**
 * Created by PhpStorm.
 * User: st
 * Date: 15.06.2017
 * Time: 20:25
 */
class TechProduct extends Product
{
    private $categoryId;

    public function __construct($id, $name, $description, $icon, $price, $categoryId)
    {
        parent::__construct($id, $name, $description, $icon, $price);
        $this->categoryId = $categoryId;
    }

    /**
     * @return mixed
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

/*    public function getIcon()
    {
        return '/images'.parent::getIcon();
    }*/
}