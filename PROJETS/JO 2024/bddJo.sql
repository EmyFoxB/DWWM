#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Matchs
#------------------------------------------------------------

CREATE TABLE Matchs(
        id_match Int  Auto_increment  NOT NULL ,
        date     Date NOT NULL ,
        score    Int NOT NULL
	,CONSTRAINT Matchs_PK PRIMARY KEY (id_match)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Classement
#------------------------------------------------------------

CREATE TABLE Classement(
        id_classement Int  Auto_increment  NOT NULL ,
        rang          Int NOT NULL
	,CONSTRAINT Classement_PK PRIMARY KEY (id_classement)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Equipes
#------------------------------------------------------------

CREATE TABLE Equipes(
        id_equipe     Int  Auto_increment  NOT NULL ,
        pays          Varchar (50) NOT NULL ,
        entraineur    Varchar (50) NOT NULL ,
        sexe          Varchar (50) NOT NULL ,
        id_classement Int NOT NULL
	,CONSTRAINT Equipes_PK PRIMARY KEY (id_equipe)

	,CONSTRAINT Equipes_Classement_FK FOREIGN KEY (id_classement) REFERENCES Classement(id_classement)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Joueurs
#------------------------------------------------------------

CREATE TABLE Joueurs(
        id_joueur Int  Auto_increment  NOT NULL ,
        nom       Varchar (50) NOT NULL ,
        prenom    Varchar (50) NOT NULL ,
        ddn       Date NOT NULL ,
        poste     Varchar (255) NOT NULL ,
        id_equipe Int NOT NULL
	,CONSTRAINT Joueurs_PK PRIMARY KEY (id_joueur)

	,CONSTRAINT Joueurs_Equipes_FK FOREIGN KEY (id_equipe) REFERENCES Equipes(id_equipe)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: User
#------------------------------------------------------------

CREATE TABLE User(
        id_user  Int  Auto_increment  NOT NULL ,
        mail     Varchar (50) NOT NULL ,
        password Varchar (255) NOT NULL ,
        role     Varchar (50) NOT NULL
	,CONSTRAINT User_PK PRIMARY KEY (id_user)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: joue
#------------------------------------------------------------

CREATE TABLE joue(
        id_match  Int NOT NULL ,
        id_equipe Int NOT NULL
	,CONSTRAINT joue_PK PRIMARY KEY (id_match,id_equipe)

	,CONSTRAINT joue_Matchs_FK FOREIGN KEY (id_match) REFERENCES Matchs(id_match)
	,CONSTRAINT joue_Equipes0_FK FOREIGN KEY (id_equipe) REFERENCES Equipes(id_equipe)
)ENGINE=InnoDB;

INSERT INTO Equipes (id_equipe, pays, entraineur, sexe) VALUES (1, 'France', 'Andrea GIANI', 'Masculin');
INSERT INTO Equipes (id_equipe, pays, entraineur, sexe) VALUES (2, 'Slovénie', 'Gheorghe Crețu', 'Masculin');
INSERT INTO Equipes (id_equipe, pays, entraineur, sexe) VALUES (3, 'Canada', 'Tuomas Sammelvuo', 'Masculin');
INSERT INTO Equipes (id_equipe, pays, entraineur, sexe) VALUES (4, 'Serbie', 'Igor Kolaković', 'Masculin');
INSERT INTO Equipes (id_equipe, pays, entraineur, sexe) VALUES (5, 'Pologne', 'Nikola Grbić', 'Masculin');
INSERT INTO Equipes (id_equipe, pays, entraineur, sexe) VALUES (6, 'Italie', 'Ferdinando De Giorgi', 'Masculin');
INSERT INTO Equipes (id_equipe, pays, entraineur, sexe) VALUES (7, 'Brésil', 'Bernardo Rocha de Rezende', 'Masculin');
INSERT INTO Equipes (id_equipe, pays, entraineur, sexe) VALUES (8, 'Égypte', 'Hossam Hassan', 'Masculin');
INSERT INTO Equipes (id_equipe, pays, entraineur, sexe) VALUES (9, 'Japon', 'Philippe Blain', 'Masculin');
INSERT INTO Equipes (id_equipe, pays, entraineur, sexe) VALUES (10, 'États-Unis', 'John Speraw', 'Masculin');
INSERT INTO Equipes (id_equipe, pays, entraineur, sexe) VALUES (11, 'Argentine', 'Marcelo Méndez', 'Masculin');
INSERT INTO Equipes (id_equipe, pays, entraineur, sexe) VALUES (12, 'Allemagne', 'Alexander Waibl', 'Masculin');


INSERT INTO Joueurs (id_joueur, nom, prenom, ddn, poste) VALUES (1, 'CHINENYEZE', 'Barthélémy', 28/02/98, 'Central');
INSERT INTO Joueurs (id_joueur, nom, prenom, ddn, poste) VALUES (1, 'CHINENYEZE', 'Barthélémy', 28/02/98, 'Central');
INSERT INTO Joueurs (id_joueur, nom, prenom, ddn, poste) VALUES (1, 'CHINENYEZE', 'Barthélémy', 28/02/98, 'Central');
INSERT INTO Joueurs (id_joueur, nom, prenom, ddn, poste) VALUES (1, 'CHINENYEZE', 'Barthélémy', 28/02/98, 'Central');
INSERT INTO Joueurs (id_joueur, nom, prenom, ddn, poste) VALUES (1, 'CHINENYEZE', 'Barthélémy', 28/02/98, 'Central');
INSERT INTO Joueurs (id_joueur, nom, prenom, ddn, poste) VALUES (1, 'CHINENYEZE', 'Barthélémy', 28/02/98, 'Central');
INSERT INTO Joueurs (id_joueur, nom, prenom, ddn, poste) VALUES (1, 'CHINENYEZE', 'Barthélémy', 28/02/98, 'Central');
INSERT INTO Joueurs (id_joueur, nom, prenom, ddn, poste) VALUES (1, 'CHINENYEZE', 'Barthélémy', 28/02/98, 'Central');
INSERT INTO Joueurs (id_joueur, nom, prenom, ddn, poste) VALUES (1, 'CHINENYEZE', 'Barthélémy', 28/02/98, 'Central');
INSERT INTO Joueurs (id_joueur, nom, prenom, ddn, poste) VALUES (1, 'CHINENYEZE', 'Barthélémy', 28/02/98, 'Central');
INSERT INTO Joueurs (id_joueur, nom, prenom, ddn, poste) VALUES (1, 'CHINENYEZE', 'Barthélémy', 28/02/98, 'Central');
INSERT INTO Joueurs (id_joueur, nom, prenom, ddn, poste) VALUES (1, 'CHINENYEZE', 'Barthélémy', 28/02/98, 'Central');
INSERT INTO Joueurs (id_joueur, nom, prenom, ddn, poste) VALUES (1, 'CHINENYEZE', 'Barthélémy', 28/02/98, 'Central');
INSERT INTO Joueurs (id_joueur, nom, prenom, ddn, poste) VALUES (1, 'CHINENYEZE', 'Barthélémy', 28/02/98, 'Central');
INSERT INTO Joueurs (id_joueur, nom, prenom, ddn, poste) VALUES (1, 'CHINENYEZE', 'Barthélémy', 28/02/98, 'Central');