<style>
    li{
        display: inline;
    }
    ul{
        background-color: #dddddd;
    }
</style>
<ul>
    <li>Home</li>
    <li>Films</li>
    <li>Series</li>
    <li>Lists</li>
</ul>
<br>
<?php echo anchor(base_url('weapons/insert'),'Új hozzáadása'); ?>
<?php if($weapons == NULL || empty($weapons)): ?>
    <p>Nincs rögzítve egyetlen fegyver sem!</p>
<?php else: ?>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Név</th>
                <th>Típus</th>
                <th>Műveletek</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($weapons as $w): ?>
            <tr>
                <td><?=$w->id?></td>
                <td><a href="<?=base_url('uploads/image/weapon/'.$w->image)?>" target="_blank"><?=$w->name?></a></td>
                <td><?=$w->type?></td>
                <td>
                    <?php echo anchor(base_url('weapons/profile/'.$w->id),'Profil'); ?>
                    <?php echo anchor(base_url('weapons/edit/'.$w->id),'Módosítás'); ?>
                    <?php echo anchor(base_url('weapons/delete/'.$w->id),'Törlés'); ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>