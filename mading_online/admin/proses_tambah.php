<?php
    include "../service/database.php";

    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    
    $sql = "INSERT INTO crud(judul, isi) VALUES ('$judul','$isi')";
    $result = mysqli_query($db, $sql);

    if($result){
        echo "<script>alert('Informasi Berhasil Di Tambah.');window.location='index.php';</script>";
    
    }
?>
