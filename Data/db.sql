CREATE TABLE `articles` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `title` varchar(55),
  `description` TEXT ,
  `publish_date` DATETIME
)



INSERT INTO `articles` (`title`, `description`, `publish_date`) VALUES
('Les dernières avancées technologiques en IA', 'Cet article explore les progrès récents dans le domaine de l intelligence artificielle, mettant en lumière les applications émergentes, les défis et les implications éthiques. Des sujets tels que l apprentissage profond, la vision par ordinateur et les chatbots sont abordés en détail.', '2023-01-15 08:00:00'),
('Voyager à travers le temps avec la physique quantique', ' Découvrez les théories fascinantes de la physique quantique qui suggèrent la possibilité de voyager dans le temps. Cet article explore les concepts de distorsion temporelle, les expériences de pensée et les implications philosophiques liées à cette idée intrigante.', '2023-02-10 12:30:00'),
('Les bienfaits de la méditation pour la santé mentale', 'Plongez dans les avantages de la méditation sur la santé mentale. Cet article examine les effets positifs de la méditation sur le stress, l anxiété et la concentration. Des techniques de méditation populaires et des études scientifiques récentes sont également présentées.', '2023-03-05 18:45:00');


