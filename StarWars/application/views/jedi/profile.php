<h1><?=$jedi->name?> adatlapja</h1>
<?php $this->load->helper('url');?>
<img src="<?=base_url('uploads/image/jedi/'.$jedi->image)?>">
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

