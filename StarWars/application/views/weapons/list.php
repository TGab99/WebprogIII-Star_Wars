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
            <a href="<?=base_url('planets')?>">Planets</a> |
            <a href="">Weapons</a>
        </div>
        <br/>

        <p id='insert'><?php echo anchor(base_url('weapons/insert'),'Insert new record'); ?></p>
        <?php if($weapons == NULL || empty($weapons)): ?>
            <p>No any records in the weapon's table!</p>
        <?php else: ?>
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($weapons as $w): ?>
                        <tr>
                            <td><?=$w->id?></td>
                            <td><a href="<?=base_url('uploads/image/weapon/'.$w->image)?>" target="_blank"><?=$w->name?></a></td>
                            <td><?=$w->type?></td>
                            <td>
                                <?php echo anchor(base_url('weapons/profile/'.$w->id),'Profile'); ?>
                                <?php echo anchor(base_url('weapons/edit/'.$w->id),'Edit'); ?>
                                <?php echo anchor(base_url('weapons/delete/'.$w->id),'Delete'); ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
        
        <?php $this->load->view('footer'); ?>
    </body>
</html>
