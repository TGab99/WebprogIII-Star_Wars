<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Star Wars</title>
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
    
    <div class="quotes">
    <h3>Quotes</h3>
    
    <blockquote cite="https://www.starwars.com/news/40-memorable-star-wars-quotes">
        <p><q>Do. Or do not. There is no try.</q> - Yoda</p>
        <p><q>No. I am your father.</q> - Dart Vader</p>
        <p><q>I’ll never turn to the dark side. You’ve failed, your highness. I am a Jedi, like my father before me.</q> - Luke Skywalker</p>
        <p><q>Fear is the path to the dark side. Fear leads to anger; anger leads to hate; hate leads to suffering. I sense much fear in you.</q> - Yoda</p>
        <p><q>Chewie, we’re home.</q> - Han Solo</p>
    </blockquote>
    </div>
    
    <?php $this->load->view('footer'); ?>
</body>
</html>