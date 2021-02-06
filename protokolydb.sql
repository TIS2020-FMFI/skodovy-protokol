-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1
-- Čas generovania: So 06.Feb 2021, 00:54
-- Verzia serveru: 10.4.13-MariaDB
-- Verzia PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `protokolydb`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `models`
--

CREATE TABLE `models` (
  `vin` varchar(50) NOT NULL,
  `manufacturer` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `storageConsignee` varchar(50) NOT NULL,
  `entrydate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sťahujem dáta pre tabuľku `models`
--

INSERT INTO `models` (`vin`, `manufacturer`, `model`, `storageConsignee`, `entrydate`) VALUES
('VF3MCYHZRLS172511', 'PEUGEOT', '3008', 'SKLAD GEFCO FCD', '20/10/2020'),
('VF3MCYHZRLS186144', 'PEUGEOT', '3008', 'SKLAD GEFCO FCD', '20/10/2020'),
('VF3MCYHZRLS186145', 'PEUGEOT', '3008', 'SKLAD GEFCO FCD', '20/10/2020'),
('VF3MCYHZRLS186147', 'PEUGEOT', '3008', 'SKLAD GEFCO FCD', '20/10/2020'),
('VF3MCYHZRLS186149', 'PEUGEOT', '3008', 'SKLAD GEFCO FCD', '20/10/2020'),
('VF3MCYHZRLS186151', 'PEUGEOT', '3008', 'SKLAD GEFCO FCD', '20/10/2020'),
('VF3MCYHZRLS186153', 'PEUGEOT', '3008', 'SKLAD GEFCO FCD', '20/10/2020'),
('VF3MCYHZRLS186156', 'PEUGEOT', '3008', 'SKLAD GEFCO FCD', '20/10/2020'),
('VF3MCYHZRLS186158', 'PEUGEOT', '3008', 'SKLAD GEFCO FCD', '20/10/2020'),
('VF3MCYHZRLS186159', 'PEUGEOT', '3008', 'SKLAD GEFCO FCD', '20/10/2020'),
('VF3MCYHZRLS186163', 'PEUGEOT', '3008', 'SKLAD GEFCO FCD', '20/10/2020'),
('VF3MCYHZRLS186164', 'PEUGEOT', '3008', 'SKLAD GEFCO FCD', '20/10/2020'),
('VR3FCYHZRLY035326', 'PEUGEOT', '508', 'SKLAD GEFCO FCD', '20/10/2020'),
('VR3FCYHZRLY035327', 'PEUGEOT', '508', 'SKLAD GEFCO FCD', '20/10/2020'),
('VR3FCYHZRLY035328', 'PEUGEOT', '508', 'SKLAD GEFCO FCD', '20/10/2020'),
('VR3USHNKKLJ857832', 'PEUGEOT', '2008 II', 'SKLAD GEFCO FCD', '29/10/2020');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sťahujem dáta pre tabuľku `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `models`
--
ALTER TABLE `models`
  ADD PRIMARY KEY (`vin`);

--
-- Indexy pre tabuľku `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
