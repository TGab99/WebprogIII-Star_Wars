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
<p id="insert"><?php echo anchor(base_url('droid/insert'),'Insert new record'); ?></p>
<?php if($droid == NULL || empty($droid)): ?>
    <p>No any records in the droid's table!</p>
<?php else: ?>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Homeworld</th>
                <th>Creator</th>
                <th>Model</th>
                <th>Class</th>
                <th>Options</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($droid as $s): ?>
            <tr>
                <td><?=$s->id?></td>
                <td><a href="<?=base_url('uploads/image/droid/'.$s->image)?>" target="_blank"><?=$s->name?></a></td>
                <td><?=$s->homeworld?></td>
                <td><?=$s->creator?></td>
                <td><?=$s->model?></td>
                <td><?=$s->class?></td>
                <td>
                    <?php echo anchor(base_url('droid/profile/'.$s->id),'Profile'); ?>
                    <?php echo anchor(base_url('droid/edit/'.$s->id),'Edit'); ?>
                    <?php echo anchor(base_url('droid/delete/'.$s->id),'Delete'); ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>