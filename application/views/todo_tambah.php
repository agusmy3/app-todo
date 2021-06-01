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

<form method='post' action="<?= base_url(); ?>todo/todo_tambah">
Nama<input type='text' name='name'>
Keterangan<input type='text' name='ket'>
<button type='submit' name='simpan'>Simpan</button>
</from>

</body>
</html>