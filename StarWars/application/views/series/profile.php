<h1><?=$series->title?> adatlapja</h1>
<?php $this->load->helper('url');?>
<img src="<?=base_url('uploads/image/series/'.$series->image)?>">
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
            <td><?=$series->title?></td>
        </tr>
        <tr>
            <td>Release date</td>
            <td><?=$series->release_date?></td>
        </tr>
    </tbody>
</table>