<?php

?>
<div class="contacts index">
	<h2><?php echo __('Contacts');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('client_id');?></th>
			<th><?php echo $this->Paginator->sort('contact_name');?></th>
			<th><?php echo $this->Paginator->sort('role');?></th>
			<th><?php echo $this->Paginator->sort('birth_date');?></th>
			<th><?php echo $this->Paginator->sort('cell_phone');?></th>
			<th><?php echo $this->Paginator->sort('phone');?></th>
			<th><?php echo $this->Paginator->sort('email');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($contacts as $contact): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($contact['Client']['client_name'], array('controller' => 'clients', 'action' => 'view', $contact['Client']['id'])); ?>
		</td>
		<td><?php echo h($contact['Contact']['contact_name']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['role']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['birth_date']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['cell_phone']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['phone']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['email']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $contact['Contact']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $contact['Contact']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $contact['Contact']['id']), null, __('Are you sure you want to delete # %s?', $contact['Contact']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
<?php echo $this->element('paginator'); ?>
</div>
<div class="actions">
    <ul>
        <li><?php echo $this->Html->link(__('New Contact'), array('action' => 'add')); ?></li>
    </ul>
</div>