<?php echo validation_errors(); ?>
<?php echo form_open(); ?>

<?php $this->load->helper('url');?>
<img src="<?=base_url('uploads/image/series/'.$series->image)?>">
<br/>

<?php echo form_input('title',$series->title,['placeholder' => 'Cím']); ?>

<?php echo form_error('title'); ?>
<br/>

<?php echo form_input('release_date',$series->release_date,['placeholder' => 'Megjelenési dátum']); ?>

<?php echo form_error('release_date'); ?>
<br/>

<?php echo form_submit('submit','Módosít'); ?>
<?php echo form_close(); ?>