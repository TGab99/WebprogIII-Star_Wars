<link rel="stylesheet" type="text/css" href="<?php echo base_url('style/list.css');?>">

<?php $this->load->view('header'); ?>

<div>
        <a href="<?=base_url('home')?>">Home</a> |
        <a href="<?=base_url('films') ?>">Films</a> |
        <a href="<?=base_url('series') ?>">Series</a> |
        <a href="<?=base_url('games')?>">Games</a> |
        <a href="<?=base_url('jedi')?>">Jedi</a> |
        <a href="<?=base_url('sith')?>">Sith</a> |
        <a href="">Clones</a> |
        <a href="<?=base_url('droid')?>">Droid</a> |
        <a href="<?=base_url('mandalorians')?>">Mandalorians</a> |
        <a href="<?=base_url('senators')?>">Senators</a> |
        <a href="<?=base_url('species')?>">Species</a> |
        <a href="<?=base_url('planets')?>">Planets</a> |
        <a href="<?=base_url('weapons')?>">Weapons</a>
</div>
<br>
<p id="insert"><?php echo anchor(base_url('clones/insert'),'Insert new record'); ?></p>
<?php if($clone == NULL || empty($clone)) : ?>
    <p>No any records in the clone's table!</p>
<?php else: ?>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Homeworld</th>
                <th>Species</th>
                <th>Gender</th>
                <th>Rank</th>
                <th>Options</th>
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
                    <?php echo anchor(base_url('clones/profile/'.$c->id),'Profile'); ?>
                    <?php echo anchor(base_url('clones/edit/'.$c->id),'Edit'); ?>
                    <?php echo anchor(base_url('clones/delete/'.$c->id),'Delete'); ?>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
<?php endif; ?>
<?php $this->load->view('footer'); ?>