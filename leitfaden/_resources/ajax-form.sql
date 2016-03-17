-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Erstellungszeit: 11. Mrz 2016 um 09:08
-- Server-Version: 5.5.42
-- PHP-Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Datenbank: `Schule`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `AJAX_Form`
--

CREATE TABLE `AJAX_Form` (
  `UserID` int(11) NOT NULL,
  `Vorname` varchar(100) NOT NULL,
  `Nachname` varchar(100) NOT NULL,
  `Hobby` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `AJAX_Form`
--
ALTER TABLE `AJAX_Form`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `AJAX_Form`
--
ALTER TABLE `AJAX_Form`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT;