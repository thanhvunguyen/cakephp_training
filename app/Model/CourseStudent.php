<?php
/**
 * Created by PhpStorm.
 * User: Win_64
 * Date: 11/7/2016
 * Time: 9:53 PM
 */
class CourseStudent extends AppModel {
    var $name = "CourseStudent";
    public $belongsTo = array(
        'Student', 'Course'
    );
}