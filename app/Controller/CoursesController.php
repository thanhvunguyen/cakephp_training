<?php
/**
 * Created by PhpStorm.
 * User: Win_64
 * Date: 11/7/2016
 * Time: 4:51 PM
 */
App::uses('AppController', 'Controller');

/**
 * Class UsersController
 */
class CoursesController extends AppController {
    var $uses = ['CourseMembership'];
    public function index(){
        $data = $this->Course->find('all',array(
            'conditions' => array("CourseMembership.course_id" => 1)));
        $this->set("data",$data);
    }
}