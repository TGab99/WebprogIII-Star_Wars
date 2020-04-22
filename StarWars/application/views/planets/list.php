<?php if($planets == NULL || empty($planets)): ?>
    <p>Nincs rögzítve egyetlen bolygó sem!</p>
<?php else: ?>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Név</th>
                <th>Régió</th>
                <th>Szektor</th>
                <th>Rendszer</th>
                <th>Műveletek</th>
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
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>