-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 22, 2020 at 03:02 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doncorleone`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `password` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `firstname`, `lastname`, `username`, `email`, `address`, `birthday`, `password`, `picture`) VALUES
(1, 'Aleksandar', 'Vorgic', 'aleksandarvorgic', 'axa.v98@hotmail.rs', 'Mihajla Radnica 2', '1998-05-30', 'aleksandar', 'aleksandar.jpg'),
(2, 'Petar', 'Jager', 'petarjager', 'petar.jager@gmail.com', 'Gundiliceva 22', '1998-05-09', 'petar', 'petar.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

DROP TABLE IF EXISTS `delivery`;
CREATE TABLE IF NOT EXISTS `delivery` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `food_ID` int(11) NOT NULL,
  `food_amount` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `payment` enum('cash','card') NOT NULL,
  `comment` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_delivery_menu` (`food_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`ID`, `food_ID`, `food_amount`, `firstname`, `lastname`, `phone`, `address`, `payment`, `comment`) VALUES
(9, 4, 2, 'Aleksandar', 'Vorgic', '0642859525', 'Mihajla Radnica 2', 'cash', 'komentar'),
(10, 13, 1, 'Petar', 'Jager', '0611770265', 'Gunduliceva 22', 'card', 'komentar');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `picture` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`ID`, `name`, `description`, `price`, `picture`) VALUES
(4, 'Cevapcici sa lukom', 'Porcija cevapcica sa lukom se sastoji od 10 cevapa', 640, 'cevapi.jpg'),
(5, 'Spagete Karbonate', 'spagete opis...', 550, 'spagete.jpg'),
(6, 'Piletina sa susamom', 'Opis ovog jela...', 650, 'piletina.jpg'),
(7, 'Pizza Margarita', 'Opis pice', 490, 'pizza.jpg'),
(11, 'Pasulj', 'pasulj opis', 300, 'pasulj.jpg'),
(13, 'Sarma', 'sarma opis', 300, 'pasulj.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `dateOfReservation` date NOT NULL,
  `timeOfReservation` time NOT NULL,
  `numberOfGuests` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`ID`, `firstname`, `lastname`, `email`, `phone`, `dateOfReservation`, `timeOfReservation`, `numberOfGuests`, `comment`) VALUES
(5, 'Aleksandar', 'Vorgic', 'axa.v007@gmail.com', '0642859525', '2020-08-30', '18:30:00', 2, 'test'),
(6, 'Petar', 'Jager', 'pdzeger@gmail.com', '0611770265', '2020-08-30', '20:00:00', 3, 'komentar');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `delivery`
--
ALTER TABLE `delivery`
  ADD CONSTRAINT `FK_delivery_menu` FOREIGN KEY (`food_ID`) REFERENCES `menu` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
