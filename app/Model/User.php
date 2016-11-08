<?php

/**
 * Class User
 *
 * description
 * validate data from users table
 *
 */
class User extends AppModel {

    var $name = "User";

    public $validate = array("name" => array(
        "rule1" => array(
            "rule" => "notBlank",
            "message" => "Name not empty !",
        ),
        "rule2" => array(
            "rule"=> array('lengthBetween', 6, 10),
            "message" => "Name must be between 5 and 15 characters long."
        ),
        "rule3" => array(
            "rule"=>"isUnique",
            "message" => "Your Username have already existed "
        ),
    ),
        "phone" => array(
            "rule1" => array(
                "rule" => "notBlank",
                "message" => "Phone not empty !",
            ),
            "rule2" => array(
                "rule"=> array('lengthBetween', 10, 11),
                "message" => "Phone must be between 10 and 11 characters long."
            ),
            "rule3" => array(
                "rule"=>"Numeric",
                "message" => "Phone number should be numeric"
            ),
        ),
        "email" => array(
            "rule1" => array(
                "rule" => "notBlank",
                "message" => "Email not empty !",
            ),

            "rule2" => array(
                "rule"=>"email",
                "message" => "Please enter a valid email address"
            ),
        ),
        "iduser" => array("rule" => "notBlank", "message" => "id not empty !"));

    /**
     * @return array|null
     */
    public function getList() {
        return $this->find('all');
    }

}

