<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
	<h1>Login Front Desk</h1>
	<form action="<?php echo base_url('login/aksi_login'); ?>" method="post">		
		<table>
			<tr>
				<td>nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>nip</td>
				<td><input type="text" name="nip"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Login"></td>
			</tr>
		</table>
	</form>
</body>
</html>