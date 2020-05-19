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
<img src="<?=base_url('uploads/image/mandalorians/'.$mandalorian->image)?>">
<br/>

<?php echo form_input('name',$mandalorian->name,['placeholder' => 'Név']); ?>

<?php echo form_error('name'); ?>
<br/>

<?php echo form_input('homeworld',$mandalorian->homeworld,['placeholder' => 'Anyabolygó']); ?>

<?php echo form_error('homeworld'); ?>
<br/>

<?php echo form_input('species',$mandalorian->species,['placeholder' => 'Faj']); ?>

<?php echo form_error('species'); ?>
<br/>

<?php echo form_input('gender',$mandalorian->gender,['placeholder' => 'Nem']); ?>

<?php echo form_error('gender'); ?>
<br/>
<?php echo form_submit('submit','Módosít'); ?>
<?php echo form_close(); ?>