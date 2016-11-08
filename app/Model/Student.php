<?php
/**
 * Created by PhpStorm.
 * User: Win_64
 * Date: 11/7/2016
 * Time: 4:26 PM
 */
class Student extends AppModel{
    var $name = "Student";
    public $hasMany = array(
        'CourseStudent'
    );
}