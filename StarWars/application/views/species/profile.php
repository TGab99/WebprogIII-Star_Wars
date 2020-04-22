<h1><?=$species->name?> adatlapja</h1>
<?php $this->load->helper('url');?>
<img src="<?=base_url('uploads/image/species/'.$species->image)?>">
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
            <td><?=$species->name?></td>
        </tr>
        <tr>
            <td>Anyabolygó</td>
            <td><?=$species->homeworld?></td>
        </tr>
        <tr>
            <td>Faj</td>
            <td><?=$species->species?></td>
        </tr>
        <tr>
            <td>Nem</td>
            <td><?=$species->gender?></td>
        </tr>
    </tbody>
</table>