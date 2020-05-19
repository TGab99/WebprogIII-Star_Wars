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
<?php echo anchor(base_url('mandalorians/insert'),'Új hozzáadása'); ?>
<?php if($mandalorian == NULL || empty($mandalorian)) : ?>
    <p>Nincs rögzítve egyetlen mandalór sem!</p>
<?php else: ?>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Név</th>
                <th>Anyabolygó</th>
                <th>Faj</th>
                <th>Nem</th>
                <th>Műveletek</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mandalorian as $m):?>
            <tr>
                <td><?=$m->id?></td>
                <td><a href="<?=base_url('uploads/image/mandalorians/'.$m->image)?>" target="_blank"><?=$m->name?></a></td>
                <td><?=$m->homeworld?></td>
                <td><?=$m->species?></td>
                <td><?=$m->gender?></td>
                <td>
                    <?php echo anchor(base_url('mandalorians/profile/'.$m->id),'Profil'); ?>
                    <?php echo anchor(base_url('mandalorians/edit/'.$m->id),'Módosít'); ?>
                    <?php echo anchor(base_url('mandalorians/delete/'.$m->id),'Törlés'); ?>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
<?php endif; ?>