-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 06 déc. 2022 à 10:42
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `seventeen_formations`
--

-- --------------------------------------------------------

--
-- Structure de la table `app_config`
--

CREATE TABLE `app_config` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `value` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `app_config`
--

INSERT INTO `app_config` (`id`, `name`, `value`, `description`) VALUES
(1, 'alert_top_show', 'visible', 'Afficher la barre d\'alert noir en haut de chaque page\n\n//visible = visible\n//hide = cacher'),
(2, 'alert_top_title', 'Actualites', 'Titre de la barre d\'alert noir en haut de chaque page'),
(3, 'alert_top_message', 'MASQUE DE NOUVEAU OBLIGATOIRE DANS LES TRANSPORTS EN COMMUN ? | INTRUSION AU SEIN DE L\'ELISEE', 'Message de la barre d\'alert noir en haut de chaque page'),
(4, 'alert_top_contact', 'SEVENTEEN NEWS', 'Contact de la barre d\'alert noir en haut de chaque page'),
(5, 'alert_top_icon', 'fi fi-rr-comment-alt', 'Icon de la barre d\'alert noir en haut de chaque page');

-- --------------------------------------------------------

--
-- Structure de la table `blog_articles`
--

CREATE TABLE `blog_articles` (
  `id` int(11) NOT NULL,
  `illustration_url` varchar(255) NOT NULL,
  `title` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `categorie` varchar(50) NOT NULL,
  `article` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `blog_articles`
--

INSERT INTO `blog_articles` (`id`, `illustration_url`, `title`, `author`, `categorie`, `article`, `timestamp`) VALUES
(1, 'https://bulletindescommunes.net/wp-content/uploads/2018/11/7a78e42e31_80358_626-deconoel.jpg', 'Illumination du 8 décembre', 'corentin', 'Noël', './app/pages/articles/publications/Illumination_du_8_décembre.html', '2022-12-06 08:34:35'),
(2, 'https://www.autocars-migratour.fr/wp-content/uploads/2014/07/fete-lumiere-lyon3.jpg', 'Les illuminations sont de retour à Lyon en 2022', 'corentin', 'Noël', './app/pages/articles/publications/Les_illuminations_sont_de_retour_à_Lyon_en_2022.html', '2022-12-06 09:03:27');

-- --------------------------------------------------------

--
-- Structure de la table `secure_users`
--

CREATE TABLE `secure_users` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `secure_users`
--

INSERT INTO `secure_users` (`id`, `nom`, `prenom`, `username`, `password`, `email`, `role`) VALUES
(1, 'SAMARD', 'Corentin', 'corentin', '$2y$10$AicXMqK3chJqYFiud8DEk.kART.76joxiJI6RRLT3N8bhpzs2q2X.', 'corentin@seventeeninfo.fr', '5');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `app_config`
--
ALTER TABLE `app_config`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `blog_articles`
--
ALTER TABLE `blog_articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `secure_users`
--
ALTER TABLE `secure_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `app_config`
--
ALTER TABLE `app_config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `blog_articles`
--
ALTER TABLE `blog_articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `secure_users`
--
ALTER TABLE `secure_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
