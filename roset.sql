-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 14 okt 2022 om 08:37
-- Serverversie: 10.4.22-MariaDB
-- PHP-versie: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `roset`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `orders`
--

CREATE TABLE `orders` (
  `ID` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `oppak` datetime DEFAULT NULL,
  `bezorg` datetime DEFAULT NULL,
  `ontvang` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `orders`
--

INSERT INTO `orders` (`ID`, `user_id`, `product_id`, `oppak`, `bezorg`, `ontvang`) VALUES
(2, 2, 7, '2022-10-14 10:31:19', '2022-10-14 11:31:19', 5);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `naam` varchar(100) NOT NULL,
  `prijs_per_kg` decimal(6,2) NOT NULL,
  `smaak_van_de_week` enum('ja','nee') NOT NULL,
  `categorie` varchar(100) NOT NULL,
  `foto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `product`
--

INSERT INTO `product` (`id`, `naam`, `prijs_per_kg`, `smaak_van_de_week`, `categorie`, `foto`) VALUES
(1, 'Vanille', '14.00', 'nee', 'Gelato', 'vanille'),
(2, 'Aardbei', '13.50', 'nee', 'Sorbet', 'aardbei'),
(3, 'Pistachio', '17.00', 'nee', 'Gelato', 'pistachio'),
(4, 'Chocola', '15.00', 'nee', 'Gelato', 'chocola'),
(5, 'Blauw maan', '20.75', 'ja', 'Gelato', 'blauw_maan'),
(6, 'Sinaasappel', '18.35', 'nee', 'Sorbet', 'sinas'),
(7, 'Ananas', '17.50', 'nee', 'Sorbet', 'ananas'),
(8, 'Mango', '14.25', 'ja', 'Sorbet', 'mango'),
(9, 'Wit chocola en framboos', '23.50', 'nee', 'Gelato en sorbet', 'wit_framboos'),
(10, 'Watermeloen', '16.69', 'nee', 'Sorbet', 'watermeloen'),
(11, 'Banaan', '18.50', 'nee', 'Gelato', 'banaan'),
(12, 'Zwarte sesam', '23.50', 'ja', 'Gelato', 'zwart_sesam'),
(13, 'Donker chocola', '13.90', 'nee', 'Gelato', 'dark_choco'),
(14, 'Munt', '16.25', 'nee', 'Gelato', 'munt'),
(15, 'Koffie', '14.75', 'nee', 'Gelato', 'koffie'),
(16, 'Drakenfruit', '25.00', 'ja', 'Sorbet', 'drakenfruit'),
(17, 'Drop', '19.75', 'nee', 'Gelato', 'drop'),
(18, 'Framboos', '14.45', 'nee', 'Sorbet', 'framboos'),
(19, 'Koekdeeg', '16.50', 'nee', 'Gelato', 'koekdeeg'),
(20, 'Karamel', '18.25', 'nee', 'Gelato', 'karamel');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `voornaam` varchar(100) NOT NULL,
  `achternaam` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `wachtwoord` varchar(100) NOT NULL,
  `geboortedatum` date NOT NULL,
  `telefoon` varchar(10) NOT NULL,
  `adres` varchar(50) NOT NULL,
  `postcode` varchar(50) NOT NULL,
  `stad` varchar(50) NOT NULL,
  `rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `user`
--

INSERT INTO `user` (`id`, `voornaam`, `achternaam`, `email`, `wachtwoord`, `geboortedatum`, `telefoon`, `adres`, `postcode`, `stad`, `rol`) VALUES
(1, 'Will', 'Brakenhoff', 'brakenhoff@roset.nl', 'Roset3ma#8|', '1982-08-11', '0251654683', 'Geesterduin 39', '1902 EJ', 'Castricum', 'Eigennaar'),
(2, 'Cho', 'Lommerse', 'cho.lommerse@ziggo.nl', 'Koning213', '2001-07-28', '0698476521', 'Rijksstraatweg 80', '2121 AH', 'Bennebroek', 'klant'),
(3, 'Abigail', 'Sorbet', 'sorber@roset.nl', 'Aardbei3', '2002-12-11', '0742414631', 'Minesara', '3121 XK', 'Den Haag', 'medewerker');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FK_product` (`product_id`),
  ADD KEY `FK_user` (`user_id`);

--
-- Indexen voor tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT voor een tabel `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT voor een tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `FK_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `FK_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
