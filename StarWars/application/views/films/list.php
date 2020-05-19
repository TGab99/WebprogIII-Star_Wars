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
<?php echo anchor(base_url('films/insert'),'Új hozzáadása'); ?>
<?php if($film == NULL || empty($film)):?>
    <p>Nincs rögzítve egyetlen egy film sem!</p>
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
            <?php foreach($film as $f):?>
            <tr>
                <td><?=$f->id?></td>
                <td><a href="<?=base_url('uploads/image/films/'.$f->image)?>" target="_blank"><?=$f->title?></a></td>
                <td><?=$f->release_date?></td>
                <td>
                    <?php echo anchor(base_url('films/profile/'.$f->id),'Profil'); ?>
                    <?php echo anchor(base_url('films/edit/'.$f->id),'Módosítás');?>
                    <?php echo anchor(base_url('films/delete/'.$f->id),'Törlés'); ?>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
<?php endif; ?>