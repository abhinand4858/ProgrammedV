<?php 

echo $this->Form->create('Service',array('url' => array_merge(array('action' => 'find'), $this->params['pass'])));
echo $this->Form->input('service_state_id',array('div' => false,'empty'=>__('---All---')));
echo $this->Form->input('service_type_id',array('div' => false,'empty'=>__('---All---')));
echo $this->Form->submit(__('Filter'));
echo $this->Form->end();
echo $this->Html->tag('span',$this->Html->link(__('Reports'), array('action' => 'report')),array('class'=>'floatRight'));
?>