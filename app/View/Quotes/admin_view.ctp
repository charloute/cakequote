<script>
$(document).ready(function(){
    $('#myTab a').click(function (e) {
    e.preventDefault();
    $(this).tab('show');
    })
});
</script>

<div class="quotes view">

<h2><?php  echo __('Quote'); ?></h2>
	
	<ul class="nav nav-tabs" id="myTab">
	
		<li><a href="#id"><?php echo __('Id'); ?></a></li>
		<li><a href="#title"><?php echo __('Title'); ?></a></li>
		<li><a href="#body"><?php echo __('Body'); ?></a></li>
		<li><a href="#user"><?php echo __('User'); ?></a></li>
		<li><a href="#created"><?php echo __('Created'); ?></a></li>
		<li><a href="#updated"><?php echo __('Updated'); ?></a></li>
	</ul>
		
			
			
	<div class="tab-content">
			<div class="tab-pane active" id="id"><?php echo h($quote['Quote']['id']); ?></div>
			
		
			<div class="tab-pane" id="title"><?php echo h($quote['Quote']['title']); ?></div>
			
		
			<div class="tab-pane" id="body"><?php echo h($quote['Quote']['body']); ?></div>
			
		
			<div class="tab-pane" id="user"><?php echo $this->Html->link($quote['User']['username'], array('controller' => 'users', 'action' => 'view', $quote['User']['id'])); ?></div>
			
		
			<div class="tab-pane" id="created"><?php echo h($quote['Quote']['created']); ?></div>
			
		
			<div class="tab-pane" id="updated"><?php echo h($quote['Quote']['updated']); ?></div>
			
		
	
</div>
