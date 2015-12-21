<?php

?>
<ul>
<li><?php echo $this->Html->link(__('Client categories'), array('plugin' => null,'controller' => 'client_categories', 'action' => 'index')); ?></li>
<li><?php echo $this->Html->link(__('Client types'), array('plugin' => null,'controller' => 'client_types', 'action' => 'index')); ?></li>
<li><?php echo $this->Html->link(__('Service states'), array('plugin' => null,'controller' => 'service_states', 'action' => 'index')); ?></li>
<li><?php echo $this->Html->link(__('Service types'), array('plugin' => null,'controller' => 'service_types', 'action' => 'index')); ?></li>
<li><?php echo $this->Html->link(__('Users'), array('plugin' => null,'controller' => 'users', 'action' => 'index')); ?></li>
<li><?php echo $this->Html->link(__('Settings'), array('plugin' => null,'controller' => 'settings', 'action' => 'index')); ?></li>                    
</ul>