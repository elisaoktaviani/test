<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table{
			font-family: verdana, helvetica, arial, sans-serif;
			font-style: 10px;
		}
		input{
			font-family: verdana, helvetica, times new roman, sans-serif;
			font-style: 10px;
			height:25px;
		}
	</style>

</head>
<body bgcolor="blue">
	<div align="center">
		<form method="POST" action="daftar.php">
			<table width="365" border="1">
				<tr bgcolor="#f9c7e5">
					<td height="25" colspan="2" align="center"><font color="#000">Daftar Akun Baru</font></td>
				</tr>
				<tr>
					<td width="100" height="15"></td>
					<td width="170"></td>
				</tr>
				<td height="25" align="right">username:</td>
				<td> <input type="text" name="username" size="20" maxlength="20"></td>
				</tr>
				<tr>
					<td height="25" align="right">password:</td>
					<td><input type="password" name="password" size="20" maxlength="20"></td>
				</tr>
				<tr>
					<td height="20" align="right">email:</td>
					<td><input type="text" name="email" size="20" maxlength="20"></td>
				</tr>
				<tr>
					<td height="20" align="top"></td>
					<td height="20"><input type="submit" name="submit" value="login"></td>
				</tr>
				<tr>
					<td height="10"></td>
					<td></td>
				</tr>
				<tr>
					<tr bgcolor="#f9c7e5">
					<td height="25" colspan="2" align="top"></td>
				</tr>
</tr>
</table>
</form>
				<?php
				include 'koneksi.php';

				if(isset($_POST['submit'])){
					$user=$_POST['username'];
					$pass=$_POST['password'];
					$email=$_POST['email'];
					$masukan= mysqli_query($koneksi,"INSERT INTO data (nama,password,email) VALUES ('$user','$pass','$email')");
					if($masukan){
					header('location:login.php');
					}else{
						echo "gagal daftar";
					}

				}

				?>
</body>
</html>