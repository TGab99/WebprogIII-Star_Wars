<?php echo validation_errors(); ?>
<?php echo form_open_multipart(); ?>

<?php echo form_upload('file'); ?>
<br/>

<?php echo form_input('name','',['placeholder' => 'Név']); ?>

<?php echo form_error('name'); ?>
<br/>

<?php echo form_input('homeworld','',['placeholder' => 'Anyabolygó']); ?>

<?php echo form_error('homeworld'); ?>
<br/>

<?php echo form_input('creator','',['placeholder' => 'Készítő']); ?>

<?php echo form_error('creator'); ?>
<br/>

<?php echo form_input('model','',['placeholder' => 'Model']); ?>

<?php echo form_error('model'); ?>
<br/>

<?php echo form_input('class','',['placeholder' => 'Osztály']); ?>

<?php echo form_error('class'); ?>
<br/>
<?php echo form_submit('submit','Beküld'); ?>
<?php echo form_close(); ?>