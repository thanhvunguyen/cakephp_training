<?php

/**
 * Class Book
 *  many to one: Many books belong to a user.
 */
class Book extends AppModel{

    var $name = "Book";
    /**
     * @var array
     * Relationship many to one
     */
    public $belongsTo = [
        'User' => [
            'className' => 'User',
            'foreignKey' => 'user_id'
        ]];

    /**
     * @return array|null
     *  list All Book and User
     */
    public function getList(){
        return $this->find('all');
    }
}