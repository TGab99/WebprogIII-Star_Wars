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
<?php echo form_open(); ?>

<?php $this->load->helper('url');?>
<img src="<?=base_url('uploads/image/droid/'.$droid->image)?>">
<br/>

<?php echo form_input('name',$droid->name,['placeholder' => 'Név']); ?>

<?php echo form_error('name'); ?>
<br/>

<?php echo form_input('homeworld',$droid->homeworld,['placeholder' => 'Anyabolygó']); ?>

<?php echo form_error('homeworld'); ?>
<br/>

<?php echo form_input('creator',$droid->creator,['placeholder' => 'Készítő']); ?>

<?php echo form_error('creator'); ?>
<br/>

<?php echo form_input('model',$droid->model,['placeholder' => 'Model']); ?>

<?php echo form_error('model'); ?>
<br/>

<?php echo form_input('class',$droid->class,['placeholder' => 'Osztály']); ?>

<?php echo form_error('class'); ?>
<br/>
<?php echo form_submit('submit','Módosít'); ?>
<?php echo form_close(); ?>