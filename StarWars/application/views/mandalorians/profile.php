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
<h1><?=$mandalorian->name?> adatlapja</h1>
<?php $this->load->helper('url');?>
<img src="<?=base_url('uploads/image/mandalorians/'.$mandalorian->image)?>">
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
            <td><?=$mandalorian->name?></td>
        </tr>
        <tr>
            <td>Homeworld</td>
            <td><?=$mandalorian->homeworld?></td>
        </tr>
        <tr>
            <td>Species</td>
            <td><?=$mandalorian->species?></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td><?=$mandalorian->gender?></td>
        </tr>
    </tbody>
</table>