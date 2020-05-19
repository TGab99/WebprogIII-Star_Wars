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
<?php echo anchor(base_url('clones/insert'),'Új hozzáadása'); ?>
<?php if($clone == NULL || empty($clone)) : ?>
    <p>Nincs rögzítve egyetlen klón sem!</p>
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
            <?php foreach ($clone as $c):?>
            <tr>
                <td><?=$c->id?></td>
                <td><a href="<?=base_url('uploads/image/clones/'.$c->image)?>" target="_blank"><?=$c->name?></a></td>
                <td><?=$c->homeworld?></td>
                <td><?=$c->species?></td>
                <td><?=$c->gender?></td>
                <td><?=$c->rank?></td>
                <td>
                    <?php echo anchor(base_url('clones/profile/'.$c->id),'Profil'); ?>
                    <?php echo anchor(base_url('clones/edit/'.$c->id),'Módosít'); ?>
                    <?php echo anchor(base_url('clones/delete/'.$c->id),'Törlés'); ?>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
<?php endif; ?>