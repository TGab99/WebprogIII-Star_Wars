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
<h1><?=$clone->name?> adatlapja</h1>
<?php $this->load->helper('url');?>
<img src="<?=base_url('uploads/image/clones/'.$clone->image)?>">
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
            <td><?=$clone->name?></td>
        </tr>
        <tr>
            <td>Homeworld</td>
            <td><?=$clone->homeworld?></td>
        </tr>
        <tr>
            <td>Species</td>
            <td><?=$clone->species?></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td><?=$clone->gender?></td>
        </tr>
        <tr>
            <td>Rank</td>
            <td><?=$clone->rank?></td>
        </tr>
    </tbody>
</table>