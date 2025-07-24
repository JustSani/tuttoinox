-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Lug 24, 2025 alle 10:03
-- Versione del server: 8.0.41
-- Versione PHP: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: 'my_sanino'
--

-- --------------------------------------------------------

--
-- Struttura della tabella 'TUTTOINOX'
--

CREATE TABLE 'TUTTOINOX' (
  'id' int NOT NULL,
  'Categoria' varchar(100) NOT NULL,
  'Titolo' varchar(255) NOT NULL,
  'Descrizione_Breve' varchar(500) NOT NULL,
  'img_principale' varchar(100) NOT NULL,
  'img1' varchar(100) NOT NULL,
  'Secondo_Titolo' varchar(255) NOT NULL,
  'Descrizione_Lunga' varchar(500) NOT NULL
);

--
-- Dump dei dati per la tabella 'TUTTOINOX'
--

INSERT INTO 'TUTTOINOX' ('id', 'Categoria', 'Titolo', 'Descrizione_Breve', 'img_principale', 'img1', 'Secondo_Titolo', 'Descrizione_Lunga') VALUES
(1, 'PER LA CASA', 'Tavolo da esterno e sedie', 'Realizzazione su misura di un tavolo da esterno con sedie', 'img/08.jpg', 'img/09.jpg', 'Tavolo da esterno e sedie', 'Tavolo da esterno e sedie Tavolo da esterno e sedieTavolo da esterno e sedie Tavolo da esterno e sedie Tavolo da esterno e sedieTavolo da esterno e sedie'),
(2, 'PER LA CASA', 'Tavolo da esterno e sedie', 'Realizzazione su misura di un tavolo da esterno con sedie', 'img/08.jpg', 'img/09.jpg', 'Tavolo da esterno e sedie', 'Tavolo da esterno e sedie Tavolo da esterno e sedieTavolo da esterno e sedie Tavolo da esterno e sedie Tavolo da esterno e sedieTavolo da esterno e sedie'),
(3, 'PER LA CASA', 'Tavolo da esterno e sedie', 'Realizzazione su misura di un tavolo da esterno con sedie', 'img/08.jpg', 'img/09.jpg', 'Tavolo da esterno e sedie', 'Tavolo da esterno e sedie Tavolo da esterno e sedieTavolo da esterno e sedie Tavolo da esterno e sedie Tavolo da esterno e sedieTavolo da esterno e sedie'),
(4, 'PER LA CASA', 'Grate per finestra', 'Realizzazione su misura di una grata per finestra', 'img/24.jpg', 'img/09.jpg', 'Tavolo da esterno e sedie', 'Tavolo da esterno e sedie Tavolo da esterno e sedieTavolo da esterno e sedie Tavolo da esterno e sedie Tavolo da esterno e sedieTavolo da esterno e sedie'),
(5, 'PER LA CASA', 'Cancello', 'Realizzazione su misura di un cancello.', 'img/26.jpg', 'img/09.jpg', 'Tavolo da esterno e sedie', 'Tavolo da esterno e sedie Tavolo da esterno e sedieTavolo da esterno e sedie Tavolo da esterno e sedie Tavolo da esterno e sedieTavolo da esterno e sedie'),
(6, 'Impianti zootecnici:', 'Impianto zootecnico modulare', 'Struttura facilmente espandibile e resistente per ambienti agricoli.', 'img/18.jpg', 'img/09.jpg', 'Tavolo da esterno e sedie', 'Tavolo da esterno e sedie Tavolo da esterno e sedieTavolo da esterno e sedie Tavolo da esterno e sedie Tavolo da esterno e sedieTavolo da esterno e sedie'),
(7, 'Impianti zootecnici:', 'Mangiatoglie per impianto zootecnico', 'Struttura facilmente espandibile e resistente per ambienti agricoli.', 'img/23.jpg', 'img/09.jpg', 'Tavolo da esterno e sedie', 'Tavolo da esterno e sedie Tavolo da esterno e sedieTavolo da esterno e sedie Tavolo da esterno e sedie Tavolo da esterno e sedieTavolo da esterno e sedie'),
(8, 'Impianti zootecnici:', 'Cancello per impianto zootecnico', 'Cancello modulare su misura', 'img/06.jpg', 'img/09.jpg', 'Tavolo da esterno e sedie', 'Tavolo da esterno e sedie Tavolo da esterno e sedieTavolo da esterno e sedie Tavolo da esterno e sedie Tavolo da esterno e sedieTavolo da esterno e sedie');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle 'TUTTOINOX'
--
ALTER TABLE 'TUTTOINOX'
  ADD PRIMARY KEY ('id');

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella 'TUTTOINOX'
--
ALTER TABLE 'TUTTOINOX'
  MODIFY 'id' int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
