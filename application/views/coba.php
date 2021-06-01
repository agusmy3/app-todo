<h3>Pekerjaan</h3>
<table>
    <tr>
        <th>Nama Pekerjaan</th>
        <th>Waktu</th>
        <th>Desk</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr>
<?php
    foreach($todo_list as $tl){
?>
    <tr>
        <td><?= $tl->todo_name;?></td>
        <td><?= $tl->todo_time;?></td>
        <td><?= $tl->todo_desc;?></td>
        <td><?= ($tl->todo_sts == 1) ? "Selesai" : "Belum Selesai"; ?></td>
        <td><input type="checkbox" class="bs" name="check" data-id="<?= $tl->todo_id?>" data-sts="1"></td>
        </tr>
<?php
    }
?>
    
</table>

<h3>Pekerjaan Terselesaiakan</h3>
<table>
    <tr>
        <th>Nama Pekerjaan</th>
        <th>Waktu</th>
        <th>Desk</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr>
<?php
    foreach($todo_list_finished as $tlf){
?>
    <tr>
        <td><?= $tlf->todo_name;?></td>
        <td><?= $tlf->todo_time;?></td>
        <td><?= $tlf->todo_desc;?></td>
        <td><?= ($tlf->todo_sts == 1) ? "Selesai" : "Belum Selesai"; ?></td>
        <td><input type="checkbox" class="bs" name="check" data-id="<?= $tlf->todo_id?>" data-sts="0" checked></td>
        </tr>
<?php
    }
?>
    
</table>