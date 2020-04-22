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

<?php echo form_input('species','',['placeholder' => 'Faj']); ?>

<?php echo form_error('species'); ?>
<br/>

<?php echo form_input('gender','',['placeholder' => 'Nem']); ?>

<?php echo form_error('gender'); ?>
<br/>

<?php echo form_input('rank','',['placeholder' => 'Rang']); ?>

<?php echo form_error('rank'); ?>
<br/>
<?php echo form_submit('submit','Beküld'); ?>
<?php echo form_close(); ?>