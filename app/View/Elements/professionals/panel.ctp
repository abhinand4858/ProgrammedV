<?php
/**
 *
 */
echo $this->Form->create('Professional',array('url' => array_merge(array('action' => 'find'), $this->params['pass'])));
echo $this->Form->input('professional_name',array('div' => false));
echo $this->Form->submit(__('Filter'));
echo $this->Form->end();
?>
