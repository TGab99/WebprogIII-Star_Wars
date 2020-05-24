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
<img src="<?=base_url('uploads/image/jedi/'.$jedi->image)?>" width=auto height='300'>
<br/>

<?php echo form_input('name',$jedi->name,['placeholder' => 'Name']); ?>

<?php echo form_error('name'); ?>
<br/>

<?php echo form_input('homeworld',$jedi->homeworld,['placeholder' => 'Homeworld']); ?>

<?php echo form_error('homeworld'); ?>
<br/>

<?php echo form_input('species',$jedi->species,['placeholder' => 'Species']); ?>

<?php echo form_error('species'); ?>
<br/>

<?php echo form_input('gender',$jedi->gender,['placeholder' => 'Gender']); ?>

<?php echo form_error('gender'); ?>
<br/>

<?php echo form_input('rank',$jedi->rank,['placeholder' => 'Rank']); ?>

<?php echo form_error('rank'); ?>
<br/>
<?php echo form_submit('submit','Edit'); ?>
<?php echo form_close(); ?>
<p class='back'><a href="<?=base_url('jedi')?>">Back</a></p>
<?php $this->load->view('footer'); ?>