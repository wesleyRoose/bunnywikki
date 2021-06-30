-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 30 jun 2021 om 10:33
-- Serverversie: 10.4.6-MariaDB
-- PHP-versie: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bunnywiki`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gebruiker`
--

CREATE TABLE `gebruiker` (
  `Gebruiker_id` int(4) NOT NULL,
  `Voornaam` varchar(30) NOT NULL,
  `Achternaam` varchar(30) NOT NULL,
  `geboortedatum` date NOT NULL,
  `Woonplaats` varchar(60) NOT NULL,
  `Postcode` int(60) NOT NULL,
  `Telefoonnummer` varchar(12) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Gebruikersnaam` varchar(40) NOT NULL,
  `Wachtwoord` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `login`
--

CREATE TABLE `login` (
  `gebruikersnaam` varchar(40) NOT NULL,
  `wachtwoord` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product`
--

CREATE TABLE `product` (
  `id` int(40) NOT NULL,
  `product_naam` varchar(60) NOT NULL,
  `category` varchar(40) NOT NULL,
  `time` time(6) NOT NULL,
  `minimum` int(30) NOT NULL,
  `einddatum` date NOT NULL,
  `foto` blob NOT NULL,
  `beschrijving` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `product`
--

INSERT INTO `product` (`id`, `product_naam`, `category`, `time`, `minimum`, `einddatum`, `foto`, `beschrijving`) VALUES
(1, 'konijn', 'hok', '00:00:00.000000', 0, '2323-04-23', 0x4e61616d6c6f6f732e706e67, 'een mooi beest'),
(2, 'beer', 'dier', '00:00:00.000000', 0, '2021-06-11', 0x4e61616d6c6f6f732e706e67, 'een hele grote beer');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `gebruiker`
--
ALTER TABLE `gebruiker`
  ADD PRIMARY KEY (`Gebruiker_id`);

--
-- Indexen voor tabel `login`
--
ALTER TABLE `login`
  ADD UNIQUE KEY `wachtwoord` (`wachtwoord`);

--
-- Indexen voor tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `gebruiker`
--
ALTER TABLE `gebruiker`
  MODIFY `Gebruiker_id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `product`
--
ALTER TABLE `product`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
