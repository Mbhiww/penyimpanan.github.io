<?php
include "../service/database.php";

$query = "DELETE FROM crud";
$result = mysqli_query($db, $query);
if($result){
    echo "<script>alert('Informasi Berhasil Di Hapus.');window.location='deletee.php';</script>";
}

?>