<?php echo $this->Form->create(); ?>
<fieldset>
    <legend><?php echo __('Login'); ?></legend>
<?php
    echo $this->Form->input('username',array('size'=>'10'));
    echo $this->Form->input('password',array('size'=>'10'));
?>
</fieldset>
<button><?php echo $this->Form->end('Login'); ?></button>

