<?php

/**
 * Class Student
 * Model Student
 *
 */
class Student extends AppModel{

    var $name = "Student";
    /**
     * @var array
     *  Relationship: one to many
     */
    public $hasMany = [
        'CourseStudent'
    ];
}