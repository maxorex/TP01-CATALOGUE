-- Catégories (déduites des tags, sans duplication)
INSERT INTO categories (id, name, iconPath) VALUES
(1, 'Épée', 'sword.png'),
(2, 'Dague', 'dagger.png'),
(3, 'Hache', 'axe.png'),
(4, 'Arme d’hast', 'polearm.png'),
(5, 'Masse', 'mace.png'),
(6, 'Arc', 'bow.png'),
(7, 'Fléau d’arme', 'flail.png');


-- Armes
INSERT INTO weapons (id, name, description, price, category_id, stock, imagePath) VALUES
(1, 'Épée d’armes', 'Une épée polyvalente à une main utilisée par les chevaliers et les soldats.', 150.00, 1, 10, 'arming_sword.png'),
(2, 'Épée longue', 'Une version plus longue de l’épée d’armes, idéale pour la taille et l’estoc.', 200.00, 1, 5, 'longsword.png'),
(3, 'Dague de Castillon', 'Une petite lame facilement dissimulable, utilisée pour le combat rapproché et la discrétion.', 50.00, 2, 20, 'dagger.png'),
(4, 'Hache de bataille', 'Une hache lourde conçue pour le combat, capable d’infliger des coups puissants.', 250.00, 3, 7, 'battle_axe.png'),
(5, 'Hallebarde', 'Une arme d’hast dotée d’une lame de hache surmontée d’une pointe, utilisée pour tailler et frapper d’estoc.', 300.00, 4, 3, 'halberd.png'),
(6, 'Fauchon', 'Une épée à un seul tranchant avec une lame légèrement courbée, réputée pour sa puissance de coupe.', 180.00, 1, 5, 'falchion.png'),
(7, 'Rapière', 'Une épée fine destinée à l’estoc, prisée par les duellistes et la noblesse.', 220.00, 1, 8, 'rapier.png'),
(8, 'Zweihänder', 'Une immense épée à deux mains utilisée par des soldats d’élite et des mercenaires.', 400.00, 1, 2, 'zweihander.png'),
(9, 'Masse à ailettes', 'Une masse munie d’ailettes conçues pour pénétrer les armures.', 120.00, 5, 10, 'flanged_mace.png'),
(10, 'Morgenstern', 'Une masse hérissée de pointes capable d’infliger des dégâts dévastateurs.', 130.00, 5, 6, 'morning_star.png'),
(11, 'Marteau de guerre', 'Un mart  eau conçu pour le combat, particulièrement efficace contre les adversaires en armure.', 140.00, 5, 4, 'war_hammer.png'),
(13, 'Maillet de guerre', 'Un grand marteau lourd utilisé pour briser les armures et les fortifications.', 350.00, 5, 2, 'war_maul.png'),
(14, 'Bardiche', 'Une arme d’hast dotée d’une longue lame courbe fixée à un manche en bois.', 260.00, 4, 4, 'bardiche.png'),
(15, 'Dague à rouelles', 'Une dague munie d’un pommeau et d’une garde circulaires, courante à la fin du Moyen Âge.', 60.00, 2, 15, 'rondel_dagger.png'),
(16, 'Stylet', 'Une dague fine et allongée spécialement conçue pour l’estoc.', 55.00, 2, 25, 'stiletto_dagger.png'),
(17, 'Lance', 'Une arme d’hast dotée d’une pointe acérée, utilisée pour frapper d’estoc ou être lancée.', 100.00, 4, 10, 'spear.png'),
(19, 'Hache d’abattage', 'Une grande hache conçue pour couper le bois, mais également efficace au combat.', 200.00, 3, 8, 'felling_axe.png'),
(21, 'Épée courte', 'Une épée plus courte et maniable, utilisée pour le combat rapproché.', 120.00, 1, 12, 'short_sword.png'),
(22, 'Arc long', 'Un arc puissant capable de tirer des flèches à longue distance.', 180.00, 6, 5, 'long_bow.png'),
(23, 'Arc recourbé', 'Un arc avec des extrémités recourbées qui offrent une meilleure puissance de tir.', 200.00, 6, 7, 'recurve_bow.png'),
(24, 'Arc court', 'Un arc plus petit et plus maniable, idéal pour le combat rapproché.', 150.00, 6, 10, null),
(25, 'Hachette', 'Une petite hache à une main, souvent utilisée comme outil mais aussi comme arme de secours.', 80.00, 3, 12, 'hatchet.png');