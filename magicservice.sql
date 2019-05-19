-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 13 Noi 2016 la 16:02
-- Versiune server: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magicservice`
--

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(100) NOT NULL,
  `brand_title` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'N/A'),
(2, 'Marca 1'),
(3, 'Marca 2'),
(4, 'Marca 3');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(2, 'N/A'),
(3, 'Ulei'),
(4, 'Scaune'),
(5, 'Baterii'),
(6, 'Diverse'),
(7, 'Jante');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(255) NOT NULL,
  `msg` blob NOT NULL,
  `status` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `messages`
--

INSERT INTO `messages` (`msg_id`, `msg`, `status`) VALUES
(2, 0x446973706f6e6962696c69746174652050726f64757342617465726965204d6f746f6369636c6574613c6272202f3e446174613a30392d31312d323031363c6272202f3e4f72613a31353a30333a3336204e756d653a204e69636f6c61752053746566616e3c6272202f3e2054656c65666f6e3a20303732383933383333353c6272202f3e3c6272202f3e20562e492e4e2e3a20303938373635343332313c6272202f3e3c6272202f3e3c703e546573743c2f703e3c6272202f3e2050726f6475733a203c6120687265663d22687474703a2f2f70696573656175746f74757269736d652e726f2f64657461696c732e7068703f70726f5f69643d37223e42617465726965204d6f746f6369636c6574613c2f613e, 'Citit'),
(3, 0x446973706f6e6962696c69746174652050726f647573556c656920537469636c6120417267696e7469653c6272202f3e446174613a30392d31312d323031363c6272202f3e4f72613a31353a33353a3238204e756d653a204e69636f6c6175204361726d656e3c6272202f3e2054656c65666f6e3a2030373836353433313336323c6272202f3e3c6272202f3e20562e492e4e2e3a20323331333231363332323138373c6272202f3e3c6272202f3e3c703e544553543c2f703e3c6272202f3e2050726f6475733a203c6120687265663d22687474703a2f2f70696573656175746f74757269736d652e726f2f64657461696c732e7068703f70726f5f69643d38223e556c656920537469636c6120417267696e7469653c2f613e, 'Citit'),
(6, 0x436f6e74616374204d616769632053657276696365203c6272202f3e446174613a2031332d31312d323031363c6272202f3e4f72613a2031363a35373a35363c6272202f3e204e756d653a204e69636f6c61752053746566616e3c6272202f3e2054656c65666f6e3a20303732383933383333353c6272202f3e3c6272202f3e20, 'Necitit'),
(5, 0x446973706f6e6962696c69746174652050726f647573204361626c75726920506f726e6972653c6272202f3e446174613a2030392d31312d323031363c6272202f3e4f72613a2031373a31343a35393c6272202f3e204e756d653a204e69636f6c61752053746566616e3c6272202f3e2054656c65666f6e3a20303732383933383333353c6272202f3e3c6272202f3e20562e492e4e2e3a203132333435363738393837343536313c6272202f3e3c6272202f3e3c6272202f3e2050726f6475733a203c6120687265663d22687474703a2f2f70696573656175746f74757269736d652e726f2f64657461696c732e7068703f70726f5f69643d39223e4361626c75726920506f726e6972653c2f613e, 'Necitit');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` longtext CHARACTER SET utf8 NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES
(7, 5, 2, 'Baterie Motocicleta', 200, '<p>Before Mysql version 5.0.3 Varchar datatype can store 255 characters, but from 5.0.3 it can store 65,635 characters.&nbsp;</p>\r\n<p>But it has a limitation of maximum row size of 65,535 bytes. It means including all columns it must not be more than 65,535 bytes.</p>', '1176.jpg', 'baterie, motocicleta'),
(8, 3, 4, 'Ulei Sticla Argintie', 80, '<p>Maecenas sit amet efficitur augue. Praesent laoreet ac enim sit amet volutpat. Aliquam vel rhoncus nibh. Nullam a suscipit massa, vitae dictum tortor. Aenean non scelerisque ligula. Pellentesque fringilla urna non est auctor malesuada. Aliquam erat volutpat. Duis vitae velit sit amet leo egestas porttitor tempus quis ligula.&nbsp;</p>', '8667.jpg', 'Ulei, Sticla, Argintie'),
(9, 6, 1, 'Cabluri Pornire', 15, '<ul>\r\n<li><strong>Tip: CABLURI PORNIRE</strong></li>\r\n</ul>\r\n<ul>\r\n<li><strong>intensitate curent 100A</strong></li>\r\n</ul>', '2933.jpg', 'cablu, pornire, 100A');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `tbl_admins`
--

CREATE TABLE `tbl_admins` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(60) NOT NULL,
  `user_pass` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `tbl_admins`
--

INSERT INTO `tbl_admins` (`user_id`, `user_name`, `user_email`, `user_pass`) VALUES
(1, 'administrator', 'nicolau.stefan2011@gmail.com', '$2y$10$ZSgOnkHXudPYs1Z/7xM9NOgWjXYK5tVoXGho4udXK8gmn75ELbC1i');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_admins`
--
ALTER TABLE `tbl_admins`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_admins`
--
ALTER TABLE `tbl_admins`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
