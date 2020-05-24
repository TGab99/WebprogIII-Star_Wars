<?php $this->load->helper('url');?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('style/profile.css');?>">

<?php $this->load->view('header'); ?>

<div class="nav">
        <a href="<?=base_url('home')?>">Home</a> |
        <a href="<?=base_url('films') ?>">Films</a> |
        <a href="<?=base_url('series') ?>">Series</a> |
        <a href="<?=base_url('games')?>">Games</a> |
        <a href="<?=base_url('jedi')?>">Jedi</a> |
        <a href="<?=base_url('sith')?>">Sith</a> |
        <a href="<?=base_url('clones')?>">Clones</a> |
        <a href="<?=base_url('droid')?>">Droid</a> |
        <a href="<?=base_url('mandalorians')?>">Mandalorians</a> |
        <a href="<?=base_url('senators')?>">Senators</a> |
        <a href="<?=base_url('species')?>">Species</a> |
        <a href="<?=base_url('planets')?>">Planets</a> |
        <a href="<?=base_url('weapons')?>">Weapons</a>
</div>
<br>
<h1><?=$droid->name?>'s profile</h1>
<table class="table">
    <thead>
        <tr>
            <th>Information</th>
            <th>Data</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Name</td>
            <td><?=$droid->name?></td>
        </tr>
        <tr>
            <td>Homeworld</td>
            <td><?=$droid->homeworld?></td>
        </tr>
        <tr>
            <td>Creator</td>
            <td><?=$droid->creator?></td>
        </tr>
        <tr>
            <td>Model</td>
            <td><?=$droid->model?></td>
        </tr>
        <tr>
            <td>Class</td>
            <td><?=$droid->class?></td>
        </tr>
    </tbody>
</table>
<div class="image">
    <?php $this->load->helper('url');?>
    <img src="<?=base_url('uploads/image/droid/'.$droid->image)?>" width=auto height="300">
</div>
<p class='back'><a href="<?=base_url('droid')?>">Back</a></p>
<?php $this->load->view('footer'); ?>