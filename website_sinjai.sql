-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2022 at 03:37 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website_sinjai`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin123', 123);

-- --------------------------------------------------------

--
-- Table structure for table `kabupaten`
--

CREATE TABLE `kabupaten` (
  `id` int(11) NOT NULL,
  `nama_kecamatan` varchar(100) NOT NULL,
  `jumlah_penduduk` int(11) NOT NULL,
  `luas_wilayah` int(11) NOT NULL,
  `jumlah_desa` int(11) NOT NULL,
  `jumlah_kelurahaan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kabupaten`
--

INSERT INTO `kabupaten` (`id`, `nama_kecamatan`, `jumlah_penduduk`, `luas_wilayah`, `jumlah_desa`, `jumlah_kelurahaan`) VALUES
(1, 'Tellu Limpoe', 15687, 9987, 7, 1),
(2, 'pulau sembilan', 7963, 755, 4, 1),
(3, ' Sinjai Barat', 24311, 13553, 7, 2),
(5, ' Sinjai Borong', 19073, 6697, 7, 2),
(6, ' Sinjai Selatan', 36198, 13199, 10, 1),
(7, ' Sinjai Tengah', 27507, 12970, 10, 1),
(8, ' Sinjai timur', 30421, 7188, 12, 1),
(9, ' Sinjai utara', 43505, 2957, 0, 6),
(10, ' Tellu Limpoe', 31122, 14730, 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id` int(11) NOT NULL,
  `nama_pengadu` varchar(100) NOT NULL,
  `kritik_saran` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id`, `nama_pengadu`, `kritik_saran`) VALUES
(2, 'Hikma', 'sampah yang masih sangatlah banyak'),
(3, 'Ayu Andira', 'Aparat keamanan yang masih kurang adil'),
(4, 'Rahmat Ramadan', 'Bagus'),
(6, 'Nurhikma', 'Keren'),
(8, 'Nur awaliah', 'Kurangnya pemahaman pemerintah mengenai kebutuh dan pengembangan pendidikan di Sinjai'),
(10, 'Nue', 'Sebagian besar mahasiswa yang turun ke jalan (demo) tanpa tahu lebih banyak informasi mengenai hal y'),
(11, 'Nurhik', 'bagus');

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id` int(11) NOT NULL,
  `foto_wisata` varchar(100) NOT NULL,
  `foto2_wisata` varchar(100) NOT NULL,
  `nama_wisata` varchar(100) NOT NULL,
  `lokasi_wisata` varchar(100) NOT NULL,
  `deskripsi_wisata` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id`, `foto_wisata`, `foto2_wisata`, `nama_wisata`, `lokasi_wisata`, `deskripsi_wisata`) VALUES
(1, 'mangrove.jfif', 'mangrove-2.jpeg', 'Hutan mangrove ', 'Sinjai Timur', 'Kawasan hutan mangrove Tongke-tongke di Desa Tongke-tongke, Kecamatan Sinjai Timur, Kabupaten Sinjai, adalah salah satu destinasi wisata penting di Sulawesi Selatan. Salah satu kawasan yang ditetapkan sebagai desa wisata oleh Menteri Pariwisata dan Ekonomi Kreatif Sandiaga Salahuddin Uno beberapa waktu lalu. Hanya berjarak sekitar 5 km dari pusat kota Sinjai membuat kawasan wisata seluas 173,5 hektar ini ramai dikunjungi warga, khususnya di hari libur.'),
(2, 'benteng.jfif', 'balangnipa-2.jpg', 'Benteng Balangnipa', 'Bulupoddo', 'Benteng Balangnipa terletak di Kabupaten Sinjai, Sulawesi Selatan, Indonesia. Letak Benteng Balangnipa secara khusus berada di wilayah dusun Tokinjong, Kelurahan Balangnipa, Kecamatan Sinjai Utara. Jaraknya dari Kota Makassar mencapai 233 kilometer.'),
(3, 'larea-rea.jfif', 'larearea2.jpg', 'Pulau Larea-rea', 'Pulau Sembilan', 'Pulau larea-rea merupakan pulau yang tak berpenghuni yang terletak di kecamatan Pulau Sembilan, sekitar 11 Mil dari Pelabuhan Cappa Ujung. Dalam perjalanan menuju Pulau Larea-rea, para pengunjung bakal dimanjakan dengan pemandangan hilir mudik perahu milik nelayan. Pulau kecil ini menawarkan keindahan pantai pasir putih dan pasir timbul yang memanjang kelaut jika air surut.'),
(4, 'bukitpelangi.jfif', 'bukitpelangi2.jpg', 'Bukit Pelangi', 'Sinjai Utara', 'Bukit Pelangi kampung bola terletak di kelurahan Biringere, Sinjai Utara, Sinjai, Sulawesi Selatan. Sebuah destinasi wisata yang terbilang baru, namun sudah ramai dikunjungi wisatawan baik dari masyarakat setempat maupun dari luar daerah. '),
(5, 'BatuBarae.jpg', 'batubarae2.jpg', 'Air Terjun Batu Barae', 'Sinjai borong', 'Air terjun Batu Barae terletak di perbatasan dua desa yakni Desa Batu Belerang dan Desa Barambang, Kecamatan Sinjai Borong, Kabupaten Sinjai, Sulawesi Selatan. Air terjun ini memiliki ketinggian 20 meter dan berjarak 50 meter antar-kedua air terjun tersebut.'),
(6, 'Gojeng.jpg', 'gojeng2.jpg', 'Batu Pakegojeng', 'Sinjai Utara', 'Batu Pake Gojeng diartikan sebagai batu yang telah dipahat atau dipotong dalam alat dan Gojeng adalah nama daerah atau lokasi batu pahat itu ditemukan. Versi lain menyatakan bahwa “Batu Pake” adalah batu bagi masyarakat setempat.  Dahulunya lokasi ini juga merupakan markas pengintaian Puri, sebagai benteng pertahanan, dan untuk mengawasi kapal-kapal Jepang yang melintasi Teluk Bone dan pesawat sekutu.'),
(7, 'RumahAdatKarampuang.jpg', 'karampuang2.jpg', 'Rumah Karampuang', 'Bulupoddo', 'Rumah adat Karampuang yang merupakan karya arsitektur tradisional masyarakat Karampuang memiliki bentuk persegi empat panjang dengan jumlah tiang sebanyak tiga puluh buah, atapnya berbentuk prisma bersusun dua, serta tangga, pintu, dan dapur terletak di tengahtengah badan rumah'),
(8, 'Pulau-Burungloe.jpg', 'burungloe2.jpg', 'Pulau Burung Loe', 'Pulau Sembilan', 'Pulau Burung Loe adalah satu-satunya pulau di Kecamatan Pulau Sembilan yang memiliki dataran tertinggi (gunung) dibanding gugusan pulau lainnya. Sejumlah perahu nelayan yang tersebar dan Pulau Burung Loe adalah satu-satunya pulau di Kecamatan Pulau Sembilan yang memiliki dataran tertinggi (gunung) dibanding gugusan pulau lainnya. Sejumlah perahu nelayan yang tersebar dan melintas di hamparan permukaan lautan pun menjadi pemandangan menarik yang memuaskan mata.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kabupaten`
--
ALTER TABLE `kabupaten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
