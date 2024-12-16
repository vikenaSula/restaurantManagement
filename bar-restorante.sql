-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2020 at 05:31 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bar-restorante`
--

-- --------------------------------------------------------

--
-- Table structure for table `lokale`
--

CREATE TABLE `lokale` (
  `id` int(11) NOT NULL,
  `emri` varchar(30) NOT NULL,
  `kapaciteti` int(11) NOT NULL,
  `vende_te_lira` int(11) NOT NULL,
  `hapur` tinyint(1) NOT NULL,
  `menu` varchar(100) NOT NULL,
  `foto1` varchar(100) NOT NULL,
  `foto2` varchar(100) NOT NULL,
  `foto3` varchar(100) NOT NULL,
  `id_menaxher` int(11) NOT NULL,
  `eventet_javore` varchar(255) NOT NULL,
  `oferta_ditore` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lokale`
--

INSERT INTO `lokale` (`id`, `emri`, `kapaciteti`, `vende_te_lira`, `hapur`, `menu`, `foto1`, `foto2`, `foto3`, `id_menaxher`, `eventet_javore`, `oferta_ditore`) VALUES
(2, 'RestorantVilaBenvenuto', 80, 40, 1, '/assets/css/images/benvenutomenu.jpg', '/assets/css/images/benvenuto1.jpg', '/assets/css/images/benvenuto2.jpg', '/assets/css/images/benvenuto3.jpg', 8, 'eventbenvenuto.jpg', 'ofertabenvenuto.jpg'),
(3, 'FastFoodOpa', 80, 40, 1, '/assets/css/images/rosveltmenu.jpg', '/assets/css/images/rosvelt1.jpg', '/assets/css/images/rosvelt2.jpg', '/assets/css/images/rosvelt3.jpeg', 16, 'eventopa.jpg', 'ofertaopa.jpg'),
(4, 'RealScampis', 40, 40, 1, '/assets/css/images/scampismenu.jpg', '/assets/css/images/realscampis1.jpg', '/assets/css/images/realscampis2.jpg', '/assets/css/images/realscampis3.jpg', 6, 'eventskampini.jpg', 'ofertaskampini.jpg'),
(5, 'BarFriends', 50, 40, 1, '/assets/css/images/friendsmenu.jpg', '/assets/css/images/barfriends1.jpg', '/assets/css/images/friends2.jpg', '/assets/css/images/friends3.jpg', 15, 'eventfriends.jpg', 'ofertafriends.jpg'),
(6, 'CoffeHouse', 50, 40, 1, '/assets/css/images/coffehousemenu.jpg', '/assets/css/images/coffehouse1.jpg', '/assets/css/images/coffehouse2.jpg', '/assets/css/images/coffehouse3.jpg', 9, 'eventcoffe.jpg', 'ofertacoffe.jpg'),
(7, 'PrestoPasta', 40, 40, 1, '/assets/css/images/prestopastamenu.jpg', '/assets/css/images/prestopasta1.jpg', '/assets/css/images/prestopasta2.jpg', '/assets/css/images/prestopasta3.jpg', 14, 'eventpastaria.jpg', 'ofertapresto.jpg'),
(8, 'TruthLoungueBar', 60, 40, 1, '/assets/css/images/truthmenu.jpg', '/assets/css/images/truth1.png', '/assets/css/images/truth2.jpg', '/assets/css/images/truth3.jpg', 10, 'eventtruthi.jpg', 'ofertatruthi.jpg'),
(9, 'BarLiving', 50, 40, 1, '/assets/css/images/livingmenu.jpg', '/assets/css/images/living1.jpg', '/assets/css/images/living2.jpg', '/assets/css/images/living3.jpg', 13, 'eventliving.jpg', 'ofertaliving.jpg'),
(10, 'TavernaAttika', 40, 40, 1, '/assets/css/images/atikamenu.jpg', '/assets/css/images/atika3.jpg', '/assets/css/images/atika2.jpg', '/assets/css/images/atika1.jpg', 11, 'eventatika.jpg', 'ofertaatika.jpg'),
(11, 'PiceriBasilico', 60, 40, 1, '/assets/css/images/jurevimenu.jpg', '/assets/css/images/jurevi1.jpg', '/assets/css/images/jurevi2.jpg', '/assets/css/images/jurevi3.jpg', 12, 'eventbasiliko.jpg', 'ofertabasilico.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `menaxheret`
--

CREATE TABLE `menaxheret` (
  `id_menaxher` int(11) NOT NULL,
  `emer_mng` varchar(30) NOT NULL,
  `pasword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menaxheret`
--

INSERT INTO `menaxheret` (`id_menaxher`, `emer_mng`, `pasword`) VALUES
(6, 'Menaxheri1', 'Menaxheri1'),
(8, 'Menaxheri2', 'Menaxheri2'),
(9, 'Menaxheri3', 'Menaxheri3'),
(10, 'Menaxheri4', 'Menaxheri4'),
(11, 'Menaxheri5', 'Menaxheri5'),
(12, 'Menaxheri6', 'Menaxheri6'),
(13, 'Menaxheri7', 'Menaxheri7'),
(14, 'Menaxheri8', 'Menaxheri8'),
(15, 'Menaxheri9', 'Menaxheri9'),
(16, 'Menaxheri10', 'Menaxheri10');

-- --------------------------------------------------------

--
-- Table structure for table `perdoruesit`
--

CREATE TABLE `perdoruesit` (
  `id` int(11) NOT NULL,
  `emri` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perdoruesit`
--

INSERT INTO `perdoruesit` (`id`, `emri`, `email`, `password`) VALUES
(6, 'Ana', 'anahoxha@gmail.com', 'anna'),
(7, 'Bjanka', 'bjanka@gmail.com', 'bjanka123'),
(9, 'Darla', 'darla@gmail.com', '123'),
(10, 'Denis', 'denis@gmail.com', '123'),
(11, 'An', 'a@gmail.com', '123'),
(13, 'Beni', 'b@gmail.com', '123'),
(14, 'Besa', 'b2@gmail.com', '123'),
(16, 'Arli', 'arli@gmail.com', 'arli123'),
(17, 'Anxhela', 'anxh@gmail.com', '123'),
(18, 'Dita', 'dita@gmail.com', 'dita'),
(19, 'Kena', 'kena@gmail.com', 'kena123'),
(20, 'Ana', 'ahoxha@gmail.com', 'ana'),
(21, 'tea', 'tea@gmail.com', 'tea'),
(22, 'Redi', 'redi@gmail.com', 'redi'),
(23, 'Anxhela', 'anxhemla@gmail.com', 'anxhela');

-- --------------------------------------------------------

--
-- Table structure for table `rezervim`
--

CREATE TABLE `rezervim` (
  `id_rezervim` int(11) NOT NULL,
  `data` datetime NOT NULL,
  `numri_personave` int(2) NOT NULL,
  `id_perdorues` int(11) NOT NULL,
  `id_lokal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='i';

--
-- Dumping data for table `rezervim`
--

INSERT INTO `rezervim` (`id_rezervim`, `data`, `numri_personave`, `id_perdorues`, `id_lokal`) VALUES
(1, '2020-10-28 20:55:00', 2, 6, 9),
(2, '2020-10-15 23:51:00', 12, 6, 5),
(3, '2020-11-06 20:52:00', 1, 6, 8),
(4, '0000-00-00 00:00:00', 12, 6, 5),
(5, '2020-11-01 20:55:00', 1, 6, 7),
(6, '2020-11-01 20:55:00', 1, 6, 7),
(7, '2020-11-01 20:55:00', 1, 6, 7),
(8, '2020-10-25 20:03:00', 1, 6, 9),
(9, '2020-11-01 00:59:00', 1, 6, 8),
(10, '2020-10-22 21:02:00', 1, 6, 10),
(11, '2020-10-22 21:02:00', 1, 6, 10),
(12, '2020-10-09 21:04:00', 2, 6, 10),
(13, '2020-10-25 21:05:00', 2, 6, 8),
(14, '2020-10-18 21:06:00', 12, 6, 8),
(15, '2020-10-18 06:32:00', 12, 17, 5),
(16, '2020-10-31 13:07:00', 1, 7, 4),
(17, '2020-11-28 17:07:00', 1, 7, 3),
(18, '2020-11-07 13:07:00', 1, 7, 5),
(19, '2020-10-25 13:11:00', 2, 7, 9),
(20, '2020-12-04 13:09:00', 1, 7, 2),
(21, '2020-10-08 13:09:00', 1, 7, 3),
(22, '2020-10-24 13:10:00', 1, 7, 6),
(23, '2020-10-20 13:10:00', 1, 7, 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lokale`
--
ALTER TABLE `lokale`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_menaxher` (`id_menaxher`);

--
-- Indexes for table `menaxheret`
--
ALTER TABLE `menaxheret`
  ADD PRIMARY KEY (`id_menaxher`);

--
-- Indexes for table `perdoruesit`
--
ALTER TABLE `perdoruesit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rezervim`
--
ALTER TABLE `rezervim`
  ADD PRIMARY KEY (`id_rezervim`),
  ADD KEY `id_perdorues` (`id_perdorues`,`id_lokal`),
  ADD KEY `id_lokal` (`id_lokal`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lokale`
--
ALTER TABLE `lokale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `menaxheret`
--
ALTER TABLE `menaxheret`
  MODIFY `id_menaxher` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `perdoruesit`
--
ALTER TABLE `perdoruesit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `rezervim`
--
ALTER TABLE `rezervim`
  MODIFY `id_rezervim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lokale`
--
ALTER TABLE `lokale`
  ADD CONSTRAINT `lokale_ibfk_1` FOREIGN KEY (`id_menaxher`) REFERENCES `menaxheret` (`id_menaxher`);

--
-- Constraints for table `rezervim`
--
ALTER TABLE `rezervim`
  ADD CONSTRAINT `rezervim_ibfk_1` FOREIGN KEY (`id_perdorues`) REFERENCES `perdoruesit` (`id`),
  ADD CONSTRAINT `rezervim_ibfk_2` FOREIGN KEY (`id_lokal`) REFERENCES `lokale` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
