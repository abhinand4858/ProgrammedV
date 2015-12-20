<?php 

echo $this->Form->create('Skill',array('url' => array_merge(array('action' => 'find'), $this->params['pass'])));
echo $this->Form->input('skill_desc',array('div' => false));
echo $this->Form->submit(__('Filter'));
echo $this->Form->end();
?>