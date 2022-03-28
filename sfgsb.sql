-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 28 mars 2022 à 17:11
-- Version du serveur : 5.7.36
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sfgsb`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `libelle`) VALUES
(1, 'Visiteur'),
(2, 'Laborantin'),
(3, 'Dirigeant'),
(4, 'Comptable');

-- --------------------------------------------------------

--
-- Structure de la table `categorie_domaine`
--

DROP TABLE IF EXISTS `categorie_domaine`;
CREATE TABLE IF NOT EXISTS `categorie_domaine` (
  `categorie_id` int(11) NOT NULL,
  `domaine_id` int(11) NOT NULL,
  PRIMARY KEY (`categorie_id`,`domaine_id`),
  KEY `IDX_272CA46EBCF5E72D` (`categorie_id`),
  KEY `IDX_272CA46E4272FC9F` (`domaine_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categorie_domaine`
--

INSERT INTO `categorie_domaine` (`categorie_id`, `domaine_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(3, 1),
(4, 1);

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
CREATE TABLE IF NOT EXISTS `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `domaine`
--

DROP TABLE IF EXISTS `domaine`;
CREATE TABLE IF NOT EXISTS `domaine` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_domaine` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `domaine`
--

INSERT INTO `domaine` (`id`, `nom_domaine`) VALUES
(1, 'Administratif'),
(2, 'Extérieur');

-- --------------------------------------------------------

--
-- Structure de la table `etat`
--

DROP TABLE IF EXISTS `etat`;
CREATE TABLE IF NOT EXISTS `etat` (
  `id` varchar(4) NOT NULL,
  `libelle` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etat`
--

INSERT INTO `etat` (`id`, `libelle`) VALUES
('EN', 'Enregistré'),
('SA', 'Saisie');

-- --------------------------------------------------------

--
-- Structure de la table `fichefrais`
--

DROP TABLE IF EXISTS `fichefrais`;
CREATE TABLE IF NOT EXISTS `fichefrais` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idUtilisateur` char(4) DEFAULT NULL,
  `mois` char(6) NOT NULL,
  `nbJustificatifs` int(11) DEFAULT NULL,
  `montantValide` decimal(10,2) DEFAULT NULL,
  `dateModif` date DEFAULT NULL,
  `idEtat` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unefiche` (`idUtilisateur`,`mois`) USING BTREE,
  KEY `idEtat` (`idEtat`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `fichefrais`
--

INSERT INTO `fichefrais` (`id`, `idUtilisateur`, `mois`, `nbJustificatifs`, `montantValide`, `dateModif`, `idEtat`) VALUES
(21, 'ul', '202011', 2, NULL, NULL, 'EN'),
(22, 'ul', '202010', 1, '1000.00', NULL, 'EN');

-- --------------------------------------------------------

--
-- Structure de la table `fraisforfait`
--

DROP TABLE IF EXISTS `fraisforfait`;
CREATE TABLE IF NOT EXISTS `fraisforfait` (
  `id` char(3) NOT NULL,
  `libelle` char(20) DEFAULT NULL,
  `montant` decimal(5,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `fraisforfait`
--

INSERT INTO `fraisforfait` (`id`, `libelle`, `montant`) VALUES
('SE', 'Prix Semaine', '50.00'),
('WE', 'Prix Week-end', '80.00');

-- --------------------------------------------------------

--
-- Structure de la table `lignefraisforfait`
--

DROP TABLE IF EXISTS `lignefraisforfait`;
CREATE TABLE IF NOT EXISTS `lignefraisforfait` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idFiche` int(11) DEFAULT NULL,
  `idFraisForfait` char(3) DEFAULT NULL,
  `quantite` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idFraisForfait` (`idFraisForfait`),
  KEY `idFiche` (`idFiche`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `lignefraisforfait`
--

INSERT INTO `lignefraisforfait` (`id`, `idFiche`, `idFraisForfait`, `quantite`) VALUES
(9, 21, 'SE', 12),
(10, 22, 'WE', 3);

-- --------------------------------------------------------

--
-- Structure de la table `lignefraishorsforfait`
--

DROP TABLE IF EXISTS `lignefraishorsforfait`;
CREATE TABLE IF NOT EXISTS `lignefraishorsforfait` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idFiche` int(11) DEFAULT NULL,
  `libelle` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `montant` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idFiche` (`idFiche`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `lignefraishorsforfait`
--

INSERT INTO `lignefraishorsforfait` (`id`, `idFiche`, `libelle`, `date`, `montant`) VALUES
(2, 21, 'Repas Gastronomique', '2022-03-10', '1000.00');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` char(4) NOT NULL,
  `nom` char(30) DEFAULT NULL,
  `prenom` char(30) DEFAULT NULL,
  `adresse` char(30) DEFAULT NULL,
  `cp` char(5) DEFAULT NULL,
  `ville` char(30) DEFAULT NULL,
  `dateEmbauche` date DEFAULT NULL,
  `la_categorie_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_1D1C63B3281042B9` (`la_categorie_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `adresse`, `cp`, `ville`, `dateEmbauche`, `la_categorie_id`) VALUES
('EVRA', 'Evraere', 'Maxime', '8 rue de la ville', '62400', 'Cahors', '2022-03-01', 4),
('SHEL', 'Shelby', 'Thomas', '8 rue de Birhmingham', '12000', 'Londres', '2012-03-15', 3),
('ul', 'Dicule', 'Terry', '25, rue du jambon', '62999', 'Leport', '2019-10-01', 3);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur_secondaire`
--

DROP TABLE IF EXISTS `utilisateur_secondaire`;
CREATE TABLE IF NOT EXISTS `utilisateur_secondaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_utilisateur_id` char(4) NOT NULL,
  `id_fiche_frais_id` int(11) NOT NULL,
  `niveau` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_43239A89C6EE5C49` (`id_utilisateur_id`),
  KEY `IDX_43239A89E429EA53` (`id_fiche_frais_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `categorie_domaine`
--
ALTER TABLE `categorie_domaine`
  ADD CONSTRAINT `FK_272CA46E4272FC9F` FOREIGN KEY (`domaine_id`) REFERENCES `domaine` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_272CA46EBCF5E72D` FOREIGN KEY (`categorie_id`) REFERENCES `categorie` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `fichefrais`
--
ALTER TABLE `fichefrais`
  ADD CONSTRAINT `fichefrais_ibfk_1` FOREIGN KEY (`idEtat`) REFERENCES `etat` (`id`),
  ADD CONSTRAINT `fichefrais_ibfk_2` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateur` (`id`);

--
-- Contraintes pour la table `lignefraisforfait`
--
ALTER TABLE `lignefraisforfait`
  ADD CONSTRAINT `lignefraisforfait_ibfk_2` FOREIGN KEY (`idFraisForfait`) REFERENCES `fraisforfait` (`id`),
  ADD CONSTRAINT `lignefraisforfait_ibfk_3` FOREIGN KEY (`idFiche`) REFERENCES `fichefrais` (`id`);

--
-- Contraintes pour la table `lignefraishorsforfait`
--
ALTER TABLE `lignefraishorsforfait`
  ADD CONSTRAINT `lignefraishorsforfait_ibfk_1` FOREIGN KEY (`idFiche`) REFERENCES `fichefrais` (`id`);

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `fk_laCat` FOREIGN KEY (`la_categorie_id`) REFERENCES `categorie` (`id`);

--
-- Contraintes pour la table `utilisateur_secondaire`
--
ALTER TABLE `utilisateur_secondaire`
  ADD CONSTRAINT `FK_43239A89C6EE5C49` FOREIGN KEY (`id_utilisateur_id`) REFERENCES `utilisateur` (`id`),
  ADD CONSTRAINT `FK_43239A89E429EA53` FOREIGN KEY (`id_fiche_frais_id`) REFERENCES `fichefrais` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
