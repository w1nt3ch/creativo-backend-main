-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2022 at 12:27 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_creativo`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_telp` varchar(20) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`admin_id`, `admin_name`, `username`, `password`, `admin_telp`, `admin_email`, `admin_address`) VALUES
(1, 'Tester', 'admin', '5f48a5df5e2ecb1282c9d43c449f8c6bbed8a9e8d8d6b923036499be4fc6f17d', '082291111004', 'creativo.backend@binus.ac.id', 'Jl. Raya Kb. Jeruk No.27, RW.9, Kb. Jeruk, Kec. Kb. Jeruk, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11530');

-- --------------------------------------------------------

--
-- Table structure for table `tb_category`
--

CREATE TABLE `tb_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_category`
--

INSERT INTO `tb_category` (`category_id`, `category_name`) VALUES
(2, 'Prototype'),
(4, 'Video Editing'),
(5, 'Design'),
(6, 'Video Scribe'),
(9, 'Storyboard');

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE `tb_product` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_description` text NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_status` tinyint(1) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`product_id`, `category_id`, `product_name`, `product_price`, `product_description`, `product_image`, `product_status`, `date_created`) VALUES
(3, 5, 'Design modern creative logo', 100000, '<p>Deskripsi :</p>\r\n\r\n<p>Halo,</p>\r\n\r\n<p>Anda sedang mencari DESAIN LOGO MINIMALIS KREATIF, PROFESIONAL &amp; MODERN untuk perusahaan anda? Maka Anda berada di tempat yang tepat!</p>\r\n\r\n<p>Kami telah menyelesaikan lebih dari 200 proyek di Creativo dalam 1 bulan terakhir dengan lebih dari 150++ ulasan positif untuk pekerjaan profesional kami.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Apa yang membuat anda memilih kami?</p>\r\n\r\n<p>kami memembuat desain logo Modern dengan warna yang menarik dan font yang mudah dibaca untuk setiap jenis latar belakang.</p>\r\n\r\n<p>Yang akan kami berikan:</p>\r\n\r\n<p>Desain asli dan dibuat khusus<br />\r\nBeberapa Konsep Logo<br />\r\nPengiriman cepat sesuai paket<br />\r\nWarna eye-catching dengan variasi hitam/putih<br />\r\nresolusi tinggi JPEG &amp; PNG + AI, EPS, PDF, PSD, SVG yang dapat diedit<br />\r\nRespon cepat dan profesional untuk setiap permintaan</p>\r\n', 'produk1656298387.png', 1, '2022-06-27 02:53:07'),
(4, 4, 'Test yout product and make video', 100000, '<p>Deskripsi :</p>\r\n\r\n<p>Halo,</p>\r\n\r\n<p>Kami akan membongkar/membongkar item pilihan Anda dan memakannya, mengujinya atau mencobanya di depan kamera.&nbsp;</p>\r\n\r\n<p>Paket didasarkan pada panjang video yang Anda inginkan. Anda dapat mengirimkan produk Anda ke Email kami.</p>\r\n\r\n<p>Waktu pengiriman &nbsp;hingga 7 hari, termasuk waktu pengiriman. Setelah kami menerima produk, syuting akan memakan waktu 2-3 hari kerja. Semakin cepat produk sampai ke Kami, semakin cepat kami dapat menyelesaikan pekerjaan.</p>\r\n', 'produk1656298460.png', 1, '2022-06-27 02:54:20'),
(5, 9, 'Professional storyboard', 100000, '<p>Deskripsi :</p>\r\n\r\n<p>Halo,</p>\r\n\r\n<p><strong>Jika Anda sedang mencari service yang dapat menerjemahkan ide-ide Anda ke dalam representasi visual, ini adalah pilihan yang tepat!</strong></p>\r\n\r\n<p><strong>Manfaat:</strong></p>\r\n\r\n<ul>\r\n	<li><strong>KEPUASAN 100% DIJAMIN.</strong></li>\r\n	<li><strong>Pengalaman profesional yang</strong>&nbsp;hebat&nbsp;di bidang ini.</li>\r\n	<li><strong>Desain kualitas terbaik dengan harga terjangkai</strong></li>\r\n	<li><strong>Fleksibilitas</strong>&nbsp;dan&nbsp;<strong>kemauan</strong>&nbsp;untuk menawarkan hasil terbaik.</li>\r\n	<li>File resolusi tinggi siap dicetak + resolusi rendah.&nbsp;file untuk perangkat seluler yang disediakan di setiap paket.</li>\r\n</ul>\r\n\r\n<p>Kami bisa membuat storyboard untuk :</p>\r\n\r\n<ul>\r\n	<li>film dan serial aksi langsung</li>\r\n	<li>Film pendek</li>\r\n	<li>animasi</li>\r\n	<li>video game</li>\r\n	<li>Kartun dan komik</li>\r\n	<li>Video musik</li>\r\n	<li>Komersial/iklan</li>\r\n	<li>Segala sesuatu yang perlu dibuat storyboard!.</li>\r\n</ul>\r\n\r\n<p>Jangan ragu untuk menghubungi saya untuk pertanyaan atau masalah apa pun!</p>\r\n', 'produk1656298534.png', 1, '2022-06-27 02:55:34'),
(6, 6, 'Weeding video scribe animation', 100000, '<p>Deskripsi :</p>\r\n\r\n<p><strong>We can help you create amazing custom wedding whiteboard videoscribe &amp; annotators for your wedding or business explorer</strong></p>\r\n\r\n<p>Halo,</p>\r\n\r\n<p>Kami memiliki banyak contoh pembuat video pernikahan kustom &amp; penjelas papan tulis yang dibuat oleh kami. Jika Anda memerlukan bantuan untuk membuat videoscribe untuk pernikahan atau bisnis Anda, kirimkan kami pesan, kami akan senang jika kami dapat membantu Anda :)</p>\r\n\r\n<p>Dalam service kami, Anda akan mendapatkan:</p>\r\n\r\n<p>Video HD 1080p<br />\r\nMusik Latar Belakang Bebas Royalti<br />\r\nWarna Latar Belakang Apa Saja<br />\r\nDurasi video 60-300 detik<br />\r\nVideo dalam format apa pun<br />\r\nTambahkan logo</p>\r\n\r\n<p>Naskah tertulis maksimal 500 kata (bisa didiskusikan jika ingin lebih dari 500 kata)</p>\r\n\r\n<p>100% Hak Komersial</p>\r\n', 'produk1656298585.png', 1, '2022-06-27 02:56:25'),
(7, 6, 'Professional Video scribe design', 100000, '<p>Deskripsi :</p>\r\n\r\n<p>Catatan: Untuk durasi panjang, kami siap melakukannya. (video berdurasi di atas 2 menit).</p>\r\n\r\n<p>Penawaran khusus juga tersedia untuk durasi panjang dan animasi khusus</p>\r\n\r\n<p>Halo,</p>\r\n\r\n<p>Di sini Anda mendapatkan Desain Papan Tulis Modern Terbaik Sesuai dengan instruksi Anda.</p>\r\n\r\n<p>Juga, Di Sini Anda Temukan Desainer Terbaik.</p>\r\n\r\n<p><br />\r\nApa yang Anda Dapatkan (Kualitas pekerjaan kami).!<br />\r\n1. Respon Cepat<br />\r\n2. Pilihan Warna<br />\r\n3. Karya animasi terbaik<br />\r\n4. Pengiriman Cepat &amp; Tepat Waktu<br />\r\n5. Karya Terbaik yang Dibuat dengan Hati-hati<br />\r\n6. Revisi Tanpa Batas sampai Anda puas.</p>\r\n\r\n<p>Saya menyediakan layanan dengan menggunakan alat ini:<br />\r\nvyond<br />\r\nvideoscribe<br />\r\ndoodle</p>\r\n\r\n<p><br />\r\nYang akan Anda dapatkan :</p>\r\n\r\n<p>animasi video papan tulis<br />\r\nanimasi papan tulis<br />\r\nAnimasi 2d menggunakan vyond<br />\r\nvideo penjelasan<br />\r\nanimasi logo menggunakan videoscribe<br />\r\nkarakter 2d menggunakan vyond<br />\r\ngambar yg tak berarti<br />\r\nvideoscribe</p>\r\n\r\n<p><strong>Our priority is your satisfaction</strong></p>\r\n', 'produk1656298613.png', 1, '2022-06-27 02:56:53'),
(8, 2, 'We will design figma prototype', 100000, '<p>Deskripsi :</p>\r\n\r\n<p>Halo,</p>\r\n\r\n<p>Apakah Anda mencari desain template situs web/apps yang Modern dan Bersih? kontak kami sekarang! kami akan membalas Anda ASAP, dan kami akan membantu segera!</p>\r\n\r\n<p>Mengapa Memilih kami?</p>\r\n\r\n<p>1. Kami akan memastikan kualitas 100%<br />\r\n2. Respon cepat<br />\r\n3. Dukungan online 24/7<br />\r\n4. Komunikasi Mudah<br />\r\n5. Pengiriman tepat waktu<br />\r\n6. kepuasan 100% dijamin</p>\r\n\r\n<p>Layanan apa yang akan Anda dapatkan service kami?<br />\r\n# Pengiriman cepat<br />\r\n# Semua format isian<br />\r\n# Font gratis<br />\r\n# Revisi tanpa batas sampai Anda puas</p>\r\n\r\n<p>Jika Anda menyukai pertunjukan saya. Anda dapat memesan layanan saya di sini dan kami akan segera menghubungi Anda kembali. Silahkan hubungi saya sebelum menempatkan pesanan sehingga saya bisa mendapatkan ide yang jelas tentang proyek Anda.</p>\r\n\r\n<p>Kami berharap dapat bekerja sama dengan Anda :)</p>\r\n', 'produk1656298645.png', 1, '2022-06-27 02:57:25'),
(9, 4, 'Fast professional video editing', 100000, '<p>Deskripsi :</p>\r\n\r\n<p>Halo,</p>\r\n\r\n<p>Kami bekerja dengan penawaran khusus untuk menyesuaikan penawaran dengan kebutuhan Anda untuk memberikan harga terbaik, waktu pengiriman, jumlah revisi, dan pengalaman keseluruhan. Jangan ragu untuk menghubungi kami, sehingga kita dapat bekerja sama untuk menciptakan hasil terbaik.</p>\r\n\r\n<p>Kami dapat menampilkan dan merender dalam format file apa pun yang Anda inginkan<br />\r\nMenjaga kualitas setinggi mungkin tanpa biaya tambahan, bahkan 4K<br />\r\nRevisi selalu disertakan<br />\r\nKami dapat menemukan dan menggunakan musik bebas royalti untuk Anda</p>\r\n\r\n<p>Kami sudah memiliki lebih dari 200 pelanggan yang puas akan pekerjaan kami</p>\r\n\r\n<p>Menjadi salah satu dari banyak pelanggan yang puas dan mengalami pengeditan profesional, respons cepat, dan semangat untuk memberikan hasil terbaik.</p>\r\n\r\n<p>Kami seorang editor serba bisa. Yang paling sering saya edit adalah video promo, iklan, highlight, video Youtube, webinar, tetapi seperti yang saya katakan, saya dapat mengedit semua jenis video. Hubungi kami untuk mengetahui lebih lanjut :)</p>\r\n', 'produk1656298692.png', 1, '2022-06-27 02:58:12'),
(10, 5, 'Design your football team logo', 50000, '<p>Deskripsi :</p>\r\n\r\n<p>Halo,</p>\r\n\r\n<p>Memberikan klub Anda logo keren, bersih, dan serbaguna yang siap mengangkat identitas tim Anda.</p>\r\n\r\n<p>Jika Anda sedang mencari logo sepak bola/sepak bola baru untuk tim Anda atau mungkin pembaruan untuk identitas &nbsp;klub olahraga Anda, maka kami dapat membantu Anda mewujudkan visi Anda.</p>\r\n\r\n<p>Saya akan meminta Anda untuk mengisi kuesioner singkat yang akan memberi kami detail untuk memulai proyek!</p>\r\n\r\n<p>Proses:</p>\r\n\r\n<p>1) Discovery<br />\r\nDetail tentang bisnis Anda, proposal Anda, mengidentifikasi atribut dan nilai merek Anda saat ini. Sebuah kuesioner singkat akan memungkinkan saya untuk belajar tentang Anda sebagai sebuah bisnis.</p>\r\n\r\n<p>2) Penelitian - visual<br />\r\nDesain yang menyoroti tampilan, nuansa, arah, dan gaya identitas tim Anda. Kami akan melakukan penelitian yang berfokus pada isyarat visual logo (simbol, budaya, sejarah, bahasa, dll.).</p>\r\n\r\n<p>3) Konsep dan Sketsa<br />\r\nSketsa konsep awal dengan citra pendukung untuk memandu Anda menuju suatu arah.</p>\r\n\r\n<p>4) Ulasan<br />\r\nKami menghidupkan konsep! Anda akan menerima sebuah karya presentasi di mana Anda dapat membuat perubahan dan kami dapat mulai menyempurnakannya.</p>\r\n\r\n<p>5) Finalisasi dan Pengiriman<br />\r\nSetelah Anda puas, konsepnya diselesaikan dan Anda akan menerima file yang diperlukan.</p>\r\n\r\n<p>Format Berkas<br />\r\nAI<br />\r\nJPG<br />\r\nPDF<br />\r\nPNG</p>\r\n', 'produk1656298729.png', 1, '2022-06-27 02:58:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
