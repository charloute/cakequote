

<div class="row">
<div class="span5 offset7">
<?php echo $this->Form->create('User'); ?>
		<form class="form-horizontal">
		<legend><?php echo __('Add User'); ?></legend>
		
    <div class="control-group">
	<?php echo $this->Form->input('username');?>
	</div>
    <div class="control-group">
	<?php echo $this->Form->input('password');?>
	</div>
	
	<div class="control-group">
	<?php echo $this->Form->input('email');?>
	</div>
	<div class="control-group">
	<?php echo $this->Form->input('group_id');?>
	</div>
	
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
