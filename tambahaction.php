<?php 
            //include 'koneksi.php';
            $nama = $_POST['nama'];
            echo $nama;
            $alamat = $_POST['alamat'];
            $no_hp = $_POST['no_hp'];
            // // Insert data
            $sql_insert = "INSERT INTO mahasiswa (nama, alamat, no_hp) 
                         VALUES ($nama, $alamat, $no_hp)";
            // $stmt = $conn->prepare($sql_insert);
            // $stmt->bindValue(1, $nama);
            // $stmt->bindValue(2, $alamat);
            // $stmt->bindValue(3, $no_hp);
            // $stmt->execute();

            // echo "window.location.href = 'https://azurewebaoorifki02.azurewebsites.net/';";

 ?>