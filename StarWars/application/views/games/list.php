<link rel="stylesheet" type="text/css" href="<?php echo base_url('style/list.css');?>">
<h1 id="main">Star Wars</h1>
<div class="nav">
        <a href="<?=base_url('index')?>">Home</a> |
        <a href="<?=base_url('films') ?>">Films</a> |
        <a href="<?=base_url('series') ?>">Series</a> |
        <a href="">Games</a> |
        <a href="">Characters</a> |
        <a href="<?=base_url('planets')?>">Planets</a> |
        <a href="<?=base_url('weapons')?>">Weapons</a>
</div>
<br>
<p id="insert"><?php echo anchor(base_url('games/insert'),'Insert new record'); ?></p>
<?php if($game == NULL || empty($game)):?>
    <p>No any records in the game's table!</p>
<?php else:?>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Developers</th>
                <th>Publishers</th>
                <th>Release date</th>
                <th>Models</th>
                <th>Platforms</th>
                <th>Options</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($game as $g):?>
            <tr>
                <td><?=$g->id?></td>
                <td><a href="<?=base_url('uploads/image/games/'.$g->image)?>" target="_blank"><?=$g->name?></a></td>
                <td><?=$g->developers?></td>
                <td><?=$g->publishers?></td>
                <td><?=$g->release_date?></td>
                <td><?=$g->models?></td>
                <td><?=$g->platforms?></td>
                <td>
                    <?php echo anchor(base_url('games/profile/'.$g->id),'Profile'); ?>
                    <?php echo anchor(base_url('games/edit/'.$g->id),'Edit');?>
                    <?php echo anchor(base_url('games/delete/'.$g->id),'Delete'); ?>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
<?php endif; ?>