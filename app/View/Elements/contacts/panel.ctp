<?php 
echo $this->Form->create('Contact',array('url' => array_merge(array('action' => 'find'), $this->params['pass'])));
echo $this->Form->input('contact_name',array('div' => false));
echo $this->Form->submit(__('Filter'));
echo $this->Form->input('contact_name',array('div' => false));
echo $this->Form->submit(__('Filter'));
echo $this->Form->end();
?>