<?php $this->load->helper('url');?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('style/profile.css');?>">
<h1 id="main">Star Wars</h1>
<div class="nav">
        <a href="<?=base_url('index.php')?>">Home</a> |
        <a href="<?=base_url('films') ?>">Films</a> |
        <a href="<?=base_url('series') ?>">Series</a> |
        <a href="<?=base_url('games')?>">Games</a> |
        <a href="">Characters</a> |
        <a href="<?=base_url('planets')?>">Planets</a> |
        <a href="<?=base_url('weapons')?>">Weapons</a>
</div>
<br>
<h1><?=$jedi->name?> adatlapja</h1>
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
            <td><?=$jedi->name?></td>
        </tr>
        <tr>
            <td>Homeworld</td>
            <td><?=$jedi->homeworld?></td>
        </tr>
        <tr>
            <td>Species</td>
            <td><?=$jedi->species?></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td><?=$jedi->gender?></td>
        </tr>
        <tr>
            <td>Rank</td>
            <td><?=$jedi->rank?></td>
        </tr>
    </tbody>
</table>
<div class="image">
<?php $this->load->helper('url');?>
<img src="<?=base_url('uploads/image/jedi/'.$jedi->image)?>" width=auto height="300">
</div>
<p class='back'><a href="<?=base_url('jedi')?>">Back</a></p>