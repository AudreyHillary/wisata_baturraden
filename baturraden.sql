-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 21, 2022 at 01:35 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `visitbogor`
--

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

DROP TABLE IF EXISTS `pesanan`;
CREATE TABLE IF NOT EXISTS `pesanan` (
  `id_pesanan` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `no_identitas` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `wisata` varchar(255) NOT NULL,
  `kunjungan` date NOT NULL,
  `pengunjung_dewasa` int(11) NOT NULL,
  `pengunjung_anak` int(11) NOT NULL,
  `harga_tiket` varchar(50) NOT NULL,
  `total_harga` varchar(50) NOT NULL,
  PRIMARY KEY (`id_pesanan`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `name`, `no_identitas`, `no_hp`, `wisata`, `kunjungan`, `pengunjung_dewasa`, `pengunjung_anak`, `harga_tiket`, `total_harga`) VALUES
(3, 'Contoh', '0821832148214821', '082183214821', 'Taman Bunga Nusantara', '2022-04-23', 3, 2, '30000', '120000');

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

DROP TABLE IF EXISTS `wisata`;
CREATE TABLE IF NOT EXISTS `wisata` (
  `id_wisata` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` varchar(25) NOT NULL,
  `video` varchar(255) NOT NULL,
  PRIMARY KEY (`id_wisata`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id_wisata`, `name`, `desc`, `image`, `price`, `video`) VALUES
(1, 'Taman Bunga Nusantara', 'Tempat wisata Bogor yang satu ini dibangun di atas lahan seluas 23 hektar. Dipenuhi bungabunga cantik yang ditata dengan apik. Pengunjung bisa menjajal taman labirin, go-kart, bumper boat atau ATV race. Air mancur musikalnya juga cantik, lho.', 'tamanbunga.png', '30000', 'https://www.youtube.com/embed/U14jitAhs5U'),
(2, 'Air Panas Ciseeng', 'Tempat wisata Bogor, daerah Parung ini menawarkan sensasi berendam air panas di infinity pool alami. Airnya yang mengandung belerang dan garam baik untuk kesehatan serta kecantikan kulit.', 'ciseeng.jpg', '15000', 'https://www.youtube.com/embed/mQ2k7joJ__M'),
(3, 'Devoyage', 'Devoyage merupakan tempat wisata yang dibuat untuk para pemburu foto Instagramable, dengan konsep taman berisi bangunan atau landmark terkenal dari berbagai negara Eropa. Lokasinya ada di daerah Nirwana Residence, Jalan Indigo Raya, Mulyaharja, Bogor Selatan, Jawa Barat.', 'devoyage.jpg', '25000', 'https://www.youtube.com/embed/8lTwlaUcSj8');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
