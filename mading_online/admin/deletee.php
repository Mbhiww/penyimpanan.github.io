<?php
include("../service/database.php");
?>
<!--by toby-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        *{
    font-family: 'Trebuchet MS';
}
h1{
    text-transform: uppercase;
    color: salmon;
}
table{
    border: solid 1px #DDEFEF;
    border-collapse: collapse;
    border-spacing: 0;
    width: 70%;
    margin: 10px auto 10px auto;
}
table thead th{
    background-color: #DDEFEF;
    border: solid 1px #DDEFEF;
    color: #336b6b;
    padding: 10px;
    text-align: left;
    text-shadow: 1px 1px 1px #fff;
    text-decoration: none;
}
table tbody td{
    border: solid 1px #DDEFEF;
    color: #333;
    padding: 10px;
    text-shadow: 1px 1px 1px #fff;
}

a{
    background-color: salmon;
    color: #fff;
    padding: 10px;
    text-decoration: none;
    font-size: 12px;

}

    </style>
</head>
<body>
    <center><h1>Halaman Hapus</h1></center>
<br/>
<table>
    <thead>
        <tr>
            <th>Judul</th>
            <th>Informasi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    <?php 
        $query ="SELECT * FROM crud";
        $result = mysqli_query($db, $query);
        while($row = mysqli_fetch_assoc($result))
    {
   ?>
    <tr>
        <td><?php echo $row['judul']; ?>
        <td><?php echo $row['isi']; ?>
        <td>
            <a href="delete_proses.php?id=<?php echo $row['judul']; ?>"
        onclick="return confrim('anda yakin akan menghapus data ini?')">Hapus</a>
        </td>
    </tr>
    <?php
    }
    ?>  
    </tbody>
    </table>
 </body>
</html>


