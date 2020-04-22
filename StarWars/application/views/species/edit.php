<?php echo validation_errors(); ?>
<?php echo form_open(); ?>

<?php $this->load->helper('url');?>
<img src="<?=base_url('uploads/image/species/'.$species->image)?>">
<br/>

<?php echo form_input('name',$species->name,['placeholder' => 'Név']); ?>

<?php echo form_error('name'); ?>
<br/>

<?php echo form_input('homeworld',$species->homeworld,['placeholder' => 'Anyabolygó']); ?>

<?php echo form_error('homeworld'); ?>
<br/>

<?php echo form_input('species',$species->species,['placeholder' => 'Faj']); ?>

<?php echo form_error('species'); ?>
<br/>

<?php echo form_input('gender',$species->gender,['placeholder' => 'Nem']); ?>

<?php echo form_error('gender'); ?>
<br/>
<?php echo form_submit('submit','Módosít'); ?>
<?php echo form_close(); ?>