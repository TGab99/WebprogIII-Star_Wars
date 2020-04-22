<?php echo anchor(base_url('jedi/insert'),'Új hozzáadása'); ?>
<?php if($jedi == NULL || empty($jedi)) : ?>
    <p>Nincs rögzítve egyetlen jedi sem!</p>
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
            <?php foreach ($jedi as $j):?>
            <tr>
                <td><?=$j->id?></td>
                <td><a href="<?=base_url('uploads/image/jedi/'.$j->image)?>" target="_blank"><?=$j->name?></a></td>
                <td><?=$j->homeworld?></td>
                <td><?=$j->species?></td>
                <td><?=$j->gender?></td>
                <td><?=$j->rank?></td>
                <td>
                    <?php echo anchor(base_url('jedi/profile/'.$j->id),'Profil'); ?>
                    <?php echo anchor(base_url('jedi/edit/'.$j->id),'Módosít'); ?>
                    <?php echo anchor(base_url('jedi/delete/'.$j->id),'Törlés'); ?>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
<?php endif; ?>


