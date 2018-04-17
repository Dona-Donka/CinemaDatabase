-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Czas generowania: 17 Kwi 2018, 11:36
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
-- Struktura tabeli dla tabeli `Bilety`
--

CREATE TABLE `Bilety` (
  `IdBiletu` int(11) NOT NULL,
  `Nazwa` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `Bilety`
--

INSERT INTO `Bilety` (`IdBiletu`, `Nazwa`) VALUES
(1, 'Ulgowy'),
(2, 'Normalny'),
(3, 'Studencki'),
(4, 'Senior');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `Filmy`
--

CREATE TABLE `Filmy` (
  `IdFilmu` int(11) NOT NULL,
  `Tytul` text COLLATE utf8_polish_ci NOT NULL,
  `Czas trwania` text COLLATE utf8_polish_ci NOT NULL,
  `Reżyser` text CHARACTER SET utf8mb4 COLLATE utf8mb4_polish_ci NOT NULL,
  `Rok wydania` int(11) NOT NULL,
  `Gatunek` text CHARACTER SET utf8mb4 COLLATE utf8mb4_polish_ci NOT NULL,
  `Ograniczenia wiekowe` text CHARACTER SET utf8mb4 COLLATE utf8mb4_polish_ci NOT NULL,
  `Opis` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `Filmy`
--

INSERT INTO `Filmy` (`IdFilmu`, `Tytul`, `Czas trwania`, `Reżyser`, `Rok wydania`, `Gatunek`, `Ograniczenia wiekowe`, `Opis`) VALUES
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
-- Struktura tabeli dla tabeli `Klienci`
--

CREATE TABLE `Klienci` (
  `IdKlienta` int(10) UNSIGNED NOT NULL,
  `Imię` text CHARACTER SET utf8mb4 COLLATE utf8mb4_polish_ci NOT NULL,
  `Nazwisko` text CHARACTER SET utf8mb4 COLLATE utf8mb4_polish_ci NOT NULL,
  `Adres email` text CHARACTER SET utf8mb4 COLLATE utf8mb4_polish_ci NOT NULL,
  `Hasło` text CHARACTER SET utf8mb4 COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `Klienci`
--

INSERT INTO `Klienci` (`IdKlienta`, `Imię`, `Nazwisko`, `Adres email`, `Hasło`) VALUES
(1, 'Jan', 'Kowalski', 'Jan_Kowalski@wp.pl', '12345'),
(2, 'Janusz', 'Szary', 'JanuszSzary69@gmail.com', 'halinka'),
(4, 'Kunegunda', 'Nowak', 'KKNowak@wp.pl', '12345'),
(6, 'Stefan', 'Wiesołowski', 'StefanW@outlook.com', '12345'),
(7, 'Maria', 'Kwiecińska', 'MKwiatek78@o2.pl', '12345'),
(10, 'Imie', 'Nazwisko', 'email@email.com', 'haslo'),
(11, 'Gosia', 'Lala', 'email@email.com', 'qwertyui'),
(12, 'Nowe', 'Konto', 'jego@mail.com', 'jegohaslo'),
(13, 'Ten', 'Sam', 'email@email.com', 'sprawdzamy');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `Miejsca`
--

CREATE TABLE `Miejsca` (
  `IdMiejsca` int(11) NOT NULL,
  `IdSeansu` int(11) NOT NULL,
  `Rząd` char(1) COLLATE utf8_polish_ci NOT NULL,
  `Numer` int(1) NOT NULL,
  `Dostępność` text CHARACTER SET utf8mb4 COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `Miejsca`
--

INSERT INTO `Miejsca` (`IdMiejsca`, `IdSeansu`, `Rząd`, `Numer`, `Dostępność`) VALUES
(1, 0, 'A', 1, 'Dostępne'),
(2, 0, 'A', 2, 'Dostępne'),
(3, 0, 'A', 3, 'Dostępne'),
(4, 0, 'A', 4, 'Dostępne'),
(5, 0, 'A', 5, 'Dostępne'),
(6, 0, 'A', 6, 'Dostępne'),
(7, 0, 'A', 7, 'Dostępne'),
(8, 0, 'A', 8, 'Dostępne'),
(9, 0, 'B', 1, 'Dostępne'),
(10, 0, 'B', 2, 'Dostępne'),
(11, 0, 'B', 3, 'Dostępne'),
(12, 0, 'B', 4, 'Dostępne'),
(13, 0, 'B', 5, 'Dostępne'),
(14, 0, 'B', 6, 'Dostępne'),
(15, 0, 'B', 7, 'Dostępne'),
(16, 0, 'B', 8, 'Dostępne'),
(17, 0, 'C', 1, 'Dostępne'),
(18, 0, 'C', 2, 'Dostępne'),
(19, 0, 'C', 3, 'Dostępne'),
(20, 0, 'C', 4, 'Dostępne'),
(21, 0, 'C', 5, 'Dostępne'),
(22, 0, 'C', 6, 'Dostępne'),
(23, 0, 'C', 7, 'Dostępne'),
(24, 0, 'C', 8, 'Dostępne'),
(25, 0, 'D', 1, 'Dostępne'),
(26, 0, 'D', 2, 'Dostępne'),
(27, 0, 'D', 3, 'Dostępne'),
(28, 0, 'D', 4, 'Dostępne'),
(29, 0, 'D', 5, 'Dostępne'),
(30, 0, 'D', 6, 'Dostępne'),
(31, 0, 'D', 7, 'Dostępne'),
(32, 0, 'D', 8, 'Dostępne'),
(33, 0, 'E', 1, 'Dostępne'),
(34, 0, 'E', 2, 'Dostępne'),
(35, 0, 'E', 3, 'Dostępne'),
(36, 0, 'E', 4, 'Dostępne'),
(37, 0, 'E', 5, 'Dostępne'),
(38, 0, 'E', 6, 'Dostępne'),
(39, 0, 'E', 7, 'Dostępne'),
(40, 0, 'E', 8, 'Dostępne');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `Seanse`
--

CREATE TABLE `Seanse` (
  `IdSeansu` int(11) NOT NULL,
  `IdFilmu` int(11) NOT NULL,
  `Data` date NOT NULL,
  `Godzina` time NOT NULL,
  `Ilość miejsc` int(11) NOT NULL,
  `Wersja językowa` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `Zamówienia`
--

CREATE TABLE `Zamówienia` (
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
-- Indeksy dla tabeli `Bilety`
--
ALTER TABLE `Bilety`
  ADD PRIMARY KEY (`IdBiletu`);

--
-- Indeksy dla tabeli `Filmy`
--
ALTER TABLE `Filmy`
  ADD PRIMARY KEY (`IdFilmu`);

--
-- Indeksy dla tabeli `Klienci`
--
ALTER TABLE `Klienci`
  ADD PRIMARY KEY (`IdKlienta`);

--
-- Indeksy dla tabeli `Miejsca`
--
ALTER TABLE `Miejsca`
  ADD PRIMARY KEY (`IdMiejsca`);

--
-- Indeksy dla tabeli `Seanse`
--
ALTER TABLE `Seanse`
  ADD PRIMARY KEY (`IdSeansu`),
  ADD KEY `FK_myKey` (`IdFilmu`);

--
-- Indeksy dla tabeli `Zamówienia`
--
ALTER TABLE `Zamówienia`
  ADD PRIMARY KEY (`IdZamowienia`),
  ADD KEY `FK_myKeySe` (`IdSeansu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `Bilety`
--
ALTER TABLE `Bilety`
  MODIFY `IdBiletu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `Filmy`
--
ALTER TABLE `Filmy`
  MODIFY `IdFilmu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT dla tabeli `Klienci`
--
ALTER TABLE `Klienci`
  MODIFY `IdKlienta` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT dla tabeli `Miejsca`
--
ALTER TABLE `Miejsca`
  MODIFY `IdMiejsca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT dla tabeli `Seanse`
--
ALTER TABLE `Seanse`
  MODIFY `IdSeansu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `Zamówienia`
--
ALTER TABLE `Zamówienia`
  MODIFY `IdZamowienia` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `Seanse`
--
ALTER TABLE `Seanse`
  ADD CONSTRAINT `FK_myKey` FOREIGN KEY (`IdFilmu`) REFERENCES `Filmy` (`IdFilmu`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `Zamówienia`
--
ALTER TABLE `Zamówienia`
  ADD CONSTRAINT `FK_myKeySe` FOREIGN KEY (`IdSeansu`) REFERENCES `Seanse` (`IdSeansu`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
