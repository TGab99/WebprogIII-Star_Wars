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
<h1><?=$senator->name?> adatlapja</h1>
<?php $this->load->helper('url');?>
<img src="<?=base_url('uploads/image/senators/'.$senator->image)?>">
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
            <td><?=$senator->name?></td>
        </tr>
        <tr>
            <td>Homeworld</td>
            <td><?=$senator->homeworld?></td>
        </tr>
        <tr>
            <td>Species</td>
            <td><?=$senator->species?></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td><?=$senator->gender?></td>
        </tr>
    </tbody>
</table>