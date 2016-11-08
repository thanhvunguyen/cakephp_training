<?php
/**
 * Created by PhpStorm.
 * User: Win_64
 * Date: 11/7/2016
 * Time: 3:04 PM
 */
App::uses('AppController', 'Controller');
class BooksController extends AppController {
    var $uses = ['Book'];
    public function index() {
        $data = $this->Book->find('all');
        $this->set("data",$data);
    }
}