<h1><?=$film->title?> adatlapja</h1>
<?php $this->load->helper('url');?>
<img src="<?=base_url('uploads/image/films/'.$film->image)?>">
<table>
    <thead>
        <tr>
            <th>Információ</th>
            <th>Adat</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Title</td>
            <td><?=$film->title?></td>
        </tr>
        <tr>
            <td>Release date</td>
            <td><?=$film->release_date?></td>
        </tr>
    </tbody>
</table>