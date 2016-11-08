<?php
App::uses('AppController', 'Controller');

/**
 * Class UsersController
 *
 * @property User User
 */
class UsersController extends AppController {
    var $uses = ['User'];

    var $helpers = [
        'Html',
        'Form'
    ];

    var $components = ['Flash'];

    /**
     * Function get list .....
     * from .... tables
     */
    public function index() {
        $data = $this->User->getList();

        $this->set("data",$data);
    }

    /**
     * @param null $id
     * @return bool
     */
    public function update($id = null) {
        if (empty($this->data)) {
            return false;
        }

        $this->User->set($this->data);

        if ($this->data) {
            if ($this->User->validateUser() == true) {
                $id = $this->data['User']['userId'];
                $username = $this->data['User']['name'];

                $this->User->updateAll(
                    ['User.name' => "'$username'"],
                    ['User.id' => $id]
                );

                $this->redirect("index");
            } else {
                $this->Flash->set("Action can't be performed !! Fields are in-correct");
            }
        }

        $this->User->id = $id;
        $data = $this->User->findById($id);

        $this->set("data",$data);
    }

    /**
     *
     */
    public function create() {
        if (empty($this->data)) {
            return false;
        }

        $this->User->set($this->data);
        if ($this->data) {
            if ($this->User->validateUser() == true) {
                $this->User->save($this->data);

                $this->redirect("index");
            } else {
                $this->Flash->set("Action can't be performed  !! Fields are in-correct");
            }
        }
    }

    /** TODO: now don't need */
    public function info(){

    }

    /**
     * @param null $id
     */
    public function delete ($id = null) {

        /** TODO: validate id (integer, exist in DB) */

        $this->User->id = $id;
        $this->User->deleteAll(array('id'=>$id));

        // Message bao thanh cong sau khi xoa

        $this->redirect("index");
    }

}
