<?php
App::uses('AppController', 'Controller');

/**
 * Class BooksController
 * @property Book Book
 *
 */

class BooksController extends AppController {
    var $uses = ['Book'];

    /**
     * List books from books table
     */
    public function index() {
        $data = $this->Book->getList();
        $this->set('data',$data);
    }
}