<?php 

echo $this->Form->create('Client',array('url' => array_merge(array('action' => 'find'), $this->params['pass'])));
echo $this->Form->input('client_category_id',array('div' => false,'empty'=>__('---All---')));
echo $this->Form->input('client_type_id',array('div' => false,'empty'=>__('---All---')));
echo $this->Form->input('client_name',array('div' => false));
echo $this->Form->submit(__('Filter'));
echo $this->Form->end();
?>