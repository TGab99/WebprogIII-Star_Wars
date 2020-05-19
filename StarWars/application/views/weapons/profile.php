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
<h1><?=$weapons->name?> adatlapja</h1>
<?php $this->load->helper('url');?>
<img src="<?=base_url('uploads/image/weapon/'.$weapons->image)?>">
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
            <td><?=$weapons->name?></td>
        </tr>
        <tr>
            <td>Regió</td>
            <td><?=$weapons->type?></td>
        </tr>
    </tbody>
</table>