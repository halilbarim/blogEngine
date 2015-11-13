-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 13 Kas 2015, 15:28:19
-- Sunucu sürümü: 10.0.17-MariaDB
-- PHP Sürümü: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `blog`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `clientcount`
--

CREATE TABLE `clientcount` (
  `id` int(11) NOT NULL,
  `clientip` varchar(15) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `clientcount`
--

INSERT INTO `clientcount` (`id`, `clientip`) VALUES
(1, '127001');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

CREATE TABLE `uyeler` (
  `id` int(11) NOT NULL,
  `userName` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `userPass` varchar(100) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`id`, `userName`, `userPass`) VALUES
(1, 'root', 'root');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yazilar`
--

CREATE TABLE `yazilar` (
  `id` int(11) NOT NULL,
  `head` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `text` varchar(5000) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yazilar`
--

INSERT INTO `yazilar` (`id`, `head`, `text`) VALUES
(1, 'asda', 'halil aisdÃ¶iafsmlsdmfiakdsiassad');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `clientcount`
--
ALTER TABLE `clientcount`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `uyeler`
--
ALTER TABLE `uyeler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yazilar`
--
ALTER TABLE `yazilar`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `clientcount`
--
ALTER TABLE `clientcount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `uyeler`
--
ALTER TABLE `uyeler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `yazilar`
--
ALTER TABLE `yazilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
