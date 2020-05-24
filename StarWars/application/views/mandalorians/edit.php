<?php $this->load->helper('url');?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('style/edit.css');?>">
<h1 id="main">Star Wars</h1>
<div class="nav">
        <a href="<?=base_url('index')?>">Home</a> |
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
<img src="<?=base_url('uploads/image/mandalorians/'.$mandalorian->image)?>" width=auto height='300'>
<br/>

<?php echo form_input('name',$mandalorian->name,['placeholder' => 'Name']); ?>

<?php echo form_error('name'); ?>
<br/>

<?php echo form_input('homeworld',$mandalorian->homeworld,['placeholder' => 'Homeworld']); ?>

<?php echo form_error('homeworld'); ?>
<br/>

<?php echo form_input('species',$mandalorian->species,['placeholder' => 'Species']); ?>

<?php echo form_error('species'); ?>
<br/>

<?php echo form_input('gender',$mandalorian->gender,['placeholder' => 'Gender']); ?>

<?php echo form_error('gender'); ?>
<br/>
<?php echo form_submit('submit','Edit'); ?>
<?php echo form_close(); ?>
<p class='back'><a href="<?=base_url('mandalorians')?>">Back</a></p>