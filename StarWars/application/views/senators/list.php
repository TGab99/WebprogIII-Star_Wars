<?php echo anchor(base_url('senators/insert'),'Új hozzáadása'); ?>
<?php if($senator == NULL || empty($senator)):?>
    <p>Nincs rögzítve egyetlen szenátor sem!</p>
<?php else:?>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Homeworld</th>
                <th>Species</th>
                <th>Gender</th>
                <th>Műveletek</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($senator as $s):?>
            <tr>
                <td><?=$s->id?></td>
                <td><a href="<?=base_url('uploads/image/senators/'.$s->image)?>" target="_blank"><?=$s->name?></a></td>
                <td><?=$s->homeworld?></td>
                <td><?=$s->species?></td>
                <td><?=$s->gender?></td>
                <td>
                    <?php echo anchor(base_url('senators/profile/'.$s->id),'Profil'); ?>
                    <?php echo anchor(base_url('senators/edit/'.$s->id),'Módosítás');?>
                    <?php echo anchor(base_url('senators/delete/'.$s->id),'Törlés'); ?>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
<?php endif; ?>
