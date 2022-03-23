-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 28 Sty 2022, 00:49
-- Wersja serwera: 10.4.21-MariaDB
-- Wersja PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `proj`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `dokument`
--

CREATE TABLE `dokument` (
  `rodzaj_dokumentu` int(11) NOT NULL,
  `nazwa_dokumentu` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `dokument`
--

INSERT INTO `dokument` (`rodzaj_dokumentu`, `nazwa_dokumentu`) VALUES
(1, 'Dowód osobisty'),
(2, 'Paszport');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klienci`
--

CREATE TABLE `klienci` (
  `id_klienta` int(11) NOT NULL,
  `imie` varchar(30) NOT NULL,
  `nazwisko` varchar(30) NOT NULL,
  `data_ur` date NOT NULL,
  `pesel` int(11) NOT NULL,
  `nip` int(11) NOT NULL,
  `kod_pocztowy` varchar(30) NOT NULL,
  `miasto` varchar(30) NOT NULL,
  `ulica` varchar(30) NOT NULL,
  `nr_domu` int(11) NOT NULL,
  `nr_lokalu` int(11) NOT NULL,
  `telefon` int(11) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `rodzaj_dokumentu` varchar(30) NOT NULL,
  `nr_dokumentu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `klienci`
--

INSERT INTO `klienci` (`id_klienta`, `imie`, `nazwisko`, `data_ur`, `pesel`, `nip`, `kod_pocztowy`, `miasto`, `ulica`, `nr_domu`, `nr_lokalu`, `telefon`, `mail`, `rodzaj_dokumentu`, `nr_dokumentu`) VALUES
(15, 'Robert', 'Makłowicz', '1963-08-09', 634748364, 2234567, '40-100', 'Warszawa', 'smaczna', 12, 4, 2147483647, 'Robert.Maklowicz@gmail.com', '1', 420692),
(17, 'Marcin', 'Skorupa', '2000-09-02', 2222222, 0, '42-425', 'Kroczyce', 'Siedliszowice', 64, 0, 123321123, 'marcin.skorupa@gmail.com', '1', 23456),
(18, 'Mariusz', 'Pudzianowski', '1972-06-19', 728273522, 2147483647, '38-200', 'Biała Rwawska', 'dolna', 5, 0, 876123192, 'MariuszP@gmail.com', '2', 215763123),
(19, 'Kaczor', 'Donald', '1934-01-22', 257168312, 0, '1-100', 'Chicago', 'long', 51, 4, 293827212, 'donald_duck@u2.org', '1', 62123987),
(20, 'Myszka', 'Miki', '1930-02-12', 302734128, 0, '1-100', 'Chicago', 'long', 2, 6, 98725112, 'mickeyMouse@dotnet.com', '2', 781623127),
(21, 'Agnieszka', 'Hylińska', '1976-12-22', 76152463, 2147483647, '44-100', 'Warszawa', 'płytka', 5, 0, 982638213, 'hyli123@gams', '1', 1352163),
(22, 'Filip', 'Ojczyk', '2000-05-18', 4181234, 0, '44-217', 'Rybnik', 'marokanów', 15, 8, 781632123, 'filip.ojczyk@gmail.com', '1', 2345678),
(23, 'Wojtek', 'Widera', '2000-03-31', 9815632, 123456782, '44-40', 'Katowice', 'Ligota', 5, 2, 872635932, 'WojtekKox@interia.pl', '1', 1235122);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kolory`
--

CREATE TABLE `kolory` (
  `id_koloru` int(11) NOT NULL,
  `nazwa_koloru` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `marki`
--

CREATE TABLE `marki` (
  `id_marki` int(11) NOT NULL,
  `nazwa_marki` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `marki`
--

INSERT INTO `marki` (`id_marki`, `nazwa_marki`) VALUES
(1, 'Audi'),
(2, 'Mercedes'),
(3, 'volkswagen'),
(6, 'f'),
(7, 'h'),
(8, 'g'),
(9, 'jd'),
(10, 'v'),
(11, 'z'),
(12, 'x'),
(13, 'Honda'),
(14, 'Fiat'),
(15, ''),
(16, 'BMW'),
(17, 'Mazda'),
(18, 'rosół'),
(19, 'Polonez'),
(20, 'Seat'),
(21, 'Chevrolet'),
(22, 'Peugeot'),
(23, '3'),
(24, '4'),
(25, 'Ursus'),
(26, 'Opel'),
(27, 'Sprinter');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `modele`
--

CREATE TABLE `modele` (
  `id_modelu` int(11) NOT NULL,
  `nazwa_modelu` varchar(30) NOT NULL,
  `id_marki` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `modele`
--

INSERT INTO `modele` (`id_modelu`, `nazwa_modelu`, `id_marki`) VALUES
(1, 'CLA 45 AMG', 2),
(2, 'Transporter', 3),
(3, 'Q7', 1),
(4, 'h', 0),
(5, 'g', 0),
(6, 'z', 10),
(7, 'x', 12),
(8, 'Civic', 13),
(9, 'cinquecento tuning', 14),
(10, 'xd', 15),
(11, 'E36', 16),
(12, '5 II', 17),
(13, 'Passat', 3),
(14, '', 15),
(15, 'kaczka', 18),
(16, '126p', 14),
(17, 'Caro', 19),
(18, 'CUPRA', 20),
(19, 'A7', 1),
(20, 'Aveo', 21),
(21, '206', 22),
(22, '3', 23),
(23, '4', 24),
(24, 'c 360', 25),
(25, 'Corsa', 26),
(26, 'Mercedes', 27);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pojazdy`
--

CREATE TABLE `pojazdy` (
  `id_pojazdu` int(11) NOT NULL,
  `id_modelu` int(11) NOT NULL,
  `rok_prod` int(11) NOT NULL,
  `przebieg` int(11) NOT NULL,
  `km` int(11) NOT NULL,
  `rodzaj_poj` int(11) NOT NULL,
  `paliwo` varchar(30) NOT NULL,
  `nr_rejestracji` varchar(30) NOT NULL,
  `data_rejestracji` date NOT NULL,
  `poj_silnika` int(11) NOT NULL,
  `id_wypadku` tinyint(1) NOT NULL,
  `id_skrzyni` int(1) NOT NULL,
  `data_przyjecia` date NOT NULL,
  `data_wydania` date NOT NULL,
  `zdjecie` varchar(30) NOT NULL,
  `cena_kupna` int(11) NOT NULL,
  `cena_ogloszenie` int(11) NOT NULL,
  `sprzedane` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `pojazdy`
--

INSERT INTO `pojazdy` (`id_pojazdu`, `id_modelu`, `rok_prod`, `przebieg`, `km`, `rodzaj_poj`, `paliwo`, `nr_rejestracji`, `data_rejestracji`, `poj_silnika`, `id_wypadku`, `id_skrzyni`, `data_przyjecia`, `data_wydania`, `zdjecie`, `cena_kupna`, `cena_ogloszenie`, `sprzedane`) VALUES
(1, 3, 1993, 120000, 90, 1, 'benzyna', 'SZA 22222', '2022-01-11', 1399, 0, 1, '2022-01-05', '2022-01-19', 'audiQ7.jpg', 12000, 14000, 0),
(2, 1, 1994, 220000, 180, 2, 'benzyna', 'K1 FRIZ', '2022-01-17', 2000, 0, 0, '2022-01-04', '1111-11-11', '2K1FRIZ.jpg', 62000, 70000, 1),
(3, 2, 2012, 5000, 220, 3, 'diesel', 'KR D7X21', '2022-01-11', 3199, 0, 0, '2022-01-04', '2022-01-20', 'VANKR.jpg', 12800, 10000, 0),
(9, 7, 2, 2, 2, 1, 'diesel', '2', '0000-00-00', 2, 1, 0, '0000-00-00', '0000-00-00', 'tapeta.jpg', 2, 2, 1),
(10, 8, 2003, 350000, 130, 2, 'benzyna', 'SY 82JS2', '2021-12-02', 1600, 0, 0, '2021-12-31', '0000-00-00', 'Hondaimage.jpg', 5000, 8000, 0),
(11, 9, 2002, 215001, 16, 2, 'diesel', 'SD 13S7BA', '2019-12-03', 701, 0, 0, '2022-03-04', '0000-00-00', '11cinkuś.jpg', 1201, 1101, 1),
(12, 18, 2015, 825000, 340, 2, 'benzyna', 'SR BORO', '2021-12-22', 3000, 0, 0, '0000-00-00', '0000-00-00', '12cupra_r_2.jpg.thumb.1.jpg', 75000, 100000, 0),
(13, 11, 1992, 325000, 135, 2, 'benzyna', 'SG 12GS5', '0000-00-00', 2000, 0, 0, '0000-00-00', '0000-00-00', 'bmwe36.jpg', 5000, 6000, 2),
(14, 12, 2008, 140000, 140, 2, 'benzyna', 'SK K2317', '2004-01-06', 2000, 0, 1, '2021-12-30', '0000-00-00', 'MAZDA-5---Premacy-307_49.jpg', 12800, 14000, 0),
(15, 13, 2012, 195000, 180, 1, 'diesel', 'WS 69XDJD', '2009-02-21', 2000, 0, 1, '2021-11-03', '0000-00-00', '5ae033f079529c2bcfd1def3.jpg', 16000, 21000, 0),
(39, 16, 1999, 150000, 30, 2, 'benzyna', 'WEB 8894', '1999-11-22', 700, 0, 0, '2021-12-28', '0000-00-00', 'fiat-126-maluch-01.jpeg', 5000, 8000, 0),
(40, 17, 1999, 271000, 79, 1, 'benzyna', 'WEB 8894', '1999-11-22', 1600, 0, 0, '2021-12-28', '0000-00-00', '4040SO-Polonez-Lux.jpg', 5000, 8000, 0),
(41, 19, 2012, 80000, 402, 2, 'benzyna', 'K8 PPIKA', '2021-03-16', 3600, 1, 1, '2022-01-08', '0000-00-00', 'a7_30-tfsi--a30fedb.jpg', 220000, 240000, 0),
(42, 20, 2012, 175000, 108, 1, 'benzyna', 'WE 8443V', '2014-02-13', 1399, 0, 0, '2021-04-22', '0000-00-00', 'Chevrolet-Aveo-II-10.jpg', 24000, 28000, 0),
(43, 21, 2012, 134500, 80, 2, 'benzyna', 'SR 18752', '2016-04-07', 1399, 0, 0, '2021-10-07', '0000-00-00', '260peugeot.jpg', 10000, 12000, 0),
(44, 24, 1980, 80000, 52, 3, 'diesel', 'SZA 5826', '1974-06-11', 3112, 1, 0, '3333-03-31', '2022-01-28', '44120352_r2_940.jpg', 6000, 7500, 1),
(45, 25, 2010, 134000, 60, 1, 'benzyna', 'SR 827SA', '2014-02-13', 1000, 0, 0, '2021-12-11', '0000-00-00', 'corsa.jpg', 7450, 9000, 0),
(46, 26, 2014, 200000, 130, 3, 'benzyna', 'SZA TAN6', '2018-05-30', 3199, 0, 0, '2021-11-15', '0000-00-00', 'DSC_9286_fmt.jpg', 23000, 25000, 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rodzaj_platnosci`
--

CREATE TABLE `rodzaj_platnosci` (
  `platnosc` int(11) NOT NULL,
  `nazwa_platnosci` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `rodzaj_platnosci`
--

INSERT INTO `rodzaj_platnosci` (`platnosc`, `nazwa_platnosci`) VALUES
(1, 'Przelew'),
(2, 'Gotówka'),
(3, 'Karta');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rodzaj_pojazdu`
--

CREATE TABLE `rodzaj_pojazdu` (
  `rodz_poj` int(11) NOT NULL,
  `nazwa_rodzaju` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `rodzaj_pojazdu`
--

INSERT INTO `rodzaj_pojazdu` (`rodz_poj`, `nazwa_rodzaju`) VALUES
(1, 'Osobowe'),
(2, 'Sportowe'),
(3, 'VAN');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rodzaj_skrzyni`
--

CREATE TABLE `rodzaj_skrzyni` (
  `id_skrzyni` tinyint(4) NOT NULL,
  `nazwa_skrzyni` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `rodzaj_skrzyni`
--

INSERT INTO `rodzaj_skrzyni` (`id_skrzyni`, `nazwa_skrzyni`) VALUES
(0, 'Manualna'),
(1, 'Automatyczna');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `transakcje`
--

CREATE TABLE `transakcje` (
  `id_transakcji` int(11) NOT NULL,
  `id_klienta` int(11) NOT NULL,
  `id_pojazdu` int(11) NOT NULL,
  `rodz_tran` varchar(30) NOT NULL,
  `kwota` int(11) NOT NULL,
  `nr_faktury` int(11) NOT NULL,
  `data_transakcji` date NOT NULL,
  `zaplacono` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `transakcje`
--

INSERT INTO `transakcje` (`id_transakcji`, `id_klienta`, `id_pojazdu`, `rodz_tran`, `kwota`, `nr_faktury`, `data_transakcji`, `zaplacono`) VALUES
(1, 15, 2, '1', 69000, 1234, '2022-01-02', 0),
(6, 1, 11, '1', 1350, 69, '2021-05-19', 0),
(7, 17, 11, '1', 1350, 69, '2022-08-12', 0),
(8, 1, 11, '1', 1350, 69, '2021-03-02', 0),
(9, 18, 10, '2', 7750, 123251, '2020-05-12', 0),
(10, 19, 1, '2', 13000, 124251, '2020-11-18', 0),
(11, 20, 13, '1', 5900, 816723, '2020-09-04', 0),
(12, 21, 9, '6', 6, 6, '2021-05-10', 0),
(13, 17, 11, '2', 1250, 123, '2019-11-21', 0),
(14, 22, 2, '1', 65000, 696969, '2020-12-19', 0),
(15, 15, 1, '1', 13500, 123412, '2022-10-22', 0),
(16, 21, 2, '1', 1, 1, '1111-11-11', 0),
(17, 23, 44, '2', 5000, 651273, '2022-01-28', 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wypadek`
--

CREATE TABLE `wypadek` (
  `id_wypadku` int(11) NOT NULL,
  `typ_wypadku` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `wypadek`
--

INSERT INTO `wypadek` (`id_wypadku`, `typ_wypadku`) VALUES
(0, 'bezwypadkowe'),
(1, 'powypadkowe');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `klienci`
--
ALTER TABLE `klienci`
  ADD PRIMARY KEY (`id_klienta`);

--
-- Indeksy dla tabeli `kolory`
--
ALTER TABLE `kolory`
  ADD PRIMARY KEY (`id_koloru`);

--
-- Indeksy dla tabeli `marki`
--
ALTER TABLE `marki`
  ADD PRIMARY KEY (`id_marki`);

--
-- Indeksy dla tabeli `modele`
--
ALTER TABLE `modele`
  ADD PRIMARY KEY (`id_modelu`);

--
-- Indeksy dla tabeli `pojazdy`
--
ALTER TABLE `pojazdy`
  ADD PRIMARY KEY (`id_pojazdu`);

--
-- Indeksy dla tabeli `transakcje`
--
ALTER TABLE `transakcje`
  ADD PRIMARY KEY (`id_transakcji`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `klienci`
--
ALTER TABLE `klienci`
  MODIFY `id_klienta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT dla tabeli `kolory`
--
ALTER TABLE `kolory`
  MODIFY `id_koloru` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `marki`
--
ALTER TABLE `marki`
  MODIFY `id_marki` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT dla tabeli `modele`
--
ALTER TABLE `modele`
  MODIFY `id_modelu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT dla tabeli `pojazdy`
--
ALTER TABLE `pojazdy`
  MODIFY `id_pojazdu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT dla tabeli `transakcje`
--
ALTER TABLE `transakcje`
  MODIFY `id_transakcji` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
