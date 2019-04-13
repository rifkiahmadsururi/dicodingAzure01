<?php 
   
        include 'koneksi.php';
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $hobi = $_POST['hobi'];
        $sql_insert = "exec sp_insertMahasiswa $nama, $alamat, $hobi";
        $stmt = $conn->prepare($sql_insert);
        $stmt->execute();
   
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<br>
 	<a href="https://azurewebaoorifki02.azurewebsites.net/"><button>Home</button></a>
 </body>
 </html>