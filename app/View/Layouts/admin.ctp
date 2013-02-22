<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    
    
    <link rel="stylesheet" href="<?php echo $this->Html->url('/css/bootstrap.css');?>">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="<?php echo $this->Html->url('/js/bootstrap.js');?>"></script>
    
    <?php //echo $this->Html->script('less'); ?>
    
    
	
</head>

<body>
	<div id="container">
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
			<img style="float:left; margin-right:20px;" src="<?php echo $this->Html->url('/img/logo.png');?>" width="70px" height="60px">

			<h1 class="brand"><?php echo $this->Html->link('CakeQuote', '/'); ?></h1>
			<ul class="nav">
			
			<li class="dropdown"><a data-toggle="dropdown" class="dropdown-toggle" role="button" href="#" id="drop1">Users</a>
				<ul aria-labelledby="drop1" role="menu" class="dropdown-menu">
				<li role="presentation"><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
                <li role="presentation"><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?></li>
            </ul>
			</li>
			
			<li class="dropdown"><a data-toggle="dropdown" class="dropdown-toggle" role="button" href="#" id="drop2">Groups</a>
			<ul aria-labelledby="drop2" role="menu" class="dropdown-menu">
			<li role="presentation"><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 			'index')); ?> </li>
			<li role="presentation"><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 				'add')); ?> </li>
			</ul>
			</li>
			
			<li class="dropdown"><a data-toggle="dropdown" class="dropdown-toggle" role="button" href="#" id="drop3">Quotes</a>
			<ul aria-labelledby="drop3" role="menu" class="dropdown-menu">
			<li><?php echo $this->Html->link(__('List Quotes'), array('controller' => 'quotes', 'action' => 			'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Quote'), array('controller' => 'quotes', 'action' => 				'add')); ?> </li>
			</ul>
			</li>
			</ul>

			
			<?php if($me['id']>0): ?>
				
				<div class="btn btn-warning" style="margin-right:30px; margin-left:200px;">
					<?php echo $this->Html->link('logout', '/users/logout') ?>
				</div>
				<?php else: ?>
				
				<style>
				.container .btn-primary{
					display: none;
				} 
				</style>
				
				<div class="btn btn-success" style="margin-right:30px; margin-left:200px;">
					<?php echo $this->Html->link('login', '/users/login') ?>
				</div>
				<?php endif; ?>
			
			    				
			
			    <span class="btn btn-primary"><?php echo $me['username']; ?></span>
			
				</div>
			</div>
		</div>
				<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			
		</div>
	</div>
	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>
