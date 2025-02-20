-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Feb 12, 2025 alle 08:39
-- Versione del server: 10.4.32-MariaDB
-- Versione PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbstudenti`
--
CREATE DATABASE IF NOT EXISTS `dbstudenti` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dbstudenti`;

-- --------------------------------------------------------

--
-- Struttura della tabella `classi`
--

CREATE TABLE `classi` (
  `classe` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dump dei dati per la tabella `classi`
--

INSERT INTO `classi` (`classe`) VALUES
('3aen'),
('3ainf'),
('3binf'),
('4aen');

-- --------------------------------------------------------

--
-- Struttura della tabella `studenti`
--

CREATE TABLE `studenti` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cognome` varchar(100) NOT NULL,
  `classe` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dump dei dati per la tabella `studenti`
--

INSERT INTO `studenti` (`id`, `nome`, `cognome`, `classe`) VALUES
(1, 'mario', 'bianchi', '3aen'),
(2, 'roberto', 'negri', '3aen'),
(3, 'giuseppe', 'verdi', '3ainf'),
(4, 'gioacchino', 'rossini', '4aen'),
(5, 'fernando', 'rosati', '4aen'),
(6, 'gabriele', 'd\'annunzio', '3binf'),
(7, 'giorgio', 'rossi', '3ainf'),
(8, 'piero', 'bianchini', '4aen'),
(9, 'pietro', 'grassi', '3binf'),
(10, 'gaetano', 'verdini', '3binf'),
(11, 'pierangelo', 'gibuti', '3aen'),
(12, 'gaetano', 'ricci', '3aen'),
(13, 'giordano', 'tadei', '3ainf'),
(14, 'pippo', 'frattini', '3ainf');

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti`
--

CREATE TABLE `utenti` (
  `utente` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` (`utente`, `password`) VALUES
('utente1', '12345'),
('utente2', '12345'),
('utente3', '12345');

-- --------------------------------------------------------

--
-- Struttura della tabella `voti`
--

CREATE TABLE `voti` (
  `id` int(11) NOT NULL,
  `idStudente` int(11) NOT NULL,
  `materia` varchar(20) NOT NULL,
  `data` datetime NOT NULL,
  `voto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dump dei dati per la tabella `voti`
--

INSERT INTO `voti` (`id`, `idStudente`, `materia`, `data`, `voto`) VALUES
(1, 1, 'informatica', '2025-02-10 19:28:36', 6),
(2, 1, 'matematica', '2025-02-10 19:28:36', 5),
(3, 1, 'informatica', '2025-02-01 19:28:36', 8),
(4, 1, 'matematica', '2025-02-01 19:28:36', 4),
(5, 1, 'informatica', '2025-01-14 19:28:36', 5),
(6, 1, 'matematica', '2025-01-10 19:28:36', 6);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `classi`
--
ALTER TABLE `classi`
  ADD PRIMARY KEY (`classe`);

--
-- Indici per le tabelle `studenti`
--
ALTER TABLE `studenti`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_classi` (`classe`);

--
-- Indici per le tabelle `utenti`
--
ALTER TABLE `utenti`
  ADD PRIMARY KEY (`utente`);

--
-- Indici per le tabelle `voti`
--
ALTER TABLE `voti`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_voti_studenti` (`idStudente`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `studenti`
--
ALTER TABLE `studenti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT per la tabella `voti`
--
ALTER TABLE `voti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `studenti`
--
ALTER TABLE `studenti`
  ADD CONSTRAINT `fk_classi` FOREIGN KEY (`classe`) REFERENCES `classi` (`classe`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `voti`
--
ALTER TABLE `voti`
  ADD CONSTRAINT `fk_voti_studenti` FOREIGN KEY (`idStudente`) REFERENCES `studenti` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
