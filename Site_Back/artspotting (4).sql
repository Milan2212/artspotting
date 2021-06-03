-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 03, 2021 at 01:16 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artspotting`
--

-- --------------------------------------------------------

--
-- Table structure for table `artiste`
--

CREATE TABLE `artiste` (
  `id_artiste` int(11) NOT NULL,
  `nom_artiste` varchar(255) DEFAULT NULL,
  `prenom_artiste` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `artiste`
--

INSERT INTO `artiste` (`id_artiste`, `nom_artiste`, `prenom_artiste`) VALUES
(1, 'Caron', 'Antoine'),
(2, 'Lancret', 'Nicolas'),
(3, 'Vignon', 'Claude'),
(4, 'Dali', 'Salvador'),
(5, 'Takeji', 'Fujishima');

-- --------------------------------------------------------

--
-- Table structure for table `lieu_exposition`
--

CREATE TABLE `lieu_exposition` (
  `id_lieu` int(11) NOT NULL,
  `continent` varchar(255) DEFAULT NULL,
  `pays` varchar(255) DEFAULT NULL,
  `ville` varchar(255) DEFAULT NULL,
  `musee` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lieu_exposition`
--

INSERT INTO `lieu_exposition` (`id_lieu`, `continent`, `pays`, `ville`, `musee`) VALUES
(1, 'Europe', 'France', 'Paris', NULL),
(2, 'Europe', 'France', 'Paris', 'Musée du Louvre'),
(3, 'Europe', 'France', 'Rennes', 'Musée des beaux-arts'),
(4, 'Amérique', 'Etats-Unis', 'New York', 'Museum of Modern Art'),
(5, 'Asie', 'Japon', 'Tokyo', 'Musée d\'Art Bridgestone');

-- --------------------------------------------------------

--
-- Table structure for table `mouvement`
--

CREATE TABLE `mouvement` (
  `id_mouvement` int(11) NOT NULL,
  `nom_mouvement` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mouvement`
--

INSERT INTO `mouvement` (`id_mouvement`, `nom_mouvement`) VALUES
(1, 'Surréalisme'),
(2, 'Romantisme'),
(3, 'Ecole de Fontainebleau'),
(4, 'Baroque'),
(5, 'Maniérisme'),
(6, 'scène de genre');

-- --------------------------------------------------------

--
-- Table structure for table `mouvement_oeuvre`
--

CREATE TABLE `mouvement_oeuvre` (
  `id_mouvement_oeuvre` int(11) NOT NULL,
  `id_mouvement` int(11) DEFAULT NULL,
  `id_oeuvre` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oeuvre`
--

CREATE TABLE `oeuvre` (
  `id_oeuvre` int(11) NOT NULL,
  `nom_oeuvre` varchar(255) DEFAULT NULL,
  `date_oeuvre` varchar(4) DEFAULT NULL,
  `taille_oeuvre` varchar(255) DEFAULT NULL,
  `description_oeuvre` text,
  `description_artiste` text,
  `img_oeuvre` text NOT NULL,
  `id_lieu` int(11) DEFAULT NULL,
  `id_artiste` int(11) DEFAULT NULL,
  `id_type` int(11) DEFAULT NULL,
  `id_technique` int(11) DEFAULT NULL,
  `id_mouvement` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oeuvre`
--

INSERT INTO `oeuvre` (`id_oeuvre`, `nom_oeuvre`, `date_oeuvre`, `taille_oeuvre`, `description_oeuvre`, `description_artiste`, `img_oeuvre`, `id_lieu`, `id_artiste`, `id_type`, `id_technique`, `id_mouvement`) VALUES
(1, 'Le triomphe de l\'hiver', '1568', '103 x 179', 'Le Triomphe De L’hiver semble représenter un peuple fêtant l’arrivée de l’hiver. Ils font de la musique et ont l\'air d\'être joyeux.\r\n\r\nLes arbres au fond et le sol sont enneigés, les personnages cependant, semblent être peu vêtus malgré le temps qu’il fait. Les couleurs sont assez monotones et sombres, mais les vêtements des personnes au milieu de la peinture sont très colorés, ce qui crée un gros contraste. \r\n\r\nLa peinture représente une architecture paysagère, et des personnes qui semblent provenir de la mythologie gréco-romaine. L’artiste a voulu représenter l’arrivée d’une nouvelle saison.', 'Antoine Caron est un maître verrier, illustrateur et peintre Français maniériste, né en 1521 à Beauvais et est mort en 1599 à Paris. Antoine Caron est l’un des rares peintres français de son époque à posséder une personnalité artistique prononcée. Son œuvre reflète l’ambiance raffinée.', 'img/oeuvre/triomphedelhiver.jpg', 1, 1, 2, 2, 5),
(2, 'Les acteurs de la comédie italienne', '1736', '260 x 220', 'Les Acteurs De La Comédie Italienne représente un groupe de personnes. Celles-ci semblent être déguisées, nous pouvons le remarquer grâces aux masques et aux vêtements. Nous pouvons retrouver les éléments typiques du théâtre Italien, comme les loups que deux personnes portent sur la peinture, et les vêtements que portent les personnages. \r\nLes tissus ornés de losanges multicolores ressemblent fortement aux tissus que portent Arlequin, un personnage type de la Commedia dell\'arte qui est apparu au XVI e siècle en Italie, au masque noir. Au premier plan nous pouvons distinguer un homme, habillé tout en blanc avec une expression faciale assez triste, monotone, et son visage est très pâle.\r\n\r\nNous pouvons le comparer à Pierrot, un autre personnage issu de la Commedia dell\'arte, qui est toujours vêtu de blanc et au teint très enfariné. L’artiste s’est clairement inspiré de la Commedia dell’arte pour son œuvre, c’est une peinture de genre qui représente les personnages les plus connu du théâtre Italien.', 'Nicolas Lancret est un peintre de nationalité française. Il est né le 22 janvier 1690 à Paris et est mort le 14 septembre 1743 dans la même ville. Il a su dépeindre l’esprit des goûts et des mœurs de la société Française de la Régence.', 'img/oeuvre/acteursdelacomedieitalienne.jpg', 2, 2, 2, 1, 6),
(3, 'Cléopâtre se donnant la mort', '1645', '95 x 81.5', 'Cette peinture représente un personnage historique connu, du nom de Cléopâtre, la fameuse reine d\'Égypte antique. Elle est vêtue d\'une couronne et de vêtements très fins. \r\n\r\nL\'œuvre porte bien son nom, puisqu\'elle représente la mort de Cléopâtre, se laissant mordre par l\'animal redoutable, qu\'est le serpent. Nous pouvons voir sur l\'œuvre le venin mortel du serpent enroulé autour d\'elle, et l\'expression faciale de Cléopâtre, qui semble souffrir. Les couleurs sont moroses, lugubres, il y a des teints de jaune et de vert, qui nous rappellent le thème de la mort. \r\n\r\nCe qui est intéressant dans cette œuvre, c\'est l\'interprétation des égyptiens par un peintre européen qui est vraiment différente par rapport à la représentation de ces derniers par leur propre peuple.', 'Claude Vignon est un peintre, graveur et illustrateur français. Il est né à Tours le 19 mai 1593 et est mort à Paris le 10 mai 1670, il aborde tous les genres.', 'img/oeuvre/cleopatresedonnantlamort.jpg', 3, 3, 1, 2, 3),
(4, 'L\'éventail noir', '1908', '63.7 x 41.2', 'L\'éventail noir représente une belle femme, qui semble être jeune. Elle est vêtue de blanc et tient dans sa main un éventail noir. Fushijima Takeji a peint cette œuvre lorsqu’il était en Italie ; nous pouvons remarquer un mélange entre les éléments Japonais et européens. La femme ne semble pas asiatique, mais elle tient un éventail, un élément asiatique.\r\n\r\nLa couleur de ce dernier, noir, crée un contraste avec les vêtements de la femme qui sont blancs.', 'Fujishima Takeji, né le 15 octobre 1867 et mort le 19 mars 1943, est un peintre d’origine japonaise et notamment connu pour avoir introduit dans la peinture Nihon Ga (mouvement artistique Japonais), des éléments de la peinture moderne européenne, en particulier l\'impressionnisme.', 'img/oeuvre/eventailnoir.jpg', 5, 5, 8, 3, 2),
(5, 'La persistance de la mémoire', '1931', '24 x 33', 'La persistance de la mémoire est une œuvre surréaliste. En effet, les horloges représentées semblent être « molles/fondues ». Lorsque Dali a peint cette peinture, il dit qu’il était fatigué et qu’il avait une migraine. Nous pouvons donc penser que ces horloges molles et fondues représentent le temps du sommeil, l’état de notre corps et de notre esprit lorsque nous allons nous coucher. \r\n\r\nPour l’effet « mou/fondu » sur les horloges, l’artiste s’est inspiré d’un camembert ayant fondu dans un plateau. Il s’inspire donc des hallucinations et assemblements d’idées ; c’est du surréalisme pur et dur.', 'Salvador Dalí i Domènech, est né à Figueras le 11 mai 1904, et est mort le 23 janvier 1989. Il est un peintre, sculpteur, graveur, scénariste et écrivain d’origine espagnole, et il est considéré comme l\'un des principaux représentants du surréalisme, et l\'un des plus célèbres peintres du 20e siècle.', 'img/oeuvre/persistancedelamemoire.jpg', 4, 4, 4, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `technique`
--

CREATE TABLE `technique` (
  `id_technique` int(11) NOT NULL,
  `nom_technique` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `technique`
--

INSERT INTO `technique` (`id_technique`, `nom_technique`) VALUES
(1, 'Huile sur panneau de bois'),
(2, 'Huile sur toile'),
(3, 'Peinture à l\'huile');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id_type` int(11) NOT NULL,
  `nom_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id_type`, `nom_type`) VALUES
(1, 'Peinture d\'histoire'),
(2, 'Tableau'),
(3, 'Sculpture'),
(4, 'Paysage et Nature morte'),
(8, 'Portrait');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_utilisateur` int(11) NOT NULL,
  `pseudo_utilisateur` varchar(255) DEFAULT NULL,
  `date_utilisateur` date DEFAULT NULL,
  `password_utilisateur` varchar(255) DEFAULT NULL,
  `mail_utilisateur` varchar(255) DEFAULT NULL,
  `photo_utilisateur` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `pseudo_utilisateur`, `date_utilisateur`, `password_utilisateur`, `mail_utilisateur`, `photo_utilisateur`) VALUES
(1, 'Milan', '2003-07-08', 'd623b2ab5fb7f4511d4abf3ec00ec77fed503147', 'milanmorisot@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur_oeuvre`
--

CREATE TABLE `utilisateur_oeuvre` (
  `id_utilisateur_oeuvre` int(11) NOT NULL,
  `id_utilisateur` int(11) DEFAULT NULL,
  `id_oeuvre` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artiste`
--
ALTER TABLE `artiste`
  ADD PRIMARY KEY (`id_artiste`);

--
-- Indexes for table `lieu_exposition`
--
ALTER TABLE `lieu_exposition`
  ADD PRIMARY KEY (`id_lieu`);

--
-- Indexes for table `mouvement`
--
ALTER TABLE `mouvement`
  ADD PRIMARY KEY (`id_mouvement`);

--
-- Indexes for table `mouvement_oeuvre`
--
ALTER TABLE `mouvement_oeuvre`
  ADD PRIMARY KEY (`id_mouvement_oeuvre`),
  ADD KEY `id_mouvement` (`id_mouvement`),
  ADD KEY `id_oeuvre` (`id_oeuvre`);

--
-- Indexes for table `oeuvre`
--
ALTER TABLE `oeuvre`
  ADD PRIMARY KEY (`id_oeuvre`),
  ADD KEY `id_lieu` (`id_lieu`),
  ADD KEY `id_artiste` (`id_artiste`),
  ADD KEY `id_type` (`id_type`),
  ADD KEY `id_technique` (`id_technique`);

--
-- Indexes for table `technique`
--
ALTER TABLE `technique`
  ADD PRIMARY KEY (`id_technique`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id_type`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_utilisateur`),
  ADD UNIQUE KEY `mail_utilisateur` (`mail_utilisateur`);

--
-- Indexes for table `utilisateur_oeuvre`
--
ALTER TABLE `utilisateur_oeuvre`
  ADD PRIMARY KEY (`id_utilisateur_oeuvre`),
  ADD KEY `id_utilisateur` (`id_utilisateur`),
  ADD KEY `id_oeuvre` (`id_oeuvre`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artiste`
--
ALTER TABLE `artiste`
  MODIFY `id_artiste` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lieu_exposition`
--
ALTER TABLE `lieu_exposition`
  MODIFY `id_lieu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mouvement`
--
ALTER TABLE `mouvement`
  MODIFY `id_mouvement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mouvement_oeuvre`
--
ALTER TABLE `mouvement_oeuvre`
  MODIFY `id_mouvement_oeuvre` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oeuvre`
--
ALTER TABLE `oeuvre`
  MODIFY `id_oeuvre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `technique`
--
ALTER TABLE `technique`
  MODIFY `id_technique` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `utilisateur_oeuvre`
--
ALTER TABLE `utilisateur_oeuvre`
  MODIFY `id_utilisateur_oeuvre` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mouvement_oeuvre`
--
ALTER TABLE `mouvement_oeuvre`
  ADD CONSTRAINT `mouvement_oeuvre_ibfk_1` FOREIGN KEY (`id_mouvement`) REFERENCES `mouvement` (`id_mouvement`),
  ADD CONSTRAINT `mouvement_oeuvre_ibfk_2` FOREIGN KEY (`id_oeuvre`) REFERENCES `oeuvre` (`id_oeuvre`);

--
-- Constraints for table `oeuvre`
--
ALTER TABLE `oeuvre`
  ADD CONSTRAINT `oeuvre_ibfk_1` FOREIGN KEY (`id_lieu`) REFERENCES `lieu_exposition` (`id_lieu`),
  ADD CONSTRAINT `oeuvre_ibfk_2` FOREIGN KEY (`id_artiste`) REFERENCES `artiste` (`id_artiste`),
  ADD CONSTRAINT `oeuvre_ibfk_3` FOREIGN KEY (`id_type`) REFERENCES `type` (`id_type`),
  ADD CONSTRAINT `oeuvre_ibfk_4` FOREIGN KEY (`id_technique`) REFERENCES `technique` (`id_technique`);

--
-- Constraints for table `utilisateur_oeuvre`
--
ALTER TABLE `utilisateur_oeuvre`
  ADD CONSTRAINT `utilisateur_oeuvre_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`),
  ADD CONSTRAINT `utilisateur_oeuvre_ibfk_2` FOREIGN KEY (`id_oeuvre`) REFERENCES `oeuvre` (`id_oeuvre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
