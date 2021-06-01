<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login</title>
</head>
<body>

<form method='post' action="<?= base_url(); ?>login/login">
Username<input type='text' name='un'>
Password <input type='password' name='pw'>
<button type='submit' name='login'>Login</button>
</from>

</body>
</html>