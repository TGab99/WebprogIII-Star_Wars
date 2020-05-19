<?php echo validation_errors(); ?>
<?php echo form_open(); ?>

<?php $this->load->helper('url');?>
<img src="<?=base_url('uploads/image/games/'.$game->image)?>">
<br/>

<?php echo form_input('name',$game->name,['placeholder' => 'Név']); ?>

<?php echo form_error('name'); ?>
<br/>

<?php echo form_input('developers',$game->developers,['placeholder' => 'Fejlesztők']); ?>

<?php echo form_error('developers'); ?>
<br/>

<?php echo form_input('publishers',$game->publishers,['placeholder' => 'Publikálók']); ?>

<?php echo form_error('publishers'); ?>
<br/>

<?php echo form_input('release_date',$game->release_date,['placeholder' => 'Megjelenési dátum']); ?>

<?php echo form_error('release_date'); ?>
<br/>

<?php echo form_input('models',$game->models,['placeholder' => 'Model']); ?>

<?php echo form_error('models'); ?>
<br/>
<?php echo form_input('platforms',$game->platforms,['placeholder' => 'Platform']); ?>

<?php echo form_error('platforms'); ?>
<br/>
<?php echo form_submit('submit','Módosít'); ?>
<?php echo form_close(); ?>