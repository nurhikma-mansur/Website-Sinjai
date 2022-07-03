<?php
    session_start();
    require "fungsi.php";

    if(!isset($_SESSION['login'])){
        header('location: index.php');
        exit;
    }

    $kabupaten = tampil("SELECT * FROM kabupaten");
    $krisar = tampil("SELECT * FROM pengaduan");
    $wisata = tampil("SELECT * FROM wisata");

    // var_dump($kabupaten); die();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="style/styleadmin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <script src="admin.js" defer></script>
</head>
<body>
    <div class="dashboard">
        <h1>sinjai<span>.go.id</span></h1>
        <div class="wrapper">
            <p>Halaman<br><span>admin</span></p>
            <button class="btn"><i class="far fa-building"></i> Kabupaten</button>
            <button class="btn"><i class="fas fa-suitcase-rolling"></i> Destinasi Wisata</button>
            <button class="btn"><i class="bi bi-chat-left-dots"></i> kritik dan saran</button>
            <button class="btn"><i class="bi bi-box-arrow-left"></i> keluar</button>
        </div>
    </div>
    <div class="container">
    <table border="1" class="my-table ">
            <thead>
                <th>No.</th>
                <th>Nama Kecamatan</th>
                <th>Jumlah Penduduk</th>
                <th>Luas Wilayah</th>
                <th>Jumlah Desa</th>
                <th>Jumlah Kelurahan</th>
                <th>Edit</th>
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
                <td>
                    <a href="edit_kabupaten.php?id=<?= $rows['id'] ?>">Edit</a>
                </td>
            </tr>
            <?php
                endforeach;
            ?>
            </tbody>
    </table>




    <table border="1" class="my-table hide">
            <thead>
                <th>No.</th>
                <th>Nama Wisata</th>
                <th>Lokasi Wisata</th>
                <th>Edit</th>
            </thead>
            <tbody>
            <?php
                $i=0;
                foreach($wisata as $rows):
            ?>
            <tr>
                <td> <?php echo $i+1?></td>
                <td> <?php echo $rows['nama_wisata']?></td>
                <td> <?php echo $rows['lokasi_wisata']?></td>
                <td>
                    <a href="edit_wisata.php?id=<?= $rows['id'] ?>">Edit</a>
                </td>
            </tr>
            <?php
            $i++;
                endforeach;
            ?>
            </tbody>
    </table>

    <table border="1" class="my-table hide">
            <thead>
                <th>No.</th>
                <th>Nama Pengadu</th>
                <th>Kritik dan Saran</th>
                <th>Edit</th>
            </thead>
            <tbody>
            <?php
                $i=0;
                foreach($krisar as $rows):
            ?>
            <tr>
                <td> <?php echo $i+1?></td>
                <td> <?php echo $rows['nama_pengadu']?></td>
                <td> <?php echo $rows['kritik_saran']?></td>
                <td>
                    <a href="./fungsi/hapus_kritik.php?id=<?= $rows['id'] ?>">hapus</a>
                </td>
            </tr>
            <?php
            $i++;
                endforeach;
            ?>
            </tbody>
    </table>

    </div>

</body>
</html>