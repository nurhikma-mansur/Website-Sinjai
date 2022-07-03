<?php
    require "fungsi.php";

    $kabupaten = tampil("SELECT * FROM kabupaten");

    $wisata = tampil("SELECT * FROM wisata");

    // var_dump($kabupaten); die();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>PROFILE KABUPATEN SINJAI</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/style-1.css">
    <link rel="stylesheet" href="style/style-2.css">
    <link rel="stylesheet" href="style/style-3.css">
    <link rel="stylesheet" href="style/style-4.css">
    <link rel="stylesheet" href="style/style-5.css">
    <link rel="stylesheet" href="style/style-6.css">
</head>
<body>
    
    <div id="level-1">
        <nav>
            <h1><img src="image/logo.png" alt="" srcset="" width="25px"> Sinjai</h1>
            <a href="#level-2"><i class="bi bi-building" style="margin-right: 10px;"></i>Deskripsi Daerah</a>
            <a href="#level-3"><i class="bi bi-bank" style="margin-right: 10px;"></i>Kabupaten</a>
            <a href="#level-4"><i class="bi bi-signpost-2" style="margin-right: 10px;"></i>Destinasi Wisata</a>
            <a href="#level-5"><i class="bi bi-chat-square-text" style="margin-right: 10px;"></i>Pengaduan Publik</a>
            <a href="#level-6"><i class="bi bi-info-circle" style="margin-right: 10px;" ></i>Tentang</a>
            <a href="login.php"><i class="bi bi-door-open" style="margin-right: 10px;"></i>Login</a>
        </nav>
        <div class="hero-item">
            <h4>Selamat Datang Di <br/>
                Portal Resmi <br/>
                Kabupaten Sinjai</h4>     
            <h1>Sinjai<span>Bersatu</span></h1>
            <h6>Sipakatau Sirui Menre Tassirui No' Mallilu Sipakainge</h6>
        </div>

    </div>
    <div id="level-2">
        <h1><i class="bi bi-building" style="margin-right: 20px;"></i>Deskripsi Daerah</h1>
        <lottie-player src="./image/82554-cityscape.json" 
        style="width: 100%; height:300px; margin:0; transform: translateY(40%) translateX(20%);"
        background="transparent" speed="1" class="lt-1" loop autoplay></lottie-player>
        <div class="dalam">
            <p>Kabupaten Sinjai adalah salah satu Daerah Tingkat II di provinsi Sulawesi Selatan, Indonesia. 
                Ibu kota kabupaten ini terletak di Kota Sinjai. Kabupaten ini memiliki luas wilayah 819,96 km2 dan berpenduduk sebanyak kurang lebih 250.000 jiwa.
                Sektor pertanian merupakan sektor utama penggerak ekonomi masyarakat sinjai terutama komoditi lada dan coklat
               </p>
            <a href="level-2.html">selengkapnya</a>
            <div class="dalamdua"></div>
        </div>
    </div>
    <div id="level-3">
        <h1><i class="bi bi-bank" style="margin-right: 20px;"></i>Kabupaten</h1>
        <table border="1" class="my-table">
            <thead>
                <th>No.</th>
                <th>Nama Kecamatan</th>
                <th>Jumlah Penduduk</th>
                <th>Luas Wilayah</th>
                <th>Jumlah Desa</th>
                <th>Jumlah Kelurahan</th>
            </thead>
            <tbody>
            <?php
                foreach ($kabupaten as $i => $rows) :
            ?>
            <tr>
                <td> <?php echo $i+1?></td>
                <td> <?php echo $rows['nama_kecamatan']?></td>
                <td> <?php echo $rows['jumlah_penduduk']?> jiwa</td>
                <td> <?php echo $rows['luas_wilayah']?> km2</td>
                <td> <?php echo $rows['jumlah_desa']?></td>
                <td> <?php echo $rows['jumlah_kelurahaan']?></td>
            </tr>
            <?php
                endforeach;
            ?>
            </tbody>
        </table>
    </div>
    <div id="level-4">
        <h1><i class="bi bi-signpost-2" style="margin-right: 20px;"></i>Destinasi Wisata</h1>
        <div class="container">
            <?php foreach($wisata as $rows): ?>
            <a class="card" href="card-1.php?id=<?= $rows['id']?>">
                <img src="./image/<?= $rows['foto_wisata']?>" alt="" class="img-container-1">
                <p class="place"><?= $rows['nama_wisata'] ?></p>
                <p class="location"><i class="bi bi-geo-alt-fill" style="margin-right: 10px;"></i><?= $rows['lokasi_wisata']?></p>
            </a>
            <?php endforeach ?>
        </div>
    </div>
    <div id="level-5"> 
        <h1><i class="bi bi-chat-square-text" style="margin-right: 20px;"></i>Pengaduan Publik</h1>
        <div class="krisar-container">
            <div class="cnt-1 cnt">
                <h2>Ayo Laporkan Keluhan <br> Anda di Portal Kami</h2>
                <p>Keluhan akan langsung disampaikan ke pemerintah <br> melalui portal ini</p>
                <a href="level-5.php">Ayo Mengeluh</a>
            </div>
            <div class="cnt-2 cnt">
                <lottie-player src="./image/lf30_editor_ov8jduze.json" 
                style="height:300px;"
                background="transparent" speed="1" loop autoplay></lottie-player>
            </div>
        </div>
    </div>
    <div id="level-6">
        <h1><i class="bi bi-info-circle" style="margin-right: 10px;" ></i>Tentang</h1>
        <div class="dalam-1">
            <h2>Sinjai<span>.go.id</span></h2>
            <p>Website Kabupaten Sinjai dimana Kabupaten Sinjai adalah salah satu Daerah Tingkat II di provinsi Sulawesi Selatan, Indonesia. Ibu kota kabupaten ini terletak di Sinjai yang berjarak sekitar ±220 km dari Kota Makassar. 
                Kabupaten ini memiliki luas wilayah 819,96 km² yang dimana berisi tentang deskripsi-deskripsi kabupatan sinjai, kabupaten yang dimana memperlihatkan nama kecamatan jumlah warga dan kelurahaan, 
                kemudian terdapat beberapa destinasi wisata yang diperlihatkan, selanjutnya dapat mengirimkan atas keluhan apa yang dirasakan kepada pemerintah kabupaten sinjai untuk Sinjai yang lebih baik,
            </p>
        </div>
        <div class="dalam-2">
            <div class="about">
                <h1>About <span>Developer</span></h1>
                <div class="container">
                    <div class="dalam2-2">
                    </div>
                    <div class="bio">
                        <p>Nurhikma Mansur</p>
                        <p>Mahasiswa / 19 Tahun</p>
                        <p>Sinjai 01-01-2003</p>
                    </div>
                </div>
                <div class="des">
                    <p class="tebal">Description :</p>
                    <p>Perkenalkan saya seorang developer muda yang berasal dari Kabupaten Sinjai tepatnya di kecamatan Tellu Limpoe, Seorang perempuan yang mempunyai mimpi yang luar biasa</p>
                    <p class="tebal">Contact :</p>
                    <p><i class="bi bi-envelope" style="margin-right: 10px;"></i>nurhikmamansur113@gmail.com</p>
                    <p><i class="bi bi-instagram" style="margin-right: 10px;"></i>nurhikma_mansur</p>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</body>
</html>