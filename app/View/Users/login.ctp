<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../js/bootstrap.js">

<?php echo $this->Session->flash('auth'); ?>

<div class="row">
<div class="span5 offset7">
<?php echo $this->Form->create('User'); ?>
    <form class="form-horizontal">
    <div class="control-group">
    <?php echo $this->Form->input('username'); ?>
    
    </div>
    <div class="control-group">
    <?php echo $this->Form->input('password'); ?>
    
    </div>
    <div class="control-group">
    <div class="controls">
    <?php echo $this->Form->end('login'); ?>
    </div>
    </div>
    </form>
</div>
</div>



