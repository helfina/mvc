CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `log` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `id_article` int(11)  NULL,
  `id_image` int(11)  NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`id`, `log`, `pass`, `firstname`, `lastname`, `id_article`, `id_image`) VALUES
(1, 'lena', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'lena', 'cadet', 2, 2),
(2, 'gaelle', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'gaelle', 'kerforne', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sentence` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date` datetime DEFAULT current_timestamp(),
  `id-admin` int(11)  NULL,
  `id_category` int(11)  NULL,
  `id_image` int(11)  NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `title`, `sentence`, `content`, `date`, `id-admin`, `id_category`, `id_image`) VALUES
(1, 'titre 1', 'descriptions de l\'image 1', ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, odit eligendi. Expedita quisquam tempore nihil fuga, quia maiores quos ut corporis hic, eligendi molestiae? Repellat esse cupiditate magni sed ut?', '2020-07-13 15:31:28', 1, 3, 3),
(2, 'titre 2', 'descriptions de l\'image 2', ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, odit eligendi. Expedita quisquam tempore nihil fuga, quia maiores quos ut corporis hic, eligendi molestiae? Repellat esse cupiditate magni sed ut?', '2020-07-13 15:31:28', 1, 3, 3),
(3, 'titre 3', 'descriptions de l\'image 3', ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, odit eligendi. Expedita quisquam tempore nihil fuga, quia maiores quos ut corporis hic, eligendi molestiae? Repellat esse cupiditate magni sed ut?', '2020-07-13 15:31:28', 1, 3, 3),
(4, 'titre 4', 'descriptions de l\'image 4', ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, odit eligendi. Expedita quisquam tempore nihil fuga, quia maiores quos ut corporis hic, eligendi molestiae? Repellat esse cupiditate magni sed ut?', '2020-07-13 15:31:28', 1, 3, 3),
(5, 'titre 5', 'descriptions de l\'image 5', ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, odit eligendi. Expedita quisquam tempore nihil fuga, quia maiores quos ut corporis hic, eligendi molestiae? Repellat esse cupiditate magni sed ut?', '2020-07-13 15:31:28', 1, 3, 3),
(6, 'titre 6', 'descriptions de l\'image 6', ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, odit eligendi. Expedita quisquam tempore nihil fuga, quia maiores quos ut corporis hic, eligendi molestiae? Repellat esse cupiditate magni sed ut?', '2020-07-13 15:31:28', 1, 3, 3);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `nom`) VALUES
(1, 'Saint-Jean-Brevelay'),
(2, 'Grand-champs'),
(3, 'Mariage'),
(4, 'Déces');

-- --------------------------------------------------------

--
-- Structure de la table `horaires`
--

CREATE TABLE `horaires` (
  `id` int(11) NOT NULL,
  `id_shop` int(11) NOT NULL,
  `jour` varchar(255) NOT NULL,
  `matinOpen` time DEFAULT NULL,
  `matinClose` time DEFAULT NULL,
  `AmidiOpen` time DEFAULT NULL,
  `AmidiClose` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `horaires`
--

INSERT INTO `horaires` (`id`, `id_shop`, `jour`, `matinOpen`, `matinClose`, `AmidiOpen`, `AmidiClose`) VALUES
(1, 1, 'Lundi', '09:30:00', '12:00:00', '15:00:00', '19:15:00'),
(2, 1, 'Mardi', '09:30:00', '12:00:00', '15:00:00', '19:15:00'),
(3, 1, 'Jeudi', '09:30:00', '12:00:00', '15:00:00', '19:15:00'),
(4, 1, 'Vendredi', '09:30:00', '12:00:00', '15:00:00', '19:15:00'),
(5, 1, 'Samedi', '09:30:00', '12:30:00', '15:00:00', '19:15:00'),
(6, 1, 'Dimanche', '09:30:00', '12:30:00', NULL, NULL),
(7, 2, 'Mardi', '09:00:00', '12:00:00', '15:00:00', '19:15:00'),
(8, 2, 'Mercredi', '09:00:00', '12:00:00', '15:00:00', '19:15:00'),
(9, 2, 'Jeudi', '09:00:00', '12:00:00', '15:00:00', '19:15:00'),
(10, 2, 'Vendredi', '09:00:00', '12:00:00', '15:00:00', '19:15:00'),
(11, 2, 'Samedi', '09:00:00', '12:30:00', '15:00:00', '19:15:00'),
(12, 2, 'Dimanche', '09:00:00', '12:30:00', NULL, NULL),
(13, 1, 'Mercredi', NULL, NULL, NULL, NULL),
(14, 2, 'Lundi', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `id_category` int(11) NOT NULL,
  `id_shop` int(11)  NULL,
  `id_article` int(11) NULL,
  `id_admin` int(11)  NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `magasins`
--

CREATE TABLE `magasins` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `rue` varchar(255) NOT NULL,
  `code_postal` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `id_horaire` int(11)  NULL,
  `id_image` int(11)  NULL,
  `id_category` int(11)  NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `magasins`
--

INSERT INTO `magasins` (`id`, `nom`, `rue`, `code_postal`, `ville`, `tel`, `id_horaire`, `id_image`, `id_category`) VALUES
(1, 'Bleuets Rose - Saint-Jean-Brévelay', '2 Rue de buléon', '56660', 'Saint-Jean-Brévelay', '02.97.60.41.65', 1, 1, 1),
(2, 'Bleuets Rose - Grand-champ', '1 route de vannes', '56390', ' Grand-Champ', '\r\n09.52.46.16.14', 2, 2, 2);

