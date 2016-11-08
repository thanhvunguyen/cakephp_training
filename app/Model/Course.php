<?php

/**
 * Class Course
 *
 */
class Course extends AppModel{

    var $name = "Course";

    public $hasMany = [
        'CourseStudent'
    ];
}