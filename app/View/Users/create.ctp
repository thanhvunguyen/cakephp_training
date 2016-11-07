<?php
 echo $this->Form->create('User', array( 'onsubmit' => 'return confirm("Are you sure you wish to create this user?");'));
 echo $this->Form->input('name');
 echo $this->Form->input('phone');
 echo $this->Form->input('email');
 echo $this->Form->end('Create');
?>