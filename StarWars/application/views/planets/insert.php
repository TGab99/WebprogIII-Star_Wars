<?php echo validation_errors(); ?>
<?php echo form_open_multipart(); ?>

<?php echo form_upload('file'); ?>
<br/>

<?php echo form_input('name','',['placeholder' => 'Név']); ?>

<?php echo form_error('name'); ?>
<br/>

<?php echo form_input('regio','',['placeholder' => 'Régió']); ?>

<?php echo form_error('regio'); ?>
<br/>

<?php echo form_input('sector','',['placeholder' => 'Szektor']); ?>

<?php echo form_error('sector'); ?>
<br/>

<?php echo form_input('system','',['placeholder' => 'Rendszer']); ?>

<?php echo form_error('system'); ?>
<br/>
<?php echo form_submit('submit','Beküld'); ?>
<?php echo form_close(); ?>