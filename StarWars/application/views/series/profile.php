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
<h1><?=$series->title?>'s profile</h1>
<table class="table">
    <thead>
        <tr>
            <th>Information</th>
            <th>Data</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Title</td>
            <td><?=$series->title?></td>
        </tr>
        <tr>
            <td>Release date</td>
            <td><?=$series->release_date?></td>
        </tr>
    </tbody>
</table>
<div class="image">
<?php $this->load->helper('url');?>
<img src="<?=base_url('uploads/image/series/'.$series->image)?>" width=auto height="300">
</div>
<p class='back'><a href="<?=base_url('series')?>">Back</a></p>
<?php $this->load->view('footer'); ?>