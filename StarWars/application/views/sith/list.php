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
<p id='insert'><?php echo anchor(base_url('sith/insert'),'Insert new record'); ?></p>
<?php if($sith == NULL || empty($sith)): ?>
    <p>No any records in the sith's table!</p>
<?php else: ?>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Homeworld</th>
                <th>Species</th>
                <th>Gender</th>
                <th>Rank</th>
                <th>Options</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($sith as $s): ?>
            <tr>
                <td><?=$s->id?></td>
                <td><a href="<?=base_url('uploads/image/sith/'.$s->image)?>" target="_blank"><?=$s->name?></a></td>
                <td><?=$s->homeworld?></td>
                <td><?=$s->species?></td>
                <td><?=$s->gender?></td>
                <td><?=$s->rank?></td>
                <td>
                    <?php echo anchor(base_url('sith/profile/'.$s->id),'Profile'); ?>
                    <?php echo anchor(base_url('sith/edit/'.$s->id),'Edit'); ?>
                    <?php echo anchor(base_url('sith/delete/'.$s->id),'Delete'); ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>
