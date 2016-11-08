<?php
/**
 * Created by PhpStorm.
 * User: Win_64
 * Date: 11/7/2016
 * Time: 9:52 PM
 */
App::uses('AppController', 'Controller');

/**
 * Class UsersController
 */
class CoursestudentsController extends AppController {
    var $uses = ['CourseStudent'];
    public function index(){
        $data = $this->CourseStudent->find('all',array(
            'conditions' => array("CourseStudent.course_id" => 1)));
        $this->set("data",$data);
    }
}