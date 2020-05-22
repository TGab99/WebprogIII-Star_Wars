<link rel="stylesheet" type="text/css" href="<?php echo base_url('style/list.css');?>">
<h1 id="main">Star Wars</h1>
<div class="nav">
        <a href="<?=base_url('Main.html')?>">Home</a> |
        <a href="<?=base_url('films') ?>">Films</a> |
        <a href="">Series</a> |
        <a href="<?=base_url('games')?>">Games</a> |
        <a href="">Characters</a> |
        <a href="<?=base_url('planets')?>">Planets</a> |
        <a href="<?=base_url('weapons')?>">Weapons</a>
</div>
<br>
<p id="insert"><?php echo anchor(base_url('series/insert'),'Új hozzáadása'); ?></p>
<?php if($series == NULL || empty($series)):?>
    <p>No any records in the series's table!</p>
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
            <?php foreach($series as $s):?>
            <tr>
                <td><?=$s->id?></td>
                <td><a href="<?=base_url('uploads/image/series/'.$s->image)?>" target="_blank"><?=$s->title?></a></td>
                <td><?=$s->release_date?></td>
                <td>
                    <?php echo anchor(base_url('series/profile/'.$s->id),'Profil'); ?>
                    <?php echo anchor(base_url('series/edit/'.$s->id),'Edit');?>
                    <?php echo anchor(base_url('series/delete/'.$s->id),'Delete'); ?>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
<?php endif; ?>