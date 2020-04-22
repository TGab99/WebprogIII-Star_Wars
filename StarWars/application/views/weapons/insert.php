<?php echo validation_errors(); ?>
<?php echo form_open_multipart(); ?>

<?php echo form_upload('file'); ?>
<br/>

<?php echo form_input('name','',['placeholder' => 'Név']); ?>

<?php echo form_error('name'); ?>
<br/>

<?php echo form_input('type','',['placeholder' => 'Típus']); ?>

<?php echo form_error('type'); ?>
<br/>
<?php echo form_submit('submit','Beküld'); ?>
<?php echo form_close(); ?>