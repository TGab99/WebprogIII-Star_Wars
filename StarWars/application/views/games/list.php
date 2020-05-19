<?php echo anchor(base_url('games/insert'),'Új hozzáadása'); ?>
<?php if($game == NULL || empty($game)):?>
    <p>Nincs rögzítve egyetlen játék sem!</p>
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
                <th>Műveletek</th>
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
                    <?php echo anchor(base_url('games/profile/'.$g->id),'Profil'); ?>
                    <?php echo anchor(base_url('games/edit/'.$g->id),'Módosítás');?>
                    <?php echo anchor(base_url('games/delete/'.$g->id),'Törlés'); ?>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
<?php endif; ?>