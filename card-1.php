<?php
    require "fungsi.php";
    $id=$_GET['id'];
    $wisata = tampil("SELECT * FROM wisata WHERE id=$id")[0];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/stylecard-1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <style>
        .dalam-1{
            background-image:url(./image/<?=$wisata['foto_wisata']?>);
        }
        .dalam-2{
            background-image:url(./image/<?=$wisata['foto2_wisata']?>);
        }
    </style>
</head>
<body>
    <a href="index.php"><i class="bi bi-arrow-left" style="margin-right: 10px;"></i>Kembali</a>
    <lottie-player src="./image/20939-airplane-flight-animation.json" 
    style="height:300px; transform: translateX(-50px);" background="transparent" speed="0.5" loop autoplay></lottie-player>
    <div class="container">
        <div class="dalam-1">
            <div class="dalam-2"></div>
        </div>
        <div class="dalam">
            <div class="desc">
                <h4><?= $wisata['nama_wisata']?></h3>
                <h5><i class="bi bi-geo-alt" style="margin-right: 10px;"></i><?= $wisata['lokasi_wisata']?></h5>
                <p><?=$wisata['deskripsi_wisata']?></p>
            </div>
        </div>
    </div>
    <img src="./image/trip.jpg" width="30%" />
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</body>
</html>