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
<?php echo form_open_multipart(); ?>

<?php echo form_upload('file'); ?>
<br/>

<?php echo form_input('name','',['placeholder' => 'Name']); ?>

<?php echo form_error('name'); ?>
<br/>

<?php echo form_input('homeworld','',['placeholder' => 'Homeworld']); ?>

<?php echo form_error('homeworld'); ?>
<br/>

<?php echo form_input('creator','',['placeholder' => 'Creator']); ?>

<?php echo form_error('creator'); ?>
<br/>

<?php echo form_input('model','',['placeholder' => 'Model']); ?>

<?php echo form_error('model'); ?>
<br/>

<?php echo form_input('class','',['placeholder' => 'Class']); ?>

<?php echo form_error('class'); ?>
<br/>
<?php echo form_submit('submit','Save'); ?>
<?php echo form_close(); ?>
<p class='back'><a href="<?=base_url('droid')?>">Back</a></p>