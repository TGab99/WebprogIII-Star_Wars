<!DOVTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <title>Star Wars</title>
        
        <?php $this->load->helper('url');?>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('style/profile.css');?>">
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

        <h1><?=$game->name?>'s profile</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Information</th>
                    <th>Data</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Name</td>
                    <td><?=$game->name?></td>
                </tr>
                <tr>
                    <td>Developers</td>
                    <td><?=$game->developers?></td>
                </tr>
                <tr>
                    <td>Publishers</td>
                    <td><?=$game->publishers?></td>
                </tr>
                <tr>
                    <td>Release date</td>
                    <td><?=$game->release_date?></td>
                </tr>
                <tr>
                    <td>Model</td>
                    <td><?=$game->models?></td>
                </tr>
                <tr>
                    <td>Platform</td>
                    <td><?=$game->platforms?></td>
                </tr>
            </tbody>
        </table>

        <div class="image">
            <?php $this->load->helper('url');?>
            <img src="<?=base_url('uploads/image/games/'.$game->image)?>" width=auto height="300">
        </div>

        <p class='back'><a href="<?=base_url('games')?>">Back</a></p>

        <?php $this->load->view('footer'); ?>
    </body>
</html>
