<?php
App::uses('AppController', 'Controller');

/**
 * Class UsersController
 */
class UsersController extends AppController {
    var $uses = ['User'];
    var $helpers = array("Html","Form");
    var $components = array("Flash");
    public function index() {
        $data = $this->User->find('all');
        $this->set("data",$data);
    }
    public function update($id=null){
        $this->User->set($this->data);
        if($this->data){
            if($this->User->validateUser()==TRUE)
            {
                $id=$this->data['User']['userid'];;
                $username = $this->data['User']['name'];;
                $this->User->updateAll(
                    array('User.name' => "'$username'"),
                    array('User.id' => $id)
                );
                $this->redirect("index");
                //$this->Flash->set("Action can be performed !! Fields are in-correct");
            }
            else
            {
                $this->Flash->set("Action can't be performed !! Fields are in-correct");

            }
        }
        $this->User->id=$id;
        $data = $this->User->findById($id);
        $this->set("data",$data);
    }
    public function create(){

        $this->User->set($this->data);
        if($this->data){
            if($this->User->validateUser()==TRUE)
            {
                $this->User->save($this->data);
                $this->redirect("index");
            }
            else
            {
                $this->Flash->set("Action can't be performed  !! Fields are in-correct");
            }
        }

    }
    public function info(){

    }
    public function delete($id=null){
        $this->User->id=$id;
        $this->User->deleteAll(array('id'=>$id));
        $this->redirect("index");
    }

}
