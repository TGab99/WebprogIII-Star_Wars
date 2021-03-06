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

        <h1><?=$planets->name?>'s profile</h1>

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
                    <td><?=$planets->name?></td>
                </tr>
                <tr>
                    <td>Regio</td>
                    <td><?=$planets->regio?></td>
                </tr>
                <tr>
                    <td>Sector</td>
                    <td><?=$planets->sector?></td>
                </tr>
                <tr>
                    <td>System</td>
                    <td><?=$planets->system?></td>
                </tr>
            </tbody>
        </table>

        <div class="image">
            <?php $this->load->helper('url');?>
            <img src="<?=base_url('uploads/image/planet/'.$planets->image)?>" width=auto height="300">
        </div>

        <p class='back'><a href="<?=base_url('planets')?>">Back</a></p>
        
        <?php $this->load->view('footer'); ?>
    </body>
</html>

