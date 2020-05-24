<?php $this->load->helper('url');?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('style/edit.css');?>">
<?php $this->load->view('header'); ?>
<div class="nav">
        <a href="<?=base_url('home')?>">Home</a> |
        <a href="<?=base_url('films') ?>">Films</a> |
        <a href="<?=base_url('series') ?>">Series</a> |
        <a href="<?=base_url('games')?>">Games</a> |
        <a href="<?=base_url('jedi')?>">Jedi</a> |
        <a href="<?=base_url('sith')?>">Sith</a> |
        <a href="<?=base_url('clones')?>">Clones</a> |
        <a href="<?=base_url('droid')?>">Droid</a> |
        <a href="<?=base_url('mandalorians')?>">Mandalorians</a> |
        <a href="<?=base_url('senators')?>">Senators</a> |
        <a href="<?=base_url('species')?>">Species</a> |
        <a href="<?=base_url('planets')?>">Planets</a> |
        <a href="<?=base_url('weapons')?>">Weapons</a>
</div>
<br>
<?php echo validation_errors(); ?>
<?php echo form_open(); ?>

<?php $this->load->helper('url');?>
<img src="<?=base_url('uploads/image/droid/'.$droid->image)?>" width=auto height='300'>
<br/>

<?php echo form_input('name',$droid->name,['placeholder' => 'Név']); ?>

<?php echo form_error('name'); ?>
<br/>

<?php echo form_input('homeworld',$droid->homeworld,['placeholder' => 'Anyabolygó']); ?>

<?php echo form_error('homeworld'); ?>
<br/>

<?php echo form_input('creator',$droid->creator,['placeholder' => 'Készítő']); ?>

<?php echo form_error('creator'); ?>
<br/>

<?php echo form_input('model',$droid->model,['placeholder' => 'Model']); ?>

<?php echo form_error('model'); ?>
<br/>

<?php echo form_input('class',$droid->class,['placeholder' => 'Osztály']); ?>

<?php echo form_error('class'); ?>
<br/>
<?php echo form_submit('submit','Módosít'); ?>
<?php echo form_close(); ?>
<p class='back'><a href="<?=base_url('droid')?>">Back</a></p>
<?php $this->load->view('footer'); ?>