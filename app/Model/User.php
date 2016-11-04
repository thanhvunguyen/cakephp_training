<?php
/**
 * Created by PhpStorm.
 * User: Win_64
 * Date: 11/3/2016
 * Time: 2:14 PM
 */
class User extends AppModel {
   // public $validate = array("name" => array("rule" => array('lengthBetween', 6, 10),"message" => "Email not empty !"));
    var $name = "User";
    public $validate = array();
    function validateUser()
    {
        $this->validate = array(
            "name" => array(
                "dk1" => array(
                    "rule" => "notBlank",
                    "message" => "Name không rỗng !",
                ),
                "dk2" => array(
                    "rule"=> array('lengthBetween', 6, 10),
                    "message" => "Name trong khoảng 6 đến 10 kí tự"
                ),

            ),
            "iduser" => array("rule" => "notBlank", "message" => "id not empty !"));
        if($this->validates($this->validate))
            return TRUE;
        else
            return FALSE;
    }

}

