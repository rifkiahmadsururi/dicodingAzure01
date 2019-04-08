<?php 

include 'koneksi.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>submisi 01 Rifki Ahmad Sururi</title>
</head>
<body>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<a href="tambah.php"><button>Tambah Data</button></a>
	<br>
	<br>

	<table class="table">
		<tr><th>ID</th><th>Nama</th><th>Alamat</th><th>No Hp</th></tr>
		<?php
			$query_mahasiswa = "SELECT * FROM mahasiswa";
            $mahasiswa = $conn->query($query_mahasiswa);
            $mhs = $mahasiswa->fetchAll(); 
            if(count($mhs) > 0) {
            	echo "<tr>";
            		echo "<td>";
            		echo $mhs['id'];
            		echo "</td>";

            		echo "<td>";
            		echo $mhs['nama'];
            		echo "</td>";

            		echo "<td>";
            		echo $mhs['alamat'];
            		echo "</td>";

            		echo "<td>";
            		echo $mhs['no_hp'];
            		echo "</td>";
            	echo "<tr>";

            }
		?>
		<tr></tr>
	</table>

</body>
</html>