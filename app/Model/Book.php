<?php
/**
 * Created by PhpStorm.
 * User: Win_64
 * Date: 11/7/2016
 * Time: 3:04 PM
 */
class Book extends AppModel{
    var $name = "Book";
    public $belongsTo = array(
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'user_id'
        )
    );
}