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

    public $validate = [
         "name" => [
            "rule1" => [
                "rule" => "notBlank",
                "message" => "Name not empty !",
            ],
            "rule2" => [
                "rule"=> ['lengthBetween', 6, 10],
                "message" => "Name must be between 5 and 15 characters long."
            ],
            "rule3" => [
                "rule"=>"isUnique",
                "message" => "Your Username have already existed "
            ],
        ],
        "phone" => [
            "rule1" => [
                "rule" => "notBlank",
                "message" => "Phone not empty !",
            ],
            "rule2" => [
                "rule"=> ['lengthBetween', 10, 11],
                "message" => "Phone must be between 10 and 11 characters long."
            ],
            "rule3" => [
                "rule"=>"Numeric",
                "message" => "Phone number should be numeric"
            ],
        ],
        "email" => [
            "rule1" => [
                "rule" => "notBlank",
                "message" => "Email not empty !",
            ],
            "rule2" => [
                "rule"=>"email",
                "message" => "Please enter a valid email address"
            ],
        ],
        "iduser" => [
            "rule" => "notBlank", "message" => "id not empty !"
        ]
    ];

    /**
     * @return array|null
     * List All users
     */
    public function getList() {
        return $this->find('all');
    }

    /**
     * @param $id
     * delete user
     */
    public function deleteUser($id){
        $this->deleteAll(['id'=>$id]);
    }

    /**
     * @param $data
     * @param $id
     *  Update User
     */
    public function updateUser($data,$id){
        $this->updateAll($data,['id'=>$id]);
    }

    /**
     * @param $data
     * Create User
     */
    public function createUser($data){
        $this->save($data);
    }

    /**
     * @var string
     *  Relationship: one to many
     */
    public $hasMany = 'Book';

}

