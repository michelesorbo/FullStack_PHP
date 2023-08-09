-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Creato il: Ago 09, 2023 alle 14:34
-- Versione del server: 5.7.39
-- Versione PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `frontendphp`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti`
--

CREATE TABLE `utenti` (
  `id` int(5) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `cognome` varchar(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `ruolo` varchar(20) NOT NULL DEFAULT 'utente',
  `img_profilo` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` (`id`, `nome`, `cognome`, `email`, `pwd`, `ruolo`, `img_profilo`) VALUES
(1, 'michele', 'sorbo', 'michele@sorbo.it', '81dc9bdb52d04dc20036dbd8313ed055', 'amministratore', NULL),
(2, 'Davide', 'Guidi', 'davide@guidi.it', '81dc9bdb52d04dc20036dbd8313ed055', 'utente', 'default-user-image.png'),
(3, 'alessandro', 'sivo', 'ale@sivo.it', '81dc9bdb52d04dc20036dbd8313ed055', 'utente', NULL),
(5, 'davide', 'rossi', 'davide@rossi.it', '81dc9bdb52d04dc20036dbd8313ed055', 'utente', NULL);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `utenti`
--
ALTER TABLE `utenti`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `utenti`
--
ALTER TABLE `utenti`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
