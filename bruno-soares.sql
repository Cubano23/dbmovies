-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 05-Jul-2022 às 11:27
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bruno-soares`
--
CREATE DATABASE IF NOT EXISTS `bruno-soares` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bruno-soares`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `counter`
--

DROP TABLE IF EXISTS `counter`;
CREATE TABLE IF NOT EXISTS `counter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `visits` int(15) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Truncar tabela antes do insert `counter`
--

TRUNCATE TABLE `counter`;
--
-- Extraindo dados da tabela `counter`
--

INSERT INTO `counter` (`id`, `user_id`, `visits`) VALUES
(1, 0, 67);

-- --------------------------------------------------------

--
-- Estrutura da tabela `films`
--

DROP TABLE IF EXISTS `films`;
CREATE TABLE IF NOT EXISTS `films` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `movie_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `poster` varchar(255) DEFAULT NULL,
  `price` varchar(255) NOT NULL,
  `movie_year` year(4) NOT NULL,
  `date_create` date NOT NULL,
  `date_update` date NOT NULL,
  `record_status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=utf8;

--
-- Truncar tabela antes do insert `films`
--

TRUNCATE TABLE `films`;
--
-- Extraindo dados da tabela `films`
--

INSERT INTO `films` (`id`, `movie_id`, `user_id`, `title`, `poster`, `price`, `movie_year`, `date_create`, `date_update`, `record_status`) VALUES
(1, 315635, 1, 'SpiderMan Homecoming', '<img src=https://image.tmdb.org/t/p/w185/c24sv2weTHPsmDa7jEMN0m2P3RT.jpg class=\"posterCart\">', '3.99', 2017, '2020-08-17', '2020-08-17', 0),
(2, 557, 1, 'SpiderMan', '<img src=https://image.tmdb.org/t/p/w185/gh4cZbhZxyTbgxQPxD0dOudNPTn.jpg class=\"posterCart\">', '2.99', 2002, '2020-08-17', '2020-08-17', 0),
(3, 569094, 1, 'SpiderMan Into the SpiderVerse Sequel', '<img src=https://image.tmdb.org/t/p/w185/8ycplQbTU6DRRwiG95lQEpYkOVg.jpg class=\"posterCart\">', '3.99', 2022, '2020-08-17', '2020-08-17', 0),
(4, 706868, 1, 'SpiderMan Original Fan Film', '<img src=https://image.tmdb.org/t/p/w185/xzik8xanEmkG4r9SxcM1hBvAKDT.jpg class=\"posterCart\">', '3.99', 2021, '2020-08-17', '2020-08-17', 0),
(5, 68724, 1, 'Elysium', '<img src=https://image.tmdb.org/t/p/w185/6hVMt55kzUHvxnc5lduqXyMh8VP.jpg class=\"posterCart\">', '2.99', 2013, '2020-08-17', '2020-08-17', 0),
(6, 268702, 1, 'Xuxa Twins', '<img src=https://image.tmdb.org/t/p/w185/5XDY0q7zPY07AfofMiziL8Qiw1b.jpg class=\"posterCart\">', '2.99', 2006, '2020-08-17', '2020-08-17', 0),
(7, 557, 1, 'SpiderMan', '<img src=https://image.tmdb.org/t/p/w185/gh4cZbhZxyTbgxQPxD0dOudNPTn.jpg class=\"posterCart\">', '2.99', 2002, '2020-08-17', '2020-08-17', 0),
(8, 83770, 1, 'On the Road', '<img src=https://image.tmdb.org/t/p/w185/k7LQteD02p3VHixbS6NXHkFdFwT.jpg class=\"posterCart\">', '2.99', 2012, '2020-08-17', '2020-08-17', 0),
(9, 664413, 2, ' Days', '<img src=https://image.tmdb.org/t/p/w185/6KwrHucIE3CvNT7kTm2MAlZ4fYF.jpg class=\"posterCart\">', '3.99', 2020, '2020-08-17', '2020-08-17', 0),
(10, 558, 2, 'SpiderMan ', '<img src=https://image.tmdb.org/t/p/w185/olxpyq9kJAZ2NU1siLshhhXEPR7.jpg class=\"posterCart\">', '2.99', 2004, '2020-08-17', '2020-08-17', 0),
(11, 11411, 1, 'Superman IV The Quest for Peace', '<img src=https://image.tmdb.org/t/p/w185/ab2WycBtq6pNlENQ6ByRYJ01bsF.jpg class=\"posterCart\">', '1.99', 1987, '2020-08-19', '2020-08-19', 0),
(12, 50410, 1, 'SpiderMan The Venom Saga', '<img src=https://image.tmdb.org/t/p/w185/ilmsQLtthtcD8EU1k25cp0xFQ9a.jpg class=\"posterCart\">', '2.99', 1994, '2020-08-19', '2020-08-19', 0),
(13, 497698, 2, 'Black Widow', '<img src=https://image.tmdb.org/t/p/w185/uAUCHOYwFKQvSRZByP8rCgWKwT.jpg class=\"posterCart\">', '3.99', 2020, '2020-08-19', '2020-08-19', 0),
(14, 7555, 2, 'Rambo', '<img src=https://image.tmdb.org/t/p/w185/3mInub5c8o00H7EJ1TrjAqOzIuc.jpg class=\"posterCart\">', '2.99', 2008, '2020-08-19', '2020-08-19', 0),
(15, 25087, 2, 'Bloodsport II', '<img src=https://image.tmdb.org/t/p/w185/xVfSGAbOK4FucTwkYrXJjeBFqv4.jpg class=\"posterCart\">', '2.99', 1996, '2020-08-19', '2020-08-19', 0),
(16, 10222, 2, 'Kickboxer', '<img src=https://image.tmdb.org/t/p/w185/fUudhrs3HaJEtWpvgwdvjSlE5FS.jpg class=\"posterCart\">', '1.99', 1989, '2020-08-19', '2020-08-19', 0),
(17, 464052, 1, 'Wonder Woman ', '<img src=https://image.tmdb.org/t/p/w185/di1bCAfGoJ0BzNEavLsPyxQ2AaB.jpg class=\"posterCart\">', '5.99', 2020, '2020-08-21', '2020-08-21', 0),
(18, 361743, 1, 'Top Gun Maverick', '<img src=https://image.tmdb.org/t/p/w185/i0FHyNF9VvQTXOi4yKnZJ1zql1.jpg class=\"posterCart\">', '5.99', 2021, '2020-08-21', '2020-08-21', 0),
(19, 550988, 1, 'Free Guy', '<img src=https://image.tmdb.org/t/p/w185/7BdpESY7uRi6BNOuj9nIhkLc775.jpg class=\"posterCart\">', '5.99', 2020, '2020-08-21', '2020-08-21', 0),
(20, 497698, 3, 'Black Widow', '<img src=https://image.tmdb.org/t/p/w185/uAUCHOYwFKQvSRZByP8rCgWKwT.jpg class=\"posterCart\">', '5.99', 2020, '2020-08-21', '2020-08-21', 0),
(21, 550988, 3, 'Free Guy', '<img src=https://image.tmdb.org/t/p/w185/7BdpESY7uRi6BNOuj9nIhkLc775.jpg class=\"posterCart\">', '5.99', 2020, '2020-08-22', '2020-08-22', 0),
(22, 83770, 2, 'On the Road', '<img src=https://image.tmdb.org/t/p/w185/k7LQteD02p3VHixbS6NXHkFdFwT.jpg class=\"posterCart\">', '2.99', 2012, '2020-08-22', '2020-08-22', 0),
(23, 83770, 2, 'On the Road', '<img src=https://image.tmdb.org/t/p/w185/k7LQteD02p3VHixbS6NXHkFdFwT.jpg class=\"posterCart\">', '2.99', 2012, '2020-08-22', '2020-08-22', 0),
(24, 550988, 2, 'Free Guy', '<img src=https://image.tmdb.org/t/p/w185/7BdpESY7uRi6BNOuj9nIhkLc775.jpg class=\"posterCart\">', '5.99', 2020, '2020-08-22', '2020-08-22', 0),
(25, 361743, 2, 'Top Gun Maverick', '<img src=https://image.tmdb.org/t/p/w185/i0FHyNF9VvQTXOi4yKnZJ1zql1.jpg class=\"posterCart\">', '5.99', 2021, '2020-08-22', '2020-08-22', 0),
(26, 68724, 2, 'Elysium', '<img src=https://image.tmdb.org/t/p/w185/6hVMt55kzUHvxnc5lduqXyMh8VP.jpg class=\"posterCart\">', '2.99', 2013, '2020-08-22', '2020-08-22', 0),
(27, 497698, 2, 'Black Widow', '<img src=https://image.tmdb.org/t/p/w185/uAUCHOYwFKQvSRZByP8rCgWKwT.jpg class=\"posterCart\">', '5.99', 2020, '2020-08-22', '2020-08-22', 0),
(28, 83770, 2, 'On the Road', '<img src=https://image.tmdb.org/t/p/w185/k7LQteD02p3VHixbS6NXHkFdFwT.jpg class=\"posterCart\">', '2.99', 2012, '2020-08-22', '2020-08-22', 1),
(29, 693225, 2, 'Elysium', '<img src=https://image.tmdb.org/t/p/w185/rEkaQgAjhwQi2xIrRCRA3cdWOoA.jpg class=\"posterCart\">', '5.99', 2020, '2020-08-22', '2020-08-22', 0),
(30, 255577, 2, 'Black Widow', '<img src=https://image.tmdb.org/t/p/w185/khKyzgKESxwxsiEIvbNRACa5mRc.jpg class=\"posterCart\">', '2.99', 2008, '2020-08-22', '2020-08-22', 0),
(31, 622698, 2, 'VIXX Live Fantasia Elysium', '<img src=https://image.tmdb.org/t/p/w185/yT8WcRpQyAYESk07HxCHCPB8gK2.jpg class=\"posterCart\">', '5.99', 2017, '2020-08-22', '2020-08-22', 0),
(32, 69922, 2, 'The Black Widow', '<img src=https://image.tmdb.org/t/p/w185/w19UH32JMuCv4aq4OAUUMaGM24X.jpg class=\"posterCart\">', '2.99', 2005, '2020-08-22', '2020-08-22', 0),
(33, 464052, 2, 'Wonder Woman ', '<img src=https://image.tmdb.org/t/p/w185/di1bCAfGoJ0BzNEavLsPyxQ2AaB.jpg class=\"posterCart\">', '5.99', 2020, '2020-08-22', '2020-08-22', 1),
(34, 550103, 2, 'Shadows on the Road', '<img src=https://image.tmdb.org/t/p/w185/lfpZ2YZbhhqbCu2f8s6N4XiQuGD.jpg class=\"posterCart\">', '5.99', 2018, '2020-08-22', '2020-08-22', 1),
(35, 550988, 2, 'Free Guy', '<img src=https://image.tmdb.org/t/p/w185/7BdpESY7uRi6BNOuj9nIhkLc775.jpg class=\"posterCart\">', '5.99', 2020, '2020-08-22', '2020-08-22', 0),
(36, 68246, 2, 'Eddie Vedder  Water On The Road', '<img src=https://image.tmdb.org/t/p/w185/mvCzEWTt1IeAcd6egEO9BU5aR60.jpg class=\"posterCart\">', '2.99', 2008, '2020-08-22', '2020-08-22', 0),
(37, 361743, 2, 'Top Gun Maverick', '<img src=https://image.tmdb.org/t/p/w185/i0FHyNF9VvQTXOi4yKnZJ1zql1.jpg class=\"posterCart\">', '5.99', 2021, '2020-08-22', '2020-08-22', 0),
(38, 361743, 2, 'Top Gun Maverick', '<img src=https://image.tmdb.org/t/p/w185/i0FHyNF9VvQTXOi4yKnZJ1zql1.jpg class=\"posterCart\">', '5.99', 2021, '2020-08-22', '2020-08-22', 1),
(39, 83770, 1, 'On the Road', '<img src=https://image.tmdb.org/t/p/w185/k7LQteD02p3VHixbS6NXHkFdFwT.jpg class=\"posterCart\">', '2.99', 2012, '2020-08-22', '2020-08-22', 0),
(40, 361743, 1, 'Top Gun Maverick', '<img src=https://image.tmdb.org/t/p/w185/i0FHyNF9VvQTXOi4yKnZJ1zql1.jpg class=\"posterCart\">', '5.99', 2021, '2020-08-22', '2020-08-22', 0),
(41, 497698, 1, 'Black Widow', '<img src=https://image.tmdb.org/t/p/w185/uAUCHOYwFKQvSRZByP8rCgWKwT.jpg class=\"posterCart\">', '5.99', 2020, '2020-08-22', '2020-08-22', 1),
(42, 68724, 1, 'Elysium', '<img src=https://image.tmdb.org/t/p/w185/6hVMt55kzUHvxnc5lduqXyMh8VP.jpg class=\"posterCart\">', '2.99', 2013, '2020-08-22', '2020-08-22', 1),
(43, 421273, 1, 'Elysium', '<img src=../images/noimage.jpg class=\"posterCart\">', '1.99', 1986, '2020-08-22', '2020-08-22', 0),
(44, 16064, 1, 'On the Road with Judas', '<img src=../images/noimage.jpg class=\"posterCart\">', '2.99', 2007, '2020-08-22', '2020-08-22', 0),
(45, 331549, 1, 'Black Widow Murders The Blanche Taylor Moore Story', '<img src=https://image.tmdb.org/t/p/w185/8ZN5wYIQppVHfboTHY6TUbHe6oT.jpg class=\"posterCart\">', '2.99', 1993, '2020-08-22', '2020-08-22', 0),
(46, 489851, 1, 'On the road', '<img src=../images/noimage.jpg class=\"posterCart\">', '2.99', 2011, '2020-08-22', '2020-08-22', 0),
(47, 10497, 1, 'Bitter Moon', '<img src=https://image.tmdb.org/t/p/w185/qU9hqUSGyQfbkEdqluX21nWVcp9.jpg class=\"posterCart\">', '2.99', 1992, '2020-08-22', '2020-08-22', 0),
(48, 6393, 1, 'Taking Care of Business', '<img src=https://image.tmdb.org/t/p/w185/yVs2wx0BuCbxB2fOraUFVxI4oZK.jpg class=\"posterCart\">', '2.99', 1990, '2020-08-22', '2020-08-22', 1),
(49, 58235, 1, 'Confessions of a Brazilian Call Girl', '<img src=https://image.tmdb.org/t/p/w185/9htMnu5Zg3WEpz6SccgzfxWfDPw.jpg class=\"posterCart\">', '2.99', 2011, '2020-08-22', '2020-08-22', 1),
(50, 550988, 4, 'Free Guy', '<img src=https://image.tmdb.org/t/p/w185/7BdpESY7uRi6BNOuj9nIhkLc775.jpg class=\"posterCart\">', '5.99', 2020, '2020-09-01', '2020-09-01', 1),
(51, 83770, 1, 'On the Road', '<img src=https://image.tmdb.org/t/p/w185/k7LQteD02p3VHixbS6NXHkFdFwT.jpg class=\"posterCart\">', '2.99', 2012, '2020-09-01', '2020-09-01', 0),
(52, 420622, 1, 'Professor Marston and the Wonder Women', '<img src=https://image.tmdb.org/t/p/w185/tbrzHlnE8dNpllLWEe9bwDGNzLe.jpg class=\"posterCart\">', '5.99', 2017, '2020-09-02', '2020-09-02', 1),
(53, 419790, 1, 'On the Road', '<img src=https://image.tmdb.org/t/p/w185/nTtAoFM3I3OCvaYVxpPNeVp6MgI.jpg class=\"posterCart\">', '5.99', 2016, '2020-09-02', '2020-09-02', 0),
(54, 1637, 2, 'Speed', '<img src=https://image.tmdb.org/t/p/w185/Apu3Ecg11bIEEiKLnbhagGtWNg7.jpg class=\"posterCart\">', '2.99', 1994, '2020-09-02', '2020-09-02', 1),
(55, 299534, 2, 'Avengers Endgame', '<img src=https://image.tmdb.org/t/p/w185/or06FN3Dka5tukK1e9sl16pB3iy.jpg class=\"posterCart\">', '5.99', 2019, '2020-09-02', '2020-09-02', 1),
(56, 296, 2, 'Terminator  Rise of the Machines', '<img src=https://image.tmdb.org/t/p/w185/vvevzdYIrk2636maNW4qeWmlPFG.jpg class=\"posterCart\">', '2.99', 2003, '2020-09-02', '2020-09-02', 1),
(57, 579517, 1, 'The Black Widow Killer', '<img src=https://image.tmdb.org/t/p/w185/80IyPIJZJ1Z1xQ3YongMrQAavtY.jpg class=\"posterCart\">', '5.99', 2018, '2020-09-27', '2020-09-27', 0),
(58, 622698, 5, 'VIXX Live Fantasia Elysium', '<img src=https://image.tmdb.org/t/p/w185/yT8WcRpQyAYESk07HxCHCPB8gK2.jpg class=\"posterCart\">', '5.99', 2017, '2021-01-08', '2021-01-08', 0),
(59, 550988, 5, 'Free Guy', '<img src=https://image.tmdb.org/t/p/w185/7BdpESY7uRi6BNOuj9nIhkLc775.jpg class=\"posterCart\">', '5.99', 2021, '2021-01-08', '2021-01-08', 1),
(60, 361743, 5, 'Top Gun Maverick', '<img src=https://image.tmdb.org/t/p/w185/i0FHyNF9VvQTXOi4yKnZJ1zql1.jpg class=\"posterCart\">', '5.99', 2021, '2021-02-14', '2021-02-14', 0),
(61, 83770, 5, 'On the Road', '<img src=https://image.tmdb.org/t/p/w185/k7LQteD02p3VHixbS6NXHkFdFwT.jpg class=\"posterCart\">', '2.99', 2012, '2021-04-15', '2021-04-15', 0),
(62, 522938, 5, 'Rambo Last Blood', '<img src=https://image.tmdb.org/t/p/w185/kTQ3J8oTTKofAVLYnds2cHUz9KO.jpg class=\"posterCart\">', '5.99', 2019, '2021-04-30', '2021-04-30', 1),
(63, 361743, 5, 'Top Gun Maverick', '<img src=https://image.tmdb.org/t/p/w185/i0FHyNF9VvQTXOi4yKnZJ1zql1.jpg class=\"posterCart\">', '5.99', 2021, '2021-04-30', '2021-04-30', 0),
(64, 497698, 5, 'Black Widow', '<img src=https://image.tmdb.org/t/p/w185/qAZ0pzat24kLdO3o8ejmbLxyOac.jpg class=\"posterCart\">', '5.99', 2021, '2021-04-30', '2021-04-30', 1),
(65, 410144, 1, 'Black Widows', '<img src=https://image.tmdb.org/t/p/w185/fhnQa2GxjK3zhy3SOAxZculE8Gy.jpg class=\"posterCart\">', '5.99', 2016, '2021-04-30', '2021-04-30', 1),
(66, 397, 1, 'French Kiss', '<img src=https://image.tmdb.org/t/p/w185/phNRL2E2fa8k0NyP39T4QCIAHgt.jpg class=\"posterCart\">', '2.99', 1995, '2021-04-30', '2021-04-30', 1),
(67, 630004, 1, 'The Vault', '<img src=https://image.tmdb.org/t/p/w185/ocINPt8wAKZVMZERmnXII0LnjWB.jpg class=\"posterCart\">', '5.99', 2021, '2021-04-30', '2021-04-30', 1),
(68, 642684, 1, 'Opration Portugal', '<img src=https://image.tmdb.org/t/p/w185/dnR42jxXOWmwrBsn1S9AWRnWNGB.jpg class=\"posterCart\">', '5.99', 2020, '2021-04-30', '2021-04-30', 1),
(69, 397, 5, 'French Kiss', '<img src=https://image.tmdb.org/t/p/w185/phNRL2E2fa8k0NyP39T4QCIAHgt.jpg class=\"posterCart\">', '2.99', 1995, '2021-05-01', '2021-05-01', 1),
(70, 385128, 5, 'F9', '<img src=https://image.tmdb.org/t/p/w185/bOFaAXmWWXC3Rbv4u4uM9ZSzRXP.jpg class=\"posterCart\">', '5.99', 2021, '2021-05-01', '2021-05-01', 1),
(71, 68724, 6, 'Elysium', '<img src=https://image.tmdb.org/t/p/w185/goiWTT9wTvbBBH8ixFpVZEguULr.jpg class=\"posterCart\">', '2.99', 2013, '2021-05-01', '2021-05-01', 1),
(72, 1701, 6, 'Con Air', '<img src=https://image.tmdb.org/t/p/w185/xPvDtJcD9MYF15QBjIfrxlcddgV.jpg class=\"posterCart\">', '2.99', 1997, '2021-05-07', '2021-05-07', 1),
(73, 9405, 6, 'Double Team', '<img src=https://image.tmdb.org/t/p/w185/4M5fkXYzhjLZdY28ob2iVlh8FgW.jpg class=\"posterCart\">', '2.99', 1997, '2021-05-07', '2021-05-07', 1),
(74, 6393, 6, 'Taking Care of Business', '<img src=https://image.tmdb.org/t/p/w185/ckTnIaUpnkRh3pR7GdhtzWFv0Xz.jpg class=\"posterCart\">', '2.99', 1990, '2021-05-07', '2021-05-07', 1),
(75, 203217, 6, 'My Mom is a Character  The Film', '<img src=https://image.tmdb.org/t/p/w185/2kj8VJEcqcxPmbuIjh5wf6FjMBH.jpg class=\"posterCart\">', '2.99', 2013, '2021-05-07', '2021-05-07', 0),
(76, 15982, 5, 'The Legend of Billie Jean', '<img src=https://image.tmdb.org/t/p/w185/x2u2YtbJ9XySs3MdaIly8Gfp66.jpg class=\"posterCart\">', '1.99', 1985, '2021-05-10', '2021-05-10', 1),
(77, 6978, 5, 'Big Trouble in Little China', '<img src=https://image.tmdb.org/t/p/w185/gI2Qs1yTTj3NcESJyttCkbmJ4k9.jpg class=\"posterCart\">', '1.99', 1986, '2021-05-10', '2021-05-10', 1),
(78, 89, 5, 'Indiana Jones and the Last Crusade', '<img src=https://image.tmdb.org/t/p/w185/acgJPtbeXdBaKYAUVdfYLVwKzAC.jpg class=\"posterCart\">', '1.99', 1989, '2021-05-10', '2021-05-10', 1),
(79, 1701, 5, 'Con Air', '<img src=https://image.tmdb.org/t/p/w185/kOKjgrEzGOP92rVQ6srA9jtp60l.jpg class=\"posterCart\">', '2.99', 1997, '2022-05-12', '2022-05-12', 1),
(80, 16308, 7, 'Mobile Suit Gundam F91', '<img src=https://image.tmdb.org/t/p/w185/pD1VbnZQtMNjSNr3Nopw8ATHL95.jpg class=\"posterCart\">', '2.99', 1991, '2022-06-09', '2022-06-09', 1),
(81, 561859, 8, 'Alien Overlords', '<img src=https://image.tmdb.org/t/p/w185/zDtn7lC2ugxWsre4JhdAXA3GTsM.jpg class=\"posterCart\">', '5.99', 2018, '2022-06-28', '2022-06-28', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ip`
--

DROP TABLE IF EXISTS `ip`;
CREATE TABLE IF NOT EXISTS `ip` (
  `ip_id` int(255) NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(255) NOT NULL,
  PRIMARY KEY (`ip_id`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=latin1;

--
-- Truncar tabela antes do insert `ip`
--

TRUNCATE TABLE `ip`;
--
-- Extraindo dados da tabela `ip`
--

INSERT INTO `ip` (`ip_id`, `ip_address`) VALUES
(1, '2a01:cb00:8a1:ff00:3699:19ae:3876:3e8e'),
(2, '2a01:cb00:8a1:ff00:f147:8200:91f0:c238'),
(3, '2a01:cb00:8a1:ff00:8011:806a:1315:10a2'),
(4, '2a01:cb09:b062:f2e6:7e2e:bf2a:5c9f:4e30'),
(5, '2a01:cb00:8a1:ff00:fd07:653c:6c58:7e28'),
(6, '2a01:cb09:b022:d2f7:b0e6:3855:ce0a:d549'),
(7, '2a01:cb00:8a1:ff00:f8c5:b99a:6914:4c6e'),
(8, '2a01:cb09:b022:d2f7:2b3:ce33:4bdb:a432'),
(9, '138.199.5.119'),
(10, '2a01:cb00:8a1:ff00:45bf:43d3:8a22:fa01'),
(11, '2a01:cb09:b07c:3a74:ccf1:bd99:b652:e44c'),
(12, '2a01:cb00:8a1:ff00:f468:738c:1a91:b518'),
(13, '2a01:cb00:8a1:ff00:2c16:3b36:f6ca:95c5'),
(14, '51.81.71.236'),
(15, '2a01:cb00:8a1:ff00:c1aa:92e0:1c22:6738'),
(16, '2a01:cb00:8a1:ff00:7195:88b:37fd:754e'),
(17, '95.108.213.30'),
(18, '87.250.224.157'),
(19, '40.94.101.20'),
(20, '2a01:cb00:8a1:ff00:74f8:d80:140b:85e0'),
(21, '138.199.5.105'),
(22, '147.135.191.99'),
(23, '2a01:cb00:8a1:ff00:4d95:5c6b:8dcc:c750'),
(24, '95.108.213.51'),
(25, '5.255.253.165'),
(26, '2a01:cb00:8a1:ff00:a430:d2e4:1294:2242'),
(27, '2a01:cb00:8a1:ff00:256e:9685:241e:3aa8'),
(28, '77.204.145.255'),
(29, '2a01:cb00:8a1:ff00:d8e3:538e:bac1:500b'),
(30, '2a01:cb00:8a1:ff00:102a:98d9:95ac:dcb0'),
(31, '5.45.207.138'),
(32, '5.255.253.153'),
(33, '2a01:cb00:8a1:ff00:3d2e:da98:706a:9370'),
(34, '87.250.224.196'),
(35, '2a01:cb01:202f:b764:c3d4:64df:6804:f61f'),
(36, '2a01:cb00:565:0:85cc:ad15:33f0:d193'),
(37, '2a01:cb00:8a1:ff00:10d:10e9:266:18c8'),
(38, '2a01:cb00:8a1:ff00:dc00:654c:a5e4:9bbf'),
(39, '2a01:cb09:e037:38c0:1f00:6558:bd4:1b7f'),
(40, '2a01:cb09:e037:38c0:e02f:7aec:5fed:b0de'),
(41, '2a01:cb00:8a1:ff00:8c8:f44b:59d5:4301'),
(42, '40.94.102.79'),
(43, '2a01:cb00:8a1:ff00:840b:6b84:8c8a:627e'),
(44, '40.94.87.46'),
(45, '40.94.105.37'),
(46, '2a01:cb00:8a1:ff00:c972:47fe:a202:a8e1'),
(47, '2a01:cb00:8a1:ff00:8ce7:28fb:396:9d78'),
(48, '2a01:cb00:8a1:ff00:3d8d:9c62:98c9:67ce'),
(49, '213.180.203.3'),
(50, '23.81.71.188'),
(51, '2a01:cb00:8a1:ff00:e010:4664:b7f2:89da'),
(52, '2a01:cb00:8a1:ff00:d991:dd5d:c752:f919'),
(53, '2a01:cb00:8a1:ff00:bc7e:1fea:be3d:122d'),
(54, '203.75.213.3'),
(55, '5.45.207.129'),
(56, '5.255.253.171'),
(57, '2a01:cb00:8a1:ff00:fd8f:11ff:259b:94fb'),
(58, '195.135.47.253'),
(59, '2a01:cb00:8a1:ff00:f061:cbd3:67a:78b3'),
(60, '2a01:cb0c:2bc:da00:d19d:e3f2:dd24:64a5'),
(61, '2a01:cb00:8a1:ff00:c523:4481:1d77:93f7'),
(62, '2a01:cb00:8a1:ff00:1007:2b42:fece:fa35'),
(63, '185.246.211.194'),
(64, '138.199.5.98'),
(65, '2a01:cb09:807d:779b:cf41:67d9:6253:6bf8'),
(66, '40.94.104.55'),
(67, '2a01:cb00:8a1:ff00:9863:318a:573a:229f');

-- --------------------------------------------------------

--
-- Estrutura da tabela `like_unlike`
--

DROP TABLE IF EXISTS `like_unlike`;
CREATE TABLE IF NOT EXISTS `like_unlike` (
  `like_id` int(11) NOT NULL AUTO_INCREMENT,
  `movie_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `like_nb` int(11) DEFAULT '0',
  `unlike_nb` int(11) DEFAULT '0',
  `date_create` date NOT NULL,
  PRIMARY KEY (`like_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Truncar tabela antes do insert `like_unlike`
--

TRUNCATE TABLE `like_unlike`;
--
-- Extraindo dados da tabela `like_unlike`
--

INSERT INTO `like_unlike` (`like_id`, `movie_id`, `user_id`, `like_nb`, `unlike_nb`, `date_create`) VALUES
(1, 588017, 4, 0, 1, '2020-09-02'),
(2, 588017, 4, 0, 1, '2020-09-02'),
(3, 299536, 2, 1, 0, '2020-09-02'),
(4, 550988, 4, 0, 1, '2020-09-04'),
(5, 361743, 1, 1, 0, '2020-10-01'),
(6, 83770, 5, 1, 0, '2021-04-15'),
(7, 68724, 5, 1, 0, '2021-05-01'),
(8, 385128, 5, 1, 0, '2021-05-01'),
(9, 497698, 5, 1, 0, '2021-11-02');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `last_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `date_create` datetime NOT NULL,
  `date_update` datetime NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `code` int(11) NOT NULL,
  `ville` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Truncar tabela antes do insert `users`
--

TRUNCATE TABLE `users`;
--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `date_create`, `date_update`, `email`, `password`, `code`, `ville`) VALUES
(1, 'Bruno', 'Soares', '2020-08-14 19:34:05', '2020-08-14 19:34:05', 'teste@gmail.com', '0000', 0, ''),
(2, 'Jade', 'Lea', '2020-08-14 19:37:46', '2020-08-14 19:37:46', 'jade@gmail.com', '0000', 0, ''),
(3, 'Arthur', 'Silva', '2020-08-21 22:55:53', '2020-08-21 22:55:53', 'silva@gmail.com', '0000', 0, ''),
(4, 'Prince', 'Filho', '2020-09-01 13:05:18', '2020-09-01 13:05:18', 'prince@gmail.com', '0000', 0, ''),
(5, 'Bruno soares rodrigues', 'Silva', '2020-10-22 12:33:44', '2020-10-22 12:33:44', 'bsrs23@gmail.com', '0000', 0, ''),
(6, 'Arthur', 'Viegas', '2021-05-01 13:10:55', '2021-05-01 13:10:55', 'viegas@gmail.com', '123', 0, ''),
(7, 'Siros', 'Roshan', '2022-06-09 14:54:35', '2022-06-09 14:54:35', 'siros@gmail.com', '123', 0, ''),
(8, 'Guillaume', 'Clement', '2022-06-28 15:52:20', '2022-06-28 15:52:20', 'guillaume.clement@2bsystem.fr', 'E3M1keiDCw2Rv0AvCBtTvhEu3', 0, ''),
(9, 'Sara', 'Faria', '2022-07-05 13:25:12', '2022-07-05 13:25:12', 'sara@live.fr', '123', 75006, 'PARIS 06');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
