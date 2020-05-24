<?php $this->load->helper('url');?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('style/edit.css');?>">
<?php $this->load->view('header'); ?>
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
<img src="<?=base_url('uploads/image/films/'.$film->image)?>" width=auto height='300'>
<br/>

<?php echo form_input('title',$film->title,['placeholder' => 'Title']); ?>

<?php echo form_error('title'); ?>
<br/>

<?php echo form_input('release_date',$film->release_date,['placeholder' => 'Release date']); ?>

<?php echo form_error('release_date'); ?>
<br/>

<?php echo form_submit('submit','Edit'); ?>
<?php echo form_close(); ?>
<p class='back'><a href="<?=base_url('films')?>">Back</a></p>
<?php $this->load->view('footer'); ?>