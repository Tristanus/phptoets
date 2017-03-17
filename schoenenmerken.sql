-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 17 mrt 2017 om 13:49
-- Serverversie: 5.7.11
-- PHP-versie: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schoenenmerken`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `merken`
--

CREATE TABLE `merken` (
  `id` int(11) NOT NULL,
  `merk` varchar(25) NOT NULL,
  `maat_38` int(2) NOT NULL,
  `maat_39` int(2) NOT NULL,
  `maat_40` int(2) NOT NULL,
  `maat_41` int(2) NOT NULL,
  `maat_42` int(2) NOT NULL,
  `maat_43` int(2) NOT NULL,
  `maat_44` int(2) NOT NULL,
  `maat_45` int(2) NOT NULL,
  `maat_46` int(2) NOT NULL,
  `maat_47` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `merken`
--

INSERT INTO `merken` (`id`, `merk`, `maat_38`, `maat_39`, `maat_40`, `maat_41`, `maat_42`, `maat_43`, `maat_44`, `maat_45`, `maat_46`, `maat_47`) VALUES
(1, 'Nike', 21, 54, 43, 71, 44, 21, 96, 57, 54, 32),
(2, 'Adidas', 42, 44, 61, 49, 63, 74, 32, 64, 42, 32),
(3, 'Puma', 43, 54, 32, 46, 74, 45, 54, 42, 75, 52),
(4, 'Vans', 56, 32, 64, 32, 54, 65, 73, 32, 34, 53),
(5, 'Cruijff', 74, 32, 43, 52, 31, 32, 76, 44, 65, 31),
(6, 'Diadora', 31, 65, 54, 53, 65, 34, 54, 43, 31, 43),
(7, 'Bike', 544, 2, 832, 18, 21, 831, 8, 138, 31, 81),
(8, 'Abibas', 45, 165, 61, 56, 1, 5, 61, 91, 6615, 6),
(9, 'Lotto', 56, 654, 654, 564, 4, 6451, 41, 89165, 89, 654);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `merken`
--
ALTER TABLE `merken`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `merken`
--
ALTER TABLE `merken`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
