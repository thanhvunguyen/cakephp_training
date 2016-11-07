<?php
 echo $this->Form->create('User', array( 'onsubmit' => 'return confirm("Are you sure you wish to update this user?");'));
 echo $this->Form->input('userid',array('value'=>$data['User']['id']));
 echo $this->Form->input('name',array('value'=>$data['User']['name']));
 echo $this->Form->input('phone',array('value'=>$data['User']['phone']));
 echo $this->Form->input('email',array('value'=>$data['User']['email']));
 echo $this->Form->end('Update');
?>