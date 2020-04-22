<?php echo validation_errors(); ?>
<?php echo form_open(); ?>

<?php $this->load->helper('url');?>
<img src="<?=base_url('uploads/image/planet/'.$planets->image)?>">
<br/>

<?php echo form_input('name',$planets->name,['placeholder' => 'Név']); ?>

<?php echo form_error('name'); ?>
<br/>

<?php echo form_input('regio',$planets->regio,['placeholder' => 'Régió']); ?>

<?php echo form_error('regio'); ?>
<br/>

<?php echo form_input('sector',$planets->sector,['placeholder' => 'Szektor']); ?>

<?php echo form_error('sector'); ?>
<br/>

<?php echo form_input('system',$planets->system,['placeholder' => 'Rendszer']); ?>

<?php echo form_error('system'); ?>
<br/>
<?php echo form_submit('submit','Módosít'); ?>
<?php echo form_close(); ?>