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
<?php echo anchor(base_url('droid/insert'),'Új hozzáadása'); ?>
<?php if($droid == NULL || empty($droid)): ?>
    <p>Nincs rögzítve egyetlen droid sem!</p>
<?php else: ?>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Név</th>
                <th>Anyabolygó</th>
                <th>Készítő</th>
                <th>Model</th>
                <th>Osztály</th>
                <th>Műveletek</th>
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
                    <?php echo anchor(base_url('droid/profile/'.$s->id),'Profil'); ?>
                    <?php echo anchor(base_url('droid/edit/'.$s->id),'Módosítás'); ?>
                    <?php echo anchor(base_url('droid/delete/'.$s->id),'Törlés'); ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>