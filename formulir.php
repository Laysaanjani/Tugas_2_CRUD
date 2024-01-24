<?php
    include("confiq.php");

    if(isset($_POST['daftar'])){
        // ambil data dari formulir

        $nama = $_POST['nama_guru'];

        $jk = $_POST['jenis_kelamin'];
        
        $alamat = $_POST['alamat'];

        $nt = $_POST['no_telepon'];

        $email = $_POST['email'];

        // buat query

        $sql = "INSERT INTO guru01 (nama_guru, jenis_kelamin, alamat, no_telepon, email) 
        VALUES ('$nama', '$jk', '$alamat', '$nt', '$email')";

        $query = mysqli_query($db, $sql);

        // apakah query simpan berhasil?

        if($query) {
            header('Location: index.php?status=sukses');
        // kalau berhasil alihkan ke halaman index.php dengan status-sukses header('Location: index.php?status=sukses');
        }else{
            
            header('Location: index.php?status=gagal');
        }
    }else{
        die("Akses dilarang...");
    }
?>