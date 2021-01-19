-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Des 2020 pada 00.05
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecm_kampung_anggrek`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `kd_barang` int(5) NOT NULL,
  `nm_barang` varchar(30) DEFAULT NULL,
  `satuan` varchar(15) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `harga` double DEFAULT NULL,
  `harga_beli` double DEFAULT NULL,
  `stok` int(5) DEFAULT NULL,
  `stok_min` int(5) DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`kd_barang`, `nm_barang`, `satuan`, `deskripsi`, `harga`, `harga_beli`, `stok`, `stok_min`, `gambar`) VALUES
(1, 'Anggrek dendrobium', 'pot', 'Tanaman yang mudah ditemukan ini pastinya akan sangat cocok sekali untuk dijadikan sebagai pemanis di rumah. Biasanya, dendrobium berwarna putih bersih, perpaduan putih dan ungu, hingga kuning.', 30000, 20000, 58, 5, '1.-Anggrek-Dendrobium-min.jpg'),
(2, 'Anggrek Tebu', 'pot', 'Anggrek bernama latin Grammatophyllum speciosum ini memiliki karakteristik warna bunga kecokelatan dan bintik-bintik dengan corak layaknya macan. Maka dari itu, anggrek tebu juga biasa disebut dengan anggrek harimau.', 40000, 25000, 19, 0, '2.-Anggrek-Tebu-min.jpg'),
(3, 'Anggrek Bulan', 'pot', 'Anggrek bulan merupakan jenis tanaman anggrek yang sangat digemari masyarakat karena bentuknya yang sangat cantik dan unik. Ada dua alasan mengapa banyak pecinta anggrek memilih jenis anggrek bulan sebagai tanaman yang penghias rumah.\r\n', 38000, 27000, 16, 5, '3.-Anggrek-Bulan-min.jpg'),
(4, 'Anggrek cattleya', 'pot', 'Anggrek jenis cattleya memiliki ciri khas, yaitu ukurannya yang besar dibandingkan jenis-jenis anggrek lainnya. Untuk menemui anggrek yang satu ini memang sangat mudah sekali, karena sudah banyak dibudidaya.', 56000, 43000, 65, 10, '4.-Anggrek-Cattleya-min.jpg'),
(5, 'Anggrek Monyet', 'pot', 'Tanaman anggrek jenis ini dapat tumbuh di ketinggian 1.000 meter (m) sampai 2.000 m di atas permukaan laut (dpl) dengan suhu berkisar 27 derajat Celsius dan kelembaban 80-90 persen.', 25000, 20000, 26, 10, '5.-Anggrek-Monyet-min.jpg'),
(6, 'Anggrek kasut kumis', 'batang', 'Untuk jenis yang satu ini tumbuh di atas tanah dengan tinggi mencapai 30 centimeter (cm) sampai 45 cm dan sangat cocok tumbuh di ketinggian sekitar 1.000 mdpl. Namun, untuk mendapatkan tanaman ini cukup sulit karena populasinya yang sudah sangat jarang.', 35000, 30000, 17, 5, '6.-Anggrek-Kasut-Kumis-min.jpg'),
(7, 'Anggrek Hartinah', 'pot', 'Anggrek Hartinah atau Tien Soeharto adalah salah satu jenis anggrek yang tumbuh di daerah tertentu saja. Sedangkan untuk bentuk bunganya seperti pita yang meruncing dan mampu tumbuh mencapai 50-60 cm.', 30000, 35000, 35, 5, '7.-Anggrek-Hartinah-min.jpg'),
(8, 'Anggrek Hitam', 'pot', 'Satu lagi anggrek unik, yaitu anggrek hitam yang berasal dari Kalimantan, Sumatra dan Semenanjung Malaya. Anggrek bernama latin Coelogyne pandurata ini sebenarnya tak didominasi warna hitam. Bagian gelap hanya sedikit di tengahnya.', 30000, 35000, 26, 5, '8.-Anggrek-Hitam-min.jpg'),
(9, 'Anggrek Bulan Kalimantan Barat', 'pot', 'Jenis anggrek ini merupakan salah satu anggrek yang memiliki bentuk sangat indah. Anggrek bulan Kalimantan barat punya corak berwarna cerah, perpaduan antara putih, kuning serta merah.', 30000, 35000, 28, 5, '9.-Anggrek-Bulan-Kalimantan-Barat-min.jpg'),
(10, 'Anggrek Bibir Berbulu', 'pot', 'Anggrek berbulu merupakan bunga cantik yang asli dari Indonesia. Namun, jenis anggrek bernama latin Coelogyne speciosa ini memang tidak begitu populer. Soal namanya, karena anggrek bibir berbulu ditumbuhi bulu berwarna putih seperti jenggot.', 30000, 35000, 25, 5, '10.-Anggrek-Bibir-Berbulu-min.jpg'),
(11, 'Anggrek Violet', 'pot', 'Bunga anggrek violet memiliki nama ilmiah Phalaenopsis violacea. Jenis anggrek ini memiliki tampilan cantik dengan aroma yang harum. Sesuai dengan namanya, bunga ini didominasi dengan warna violet yang memerbikan kesan anggun dan indah.', 30000, 35000, 32, 5, '11.-Anggrek-Violet-min.jpg'),
(12, 'Anggrek Jingga', 'pot', 'Sesuai dengan namanya anggrek, jingga tanaman ini memiliki warna jingga dengan bintik-bintik kecokelatan. Anggrek jingga punya bunga berukuran kecil dan lebih ramping jika dibandingkan dengan saudaranya.', 30000, 35000, 35, 5, '12.-Anggrek-Jingga-min.jpg'),
(13, 'Anggrek Sendok', 'pot', 'Bunga anggrek yang satu ini diberi nama karena ciri khas dari bentuk daunnya yang mirip dengan sendok. Anggrek berwarna kuning cantik ini memiliki bagian tengah yang terlihat seperti menjulur layaknya lidah berbentuk sendok.', 30000, 35000, 32, 5, '13.-Anggrek-Sendok-min.jpg'),
(14, 'Anggrek Kebutan', 'pot', 'Anggrek kebutan atau bernama ilmiah Ascocentrum miniatum, merupakan anggrek yang sering digunakan dalam hiasan pernikahan. Anggrek kebutan biasanya berwarna oranye cerah dengan bunga-bunga berukuran kecil yang bertumpuk.', 30000, 35000, 16, 5, '14.-Anggrek-Kebutan-min.jpg'),
(15, 'Anggrek Sikat Gigi', 'pot', 'Anggrek ini dinamakan anggrek sikat gigi karena bentuknya yang tersusun rapi seperti bulu sikat gigi. Jenis tanaman ini tumbuh di dataran rendah dan mempunyai warna ungu berpadu putih yang memikat.', 30000, 35000, 32, 5, '15.-Anggrek-Sikat-Gigi-min.jpg'),
(16, 'Anggrek Bulan Bintang', 'pot', 'Mengapa dinamakan bulan bintang? Karena jumlah helai mahkota pada bunga ini berjumlah lima. Sehingga membentuk bintang, sedangkan di tangan bunga membentuk bulan.', 30000, 35000, 31, 5, '16.-Anggrek-Bulan-Bintang-min.jpg'),
(17, 'Anggrek Kelip', 'pot', 'Anggrek bernama latin Phalaenopsis violacea ini merupakan tanaman hias yang mempunyai daya pikat tinggi, karena bentuknya yang tak biasa dan mampu menebar aroma harum. Mirisnya, anggrek ini telah ditetapkan terancam punah.', 30000, 35000, 35, 5, '17.-Anggrek-Kelip-min.jpg'),
(18, 'Anggrek Vanda', 'pot', 'Anggrek jenis ini memiliki ukuran dan bentuk daun bervariasi. Ada yang berukuran sempit, lebar, tipis, tebal, hingga berbentuk menyerupai sendok, pita, hingga seperti pensil. Anggrek vanda tumbuh sebagai anggrek tanah dan menempel pada tanaman lain.', 30000, 35000, 35, 5, '18.-Anggrek-Vanda-min.jpg'),
(19, 'Anggrek Zamrud', 'pot', 'Anggrek bernama latin Dendrobium macrophyllum ini memiliki ciri-ciri seperti terdapat bulu di bunga mirip buah rambutan. Tampilannya unik, dengan dominasi warna kuning kehijauan, serta garis-garis berwarna kecokelatan di bagian tengah.', 30000, 35000, 35, 5, '19.-Anggrek-Zamrud-min.jpg'),
(20, 'Anggrek Ki Aksara', 'pot', 'Bunga anggrek Ki Aksara berwarna hijau dengan corak seperti kilatan petir. Anggrek yang mempunyai nama latinnya Macodes petol ini memiliki ukuran yang kecil dibanding jenis anggrek lainnya.', 30000, 35000, 16, 5, '20.-Anggrek-Ki-Aksara-min.jpg'),
(25, 'asdrf', 'asdf', '2121', 235, 23, 21, 1, 'default.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_penjualan`
--

CREATE TABLE `detail_penjualan` (
  `id` int(5) NOT NULL,
  `no_nota` int(5) DEFAULT NULL,
  `kd_brg` int(5) DEFAULT NULL,
  `hrg_brg` decimal(12,2) DEFAULT NULL,
  `jml_brg` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_penjualan`
--

INSERT INTO `detail_penjualan` (`id`, `no_nota`, `kd_brg`, `hrg_brg`, `jml_brg`) VALUES
(32, 104, 14, '30000.00', 1),
(33, 105, 13, '30000.00', 2),
(34, 106, 8, '30000.00', 4),
(35, 107, 6, '35000.00', 1),
(36, 0, 2, '40000.00', 1),
(37, 0, 5, '25000.00', 1),
(38, 109, 4, '56000.00', 1),
(39, 110, 2, '40000.00', 1),
(40, 111, 2, '40000.00', 1),
(41, 112, 15, '30000.00', 1),
(42, 113, 2, '40000.00', 1),
(43, 114, 7, '30000.00', 1),
(44, 114, 9, '30000.00', 1),
(45, 114, 10, '30000.00', 1),
(46, 115, 4, '56000.00', 1),
(47, 115, 6, '35000.00', 1),
(48, 115, 8, '30000.00', 1),
(49, 116, 4, '56000.00', 1),
(50, 117, 7, '30000.00', 1),
(51, 117, 8, '30000.00', 2),
(52, 118, 1, '30000.00', 1),
(53, 119, 2, '40000.00', 1),
(54, 119, 4, '56000.00', 1),
(55, 120, 9, '30000.00', 1),
(56, 121, 2, '40000.00', 1),
(57, 122, 2, '40000.00', 1),
(58, 123, 2, '40000.00', 1),
(59, 124, 7, '30000.00', 1),
(60, 125, 11, '30000.00', 1),
(61, 126, 11, '30000.00', 1),
(62, 127, 16, '30000.00', 1),
(63, 128, 17, '30000.00', 4),
(64, 129, 11, '30000.00', 1),
(65, 130, 23, '22.00', 1),
(66, 131, 22, '90.00', 1),
(67, 132, 12, '30000.00', 1),
(68, 133, 15, '30000.00', 1),
(69, 134, 24, '22.00', 1),
(70, 135, 24, '22.00', 1),
(71, 136, 11, '30000.00', 1),
(72, 137, 11, '30000.00', 2),
(73, 138, 5, '25000.00', 1),
(74, 139, 11, '30000.00', 1),
(75, 140, 13, '30000.00', 1),
(76, 141, 10, '30000.00', 1),
(77, 142, 2, '40000.00', 1),
(78, 142, 7, '30000.00', 1),
(79, 143, 2, '40000.00', 1),
(80, 144, 20, '30000.00', 1),
(81, 145, 1, '30000.00', 1),
(82, 146, 9, '30000.00', 1),
(83, 147, 3, '38000.00', 1),
(84, 148, 7, '30000.00', 1),
(85, 148, 10, '30000.00', 1),
(86, 149, 10, '30000.00', 1),
(87, 149, 11, '30000.00', 1),
(88, 149, 12, '30000.00', 1),
(89, 150, 4, '56000.00', 5),
(90, 150, 10, '30000.00', 3),
(91, 151, 2, '40000.00', 1),
(92, 152, 8, '30000.00', 1),
(93, 153, 8, '30000.00', 3),
(94, 153, 2, '40000.00', 1),
(95, 154, 8, '30000.00', 1),
(96, 154, 20, '30000.00', 2),
(97, 154, 9, '30000.00', 2),
(98, 155, 3, '38000.00', 1),
(99, 156, 2, '40000.00', 1),
(100, 157, 2, '40000.00', 1),
(101, 158, 12, '30000.00', 1),
(102, 158, 13, '30000.00', 1),
(103, 158, 14, '30000.00', 1),
(104, 159, 1, '30000.00', 1),
(105, 160, 9, '30000.00', 1),
(106, 160, 10, '30000.00', 1),
(107, 160, 12, '30000.00', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `konsumen`
--

CREATE TABLE `konsumen` (
  `kd_konsumen` int(5) NOT NULL,
  `oauth_provider` enum('facebook','google','twitter','') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `oauth_uid` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nm_konsumen` varchar(35) DEFAULT '',
  `alamat` text DEFAULT '',
  `kodepos` varchar(5) DEFAULT '',
  `kota` varchar(35) DEFAULT '',
  `no_hp` varchar(13) DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `username` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `foto` tinytext DEFAULT 'default.jpg',
  `group` int(1) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `konsumen`
--

INSERT INTO `konsumen` (`kd_konsumen`, `oauth_provider`, `oauth_uid`, `nm_konsumen`, `alamat`, `kodepos`, `kota`, `no_hp`, `email`, `username`, `password`, `foto`, `group`) VALUES
(1, '', '', 'administrator', 'lorem ipsum dolor sit amet', '32453', 'makassar', '088888', 'Admin@kampunganggrek.com', 'admin123', '0192023a7bbd73250516f069df18b500', 'default.jpg', 1),
(2, '', '', 'bambang', 'lorem ipsum dolor sit amet.', '36592', 'pontianak', '089999', 'bambang@mail.com', 'user1', '9f74d756eb177efbd54b1d62f411cc73', 'avatar-user1.png', 2),
(3, '', '', 'caca', 'Lorem ipsum dolor sit amet consectetur adipisicing.', NULL, 'Manado', '0822222222222', 'caca@mail.com', 'user2', '80ec08504af83331911f5882349af59d', 'default.jpg', 2),
(31, '', '', 'Riyan Surya Kencana', 'Lorem ipsum dolor sit amet', '59567', 'Demak', '085155057752', 'riyan.kencana16@gmail.com', 'riyan', 'f719b5241f7c2cef963676a1b5b55397', 'default.jpg', 2),
(32, 'facebook', '1568767853288790', 'Riyan Kencana', '', '', '', '', 'riyan.kencana16@gmail.com', 'Riyan', '', 'https://platform-lookaside.fbsbx.com/platform/profilepic/?asid=1568767853288790&height=50&width=50&ext=1597150354&hash=AeRqVzB90LYKwKmo', 2),
(35, 'google', '103399976819475114610', 'Riyan Kencana', '', '', '', '', 'riyan.kencana16@gmail.com', 'Riyan', '', 'default.jpg', 2),
(44, 'google', '110289498485446990401', 'listya 18', '', '', '', '', 'fatmawatilistya@gmail.com', 'listya', '', 'default.jpg', 2),
(45, 'google', '105646447748746425092', 'Kencana 16', '', '', '', '', 'rkencana16@gmail.com', 'Kencana', '', 'default.jpg', 2),
(46, 'google', '108843800362177596978', 'Saleh Shaki', 'pati', '54976', 'pati', '08888888', 'saleh.shak98@gmail.com', 'Saleh', '', 'default.jpg', 2),
(47, '', '', '', '', '', '', '', 'saleh.shak@gmail.com', 'saleh', '5ea61869392b61969433cbd6968bca79', 'default.jpg', 2),
(48, '', '', '', '', '', '', '', 'saleh.shak@gmail.com', 'saleh', '5ea61869392b61969433cbd6968bca79', 'default.jpg', 2),
(49, '', '', '', '', '', '', '', 'saleh.shak@gmail.com', 'saleh', '5ea61869392b61969433cbd6968bca79', 'default.jpg', 2),
(50, '', '', '', '', '', '', '', 'saleh.shak@gmail.com', 'saleh', '5ea61869392b61969433cbd6968bca79', 'default.jpg', 2),
(51, '', '', '', '', '', '', '', 'saleh.shak@gmail.com', 'saleh', '5ea61869392b61969433cbd6968bca79', 'default.jpg', 2),
(52, '', '', '', '', '', '', '', 'saleh.shak98@gmail.com', 'saleh', '8bbba1facbc651d0eec0d95e970d0997', 'default.jpg', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE `penjualan` (
  `no_nota` int(5) NOT NULL,
  `kd_konsumen` int(5) DEFAULT NULL,
  `tgl_jual` datetime NOT NULL DEFAULT current_timestamp(),
  `due_date` datetime DEFAULT NULL,
  `pembelian` decimal(12,2) DEFAULT NULL,
  `tujuan` text DEFAULT NULL,
  `kode_kab` int(11) DEFAULT NULL,
  `kurir` varchar(5) DEFAULT NULL,
  `expedisi` varchar(40) DEFAULT NULL,
  `wkt_pengiriman` varchar(20) NOT NULL,
  `ongkir` decimal(12,2) DEFAULT NULL,
  `total_biaya` decimal(12,2) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `status` enum('Belum dibayar','Sudah dibayar') NOT NULL DEFAULT 'Belum dibayar'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penjualan`
--

INSERT INTO `penjualan` (`no_nota`, `kd_konsumen`, `tgl_jual`, `due_date`, `pembelian`, `tujuan`, `kode_kab`, `kurir`, `expedisi`, `wkt_pengiriman`, `ongkir`, `total_biaya`, `image`, `status`) VALUES
(104, 31, '2020-06-24 22:51:44', '2020-07-01 22:51:44', '30000.00', 'aaa', 256, 'pos', 'POS - Paket Kilat Khusus', '1-2 HARI ', '64000.00', '94000.00', 'Annotation_2020-04-18_220215.png', 'Sudah dibayar'),
(105, 31, '2020-06-24 22:52:54', '2020-07-01 22:52:54', '60000.00', 'bbb', 256, 'pos', 'POS - Paket Kilat Khusus', '1-2 HARI ', '64000.00', '124000.00', NULL, 'Belum dibayar'),
(106, 1, '2020-06-24 23:56:51', '2020-07-01 23:56:51', '120000.00', 'rumah dong', 156, 'pos', 'POS - Paket Kilat Khusus', '3-4 HARI ', '70000.00', '190000.00', 'BuktiPembayaran-106', 'Sudah dibayar'),
(107, 31, '2020-06-26 22:17:25', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '35000.00', NULL, 'Belum dibayar'),
(108, 31, '2020-06-26 01:14:34', '2020-07-03 01:14:34', '0.00', '', 153, 'pos', 'POS - Paket Kilat Khusus', '1-2 HARI (Days)', '28000.00', '28000.00', NULL, 'Belum dibayar'),
(109, 31, '2020-06-26 01:18:24', '2020-07-03 01:18:24', '56000.00', 'asas', 39, 'pos', 'POS - Paket Kilat Khusus', '1-2 HARI (Days)', '20000.00', '76000.00', NULL, 'Belum dibayar'),
(110, 31, '2020-06-26 01:28:27', '2020-07-03 01:28:27', '40000.00', '', 152, 'pos', 'POS - Paket Kilat Khusus', '1-2 HARI', '28000.00', '68000.00', NULL, 'Belum dibayar'),
(111, 31, '2020-06-26 01:42:40', '2020-07-03 01:42:40', '40000.00', 'uu', 28, 'pos', 'JNE - OKE', '3-6', '88000.00', '128000.00', NULL, 'Belum dibayar'),
(112, 31, '2020-06-26 01:54:01', '2020-07-03 01:54:01', '30000.00', '', 21, 'pos', 'POS - Paket Kilat Khusus', '2-3 HARI', '54000.00', '84000.00', NULL, 'Belum dibayar'),
(113, 31, '2020-06-26 01:56:34', '2020-07-03 01:56:34', '40000.00', '', 65, 'jne', 'JNE - OKE', '3-6', '80000.00', '120000.00', NULL, 'Belum dibayar'),
(114, 31, '2020-06-26 02:01:23', '2020-07-03 02:01:23', '90000.00', '', 156, 'tiki', 'TIKI - ECO', '4', '68000.00', '158000.00', NULL, 'Belum dibayar'),
(115, 31, '2020-06-26 02:05:30', '2020-07-03 02:05:30', '121000.00', '', 76, 'tiki', 'TIKI - ECO', '5', '29000.00', '150000.00', NULL, 'Belum dibayar'),
(116, 31, '2020-06-26 02:21:00', '2020-07-03 02:21:00', '56000.00', '', 402, 'pos', 'POS - Paket Kilat Khusus', '2-3 HARI', '36000.00', '92000.00', NULL, 'Belum dibayar'),
(117, 31, '2020-06-26 02:27:44', '2020-07-03 02:27:44', '90000.00', '', 419, 'tiki', 'TIKI - ECO', '4', '25000.00', '115000.00', NULL, 'Belum dibayar'),
(118, 31, '2020-06-26 02:30:14', '2020-07-03 02:30:14', '30000.00', '', 419, 'tiki', 'TIKI - ECO', '4', '25000.00', '55000.00', NULL, 'Belum dibayar'),
(119, 31, '2020-06-26 02:32:36', '2020-07-03 02:32:36', '96000.00', '', 419, 'tiki', 'TIKI - ECO', '4', '25000.00', '121000.00', NULL, 'Belum dibayar'),
(120, 31, '2020-06-26 02:33:05', '2020-07-03 02:33:05', '30000.00', '', 419, 'jne', 'JNE - OKE', '2-3', '16000.00', '46000.00', NULL, 'Belum dibayar'),
(121, 31, '2020-06-26 03:01:26', '2020-07-03 03:01:26', '40000.00', '', 419, 'pos', 'POS - Paket Kilat Khusus', '2-3 HARI', '20000.00', '60000.00', 'BuktiPembayaran-121.png', 'Sudah dibayar'),
(122, 31, '2020-06-26 03:09:29', '2020-07-03 03:09:29', '40000.00', '', 175, 'tiki', 'TIKI - ECO', '5', '74000.00', '114000.00', NULL, 'Belum dibayar'),
(123, 31, '2020-06-27 22:51:33', '2020-07-04 22:51:33', '40000.00', 'asdf', 155, 'pos', 'POS - Paket Kilat Khusus', '1-2 HARI', '28000.00', '68000.00', NULL, 'Belum dibayar'),
(124, 31, '2020-06-27 23:00:47', '2020-07-04 23:00:47', '30000.00', 'asdf', 501, 'jne', 'JNE - OKE', '2-3', '16000.00', '46000.00', NULL, 'Belum dibayar'),
(125, 31, '2020-06-27 23:17:21', '2020-07-04 23:17:21', '30000.00', '', 155, 'tiki', 'TIKI - ECO', '4', '28000.00', '58000.00', NULL, 'Belum dibayar'),
(126, 31, '2020-06-27 23:21:53', '2020-07-04 23:21:53', '30000.00', '', 155, 'pos', 'POS - Paket Kilat Khusus', '1-2 HARI', '28000.00', '58000.00', NULL, 'Belum dibayar'),
(127, 31, '2020-06-27 23:34:26', '2020-07-04 23:34:26', '30000.00', '', 30, 'tiki', 'TIKI - ECO', '4', '92000.00', '122000.00', NULL, 'Belum dibayar'),
(128, 31, '2020-06-28 00:06:40', '2020-07-05 00:06:40', '120000.00', '', 460, 'jne', 'JNE - OKE', '3-6', '78000.00', '198000.00', NULL, 'Belum dibayar'),
(129, 31, '2020-06-28 00:27:35', '2020-07-05 00:27:35', '30000.00', '', 154, 'jne', 'JNE - OKE', '2-3', '26000.00', '56000.00', NULL, 'Belum dibayar'),
(130, 31, '2020-06-28 00:33:05', '2020-07-05 00:33:05', '22.00', '', 39, 'pos', 'POS - Paket Kilat Khusus', '1-2 HARI', '20000.00', '20022.00', NULL, 'Belum dibayar'),
(131, 31, '2020-06-28 01:04:48', '2020-07-05 01:04:48', '90.00', '', 403, 'tiki', 'TIKI - ECO', '4', '28000.00', '28090.00', 'BuktiPembayaran-131.png', 'Sudah dibayar'),
(132, 31, '2020-06-28 01:11:51', '2020-07-05 01:11:51', '30000.00', '', 178, 'jne', 'JNE - OKE', '2-3', '26000.00', '56000.00', 'BuktiPembayaran-132.png', 'Sudah dibayar'),
(133, 31, '2020-06-28 02:07:47', '2020-07-05 02:07:47', '30000.00', '', 175, 'pos', 'POS - Paket Kilat Khusus', '4-5 HARI', '78000.00', '108000.00', 'BuktiPembayaran-133.png', 'Sudah dibayar'),
(134, 31, '2020-06-28 02:12:08', '2020-07-05 02:12:08', '22.00', '', 399, 'jne', 'JNE - CTC', '1-2', '16000.00', '16022.00', NULL, 'Belum dibayar'),
(135, 31, '2020-06-28 02:14:14', '2020-07-05 02:14:14', '22.00', '', 399, 'jne', 'JNE - CTC', '1-2', '16000.00', '16022.00', 'BuktiPembayaran-135.png', 'Sudah dibayar'),
(136, 31, '2020-06-28 02:55:58', '2020-07-05 02:55:58', '30000.00', '', 49, 'tiki', 'TIKI - ECO', '4', '27000.00', '57000.00', 'BuktiPembayaran-136.png', 'Sudah dibayar'),
(137, 31, '2020-06-28 03:03:04', '2020-07-05 03:03:04', '60000.00', '', 152, 'jne', 'JNE - OKE', '2-3', '26000.00', '86000.00', 'BuktiPembayaran-137.png', 'Sudah dibayar'),
(138, 31, '2020-06-28 03:15:34', '2020-07-05 03:15:34', '25000.00', '', 280, 'jne', 'JNE - OKE', '3-6', '78000.00', '103000.00', NULL, 'Belum dibayar'),
(139, 31, '2020-06-28 03:21:00', '2020-07-05 03:21:00', '30000.00', '', 471, 'jne', 'JNE - OKE', '3-6', '78000.00', '108000.00', 'BuktiPembayaran-139.png', 'Sudah dibayar'),
(140, 1, '2020-06-29 17:11:53', '2020-07-06 17:11:53', '30000.00', 'neraka', 156, 'pos', 'POS - Paket Kilat Khusus', '3-4 HARI', '70000.00', '100000.00', 'BuktiPembayaran-140', 'Sudah dibayar'),
(141, 31, '2020-06-29 22:38:00', '2020-07-06 22:38:00', '30000.00', 'asdf', 393, 'jne', 'JNE - OKE', '3-6HARI', '78000.00', '108000.00', NULL, 'Belum dibayar'),
(142, 31, '2020-06-30 20:03:56', '2020-07-07 20:03:56', '70000.00', 'mana', 283, 'jne', 'JNE - OKE', '3-6', '72000.00', '142000.00', 'BuktiPembayaran-142.png', 'Sudah dibayar'),
(143, 31, '2020-06-30 20:28:40', '2020-07-07 20:28:40', '40000.00', 'hah', 108, 'tiki', 'TIKI - ECO', '4', '32000.00', '72000.00', 'BuktiPembayaran-143.png', 'Sudah dibayar'),
(144, 31, '2020-06-30 20:38:19', '2020-07-07 20:38:19', '30000.00', 'pucuk', 62, 'jne', 'JNE - OKE', '2-3', '70000.00', '100000.00', 'BuktiPembayaran-144.png', 'Sudah dibayar'),
(145, 31, '2020-06-30 21:03:10', '2020-07-07 21:03:10', '30000.00', '', 36, 'jne', 'JNE - OKE', '3-5', '72000.00', '102000.00', 'BuktiPembayaran-145.png', 'Sudah dibayar'),
(146, 31, '2020-06-30 22:55:37', '2020-07-07 22:55:37', '30000.00', '', 154, 'pos', 'POS - Paket Kilat Khusus', '1-2 HARI', '28000.00', '58000.00', 'BuktiPembayaran-146.png', 'Sudah dibayar'),
(147, 31, '2020-07-01 14:26:45', '2020-07-08 14:26:45', '38000.00', 'jl. anwar mustika', 42, 'jne', 'JNE - OKE', '3-6', '34000.00', '72000.00', 'BuktiPembayaran-147.png', 'Sudah dibayar'),
(148, 45, '2020-07-04 19:21:10', '2020-07-11 19:21:10', '60000.00', 'jalan kalaena', 471, 'jne', 'JNE - OKE', '3-6', '78000.00', '138000.00', 'BuktiPembayaran-148.png', 'Sudah dibayar'),
(149, 45, '2020-07-04 19:30:59', '2020-07-11 19:30:59', '90000.00', 'jalan kalaena', 471, 'jne', 'JNE - OKE', '3-6', '78000.00', '168000.00', 'BuktiPembayaran-149.png', 'Sudah dibayar'),
(150, 32, '2020-07-04 20:08:34', '2020-07-11 20:08:34', '370000.00', '', 442, 'jne', 'JNE - OKE', '3-6HARI', '78000.00', '448000.00', 'BuktiPembayaran-150', 'Sudah dibayar'),
(151, 32, '2020-07-04 20:13:37', '2020-07-11 20:13:37', '40000.00', '', 156, 'pos', 'POS - Paket Kilat Khusus', '3-4 HARI', '70000.00', '110000.00', 'BuktiPembayaran-151.jpg', 'Sudah dibayar'),
(152, 32, '2020-07-04 21:50:29', '2020-07-11 21:50:29', '30000.00', 'asdf', 175, 'pos', 'POS - Paket Kilat Khusus', '4-5 HARI', '78000.00', '108000.00', 'BuktiPembayaran-152.png', 'Sudah dibayar'),
(153, 32, '2020-07-04 22:52:56', '2020-07-11 22:52:56', '130000.00', 'jl pahlawan', 471, 'jne', 'JNE - OKE', '3-6HARI', '78000.00', '208000.00', 'BuktiPembayaran-153.png', 'Sudah dibayar'),
(154, 32, '2020-07-04 22:57:04', '2020-07-11 22:57:04', '150000.00', 'jalan pahlawan, rimbo bujang', 471, 'jne', 'JNE - OKE', '3-6HARI', '78000.00', '228000.00', 'BuktiPembayaran-154.png', 'Sudah dibayar'),
(155, 31, '2020-07-11 22:21:15', '2020-07-18 22:21:15', '38000.00', 'asdf', 153, 'pos', 'POS - Paket Kilat Khusus', '1-2 HARI', '28000.00', '66000.00', NULL, 'Belum dibayar'),
(156, 31, '2020-07-12 20:42:54', '2020-07-19 20:42:54', '40000.00', 'jalan arjuna', 375, 'jne', 'JNE - OKE', '3-6', '18000.00', '58000.00', NULL, 'Belum dibayar'),
(157, 31, '2020-07-12 20:52:28', '2020-07-19 20:52:28', '40000.00', '40 ribu', 42, 'pos', 'POS - Paket Kilat Khusus', '1-2 HARI', '38000.00', '78000.00', NULL, 'Belum dibayar'),
(158, 31, '2020-08-14 17:44:52', '2020-08-21 17:44:52', '90000.00', 'semarang', 88, 'jne', 'JNE - OKE', '5-7', '144000.00', '234000.00', NULL, 'Belum dibayar'),
(159, 46, '2020-08-17 15:13:41', '2020-08-24 15:13:41', '30000.00', 'asd', 30, 'jne', 'JNE - OKE', '3-6', '88000.00', '118000.00', 'BuktiPembayaran-159.png', 'Sudah dibayar'),
(160, 46, '2020-08-17 15:38:00', '2020-08-24 15:38:00', '90000.00', 'pati', 344, 'jne', 'JNE - OKE', '3-6', '18000.00', '108000.00', 'BuktiPembayaran-160.png', 'Sudah dibayar');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kd_barang`);

--
-- Indeks untuk tabel `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `konsumen`
--
ALTER TABLE `konsumen`
  ADD PRIMARY KEY (`kd_konsumen`);

--
-- Indeks untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`no_nota`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `kd_barang` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT untuk tabel `konsumen`
--
ALTER TABLE `konsumen`
  MODIFY `kd_konsumen` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `no_nota` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
