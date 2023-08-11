-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Creato il: Ago 11, 2023 alle 07:52
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
-- Database: `ballo`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `alunni`
--

CREATE TABLE `alunni` (
  `n_tessera` int(5) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cognome` varchar(100) NOT NULL,
  `telefono` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `alunni`
--

INSERT INTO `alunni` (`n_tessera`, `nome`, `cognome`, `telefono`) VALUES
(1, 'domenico', 'trabucco', '333665588'),
(2, 'marco', 'roma', '2255658'),
(3, 'claudio', 'covelli', '0658996'),
(4, 'gloria', 'cannatella', '234234'),
(5, 'marco', 'rossi', '13223'),
(6, 'marco', 'verdi', '23434');

-- --------------------------------------------------------

--
-- Struttura della tabella `corsi`
--

CREATE TABLE `corsi` (
  `id` int(5) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `orario` varchar(10) NOT NULL,
  `dataInizio` date NOT NULL,
  `prezzo` int(11) NOT NULL DEFAULT '0',
  `id_maestro` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `corsi`
--

INSERT INTO `corsi` (`id`, `nome`, `orario`, `dataInizio`, `prezzo`, `id_maestro`) VALUES
(1, 'salsa', '21', '2023-08-09', 25, 1),
(2, 'walzer', '19', '2023-08-20', 30, 2),
(3, 'liscio', '20', '2023-08-06', 30, 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `frequenta`
--

CREATE TABLE `frequenta` (
  `id_corso` int(5) NOT NULL,
  `tessera_alunno` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `frequenta`
--

INSERT INTO `frequenta` (`id_corso`, `tessera_alunno`) VALUES
(1, 1),
(1, 4),
(2, 3),
(2, 4);

-- --------------------------------------------------------

--
-- Struttura della tabella `maestro`
--

CREATE TABLE `maestro` (
  `id` int(5) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cognome` varchar(100) NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `data_assunzione` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `maestro`
--

INSERT INTO `maestro` (`id`, `nome`, `cognome`, `telefono`, `data_assunzione`) VALUES
(1, 'michele', 'di nardo', '3366998', '2023-08-15'),
(2, 'davide', 'guidi', '444333', '2022-08-10');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `alunni`
--
ALTER TABLE `alunni`
  ADD PRIMARY KEY (`n_tessera`);

--
-- Indici per le tabelle `corsi`
--
ALTER TABLE `corsi`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `frequenta`
--
ALTER TABLE `frequenta`
  ADD PRIMARY KEY (`id_corso`,`tessera_alunno`);

--
-- Indici per le tabelle `maestro`
--
ALTER TABLE `maestro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `alunni`
--
ALTER TABLE `alunni`
  MODIFY `n_tessera` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT per la tabella `corsi`
--
ALTER TABLE `corsi`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `maestro`
--
ALTER TABLE `maestro`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
