-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Sam 18 Mars 2017 à 18:33
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `meteo2`
--

-- --------------------------------------------------------

--
-- Structure de la table `donnees_capteurs`
--

CREATE TABLE `donnees_capteurs` (
  `id` int(11) NOT NULL,
  `DateTime` datetime NOT NULL,
  `Tempe_Out_C` float NOT NULL,
  `Tempe_Out_F` float NOT NULL,
  `Tempe_In_C` float NOT NULL,
  `Tempe_In_F` float NOT NULL,
  `Tempe_Ressentie` float NOT NULL,
  `Tx_Humid_Out` int(11) NOT NULL,
  `Tx_Humid_In` int(11) NOT NULL,
  `Press_Atm_hPa` int(11) NOT NULL,
  `Pluvio` float NOT NULL,
  `Vitesse_Vent` int(11) NOT NULL,
  `Sens_Vent` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `donnees_capteurs`
--
ALTER TABLE `donnees_capteurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `donnees_capteurs`
--
ALTER TABLE `donnees_capteurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
