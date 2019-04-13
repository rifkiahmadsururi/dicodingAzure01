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
		<tr><th>ID</th><th>Nama</th><th>Alamat</th><th>Hobi</th><th>Tanggal</th></tr>
		<?php
			$query_mahasiswa = "SELECT * FROM mahasiswa";
            $mahasiswa = $conn->query($query_mahasiswa);
            $mhs = $mahasiswa->fetchAll(); 
            if(count($mhs) > 0) {
            	foreach($mhs as $mhss) {
	            	echo "<tr>";
	            		echo "<td>";
	            		echo $mhss['id'];
	            		echo "</td>";

	            		echo "<td>";
	            		echo $mhss['nama'];
	            		echo "</td>";

	            		echo "<td>";
	            		echo $mhss['alamat'];
	            		echo "</td>";

	            		echo "<td>";
	            		echo $mhss['hobi'];
	            		echo "</td>";

	            		echo "<td>";
	            		echo $mhss['tanggal'];
	            		echo "</td>";
	            	echo "<tr>";
            	}
            } else {
                echo "<h3>No one is currently registered.</h3>";
            }
		?>
	</table>

</body>
</html>