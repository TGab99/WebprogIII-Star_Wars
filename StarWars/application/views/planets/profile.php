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
<h1><?=$planets->name?> adatlapja</h1>
<?php $this->load->helper('url');?>
<img src="<?=base_url('uploads/image/planet/'.$planets->image)?>">
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
            <td><?=$planets->name?></td>
        </tr>
        <tr>
            <td>Regió</td>
            <td><?=$planets->regio?></td>
        </tr>
        <tr>
            <td>Szektor</td>
            <td><?=$planets->sector?></td>
        </tr>
        <tr>
            <td>Rendszer</td>
            <td><?=$planets->system?></td>
        </tr>
    </tbody>
</table>
