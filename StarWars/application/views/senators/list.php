<link rel="stylesheet" type="text/css" href="<?php echo base_url('style/list.css');?>">
<?php $this->load->view('header'); ?>
<div class="nav">
        <a href="<?=base_url('index')?>">Home</a> |
        <a href="<?=base_url('films') ?>">Films</a> |
        <a href="<?=base_url('series') ?>">Series</a> |
        <a href="<?=base_url('games')?>">Games</a> |
        <a href="">Characters</a> |
        <a href="<?=base_url('planets')?>">Planets</a> |
        <a href="<?=base_url('weapons')?>">Weapons</a>
</div>
<br>
<p id="insert"><?php echo anchor(base_url('senators/insert'),'Insert new record'); ?></p>
<?php if($senator == NULL || empty($senator)):?>
    <p>No any records in the senator's table!</p>
<?php else:?>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Homeworld</th>
                <th>Species</th>
                <th>Gender</th>
                <th>Options</th>
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
                    <?php echo anchor(base_url('senators/profile/'.$s->id),'Profile'); ?>
                    <?php echo anchor(base_url('senators/edit/'.$s->id),'Edit');?>
                    <?php echo anchor(base_url('senators/delete/'.$s->id),'Delete'); ?>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
<?php endif; ?>
<?php $this->load->view('footer'); ?>