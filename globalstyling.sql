-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2015 at 04:11 PM
-- Server version: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `globalstyling`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE IF NOT EXISTS `appointment` (
  `appoint_id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `person` varchar(10) NOT NULL,
  `country` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`appoint_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appoint_id`, `username`, `person`, `country`, `date`, `time`, `product_id`) VALUES
(1, 'admin', 'Men', 'London', '2015-10-03', '12:00:00', 4),
(2, 'torikul', 'Men', 'London', '2015-10-17', '13:59:00', 20),
(3, 'torikul', 'Men', 'London', '2015-10-17', '13:59:00', 21),
(4, 'admin', 'Women', 'Paris', '2015-10-10', '13:59:00', 4),
(5, 'admin', 'Women', 'NewYork', '2015-10-16', '12:00:00', 28),
(6, 'jahan', 'Men', 'London', '2015-10-17', '12:00:00', 21),
(7, 'admin', 'Women', 'London', '2015-10-09', '01:59:00', 20);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `person` varchar(10) NOT NULL,
  `product_name` varchar(10) NOT NULL,
  `product_info` text NOT NULL,
  `image` longblob NOT NULL,
  `price` double NOT NULL,
  `state` varchar(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `person`, `product_name`, `product_info`, `image`, `price`, `state`) VALUES
(20, 'Men', 'HAIRSTYLE', 'Boys with long ear length hairs looks smart and attractive. Long hairs with messy straight hairs make their personality sexy and trendy.', 0x3130302e6a7067, 159, 'london'),
(21, 'Men', 'HAIRSTYLE', 'Men in this picture had very rough messy long hairs which also dye in a brown blonde mix shade. Itâ€™s a very attractive and unique hairstyle of this year.', 0x3130312e6a7067, 129, 'london'),
(23, 'Women', 'HAIRSTYLE', 'Following the footsteps of many celebrities, renowned models and influential media personalities, millions of new-generation fashionistas are getting smitten by the incredible benefits of artificial hair extension these days. Incredible popularity of artificial.', 0x3230312e6a7067, 99, 'paris'),
(24, 'Women', 'HAIRSTYLE', 'When you want to exude a powerful look, you have to dress your face accordingly. This is what a power couple of sunglasses and lipstick looks like: You coordinate statement sunglasses with a combination of lipstick and gloss. ', 0x3230322e6a7067, 109, 'paris'),
(25, 'Women', 'HAIRSTYLE', 'For women with curly, wavy or textured hair, another fashionable style option for 2012 is the messy shag cut like the one sported by fashionista Alexa Chung. This kind of cut is chopped straight around the head just below the chin. This cut should be styled naturally, with loose, air-dryed curls and waves, rather than .', 0x3230332e6a7067, 119, 'paris'),
(26, 'Men', 'HAIRSTYLE', 'The GlobalStyling Hair Salon Company is rated a 5 star salon by the good salon guide. Take a look at our salon profile for more information about the new salon or go straight to our services and products to see what we can do for you.Our brand new salon is light.', 0x3130332e6a7067, 140, 'paris'),
(27, 'Men', 'HAIRSTYLE', 'The GlobalStyling Hair Salon Company is rated a 5 star salon by the good salon guide. Take a look at our salon profile for more information about the new salon or go straight to our services and products to see what we can do for you.Our brand new salon is light.', 0x3130322e6a7067, 123, 'london'),
(29, 'Women', 'Hairtreatm', 'In 2013, the best trendy hair cut for menâ€™s is the half-shaved style. Half shaved is best for these summers and also very easy to handle or carry anywhere. It is also a very trendy style among boys.', 0x7468756d62322e6a7067, 45, 'London'),
(30, 'Women', 'Hairstyle', 'You coordinate statement sunglasses with a combination of lipstick and gloss. It is smart, sassy and we tell you-very powerful. Go for lip duos like Noni CrÃ¨me Colour Classic Lip Duo to ramp up that look every now and then. ', 0x3230332e6a7067, 45, 'London'),
(31, 'Women', 'Haircurt', 'Incredible popularity of artificial hair extension has caused the international glamour world to get flooded with many brands of hair extension and hair styling options. The artificial hair extension is certainly great for getting instant long', 0x3230312e6a7067, 26, 'London'),
(32, 'Men', 'Hairtreatm', ' You coordinate statement sunglasses with a combination of lipstick and gloss. It is smart, sassy and we tell you-very powerful. Go for lip duos like Noni CrÃ¨me Colour Classic Lip Duo to ramp up that look every now and then. Donâ€™t forget to carry that smile and please groom your eyebrows!', 0x3130312e6a7067, 26, 'Paris'),
(33, 'Men', 'Haircurt', 'You coordinate statement sunglasses with a combination of lipstick and gloss. It is smart, sassy and we tell you-very powerful. Go for lip duos like Noni CrÃ¨me Colour Classic Lip Duo to ramp up that look every now and then. ', 0x3130322e6a7067, 65, 'Paris'),
(35, 'Men', 'Haircurt', ' You coordinate statement sunglasses with a combination of lipstick and gloss. It is smart, sassy and we tell you-very powerful. Go for lip duos like Noni CrÃ¨me Colour Classic Lip Duo to ramp up that look every now and then. Donâ€™t forget to carry that smile and please groom your eyebrows!', 0x3130312e6a7067, 16, 'Newyork'),
(36, 'Women', 'Hairsampoo', 'You coordinate statement sunglasses with a combination of lipstick and gloss. It is smart, sassy and we tell you-very powerful. Go for lip duos like Noni CrÃ¨me Colour Classic Lip Duo to ramp up that look every now and then. ', 0x7468756d62332e6a7067, 98, 'Newyork'),
(40, 'Women', 'Hairtreatm', 'BOOK ONLINE - with our live booking system. Its instant confirmation and you can book when it suits you! Try it today by clicking on the link to the right.', 0x3230332e6a7067, 45, 'Newyork'),
(41, 'Men', 'Hairtreatm', 'Incredible popularity of artificial hair extension has caused the international glamour world to get flooded with many brands of hair extension and hair styling options. The artificial hair extension is certainly great for getting instant long', 0x3130332e6a7067, 26, 'Newyork'),
(42, 'Men', 'Haircurt', 'Following the footsteps of many celebrities, renowned models and influential media personalities, millions of new-generation fashionistas are getting smitten by the incredible benefits of artificial hair extension these days. Incredible popularity of artificial.', 0x3130322e6a7067, 45, 'Newyork');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `age` varchar(10) NOT NULL,
  `biography` text NOT NULL,
  `person` varchar(10) NOT NULL,
  `country` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `username`, `email`, `password`, `age`, `biography`, `person`, `country`) VALUES
(9, 'Protick', 'protickgosu@gmail.com', 'ac953e9e3b642d91b77674aa07ff8758', 'under_13', 'hello', 'Men', 'London'),
(10, 'torikul', 'torikul711@gmail.com', 'a81fade96fc9d4ada540713027fe35ff', '13', 'dfd', 'sf', 'sfsf'),
(11, 'admin', '', '21232f297a57a5a743894a0e4a801fc3', '', '', 'Men', 'London'),
(12, 'jahan', 'kahan@gmail.com', 'dc72d6875386e88ba0d14c079b3dbf3a', 'under_13', 'Hi I am a Student', 'Men', 'Paris'),
(13, 'sdfds', 'admin@gmail.com', '3d4044d65abdda407a92991f1300ec97', 'under_13', 'dfgdfg', 'Women', 'NewYork');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
