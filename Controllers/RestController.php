<?php

/**
 * Created by PhpStorm.
 * User: st
 * Date: 06.07.2017
 * Time: 19:49
 */
class RestController implements IController
{

    public function response()
    {
        if (isset($_POST["products"],$_POST["user_info"])) {

            echo json_encode(array("status" => "succesful", "order" => 3));
        }
    }
}