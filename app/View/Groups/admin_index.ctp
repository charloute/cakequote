<div class="groups index">
	<h2><?php echo __('Groups'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="table table-bordered table-striped">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($groups as $group): ?>
	<tr>
		<td><?php echo h($group['Group']['id']); ?>&nbsp;</td>
		<td><?php echo h($group['Group']['name']); ?>&nbsp;</td>
		<td class="actions">
			<div class="btn btn-info">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $group['Group']['id'])); ?>
			</div>
			
			<div class="btn btn-warning">
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $group['Group']['id'])); ?>
			</div>
			
			<div class="btn btn-danger">
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $group['Group']['id']), null, __('Are you sure you want to delete # %s?', $group['Group']['id'])); ?>
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

