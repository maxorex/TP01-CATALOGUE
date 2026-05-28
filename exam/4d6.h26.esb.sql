-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : mariadb:3306
-- Généré le : mar. 09 mai 2023 à 23:54
-- Version du serveur : 10.11.2-MariaDB-1:10.11.2+maria~ubu2204
-- Version de PHP : 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `4d6.h26.esb`
--

CREATE DATABASE IF NOT EXISTS `4d6.h26.esb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

USE `4d6.h26.esb`;
-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `imagePath` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`, `imagePath`) VALUES
(1, 'Chess', '743-285x380.jpg'),
(2, 'World of Warcraft', '18122-285x380.jpg'),
(3, 'Guild Wars 2', '19357-285x380.jpg'),
(4, 'Minecraft', '27471-285x380.jpg'),
(5, 'Path of Exile', '29307-285x380.jpg'),
(6, 'Fortnite', '33214-285x380.jpg'),
(7, 'Go', '65360-285x380.jpg'),
(8, 'The Legends of Zelda - Breath of the Wild', '110758-285x380.jpg'),
(9, 'Stardew Valley', '490744-285x380.jpg'),
(10, 'Escape From Tarkov', '491931-285x380.jpg'),
(11, 'Just Chatting', '509658-285x380.jpg'),
(12, 'ASMR', '509659-285x380.jpg'),
(13, 'Temtem', '510336-285x380.jpg'),
(14, 'Teamfight Tactics', '513143-285x380.jpg'),
(15, 'Genshin Impact', '513181-285x380.jpg'),
(16, 'Legends of Runeterra', '514790-285x380.jpg'),
(17, 'Diablo IV', '515024-285x380.jpg'),
(18, 'Sports', '518203-285x380.jpg'),
(19, 'Honkai: Star Rail', '213930085-285x380.jpg'),
(20, 'Octopath Traveler II', '332885450-285x380.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `channels`
--

CREATE TABLE `channels` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `viewers` int(11) NOT NULL,
  `about` varchar(1024) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `streamUrl` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `channels`
--

INSERT INTO `channels` (`id`, `title`, `viewers`, `about`, `category_id`, `username`, `streamUrl`, `avatar`) VALUES
(1, 'Profound multi-state focus group', 3514, 'Alias sit consequuntur mollitia amet recusandae debitis officia eum. Minus exercitationem dolorum sunt fuga. Dolore magnam quis sapiente harum saepe iure quaerat expedita iure.', 7, 'Annabell61', 'https://www.youtube-nocookie.com/embed/DtgE378d4-U', 'https://assets.andromia.science/avatars/466.jpg'),
(2, 'Function-based clear-thinking core', 185, 'Laboriosam quo possimus eos. Unde corporis corrupti hic. Sapiente laborum autem.', 1, 'Preston15', 'https://www.youtube-nocookie.com/embed/fkO1ULW19HA', 'https://assets.andromia.science/avatars/571.jpg'),
(3, 'Polarised coherent open architecture', 3726, 'Eum impedit sapiente. Reiciendis sit iste similique in commodi saepe officia voluptatibus impedit. Rerum dicta repudiandae. Reprehenderit ab eius eos soluta non porro voluptates ea libero. Repudiandae ipsa illum dicta asperiores. Similique corporis iste quia qui voluptas nobis aliquid reiciendis ut.', 17, 'Sanford.Grady', 'https://www.youtube-nocookie.com/embed/8Ps9fSF4qcQ', 'https://assets.andromia.science/avatars/540.jpg'),
(4, 'Open-source context-sensitive capability', 776, 'Molestiae corporis modi vero aut. Odio architecto numquam quod temporibus maxime. Unde dolore quos. Eligendi dolor ad facilis at eos ut perferendis exercitationem odit. Id autem aut numquam eaque nobis quisquam.', 5, 'Eulalia98', 'https://www.youtube-nocookie.com/embed/LQeHUpeQKqY', 'https://assets.andromia.science/avatars/297.jpg'),
(5, 'Face to face fresh-thinking hardware', 2434, 'Alias possimus labore repudiandae totam. Dolore dolorum neque voluptates. Blanditiis eos veniam expedita a beatae. Error labore architecto maxime. Temporibus ipsam rem cupiditate.', 17, 'Serena_Kuvalis', 'https://www.youtube-nocookie.com/embed/KxwUy2S2n-Q', 'https://assets.andromia.science/avatars/635.jpg'),
(6, 'Optional bifurcated interface', 3885, 'Delectus voluptates modi sint optio. Repellendus enim exercitationem corporis temporibus ullam quos vero esse. Molestiae quas nam minus sequi dolorum. Eaque deserunt sequi a possimus soluta nobis quos. Eligendi at minus exercitationem. Molestiae delectus adipisci consectetur illo dolores adipisci numquam nostrum perspiciatis.', 12, 'Summer.Conroy', 'https://www.youtube-nocookie.com/embed/DtgE378d4-U', 'https://assets.andromia.science/avatars/890.jpg'),
(7, 'Organized executive moratorium', 3370, 'Illum assumenda distinctio alias iusto quas vero officiis accusamus quos. Exercitationem nostrum quaerat. Ipsa delectus dicta reiciendis odio.', 4, 'Dorris_Maggio', 'https://www.youtube-nocookie.com/embed/8Ps9fSF4qcQ', 'https://assets.andromia.science/avatars/562.jpg'),
(8, 'Virtual secondary methodology', 351, 'Soluta nobis nam tempore rerum quaerat ab. Fuga iusto omnis quasi et suscipit tempora similique eum incidunt. A quo nostrum facilis eligendi illo ipsam cum. Odio nihil consequatur labore placeat fugit quos exercitationem itaque. Eaque id iure minima harum a soluta id sunt.', 15, 'Owen.Grimes56', 'https://www.youtube-nocookie.com/embed/LQeHUpeQKqY', 'https://assets.andromia.science/avatars/131.jpg'),
(9, 'Reactive bifurcated ability', 4301, 'Quis labore exercitationem optio nisi atque. Natus vitae quibusdam amet nobis impedit laudantium illo ex. Accusantium iusto maxime pariatur veritatis consectetur iure. Velit ex iusto. Repudiandae dolor voluptate nam unde quae sed enim illum. Debitis aliquam accusantium.', 18, 'Anita_Olson96', 'https://www.youtube-nocookie.com/embed/fkO1ULW19HA', 'https://assets.andromia.science/avatars/1087.jpg'),
(10, 'Stand-alone coherent algorithm', 4455, 'Eligendi qui sint libero culpa quisquam saepe. Ad suscipit ratione magnam magnam dolor libero accusamus laborum. Reprehenderit sequi neque odio accusamus fugiat. Aperiam earum fuga iste dolores autem consectetur commodi repellat exercitationem. Quibusdam quia nobis corporis blanditiis. Totam eum voluptatum odit commodi consectetur quidem velit dolores voluptatem.', 11, 'Naomi.Cormier73', 'https://www.youtube-nocookie.com/embed/0jgUqxaSrvw', 'https://assets.andromia.science/avatars/98.jpg'),
(11, 'Triple-buffered executive system engine', 1956, 'Iusto enim sequi at repellendus laudantium corrupti molestias architecto voluptatum. Nobis facilis expedita aut inventore. Delectus doloremque tempora fuga pariatur. Nesciunt eius numquam.', 19, 'Sim6', 'https://www.youtube-nocookie.com/embed/fkO1ULW19HA', 'https://assets.andromia.science/avatars/202.jpg'),
(12, 'Total tangible secured line', 2308, 'Cumque nisi assumenda quisquam aliquam eligendi facere numquam. Alias nobis nulla sed nostrum libero. Voluptas sint nobis dolor nostrum.', 6, 'Alysson36', 'https://www.youtube-nocookie.com/embed/KxwUy2S2n-Q', 'https://assets.andromia.science/avatars/640.jpg'),
(13, 'Upgradable human-resource throughput', 1757, 'Odio odio cumque amet rem sit exercitationem aperiam. Labore quod at maiores eius hic. Quis placeat impedit cumque quam. Debitis sunt eos accusantium. Repudiandae ipsa qui totam quo sint.', 8, 'Syble.Quitzon', 'https://www.youtube-nocookie.com/embed/0jgUqxaSrvw', 'https://assets.andromia.science/avatars/194.jpg'),
(14, 'Integrated clear-thinking standardization', 913, 'Quod tenetur autem repellendus. Itaque ea iste. Nesciunt consequuntur veritatis ad excepturi similique. Aut nam nemo suscipit impedit. Reprehenderit et porro perferendis quam.', 7, 'Augustine47', 'https://www.youtube-nocookie.com/embed/fkO1ULW19HA', 'https://assets.andromia.science/avatars/236.jpg'),
(15, 'Proactive tangible access', 1433, 'Architecto iure accusantium. Voluptates voluptas qui necessitatibus ipsum rerum et labore. Deserunt minima nesciunt non provident voluptates explicabo. Sit omnis occaecati reiciendis.', 13, 'Wellington_Rodriguez', 'https://www.youtube-nocookie.com/embed/DtgE378d4-U', 'https://assets.andromia.science/avatars/197.jpg'),
(16, 'Progressive systemic middleware', 4481, 'Consectetur sit modi eaque occaecati illum eveniet porro in quod. Unde ut soluta esse commodi fugiat fuga saepe eveniet. Dolores recusandae fuga voluptatem natus nesciunt voluptas voluptatibus hic. Corporis nostrum quod officia voluptatem nostrum quasi voluptatem qui odio. Ipsam autem voluptate quas placeat unde nesciunt optio.', 13, 'Noel_Nicolas99', 'https://www.youtube-nocookie.com/embed/8Ps9fSF4qcQ', 'https://assets.andromia.science/avatars/1116.jpg'),
(17, 'Focused optimal utilisation', 2240, 'Optio aut praesentium voluptates quisquam omnis. Earum necessitatibus deserunt error facilis. Asperiores ipsum molestiae optio placeat blanditiis voluptatum. Molestias aliquid harum quasi ratione ea consectetur. Ipsum consequuntur explicabo nobis atque atque ullam odio ut tempore. Quibusdam totam temporibus.', 18, 'Stephen.Cremin', 'https://www.youtube-nocookie.com/embed/DtgE378d4-U', 'https://assets.andromia.science/avatars/1220.jpg'),
(18, 'Customer-focused mission-critical artificial intelligence', 3439, 'Veritatis aliquid tempore minus minus. Praesentium possimus illum non qui cumque unde veniam officiis. Vitae cum quasi dolore sequi voluptatibus. Iste vitae temporibus.', 7, 'Mckenzie89', 'https://www.youtube-nocookie.com/embed/8Ps9fSF4qcQ', 'https://assets.andromia.science/avatars/44.jpg'),
(19, 'Reduced client-driven hierarchy', 3004, 'Facere aliquid magnam quos tenetur repellendus. Explicabo asperiores iure corporis nemo quas esse. Doloremque ea officiis maxime sapiente labore reprehenderit debitis architecto. Explicabo nihil a hic animi enim quos. Debitis ipsam suscipit quidem expedita maxime ipsum. Accusamus corrupti iusto iure minima eos accusamus impedit modi saepe.', 19, 'Osbaldo.Pfannerstill', 'https://www.youtube-nocookie.com/embed/8Ps9fSF4qcQ', 'https://assets.andromia.science/avatars/986.jpg'),
(20, 'Managed even-keeled groupware', 828, 'Debitis facere doloremque illum nemo doloribus totam soluta. Ipsa earum nisi labore iste illum beatae quis hic. Incidunt atque adipisci sed placeat voluptatum facere id amet.', 2, 'Sherwood_Dibbert82', 'https://www.youtube-nocookie.com/embed/KxwUy2S2n-Q', 'https://assets.andromia.science/avatars/10.jpg'),
(21, 'Configurable high-level Graphic Interface', 2155, 'Deleniti maxime quod perferendis animi repellat non ad aperiam accusamus. Eos sapiente voluptas sit. Temporibus inventore aspernatur modi.', 16, 'Daisha_Dare', 'https://www.youtube-nocookie.com/embed/fkO1ULW19HA', 'https://assets.andromia.science/avatars/344.jpg'),
(22, 'Reverse-engineered disintermediate hardware', 439, 'Nemo neque molestiae dolor ducimus. Possimus molestias reprehenderit. Hic ex facere officiis error ab rerum esse.', 12, 'Karlie12', 'https://www.youtube-nocookie.com/embed/DtgE378d4-U', 'https://assets.andromia.science/avatars/540.jpg'),
(23, 'Organic tertiary monitoring', 3900, 'Vero repellat eos consectetur dicta. Deleniti similique saepe iusto ab. Quam sunt cumque cum architecto eius nisi.', 16, 'Eladio_Schneider63', 'https://www.youtube-nocookie.com/embed/8Ps9fSF4qcQ', 'https://assets.andromia.science/avatars/263.jpg'),
(24, 'Compatible hybrid leverage', 4632, 'Libero eum aliquam. Corporis vel dolor ullam consequuntur repudiandae laboriosam porro. Tenetur similique dicta. Corporis suscipit natus nihil.', 15, 'Amina.Kunde', 'https://www.youtube-nocookie.com/embed/KxwUy2S2n-Q', 'https://assets.andromia.science/avatars/1129.jpg'),
(25, 'Front-line homogeneous service-desk', 1262, 'Delectus nulla beatae odio doloribus provident temporibus doloremque. Rem enim deserunt distinctio. Excepturi eos corporis porro dicta necessitatibus deserunt itaque eos deleniti. Sint cumque voluptatum adipisci eligendi blanditiis nemo ea hic.', 18, 'Mathilde.Flatley', 'https://www.youtube-nocookie.com/embed/0jgUqxaSrvw', 'https://assets.andromia.science/avatars/268.jpg'),
(26, 'Synergized fault-tolerant solution', 4295, 'At occaecati neque magnam. Deleniti eius officiis perspiciatis possimus. Dicta temporibus delectus.', 17, 'Abby_Grimes73', 'https://www.youtube-nocookie.com/embed/KxwUy2S2n-Q', 'https://assets.andromia.science/avatars/856.jpg'),
(27, 'Monitored well-modulated architecture', 4797, 'Dolor rerum magnam officiis porro deleniti amet assumenda reiciendis quae. Maiores ipsam aspernatur enim earum quaerat laborum accusamus distinctio illo. Tenetur est debitis laudantium. Impedit illo explicabo id. At autem perferendis totam voluptatum dolores aspernatur maxime rem voluptatibus. Quaerat animi quo hic.', 13, 'Verlie3', 'https://www.youtube-nocookie.com/embed/DtgE378d4-U', 'https://assets.andromia.science/avatars/912.jpg'),
(28, 'Distributed mission-critical methodology', 4501, 'Quia pariatur deserunt velit vel modi. Perspiciatis nostrum dolor asperiores iusto quasi quidem illum. Dolor dolorem provident deleniti fuga. Iusto quasi dolores soluta molestiae. Repellendus tempora ab numquam eaque rem ex culpa.', 1, 'Gail_Fadel44', 'https://www.youtube-nocookie.com/embed/LQeHUpeQKqY', 'https://assets.andromia.science/avatars/679.jpg'),
(29, 'Down-sized contextually-based database', 4210, 'Maxime deleniti enim quos laudantium libero earum. Vel enim accusantium itaque voluptatibus. Dolores sapiente eligendi beatae dolorum consequuntur minima culpa temporibus illum.', 9, 'Domenico59', 'https://www.youtube-nocookie.com/embed/8Ps9fSF4qcQ', 'https://assets.andromia.science/avatars/1091.jpg'),
(30, 'Seamless static strategy', 4225, 'Voluptate corrupti deserunt quam omnis in. Nemo accusamus aliquam. Dolores accusamus nemo. Tempora ipsum adipisci aliquam veritatis aspernatur esse architecto doloremque distinctio. Dolores facilis nesciunt. Est animi non non itaque magnam nesciunt.', 18, 'Velma.Wiza66', 'https://www.youtube-nocookie.com/embed/KxwUy2S2n-Q', 'https://assets.andromia.science/avatars/428.jpg'),
(31, 'Pre-emptive empowering circuit', 4077, 'Autem voluptas commodi. Eaque sit ipsum voluptatem. Ipsum quis necessitatibus ad minus ad aperiam optio deleniti. Quae voluptatum cumque perferendis. Odio cupiditate nemo cum quidem dolores.', 1, 'Delphine.Pacocha', 'https://www.youtube-nocookie.com/embed/8Ps9fSF4qcQ', 'https://assets.andromia.science/avatars/418.jpg'),
(32, 'Assimilated transitional internet solution', 589, 'Accusamus magni laboriosam officia quidem. Culpa aliquam id dolores. Maiores delectus quam sit eaque fugiat iusto.', 4, 'Dianna_Ebert', 'https://www.youtube-nocookie.com/embed/fkO1ULW19HA', 'https://assets.andromia.science/avatars/198.jpg'),
(33, 'Cross-platform heuristic application', 4204, 'Reprehenderit necessitatibus natus. Nostrum accusantium id ad. Eligendi fugit odit explicabo error. Accusamus repudiandae quam velit rerum temporibus minima architecto. Delectus debitis minima minima cum et unde nesciunt culpa.', 15, 'Domenico_Kuhn82', 'https://www.youtube-nocookie.com/embed/0jgUqxaSrvw', 'https://assets.andromia.science/avatars/983.jpg'),
(34, 'Universal 5th generation local area network', 2854, 'Aliquid inventore mollitia eligendi dolores dignissimos ipsam. Reiciendis quasi omnis. Eaque debitis qui nesciunt. Dicta assumenda temporibus cumque aliquam eos magnam deleniti iure esse.', 20, 'Noemi_Lowe', 'https://www.youtube-nocookie.com/embed/DtgE378d4-U', 'https://assets.andromia.science/avatars/1232.jpg'),
(35, 'De-engineered fresh-thinking leverage', 2180, 'Quae tempora quis mollitia consectetur praesentium ex. Quibusdam reiciendis dolor veritatis. Magni nostrum unde ratione voluptate officiis tenetur molestiae. Aliquam laboriosam quasi unde itaque quia culpa.', 14, 'Johnathon.Douglas85', 'https://www.youtube-nocookie.com/embed/DtgE378d4-U', 'https://assets.andromia.science/avatars/1132.jpg'),
(36, 'Innovative analyzing parallelism', 22, 'Delectus minus quam aspernatur vitae dolores officiis architecto. Magni doloremque asperiores qui dolore tempore fugit voluptas. Esse optio enim omnis incidunt.', 9, 'Rubie82', 'https://www.youtube-nocookie.com/embed/0jgUqxaSrvw', 'https://assets.andromia.science/avatars/359.jpg'),
(37, 'De-engineered modular methodology', 4810, 'Praesentium quaerat cum temporibus ex facilis. Expedita illum assumenda provident officia eum atque architecto ullam. Dolores dolor quibusdam aut ducimus ab vitae. Non odio recusandae voluptate enim repudiandae nesciunt eveniet. Nobis nulla fuga amet aliquid.', 20, 'Ansley.Klocko72', 'https://www.youtube-nocookie.com/embed/fkO1ULW19HA', 'https://assets.andromia.science/avatars/1224.jpg'),
(38, 'Multi-tiered multi-tasking support', 4312, 'Quisquam quidem exercitationem aliquam explicabo sed explicabo optio blanditiis quasi. Cumque quia nihil hic assumenda expedita neque commodi saepe quam. Dolorum rem ducimus necessitatibus nam consequuntur a laborum vitae quisquam. Temporibus enim ullam beatae eius aspernatur dignissimos corrupti. Sed ducimus veniam aliquam. Quod natus veniam pariatur doloribus laudantium facilis.', 2, 'Green.Kreiger', 'https://www.youtube-nocookie.com/embed/0jgUqxaSrvw', 'https://assets.andromia.science/avatars/1107.jpg'),
(39, 'Front-line impactful emulation', 1070, 'In quod molestiae quod velit blanditiis ducimus ratione iste. Velit nostrum sint labore nesciunt accusantium in. Quae animi tempore maiores distinctio atque quo quis maxime inventore. Quae a deleniti sunt aspernatur sint possimus. Ea placeat magnam expedita recusandae architecto itaque facere.', 5, 'Jalyn50', 'https://www.youtube-nocookie.com/embed/DtgE378d4-U', 'https://assets.andromia.science/avatars/1173.jpg'),
(40, 'Operative 5th generation adapter', 3322, 'Nesciunt consequuntur pariatur dicta officia quod ut nostrum eaque. Repudiandae accusamus deserunt harum quas sint distinctio. Incidunt quod beatae placeat facere maiores non accusamus. Illum cum eum ratione consequatur similique nemo commodi enim rerum. Possimus consequuntur amet.', 3, 'Angel_Cremin', 'https://www.youtube-nocookie.com/embed/KxwUy2S2n-Q', 'https://assets.andromia.science/avatars/1179.jpg'),
(41, 'Configurable well-modulated help-desk', 4162, 'Impedit nulla cupiditate. A maxime sunt saepe illo. Nam blanditiis sint amet eveniet aperiam aut. Nostrum error deserunt laudantium totam est possimus perferendis corrupti. Exercitationem commodi dignissimos facilis earum magni. Totam neque quasi inventore aliquid magnam velit quam.', 3, 'Estevan80', 'https://www.youtube-nocookie.com/embed/LQeHUpeQKqY', 'https://assets.andromia.science/avatars/1141.jpg'),
(42, 'Digitized exuding matrices', 1344, 'Consequatur dolorum aspernatur repellendus repudiandae maxime. Dolor iure ab distinctio quibusdam aut repellat. Blanditiis corporis animi pariatur facere explicabo sed commodi. Quidem sit repellat aut ullam perspiciatis ducimus ut beatae. Natus doloribus tempora magnam quasi dolorum. Atque aliquid sapiente repudiandae consequuntur pariatur.', 7, 'Edwina4', 'https://www.youtube-nocookie.com/embed/8Ps9fSF4qcQ', 'https://assets.andromia.science/avatars/899.jpg'),
(43, 'Robust executive budgetary management', 4209, 'Temporibus aliquid hic incidunt aspernatur quas nisi blanditiis fugit sequi. Ut maiores assumenda magnam labore. Corrupti nisi pariatur tenetur corporis voluptate deserunt cumque.', 20, 'Meda.Kling34', 'https://www.youtube-nocookie.com/embed/LQeHUpeQKqY', 'https://assets.andromia.science/avatars/51.jpg'),
(44, 'Front-line heuristic contingency', 3651, 'Eum ab sint reprehenderit hic consequuntur. Accusamus dolore labore soluta ullam ipsam quam. Unde quam nemo expedita debitis aliquam doloribus magnam expedita. Perspiciatis illo necessitatibus dolor officiis incidunt. Mollitia reprehenderit quis reiciendis mollitia repellendus amet quisquam magnam.', 6, 'Imogene.Waters96', 'https://www.youtube-nocookie.com/embed/LQeHUpeQKqY', 'https://assets.andromia.science/avatars/1212.jpg'),
(45, 'Diverse next generation encoding', 3709, 'Libero reprehenderit dolor dolorum accusamus commodi deserunt. Voluptate enim nulla. Quae soluta minus qui. Nulla eos repellendus ratione sapiente quaerat ea vitae natus.', 9, 'Marjory.Weissnat', 'https://www.youtube-nocookie.com/embed/0jgUqxaSrvw', 'https://assets.andromia.science/avatars/268.jpg'),
(46, 'Pre-emptive global alliance', 701, 'Distinctio autem ducimus eius id. Aliquam quasi totam cupiditate dolorem. Distinctio unde pariatur dolorum aspernatur quaerat corrupti at labore. Atque atque reiciendis voluptatibus occaecati. Pariatur deleniti doloribus. Temporibus culpa exercitationem eaque sint ipsa eum ipsam.', 3, 'Myrtie_Ankunding65', 'https://www.youtube-nocookie.com/embed/LQeHUpeQKqY', 'https://assets.andromia.science/avatars/404.jpg'),
(47, 'Customer-focused static ability', 3929, 'Iusto nisi fuga. Officiis distinctio quasi cum quisquam officia. Commodi commodi occaecati.', 4, 'Frederique.Stiedemann77', 'https://www.youtube-nocookie.com/embed/KxwUy2S2n-Q', 'https://assets.andromia.science/avatars/700.jpg'),
(48, 'Centralized interactive application', 4025, 'Eaque excepturi reiciendis quod. Optio molestiae facilis dolores harum pariatur eveniet ipsa. Nobis facere eum nihil nulla ut illo saepe autem eligendi. Nesciunt repellendus dolore vitae quam. Iste voluptatem eaque reprehenderit perspiciatis praesentium.', 1, 'Ole_Okuneva', 'https://www.youtube-nocookie.com/embed/DtgE378d4-U', 'https://assets.andromia.science/avatars/1001.jpg'),
(49, 'Streamlined 3rd generation collaboration', 1525, 'Nostrum a autem tenetur consectetur laboriosam eligendi placeat cum. Dolor magni similique odio. Reiciendis ut nobis vitae quam velit vel quibusdam. Consequuntur mollitia iste ipsam veritatis commodi.', 17, 'Danika_Lind', 'https://www.youtube-nocookie.com/embed/8Ps9fSF4qcQ', 'https://assets.andromia.science/avatars/278.jpg'),
(50, 'Persevering static capability', 2904, 'Accusantium debitis cupiditate molestias. Ipsa nesciunt consectetur vel esse voluptates soluta fugiat iusto amet. Assumenda aut tempore saepe doloremque provident ad reiciendis voluptatum. Consectetur sed autem quia cupiditate nemo qui labore.', 6, 'Carlee69', 'https://www.youtube-nocookie.com/embed/KxwUy2S2n-Q', 'https://assets.andromia.science/avatars/552.jpg'),
(51, 'Sharable 3rd generation throughput', 1186, 'Nobis magnam quod facere eum. Laboriosam illum at molestiae quas nobis ab eveniet excepturi exercitationem. Eius debitis totam libero esse adipisci quos quibusdam. Vel nam incidunt a provident illum iure.', 20, 'Norbert.Effertz', 'https://www.youtube-nocookie.com/embed/0jgUqxaSrvw', 'https://assets.andromia.science/avatars/927.jpg'),
(52, 'Proactive exuding budgetary management', 772, 'Accusantium laborum quod quibusdam voluptate illo harum. Voluptate tempore in aut numquam dolores possimus beatae eveniet. Autem fuga iusto dolores fugiat ad vitae natus. Quasi provident delectus.', 18, 'Kamryn.Kerluke99', 'https://www.youtube-nocookie.com/embed/0jgUqxaSrvw', 'https://assets.andromia.science/avatars/680.jpg'),
(53, 'Digitized non-volatile function', 918, 'Accusamus eligendi similique omnis amet deleniti consectetur dicta perspiciatis. Ea optio in. Aut voluptatibus doloribus adipisci voluptates.', 17, 'Emilio_Boyer', 'https://www.youtube-nocookie.com/embed/DtgE378d4-U', 'https://assets.andromia.science/avatars/630.jpg'),
(54, 'Realigned regional structure', 4801, 'Nam eos quasi neque impedit voluptates. Provident dolores animi deserunt molestias corrupti illo perferendis quod. Repudiandae asperiores delectus aliquam laudantium odit omnis dolore reiciendis. Animi deleniti aut ullam animi inventore quos a. Nam odit eum harum hic eveniet culpa dolorum nam placeat. Alias distinctio ipsa laudantium praesentium est quam.', 14, 'Calista_Cole80', 'https://www.youtube-nocookie.com/embed/8Ps9fSF4qcQ', 'https://assets.andromia.science/avatars/430.jpg'),
(55, 'Reactive logistical database', 3381, 'Voluptatem veritatis hic perferendis voluptatum. Qui veniam velit amet. Dicta asperiores repellat eligendi nisi quos sunt at reprehenderit aliquid.', 17, 'Geovany84', 'https://www.youtube-nocookie.com/embed/fkO1ULW19HA', 'https://assets.andromia.science/avatars/765.jpg'),
(56, 'Fundamental encompassing analyzer', 1597, 'Earum quod totam aliquam similique assumenda praesentium. Modi sint sit explicabo autem eaque tenetur non ducimus inventore. Quae nostrum exercitationem.', 7, 'Stephen2', 'https://www.youtube-nocookie.com/embed/DtgE378d4-U', 'https://assets.andromia.science/avatars/316.jpg'),
(57, 'Customer-focused local initiative', 2004, 'Cupiditate maiores iusto aperiam. Nisi error reprehenderit omnis. Labore maiores vel illum natus.', 4, 'Linwood13', 'https://www.youtube-nocookie.com/embed/DtgE378d4-U', 'https://assets.andromia.science/avatars/522.jpg'),
(58, 'Re-engineered radical contingency', 50, 'Quo voluptatum id odio. Laborum corporis necessitatibus iste ut recusandae maxime repellat. Cupiditate libero architecto corporis corporis.', 4, 'Gretchen_Kilback', 'https://www.youtube-nocookie.com/embed/KxwUy2S2n-Q', 'https://assets.andromia.science/avatars/1080.jpg'),
(59, 'Quality-focused multi-tasking firmware', 1924, 'Repudiandae at fugit iure vel saepe adipisci reiciendis dolore. Quos voluptates et sit nesciunt ipsam rerum recusandae iusto. Eveniet iste quis atque impedit consequuntur deserunt autem praesentium reprehenderit. Enim sed natus illo itaque deleniti. Repudiandae tenetur quaerat.', 12, 'Ila.Medhurst', 'https://www.youtube-nocookie.com/embed/KxwUy2S2n-Q', 'https://assets.andromia.science/avatars/204.jpg'),
(60, 'Ameliorated multimedia definition', 3216, 'Natus occaecati animi. Dolore expedita perferendis exercitationem tempore aspernatur explicabo maxime delectus. Dolorum pariatur a dolores a a ullam aliquid. Sapiente consequuntur incidunt repudiandae ex quaerat provident consectetur voluptate. Reiciendis nesciunt vitae incidunt sunt nam illo fugit laborum.', 17, 'Delaney_Cronin8', 'https://www.youtube-nocookie.com/embed/LQeHUpeQKqY', 'https://assets.andromia.science/avatars/833.jpg'),
(61, 'Pre-emptive needs-based moderator', 693, 'Eius dicta laboriosam hic autem. Porro doloremque autem dolor ducimus accusamus quaerat earum sunt facere. Dolor veritatis facere impedit at eius unde ipsa delectus optio. Commodi temporibus ullam quidem distinctio vel nobis aperiam tempora similique. Sunt eum saepe placeat. Facilis temporibus recusandae excepturi.', 8, 'Effie82', 'https://www.youtube-nocookie.com/embed/8Ps9fSF4qcQ', 'https://assets.andromia.science/avatars/660.jpg'),
(62, 'Synchronised zero tolerance methodology', 1557, 'Eos repudiandae quis fugiat nostrum pariatur id provident. Ipsa alias repellat. Aut consequatur totam nesciunt sint repellat quaerat. Voluptatibus dolore omnis sit doloremque quibusdam blanditiis vitae.', 7, 'Jerod76', 'https://www.youtube-nocookie.com/embed/0jgUqxaSrvw', 'https://assets.andromia.science/avatars/542.jpg'),
(63, 'Compatible contextually-based project', 4613, 'Ipsa adipisci iusto ex ratione. Sequi porro saepe soluta perferendis corporis iure vel. Alias unde corrupti harum. Placeat ipsam enim iste. Occaecati iusto delectus. Consequuntur pariatur error non minus architecto deserunt pariatur.', 6, 'Tyson84', 'https://www.youtube-nocookie.com/embed/KxwUy2S2n-Q', 'https://assets.andromia.science/avatars/441.jpg'),
(64, 'Configurable mission-critical parallelism', 1635, 'Sunt nesciunt et consequatur iste facilis sequi amet. Suscipit repellendus quis ducimus. Accusantium accusantium autem sapiente quia nesciunt ipsam enim iste.', 14, 'Darryl.Reichert96', 'https://www.youtube-nocookie.com/embed/fkO1ULW19HA', 'https://assets.andromia.science/avatars/696.jpg'),
(65, 'Mandatory systemic algorithm', 2082, 'Quae quas ab ab. Deleniti reprehenderit tenetur. Dicta pariatur neque animi quia deleniti est.', 20, 'Valentin.Wintheiser5', 'https://www.youtube-nocookie.com/embed/LQeHUpeQKqY', 'https://assets.andromia.science/avatars/661.jpg'),
(66, 'Organic empowering encryption', 4734, 'Mollitia et esse nobis sequi velit iusto temporibus. Cum molestias natus assumenda cum facilis. Vitae ut sed quos at nam reiciendis accusamus ducimus vel.', 2, 'Christophe_Hintz', 'https://www.youtube-nocookie.com/embed/fkO1ULW19HA', 'https://assets.andromia.science/avatars/488.jpg'),
(67, 'Optimized encompassing flexibility', 1384, 'Laboriosam ipsa blanditiis harum eaque cumque libero officiis. Saepe dignissimos corrupti natus magni delectus perferendis magni. Assumenda voluptatibus voluptate non tempora quam ex eligendi voluptate temporibus. Quisquam aliquid velit ipsam.', 14, 'Abdul92', 'https://www.youtube-nocookie.com/embed/0jgUqxaSrvw', 'https://assets.andromia.science/avatars/145.jpg'),
(68, 'Implemented dynamic capability', 4573, 'Cum delectus explicabo dolorum libero officiis debitis qui sequi. Molestiae officia consequuntur enim dolores cupiditate reprehenderit qui id tenetur. Temporibus assumenda similique provident quos et quas.', 3, 'Loyce93', 'https://www.youtube-nocookie.com/embed/DtgE378d4-U', 'https://assets.andromia.science/avatars/377.jpg'),
(69, 'Balanced fresh-thinking implementation', 4301, 'A fuga corporis vel incidunt facere voluptates amet. Aliquid placeat incidunt aliquam facere. Consequuntur ipsa dignissimos amet omnis dolores modi eos tenetur.', 18, 'Alysa_Altenwerth', 'https://www.youtube-nocookie.com/embed/KxwUy2S2n-Q', 'https://assets.andromia.science/avatars/381.jpg'),
(70, 'User-friendly didactic solution', 2147, 'Harum quae quisquam asperiores voluptatum illo qui deserunt odio. Quisquam laboriosam suscipit. Minus at ea minus. Iste amet ullam quaerat est quis fuga velit. Dicta excepturi nostrum.', 7, 'Schuyler.Kling', 'https://www.youtube-nocookie.com/embed/fkO1ULW19HA', 'https://assets.andromia.science/avatars/906.jpg'),
(71, 'Right-sized user-facing data-warehouse', 4639, 'Quo magnam fuga. Omnis rerum quia qui recusandae impedit. Eius quae fuga ratione aliquid.', 12, 'Trinity.Thiel', 'https://www.youtube-nocookie.com/embed/0jgUqxaSrvw', 'https://assets.andromia.science/avatars/331.jpg'),
(72, 'Open-architected fresh-thinking info-mediaries', 4668, 'Error velit autem consequatur sint. Aut qui dignissimos iste libero libero nihil. Culpa rerum fugiat quasi nesciunt voluptatem.', 8, 'Alysa52', 'https://www.youtube-nocookie.com/embed/0jgUqxaSrvw', 'https://assets.andromia.science/avatars/721.jpg'),
(73, 'Balanced homogeneous superstructure', 591, 'Officiis in nam dolorem at. Dolorum laudantium consequuntur alias doloremque itaque odio impedit facere. Natus veniam sunt quidem fuga aliquid.', 3, 'Lila51', 'https://www.youtube-nocookie.com/embed/fkO1ULW19HA', 'https://assets.andromia.science/avatars/589.jpg'),
(74, 'Fully-configurable 3rd generation help-desk', 4449, 'Ea corrupti ad molestiae ratione quisquam rem veniam perferendis. Distinctio rem aspernatur dolorum minus ipsam incidunt commodi sequi velit. Quos nisi distinctio quibusdam placeat accusantium suscipit porro perspiciatis.', 13, 'Addison34', 'https://www.youtube-nocookie.com/embed/0jgUqxaSrvw', 'https://assets.andromia.science/avatars/1132.jpg'),
(75, 'Networked scalable model', 2138, 'Earum reprehenderit soluta quae molestias illo nobis. Placeat dolore tempora fugit ipsam beatae consequuntur. Magnam velit distinctio.', 14, 'Marcia.Emard83', 'https://www.youtube-nocookie.com/embed/fkO1ULW19HA', 'https://assets.andromia.science/avatars/210.jpg'),
(76, 'Reactive bandwidth-monitored customer loyalty', 3781, 'Harum eaque ab cupiditate eligendi sit itaque omnis alias. Vel necessitatibus voluptates quasi illum suscipit magnam numquam. Ducimus quam laboriosam possimus consectetur molestiae minima. Ipsam nesciunt aspernatur nemo in suscipit necessitatibus quisquam. Iste reprehenderit placeat mollitia veritatis et voluptatem accusantium.', 8, 'Hilario.Douglas', 'https://www.youtube-nocookie.com/embed/DtgE378d4-U', 'https://assets.andromia.science/avatars/293.jpg'),
(77, 'Total bandwidth-monitored open system', 113, 'Vitae debitis sequi aspernatur. Delectus nam ducimus reprehenderit delectus rerum ullam. Eligendi ipsam eos odio possimus accusantium aliquam ad rerum officiis. Vitae esse iusto ea fuga molestiae. Hic corporis expedita.', 12, 'Dedrick.Rowe', 'https://www.youtube-nocookie.com/embed/fkO1ULW19HA', 'https://assets.andromia.science/avatars/1027.jpg'),
(78, 'Right-sized bottom-line instruction set', 3245, 'Pariatur vitae eveniet. Laboriosam ad similique beatae dolor. Cumque veniam voluptatum enim illo quisquam harum iste suscipit eius.', 7, 'Alycia.Schmitt12', 'https://www.youtube-nocookie.com/embed/DtgE378d4-U', 'https://assets.andromia.science/avatars/712.jpg'),
(79, 'Total systematic core', 394, 'Vero minus expedita rem officia nam. Quasi officiis eos natus fugiat iure pariatur maxime doloremque sit. Expedita esse cumque beatae. Possimus dicta qui animi quos ipsam et enim ex. Iste tenetur minima totam tempore quidem dicta ratione iste.', 12, 'Freida.Lind96', 'https://www.youtube-nocookie.com/embed/0jgUqxaSrvw', 'https://assets.andromia.science/avatars/1183.jpg'),
(80, 'Extended dynamic access', 686, 'Amet et officia saepe. Eveniet a deleniti vitae alias eveniet enim error ullam quia. Eos tenetur sunt harum porro officia tenetur laborum. Praesentium voluptates aut ea numquam eveniet dolor.', 18, 'Cleveland_Zemlak56', 'https://www.youtube-nocookie.com/embed/0jgUqxaSrvw', 'https://assets.andromia.science/avatars/150.jpg'),
(81, 'Distributed scalable matrices', 4340, 'Aliquam ad saepe quae mollitia consectetur numquam dicta. Soluta quod modi porro ex eaque perspiciatis deserunt vitae ipsa. Molestiae esse esse.', 4, 'Jaren61', 'https://www.youtube-nocookie.com/embed/LQeHUpeQKqY', 'https://assets.andromia.science/avatars/1043.jpg'),
(82, 'Up-sized full-range moderator', 2042, 'Sunt omnis minima ducimus dolore architecto. Voluptatem ipsum vitae voluptatibus rem reprehenderit voluptatum omnis accusamus. Modi dolorem distinctio animi eveniet fugit esse. Deleniti sunt fugiat ex est ad doloribus voluptatibus ad. Natus alias atque id impedit maiores laboriosam excepturi.', 10, 'Colin.Johns', 'https://www.youtube-nocookie.com/embed/DtgE378d4-U', 'https://assets.andromia.science/avatars/723.jpg'),
(83, 'Versatile interactive algorithm', 2840, 'Sapiente alias rerum quam cum rem laudantium soluta excepturi laboriosam. Cupiditate mollitia ea aut eligendi cum quisquam. Cupiditate quas omnis odit deserunt labore nihil.', 12, 'Aric20', 'https://www.youtube-nocookie.com/embed/DtgE378d4-U', 'https://assets.andromia.science/avatars/833.jpg'),
(84, 'Universal dynamic methodology', 2376, 'Exercitationem dolore repellat alias dignissimos et iste. Est molestias porro. Reiciendis assumenda adipisci necessitatibus sed placeat. Voluptate eligendi commodi vero. Nisi quidem aliquid consequuntur totam fugit.', 11, 'Reilly39', 'https://www.youtube-nocookie.com/embed/KxwUy2S2n-Q', 'https://assets.andromia.science/avatars/593.jpg'),
(85, 'Reverse-engineered multi-tasking alliance', 4225, 'Quam quam expedita expedita. Eos dolorum magnam odio qui omnis velit sapiente molestias. Exercitationem a enim quisquam quod quaerat perspiciatis.', 9, 'Kiley.Farrell', 'https://www.youtube-nocookie.com/embed/KxwUy2S2n-Q', 'https://assets.andromia.science/avatars/646.jpg'),
(86, 'Proactive zero tolerance software', 4832, 'Autem laudantium ipsa quas vero nostrum facilis rerum quaerat aliquid. Aspernatur voluptas tempore totam eaque mollitia ut facere. Mollitia fugit recusandae dolore consequatur voluptatem deserunt. Delectus repellendus ipsam.', 18, 'Kenya7', 'https://www.youtube-nocookie.com/embed/fkO1ULW19HA', 'https://assets.andromia.science/avatars/1038.jpg'),
(87, 'Self-enabling client-driven protocol', 4578, 'Quidem harum excepturi. Delectus impedit mollitia adipisci itaque. Velit id doloribus perferendis vel minus sit ea. Tenetur voluptas rerum quis perspiciatis illo fugit beatae ducimus. Aliquid incidunt excepturi libero illum perspiciatis. Iste dolores eum omnis totam rem consequuntur non sunt sit.', 13, 'Trinity45', 'https://www.youtube-nocookie.com/embed/LQeHUpeQKqY', 'https://assets.andromia.science/avatars/1004.jpg'),
(88, 'Expanded non-volatile implementation', 2620, 'Quis earum odio provident sint et totam ducimus magnam. Laudantium atque nam temporibus dolore repudiandae. Tempore dolore fugit consectetur quos corrupti distinctio culpa minus optio. Sunt omnis pariatur omnis cumque quisquam deleniti provident. At expedita maiores esse. Autem necessitatibus ipsam.', 2, 'Leanne_Conroy', 'https://www.youtube-nocookie.com/embed/fkO1ULW19HA', 'https://assets.andromia.science/avatars/353.jpg'),
(89, 'Networked secondary orchestration', 4340, 'Sequi ullam delectus. Magnam dolore et distinctio id rem magnam facilis. Quo laudantium nihil eius rerum. Numquam alias dolor maiores perferendis autem iusto necessitatibus quis. Quod dicta qui laboriosam odit tempore. Temporibus tenetur molestias libero.', 2, 'Dangelo_OHara', 'https://www.youtube-nocookie.com/embed/KxwUy2S2n-Q', 'https://assets.andromia.science/avatars/513.jpg'),
(90, 'Distributed demand-driven definition', 4243, 'Molestias dolores sunt iure asperiores molestiae. Quas veritatis sunt consequatur minus provident illum deleniti optio. Omnis odio doloremque eligendi. Repudiandae fugiat ipsum. Autem est corrupti itaque mollitia libero suscipit nemo exercitationem incidunt. Voluptates saepe reprehenderit.', 3, 'Henri57', 'https://www.youtube-nocookie.com/embed/0jgUqxaSrvw', 'https://assets.andromia.science/avatars/947.jpg'),
(91, 'User-centric object-oriented core', 4996, 'Quidem nulla dignissimos eius. Suscipit mollitia quos temporibus deleniti fugit explicabo reiciendis sunt laudantium. Facere numquam alias. Expedita beatae animi suscipit laboriosam eligendi explicabo cupiditate accusamus amet. Quasi porro distinctio. Nihil molestiae odio ut quae omnis aspernatur provident dolorum illum.', 18, 'Reuben.Kuhlman', 'https://www.youtube-nocookie.com/embed/DtgE378d4-U', 'https://assets.andromia.science/avatars/688.jpg'),
(92, 'Ergonomic context-sensitive functionalities', 3021, 'Occaecati corrupti accusantium rerum itaque quas deserunt iusto possimus. Dolore iusto odio deleniti itaque adipisci. Minus unde consectetur labore necessitatibus corporis ex ipsum cupiditate occaecati.', 19, 'Cale_Wisozk', 'https://www.youtube-nocookie.com/embed/LQeHUpeQKqY', 'https://assets.andromia.science/avatars/805.jpg'),
(93, 'Expanded reciprocal instruction set', 3381, 'Consequuntur omnis provident voluptatum et. Quibusdam natus architecto. Dolorum eius culpa.', 7, 'Presley.Heidenreich', 'https://www.youtube-nocookie.com/embed/DtgE378d4-U', 'https://assets.andromia.science/avatars/209.jpg'),
(94, 'Face to face encompassing support', 124, 'Numquam sed iure fugit delectus dolorem in suscipit. Velit et asperiores inventore illum debitis. Consectetur nemo et repellendus at quisquam esse nesciunt ipsum voluptates.', 6, 'Jaylin65', 'https://www.youtube-nocookie.com/embed/KxwUy2S2n-Q', 'https://assets.andromia.science/avatars/330.jpg'),
(95, 'Inverse 5th generation infrastructure', 784, 'Corrupti inventore officia accusamus voluptatum. Illum cumque mollitia minus similique explicabo fugiat quis minima unde. Consectetur illum ducimus impedit voluptatum placeat laborum cupiditate. Placeat occaecati eveniet odio aperiam. Vel expedita esse optio nemo minus numquam.', 11, 'Zaria40', 'https://www.youtube-nocookie.com/embed/fkO1ULW19HA', 'https://assets.andromia.science/avatars/79.jpg'),
(96, 'Public-key value-added secured line', 3339, 'Quidem libero quasi blanditiis totam sunt voluptas voluptatum. Ratione eius facere veniam placeat itaque aliquam deserunt iste minus. Expedita ipsam magni quisquam nobis ab est dolorum. Minus dolorum maiores praesentium iste iste suscipit tenetur consectetur et. Quisquam delectus ab molestiae.', 18, 'Anahi.Kuhn', 'https://www.youtube-nocookie.com/embed/fkO1ULW19HA', 'https://assets.andromia.science/avatars/214.jpg'),
(97, 'Visionary needs-based frame', 4587, 'Quam ducimus inventore veritatis suscipit ex nam veritatis blanditiis explicabo. Iusto consectetur quam. Repudiandae quibusdam pariatur ab id eveniet tempore eligendi eius. Iusto inventore corrupti magnam sequi atque natus corrupti. Iusto porro veritatis culpa sed deleniti voluptatibus quasi debitis quis.', 18, 'Cristian.Bednar23', 'https://www.youtube-nocookie.com/embed/8Ps9fSF4qcQ', 'https://assets.andromia.science/avatars/1011.jpg'),
(98, 'Customer-focused heuristic circuit', 2078, 'Aliquam sit molestias quaerat. Velit excepturi sunt dolor omnis ipsam iste. Suscipit libero aliquam modi a neque debitis est voluptatibus blanditiis. Nam fugit beatae saepe quibusdam itaque. Minus et occaecati quod a.', 16, 'Dorian74', 'https://www.youtube-nocookie.com/embed/LQeHUpeQKqY', 'https://assets.andromia.science/avatars/546.jpg'),
(99, 'Diverse heuristic benchmark', 2412, 'Ipsa eum expedita cupiditate amet est est amet qui voluptatum. Deserunt dolorem facere in doloremque quaerat adipisci iste. Culpa cupiditate atque accusantium quibusdam ipsam accusamus et ex molestias.', 9, 'Elyssa90', 'https://www.youtube-nocookie.com/embed/fkO1ULW19HA', 'https://assets.andromia.science/avatars/683.jpg'),
(100, 'Profit-focused attitude-oriented Graphic Interface', 4978, 'Natus laudantium placeat sunt harum beatae. Fugiat cum non alias. Aperiam laborum adipisci reiciendis alias iusto.', 6, 'Franz.Ruecker56', 'https://www.youtube-nocookie.com/embed/0jgUqxaSrvw', 'https://assets.andromia.science/avatars/1023.jpg'),
(101, 'Exclusive solution-oriented service-desk', 2699, 'Corrupti consequatur occaecati porro reiciendis. Vitae doloremque maiores quae placeat pariatur officia. Voluptatum in adipisci. Fugiat at id dolore pariatur eveniet asperiores atque quae.', 18, 'Kaelyn.Ratke', 'https://www.youtube-nocookie.com/embed/8Ps9fSF4qcQ', 'https://assets.andromia.science/avatars/1030.jpg'),
(102, 'Cross-platform object-oriented task-force', 2220, 'Nisi voluptates debitis labore aperiam occaecati fuga. Enim illum aliquam quod praesentium maiores doloremque quae dolores dignissimos. Minima odio nemo laudantium possimus cum rem.', 8, 'Margarett42', 'https://www.youtube-nocookie.com/embed/KxwUy2S2n-Q', 'https://assets.andromia.science/avatars/283.jpg'),
(103, 'Down-sized 6th generation data-warehouse', 2497, 'Quaerat necessitatibus placeat. Veritatis minima placeat corporis ex accusantium sit minus nobis. Minus recusandae itaque inventore omnis. Numquam ducimus voluptatibus qui omnis quis molestias aperiam. Quidem sed voluptatem molestiae iste consequuntur.', 20, 'Jaren_Weimann', 'https://www.youtube-nocookie.com/embed/LQeHUpeQKqY', 'https://assets.andromia.science/avatars/1125.jpg'),
(104, 'Optional local standardization', 4808, 'Voluptas magni temporibus voluptas dicta dignissimos illum eos asperiores optio. Dicta nobis enim. Vero dolorem architecto repellendus laboriosam rerum voluptate. Adipisci voluptatum hic illo nobis excepturi laborum sequi magnam.', 17, 'Lyla68', 'https://www.youtube-nocookie.com/embed/8Ps9fSF4qcQ', 'https://assets.andromia.science/avatars/499.jpg'),
(105, 'Pre-emptive global strategy', 3169, 'Nulla illum maiores. Harum repellendus laudantium. Illo error animi deleniti. Hic unde ipsum quasi sit doloribus.', 14, 'Trever87', 'https://www.youtube-nocookie.com/embed/LQeHUpeQKqY', 'https://assets.andromia.science/avatars/650.jpg'),
(106, 'Persevering radical focus group', 2345, 'Possimus quam minus facere itaque. Deserunt at tempore molestias accusantium animi quod repellendus ut. Alias quas repudiandae rerum alias quis. Consectetur eaque earum necessitatibus assumenda. Saepe eos ipsa cupiditate dicta. Necessitatibus natus perspiciatis fugiat tenetur aperiam exercitationem sit.', 20, 'Tod45', 'https://www.youtube-nocookie.com/embed/8Ps9fSF4qcQ', 'https://assets.andromia.science/avatars/530.jpg'),
(107, 'Public-key full-range encryption', 508, 'Accusamus sapiente ab repellendus reiciendis atque facere tenetur. Ipsam omnis nobis. Eos architecto id atque. Enim tenetur tempore et similique eligendi.', 8, 'Korbin_Trantow19', 'https://www.youtube-nocookie.com/embed/KxwUy2S2n-Q', 'https://assets.andromia.science/avatars/206.jpg'),
(108, 'Object-based context-sensitive project', 767, 'Blanditiis voluptatem architecto fuga exercitationem facere. Earum unde quas ut quam cupiditate quis. Error est magni voluptatibus labore quidem possimus et quidem dicta. Voluptas minus explicabo magnam earum modi sequi ea ducimus. Odio sed tenetur amet explicabo. Rem labore cum porro hic animi cum cupiditate quos expedita.', 4, 'Garfield26', 'https://www.youtube-nocookie.com/embed/LQeHUpeQKqY', 'https://assets.andromia.science/avatars/1165.jpg'),
(109, 'Monitored user-facing middleware', 2703, 'Corrupti at aliquid distinctio. Vero repudiandae molestiae laudantium voluptates qui molestias incidunt enim. Quod minus quas sit impedit dolor tenetur. Non sunt dolorem dolorum suscipit ratione quia totam.', 5, 'Oliver.Schowalter34', 'https://www.youtube-nocookie.com/embed/fkO1ULW19HA', 'https://assets.andromia.science/avatars/468.jpg'),
(110, 'Secured bottom-line synergy', 2496, 'Aliquam mollitia doloribus. Fugiat natus perspiciatis saepe ratione quidem. Assumenda repudiandae ipsum dicta aperiam in ipsa.', 10, 'Ivory_Beier33', 'https://www.youtube-nocookie.com/embed/0jgUqxaSrvw', 'https://assets.andromia.science/avatars/633.jpg'),
(111, 'Quality-focused asynchronous access', 4264, 'Laboriosam tempora quos libero. Numquam debitis iste dolor temporibus eligendi praesentium ex earum error. Veritatis quos incidunt totam perspiciatis aperiam voluptatibus. Itaque quibusdam velit excepturi provident quo. Sunt blanditiis necessitatibus corporis. Quas laudantium cumque quam repudiandae.', 13, 'Maximus_Larkin24', 'https://www.youtube-nocookie.com/embed/DtgE378d4-U', 'https://assets.andromia.science/avatars/951.jpg'),
(112, 'Pre-emptive 3rd generation algorithm', 4261, 'Neque harum ut recusandae quos dolores accusamus. Reprehenderit nemo iste alias asperiores doloremque perferendis. Ullam quae aperiam ad quis ut saepe minima itaque.', 6, 'Xzavier.Fadel84', 'https://www.youtube-nocookie.com/embed/DtgE378d4-U', 'https://assets.andromia.science/avatars/90.jpg'),
(113, 'Front-line motivating parallelism', 1780, 'Quas impedit totam quo voluptas animi quis dicta expedita. Tempora animi facere ad nam doloremque. Laborum eveniet libero ipsam.', 9, 'Kari.Wunsch65', 'https://www.youtube-nocookie.com/embed/0jgUqxaSrvw', 'https://assets.andromia.science/avatars/180.jpg'),
(114, 'Universal tertiary knowledge user', 1811, 'Dignissimos quisquam esse illum sunt. Maiores eaque iure ad dolorem quae molestiae. Enim provident qui quam dignissimos placeat veniam ab odit impedit. Nostrum aut libero quidem saepe suscipit. Fugiat dolores distinctio. Placeat praesentium voluptatum blanditiis eligendi.', 11, 'Santino68', 'https://www.youtube-nocookie.com/embed/KxwUy2S2n-Q', 'https://assets.andromia.science/avatars/976.jpg'),
(115, 'Multi-lateral empowering hierarchy', 2732, 'Repudiandae voluptate quas numquam officia exercitationem aspernatur. At ratione voluptatem quos quod. Incidunt alias reiciendis inventore necessitatibus. Magnam cumque asperiores aliquid. Ea rem vero libero officiis provident. Laborum ullam explicabo expedita atque quibusdam quod rem quaerat.', 14, 'Loma20', 'https://www.youtube-nocookie.com/embed/8Ps9fSF4qcQ', 'https://assets.andromia.science/avatars/126.jpg'),
(116, 'Intuitive eco-centric neural-net', 3911, 'Vero quam praesentium autem porro dignissimos. At consequuntur illo ipsum distinctio perspiciatis maxime debitis debitis. Ratione praesentium libero. Minus impedit enim nihil. Magni ea quaerat.', 17, 'Caitlyn.Cormier', 'https://www.youtube-nocookie.com/embed/DtgE378d4-U', 'https://assets.andromia.science/avatars/1091.jpg'),
(117, 'User-friendly needs-based interface', 4748, 'Nobis beatae enim sed libero sequi debitis aliquam. Fuga voluptas sed veritatis. Est aperiam quibusdam dolorem explicabo ratione est blanditiis architecto. Dolorem quae nemo ullam quis accusantium.', 7, 'Rosanna.Roberts', 'https://www.youtube-nocookie.com/embed/8Ps9fSF4qcQ', 'https://assets.andromia.science/avatars/766.jpg'),
(118, 'Business-focused neutral customer loyalty', 421, 'Harum quam rem voluptatem consequatur sint perferendis minus iusto. Totam laboriosam numquam aspernatur repellat. Officia corrupti ea assumenda deserunt illum. Deserunt enim dolor et repudiandae incidunt consectetur. Aliquid dolore laudantium porro maxime recusandae voluptatem cupiditate exercitationem quisquam.', 8, 'Thelma60', 'https://www.youtube-nocookie.com/embed/8Ps9fSF4qcQ', 'https://assets.andromia.science/avatars/672.jpg'),
(119, 'Robust background flexibility', 1762, 'Laudantium aut dolor sapiente pariatur nulla itaque nam. Id adipisci maxime et. Ex quibusdam ea minus et distinctio error cumque maxime. Beatae vero neque assumenda earum porro ab rem ducimus. Repellat ratione aliquam amet dicta quidem aperiam placeat pariatur quia.', 17, 'Lionel3', 'https://www.youtube-nocookie.com/embed/LQeHUpeQKqY', 'https://assets.andromia.science/avatars/1115.jpg'),
(120, 'Virtual impactful knowledge user', 4504, 'Adipisci nostrum ipsum sapiente incidunt. Vel iure quas odit ipsam beatae ipsam laborum iste. Eligendi numquam praesentium porro nisi quo fugiat numquam soluta. Atque minus ipsum in voluptate necessitatibus earum quibusdam unde. Nam dolores quidem neque nostrum ut molestias tempore laborum commodi.', 12, 'Woodrow.McCullough13', 'https://www.youtube-nocookie.com/embed/DtgE378d4-U', 'https://assets.andromia.science/avatars/75.jpg'),
(121, 'Quality-focused multi-state concept', 255, 'Reprehenderit corrupti laudantium enim harum. Adipisci repellat est odio odit autem repellat fugiat quos id. Magnam nisi nisi veniam rem modi.', 13, 'Urban51', 'https://www.youtube-nocookie.com/embed/LQeHUpeQKqY', 'https://assets.andromia.science/avatars/415.jpg'),
(122, 'Versatile intangible utilisation', 797, 'Autem debitis deleniti. Blanditiis incidunt amet deleniti debitis nemo voluptatum fuga vero. Molestias sit aperiam. Praesentium sunt laboriosam velit quo.', 4, 'Anabel_Kihn13', 'https://www.youtube-nocookie.com/embed/LQeHUpeQKqY', 'https://assets.andromia.science/avatars/626.jpg'),
(123, 'Multi-lateral 6th generation open architecture', 2793, 'Doloremque vitae non. Suscipit unde nemo delectus porro a. Tempora cumque neque quidem sequi voluptates reprehenderit accusantium officiis. Quo occaecati omnis perspiciatis voluptatum velit. Iure commodi distinctio inventore doloremque ipsum molestiae libero vero.', 13, 'Enid_Powlowski88', 'https://www.youtube-nocookie.com/embed/LQeHUpeQKqY', 'https://assets.andromia.science/avatars/89.jpg'),
(124, 'Expanded regional infrastructure', 214, 'Et voluptatem similique dolor iste dolorum. Autem voluptatibus iste aliquid distinctio quasi officiis. Ratione incidunt voluptatum itaque facere quis provident labore voluptate beatae. Veniam voluptates at nulla adipisci fuga exercitationem. Voluptate quia architecto velit vero ullam.', 5, 'Wilber74', 'https://www.youtube-nocookie.com/embed/0jgUqxaSrvw', 'https://assets.andromia.science/avatars/135.jpg'),
(125, 'Monitored zero administration forecast', 524, 'Sed eligendi quod quibusdam dolorum vitae omnis in ea. Modi ea rerum debitis ex. Ipsum amet modi facere quaerat.', 19, 'Annetta.Paucek', 'https://www.youtube-nocookie.com/embed/LQeHUpeQKqY', 'https://assets.andromia.science/avatars/443.jpg'),
(126, 'Operative asynchronous matrices', 1, 'Saepe sunt necessitatibus sint. At amet distinctio. Voluptatum ratione voluptatum natus eum tempora. Aut aut magnam nobis veniam ad dicta.', 2, 'Rebecca.Goyette', 'https://www.youtube-nocookie.com/embed/LQeHUpeQKqY', 'https://assets.andromia.science/avatars/93.jpg'),
(127, 'Enterprise-wide contextually-based local area network', 603, 'Est recusandae assumenda. Id recusandae asperiores a voluptatum. Optio maxime magni facilis sunt nemo. Laudantium quasi sapiente. Quaerat hic iusto corrupti minima dicta fugiat exercitationem explicabo.', 17, 'Newell.Ledner4', 'https://www.youtube-nocookie.com/embed/fkO1ULW19HA', 'https://assets.andromia.science/avatars/902.jpg');
INSERT INTO `channels` (`id`, `title`, `viewers`, `about`, `category_id`, `username`, `streamUrl`, `avatar`) VALUES
(128, 'Quality-focused tertiary instruction set', 1689, 'Officia necessitatibus at voluptatibus magni distinctio fugit. Possimus harum pariatur odit dolorum consequuntur illum repellendus. Velit cumque amet error. Ea repellat hic consequatur nobis dolorem. Hic deleniti sint animi corrupti blanditiis eos.', 2, 'Maverick40', 'https://www.youtube-nocookie.com/embed/DtgE378d4-U', 'https://assets.andromia.science/avatars/1120.jpg'),
(129, 'Persevering holistic help-desk', 1477, 'Quibusdam aut ipsam pariatur error. Dicta officiis molestias omnis. Sit at rerum exercitationem molestias sequi et sed.', 4, 'Derek98', 'https://www.youtube-nocookie.com/embed/fkO1ULW19HA', 'https://assets.andromia.science/avatars/819.jpg'),
(130, 'Extended actuating emulation', 2680, 'Et distinctio similique reprehenderit. Recusandae placeat sed odit asperiores eaque. Iure animi accusantium doloribus sed. Placeat dolor numquam perspiciatis sint eligendi fugit veritatis. Quas ratione voluptatem assumenda incidunt quae id sapiente aliquam.', 17, 'Clara50', 'https://www.youtube-nocookie.com/embed/KxwUy2S2n-Q', 'https://assets.andromia.science/avatars/1123.jpg'),
(131, 'Intuitive multi-state adapter', 1957, 'Consequuntur nihil id autem necessitatibus ex maiores eius. At quo blanditiis reprehenderit voluptatibus aut enim asperiores reiciendis. Sint aliquid in asperiores itaque animi nihil. Numquam nulla nobis consectetur dicta recusandae occaecati quisquam dolor sequi.', 17, 'Torrey_Willms99', 'https://www.youtube-nocookie.com/embed/DtgE378d4-U', 'https://assets.andromia.science/avatars/294.jpg'),
(132, 'Ergonomic attitude-oriented definition', 3784, 'Inventore a vel nisi provident. Incidunt illum accusantium ex ipsa. Ullam unde exercitationem vel fuga sapiente vitae aliquid incidunt sequi. Cupiditate molestias unde blanditiis nam corrupti sapiente. Dolorem hic iure. Atque rerum quibusdam occaecati.', 8, 'Reginald.Mann', 'https://www.youtube-nocookie.com/embed/LQeHUpeQKqY', 'https://assets.andromia.science/avatars/78.jpg'),
(133, 'Visionary mobile portal', 2010, 'Animi ut exercitationem voluptatibus. Veritatis assumenda repellat inventore cumque magnam hic. Rerum rem laudantium.', 8, 'Marcus_Langosh', 'https://www.youtube-nocookie.com/embed/KxwUy2S2n-Q', 'https://assets.andromia.science/avatars/698.jpg'),
(134, 'Business-focused incremental forecast', 1244, 'Minus explicabo blanditiis. Repellendus quis provident eaque quasi doloribus minima eius. Eum esse inventore nam inventore facere expedita neque. Consectetur ut perferendis labore commodi quos vitae minima in. Non explicabo molestias assumenda ullam cum.', 1, 'Fatima_Douglas', 'https://www.youtube-nocookie.com/embed/8Ps9fSF4qcQ', 'https://assets.andromia.science/avatars/101.jpg'),
(135, 'Organic intangible process improvement', 4679, 'Asperiores possimus dolorum beatae. Aliquid similique non est iure tenetur officia vitae. Aliquam animi neque praesentium veritatis voluptas molestias tempora.', 6, 'Olen.Parisian', 'https://www.youtube-nocookie.com/embed/KxwUy2S2n-Q', 'https://assets.andromia.science/avatars/1105.jpg'),
(136, 'Networked object-oriented portal', 1062, 'Impedit iure nihil aut voluptate quae magni tempora nam. Quod quos iure. Doloribus fuga a sit. Earum modi quae minima qui reprehenderit natus cumque molestias eum.', 17, 'Marguerite.Rogahn', 'https://www.youtube-nocookie.com/embed/0jgUqxaSrvw', 'https://assets.andromia.science/avatars/126.jpg'),
(137, 'Cross-group 3rd generation website', 1670, 'Culpa iusto tenetur numquam praesentium reprehenderit debitis cupiditate dignissimos. Minima a rem ea hic quaerat at adipisci iure. Officia amet aperiam accusamus.', 17, 'Frederick95', 'https://www.youtube-nocookie.com/embed/LQeHUpeQKqY', 'https://assets.andromia.science/avatars/680.jpg'),
(138, 'Digitized coherent initiative', 1550, 'Natus delectus voluptate quae dolore sed dolore. Delectus nostrum fugiat totam veniam sit nemo mollitia dolorem. Commodi consequatur maiores facere totam libero tempora. Ipsam ex aperiam magnam neque eaque rem aperiam. Ullam vero alias molestiae dolores aperiam placeat.', 1, 'Emmy6', 'https://www.youtube-nocookie.com/embed/8Ps9fSF4qcQ', 'https://assets.andromia.science/avatars/689.jpg'),
(139, 'Front-line modular policy', 2296, 'Nihil natus vel ducimus perspiciatis occaecati. Possimus fuga minima inventore veniam. Cupiditate dolore molestiae reprehenderit modi.', 6, 'Cordia_Goyette45', 'https://www.youtube-nocookie.com/embed/LQeHUpeQKqY', 'https://assets.andromia.science/avatars/1109.jpg'),
(140, 'Optimized motivating archive', 242, 'Tenetur qui magnam rerum. Nostrum consequatur architecto esse amet numquam. Soluta porro recusandae voluptatibus rerum deleniti facilis molestiae in. Quaerat pariatur soluta voluptatem totam earum mollitia. Qui quibusdam cupiditate totam nihil unde accusantium provident at.', 18, 'Audreanne_Zboncak51', 'https://www.youtube-nocookie.com/embed/fkO1ULW19HA', 'https://assets.andromia.science/avatars/117.jpg'),
(141, 'Compatible didactic core', 2681, 'Impedit dolore voluptatem pariatur. Laudantium veritatis hic ex labore. Ipsa ipsum fuga earum quas. Ex asperiores excepturi repellat voluptas voluptas illo quaerat.', 20, 'Will.Durgan2', 'https://www.youtube-nocookie.com/embed/0jgUqxaSrvw', 'https://assets.andromia.science/avatars/1205.jpg'),
(142, 'Grass-roots real-time protocol', 1060, 'Aliquam repellat architecto vero sunt ex incidunt. Quae illum dolore blanditiis reprehenderit repellendus numquam enim accusamus. Eos quaerat porro repellendus architecto nulla reiciendis.', 5, 'Hermina.Bahringer93', 'https://www.youtube-nocookie.com/embed/KxwUy2S2n-Q', 'https://assets.andromia.science/avatars/908.jpg'),
(143, 'Down-sized dynamic installation', 1799, 'Optio dolorem tempore quis quae numquam aperiam repudiandae quia cumque. Reiciendis magni dolorum necessitatibus nobis rem qui. Iure voluptas reiciendis dolor magni officia quidem sed. Incidunt repellat veritatis totam eveniet omnis fugit. At deleniti beatae nam deserunt.', 8, 'Moshe29', 'https://www.youtube-nocookie.com/embed/8Ps9fSF4qcQ', 'https://assets.andromia.science/avatars/757.jpg'),
(144, 'Fully-configurable static instruction set', 1882, 'Tenetur sit consequuntur quaerat quis ratione. Magni expedita deleniti nulla quo voluptatum sapiente nisi. Provident natus deserunt.', 14, 'Rosie.Hermann', 'https://www.youtube-nocookie.com/embed/LQeHUpeQKqY', 'https://assets.andromia.science/avatars/677.jpg'),
(145, 'Upgradable static contingency', 570, 'A delectus natus quo rerum. Natus soluta aut animi animi sint placeat veritatis repudiandae id. Inventore repellendus et repellat rem mollitia.', 6, 'Gertrude.Rodriguez8', 'https://www.youtube-nocookie.com/embed/fkO1ULW19HA', 'https://assets.andromia.science/avatars/494.jpg'),
(146, 'Adaptive national help-desk', 4309, 'Dolorum veniam eum rerum error id deleniti optio nesciunt aspernatur. Qui amet eius voluptatem exercitationem voluptas reiciendis. Ducimus blanditiis ab tenetur corporis omnis dolorum. Laborum occaecati odit eaque eligendi doloremque laudantium impedit alias. Suscipit et sed exercitationem ea dicta quo.', 18, 'Emory.Schneider48', 'https://www.youtube-nocookie.com/embed/DtgE378d4-U', 'https://assets.andromia.science/avatars/120.jpg'),
(147, 'User-friendly multi-tasking instruction set', 4213, 'Ad ipsa sequi corrupti qui nisi. Odio eligendi nulla repellendus esse laborum non libero. Tempora ex laboriosam pariatur vero rerum.', 14, 'Israel.Goldner', 'https://www.youtube-nocookie.com/embed/fkO1ULW19HA', 'https://assets.andromia.science/avatars/1045.jpg'),
(148, 'Object-based modular policy', 1106, 'Nesciunt autem cupiditate consequatur necessitatibus autem ipsa impedit debitis perferendis. Dolorum dicta odio. Eveniet suscipit quasi praesentium sunt similique optio cum facilis quia. Odio explicabo dignissimos deserunt exercitationem sed dicta occaecati voluptas. Impedit voluptates consequuntur odit dolorum maxime dolorem accusamus suscipit. Accusantium culpa ut modi molestias quisquam dicta labore.', 6, 'Hortense_Heaney87', 'https://www.youtube-nocookie.com/embed/DtgE378d4-U', 'https://assets.andromia.science/avatars/86.jpg'),
(149, 'Pre-emptive solution-oriented ability', 4700, 'Ad ratione et. Eum voluptate possimus quod fugiat ea eligendi quod. Dolor praesentium libero id. Illo sapiente tempore temporibus error minus temporibus.', 12, 'Lewis_Rath4', 'https://www.youtube-nocookie.com/embed/8Ps9fSF4qcQ', 'https://assets.andromia.science/avatars/451.jpg'),
(150, 'Up-sized even-keeled flexibility', 720, 'Molestiae expedita iure id qui eaque. Voluptates iusto sequi quasi tenetur eligendi modi quae. Quis eveniet ducimus rerum. Pariatur in ipsa consequuntur quibusdam dolores eius. Quos eos asperiores error.', 11, 'Erich97', 'https://www.youtube-nocookie.com/embed/0jgUqxaSrvw', 'https://assets.andromia.science/avatars/285.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `commentDate` datetime NOT NULL,
  `channel_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `message`, `commentDate`, `channel_id`) VALUES
(1, 'Test', '2023-05-07 19:40:21', 1),
(2, 'Test 4', '2023-05-07 19:40:44', 8),
(3, 'Commentaire 2', '2023-05-07 19:56:21', 1),
(4, 'Test 1', '2023-05-09 23:01:34', 66),
(5, 'Test 2', '2023-05-09 23:01:38', 66),
(6, 'Test 3', '2023-05-09 23:01:43', 66),
(7, 'Test 56', '2023-05-09 23:11:18', 150),
(8, 'Test 90', '2023-05-09 23:11:25', 150);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_3AF346685E237E06` (`name`);

--
-- Index pour la table `channels`
--
ALTER TABLE `channels`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_F314E2B6F85E0677` (`username`),
  ADD KEY `IDX_F314E2B655EF339A` (`id`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_5F9E962AB240E5B5` (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `channels`
--
ALTER TABLE `channels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `channels`
--
ALTER TABLE `channels`
  ADD CONSTRAINT `FK_F314E2B655EF339A` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `FK_5F9E962AB240E5B5` FOREIGN KEY (`channel_id`) REFERENCES `channels` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
