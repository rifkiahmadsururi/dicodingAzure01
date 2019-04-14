<?php 
   
        include 'koneksi.php';
        //$nama = $_POST['nama'];
        //$alamat = $_POST['alamat'];
        //$hobi = $_POST['hobi'];
        //$sql_insert = "INSERT INTO mahasisiwa VALUES (nama, alamat, hobi) ($nama, $alamat, $hobi, '1999-09-27')";
        $nama = 'rifki';
        $sql_insert = "INSERT INTO mahasisiwa VALUES (nama, alamat, hobi, tanggal) (?,?,?,?)";
        $stmt = $conn->prepare($sql_insert);
        $stmt->bindValue(1, 'rifki ahmad sururi');
        $stmt->bindValue(2, 'Magelang');
        $stmt->bindValue(3, 'menggambar');
        $stmt->bindValue(4, '1997-09-27');
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