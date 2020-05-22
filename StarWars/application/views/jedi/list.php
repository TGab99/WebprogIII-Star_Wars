<link rel="stylesheet" type="text/css" href="<?php echo base_url('style/list.css');?>">
<h1 id="main">Star Wars</h1>
<div class="nav">
        <a href="<?=base_url('Main.html')?>">Home</a> |
        <a href="<?=base_url('films') ?>">Films</a> |
        <a href="<?=base_url('series') ?>">Series</a> |
        <a href="<?=base_url('games')?>">Games</a> |
        <a href="">Characters</a> |
        <a href="<?=base_url('planets')?>">Planets</a> |
        <a href="<?=base_url('weapons')?>">Weapons</a>
</div>
<br>
<p id="insert"><?php echo anchor(base_url('jedi/insert'),'Új hozzáadása'); ?><p>
<?php if($jedi == NULL || empty($jedi)) : ?>
    <p>No any records in the jedi's table!</p>
<?php else: ?>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Homeword</th>
                <th>Species</th>
                <th>Gender</th>
                <th>Rank</th>
                <th>Options</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($jedi as $j):?>
            <tr>
                <td><?=$j->id?></td>
                <td><a href="<?=base_url('uploads/image/jedi/'.$j->image)?>" target="_blank"><?=$j->name?></a></td>
                <td><?=$j->homeworld?></td>
                <td><?=$j->species?></td>
                <td><?=$j->gender?></td>
                <td><?=$j->rank?></td>
                <td>
                    <?php echo anchor(base_url('jedi/profile/'.$j->id),'Profil'); ?>
                    <?php echo anchor(base_url('jedi/edit/'.$j->id),'Edit'); ?>
                    <?php echo anchor(base_url('jedi/delete/'.$j->id),'Delete'); ?>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
<?php endif; ?>


