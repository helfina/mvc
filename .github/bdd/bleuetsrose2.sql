-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 28 juil. 2020 à 13:58
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bleuetsrose2`
--
CREATE DATABASE IF NOT EXISTS `bleuetsrose2` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bleuetsrose2`;

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `log` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `id_image` int(11) DEFAULT NULL,
  `confirmer` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONS POUR LA TABLE `admins`:
--   `id_image`
--       `images` -> `id`
--

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`id`, `log`, `pass`, `firstname`, `lastname`, `id_image`, `confirmer`) VALUES
(1, 'lena', '1234', 'lénaïg', 'cadet', NULL, 0),
(2, 'gaelle', '1234', 'gaelle', 'kerforne', NULL, 1),
(3, 'boudi', '1234', 'boudi', 'bouda', NULL, 0),
(4, 'jean', '4567', 'dumont', 'jean', NULL, 0);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONS POUR LA TABLE `categories`:
--

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `nom`) VALUES
(1, 'Mariage'),
(11, 'Décès'),
(21, 'Anniversaire'),
(31, 'Fête des Mères'),
(41, 'Saint-Valentin');

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `id_category` int(11) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `id_shop` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONS POUR LA TABLE `images`:
--   `id_admin`
--       `admins` -> `id`
--   `id_category`
--       `categories` -> `id`
--   `id_shop`
--       `magasins` -> `id`
--

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`id`, `image`, `id_category`, `id_admin`, `id_shop`) VALUES
(1, 'd9d00d88946521382ba10a8330b57b23f2522f6c.jpg', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `magasins`
--

DROP TABLE IF EXISTS `magasins`;
CREATE TABLE `magasins` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `rue` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `code_postal` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `id_image` int(11) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONS POUR LA TABLE `magasins`:
--   `id_admin`
--       `admins` -> `id`
--   `id_image`
--       `images` -> `id`
--

--
-- Déchargement des données de la table `magasins`
--

INSERT INTO `magasins` (`id`, `nom`, `rue`, `ville`, `code_postal`, `tel`, `id_image`, `id_admin`) VALUES
(1, 'Bleuets Rose', '2 Rue de buléon', 'Saint-Jean-Brévelay', '56660', '02.97.60.41.65', NULL, 1),
(2, 'Bleuets Rose', '1 route de vannes', 'Grand-Champ', '56390', '09.52.46.16.14', NULL, 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idadmin_image_idx` (`id_image`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idimg_admin` (`id_admin`),
  ADD KEY `idimg_category` (`id_category`),
  ADD KEY `idimg_shop` (`id_shop`);

--
-- Index pour la table `magasins`
--
ALTER TABLE `magasins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idshop_admin` (`id_admin`),
  ADD KEY `idshop_image` (`id_image`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `magasins`
--
ALTER TABLE `magasins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `idadmin_image_idx` FOREIGN KEY (`id_image`) REFERENCES `images` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Contraintes pour la table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `idimg_admin` FOREIGN KEY (`id_admin`) REFERENCES `admins` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `idimg_category` FOREIGN KEY (`id_category`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `idimg_shop` FOREIGN KEY (`id_shop`) REFERENCES `magasins` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Contraintes pour la table `magasins`
--
ALTER TABLE `magasins`
  ADD CONSTRAINT `idshop_admin` FOREIGN KEY (`id_admin`) REFERENCES `admins` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `idshop_image` FOREIGN KEY (`id_image`) REFERENCES `images` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
