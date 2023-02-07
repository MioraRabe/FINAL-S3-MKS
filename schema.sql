CREATE DATABASE takalo;
USE takalo;

create table Users (
    idUser INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(100),
    email VARCHAR(50),
    mdp VARCHAR(20),
    typeUser INT NOT NULL 
);

create table Categorie (
    idCat INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nomCat VARCHAR(50)  
);

create table Objet (
    idObjet INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50),
    descri TEXT,
    idCategorie INT,
    valeur DOUBLE,
    cover VARCHAR(255),
    Foreign Key (idCategorie) REFERENCES Categorie(idCat)
);

create table Proprio (
    idUser INT NOT NULL,
    idObj INT NOT NULL,
    datePossess DATETIME,
    Foreign Key (idUser) REFERENCES Users(idUser),
    Foreign Key (idObj) REFERENCES Objet(idObjet)
);

create table Proposition (
    idProp INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    idUser1 INT NOT NULL,
    idObjet1 INT NOT NULL,
    idUser2 INT NOT NULL,
    idObjet2 INT NOT NULL,
    dateProp date,
    Foreign Key (idUser1) REFERENCES Users(idUser),
    Foreign Key (idObjet1) REFERENCES Objet(idObjet),
    Foreign Key (idUser2) REFERENCES Users(idUser),
    Foreign Key (idObjet2) REFERENCES Objet(idObjet)
);

create table Transac (
    idProp INT NOT NULL PRIMARY KEY,
    dateTransac DATETIME,
    typeTransac INT NOT,
    Foreign Key (idProp) REFERENCES Proposition(idProp)
);