<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $nama_db = "mading";

    $db = mysqli_connect($host, $user, $password, $nama_db);

    if(!$db){
        echo "data gagal";
        die('eror');
    }


?>