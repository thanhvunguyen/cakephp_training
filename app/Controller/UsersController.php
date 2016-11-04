<?php
App::uses('AppController', 'Controller');

/**
 * Class UsersController
 */
class UsersController extends AppController {
    var $uses = ['User'];
    var $helpers = array("Html","Form");
    var $components = array("Session");
    public function index() {
        $data = $this->User->find('all');
        $this->set("data",$data);
    }

     public function update(){
        $this->User->set($this->data);
        if($this->data){
            if($this->User->validateUser()==TRUE)
            {
                $id=$this->data['User']['iduser'];;
                $username = $this->data['User']['name'];;
                $this->User->updateAll(
                    array('User.name' => "'$username'"),
                    array('User.id' => $id)
                );
                $this->redirect("info");
                //$this->Session->setFlash("Dữ liệu hợp lệ!");

            }

            else
            {
                $this->Session->setFlash("Dữ liệu không hợp lệ !");

            }

        }

    }
   public function create(){
        $this->User->set($this->data);
        //echo $this->data['User']['name'];
        if($this->data){
            if($this->User->validateUser()==TRUE)
            {


                //$username = $this->data['User']['name'];
                $this->User->save($this->data);
               // $this->redirect("info");
                //$this->Session->setFlash("Dữ liệu hợp lệ!");

            }

            else
            {
                $this->Session->setFlash("Dữ liệu không hợp lệ !");

            }

        }

    }

    public function info(){

    }
    public function delete(){
        $this->User->set($this->data);

        if($this->data){
            if($this->User->validateUser()==TRUE)
            {


                $iduser= $this->data['User']['iduser'];
                $this->User->deleteAll(array('id'=>$iduser));
                $this->redirect("info");
                //$this->Session->setFlash("Dữ liệu hợp lệ!");

            }

            else
            {
                $this->Session->setFlash("Dữ liệu không hợp lệ !");

            }

        }




    }


}
