<?php echo anchor(base_url('species/insert'),'Új hozzáadása'); ?>
<?php if($species == NULL || empty($species)): ?>
    <p>Nincs rögzítve egyetlen faj sem!</p>
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
            <?php foreach($species as $s): ?>
            <tr>
                <td><?=$s->id?></td>
                <td><a href="<?=base_url('uploads/image/species/'.$s->image)?>" target="_blank"><?=$s->name?></a></td>
                <td><?=$s->homeworld?></td>
                <td><?=$s->species?></td>
                <td><?=$s->gender?></td>
                <td>
                    <?php echo anchor(base_url('species/profile/'.$s->id),'Profil'); ?>
                    <?php echo anchor(base_url('species/edit/'.$s->id),'Módosítás'); ?>
                    <?php echo anchor(base_url('species/delete/'.$s->id),'Törlés'); ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>