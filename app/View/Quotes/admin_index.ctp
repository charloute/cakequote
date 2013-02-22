<div class="quotes index">
	<h2><?php echo __('Quotes'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="table table-bordered table-striped">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('body'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($quotes as $quote): ?>
	<tr>
		<td><?php echo h($quote['Quote']['id']); ?>&nbsp;</td>
		<td><?php echo h($quote['Quote']['title']); ?>&nbsp;</td>
		<td><?php echo h($quote['Quote']['body']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($quote['User']['username'], array('controller' => 'users', 'action' => 'view', $quote['User']['id'])); ?>
		</td>
		<td><?php echo h($quote['Quote']['created']); ?>&nbsp;</td>
		<td><?php echo h($quote['Quote']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<div class="btn btn-info">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $quote['Quote']['id'])); ?>
			</div>
			<div class="btn btn-warning">
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $quote['Quote']['id'])); ?>
			</div>
			<div class="btn btn-danger">
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $quote['Quote']['id']), null, __('Are you sure you want to delete # %s?', $quote['Quote']['id'])); ?>
			</div>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	
	<ul class="pager">
	
		<li><?php echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));?></li>
		<?php echo $this->Paginator->numbers(array('separator' => ''));?>
		<li><?php echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));?></li>
	</ul>
		
</div>

