<?php echo validation_errors(); ?>
<?php echo form_open(); ?>

<?php $this->load->helper('url');?>
<img src="<?=base_url('uploads/image/weapon/'.$weapons->image)?>">
<br/>

<?php echo form_input('name',$weapons->name,['placeholder' => 'Név']); ?>

<?php echo form_error('name'); ?>
<br/>

<?php echo form_input('type',$weapons->type,['placeholder' => 'Régió']); ?>

<?php echo form_error('type'); ?>
<br/>
<?php echo form_submit('submit','Módosít'); ?>
<?php echo form_close(); ?>