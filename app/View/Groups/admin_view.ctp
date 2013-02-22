<script>
$(document).ready(function(){
    $('#myTab a').click(function (e) {
    e.preventDefault();
    $(this).tab('show');
    })
});
</script>

<div class="groups view">

<h2><?php  echo __('Group'); ?></h2>

	<ul class="nav nav-tabs" id="myTab">
	
		<li><a href="#id"><?php echo __('Id'); ?></a></li>
		
		<li><a href="#name"><?php echo __('Name'); ?></a></li>
		
	</ul>
	
	<div class="tab-content">
		
		<div class="tab-pane active" id="id"><?php echo h($group['Group']['id']); ?></div>
		
		<div class="tab-pane" id="name"><?php echo h($group['Group']['name']); ?></div>
	</div>
			
		
	
</div>

<div class="related">
	<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($group['User'])): ?>
	<table cellpadding="0" cellspacing="0" class="table table-bordered table-striped">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Group Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($group['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['username']; ?></td>
			<td><?php echo $user['password']; ?></td>
			<td><?php echo $user['email']; ?></td>
			<td><?php echo $user['group_id']; ?></td>
			<td><?php echo $user['created']; ?></td>
			<td><?php echo $user['updated']; ?></td>
			<td class="actions">
			<div class="btn btn-info">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
			</div>
			<div class="btn btn-warning">
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
			</div>
			<div class="btn btn-danger">
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), null, __('Are you sure you want to delete # %s?', $user['id'])); ?>
			</div>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
