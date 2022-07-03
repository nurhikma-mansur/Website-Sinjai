<?php
    $koneksi = mysqli_connect("localhost", "root", "", "website_sinjai") or die();
    
    function tampil($query){
        global $koneksi;

        $result = mysqli_query($koneksi, $query);

        // $data = (mysqli_fetch_assoc($result));

        // $rows = [];

        while($data = mysqli_fetch_assoc($result)){
            
            $rows[] = $data;
        }

        return $rows;
    }

    function publik($data){

        global $koneksi;

        $nama = $data['nama'];
        $kritik = $data['kritik'];
        $query="INSERT INTO `pengaduan` VALUE('','$nama','$kritik')";
        mysqli_query($koneksi,$query);
        
        return mysqli_affected_rows($koneksi);
    }

    function hapus_kritik($id){

        global $koneksi;

        $query = "DELETE FROM pengaduan WHERE id = $id";

        mysqli_query($koneksi, $query);

        return mysqli_affected_rows($koneksi);

    }

    function edit_kab($data) {

        global $koneksi;

        $id = $data['id'];

        $nama_kecamatan = $data['nama_kecamatan'];
        $jumlah_p = $data['jumlah_penduduk'];
        $luas_wilayah = $data['luas_wilayah'];
        $jumlah_desa = $data['jumlah_desa'];
        $jumlah_l = $data['jumlah_kelurahaan'];

        $query = "UPDATE kabupaten SET nama_kecamatan = '$nama_kecamatan', jumlah_penduduk = '$jumlah_p', luas_wilayah = '$luas_wilayah', jumlah_desa = '$jumlah_desa' , jumlah_kelurahaan = '$jumlah_l' WHERE id = '$id'";
        mysqli_query($koneksi, $query);

        return mysqli_affected_rows($koneksi);

    }

    function edit_wis($data) {

        global $koneksi;

        $id = $data['id'];

        $nama_wisata = $data['nama_wisata'];
        $lokasi_wisata = $data['lokasi_wisata'];
        $deskripsi_wisata = $data['deskripsi_wisata'];

        $query = "UPDATE wisata SET nama_wisata = '$nama_wisata', lokasi_wisata = '$lokasi_wisata', deskripsi_wisata = '$deskripsi_wisata' WHERE id = '$id'";
        mysqli_query($koneksi, $query);

        return mysqli_affected_rows($koneksi);

    }

   

?>