<?php $this->load->helper('url');?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('style/insert.css');?>">
<h1 id="main">Star Wars</h1>
<div class="nav">
        <a href="<?=base_url('index.php')?>">Home</a> |
        <a href="<?=base_url('films') ?>">Films</a> |
        <a href="<?=base_url('series') ?>">Series</a> |
        <a href="<?=base_url('games')?>">Games</a> |
        <a href="">Characters</a> |
        <a href="<?=base_url('planets')?>">Planets</a> |
        <a href="<?=base_url('weapons')?>">Weapons</a>
</div>
<br>
<?php echo validation_errors(); ?>
<?php echo form_open(); ?>

<?php $this->load->helper('url');?>
<img src="<?=base_url('uploads/image/weapon/'.$weapons->image)?>" width=auto height='300'>
<br/>

<?php echo form_input('name',$weapons->name,['placeholder' => 'Name']); ?>

<?php echo form_error('name'); ?>
<br/>

<?php echo form_input('type',$weapons->type,['placeholder' => 'Regio']); ?>

<?php echo form_error('type'); ?>
<br/>
<?php echo form_submit('submit','Edit'); ?>
<?php echo form_close(); ?>
<p class='back'><a href="<?=base_url('weapons')?>">Back</a></p>