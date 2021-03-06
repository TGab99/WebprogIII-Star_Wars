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
            <a href="">Mandalorians</a> |
            <a href="<?=base_url('senators')?>">Senators</a> |
            <a href="<?=base_url('species')?>">Species</a> |
            <a href="<?=base_url('planets')?>">Planets</a> |
            <a href="<?=base_url('weapons')?>">Weapons</a>
        </div>
        <br/>

        <p id="insert"><?php echo anchor(base_url('mandalorians/insert'),'Insert new record'); ?></p>

        <?php if($mandalorian == NULL || empty($mandalorian)) : ?>
            <p>No any records in the mandalorian's table!</p>
        <?php else: ?>
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Homeworld</th>
                        <th>Species</th>
                        <th>Gender</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($mandalorian as $m):?>
                    <tr>
                        <td><?=$m->id?></td>
                        <td><a href="<?=base_url('uploads/image/mandalorians/'.$m->image)?>" target="_blank"><?=$m->name?></a></td>
                        <td><?=$m->homeworld?></td>
                        <td><?=$m->species?></td>
                        <td><?=$m->gender?></td>
                        <td>
                            <?php echo anchor(base_url('mandalorians/profile/'.$m->id),'Profile'); ?>
                            <?php echo anchor(base_url('mandalorians/edit/'.$m->id),'Edit'); ?>
                            <?php echo anchor(base_url('mandalorians/delete/'.$m->id),'Delete'); ?>
                        </td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        <?php endif; ?>

        <?php $this->load->view('footer'); ?>
    </body>
</html>
