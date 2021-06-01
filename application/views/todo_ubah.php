<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>To Do</title>
</head>
<body>

<form method='post' action="<?= base_url(); ?>todo/todo_ubah">
<input type="hidden" value="<?= $todo['todo_id'];?>" name="id">
Nama<input type='text' name='name' value="<?= $todo['todo_name'];?>">
Keterangan<input type='text' name='ket' value="<?= $todo['todo_desc'];?>">
<button type='submit' name='simpan'>Simpan</button>
</from>

</body>
</html>