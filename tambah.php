<!DOCTYPE html>
<html>
<head>
	<title>tambah data mahasiswa</title>
</head>
<body>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<form action="tambahaction01.php" method="POST">
		<table class="table">
			<tr><td>Nama</td><td><input type="text" name="nama"></td></tr>
			<tr><td>Alamat</td><td><input type="text" name="alamat"></td></tr>
			<tr><td>No HP</td><td><input type="text" name="no_hp"></td></tr>
			<tr><td>Aksi</td><td><input type="submit" name="" value="Simpan Data"></td></tr>
		</table>
	</form>

</body>
</html>