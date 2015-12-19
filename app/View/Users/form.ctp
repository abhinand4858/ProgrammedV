<?php
/**
*
 */
?>
<div class="users form">
<?php echo $this->Form->create('User');?>
	<fieldset>
		<legend><?php echo $currentAction . __(' User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('username');
		$options = array('admin'=>'admin','user'=>'user','guest'=>'guest');
		echo $this->Form->input('role',array('type'=>'select','options'=>$options));
	?>
	</fieldset>
<?php echo $this->Form->submit(__('Submit'));?>
<?php echo $this->Html->tag('div',$this->Html->link(__('Cancel'),array('action' => 'index')),array('class' => 'cancelButton')); ?>
<?php echo $this->Form->end() ?>
</div>
