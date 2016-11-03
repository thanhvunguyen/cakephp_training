<?php
App::uses('AppController', 'Controller');

/**
 * Class UsersController
 */
class UsersController extends AppController {
    var $uses = ['User'];
    public function index() {
        $data = $this->User->find('all');
        $this->set("data",$data);
    }
    public function update(){
        $this->User->updateAll(
            array('User.name' => "'dong'"),
            array('User.id' => 2)
        );
        }
    public function create(){
        $name = 'Foo';


        $this->User->save(
            array(
                'name' => $name

            )
        );
    }
    public function delete(){
        $this->User->deleteAll(array('id'=>1));
    }
}