<?php

/**
 * Class CourseStudent
 * Model CourseStudent
 */
class CourseStudent extends AppModel {

    var $name = "CourseStudent";

    public $belongsTo = ['Student', 'Course'];
}