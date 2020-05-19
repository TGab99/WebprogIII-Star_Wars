<?php echo anchor(base_url('series/insert'),'Új hozzáadása'); ?>
<?php if($series == NULL || empty($series)):?>
    <p>Nincs rögzítve egyetlen egy sorozat sem!</p>
<?php else:?>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Release date</th>
                <th>Műveletek</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($series as $s):?>
            <tr>
                <td><?=$s->id?></td>
                <td><a href="<?=base_url('uploads/image/series/'.$s->image)?>" target="_blank"><?=$s->title?></a></td>
                <td><?=$s->release_date?></td>
                <td>
                    <?php echo anchor(base_url('series/profile/'.$s->id),'Profil'); ?>
                    <?php echo anchor(base_url('series/edit/'.$s->id),'Módosítás');?>
                    <?php echo anchor(base_url('series/delete/'.$s->id),'Törlés'); ?>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
<?php endif; ?>