-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 21, 2024 at 10:10 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int NOT NULL,
  `kode_buku` varchar(5) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `id_pengarang` int NOT NULL,
  `id_penerbit` int NOT NULL,
  `tebal_halaman` int NOT NULL,
  `cetakan` varchar(255) NOT NULL,
  `harga` int NOT NULL,
  `stok` int NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `kode_buku`, `judul`, `id_pengarang`, `id_penerbit`, `tebal_halaman`, `cetakan`, `harga`, `stok`, `deskripsi`) VALUES
(1, 'B0001', 'The Power of Habit (kekuatan kebiasaan)', 50, 1, 371, '2019', 98000, 200, 'Jika seseorang bertanya pada anda, apa yang anda lakukan pertama kali setelah bangun tidur? Jawaban anda mungkin akan beragam. Misalnya, saat bangun tidur anda bergegas pergi ke kamar mandi, mungkin orang lain akan pergi menuju dapur dan membuka kulkas untuk menenguk segelas air atau mungkin bergegas keluar dari rumah dan melakukan lari pagi. kebiasaan tersebut nampaknya terdengar sangat umum, namun dapat memberikan pengaruh yang besar bagi siapapun, terutama terhadap diri anda sendiri.'),
(3, 'B0002', 'Sebuah Seni Untuk Bersikap Bodo Amat', 1, 1, 246, 'Cetakan III: Mei, 2018', 67000, 130, 'Kunci dari seni pertama adalah masa bodoh terhadap segala halangan dan perjuangan dalam mencapai sesuatu yang kita inginkan. Seharusnya kita hadapi dan nikmati saja karena dalam mengejar suatu pencapaian, pasti ada saja rintangan yang muncul. Seni kedua, temukan hal-hal penting dan berarti untuk diprioritaskan sehingga kamu bisa lebih mudah untuk masa bodoh pada hal-hal sepele. Adapun seni ketiga mempertegas seni sebelumnya, yakni kita mulai dapat memilah mana yang lebih penting saat beranjak dewasa. Walaupun hal penting itu tampaknya sederhana, tetapi kita bisa tetap bahagia dengan kesederhanaan itu.'),
(5, 'B0003', 'Filosofi Teras', 50, 1, 344, '2019', 90000, 175, 'Saat menyebut filsafat Yunani kuno, nama yang langsung terbit adalah Sokrates, Aristoteles dan Plato. Zeno rasanya terdengar asing. Filsafat juga identik dengan perenungan yang serba berat, abstrak, dan mengawang-awang.\r\n\r\nBicara filsafat, biasanya membicarakan konsep-konsep abstrak seperti eksistensialisme, nihilisme, strukturalisme hingga post-strukturalisme. Menyembuhkan depresi dan stres dianggap bukan ranah filsafat.'),
(6, 'B0004', 'Naruto Shippuden Vol.100', 51, 1, 50, '2020', 12000, 60, 'Komik Naruto');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `penerbit`
--

CREATE TABLE `penerbit` (
  `id` int NOT NULL,
  `penerbit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penerbit`
--

INSERT INTO `penerbit` (`id`, `penerbit`) VALUES
(1, 'Kepustaan Populer Gramedia-Jakarta &amp; New York Times'),
(2, 'HarperOne');

-- --------------------------------------------------------

--
-- Table structure for table `pengarang`
--

CREATE TABLE `pengarang` (
  `id` int NOT NULL,
  `pengarang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengarang`
--

INSERT INTO `pengarang` (`id`, `pengarang`) VALUES
(1, 'Charles Duhigg'),
(49, 'Mark Manson'),
(50, 'Henry Manampiring'),
(51, 'Tegar Pratama');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$QWPz2.Y53/sr6EgZMmUWkuTmqRvTjNzag8sPR3/3fyreKgmKmBwRC');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int NOT NULL,
  `id_user` int NOT NULL,
  `id_group` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `id_user`, `id_group`) VALUES
(1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_penerbit` (`id_penerbit`),
  ADD KEY `id_pengarang` (`id_pengarang`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penerbit`
--
ALTER TABLE `penerbit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengarang`
--
ALTER TABLE `pengarang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_group` (`id_group`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `penerbit`
--
ALTER TABLE `penerbit`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pengarang`
--
ALTER TABLE `pengarang`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `buku_ibfk_1` FOREIGN KEY (`id_penerbit`) REFERENCES `penerbit` (`id`),
  ADD CONSTRAINT `buku_ibfk_2` FOREIGN KEY (`id_pengarang`) REFERENCES `pengarang` (`id`);

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `users_groups_ibfk_1` FOREIGN KEY (`id_group`) REFERENCES `groups` (`id`),
  ADD CONSTRAINT `users_groups_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
