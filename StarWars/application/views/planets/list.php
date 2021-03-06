<!DOVTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <title>Star Wars</title>
        
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('style/list.css');?>">
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
            <a href="">Planets</a> |
            <a href="<?=base_url('weapons')?>">Weapons</a>
        </div>
        <br/>

        <p id="insert"><?php echo anchor(base_url('planets/insert'),'Insert new record'); ?></p>

        <?php if($planets == NULL || empty($planets)): ?>
            <p>No any records in the planet's table!</p>
        <?php else: ?>
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Regio</th>
                        <th>Sector</th>
                        <th>System</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($planets as $p): ?>
                        <tr>
                            <td><?=$p->id?></td>
                            <td><a href="<?=base_url('uploads/image/planet/'.$p->image)?>" target="_blank"><?=$p->name?></a></td>
                            <td><?=$p->regio?></td>
                            <td><?=$p->sector?></td>
                            <td><?=$p->system?></td>
                            <td>
                                <?php echo anchor(base_url('planets/profile/'.$p->id),'Profile'); ?>
                                <?php echo anchor(base_url('planets/edit/'.$p->id),'Edit'); ?>
                                <?php echo anchor(base_url('planets/delete/'.$p->id),'Delete'); ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>

        <?php $this->load->view('footer'); ?>
    </body>
</html>
