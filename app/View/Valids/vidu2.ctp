<?php
    echo $this->Form->create('Valid', array('action' => 'vidu2'));
    echo $this->Form->input('name');
    echo $this->Form->input('email');
    echo $this->Form->input('website'); 
    echo $this->Form->end('Check');
?>