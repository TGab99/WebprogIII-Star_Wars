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
<h1><?=$game->name?> adatlapja</h1>
<?php $this->load->helper('url');?>
<img src="<?=base_url('uploads/image/games/'.$game->image)?>">
<table>
    <thead>
        <tr>
            <th>Információ</th>
            <th>Adat</th>
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