<?php

/**
 * Created by PhpStorm.
 * User: st
 * Date: 15.06.2017
 * Time: 18:54
 */
class Categorie
{
    private $id;
    private $name;
    private $slug; //это поле будет содержать $name на латинице

    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
        $this->slug = Utils::rusToLat($name);
    }

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;

    }

    public function getSlug(){
        return $this->slug;
    }

    public function setId($id){
        return $this->id= $id;
    }

    public function setName($name){
        $this->name= $name;
        $this->slug = Utils::rusToLat($name);
    }
}