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
<img src="<?=base_url('uploads/image/sith/'.$sith->image)?>">
<br/>

<?php echo form_input('name',$sith->name,['placeholder' => 'Név']); ?>

<?php echo form_error('name'); ?>
<br/>

<?php echo form_input('homeworld',$sith->homeworld,['placeholder' => 'Anyabolygó']); ?>

<?php echo form_error('homeworld'); ?>
<br/>

<?php echo form_input('species',$sith->species,['placeholder' => 'Faj']); ?>

<?php echo form_error('species'); ?>
<br/>

<?php echo form_input('gender',$sith->gender,['placeholder' => 'Nem']); ?>

<?php echo form_error('gender'); ?>
<br/>

<?php echo form_input('rank',$sith->rank,['placeholder' => 'Rang']); ?>

<?php echo form_error('rank'); ?>
<br/>
<?php echo form_submit('submit','Módosít'); ?>
<?php echo form_close(); ?>