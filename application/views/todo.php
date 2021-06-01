<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>To Do</title>

	
</head>
<body>
<a href='<?php base_url();?>todo/todo_tambah'>Tambah Pekerjaan</a>
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
        <td><?= $tl->todo_sts = 1 ? "Selesai" : "Belum Selesai"; ?></td>
        <td><a href='<?= base_url();?>todo/todo_ubah/<?= $tl->todo_id;?>'>Ubah</a> | <a href='<?= base_url();?>todo/todo_hapus/<?= $tl->todo_id;?>'>Hapus</a></td>
    </tr>
<?php
    }
?>
    
</table>

</body>
</html>