-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 05 Novembre 2014 à 21:51
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `music`
--

-- --------------------------------------------------------

--
-- Structure de la table `artists`
--

CREATE TABLE IF NOT EXISTS `artists` (
  `artist_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `image_url` varchar(200) CHARACTER SET ascii NOT NULL,
  `info` text NOT NULL,
  PRIMARY KEY (`artist_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=51 ;

--
-- Contenu de la table `artists`
--

INSERT INTO `artists` (`artist_id`, `name`, `image_url`, `info`) VALUES
(1, '2econd Class Citizen', 'http://userserve-ak.last.fm/serve/_/28575395/2econd+Class+Citizen+l_2bb4bdd91d75a87ae96697b75b4d.jpg', '2econd Class Citizen est un DJ et producteur de musique britannique de Brighton. La musique de 2econd Class Citizen est un mélange inhabituel de musique hip-hop, psychédélique et folk. L’artiste est connu pour privilégier les vinyles, même si certains de ses albums sont disponibles sur CD. Pour promouvoir ses albums studio, il se livre souvent à des actions singulières. Ainsi en 2012 deux titres sont parus sur des vinyles en forme de carte postale. Bien que la musique de 2econd Class Citizen paraisse très électronique, elle est généralement enregistrée avec un petit orchestre.'),
(2, 'Academia da Berlinda', 'http://userserve-ak.last.fm/serve/500/3035143/Academia+da+Berlinda+Berlinda_2007.jpg', 'Formé en 2004 à Olinda, le groupe se compose de musiciens venant de plusieurs groupes célèbres qui de Pernambuco au Brésil. Dès ses débuts, le groupe s’est plongé dans de la musique bregas des années 60 de manière créative et innovante, pleine de cumbias, guarachas et chargée d’afrobeats.'),
(3, 'Allar', 'http://userserve-ak.last.fm/serve/_/518314/Allar.jpg', 'Allar, né en 1967, joue de la guitare classique dans des restaurants locaux de Tallinn depuis l’an 2000.'),
(4, 'Anton Steklov', 'http://userserve-ak.last.fm/serve/_/27979267/Anton+Steklov+steklovs.jpg', 'Anton Steklov est né à Moscou en 1964. Il a commencé sa formation musicale sous la direction de S. Mirzoyan à l’école Beethoven, et a obtenu un diplôme au Gnesin College en 1987, où il a étudié sous la direction de A. Kachanov. Son amitié avec le célèbre pianiste russe Oleg Boshnyakovich a eu une grande influence sur lui et a contribué à son développement créatif.'),
(5, 'Baby Jane', 'http://userserve-ak.last.fm/serve/500/22740425/Baby+Jane.jpg', 'Groupe de rock de Gothenburg en Suède ayant débuté en 2007.'),
(6, 'Chewy Chocolate Cookies', 'http://userserve-ak.last.fm/serve/500/49977105/Chewy+Chocolate+Cookies.jpg', 'Peu de DJs ou de producteurs ont vraiment brisé les règles comme Chewy Chocolate Cookies. Quand ses productions et remixes ont eu leurs premiers succès, il est resté loin des projecteurs et, tel un ninja de la piste de danse, a réussi à conserver son identité. Chewy Chocolate Cookies produit des bombes rave futuristes et reste encore énigmatique. Il ne cherche pas la gloire et a toujours préféré laisser sa musique parler d’elle-même.'),
(7, 'ConeCrewDiretoria', 'http://userserve-ak.last.fm/serve/500/58064551/ConeCrewDiretoria.png', 'ConeCrewDiretoria est un groupe de rap brésilien créé en 2006. Il est composé du beatmaker Papatinho, ainsi que de Cert, Rany Money, Batoré, Maomé et Ari. Connus à l’échelle nationale pour leur manière de montrer la réalité de leur pays, ils ont produit deux albums : « Ataque Lirico » et « Com os Neuronios Evoluindo ».'),
(8, 'Costanza', 'http://userserve-ak.last.fm/serve/_/98063043/Costanza++Francavilla.jpg', 'Née en Italie et vivant actuellement à Brooklyn, Costanza est une artiste visionnaire. Chanteuse, compositrice, multi-instrumentiste, productrice saluée par la presse comme envoûtante, séduisante et politiquement évoluée, sa musique est un voyage onirique dans un monde électronique, sensuel, provocant et hypnotique.'),
(9, 'Dirty Elegance', 'http://userserve-ak.last.fm/serve/500/99940263/Dirty+Elegance+20140703+003117.jpg', 'Sombres mélodies mélancoliques, envoûtantes et épiques, Dirty Elegance capture de manière innovante la profondeur de la condition humaine tout en conservant une cohérence spécifique en dehors de tout genre.'),
(10, 'Dom Kennedy', 'http://userserve-ak.last.fm/serve/500/84669493/Dom+Kennedy.png', 'Dom Kennedy le rappeur de Leimert Park, Los Angeles, fait partie de la nouvelle génération de rappeurs indépendants venu de la West Coast. Après 6 mixtapes depuis 2008 dont la désormais classique "From The Westside With Love", et "The Yellow Album" téléchargé plus d''un 1,5 million de fois et son hit "My Type of Party", il est revenu avec son nouvel album "Get Home Safely" produit par DJ Khalil, collaborateur de Dr Dre, The Futuristiks ou encore le producteur West Coast qui monte, DJ Mustard.'),
(11, 'Dresses', 'http://userserve-ak.last.fm/serve/500/85535759/Dresses+2540286_orig.jpg', 'Dresses est composé de Timothy Heller (la fille) au chant et piano et Jared Ryan Maldonado au chant et à la guitare. Le duo est un vrai couple et on ne sait pas toujours où leur art s''arrête et où leur réalité commence.'),
(12, 'Elenika', 'http://userserve-ak.last.fm/serve/500/76656804/Elenika+Image3646.jpg', 'Elenika est un projet solo de l''auteure/compositrice/interprète Elena Rileva, créé en 2009. Elena Rivera est née dans une famille musicienne ce qui a naturellement affecté se décision de devenir musicienne. Elle s''est essayée à de nombreux genres (R&B, drum''n''bass, electro-house) avant de composer Shot Again! - un titre chargé de mélodies trip-hop pleines de fraicheur et de beats accompagnés de chants doux et sensuels.'),
(13, 'General Fuzz', 'http://userserve-ak.last.fm/serve/_/36478/General+Fuzz.jpg', 'General Fuzz est le projet de musique électronique de James Kirsch. En 2002, il a sorti son premier album électroniqu, General Fuzz, sous le nom de DJ Messy. Il a ensuite utilisé le nom General Fuzz pour tous ses autres albums. En tout, six albums sont parus et sont disponibles gratuitement sur le site Web de Kirsch.'),
(14, 'Haikaiss', 'http://userserve-ak.last.fm/serve/500/73039756/Haikaiss.jpg', 'Haikass est un groupe de rap de Sao Paulo. Au lieu de suivre les normes inhérentes au rap brésilien de ces dernières années, les membres du groupe Haikass adoptent des rimes douces qui semblent un murmure sur le poids du passé. Les paroles sont moins agressives, mais n’en sont pas moins réflexives.'),
(15, 'Hana Yori Kichou Na', 'http://userserve-ak.last.fm/serve/_/49638379/Hana+Yori+Kichou+Na+dede.png', 'Hana Yori Kichou Na (qui peut se traduire par « plus précieux qu’une fleur ») est un producteur de musique house de 18 ans qui est français mais réside actuellement au Luxembourg.'),
(16, 'Hugo Kant', 'http://userserve-ak.last.fm/serve/500/63179145/Hugo+Kant+hugokant.jpg', 'Hugo Kant, multi-instrumentiste compositeur français, lance son projet en 2011 en sortant l''EP « Searching London, » suivi de l''album « I don''t want to be an emperor » sur le label Bellring. Il s''entoure alors de Loïc Marmet (batterie, pads) et Alexandre Morier (guitare, basse, pads) enchaînant les concerts en France, en Slovaquie et en Chine. Véritable chef d''orchestre moderne, Hugo Kant nous entraîne dans un univers Trip Hop, Downtempo trempé d''Acid-Jazz, de Jazz-rock, de classique, voire de psychédélisme.'),
(17, 'Jakub Kosciuszko', 'http://userserve-ak.last.fm/serve/500/2951738/Jakub+Kosciuszko+JKosciuszko+photo.jpg', 'Jakub Kosciuszko est né en 1985 à Szczecin en Pologne. Il a commencé la guitare à 8 ans. À 16 ans, sa biographie faisait déjà partie du lexique des guitaristes polonais. En 2004, il a été diplômé de l’école de musique de Szczecin, où il était un élève de Piotr Palac. Il étudie actuellement sous la direction de Piotr Zaleski à l’école Karol Lipinski à Wroclaw et de Zoran Dukic au Conservatoire Royal de la Haye.'),
(18, 'Kognitif', 'http://userserve-ak.last.fm/serve/500/98694099/Kognitif+1904189_648037831918545_142983.jpg', 'Producteur français de trip-hop, abstract hip-hop ainsi que toute sorte de rythme approchant.'),
(19, 'La Pegatina', 'http://userserve-ak.last.fm/serve/500/26381165/La+Pegatina.jpg', 'Le groupe a initialement été créé en 2003 sous le nom de « Pegatina Sound System » après qu’Ovidi i Adrià a rencontré Rubén, qui faisait alors une carrière solo. Ils ont décidé de se lancer dans le projet sans savoir où cela les mènerait. Un an plus tard, ils sont l’un des groupes les plus actifs sur le marché catalan.'),
(20, 'La Raíz', 'http://userserve-ak.last.fm/serve/_/77288462/La+Raz+LaRaiz.jpg', 'La Raíz est un groupe de Gandie en Espagne. Après quelques années à s’essayer à différents styles, ils ont enregistré leur premier album en 2003 : « Sumere ». à l’origine, ils sont une formation de six musiciens (percussions, guitares, basses et piano) et s’essaient de plus en plus au mixage.'),
(21, 'Lê Cát Tr?ng Lý', 'http://userserve-ak.last.fm/serve/_/13138049/L+Ct+Trng+L+Le+Cat+Trong+Ly+3.jpg', 'Née en 1987, Lê Cát Tr?ng Lý est l’un des auteurs/compositeurs/interprètes les plus prometteurs du Vietnam. Après avoir chanté plusieurs années dans de nombreux bars de Saigon et Da Lat, elle a remporté de nombreux prix dans divers concours, ce qui lui a donné une grande notoriété dans le pays. Bien que ne chantant qu’accompagnée de sa guitare classique dans un style épuré, elle remplit aujourd’hui les plus grandes salles du Vietnam.'),
(22, 'Lena Chamamyan', 'http://userserve-ak.last.fm/serve/_/16589885/Lena+Chamamyan+11043797.jpg', 'Lena Chamamyan est une chanteuse syrienne d’origine arménienne. Née à Damas, elle a commencé à chanter dès son plus jeune âge et a donné son premier concert à cinq ans. Après des études d’économie et de finance, elle a étudié la musique classique orientale au conservatoire d’Alep, tout en s’intéressant au jazz et à la musique traditionnelle arménienne. Son premier album « Hal Asmar Ellon » sorti en 2006 reflète son style de musique oriental mélangé à des éléments de jazz.'),
(23, 'Los Hermanos', 'http://userserve-ak.last.fm/serve/_/22264369/Los+Hermanos+por+caroline+bittencourt.jpg', 'Los Hermanos est groupe brésilien de Rio de Janeiro, qui mélange le indie rock avec le mpb et des éléments de samba. Les membres du groupe sont Marcelo Camelo, Rodrigo Amarante (tous deux guitaristes, auteurs, compositeurs et interprètes), Bruno Medina (piano) and Rodrigo Barba (percussions).'),
(24, 'Lost Balance', 'http://userserve-ak.last.fm/serve/_/397367/Lost+Balance.jpg', 'Lost Balance est un groupe de trip-hop espagnol fondé en 2000 à Grenade par Isabel Benedi et Mariano Rodriguez. Ils sont réputés pour leur style unique, souvent expérimental et présentant une grande variété de sons.'),
(25, 'Madhouse', 'http://userserve-ak.last.fm/serve/_/63679863/Madhouse.jpg', 'Madhouse était le nom d’un groupe post-punk entre 1983 et 1986. Ils sont devenus célèbres dans les environs de Washington sur la scène punk après l’enregistrement de l’album « Madhouse » en 1984.'),
(26, 'miscellaneum', 'http://userserve-ak.last.fm/serve/_/127424/miscellaneum.jpg', 'Carlos Naranjo a passé de nombreuses années à jouer en parallèle dans un groupe de rock et en solo des morceaux de musique de la renaissance et baroque. Cette situation l’a conduit en 1997 à initier un projet de composition mêlant musique classique et rock acoustique, qu’il a baptisé le projet miscellaneum.'),
(27, 'Monoceros', 'http://userserve-ak.last.fm/serve/500/16885331/Monoceros+DSC06377.jpg', 'Monoceros est un artiste de St Martí d''Empúries, une petite ville de Catalogne.'),
(28, 'mpulse', 'http://userserve-ak.last.fm/serve/500/98318279/mpulse+mp.jpg', 'MPulse est un rappeur de Chicago.'),
(29, 'Niv Haramati', 'http://userserve-ak.last.fm/serve/_/42776981/Niv+Haramati+l_79c9c759bfc14afa852c1b94c370.jpg', 'Niv Haramati est un artiste israélien.'),
(30, 'Phuong Thanh', 'http://userserve-ak.last.fm/serve/_/66656790/Phng+Thanh+thanh02.png', 'Phuong Thanh est une des chanteuses les plus connues du Vietnam, en particulier pour la variété de ses styles et pour sa voix unique et inhabituelle.'),
(31, 'Praveen', 'http://userserve-ak.last.fm/serve/500/8337679/Praveen+l_ed8cecfc708f88e3892e904fa306.jpg', 'Praveen Sharma a passé la plus grande partie de sa vie à faire de la musique, et a contribué à certaines productions de AI, Neo Ouija et Expanding Records. Il dirige également le Percussion Lab, un centre de musique électronique underground avec un matériel de pointe, en plus de ses performances lives et des nombreux évènements qui organise à New York. Praveen a sorti son premier album Backed by Spirits en 2005.'),
(32, 'Projota', 'http://userserve-ak.last.fm/serve/_/79047183/Projota+king.png', 'José Tiago Sabino Pereira, plus connu sous le nom de scène Projota est un rappeur, chanteur et producteur du Brésil. Il a commencé à gagner en notoriété en remportant de nombreuses compétitions au Brésil.'),
(33, 'Proswell', 'http://userserve-ak.last.fm/serve/_/519567/Proswell++Live++Sonotheque+in+C.jpg', 'La musique de Proswell peut être classée dans les categories suivantes : inpuj, chiptune, synth-pop, glitch, idm, électro, hip-hop, techno, ambient et acid.'),
(34, 'Quilt', 'http://userserve-ak.last.fm/serve/_/69906138/Quilt.png', 'Le groupe Quilt a forgé un univers captivant de psychédélisme, dream-pop et folk plein de chaleur, mais aussi d’un calme et d’une sérénité qui vous rendent nostalgiques de la nature verte de la Nouvelle-Angleterre.'),
(35, 'Salam', 'http://userserve-ak.last.fm/serve/_/465341/Salam.jpg', 'Salam est un groupe malaisien.'),
(36, 'Sequence Theory Project', 'http://userserve-ak.last.fm/serve/500/54243287/Sequence+Theory+Project+front1.jpg', 'Sequence Theory project est à la fois un groupe de musique non commercial et un projet politique et social qui tente d’inspirer les utilisateurs du Web, par la sensibilité de leur musique, à reconsidérer le monde moderne. Leur musique reflète la tristesse que leur causent les centaines d’enfants qui meurent chaque jour dans des guerres ou de maladies.'),
(37, 'Shitao', 'http://userserve-ak.last.fm/serve/_/5036906/Shitao+m_7cb1c9d1ac4ec3bfc9863989ebd7.jpg', 'Shitao a grandi avec une manette de Sega Genesis à la main et des cartes Upper Deck dans ses poches, à essayer d’être aussi cool qu’Indiana Jones. Il a commencé à faire des beats en 2003 pour le plaisir. Le plaisir de rechercher des enregistrements perdus et le plaisir de les placer dans de nouveaux contextes.'),
(38, 'Skipless', 'http://userserve-ak.last.fm/serve/500/60866843/Skipless+cover.jpg', 'Skipless est un producteur finlandais. Sa musique vous ramène au début des années 90 avec des beats réfrigérés en or. Hiphop instrumental avec un paysage sonore jazzy et plein de soul, totalement comparable avec le style de Pete Rock et DJ Premier.'),
(39, 'SondeNadie', 'http://userserve-ak.last.fm/serve/500/6536025/SondeNadie+Lbeck++Treibsand2006.jpg', 'En 2003, plusieurs musiciens se rassemblent à Grenade depuis plusieurs coins du monde et fondent le groupe SondeNadie. Depuis, le groupe a composé plusieurs albums qui reflètent différentes évolutions musicales tout en conservant les rythmes particuliers et couleur gazpacho qui font sa marque de fabrique.'),
(40, 'Stripmall Architecture', 'http://userserve-ak.last.fm/serve/500/50961913/Stripmall+Architecture+Photograph+by+Audrey+Penven.png', 'Stripmall Architecture est le nouveau projet des fondateurs du groupe Halou, Ryan et Rebecca Coseboom.'),
(41, 'Swanky Tunes', 'http://userserve-ak.last.fm/serve/_/97075563/Swanky+Tunes.jpg', 'De tous les nouveaux sons électro nous venant de l''est ces temps-ci, Swanky Tunes se classe parmi les plus remarquables. Le groupe a été formé en 1998, et a expérimenté différentes styles électroniques dans la poursuite de leur propre son. Aujourd’hui ce son contient des éléments de la scène French-house, de Depeche Mode, d’électro-80 et du mouvement électro-house contemporain.'),
(42, 'Tammio', 'http://userserve-ak.last.fm/serve/500/93457843/Tammio+fd_03039.jpg', 'Dans les ruelles les plus sombres de Moscou, sous son éternel smog, au beau milieu de tous ces gens sans visage et au regard vide, une musique survit, et son nom est Tammio. Depuis 2007, Evgeny Sonkin, alias Tammio, harpente un chemin des plus mystérieux pour nous délivrer un miracle de beauté dans un monde abandonné des Dieux.'),
(43, 'The New Law', 'http://userserve-ak.last.fm/serve/500/41933115/The+New+Law+Photo+by+Matt+White.jpg', 'Adam Straney et Justin Neff, deux producteurs de Seattle, ont mis au point un style unique de musique instrumentale contenant des beats à la fois organiques et synthétiques combines avec des paysages sonores allant du saxophone planant aux samples poussiéreux en passant par des synthétiseurs explosifs. La seule manière de qualifier cette musique est d’utiliser le nom de leur groupe : The New Law.'),
(44, 'The Sharp Things', 'http://userserve-ak.last.fm/serve/500/95428523/The+Sharp+Things+thesharpthingsc2013alexbrown30.jpg', 'The Sharp Things est un groupe de New York dirigé par le compositeur et interprète Perry Serpa. Le groupe a été formé à la fin des années 90 par Serpa et le percussionniste Steve Gonzalez.'),
(45, 'Th?y Tiên', 'http://userserve-ak.last.fm/serve/500/75774402/Thy+Tin+thuytien5.png', 'Th?y Tiên est une chanteuse vietnamienne. Son style de musique principal est le pop/rock, mais elle chante aussi des ballades.'),
(46, 'Tu?n Ng?c', 'http://userserve-ak.last.fm/serve/_/5416870/Tun+Ngc.jpg', 'Tu?n Ng?c est un chanteur vietnamien. Ayant été élevé dans une ambiance de musique et de divertissement, il a été choisi à l’âge de 10 ans pour chanter dans un programme radio de variété pour enfants. Il a aujourd’hui intégré plusieurs groupes de musique pop américaine qui se produisent dans tout le Vietnam du sud.'),
(47, 'Velhas Virgens', 'http://userserve-ak.last.fm/serve/_/15292127/Velhas+Virgens+materia0025.jpg', 'Velhas Virgens est l’un des plus grands groupes de rock brésilien sur la scène underground. Ils sont connus pour la sagacité de leurs paroles irrévérencieuses, tournant souvent autour de la thématique du sexe et de la politique.'),
(48, 'Vindata', 'http://userserve-ak.last.fm/serve/500/87409371/Vindata+_BW.jpg', 'Le groupe Vindata a été formé en 2010 avec l’objectif d’explorer les sons laissés à l’abandon, à la fois organiques et électroniques. Jared Poythress et Branden Ratcliff ont ainsi fusionné leurs influences respectives (Funk, Hip Hop et R&B) avec leur nouvelle passion pour la dance Indie, le Chillwave et la musique expérimentale.'),
(49, 'Youth', 'http://userserve-ak.last.fm/serve/500/77580972/Youth+_Band_2.jpg', 'Youth est un groupe de rock qui a de bonnes raisons de faire du bruit.'),
(50, 'Zo!', 'http://userserve-ak.last.fm/serve/500/4756011/Zo+171343687O.jpg', 'Zo! Est un musicien et producteur qui a appris le piano à 6 ans et a détesté ça. Ses parents ont un peu insisté et finalement il a bien aimé.');

-- --------------------------------------------------------

--
-- Structure de la table `playlists`
--

CREATE TABLE IF NOT EXISTS `playlists` (
  `user_id` int(11) NOT NULL,
  `playlist_id` int(11) NOT NULL AUTO_INCREMENT,
  `playlist_name` varchar(64) NOT NULL,
  PRIMARY KEY (`playlist_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `playlists`
--

INSERT INTO `playlists` (`user_id`, `playlist_id`, `playlist_name`) VALUES
(1, 1, 'Magnificent stuff');

-- --------------------------------------------------------

--
-- Structure de la table `playlists_tracks`
--

CREATE TABLE IF NOT EXISTS `playlists_tracks` (
  `playlist_id` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `track_id` int(11) NOT NULL,
  PRIMARY KEY (`playlist_id`,`position`),
  KEY `playlist_id` (`playlist_id`),
  KEY `track_id` (`track_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `playlists_tracks`
--

INSERT INTO `playlists_tracks` (`playlist_id`, `position`, `track_id`) VALUES
(1, 8, 34),
(1, 6, 109),
(1, 2, 115),
(1, 7, 136),
(1, 5, 138),
(1, 1, 166),
(1, 3, 168),
(1, 4, 187);

-- --------------------------------------------------------

--
-- Structure de la table `tracks`
--

CREATE TABLE IF NOT EXISTS `tracks` (
  `artist_id` int(11) NOT NULL,
  `track_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(64) NOT NULL,
  `mp3_url` varchar(200) CHARACTER SET ascii NOT NULL,
  PRIMARY KEY (`track_id`),
  KEY `artist_id` (`artist_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=201 ;

--
-- Contenu de la table `tracks`
--

INSERT INTO `tracks` (`artist_id`, `track_id`, `title`, `mp3_url`) VALUES
(1, 1, 'Omnipresent', 'http://freedownloads.last.fm/download/86630288/Omnipresent.mp3'),
(1, 2, 'Jazz Break', 'http://freedownloads.last.fm/download/122891272/Jazz%2BBreak.mp3'),
(1, 3, 'Real Therapy', 'http://freedownloads.last.fm/download/122890005/Real%2BTherapy.mp3'),
(1, 4, 'No Destination', 'http://freedownloads.last.fm/download/582522960/No%2BDestination.mp3'),
(2, 5, 'Cumbia do Lutador', 'http://freedownloads.last.fm/download/108867325/Cumbia%2Bdo%2BLutador.mp3'),
(2, 6, 'Bela Vista', 'http://freedownloads.last.fm/download/108869047/Bela%2BVista.mp3'),
(2, 7, 'Mama Me Queira', 'http://freedownloads.last.fm/download/108870178/Mama%2BMe%2BQueira.mp3'),
(2, 8, 'Academia da Berlinda', 'http://freedownloads.last.fm/download/45702069/Academia%2Bda%2BBerlinda.mp3'),
(3, 9, 'Michelle', 'http://freedownloads.last.fm/download/163416630/Michelle.mp3'),
(3, 10, 'Cavatine', 'http://freedownloads.last.fm/download/163416633/Cavatine.mp3'),
(3, 11, 'Sons De Carillhoes', 'http://freedownloads.last.fm/download/86456318/Sons%2BDe%2BCarillhoes.mp3'),
(3, 12, 'Zorba', 'http://freedownloads.last.fm/download/163416627/Zorba.mp3'),
(4, 13, 'Tarrega - Recuerdos de la Alhambra', 'http://freedownloads.last.fm/download/111138168/Tarrega%2B-%2BRecuerdos%2Bde%2Bla%2BAlhambra.mp3'),
(4, 14, 'Sokolov L - Russische Polka', 'http://freedownloads.last.fm/download/115339190/Sokolov%2BL%2B-%2BRussische%2BPolka.mp3'),
(4, 15, 'Villa-Lobos - Präludium Nr. 3', 'http://freedownloads.last.fm/download/115340159/Villa-Lobos%2B-%2BPr%25C3%25A4ludium%2BNr.%2B3.mp3'),
(4, 16, 'Bach J S – Präludium in C-Dur', 'http://freedownloads.last.fm/download/133804039/Bach%2BJ%2BS%2B-%2BPr%25C3%25A4ludioum%2Bin%2BC-Dur.mp3'),
(5, 17, 'Strike Em Back', 'http://freedownloads.last.fm/download/138795168/Strike%2BEm%2BBack.mp3'),
(5, 18, 'Taste Of Underground', 'http://freedownloads.last.fm/download/171615610/Taste%2BOf%2BUnderground.mp3'),
(5, 19, 'One Of A Million', 'http://freedownloads.last.fm/download/242736142/One%2BOf%2BA%2BMillion.mp3'),
(5, 20, 'I Don''t Care', 'http://freedownloads.last.fm/download/168713633/I%2BDon%2527t%2BCare.mp3'),
(6, 21, 'Noise', 'http://freedownloads.last.fm/download/562244719/Noise.mp3'),
(6, 22, 'This is massive (Dub Mix)', 'http://freedownloads.last.fm/download/328258692/This%2Bis%2Bmassive%2B%2528Dub%2BMix%2529.mp3'),
(6, 23, 'It Was Only a Kiss', 'http://freedownloads.last.fm/download/291050526/It%2BWas%2BOnly%2Ba%2BKiss.mp3'),
(6, 24, 'My girlfriend', 'http://freedownloads.last.fm/download/346500841/My%2Bgirlfriend.mp3'),
(7, 25, 'Chama os Mulekes', 'http://freedownloads.last.fm/download/468546131/Chama%2Bos%2BMulekes.mp3'),
(7, 26, 'Rainha da Pista', 'http://freedownloads.last.fm/download/493019474/Rainha%2Bda%2BPista.mp3'),
(7, 27, 'Pensamentos ao Além', 'http://freedownloads.last.fm/download/157473580/Pensamentos%2Bao%2BAl%25C3%25A9m.mp3'),
(7, 28, 'Calma na Alma', 'http://freedownloads.last.fm/download/493020963/Calma%2Bna%2BAlma.mp3'),
(8, 29, 'I''ve Been Waiting for You', 'http://freedownloads.last.fm/download/30784575/I%2527ve%2BBeen%2BWaiting%2Bfor%2BYou.mp3'),
(8, 30, 'Riddle', 'http://freedownloads.last.fm/download/454337471/Riddle.mp3'),
(8, 31, 'Inches', 'http://freedownloads.last.fm/download/411891948/Inches.mp3'),
(8, 32, 'Words', 'http://freedownloads.last.fm/download/411892022/Words.mp3'),
(9, 33, 'Noisy Places', 'http://freedownloads.last.fm/download/665031130/Noisy%2BPlaces.mp3'),
(9, 34, 'Aural Mist', 'http://freedownloads.last.fm/download/92028524/Aural%2BMist.mp3'),
(9, 35, 'Opus', 'http://freedownloads.last.fm/download/665031147/Opus.mp3'),
(9, 36, 'Laurel Marty Scrapings', 'http://freedownloads.last.fm/download/92028517/Laurel%2BMarty%2BScrapings.mp3'),
(10, 37, '1997', 'http://freedownloads.last.fm/download/397340957/1997.mp3'),
(10, 38, 'Home Alone', 'http://freedownloads.last.fm/download/397341888/Home%2BAlone.mp3'),
(10, 39, 'Still Me', 'http://freedownloads.last.fm/download/397340555/Still%2BMe.mp3'),
(10, 40, 'It Was Beautiful', 'http://freedownloads.last.fm/download/302682649/It%2BWas%2BBeautiful.mp3'),
(11, 41, 'First Cavity', 'http://freedownloads.last.fm/download/246904334/First%2BCavity.mp3'),
(11, 42, 'Konvenience Is The Key', 'http://freedownloads.last.fm/download/246903417/Konvenience%2BIs%2BThe%2BKey.mp3'),
(11, 43, 'Bean Salad', 'http://freedownloads.last.fm/download/249520254/Bean%2BSalad.mp3'),
(11, 44, 'Drunk On Solo', 'http://freedownloads.last.fm/download/265364519/Drunk%2BOn%2BSolo.mp3'),
(12, 45, 'Tu-tu', 'http://freedownloads.last.fm/download/474380582/Tu-tu.mp3'),
(12, 46, 'I kill you with a smile', 'http://freedownloads.last.fm/download/431155593/I%2Bkill%2Byou%2Bwith%2Ba%2Bsmile.mp3'),
(12, 47, 'Come on dance', 'http://freedownloads.last.fm/download/471223890/Come%2Bon%2Bdance.mp3'),
(12, 48, 'I want your love', 'http://freedownloads.last.fm/download/480661693/I%2Bwant%2Byour%2Blove.mp3'),
(13, 49, 'Four Prophets', 'http://freedownloads.last.fm/download/225673521/Four%2BProphets.mp3'),
(13, 50, 'Goodbyes', 'http://freedownloads.last.fm/download/227718099/Goodbyes.mp3'),
(13, 51, 'acclimate', 'http://freedownloads.last.fm/download/92546213/acclimate.mp3'),
(13, 52, 'Warm Steel', 'http://freedownloads.last.fm/download/227711412/Warm%2BSteel.mp3'),
(14, 53, 'Quem é Ela?', 'http://freedownloads.last.fm/download/466712832/Quem%2B%25C3%25A9%2BEla%253F.mp3'),
(14, 54, 'O Escolhido', 'http://freedownloads.last.fm/download/466649932/O%2BEscolhido.mp3'),
(14, 55, 'Letristas', 'http://freedownloads.last.fm/download/462721540/Letristas.mp3'),
(14, 56, 'Prefácio', 'http://freedownloads.last.fm/download/488148582/Pref%25C3%25A1cio.mp3'),
(15, 57, 'Inside Me', 'http://freedownloads.last.fm/download/429392238/Inside%2BMe.mp3'),
(15, 58, 'Club House ''98', 'http://freedownloads.last.fm/download/503580864/Club%2BHouse%2B%252798.mp3'),
(15, 59, 'Mirage', 'http://freedownloads.last.fm/download/504498982/Mirage.mp3'),
(15, 60, 'Interlude', 'http://freedownloads.last.fm/download/466690592/Interlude.mp3'),
(16, 61, 'Dark Night Dreams', 'http://freedownloads.last.fm/download/476027237/Dark%2BNight%2BDreams.mp3'),
(16, 62, 'Hauntingly Silent', 'http://freedownloads.last.fm/download/496795788/Hauntingly%2BSilent.mp3'),
(16, 63, 'Hittin'' The Bottle', 'http://freedownloads.last.fm/download/528123496/Hittin%2527%2BThe%2BBottle.mp3'),
(16, 64, 'Searching London', 'http://freedownloads.last.fm/download/505444108/Searching%2BLondon.mp3'),
(17, 65, 'J.K. Mertz - Liebeslied', 'http://freedownloads.last.fm/download/141517761/J.K.%2BMertz%2B-%2BLiebeslied.mp3'),
(17, 66, 'J.S. Bach - Praeludium BWV 1008', 'http://freedownloads.last.fm/download/141517760/J.S.%2BBach%2B-%2BPraeludium%2BBWV%2B1008.mp3'),
(17, 67, 'N. Paganini - Vairazioni sul Carnavale di Venezia', 'http://freedownloads.last.fm/download/141517763/N.%2BPaganini%2B-%2BVairazioni%2Bsul%2B%2522Carnavale%2Bdi%2BVenezia%2522.mp3'),
(17, 68, 'J.K. Mertz - Unruhe', 'http://freedownloads.last.fm/download/141517762/J.K.%2BMertz%2B-%2BUnruhe.mp3'),
(18, 69, 'Before Long', 'http://freedownloads.last.fm/download/597538693/Before%2BLong.mp3'),
(18, 70, 'Wake Up', 'http://freedownloads.last.fm/download/597540395/Wake%2BUp.mp3'),
(18, 71, 'Toxic Shock', 'http://freedownloads.last.fm/download/597540950/Toxic%2BShock.mp3'),
(18, 72, 'Sexy Brown', 'http://freedownloads.last.fm/download/597533878/Sexy%2BBrown.mp3'),
(19, 73, '¿Cómo explicarte?', 'http://freedownloads.last.fm/download/86982982/%25C2%25BFC%25C3%25B3mo%2Bexplicarte%253F.mp3'),
(19, 74, 'Penjat', 'http://freedownloads.last.fm/download/86980511/Penjat.mp3'),
(19, 75, 'Despierto', 'http://freedownloads.last.fm/download/86982037/Despierto.mp3'),
(19, 76, 'Tomasín', 'http://freedownloads.last.fm/download/87116481/Tomas%25C3%25ADn.mp3'),
(20, 77, 'África', 'http://freedownloads.last.fm/download/319415234/%25C3%2581frica.mp3'),
(20, 78, 'Malos tiempos', 'http://freedownloads.last.fm/download/318762814/Malos%2Btiempos.mp3'),
(20, 79, 'Raíces', 'http://freedownloads.last.fm/download/319415236/Ra%25C3%25ADces.mp3'),
(20, 80, 'Esqueletos de la soledad', 'http://freedownloads.last.fm/download/319415238/Esqueletos%2Bde%2Bla%2Bsoledad.mp3'),
(21, 81, 'Cu?i Adam', 'http://freedownloads.last.fm/download/270051768/C%25C6%25B0%25E1%25BB%259Di%2BAdam.mp3'),
(21, 82, 'Ðôi B?', 'http://freedownloads.last.fm/download/207473953/%25C4%2590%25C3%25B4i%2BB%25E1%25BB%259D.mp3'),
(21, 83, 'Thuong', 'http://freedownloads.last.fm/download/270042259/Th%25C6%25B0%25C6%25A1ng.mp3'),
(21, 84, 'Nghe Tôi K? Này', 'http://freedownloads.last.fm/download/265452592/Nghe%2BT%25C3%25B4i%2BK%25E1%25BB%2583%2BN%25C3%25A0y.mp3'),
(22, 85, 'Al Rouzana', 'http://freedownloads.last.fm/download/68328750/Al%2BRouzana.mp3'),
(22, 86, 'Ala Mowj Elbahr (Part I)', 'http://freedownloads.last.fm/download/137055986/Ala%2BMowj%2BElbahr%2B%2528Part%2BI%2529.mp3'),
(22, 87, 'Yamma Lala', 'http://freedownloads.last.fm/download/135195762/Yamma%2BLala.mp3'),
(22, 88, 'Daaoney Ajood', 'http://freedownloads.last.fm/download/137061083/Daaoney%2BAjood.mp3'),
(23, 89, 'Veja Bem Meu Bem', 'http://freedownloads.last.fm/download/3659037/Veja%2BBem%2BMeu%2BBem.mp3'),
(23, 90, 'A Flor', 'http://freedownloads.last.fm/download/3454126/A%2BFlor.mp3'),
(23, 91, 'Todo Carnaval Tem Seu Fim', 'http://freedownloads.last.fm/download/3454077/Todo%2BCarnaval%2BTem%2BSeu%2BFim.mp3'),
(23, 92, 'Cher Antoine', 'http://freedownloads.last.fm/download/4060778/Cher%2BAntoine.mp3'),
(24, 93, 'Third Skin', 'http://freedownloads.last.fm/download/6913631/Third%2BSkin.mp3'),
(24, 94, 'In', 'http://freedownloads.last.fm/download/32380310/In.mp3'),
(24, 95, 'Return to a Strange Disdain', 'http://freedownloads.last.fm/download/32384403/Return%2Bto%2Ba%2BStrange%2BDisdain.mp3'),
(24, 96, 'Wide-Eyed Platform', 'http://freedownloads.last.fm/download/32384648/Wide-Eyed%2BPlatform.mp3'),
(25, 97, '24', 'http://freedownloads.last.fm/download/241764226/24.mp3'),
(25, 98, 'Madhouse', 'http://freedownloads.last.fm/download/238264559/Madhouse.mp3'),
(25, 99, 'Cokeman', 'http://freedownloads.last.fm/download/248069728/Cokeman.mp3'),
(25, 100, 'Clearance Sale', 'http://freedownloads.last.fm/download/248074012/Clearance%2BSale.mp3'),
(26, 101, 'The Architect', 'http://freedownloads.last.fm/download/336170360/The%2BArchitect.mp3'),
(26, 102, 'Days to ashes (recuerdos)', 'http://freedownloads.last.fm/download/336171782/Days%2Bto%2Bashes%2B%2528recuerdos%2529.mp3'),
(26, 103, 'The beach', 'http://freedownloads.last.fm/download/336171786/The%2Bbeach.mp3'),
(26, 104, 'Intermission', 'http://freedownloads.last.fm/download/336171109/Intermission.mp3'),
(27, 105, 'A glorious afternoon', 'http://freedownloads.last.fm/download/414748533/A%2Bglorious%2Bafternoon.mp3'),
(27, 106, 'Warm', 'http://freedownloads.last.fm/download/78056986/Warm.mp3'),
(27, 107, 'Camper', 'http://freedownloads.last.fm/download/414748526/Camper.mp3'),
(27, 108, 'Background birds', 'http://freedownloads.last.fm/download/78057630/Background%2Bbirds.mp3'),
(28, 109, 'Cyanide', 'http://freedownloads.last.fm/download/591896002/Cyanide.mp3'),
(28, 110, 'Everything', 'http://freedownloads.last.fm/download/593895303/Everything.mp3'),
(28, 111, 'Silence', 'http://freedownloads.last.fm/download/605609894/Silence.mp3'),
(28, 112, 'Orbit', 'http://freedownloads.last.fm/download/605609950/Orbit.mp3'),
(29, 113, 'Small Hope', 'http://freedownloads.last.fm/download/184860214/Small%2BHope.mp3'),
(29, 114, 'Lost Tribes', 'http://freedownloads.last.fm/download/184860216/Lost%2BTribes.mp3'),
(29, 115, 'Maza Hen Bamidbar', 'http://freedownloads.last.fm/download/184860217/Maza%2BHen%2BBamidbar.mp3'),
(29, 116, 'The Call', 'http://freedownloads.last.fm/download/184860218/The%2BCall.mp3'),
(30, 117, 'Tình 2000', 'http://freedownloads.last.fm/download/264834489/T%25C3%25ACnh%2B2000.mp3'),
(30, 118, 'Chi?c Vòng C?u Hôn', 'http://freedownloads.last.fm/download/264839192/Chi%25E1%25BA%25BFc%2BV%25C3%25B2ng%2BC%25E1%25BA%25A7u%2BH%25C3%25B4n.mp3'),
(30, 119, 'Thiên Ðu?ng Mong Manh', 'http://freedownloads.last.fm/download/214046881/Thi%25C3%25AAn%2B%25C4%2590%25C6%25B0%25E1%25BB%259Dng%2BMong%2BManh.mp3'),
(30, 120, 'Ti?ng Chim Ða Ða', 'http://freedownloads.last.fm/download/325501267/Ti%25E1%25BA%25BFng%2BChim%2B%25C4%2590a%2B%25C4%2590a.mp3'),
(31, 121, 'Float', 'http://freedownloads.last.fm/download/15318420/Float.mp3'),
(31, 122, 'Only to Make Ammends', 'http://freedownloads.last.fm/download/79118729/Only%2Bto%2BMake%2BAmmends.mp3'),
(31, 123, 'Acts Rough', 'http://freedownloads.last.fm/download/80752272/Acts%2BRough.mp3'),
(31, 124, 'No Sky, No Rain!', 'http://freedownloads.last.fm/download/76889333/No%2BSky%252C%2BNo%2BRain%2521.mp3'),
(32, 125, 'Até O Final', 'http://freedownloads.last.fm/download/412091933/At%25C3%25A9%2BO%2BFinal.mp3'),
(32, 126, 'Acabou', 'http://freedownloads.last.fm/download/180784603/Acabou.mp3'),
(32, 127, 'Chuva De Novembro', 'http://freedownloads.last.fm/download/444614086/Chuva%2BDe%2BNovembro.mp3'),
(32, 128, 'A Rezadeira', 'http://freedownloads.last.fm/download/482715596/A%2BRezadeira.mp3'),
(33, 129, 'Hari', 'http://freedownloads.last.fm/download/76489031/Hari.mp3'),
(33, 130, 'Be Seeing You', 'http://freedownloads.last.fm/download/75310269/Be%2BSeeing%2BYou.mp3'),
(33, 131, 'Jupiter', 'http://freedownloads.last.fm/download/86743087/Jupiter.mp3'),
(33, 132, 'Ei Gaho', 'http://freedownloads.last.fm/download/72544667/Ei%2BGaho.mp3'),
(34, 133, 'Disco Music For Trees', 'http://freedownloads.last.fm/download/340353387/Disco%2BMusic%2BFor%2BTrees.mp3'),
(34, 134, 'Three (Untitled)', 'http://freedownloads.last.fm/download/340353388/Three%2B%2528Untitled%2529.mp3'),
(34, 135, 'False Eto', 'http://freedownloads.last.fm/download/340353386/False%2BEto.mp3'),
(34, 136, 'The Elephant''s Tusk', 'http://freedownloads.last.fm/download/326237453/The%2BElephant%2527s%2BTusk.mp3'),
(35, 137, 'Allhou', 'http://freedownloads.last.fm/download/21386366/Allhou.mp3'),
(35, 138, 'Drogue', 'http://freedownloads.last.fm/download/19620581/Drogue.mp3'),
(35, 139, 'Laare', 'http://freedownloads.last.fm/download/23102173/Laare.mp3'),
(35, 140, 'Tara', 'http://freedownloads.last.fm/download/21385970/Tara.mp3'),
(36, 141, 'Erasers', 'http://freedownloads.last.fm/download/171460001/Erasers.mp3'),
(36, 142, 'Spend Money On Your Misery', 'http://freedownloads.last.fm/download/425635492/Spend%2BMoney%2BOn%2BYour%2BMisery.mp3'),
(36, 143, 'Toyland', 'http://freedownloads.last.fm/download/388427953/Toyland.mp3'),
(36, 144, 'Aira', 'http://freedownloads.last.fm/download/456540406/Aira.mp3'),
(37, 145, 'Cinema Lights go Down', 'http://freedownloads.last.fm/download/605320082/Cinema%2BLights%2Bgo%2BDown.mp3'),
(37, 146, 'Like The Dust', 'http://freedownloads.last.fm/download/605320135/Like%2BThe%2BDust.mp3'),
(37, 147, 'Poor Thing', 'http://freedownloads.last.fm/download/566517960/Poor%2BThing.mp3'),
(37, 148, 'Behind', 'http://freedownloads.last.fm/download/605319712/Behind.mp3'),
(38, 149, 'Alter', 'http://freedownloads.last.fm/download/272061741/Alter.mp3'),
(38, 150, 'Eclipse Outro', 'http://freedownloads.last.fm/download/272065000/Eclipse%2BOutro.mp3'),
(38, 151, 'Climbing', 'http://freedownloads.last.fm/download/271838540/Climbing.mp3'),
(38, 152, 'Freddie Knows', 'http://freedownloads.last.fm/download/271839636/Freddie%2BKnows.mp3'),
(39, 153, 'Contigo yo subiré', 'http://freedownloads.last.fm/download/192308311/Contigo%2Byo%2Bsubir%25C3%25A9.mp3'),
(39, 154, 'Riitmo', 'http://freedownloads.last.fm/download/145111840/Riitmo.mp3'),
(39, 155, 'Quiero Caminar', 'http://freedownloads.last.fm/download/90679355/Quiero%2BCaminar.mp3'),
(39, 156, 'Mejor me voy', 'http://freedownloads.last.fm/download/178349894/Mejor%2Bme%2Bvoy.mp3'),
(40, 157, 'Gladhander', 'http://freedownloads.last.fm/download/342508494/Gladhander.mp3'),
(40, 158, 'Daylight Machine', 'http://freedownloads.last.fm/download/407300062/Daylight%2BMachine.mp3'),
(40, 159, 'We Were Flying Kites', 'http://freedownloads.last.fm/download/342508501/We%2BWere%2BFlying%2BKites.mp3'),
(40, 160, 'Ownsome', 'http://freedownloads.last.fm/download/407317839/Ownsome.mp3'),
(41, 161, 'Streamline', 'http://freedownloads.last.fm/download/53906872/Streamline.mp3'),
(41, 162, 'Feel', 'http://freedownloads.last.fm/download/54107800/Feel.mp3'),
(41, 163, 'Times', 'http://freedownloads.last.fm/download/54108248/Times.mp3'),
(41, 164, 'Tomorrow', 'http://freedownloads.last.fm/download/54108482/Tomorrow.mp3'),
(42, 165, 'Curls', 'http://freedownloads.last.fm/download/664719797/Curls.mp3'),
(42, 166, 'Wind', 'http://freedownloads.last.fm/download/632937686/Wind.mp3'),
(42, 167, 'Distillatio', 'http://freedownloads.last.fm/download/664719726/Distillatio.mp3'),
(42, 168, 'Return', 'http://freedownloads.last.fm/download/611380751/Return.mp3'),
(43, 169, 'Highly Sophisticated', 'http://freedownloads.last.fm/download/89578669/Highly%2BSophisticated.mp3'),
(43, 170, 'Afterlife', 'http://freedownloads.last.fm/download/48526384/Afterlife.mp3'),
(43, 171, 'The Story of the Dragon Slayer', 'http://freedownloads.last.fm/download/63012354/The%2BStory%2Bof%2Bthe%2BDragon%2BSlayer.mp3'),
(43, 172, 'Tired of Feeling Like This', 'http://freedownloads.last.fm/download/89578671/Tired%2Bof%2BFeeling%2BLike%2BThis.mp3'),
(44, 173, 'Cruel Thing', 'http://freedownloads.last.fm/download/105311058/Cruel%2BThing.mp3'),
(44, 174, 'Love With the Proper Stranger', 'http://freedownloads.last.fm/download/22976099/Love%2BWith%2Bthe%2BProper%2BStranger.mp3'),
(44, 175, 'Stay the Night', 'http://freedownloads.last.fm/download/22972239/Stay%2Bthe%2BNight.mp3'),
(44, 176, 'Can''t Get Started', 'http://freedownloads.last.fm/download/683373190/Can%2527t%2BGet%2BStarted.mp3'),
(45, 177, 'Ng?t và d?ng', 'http://freedownloads.last.fm/download/181303924/Ng%25E1%25BB%258Dt%2Bv%25C3%25A0%2B%25C4%2591%25E1%25BA%25AFng.mp3'),
(45, 178, 'Ði?u Ru V?c Sâu', 'http://freedownloads.last.fm/download/116113065/%25C4%2590i%25E1%25BB%2587u%2BRu%2BV%25E1%25BB%25B1c%2BS%25C3%25A2u.mp3'),
(45, 179, 'V?ng', 'http://freedownloads.last.fm/download/116112726/V%25E1%25BA%25AFng.mp3'),
(45, 180, 'Ch?', 'http://freedownloads.last.fm/download/92690690/Ch%25E1%25BB%259D.mp3'),
(46, 181, 'Nh? Em Gi? L?y Tình Ta', 'http://freedownloads.last.fm/download/221122908/Nh%25E1%25BB%259D%2BEm%2BGi%25E1%25BB%25AF%2BL%25E1%25BA%25A5y%2BT%25C3%25ACnh%2BTa.mp3'),
(46, 182, 'Nhu Chi?c Que Diêm', 'http://freedownloads.last.fm/download/162357151/Nh%25C6%25B0%2BChi%25E1%25BA%25BFc%2BQue%2BDi%25C3%25AAm.mp3'),
(46, 183, 'Du Âm', 'http://freedownloads.last.fm/download/52852315/D%25C6%25B0%2B%25C3%2582m.mp3'),
(46, 184, 'Tình Khúc Th? Nh?t', 'http://freedownloads.last.fm/download/185020833/T%25C3%25ACnh%2BKh%25C3%25BAc%2BTh%25E1%25BB%25A9%2BNh%25E1%25BA%25A5t.mp3'),
(47, 185, 'Pão Com Cerveja', 'http://freedownloads.last.fm/download/7795317/P%25C3%25A3o%2BCom%2BCerveja.mp3'),
(47, 186, 'Siririca Baby', 'http://freedownloads.last.fm/download/4650350/Siririca%2BBaby.mp3'),
(47, 187, 'Muito bem comida', 'http://freedownloads.last.fm/download/6677042/Muito%2Bbem%2Bcomida.mp3'),
(47, 188, 'Beijos de Corpo', 'http://freedownloads.last.fm/download/10759670/Beijos%2Bde%2BCorpo.mp3'),
(48, 189, 'Young Money - Bedrock (Vindata Dance Remix)', 'http://freedownloads.last.fm/download/390272467/Young%2BMoney-%2BBedrock%2B%2528Vindata%2BDance%2BRemix%2529.mp3'),
(48, 190, 'Night Sky final', 'http://freedownloads.last.fm/download/417945669/Night%2BSky%2Bfinal.mp3'),
(48, 191, 'Wynter Gordon - Renegade (Vindata Remix)', 'http://freedownloads.last.fm/download/421985922/Wynter%2BGordon-%2BRenegade%2B%2528Vindata%2BRemix%2529.mp3'),
(48, 192, 'Band of Skulls - Fires (Vindata Remix)', 'http://freedownloads.last.fm/download/416371776/Band%2Bof%2BSkulls-%2BFires%2B%2528Vindata%2BRemix%2529.mp3'),
(49, 193, 'Unresolved', 'http://freedownloads.last.fm/download/502080123/Unresolved.mp3'),
(49, 194, 'Fragile Alliance', 'http://freedownloads.last.fm/download/502080178/Fragile%2BAlliance.mp3'),
(49, 195, 'Senior', 'http://freedownloads.last.fm/download/502081343/Senior.mp3'),
(49, 196, 'Kite House', 'http://freedownloads.last.fm/download/502081065/Kite%2BHouse.mp3'),
(50, 197, 'Nights Over Egypt feat. Carlitta Durand', 'http://freedownloads.last.fm/download/357048684/Nights%2BOver%2BEgypt%2Bfeat.%2BCarlitta%2BDurand.mp3'),
(50, 198, 'Crazy You feat. Sy Smith', 'http://freedownloads.last.fm/download/357051134/Crazy%2BYou%2Bfeat.%2BSy%2BSmith.mp3'),
(50, 199, 'Somethin'' Special feat. Yahzarah', 'http://freedownloads.last.fm/download/357049931/Somethin%2527%2BSpecial%2Bfeat.%2BYahzarah.mp3'),
(50, 200, 'Holding You, Loving You', 'http://freedownloads.last.fm/download/154605570/Holding%2BYou%252C%2BLoving%2BYou.mp3');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) CHARACTER SET ascii NOT NULL,
  `email` varchar(200) CHARACTER SET ascii NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`) VALUES
(1, 'jimi', '2e3817293fc275dbee74bd71ce6eb056', 'jimi@club27.com');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `playlists`
--
ALTER TABLE `playlists`
  ADD CONSTRAINT `playlists_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `playlists_tracks`
--
ALTER TABLE `playlists_tracks`
  ADD CONSTRAINT `playlists_tracks_ibfk_1` FOREIGN KEY (`playlist_id`) REFERENCES `playlists` (`playlist_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `playlists_tracks_ibfk_2` FOREIGN KEY (`track_id`) REFERENCES `tracks` (`track_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `tracks`
--
ALTER TABLE `tracks`
  ADD CONSTRAINT `tracks_ibfk_1` FOREIGN KEY (`artist_id`) REFERENCES `artists` (`artist_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;