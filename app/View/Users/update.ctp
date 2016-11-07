<?php
 echo $this->Form->create();
  echo $this->Form->input('userid',array('value'=>$data['User']['id']));
 echo $this->Form->input('name',array('value'=>$data['User']['name']));
 echo $this->Form->input('phone',array('value'=>$data['User']['phone']));
 echo $this->Form->input('email',array('value'=>$data['User']['email']));
 echo $this->Form->end('Update');
?>