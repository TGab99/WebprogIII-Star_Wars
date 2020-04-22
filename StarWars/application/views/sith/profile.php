<h1><?=$sith->name?> adatlapja</h1>
<?php $this->load->helper('url');?>
<img src="<?=base_url('uploads/image/sith/'.$sith->image)?>">
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
            <td><?=$sith->name?></td>
        </tr>
        <tr>
            <td>Homeworld</td>
            <td><?=$sith->homeworld?></td>
        </tr>
        <tr>
            <td>Species</td>
            <td><?=$sith->species?></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td><?=$sith->gender?></td>
        </tr>
        <tr>
            <td>Rank</td>
            <td><?=$sith->rank?></td>
        </tr>
    </tbody>
</table>