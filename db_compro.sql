-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2018 at 03:52 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_compro`
--

-- --------------------------------------------------------

--
-- Table structure for table `com_article`
--

CREATE TABLE `com_article` (
  `id_article` int(8) NOT NULL,
  `title` varchar(100) NOT NULL,
  `article` longtext NOT NULL,
  `image_article` varchar(200) NOT NULL,
  `id_user` int(11) NOT NULL,
  `date_article` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `com_article`
--

INSERT INTO `com_article` (`id_article`, `title`, `article`, `image_article`, `id_user`, `date_article`) VALUES
(1, 'test', 'test', '', 0, '0000-00-00 00:00:00'),
(2, 'test', 'test', 'asset/asset-admin/img/image-test2018-06-04_12-30-00.jpg', 1, '2018-06-04 12:30:00'),
(3, 'test lagi', 'test lagi yuk', 'asset/asset-admin/img/image-test-lagi2018-06-05_07-42-14.jpg', 1, '2018-06-05 07:42:14');

-- --------------------------------------------------------

--
-- Table structure for table `com_category`
--

CREATE TABLE `com_category` (
  `id_category` int(8) NOT NULL,
  `category` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `com_category`
--

INSERT INTO `com_category` (`id_category`, `category`) VALUES
(1, 'Sapi'),
(2, 'Kambing'),
(3, 'About Us');

-- --------------------------------------------------------

--
-- Table structure for table `com_category_article`
--

CREATE TABLE `com_category_article` (
  `id_category_article` bigint(20) NOT NULL,
  `id_category` int(8) NOT NULL,
  `id_article` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `com_gallery`
--

CREATE TABLE `com_gallery` (
  `id_gallery` bigint(20) NOT NULL,
  `name_gallery` varchar(50) NOT NULL,
  `image_gallery` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `com_gallery`
--

INSERT INTO `com_gallery` (`id_gallery`, `name_gallery`, `image_gallery`) VALUES
(2, 'Aqiqah', 'asset/images/image-aqiqah2018-07-20_09-20-49.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `com_image_gallery`
--

CREATE TABLE `com_image_gallery` (
  `id_image_gallery` int(20) NOT NULL,
  `id_gallery` int(20) NOT NULL,
  `caption` text NOT NULL,
  `image_url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `com_image_gallery`
--

INSERT INTO `com_image_gallery` (`id_image_gallery`, `id_gallery`, `caption`, `image_url`) VALUES
(4, 2, 'Aqiqah 1', 'asset/images/image-aqiqah-12018-07-20_09-21-40.jpeg'),
(5, 2, 'Aqiqah 2', 'asset/images/image-aqiqah-22018-07-20_09-22-04.jpeg'),
(6, 2, 'Aqiqah 3', 'asset/images/image-aqiqah-32018-07-20_09-22-14.jpeg'),
(7, 2, 'Aqiqah 4', 'asset/images/image-aqiqah-42018-07-20_09-22-38.jpeg'),
(8, 2, 'Aqiqah 5', 'asset/images/image-aqiqah-52018-07-20_09-22-48.jpeg'),
(9, 2, 'Aqiqah 6', 'asset/images/image-aqiqah-62018-07-20_09-22-57.jpeg'),
(10, 2, 'Aqiqah 7', 'asset/images/image-aqiqah-72018-07-20_09-25-28.jpeg'),
(11, 2, 'Aqiqah 8', 'asset/images/image-aqiqah-82018-07-20_09-25-36.jpeg'),
(12, 2, 'Aqiqah 9', 'asset/images/image-aqiqah-92018-07-20_09-25-49.jpeg'),
(13, 2, 'Aqiqah 10', 'asset/images/image-aqiqah-102018-07-20_09-25-57.jpeg'),
(14, 2, 'Aqiqah 11', 'asset/images/image-aqiqah-112018-07-20_09-26-07.jpeg'),
(15, 2, 'Aqiqah 12', 'asset/images/image-aqiqah-122018-07-20_09-26-17.jpeg'),
(16, 2, 'Aqiqah 13', 'asset/images/image-aqiqah-132018-07-20_09-26-26.jpeg'),
(17, 2, 'Aqiqah 14', 'asset/images/image-aqiqah-142018-07-20_09-26-38.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `com_menu`
--

CREATE TABLE `com_menu` (
  `id_menu` int(8) NOT NULL,
  `id_parent` int(8) NOT NULL,
  `menu` varchar(200) NOT NULL,
  `link_menu` varchar(200) NOT NULL,
  `internal_link` tinyint(1) NOT NULL COMMENT '0: Yes, 1: No',
  `sort_order` int(8) NOT NULL,
  `hierarchy` tinyint(2) NOT NULL COMMENT '0: Parent, 1: Submenu, 2:subsubmenu'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `com_menu`
--

INSERT INTO `com_menu` (`id_menu`, `id_parent`, `menu`, `link_menu`, `internal_link`, `sort_order`, `hierarchy`) VALUES
(2, 0, 'Home', 'http://localhost/compro/', 1, 1, 0),
(3, 0, 'Tentang Kami', 'p/tentang-kami', 0, 2, 0),
(4, 0, 'Sapi', 'p/sapi', 0, 3, 0),
(5, 0, 'Kambing', 'p/kambing', 0, 4, 0),
(6, 0, 'Kontak Kami', 'p/kontak', 0, 6, 0),
(8, 0, 'Gallery', 'v/gallery', 0, 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `com_module`
--

CREATE TABLE `com_module` (
  `id_mod` bigint(20) NOT NULL,
  `mod_author` int(8) NOT NULL,
  `mod_content` longtext NOT NULL,
  `mod_title` text NOT NULL,
  `mod_status` varchar(20) NOT NULL,
  `mod_type` varchar(20) NOT NULL,
  `mod_mime_type` varchar(20) NOT NULL,
  `mod_parent` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `com_page`
--

CREATE TABLE `com_page` (
  `id_page` int(8) NOT NULL,
  `id_category` int(11) NOT NULL,
  `title_page` varchar(200) NOT NULL,
  `page` longtext NOT NULL,
  `link_page` varchar(200) NOT NULL,
  `meta_description` varchar(500) NOT NULL,
  `meta_keywords` varchar(200) NOT NULL,
  `id_user` int(8) NOT NULL,
  `date_page` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `com_page`
--

INSERT INTO `com_page` (`id_page`, `id_category`, `title_page`, `page`, `link_page`, `meta_description`, `meta_keywords`, `id_user`, `date_page`) VALUES
(3, 1, 'Sapi ', '<p>Sapi A</p>\r\n<p>&nbsp;</p>', 'sapi', 'Jual Hewan Qurban dan Jasa Aqiqah Tangerang Murah', 'Qurban Tangerang, Aqiqah Murah, Aqiqah Tangerang, ZQ Aqiqah', 1, '2018-07-09 10:10:41'),
(4, 3, 'Tentang Kami', '<p>Lorem ipsum dolor sit amet, consectetur <strong>adipisicing</strong> elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'tentang-kami', 'Ini adalah halaman tentang kami', 'tentang kami, about us', 1, '2018-07-17 06:57:58'),
(5, 2, 'Kambing', '<p>Paket Aqiqah</p>\r\n<p><strong>Paket A<br /></strong>Harga&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Rp 1.350.000<br />Biaya Masak&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Rp&nbsp;&nbsp;&nbsp;&nbsp; 300.000<br />Hasil&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 200 Sate &amp; 50 Porsi Gulai</p>\r\n<p><strong>Paket B<br /></strong>Harga&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Rp 1.500.000<br />Biaya Masak&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Rp&nbsp;&nbsp;&nbsp;&nbsp; 350.000<br />Hasil&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 250 Sate &amp; 60 Porsi Gulai</p>\r\n<p><strong>Paket C<br /></strong>Harga&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Rp 1.800.000<br />Biaya Masak&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Rp&nbsp;&nbsp;&nbsp;&nbsp; 350.000<br />Hasil&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 300 Sate &amp; 70 Porsi Gulai</p>\r\n<p><strong>Paket D<br /></strong>Harga&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Rp 2.000.000<br />Biaya Masak&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Rp&nbsp;&nbsp;&nbsp;&nbsp; 400.000<br />Hasil&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 350 Sate &amp; 80 Porsi Gulai</p>\r\n<p><strong>Paket E<br /></strong>Harga&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Rp 2.300.000<br />Biaya Masak&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Rp&nbsp;&nbsp;&nbsp;&nbsp; 400.000<br />Hasil&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 400 Sate &amp; 95 Porsi Gulai</p>\r\n<p><strong>Paket F<br /></strong>Harga&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Rp 2.500.000<br />Biaya Masak&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Rp&nbsp;&nbsp;&nbsp;&nbsp; 400.000<br />Hasil&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 430 Sate &amp; 110 Porsi Gulai</p>\r\n<p><strong>Pilihan Menu</strong>:<br />Sate, Gulai, Sop, Semur, Rendang, Rica-rica</p>\r\n<p>NB: Harga suatu waktu bisa berubah-ubah</p>', 'kambing', 'Jual Beli Kambing', 'kambing, aqiqah', 1, '2018-07-17 09:44:30'),
(6, 3, 'Kontak Kami', '<p>Hubungi : Abun Rais<br /><br />Telpon : 021 - 222 6161 9<br />HP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 0851 0317 4141<br />WA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 0852 1824 8553</p>\r\n<p>&nbsp;</p>', 'kontak', 'Aqiqah Tangerang Hubungi Kami di nomor', 'aqiqah tangerang, aqiqah murah', 1, '2018-07-17 09:55:02');

-- --------------------------------------------------------

--
-- Table structure for table `com_setting`
--

CREATE TABLE `com_setting` (
  `id_setting` int(8) NOT NULL,
  `title_website` varchar(100) NOT NULL,
  `tagline_website` text NOT NULL,
  `default_template` varchar(150) NOT NULL,
  `default_admin` varchar(150) NOT NULL,
  `meta_description` longtext NOT NULL,
  `meta_keywords` varchar(100) NOT NULL,
  `favicon` varchar(200) NOT NULL,
  `logo_website` varchar(200) NOT NULL,
  `footer` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `com_setting`
--

INSERT INTO `com_setting` (`id_setting`, `title_website`, `tagline_website`, `default_template`, `default_admin`, `meta_description`, `meta_keywords`, `favicon`, `logo_website`, `footer`) VALUES
(1, 'TPQ Assalaam', 'Aqiqah Murah dan Berkualitas Insya Allah Berkah', 'default', 'admin', 'Aqiqah Tangerang Murah', 'Aqiqah, aqiqah tangerang, qurban tangerang, aqiqah murah', '', 'asset/images/logo-company-profile2018-07-09_06-21-46.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `com_user`
--

CREATE TABLE `com_user` (
  `id_user` int(8) NOT NULL COMMENT 'Yes',
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `permission` tinyint(4) NOT NULL COMMENT '0: writer 1: admin'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `com_user`
--

INSERT INTO `com_user` (`id_user`, `username`, `password`, `email`, `permission`) VALUES
(1, 'admin', '7914620eff52ddc761c1bae6d9e27e24', 'admin@gmail.com', 1),
(2, 'test', '7815696ecbf1c96e6894b779456d330e', 'asd@asd.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `com_article`
--
ALTER TABLE `com_article`
  ADD PRIMARY KEY (`id_article`);

--
-- Indexes for table `com_category`
--
ALTER TABLE `com_category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `com_category_article`
--
ALTER TABLE `com_category_article`
  ADD PRIMARY KEY (`id_category_article`);

--
-- Indexes for table `com_gallery`
--
ALTER TABLE `com_gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `com_image_gallery`
--
ALTER TABLE `com_image_gallery`
  ADD PRIMARY KEY (`id_image_gallery`);

--
-- Indexes for table `com_menu`
--
ALTER TABLE `com_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `com_module`
--
ALTER TABLE `com_module`
  ADD PRIMARY KEY (`id_mod`);

--
-- Indexes for table `com_page`
--
ALTER TABLE `com_page`
  ADD PRIMARY KEY (`id_page`);

--
-- Indexes for table `com_setting`
--
ALTER TABLE `com_setting`
  ADD PRIMARY KEY (`id_setting`);

--
-- Indexes for table `com_user`
--
ALTER TABLE `com_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `com_article`
--
ALTER TABLE `com_article`
  MODIFY `id_article` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `com_category`
--
ALTER TABLE `com_category`
  MODIFY `id_category` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `com_category_article`
--
ALTER TABLE `com_category_article`
  MODIFY `id_category_article` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `com_gallery`
--
ALTER TABLE `com_gallery`
  MODIFY `id_gallery` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `com_image_gallery`
--
ALTER TABLE `com_image_gallery`
  MODIFY `id_image_gallery` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `com_menu`
--
ALTER TABLE `com_menu`
  MODIFY `id_menu` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `com_module`
--
ALTER TABLE `com_module`
  MODIFY `id_mod` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `com_page`
--
ALTER TABLE `com_page`
  MODIFY `id_page` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `com_setting`
--
ALTER TABLE `com_setting`
  MODIFY `id_setting` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `com_user`
--
ALTER TABLE `com_user`
  MODIFY `id_user` int(8) NOT NULL AUTO_INCREMENT COMMENT 'Yes', AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
