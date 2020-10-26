-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 26 oct. 2020 à 13:53
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `idealbooks`
--

-- --------------------------------------------------------

--
-- Structure de la table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `synopsis` text NOT NULL,
  `edition` varchar(55) NOT NULL,
  `publishyear` varchar(50) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL,
  `count_rate` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `book`
--

INSERT INTO `book` (`id`, `title`, `author`, `genre`, `synopsis`, `edition`, `publishyear`, `picture`, `id_user`, `count_rate`) VALUES
(5, 'Caliban et la sorcière', 'Silvia Federici', 'Essay', 'Silvia Federici écrit un nouveau chapitre du Capital de Marx en écrivant une l\'histoire du passage du féodalisme du capitalisme du point de vue des femmes, et où le capitalisme apparaît moins comme une lente transformation naturelle qu\'en tant que contre-révolution contre les luttes du Moyen-âge.', 'ENTREMONDE', '2014', 'upload/img/5f918e1885eca_caliban.jpg', 3, 1),
(6, 'Les Aventuriers de la mer', 'Robin Hobb', 'Fantasy', 'Les vivenefs sont des vaisseaux magiques liés à la famille qui les possède par des liens empathiques. Ces navires sont insaisissables, ils bravent les tempêtes, évitent les récifs, distancent les monstres marins, sèment les pirates...', 'J\'AI LU', '2015', 'upload/img/5f919222406d5_aventuriers.jpg', 3, 1),
(7, 'Sauvage', 'Jamey Bradbury', 'Fantasy', 'À dix-sept ans, Tracy Petrikoff possède un don inné pour la chasse et les pièges. Elle vit à l\'écart du reste du monde et sillonne avec ses chiens de traîneau les immensités sauvages de l\'Alaska. Immuablement, elle respecte les trois règles que sa mère, trop tôt disparue, lui a dictées : «ne jamais perdre la maison de vue», «ne jamais rentrer avec les mains sales» et surtout «ne jamais faire saigner un humain».', 'LIZZIE', '2019', 'upload/img/5f9193086f77e_sauvage.jpg', 3, 1),
(9, 'King Kong Théorie', 'Virginie Despentes', 'Essay', 'En racontant pour la première fois comment elle est devenue Virginie Despentes, l\'auteur de Baise-moi conteste les discours bien-pensants sur le viol, la prostitution, la pornographie. Manifeste pour un nouveau féminisme.', 'LE LIVRE DE POCHE', '2007', 'upload/img/5f92cc07d6fbc_kingkong.jpeg', 3, 1),
(10, 'L\'Assassin royal', 'Robin Hobb', 'Fantasy', 'Au château de Castelcerf le roi Subtil Loinvoyant règne sur les Six Duchés ; il est aidé dans sa lourde tâche par son fils Chevalerie qui, comme son père et tous les nobles du royaume, porte le nom de la qualité que ses parents espéraient le voir développer. Ainsi le frère du Roi-servant s\'appelle-t-il Vérité et leur demi-frère, né d\'un second lit, Royal...', 'J\'ai Lu', '2014', 'upload/img/5f92ccd4ea451_assassin.jpg', 3, 1),
(12, 'Ne suis-je pas une femme ?', 'Bell Hooks', 'Essay', '&quot;Ne suis-je pas une femme ?&quot;, telle est la question que Sojourner Truth, ancienne esclave, abolitionniste noire des Etats-Unis, posa en 1851 lors d\'un discours célèbre, interpellant féministes et abolitionnistes sur les diverses oppressions subies par les femmes noires : oppressions de classe, de race, de sexe. ', 'CAMBOURAKIS', '2015', 'upload/img/5f92cef432b01_bell hooks.jpg', 3, 1),
(13, '1984', 'George Orwell', 'Dystopie', '&quot;De tous les carrefours importants, le visage à la moustache noire vous fixait du regard. BIG BROTHER VOUS REGARDE, répétait la légende, tandis que le regard des yeux noirs pénétrait les yeux de Winston... Au loin, un hélicoptère glissa entre les toits, plana un moment, telle une mouche bleue, puis repartit comme une flèche, dans un vol courbe.', 'GALLIMARD ', '1972', 'upload/img/5f92d06a748a9_1984.jpg', 5, 1),
(14, 'Vingt mille lieux sous les mers', 'Jules Verne', 'Roman', 'Le savant Aronnax, accompagné de Conseil, son domestique, ainsi que d\'un harponneur, Ned Land, embarquent sur la frégate Abraham-Lincoln pour capturer ce qu\'ils croient être un monstre marin... Or, le monstre n\'est autre que le Nautilus, le sous-marin du capitaine Nemo.', 'L\'ECOLE DES LOISIRS ', '2019', 'upload/img/5f92d1a4dc538_vingtmille.jpg', 5, 1),
(15, 'Le Trône de Fer', 'George R.R. Martin', 'Fantasy', 'Le royaume des sept couronnes est sur le point de connaître son plus terrible hiver: par-delà le mur qui garde sa frontière nord, une armée de ténèbres se lève, menaçant de tout détruire sur son passage. Mais il en faut plus pour refroidir les ardeurs des rois, des reines, des chevaliers et des renégats qui se disputent le trône de fer, tous les coups sont permis, et seuls les plus forts, ou les plus retors s\'en sortiront indemnes...', 'J\'AI LU ', '2010', 'upload/img/5f92d2fa59e15_GOT.jpg', 3, 1),
(16, 'La stratégie du choc', 'Naomi Klein', 'Essay', 'Qu\'y a-t-il de commun entre le coup d\'Etat de Pinochet au Chili en 1973, le massacre de la place Tiananmen en 1989, l\'effondrement de l\'Union soviétique, le naufrage de l\'épopée Solidarnosc en Pologne, les difficultés rencontrées par Mandela dans l\'Afrique du Sud post-apartheid, les attentats du 11 septembre, la guerre en Irak, le tsunami qui dévasta les côtes du Sri Lanka en 2004, le cyclone Katrina, l\'année suivante, la pratique de la torture partout et en tous lieux - Abou Ghraïb ou Guantànamo - aujourd\'hui ?', 'PENGUIN', '2008', 'upload/img/5f92d9a67797a_strategie.jpg', 5, 1),
(17, 'Beloved', 'Toni Morrisson', 'Roman', 'Vers 1870, aux États-Unis, près de Cincinnati dans l\'Ohio, le petit bourg de Bluestone Road, dresse ses fébriles demeures.  L\'histoire des lieux se lie au fleuve qui marquait jadis pour les esclaves en fuite la frontière où commençait la liberté.', '10-18', '2019', 'upload/img/5f92d7e53b01d_beloved.jpg', 5, NULL),
(18, 'Dans la forêt', 'Jean Hegland', 'Roman', 'Rien n’est plus comme avant : le monde tel qu’on le connaît semble avoir vacillé, plus d’éléctricité ni d’essence, les trains et les avions ne circulent plus. Des rumeurs courent, les gens fuient. Nell et Eva, dix-sept et dix-huit ans, vivent depuis toujours dans leur maison familiale, au cœur de la forêt.', 'GALLMEISTER ', '2017', 'upload/img/5f92d8e7a2247_danslaforet.jpg', 5, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `rate`
--

CREATE TABLE `rate` (
  `id_rate` int(11) NOT NULL,
  `user_fullname` varchar(255) NOT NULL,
  `rate` int(11) NOT NULL,
  `comment` text NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_book` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `rate`
--

INSERT INTO `rate` (`id_rate`, `user_fullname`, `rate`, `comment`, `id_user`, `id_book`) VALUES
(4, 'Marion Londero', 5, 'Caliban et la sorcière est un livre extrêmement dense et érudit. La langue utilisée est très accessible mais l\'étendue du panel d\'exemples et de sujets abordés pour expliquer les prémices du capitalisme peut considérablement déstabiliser le lecteur. Silvia Federici nous propose à la fois un essai d\'histoire économique, d\'histoire sociale, d\'histoire des femmes, d\'histoire rurale, d\'histoire politique et réussit à mettre tous ces plans en lien avec notre système actuel. C\'est prodigieux !', 3, 5),
(5, 'Marion Londero', 5, 'Grand. Grand  espaces, grands bois, grand Nord, grand froid. Chiens. Chiens de traîneaux, chiens de meute, chiens courants, chiens de tête, chiens de garde, chiens de chasse.  Sang. Hérédité,  filiation, legs, ADN. Féminité, menstruation. Chasse, prédateur, crime.  Scarification, estafilade, blessure, hémorragie. Vampire.   Adolescence. Désir, trouble,  identité, genre , sexe. Sauvage,  c\'est un peu tout cela. ', 3, 7),
(6, 'Marion Londero', 5, 'Une incroyable et riche aventure. Les Aventuriers de la mer est à mon sens un récit bien plus abouti que les différents cycles de l\'Assassin Royal. Sans précipitation, Robin Hobb nous emmène parmi les marchands et pirates. Elle pose peu à peu les jalons de son récit, à commencer par le bois-sorcier et ses mystères. Qui n\'aurait pas envie de voguer à bord d\'une vivenef et de découvrir Terrilville, Jamaillia, les îles des Pirates ou encore le Désert des Pluies, autant d\'endroits que l\'auteure nous offre et qu\'il me tarde de découvrir plus encore, notamment le fameux Désert des pluies. Ses personnages sont à mon sens bien travaillés. ', 3, 6),
(9, 'Marion Londero', 4, 'L\'assassin royal ou l\'histoire de Fitz le bâtard, dans un univers médiéval fantastique humain, au long d\'une série de 14 tomes.', 3, 10),
(10, 'Marion Londero', 4, 'Virginie Despentes ose les mots pour le dire. Dire quoi au fait ? La King Kong théorie, c\'est-à-dire la réalité des rapports hommes-femmes directement liés au formatage, dès le plus jeune âge, des uns et des autres par une société fondamentalement patriarcale. ', 3, 9),
(12, 'Marion Londero', 5, 'Première lecture de l\'année 2020 et de la décennie. Un seul mot : waouh ! D\'abord cet ouvrage est un classique du Black Feminism. Bell Hooks a vulgarisé avec brillo des concepts très complexes rendant cette oeuvre très facile à lire, très fluide car elle voulait que ce livre puisse être lu par toutes les générations, à tout moment.', 3, 12),
(13, 'User UserLastname', 5, 'On cite souvent 1984 et Big Brother à chaque fois que des nouvelles caméras de surveillance sont installées. J\'ai l\'impression que c\'est la seule chose qu\'on ait retenu de ce roman : la surveillance constante.', 5, 13),
(14, 'User UserLastname', 5, 'Le livre de mon enfance!', 5, 14),
(16, 'Marion Londero', 4, 'Si j\'étais un personnage, je serais Catelyn Stark. Non, pour sûr, Catelyn Stark n\'est pas mon personnage préféré de cette saga mais c\'est d\'elle dont je me sens le plus proche. Portée par un flot de sentiments contradictoires, elle ne prend certes pas toujours la bonne décision. ', 3, 15),
(17, 'Marion Londero', 4, 'Un livre a surtout mettre entre toutes les mains! Naomi Klein nous décrit comment les grandes institutions (FMI, Banque mondiale) censées aider les pays pauvres ou en difficultés ne font finalement que les enfoncer encore plus dans la misère en leur imposant des mesures terribles et contraires à une économie stable et juste', 3, 16);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `email`, `password`) VALUES
(3, 'Marion', 'Londero', 'marion@mail.com', '$2y$10$OL8/elOCY7J7U1b78x4Cfe6FAAQ3lSRopeNMxXNv.aEUYXtIusGm2'),
(5, 'User', 'UserLastname', 'user@mail.com', '$2y$10$rT5Q4yJKk2qZhJaib6Deo.Ra0oXqvLS2ZqEBnn4JlvMbQOzhaGN/G'),
(6, 'User2', 'User2lastname', 'user2@mail.com', '$2y$10$4gHpSzDXYRZ75nSjbOorEuds1OOSmriTTe.GFi98s5yvrW6y26gVa');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`id_rate`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `rate`
--
ALTER TABLE `rate`
  MODIFY `id_rate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
