<?php
App::uses('AppController', 'Controller');

/**
 * Class UsersController
 *  list user
 *  update user
 *  delete user
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
     * Function get list user
     * from users tables
     */
    public function index() {
        $data = $this->User->getList();

        $this->set("data",$data);
    }

    /**
     * function update user
     * @param null $id
     * @return bool
     */
    public function update($id = null) {
        if (empty($this->data)) {
            $this->User->id = $id;
            $data = $this->User->findById($id);
            $this->set("data",$data);
        } else {

            $this->User->set($this->data);

            if ($this->User->validates()== true) {
                $data=$this->data['User'];
                $id = $this->User->id;

                $this->User->updateUser($data,$id);

                $this->redirect("index");
            } else {
                $this->Flash->set("Action can't be performed !! Fields are in-correct");
            }
        }


    }

    /**
     * Function create User
     *
     */
    public function create() {
        if (empty($this->data)) {
            return false;
        } else {
            $this->User->set($this->data);
            if ($this->User->validates() == true) {
                $this->User->createUser($this->data);

                $this->redirect("index");
            } else {
                $this->Flash->set("Action can't be performed  !! Fields are in-correct");
            }
        }
    }

    /**TODO: now don't need */
    public function info(){

    }

    /**
     * Function delete user
     *
     * @param null $id
     */
    public function delete ($id = null) {

        /** TODO: validate id (integer, exist in DB) */

        $this->User->id = $id;
        $this->User->deleteUser($id);

        // Message bao thanh cong sau khi xoa
        $this->Flash->set("Delete User Succes !!!! ");
        $this->redirect("index");
    }

}
