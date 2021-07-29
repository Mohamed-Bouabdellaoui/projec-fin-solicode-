-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 28 juil. 2021 à 01:41
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `full_work`
--

-- --------------------------------------------------------

--
-- Structure de la table `adress`
--

CREATE TABLE `adress` (
  `id` int(11) NOT NULL,
  `adress` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `adress`
--

INSERT INTO `adress` (`id`, `adress`) VALUES
(1, 'fffffff'),
(2, 'fffffff'),
(3, 'fffffff');

-- --------------------------------------------------------

--
-- Structure de la table `catigory`
--

CREATE TABLE `catigory` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `discription` varchar(100) NOT NULL,
  `image` varchar(520) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `catigory`
--

INSERT INTO `catigory` (`id`, `name`, `discription`, `image`) VALUES
(10, 'model', 'Personne ou objet possédant certaines qualités ou caractéristiques propres à en faire', 'https://cocainemodels.com/wp-content/uploads/2018/12/40-years-jahre-become-a-model-werden-best-ager-tipps-hilfe-modeling-agency.jpg'),
(11, 'photoghrapher', 'Photographers use a variety of photographic equipment to capture events', 'https://cdn57.androidauthority.net/wp-content/uploads/2018/09/master-photography.jpg'),
(12, 'makup-artist', 'A makeup artist is responsible for visually transforming people', 'https://st3.depositphotos.com/1177973/12866/i/600/depositphotos_128662212-stock-photo-professional-makeup-artist-working-with.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `seller`
--

CREATE TABLE `seller` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `password` int(11) NOT NULL,
  `adress` varchar(50) NOT NULL,
  `work` varchar(30) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `seller`
--

INSERT INTO `seller` (`id`, `name`, `email`, `phone`, `password`, `adress`, `work`, `image`) VALUES
(26, 'mohamed  bl5555555555', 'mhphoto@gmail.com', '06856931', 12548, '', '', ''),
(27, 'hicham', 'hicham@gmail.com', '0607972085', 87956, 'gzenaya', 'photoghrapher', 'https://images.unsplash.com/photo-1542038784456-1ea8e935640e?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8cGhvdG9ncmFwaHl8ZW58MHx8MHx8&ixlib=rb-1.2.1&w=1000&q=80'),
(28, 'ossama melani', 'osama@gmail.com', '060522145', 125889, 'boukhalef', 'photoghrapher', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRAPFgRotSD-hKyBzIzJKUl81p557CZn9ZAVIZxprroUw5_6rHdBOuI42LKjsFk9Tpay18&usqp=CAU'),
(29, 'ali kemlali', 'ali@gmail.com', '06879524', 789542, 'badriwin', 'photoghrapher', 'https://cdn.pixabay.com/photo/2015/03/26/10/49/photographer-692035_640.jpg'),
(30, 'amine', 'aminkmr@gmail.com', '062598756', 12589, 'ziaten', 'photoghrapher', 'https://pas-wordpress-media.s3.amazonaws.com/content/uploads/2014/07/08132212/bigstock-Travel-Photographer-Taking-A-P-302170048-min-653x300.jpg'),
(31, 'imad lwzir', 'imadlwzer@gmaile.com', '0607972058', 879456, 'birchifa', 'photoghrapher', 'https://jdinstitute.co/wp-content/uploads/2020/11/14-Become-A-Professional-Photographer.jpeg'),
(32, 'hasan lmliki', 'hasanlmliki@gmail.com', '0607972089', 789125, 'msnana', 'photoghrapher', 'https://bigbrandboys.com/wp-content/uploads/2019/04/professional-photography.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `adress`
--
ALTER TABLE `adress`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `catigory`
--
ALTER TABLE `catigory`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `adress`
--
ALTER TABLE `adress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `catigory`
--
ALTER TABLE `catigory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `seller`
--
ALTER TABLE `seller`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
