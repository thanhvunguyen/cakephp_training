<?php
/**
 * Created by PhpStorm.
 * User: Win_64
 * Date: 11/7/2016
 * Time: 4:51 PM
 */
class Course extends AppModel{
    var $name = "Course";
    public $hasMany = array(
        'CourseStudent'
    );
}