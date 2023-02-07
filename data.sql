use takalo;

insert into Users values(null, 'Admin', 'admin@gmail.com', 'admin', 0);
insert into Users values(null, 'Toky', 'toky@gmail.com', 'toky', 1);
insert into Users values(null, 'Angelo', 'angelo@gmail.com', 'angelo', 1);
insert into Users values(null, 'Mathias', 'mathias@gmail.com', 'mathias', 1);

insert into Categorie values(null, 'Vetements');
insert into Categorie values(null, 'Livre');
insert into Categorie values(null, 'Informatique');

insert into Objet values(null, 'Tshirt TNF', 'Tshirt blanc avec logo the north face tendance jeune', 1, 15000, 'Vetements/1.png');
insert into Objet values(null, 'Les Détectives du Yorkshire', 'LA MORT FAIT SON INTÉRESSANTE Le huitième tome de la série best-seller Les Détectives du Yorkshire', 2, 10000, 'Livre/1.png');
insert into Objet values(null, 'MacBook Pro 13 pouces', 'Avec la nouvelle puce M2, le MacBook Pro 13 pouces repousse ses propres limites. Fidèle à son design compact, il offre jusqu’à 20 heures d’autonomie', 3, 4000000, 'Informatique/1.png');
insert into Objet values(null, 'veste en Jean', '1 denim Jacket de chez Levis', 1, 50000, 'Vetements/2.png');
insert into Objet values(null, 'Roman d un non-mort', 'Roman fantastique jeunesse sorti en 2014', 2, 10000, 'Livre/2.png');
insert into Objet values(null, 'tablette graphique Wacon Intuos', 'fonctionne par bluetooth. 7 pouces. 249g', 3, 400000, 'Informatique/2.png');
insert into Objet values(null, 'jupe carreaux', 'Jupe plissée courte Taille Haute pour femme', 1, 30000 , 'Vetements/3.png');
insert into Objet values(null, 'Vingt mille lieue sous la mer', 'Roman d'aventure, anticipation fantastique', 2, 20000, 'Livre/3.png');
insert into Objet values(null, 'Souris', 'KLIM Souris Gamer Haute Précision', 3, 40000, 'Informatique/3.png');

insert into Proprio values(1, 1, 2022-10-12);
insert into Proprio values(1, 2, 2023-01-01);
insert into Proprio values(2, 3, 2022-05-02);
insert into Proprio values(2, 4, 2023-02-01);
insert into Proprio values(3, 5, 2022-11-13);
insert into Proprio values(3, 6, 2022-10-03);
insert into Proprio values(4, 7, 2023-01-12);
insert into Proprio values(4, 8, 2022-09-02);

insert into Proposition values(null, 2, 3, 3, 5, 2023-01-20);
insert into Proposition values(null, 4, 8, 1, 1, 2023-01-31);

insert into Transac values(1, 2023-01-21, 0);
insert into Transac values(2, 2023-02-01, 1);
