-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 22 Maj 2018, 19:46
-- Wersja serwera: 10.1.30-MariaDB
-- Wersja PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `kino`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `bilety`
--

CREATE TABLE `bilety` (
  `IdBiletu` int(11) NOT NULL,
  `Nazwa` text COLLATE utf8_polish_ci NOT NULL,
  `Cena` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `bilety`
--

INSERT INTO `bilety` (`IdBiletu`, `Nazwa`, `Cena`) VALUES
(1, 'Ulgowy', 6),
(2, 'Normalny', 12),
(3, 'Studencki', 10),
(4, 'Senior', 10);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `filmy`
--

CREATE TABLE `filmy` (
  `IdFilmu` int(11) NOT NULL,
  `Tytul` text CHARACTER SET utf8mb4 COLLATE utf8mb4_polish_ci NOT NULL,
  `Czas trwania` text COLLATE utf8_polish_ci NOT NULL,
  `Reżyser` text CHARACTER SET utf8mb4 COLLATE utf8mb4_polish_ci NOT NULL,
  `Rok wydania` int(11) NOT NULL,
  `Gatunek` text CHARACTER SET utf8mb4 COLLATE utf8mb4_polish_ci NOT NULL,
  `Ograniczenia_wiekowe` text CHARACTER SET utf8mb4 COLLATE utf8mb4_polish_ci NOT NULL,
  `Opis` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `filmy`
--

INSERT INTO `filmy` (`IdFilmu`, `Tytul`, `Czas trwania`, `Reżyser`, `Rok wydania`, `Gatunek`, `Ograniczenia_wiekowe`, `Opis`) VALUES
(1, 'Shrek', '1 godz. 30 min.', 'Andrew Adamson, Vicky Jenson', 2001, 'Animacja, Familijny, Komedia', 'B/O', 'By odzyskać swój dom, brzydki ogr z gadatliwym osłem wyruszają uwolnić piękną księżniczkę.'),
(2, 'Paddington 2', '1 godz. 43 min.', 'Paul King', 2017, 'Familijny, Komedia, Przygodowy', 'B/O', 'Pomyłkowo osadzony w areszcie wśród zepsutych do szpiku kości typów spod ciemnej gwiazdy, Paddington zrobi wszystko, by sprowadzić ich na dobrą drogę.'),
(3, 'Gladiator', '2 godz. 35 min.', 'Ridley Scott', 2000, 'Dramat historyczny', '+12', 'Generał Maximus - prawa ręka cesarza, szczęśliwy mąż i ojciec - w jednej chwili traci wszystko. Jako niewolnik-gladiator musi walczyć na arenie o przeżycie.'),
(4, 'To nie jest kraj dla starych ludzi ', '2 godz. 2 min.', 'Joel Coen, Ethan Coen', 2007, 'Dramat, Thriller', '+16', 'Llewelyn Moss znajduje niedaleko granicy z Meksykiem paczkę heroiny, dwa miliony dolarów i wielu zabitych. Zabierając ze sobą gotówkę, nie wie, że jego śladem podąża psychopatyczny morderca.'),
(5, 'Władca Pierścieni: Drużyna Pierścienia', '2 godz. 58 min.', 'Peter Jackson', 2001, 'Fantasy, Przygodowy', '+12', 'Podróż hobbita z Shire i jego ośmiu towarzyszy, której celem jest zniszczenie potężnego pierścienia pożądanego przez Czarnego Władcę - Saurona.'),
(6, 'Sicario', '2 godz. 1 min.', 'Denis Villeneuve', 2015, 'Dramat, Kryminał', '+18', 'Młoda agentka FBI bierze udział w operacji zlikwidowania bossa meksykańskiego kartelu narkotykowego. Podczas misji jej moralność zostaje wystawiona na próbę.'),
(7, 'Bone Tomahawk', '2 godz. 12 min.', 'S. Craig Zahler', 2015, 'Horror, Western', '+18', 'Czterech mężczyzn wyrusza na ratunek grupie jeńców porwanych przez prymitywny lud kanibali.'),
(8, 'Coco', '1 godz. 49 min.', 'Lee Unkrich, Adrian Molina', 2017, 'Animacja, Familijny, Przygodowy', 'B/O', 'Dwunastoletni meksykański chłopiec imieniem Miguel pragnie zgłębić tajemnice rodzinnej legendy.');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klienci`
--

CREATE TABLE `klienci` (
  `IdKlienta` int(10) UNSIGNED NOT NULL,
  `Imię` text CHARACTER SET utf8mb4 COLLATE utf8mb4_polish_ci NOT NULL,
  `Nazwisko` text CHARACTER SET utf8mb4 COLLATE utf8mb4_polish_ci NOT NULL,
  `Adres_email` text CHARACTER SET utf8mb4 COLLATE utf8mb4_polish_ci NOT NULL,
  `Haslo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `klienci`
--

INSERT INTO `klienci` (`IdKlienta`, `Imię`, `Nazwisko`, `Adres_email`, `Haslo`) VALUES
(1, 'Jan', 'Kowalski', 'Jan_Kowalski@wp.pl', '12345'),
(2, 'Janusz', 'Szary', 'JanuszSzary69@gmail.com', 'halinka'),
(4, 'Kunegunda', 'Nowak', 'KKNowak@wp.pl', '12345'),
(6, 'Stefan', 'Wiesołowski', 'StefanW@outlook.com', '12345'),
(7, 'Maria', 'Kwiecińska', 'MKwiatek78@o2.pl', '12345');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `miejsca`
--

CREATE TABLE `miejsca` (
  `IdMiejsca` int(11) NOT NULL,
  `IdSeansu` int(11) NOT NULL,
  `Rzad` char(1) COLLATE utf8_polish_ci NOT NULL,
  `Numer` int(1) NOT NULL,
  `Dostepnosc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `miejsca`
--

INSERT INTO `miejsca` (`IdMiejsca`, `IdSeansu`, `Rzad`, `Numer`, `Dostepnosc`) VALUES
(1, 1, 'A', 1, 'Dostępne'),
(2, 1, 'A', 2, 'Dostępne'),
(3, 1, 'A', 3, 'Dostępne'),
(4, 1, 'A', 4, 'Dostępne'),
(5, 1, 'A', 5, 'Dostępne'),
(6, 1, 'A', 6, 'Dostępne'),
(7, 1, 'A', 7, 'Dostępne'),
(8, 1, 'A', 8, 'Dostępne'),
(9, 1, 'B', 1, 'Dostępne'),
(10, 1, 'B', 2, 'Dostępne'),
(11, 1, 'B', 3, 'Dostępne'),
(12, 1, 'B', 4, 'Dostępne'),
(13, 1, 'B', 5, 'Dostępne'),
(14, 1, 'B', 6, 'Dostępne'),
(15, 1, 'B', 7, 'Dostępne'),
(16, 1, 'B', 8, 'Dostępne'),
(17, 1, 'C', 1, 'Dostępne'),
(18, 1, 'C', 2, 'Dostępne'),
(19, 1, 'C', 3, 'Dostępne'),
(20, 1, 'C', 4, 'Dostępne'),
(21, 1, 'C', 5, 'Dostępne'),
(22, 1, 'C', 6, 'Dostępne'),
(23, 1, 'C', 7, 'Dostępne'),
(24, 1, 'C', 8, 'Dostępne'),
(25, 1, 'D', 1, 'Dostępne'),
(26, 1, 'D', 2, 'Dostępne'),
(27, 1, 'D', 3, 'Dostępne'),
(28, 1, 'D', 4, 'Dostępne'),
(29, 1, 'D', 5, 'Dostępne'),
(30, 1, 'D', 6, 'Dostępne'),
(31, 1, 'D', 7, 'Dostępne'),
(32, 1, 'D', 8, 'Dostępne'),
(33, 1, 'E', 1, 'Dostępne'),
(34, 1, 'E', 2, 'Dostępne'),
(35, 1, 'E', 3, 'Dostępne'),
(36, 1, 'E', 4, 'Dostępne'),
(37, 1, 'E', 5, 'Dostępne'),
(38, 1, 'E', 6, 'Dostępne'),
(39, 1, 'E', 7, 'Dostępne'),
(40, 1, 'E', 8, 'Dostępne');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `seanse`
--

CREATE TABLE `seanse` (
  `IdSeansu` int(11) NOT NULL,
  `IdFilmu` int(11) NOT NULL,
  `Data` date NOT NULL,
  `Godzina` time NOT NULL,
  `Ilosc_miejsc` int(11) NOT NULL,
  `Wersja_jezykowa` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `seanse`
--

INSERT INTO `seanse` (`IdSeansu`, `IdFilmu`, `Data`, `Godzina`, `Ilosc_miejsc`, `Wersja_jezykowa`) VALUES
(1, 8, '2018-06-01', '17:00:00', 38, 'Dubbing (PL)'),
(2, 7, '2018-06-01', '19:30:00', 39, 'Angielski, Napisy(PL)'),
(3, 8, '2018-06-02', '15:00:00', 39, 'Dubbing(PL)'),
(4, 6, '2018-06-02', '17:20:00', 39, 'Angielski, Napisy(PL)'),
(5, 7, '2018-06-02', '20:00:00', 39, 'Angielski, Napisy(PL)'),
(6, 8, '2018-06-03', '15:00:00', 39, 'Dubbing(PL)'),
(7, 6, '2018-06-03', '17:20:00', 39, 'Angielski, Napisy(PL)'),
(8, 7, '2018-06-03', '20:00:00', 39, 'Angielski, Napisy(PL)');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zamówienia`
--

CREATE TABLE `zamówienia` (
  `IdZamowienia` int(11) NOT NULL,
  `IdKlienta` int(11) NOT NULL,
  `IdSeansu` int(11) NOT NULL,
  `IdMiejsca` int(11) NOT NULL,
  `IdBiletu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `bilety`
--
ALTER TABLE `bilety`
  ADD PRIMARY KEY (`IdBiletu`);

--
-- Indeksy dla tabeli `filmy`
--
ALTER TABLE `filmy`
  ADD PRIMARY KEY (`IdFilmu`);

--
-- Indeksy dla tabeli `klienci`
--
ALTER TABLE `klienci`
  ADD PRIMARY KEY (`IdKlienta`);

--
-- Indeksy dla tabeli `miejsca`
--
ALTER TABLE `miejsca`
  ADD PRIMARY KEY (`IdMiejsca`);

--
-- Indeksy dla tabeli `seanse`
--
ALTER TABLE `seanse`
  ADD PRIMARY KEY (`IdSeansu`),
  ADD KEY `FK_myKey` (`IdFilmu`);

--
-- Indeksy dla tabeli `zamówienia`
--
ALTER TABLE `zamówienia`
  ADD PRIMARY KEY (`IdZamowienia`),
  ADD KEY `FK_myKeySe` (`IdSeansu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `bilety`
--
ALTER TABLE `bilety`
  MODIFY `IdBiletu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `filmy`
--
ALTER TABLE `filmy`
  MODIFY `IdFilmu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT dla tabeli `klienci`
--
ALTER TABLE `klienci`
  MODIFY `IdKlienta` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT dla tabeli `miejsca`
--
ALTER TABLE `miejsca`
  MODIFY `IdMiejsca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT dla tabeli `seanse`
--
ALTER TABLE `seanse`
  MODIFY `IdSeansu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT dla tabeli `zamówienia`
--
ALTER TABLE `zamówienia`
  MODIFY `IdZamowienia` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `seanse`
--
ALTER TABLE `seanse`
  ADD CONSTRAINT `FK_myKey` FOREIGN KEY (`IdFilmu`) REFERENCES `filmy` (`IdFilmu`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `zamówienia`
--
ALTER TABLE `zamówienia`
  ADD CONSTRAINT `FK_myKeySe` FOREIGN KEY (`IdSeansu`) REFERENCES `seanse` (`IdSeansu`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
