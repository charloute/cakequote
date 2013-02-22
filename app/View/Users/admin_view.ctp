<script>
$(document).ready(function(){
    $('#myTab a').click(function (e) {
    e.preventDefault();
    $(this).tab('show');
    })
});
</script>

<div class="users_view">

<h2><?php  echo __('User'); ?></h2>
	
	<ul class="nav nav-tabs" id="myTab">
		<li><a href="#id"><?php echo __('Id'); ?></a></li>
		
			
			
		<li><a href="#username"><?php echo __('Username'); ?></a></li>
		
			
			
		<li><a href="#password"><?php echo __('Password'); ?></a></li>
		
			
			
		<li><a href="#email"><?php echo __('Email'); ?></a></li>
		
			
			
		<li><a href="#group"><?php echo __('Group'); ?></a></li>
		
			
			
		<li><a href="#created"><?php echo __('Created'); ?></a></li>
		
			
			
		<li><a href="#updated"><?php echo __('Updated'); ?></a></li>
		
			
	</ul>
	<div class="tab-content">
	<div class="tab-pane active" id="id"><?php echo h($user['User']['id']); ?></div>
	<div class="tab-pane" id="username"><?php echo h($user['User']['username']); ?></div>
	<div class="tab-pane" id="password"><?php echo h($user['User']['password']); ?></div>
	<div class="tab-pane" id="email"><?php echo h($user['User']['email']); ?></div>
	<div class="tab-pane" id="group"><?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?></div>
	<div class="tab-pane" id="created"><?php echo h($user['User']['created']); ?></div>
	<div class="tab-pane" id="updated"><?php echo h($user['User']['updated']); ?></div>
	</div>
	
</div>



<div class="related">
	<h3><?php echo __('Related Quotes'); ?></h3>
	<?php if (!empty($user['Quote'])): ?>
	<table cellpadding="0" cellspacing="0" class="table table-bordered table-striped">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Body'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Quote'] as $quote): ?>
		<tr>
			<td><?php echo $quote['id']; ?></td>
			<td><?php echo $quote['title']; ?></td>
			<td><?php echo $quote['body']; ?></td>
			<td><?php echo $quote['user_id']; ?></td>
			<td><?php echo $quote['created']; ?></td>
			<td><?php echo $quote['updated']; ?></td>
			<td class="actions">
				<div class="btn btn-info">
				<?php echo $this->Html->link(__('View'), array('controller' => 'quotes', 'action' => 'view', $quote['id'])); ?>
				</div>
				
				<div class="btn btn-warning">
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'quotes', 'action' => 'edit', $quote['id'])); ?>
				</div>
				
				<div class="btn btn-danger">
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'quotes', 'action' => 'delete', $quote['id']), null, __('Are you sure you want to delete # %s?', $quote['id'])); ?>
				</div>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Quote'), array('controller' => 'quotes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
