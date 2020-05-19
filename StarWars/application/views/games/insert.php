<style>
    li{
        display: inline;
    }
    ul{
        background-color: #dddddd;
    }
</style>
<ul>
    <li>Home</li>
    <li>Films</li>
    <li>Series</li>
    <li>Lists</li>
</ul>
<br>
<?php echo validation_errors(); ?>
<?php echo form_open_multipart(); ?>

<?php echo form_upload('file'); ?>
<br/>

<?php echo form_input('name','',['placeholder' => 'Név']); ?>

<?php echo form_error('name'); ?>
<br/>

<?php echo form_input('developers','',['placeholder' => 'Fejlesztők']); ?>

<?php echo form_error('developers'); ?>
<br/>

<?php echo form_input('publishers','',['placeholder' => 'Publikálók']); ?>

<?php echo form_error('publishers'); ?>
<br/>

<?php echo form_input('release_date','',['placeholder' => 'Megjelenési dátum']); ?>

<?php echo form_error('release_date'); ?>
<br/>

<?php echo form_input('models','',['placeholder' => 'Model']); ?>

<?php echo form_error('models'); ?>
<br/>

<?php echo form_input('platforms','',['placeholder' => 'Platform']); ?>

<?php echo form_error('platforms'); ?>
<br/>

<?php echo form_submit('submit','Beküld'); ?>
<?php echo form_close(); ?>