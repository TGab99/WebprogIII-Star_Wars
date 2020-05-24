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
<img src="<?=base_url('uploads/image/games/'.$game->image)?>" width=auto height='300'>
<br/>

<?php echo form_input('name',$game->name,['placeholder' => 'Name']); ?>

<?php echo form_error('name'); ?>
<br/>

<?php echo form_input('developers',$game->developers,['placeholder' => 'Creators']); ?>

<?php echo form_error('developers'); ?>
<br/>

<?php echo form_input('publishers',$game->publishers,['placeholder' => 'Publishers']); ?>

<?php echo form_error('publishers'); ?>
<br/>

<?php echo form_input('release_date',$game->release_date,['placeholder' => 'Release date']); ?>

<?php echo form_error('release_date'); ?>
<br/>

<?php echo form_input('models',$game->models,['placeholder' => 'Model']); ?>

<?php echo form_error('models'); ?>
<br/>
<?php echo form_input('platforms',$game->platforms,['placeholder' => 'Platform']); ?>

<?php echo form_error('platforms'); ?>
<br/>
<?php echo form_submit('submit','edit'); ?>
<?php echo form_close(); ?>
<p class='back'><a href="<?=base_url('games')?>">Back</a></p>