-- Active: 1665046349126@@127.0.0.1@3306@cvven

CREATE TABLE IF NOT EXISTS Client(
   id_client AUTO_INCREMENT INT, 
   nom VARCHAR(50),
   prenom VARCHAR(50),
   adresse VARCHAR(50),
   tel INT,
   login VARCHAR(50),
   mdp VARCHAR(50),
   PRIMARY KEY(id_client)
);

CREATE TABLE IF NOT EXISTS Paiement(
   id_paiement INT,
   date_paiement DATE,
   somme DECIMAL(15,2),
   PRIMARY KEY(id_paiement)
);

CREATE TABLE IF NOT EXISTS Hotel(
   codeHotel INT,
   Adresse VARCHAR(50),
   Codepostal INT NOT NULL,
   ville VARCHAR(50),
   numtel INT,
   PRIMARY KEY(codeHotel)
);

CREATE TABLE IF NOT EXISTS Activités_et_Services(
   id_serv VARCHAR(50),
   type_serv VARCHAR(50),
   prix VARCHAR(50),
   disponibilité VARCHAR(50),
   PRIMARY KEY(id_serv)
);

CREATE TABLE IF NOT EXISTS Categorie(
   id_categ INT,
   type_categ VARCHAR(50),
   PRIMARY KEY(id_categ)
);

CREATE TABLE Réservation(
   id_reserva INT,
   reponse VARCHAR(50),
   nb_places INT,
   premiere_validation VARCHAR(50),
   validation_definitive VARCHAR(50),
   type_reservation VARCHAR(50),
   id_paiement INT,
   id_client INT NOT NULL,
   PRIMARY KEY(id_reserva),
   FOREIGN KEY(id_paiement) REFERENCES Paiement(id_paiement),
   FOREIGN KEY(id_client) REFERENCES Client(id_client)
);

CREATE TABLE Hebergement(
   num_chambres INT,
   capacité DECIMAL(15,2),
   pieces VARCHAR(50),
   tarif DECIMAL(15,2),
   id_categ INT NOT NULL,
   id_reserva INT NOT NULL,
   PRIMARY KEY(num_chambres),
   FOREIGN KEY(id_categ) REFERENCES Categorie(id_categ),
   FOREIGN KEY(id_reserva) REFERENCES Réservation(id_reserva)
);

CREATE TABLE possède(
   codeHotel INT,
   num_chambres INT,
   PRIMARY KEY(codeHotel, num_chambres),
   FOREIGN KEY(codeHotel) REFERENCES Hotel(codeHotel),
   FOREIGN KEY(num_chambres) REFERENCES Hebergement(num_chambres)
);

CREATE TABLE contient(
   id_paiement INT,
   id_serv VARCHAR(50),
   PRIMARY KEY(id_paiement, id_serv),
   FOREIGN KEY(id_paiement) REFERENCES Paiement(id_paiement),
   FOREIGN KEY(id_serv) REFERENCES Activités_et_Services(id_serv)
);




INSERT INTO `client` (`id_client`, `nom`, `prenom`, `adresse`, `tel`, `login`, `mdp`) 
VALUES ('', 'michel', 'sardou', '14 boulevard du sardou', '0707070707', 'sardou.michel', MD5('sardou'));