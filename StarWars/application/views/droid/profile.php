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
<h1><?=$droid->name?> adatlapja</h1>
<?php $this->load->helper('url');?>
<img src="<?=base_url('uploads/image/droid/'.$droid->image)?>">
<table>
    <thead>
        <tr>
            <th>Információ</th>
            <th>Adat</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Név</td>
            <td><?=$droid->name?></td>
        </tr>
        <tr>
            <td>Anyabolygó</td>
            <td><?=$droid->homeworld?></td>
        </tr>
        <tr>
            <td>Species</td>
            <td><?=$droid->creator?></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td><?=$droid->model?></td>
        </tr>
        <tr>
            <td>Rank</td>
            <td><?=$droid->class?></td>
        </tr>
    </tbody>
</table>