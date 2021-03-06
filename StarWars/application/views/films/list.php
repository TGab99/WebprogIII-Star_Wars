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
            <a href="">Films</a> |
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

        <p id="insert"><?php echo anchor(base_url('films/insert'),'Insert new record'); ?></p>
        <?php if($film == NULL || empty($film)):?>
            <p>No any records in the film's table!</p>
        <?php else:?>
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Release date</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($film as $f):?>
                        <tr>
                            <td><?=$f->id?></td>
                            <td><a href="<?=base_url('uploads/image/films/'.$f->image)?>" target="_blank"><?=$f->title?></a></td>
                            <td><?=$f->release_date?></td>
                            <td>
                                <?php echo anchor(base_url('films/profile/'.$f->id),'Profile'); ?>
                                <?php echo anchor(base_url('films/edit/'.$f->id),'Edit');?>
                                <?php echo anchor(base_url('films/delete/'.$f->id),'Delete'); ?>
                            </td>
                        </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        <?php endif; ?>
        <?php $this->load->view('footer'); ?>
    </body>
</html>
