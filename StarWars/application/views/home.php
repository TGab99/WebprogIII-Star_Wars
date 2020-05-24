<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('style/home.css');?>">
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
    
    <h3>Welcome to my website!</h3>
    
    <?php $this->load->view('footer'); ?>
</body>
</html>