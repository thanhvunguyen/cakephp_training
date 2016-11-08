<?php

App::uses('AppController', 'Controller');

/**
 * Class CoursestudentsController
 * @property CourseStudent CourseStudent
 *  List students of a course
 */
class CoursestudentsController extends AppController {
    var $uses = ['CourseStudent'];

    /**
     * function get list students of course php (course_id = 2)
     */
    public function index(){
        $data = $this->CourseStudent->find('all',[ 'conditions' =>['CourseStudent.course_id' => 2]]);
        $this->set('data',$data);
    }
}