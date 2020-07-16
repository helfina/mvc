--
-- Base de données : `mvcbr`
--
CREATE DATABASE IF NOT EXISTS `bleuetsrose` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

USE `bleuetsrose`;

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--
CREATE TABLE `admins` (
`id` INT(11) PRIMARY KEY AUTO_INCREMENT,
`log` VARCHAR(255) NOT NULL,
`pass` VARCHAR(255) NOT NULL,
`firstname` VARCHAR(255) NOT NULL,
`lastname` VARCHAR(255) NOT NULL,
`id_article` INT(11) NOT NULL,
`id_image` INT(11) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
-- --------------------------------------------------------

--
-- Structure de la table `articles`
--
CREATE TABLE `articles` (
`id` INT(11) PRIMARY KEY AUTO_INCREMENT,
`title` VARCHAR(255) NOT NULL,
`sentence` VARCHAR(255) NOT NULL,
`content` TEXT NOT NULL,
`date` DATETIME DEFAULT NOW(),
`id-admin` INT (11) NOT NULL,
`id_category` INT(11) NOT NULL,
`id_image` INT(11) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- --------------------------------------------------------
--
-- Structure de la table `images`
--
CREATE TABLE `images`(
`id` INT(11) PRIMARY KEY AUTO_INCREMENT,
`image` blob NOT NULL,
`id_category` INT(11) NOT NULL,
`id_shop` INT(11) NULL,
`id_article` INT(11) NULL ,
`id_admin` INT(11) NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- --------------------------------------------------------

--
-- Structure de la table `categories`
--
CREATE TABLE `categories` (
`id` INT(11) PRIMARY KEY AUTO_INCREMENT,
`nom` VARCHAR(255) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `categories`(`id`, `nom`)
VALUES('1', 'Saint-Jean-Brevelay'),('2', 'Grand-champs'),(`3`, 'Mariage'),(`4`, 'Déces');
-- --------------------------------------------------------

--
-- Structure de la table `magasins`
--

CREATE TABLE `magasins`(
`id` INT(11) PRIMARY KEY AUTO_INCREMENT,
`nom` VARCHAR (255) NOT NULL,
`rue` VARCHAR (255) NOT NULL,
`code_postal` VARCHAR (255) NOT NULL,
`ville` VARCHAR (255) NOT NULL,
`tel` VARCHAR (255) NOT NULL,
`id_horaire`INT(11) NOT NULL ,
`id_image` INT(11) NOT NULL,
`id_category` INT(11) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- --------------------------------------------------------

--
-- Structure de la table `horaires`
--
CREATE TABLE `horaires`(
`id` INT(11) PRIMARY KEY AUTO_INCREMENT,
`open_start` TIME NOT NULL,
`open_end` TIME NOT NULL,
`id_shop` INT(11) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- --------------------------------------------------------
--
-- FOREIGN KEY de la table `admin`
--
ALTER TABLE `admins` ADD CONSTRAINT `fk_id_article` FOREIGN KEY (`id_article`) REFERENCES `articles`(`id`);

ALTER TABLE `admin` ADD CONSTRAINT `fk_id_image` FOREIGN KEY (`id_image`) REFERENCES `images`(`id`);
-------------------------------------------------------
INSERT INTO `admins` (`id`, `log`, `pass`, `firstname`, `lastname`, `id_article`, `id_image`) VALUES (NULL, 'lena', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'lena', 'cadet', '2', '2'), (NULL, 'gaelle', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'gaelle', 'kerforne', '1', '1');

-- --------------------------------------------------------
--
-- FOREIGN KEY de la table `articles`
--

ALTER TABLE `articles` ADD CONSTRAINT `fk_id_category` FOREIGN KEY (`id_category`) REFERENCES `categories`(`id`);

ALTER TABLE `articles` ADD CONSTRAINT `fk_id_image` FOREIGN KEY (`id_image`) REFERENCES `images`(`id`);

ALTER TABLE `articles` ADD CONSTRAINT `fk_id_admin` FOREIGN KEY (`id_admin`) REFERENCES `admins`(`id`);

--
-- RELATIONS POUR LA TABLE `articles`:
-- `id_category`
-- `categories` -> `id`
-- `id_image`
-- `images` -> `id`
--------------------------------------------------------------
INSERT INTO `articles`( `id`, `title`, `sentence`, `content`, `date`, `id-admin`, `id_category`, `id_image` ) VALUES( NULL, 'titre 1', 'descriptions de l\'image 1', ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, odit eligendi. Expedita quisquam tempore nihil fuga, quia maiores quos ut corporis hic, eligendi molestiae? Repellat esse cupiditate magni sed ut?', CURRENT_TIMESTAMP(), '1', '3', '3'), ( NULL, 'titre 2', 'descriptions de l\'image 2', ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, odit eligendi. Expedita quisquam tempore nihil fuga, quia maiores quos ut corporis hic, eligendi molestiae? Repellat esse cupiditate magni sed ut?', CURRENT_TIMESTAMP(), '1', '3', '3')
-- --------------------------------------------------------

--
-- FOREIGN KEY de la table `images`
--
ALTER TABLE `articles` ADD CONSTRAINT `fk_id_category` FOREIGN KEY (`id_category`) REFERENCES `categories`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT; 
ALTER TABLE `articles` ADD CONSTRAINT `fk_id_image` FOREIGN KEY (`id_image`) REFERENCES `images`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT; 
ALTER TABLE `articles` ADD CONSTRAINT `fk_id_admin` FOREIGN KEY (`id-admin`) REFERENCES `admins`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
--
-- RELATIONS POUR LA TABLE `images`:
-- `category_id`
-- `categories` -> `id`
-- `id_image`
-- `images` -> `id`
---- `id_articles`
-- `articles` -> `id`

--------------------------------------------------------------------------------

-- FOREIGN KEY de la table `magasins`
--

ALTER TABLE `magasins`ADD CONSTRAINT `fk_id_horaire` FOREIGN KEY(`id_horaire`) REFERENCES `horaires`(`id`);

ALTER TABLE `magasins` ADD CONSTRAINT `fk_id_image` FOREIGN KEY(`id_image`) REFERENCES `images`(`id`);

ALTER TABLE `magasins` ADD CONSTRAINT `fk_id_category` FOREIGN KEY(`id_category`) REFERENCES `categories`(`id`);
--
-- RELATIONS POUR LA TABLE `magasins`:
-- `id_horaire`
-- `horaires` -> `id`
-- `id_category`
-- `categories` -> `id`
-- `id_image`
-- `galerie` -> `id`
--

--
-- Déchargement des données de la table `shop`
--

INSERT INTO `magasins` (`id`, `nom`, `rue`, `code_postal`, `ville`, `tel`, `id_horaire`, `id_image`, `id_category`)
VALUES
(1,
'Bleuets Rose - Saint-Jean-Brévelay',
'2 Rue de buléon',
56660,
'Saint-Jean-Brévelay',
'02.97.60.41.65',
1,
1,
1),

(2,
'Bleuets Rose - Grand-champ',
'1 route de vannes',
56390,
' Grand-Champ', '
09.52.46.16.14',
2,
2,
2);

---------------------------------------------------------------------------------
-- FOREIGN KEY de la table `horaires`
--
ALTER TABLE `horaires` ADD CONSTRAINT `fk_id_shop` FOREIGN KEY(`id_shop`) REFERENCES `magasins`(`id`);
--
-- RELATIONS POUR LA TABLE `horaires`:
-- `id_shop`
-- `shop` -> `id`
--

--
-- Déchargement des données de la table `horaires`
--

INSERT INTO `horaires` (`id`, `open_start`, `open_end`, `id_shop`) VALUES
(1,'09:30:00', '12:00:00',1),
(2,'15:00:00', '19:15:00',1),
(3,'09:30:00', '12:30:00',1),
(4,'09:00:00', '12:00:00',2),
(5,'15:00:00', '19:15:00',2),
(6,'09:00:00', '12:30:00',2),
(7,'09:30:00', '12:30:00',2);

-- --------------------------------------------------------
