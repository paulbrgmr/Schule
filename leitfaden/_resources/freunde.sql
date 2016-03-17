-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Erstellungszeit: 11. Mrz 2016 um 09:07
-- Server-Version: 5.5.42
-- PHP-Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Datenbank: `Schule`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Freunde`
--

CREATE TABLE `Freunde` (
  `UserID` int(11) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Random_Salt` int(11) NOT NULL,
  `TimeStamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `Hobby` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `Freunde`
--
ALTER TABLE `Freunde`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `Freunde`
--
ALTER TABLE `Freunde`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT;