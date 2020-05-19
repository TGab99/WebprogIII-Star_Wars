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
<?php echo anchor(base_url('sith/insert'),'Új hozzáadása'); ?>
<?php if($sith == NULL || empty($sith)): ?>
    <p>Nincs rögzítve egyetlen Sith sem!</p>
<?php else: ?>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Név</th>
                <th>Anyabolygó</th>
                <th>Faj</th>
                <th>Nem</th>
                <th>Rang</th>
                <th>Műveletek</th>
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
                    <?php echo anchor(base_url('sith/profile/'.$s->id),'Profil'); ?>
                    <?php echo anchor(base_url('sith/edit/'.$s->id),'Módosítás'); ?>
                    <?php echo anchor(base_url('sith/delete/'.$s->id),'Törlés'); ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>
