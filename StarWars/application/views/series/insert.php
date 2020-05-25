<!DOVTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <title>Star Wars</title>
        
        <?php $this->load->helper('url');?>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('style/insert.css');?>">
    </head>
    <body>
        <?php $this->load->view('header'); ?>

        <div class="nav">
            <a href="<?=base_url('home')?>">Home</a> |
            <a href="<?=base_url('films') ?>">Films</a> |
            <a href="<?=base_url('series') ?>">Series</a> |
            <a href="<?=base_url('games')?>">Games</a> |
            <a href="<?=base_url('jedi')?>">Jedi</a> |
            <a href="<?=base_url('sith')?>">Sith</a> |
            <a href="<?=base_url('clones')?>">Clones</a> |
            <a href="<?=base_url('droid')?>">Droid</a> |
            <a href="<?=base_url('mandalorians')?>">Mandalorians</a> |
            <a href="<?=base_url('senators')?>">Senators</a> |
            <a href="<?=base_url('species')?>">Species</a> |
            <a href="<?=base_url('planets')?>">Planets</a> |
            <a href="<?=base_url('weapons')?>">Weapons</a>
        </div>
        <br/>

        <?php echo validation_errors(); ?>
        <?php echo form_open_multipart(); ?>

        <?php echo form_upload('file'); ?>
        <br/>

        <?php echo form_input('title','',['placeholder' => 'Title']); ?>

        <?php echo form_error('title'); ?>
        <br/>

        <?php echo form_input('release_date','',['placeholder' => 'Release date']); ?>

        <?php echo form_error('release_date'); ?>
        <br/>

        <?php echo form_submit('submit','Save'); ?>
        <?php echo form_close(); ?>

        <p class='back'><a href="<?=base_url('series')?>">Back</a></p>
        
        <?php $this->load->view('footer'); ?>
    </body>
</html>