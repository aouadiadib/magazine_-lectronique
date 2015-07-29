-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 29 Juillet 2015 à 11:18
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `magazine`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(100) NOT NULL AUTO_INCREMENT,
  `login` text NOT NULL,
  `pass` text NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`id_admin`, `login`, `pass`) VALUES
(1, 'admin', 'root');

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id_article` int(100) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `titre` text NOT NULL,
  `type` text NOT NULL,
  `texte` longtext NOT NULL,
  `img` text,
  `id_jour` int(100) NOT NULL,
  PRIMARY KEY (`id_article`),
  KEY `id_journaliste` (`id_jour`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id_article`, `date`, `titre`, `type`, `texte`, `img`, `id_jour`) VALUES
(16, '2015-04-16', 'Front national ', 'politique', 'Le Front national (FN) progresse, le 22 mars, au premier tour des départementales et cale, le 29 mars, au second. Il rassemble un quart des votants le premier dimanche mais ne gagne aucun département ensuite. Ces deux facteurs sont liés, ils signent la force et les limites de sa stratégie politique.\r\nChacun l’a noté : le parti de Marine Le Pen n’est plus celui de son père. Celui-ci reprenait les thèmes classiques de l’extrême droite, à coups de blagues xénophobes et antisémites. Mme Le Pen prend soin de s’en démarquer, se contentant de dénoncer le « communautarisme » de la gauche et sa politique migratoire. Mais c’est dans le domaine économique que la rupture de la fille avec le père est radicale. Ce dernier plaidait pour un libéralisme économique décomplexé. La fille s’engage dans une dénonciation anticapitaliste opposée.\r\n\r\nEn savoir plus sur http://www.lemonde.fr/idees/article/2015/04/06/front-national-la-longue-marche-du-premier-au-second-tour_4610159_3232.html#20lKqpUrTOLkOfGK.99', 'elec.jpg', 1),
(17, '2015-07-29', 'windows 10', 'politique', 'Top départ pour la nouvelle version du système d''exploitation le plus populaire au monde. Retour du menu démarrer, gestion des bureaux multiples, interface revue et corrigée... Avec Windows 10, la firme de Redmond veut faire oublier la débâcle Windows 8 en se rabibochant avec ses fans historiques, tout en se projetant dans l''avenir. On vous dit tout sur l''OS que vous aurez certainement sur votre PC !', 'header_windows10.jpg', 1),
(18, '2015-07-29', 'Moto X Play', 'politique', 'La version Style du Moto X est équipée d''un écran de 5,7 pouces Quad HD (2560 x 1440), la résolution reine des smartphones les plus haut de gamme du moment. Il est équipé d''un capteur photo de 21 Mpix (f/2.0) et d''un autre capteur frontal de 8 Mpix, accompagné d''un flash. Sous le capot, on retrouve un processeur Snapdragon 808, une version légèrement bridée du Snapdragon 810. Ce Snapdragon 808 équipe également le G4 de LG. Pour soutenir son CPU, Motorola a embarqué 3 Go de mémoire vive, ce qui devrait largement suffire à rendre ce Moto X Style réactif dans tous les usages.', '640.1153848.png', 1);

-- --------------------------------------------------------

--
-- Structure de la table `journaliste`
--

CREATE TABLE IF NOT EXISTS `journaliste` (
  `id_jour` int(100) NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `type` text NOT NULL,
  `login` text NOT NULL,
  `pass` text NOT NULL,
  PRIMARY KEY (`id_jour`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `journaliste`
--

INSERT INTO `journaliste` (`id_jour`, `nom`, `prenom`, `type`, `login`, `pass`) VALUES
(1, 'adib', 'aouadi', 'politique', 'adib', '123');

-- --------------------------------------------------------

--
-- Structure de la table `newslettre`
--

CREATE TABLE IF NOT EXISTS `newslettre` (
  `id_news` int(11) NOT NULL AUTO_INCREMENT,
  `email` text NOT NULL,
  PRIMARY KEY (`id_news`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `newslettre`
--

INSERT INTO `newslettre` (`id_news`, `email`) VALUES
(4, 'bboyadib@live.fr'),
(5, 'bboyadib@live.fr');

-- --------------------------------------------------------

--
-- Structure de la table `photo`
--

CREATE TABLE IF NOT EXISTS `photo` (
  `id_pic` int(100) NOT NULL AUTO_INCREMENT,
  `titre` text NOT NULL,
  `nom` text NOT NULL,
  `id_media` int(100) NOT NULL,
  PRIMARY KEY (`id_pic`),
  KEY `id_media` (`id_media`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Contenu de la table `photo`
--

INSERT INTO `photo` (`id_pic`, `titre`, `nom`, `id_media`) VALUES
(44, 'windows 10 ', 'images.jpg', 1),
(45, 'windows 10 ', 'telecharger-windows-10-gratuitement-5561.png', 1),
(46, 'windows 10', 'header_windows10.jpg', 1),
(47, 'windows 10', '200.1154335.jpg', 1);

-- --------------------------------------------------------

--
-- Structure de la table `pub`
--

CREATE TABLE IF NOT EXISTS `pub` (
  `id_pub` int(100) NOT NULL AUTO_INCREMENT,
  `societe` text NOT NULL,
  `img` text NOT NULL,
  PRIMARY KEY (`id_pub`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `pub`
--

INSERT INTO `pub` (`id_pub`, `societe`, `img`) VALUES
(7, 'Tunisie Telecom', 'banniere-Fibre-optique-960x200.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `responsable_media`
--

CREATE TABLE IF NOT EXISTS `responsable_media` (
  `id_media` int(100) NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `login` text NOT NULL,
  `pass` text NOT NULL,
  PRIMARY KEY (`id_media`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `responsable_media`
--

INSERT INTO `responsable_media` (`id_media`, `nom`, `prenom`, `login`, `pass`) VALUES
(1, 'aouadi', 'adib', 'media', '123');

-- --------------------------------------------------------

--
-- Structure de la table `rss`
--

CREATE TABLE IF NOT EXISTS `rss` (
  `id_rss` int(100) NOT NULL AUTO_INCREMENT,
  `titre` text NOT NULL,
  `lien` text NOT NULL,
  PRIMARY KEY (`id_rss`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `rss`
--

INSERT INTO `rss` (`id_rss`, `titre`, `lien`) VALUES
(1, 'news le monde francais', 'http://www.france24.com/fr/actualites/rss/');

-- --------------------------------------------------------

--
-- Structure de la table `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `id_video` int(100) NOT NULL AUTO_INCREMENT,
  `titre` text NOT NULL,
  `lien` text NOT NULL,
  `ident` text NOT NULL,
  `id_media` int(100) NOT NULL,
  PRIMARY KEY (`id_video`),
  KEY `id_media` (`id_media`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `video`
--

INSERT INTO `video` (`id_video`, `titre`, `lien`, `ident`, `id_media`) VALUES
(7, 'symfony', 'https://www.youtube.com/watch?v=PONJajuH8P4', 'PONJajuH8P4', 1),
(10, 'php5', 'https://www.youtube.com/watch?v=_KmeYnCsmDQ', '_KmeYnCsmDQ', 1);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`id_jour`) REFERENCES `journaliste` (`id_jour`);

--
-- Contraintes pour la table `photo`
--
ALTER TABLE `photo`
  ADD CONSTRAINT `photo_ibfk_1` FOREIGN KEY (`id_media`) REFERENCES `responsable_media` (`id_media`);

--
-- Contraintes pour la table `video`
--
ALTER TABLE `video`
  ADD CONSTRAINT `video_ibfk_1` FOREIGN KEY (`id_media`) REFERENCES `responsable_media` (`id_media`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
