<?php

/**
 * Created by PhpStorm.
 * User: st
 * Date: 29.06.2017
 * Time: 19:39
 */
class Rout
{
    const INDEX = '';
    const BASKET = 'basket';
    const CONTACTS  = 'contacts';

    public function __construct()
    {
        $params = explode('/', $_SERVER["REQUEST_URI"]);
        if (!empty($params[2])) {
            $this->controller = new Error404Controller();
            return;
        }
        switch ($params[1]) {
            case self::INDEX :
                $this->controller = new MainController();
                break;
            case self::BASKET :
                $this->controller = new BasketController();
                break;
            case self::CONTACTS :
                $this->controller = new ContactsController();
                break;
            default:
            if (!empty($param[2]) and !Utils::regExpOnlyLettersAndNumbers()){
            echo 'error 404';
            break;
        }
        }
    }

    public function rout(){
        $this->controller->response();
    }
}