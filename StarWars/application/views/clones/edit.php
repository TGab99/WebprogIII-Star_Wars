<?php echo validation_errors(); ?>
<?php echo form_open(); ?>

<?php $this->load->helper('url');?>
<img src="<?=base_url('uploads/image/clones/'.$clone->image)?>">
<br/>

<?php echo form_input('name',$clone->name,['placeholder' => 'Név']); ?>

<?php echo form_error('name'); ?>
<br/>

<?php echo form_input('homeworld',$clone->homeworld,['placeholder' => 'Anyabolygó']); ?>

<?php echo form_error('homeworld'); ?>
<br/>

<?php echo form_input('species',$clone->species,['placeholder' => 'Faj']); ?>

<?php echo form_error('species'); ?>
<br/>

<?php echo form_input('gender',$clone->gender,['placeholder' => 'Nem']); ?>

<?php echo form_error('gender'); ?>
<br/>

<?php echo form_input('rank',$clone->rank,['placeholder' => 'Rang']); ?>

<?php echo form_error('rank'); ?>
<br/>
<?php echo form_submit('submit','Módosít'); ?>
<?php echo form_close(); ?>