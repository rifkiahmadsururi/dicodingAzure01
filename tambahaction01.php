<?php 
   
        include 'koneksi.php';
        //$nama = $_POST['nama'];
        //$alamat = $_POST['alamat'];
        //$hobi = $_POST['hobi'];
        //$sql_insert = "INSERT INTO mahasisiwa VALUES (nama, alamat, hobi) ($nama, $alamat, $hobi, '1999-09-27')";
        $sql_insert = "INSERT INTO mahasisiwa VALUES (nama, alamat, hobi, tanggal) ('rifki ahmad sururi', 'bandung', 'menulis', '1999-09-27')";
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