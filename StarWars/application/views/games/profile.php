<?php $this->load->helper('url');?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('style/profile.css');?>">
<h1 id="main">Star Wars</h1>
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
<h1><?=$game->name?> adatlapja</h1>
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
            <td><?=$game->name?></td>
        </tr>
        <tr>
            <td>Developers</td>
            <td><?=$game->developers?></td>
        </tr>
        <tr>
            <td>Publishers</td>
            <td><?=$game->publishers?></td>
        </tr>
        <tr>
            <td>Release date</td>
            <td><?=$game->release_date?></td>
        </tr>
        <tr>
            <td>Model</td>
            <td><?=$game->models?></td>
        </tr>
        <tr>
            <td>Platform</td>
            <td><?=$game->platforms?></td>
        </tr>
    </tbody>
</table>
<div class="image">
<?php $this->load->helper('url');?>
<img src="<?=base_url('uploads/image/games/'.$game->image)?>" width=auto height="300">
</div>
<p class='back'><a href="<?=base_url('games')?>">Back</a></p>