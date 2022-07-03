<?php 

    require 'fungsi.php';

    $id = $_GET["id"];

    $result = tampil("SELECT * FROM wisata WHERE id = $id")[0];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/edit_kabupaten.css">
    <title>Document</title>
</head>
<body>

    <div class="container">

        <h1>Edit Data Wisata</h1>

        <form action="./fungsi/edit_w.php" method="post">
            <label for="id">id : </label>
            <input type="text" id="id" name="id" value="<?= $result['id'] ?>" readonly>
            <label for="nama">nama : </label>
            <input type="text" name="nama_wisata" id="nama" value="<?= $result['nama_wisata'] ?>">
            <label for="lokasi">lokasi : </label>
            <input type="text" name="lokasi_wisata" id="lokasi" value="<?= $result['lokasi_wisata'] ?>">
            <label for="desc">deskripsi : </label>
            <textarea name="deskripsi_wisata" id="desc"  cols="50" rows="10" value="<?= $result['deskripsi_wisata'] ?>"><?= $result['deskripsi_wisata'] ?></textarea>
            <button type="submit">submit</button>
        </form>
    </div>
    
</body>
</html>