<?php
    include "../service/database.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Halaman Tambah Informasi</h1>
<form method="POST" action="proses_tambah.php">
    <div>
        <label>Judul Informasi</label>
        <input type="text" name="judul" />
    </div>
    <div>
        <label>Isi informasi</label>
        <input type="text" name="isi" required=""/>
    </div> 
    <div>
        <button type="submit">Tambah</button>
    </div>
</form>
</body>
</html>