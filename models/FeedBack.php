<?php

/**
 * Created by PhpStorm.
 * User: st
 * Date: 15.06.2017
 * Time: 20:43
 */
class FeedBack
{
    private $id;
    private $productId;
    private $text;
    private $userName;
    private $dateCreate;
    private $rating;
    private $status;

    public function __construct($id, $productId, $text, $userName, $dateCreate, $rating, $status)
    {
        $this->id = $id;
        $this->productId = $productId;
        $this->text = $text;
        $this->userName = $userName;
        $this->dateCreate = $dateCreate;
        $this->rating = $rating;
        $this->status = $status;

    }

    public function dateCreate(){
        return $this->dateCreate;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @return mixed
     */
    public function getDateCreate()
    {
        return $this->dateCreate;
    }

    /**
     * @return mixed
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }
}