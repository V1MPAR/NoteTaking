-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 13 Paź 2018, 20:13
-- Wersja serwera: 10.1.35-MariaDB
-- Wersja PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `notetaking`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `content` longtext NOT NULL,
  `date` date NOT NULL,
  `email` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `notes`
--

INSERT INTO `notes` (`id`, `title`, `content`, `date`, `email`) VALUES
(1, 'Your first note', '<p>Welcome <strong>demo@notetaking.com</strong> in the <strong>Note Taking app!</strong></p><p>You are currently in your <strong>notebook.</strong></p><p><strong><br></strong></p><p>On the <strong>left</strong> are <strong>all your added notes</strong>. By clicking the <strong>plus icon</strong>, you can <strong>add</strong> your notes by first entering its title.</p><p>After creating a note, you <strong>can click</strong> on its <strong>title</strong> and the <strong>content will appear</strong> on the <strong>right side</strong>!</p><p>By <strong>clicking</strong> on the <strong>content</strong> of the note, <strong>you can edit it</strong>.</p><p>If the <strong>note is not useful</strong> anymore - <strong>remove it</strong> by <strong>clicking</strong> on the <strong>big red times icon</strong> next to the note <strong>on the left</strong>.</p><br><p><strong>Good luck</strong> and we wish you to save a large amount of useful and transparent notes! :)</p><p><em>Note Taking Team</em></p>', '2018-10-13', 'demo@notetaking.com');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `loggedDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `loggedDate`) VALUES
(1, 'demo@notetaking.com', '$2y$10$hdZqiIiT1A/CeSQF./733uX2KdLKXT0KzsCgBnedELetMzi1SuEVe', '2018-10-13 20:13:06');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
