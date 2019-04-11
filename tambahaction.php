<?php 
   
        include 'koneksi.php';
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $no_hp = $_POST['no_hp'];
            // // Insert data
        $sql_insert = "exec sp_insertMahasiswa $nama, $alamat, $no_hp";
        $stmt = $conn->prepare($sql_insert);
        $stmt->execute();
        echo "window.location.href = 'https://azurewebaoorifki02.azurewebsites.net/';";
   
 ?>