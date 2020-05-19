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
<img src="<?=base_url('uploads/image/films/'.$film->image)?>">
<br/>

<?php echo form_input('title',$film->title,['placeholder' => 'Cím']); ?>

<?php echo form_error('title'); ?>
<br/>

<?php echo form_input('release_date',$film->release_date,['placeholder' => 'Megjelenési dátum']); ?>

<?php echo form_error('release_date'); ?>
<br/>

<?php echo form_submit('submit','Módosít'); ?>
<?php echo form_close(); ?>