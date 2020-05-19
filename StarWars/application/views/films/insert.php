<?php echo validation_errors(); ?>
<?php echo form_open_multipart(); ?>

<?php echo form_upload('file'); ?>
<br/>

<?php echo form_input('title','',['placeholder' => 'Cím']); ?>

<?php echo form_error('title'); ?>
<br/>

<?php echo form_input('release_date','',['placeholder' => 'Megjelenési dátum']); ?>

<?php echo form_error('release_date'); ?>
<br/>

<?php echo form_submit('submit','Beküld'); ?>
<?php echo form_close(); ?>