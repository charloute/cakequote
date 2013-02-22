<div class="row">
<div class="span5 offset7">
<?php echo $this->Form->create('Quote'); ?>
	<fieldset>
		<legend><?php echo __('Add Quote'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('body');
			?>
	</fieldset>
	
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>

