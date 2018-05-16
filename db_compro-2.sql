-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 16, 2018 at 09:19 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

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
  `news` longtext NOT NULL,
  `image_news` varchar(200) NOT NULL,
  `id_user` int(11) NOT NULL,
  `data_news` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `com_category`
--

CREATE TABLE `com_category` (
  `id_category` int(8) NOT NULL,
  `category` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `com_image_gallery`
--

CREATE TABLE `com_image_gallery` (
  `id_image_galery` int(20) NOT NULL,
  `id_galery` int(20) NOT NULL,
  `caption` int(50) NOT NULL,
  `image_url` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `com_menu`
--

CREATE TABLE `com_menu` (
  `id_menu` int(8) NOT NULL,
  `id_parent` int(8) NOT NULL,
  `menu` varchar(200) NOT NULL,
  `sort_order` int(8) NOT NULL,
  `hierarchy` tinyint(2) NOT NULL COMMENT '0: Parent, 1: Submenu, 2:subsubmenu'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `id_user` int(8) NOT NULL,
  `date_page` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `footer` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'admin', '7914620eff52ddc761c1bae6d9e27e24', 'admin@gmail.com', 1);

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
  ADD PRIMARY KEY (`id_image_galery`);

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
  MODIFY `id_article` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `com_category`
--
ALTER TABLE `com_category`
  MODIFY `id_category` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `com_category_article`
--
ALTER TABLE `com_category_article`
  MODIFY `id_category_article` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `com_gallery`
--
ALTER TABLE `com_gallery`
  MODIFY `id_gallery` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `com_image_gallery`
--
ALTER TABLE `com_image_gallery`
  MODIFY `id_image_galery` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `com_menu`
--
ALTER TABLE `com_menu`
  MODIFY `id_menu` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `com_module`
--
ALTER TABLE `com_module`
  MODIFY `id_mod` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `com_page`
--
ALTER TABLE `com_page`
  MODIFY `id_page` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `com_setting`
--
ALTER TABLE `com_setting`
  MODIFY `id_setting` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `com_user`
--
ALTER TABLE `com_user`
  MODIFY `id_user` int(8) NOT NULL AUTO_INCREMENT COMMENT 'Yes', AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
