#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Region
#------------------------------------------------------------

CREATE TABLE Region(
        Code_Region Varchar (50) NOT NULL ,
        Nom_Region  Varchar (50) NOT NULL ,
        Population  BigInt NOT NULL
	,CONSTRAINT Region_PK PRIMARY KEY (Code_Region)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Depot
#------------------------------------------------------------

CREATE TABLE Depot(
        Nom_Depot     Varchar (50) NOT NULL ,
        Adresse_Depot Varchar (50) NOT NULL ,
        Stock         Int NOT NULL ,
        Code_Region   Varchar (50) NOT NULL
	,CONSTRAINT Depot_PK PRIMARY KEY (Nom_Depot)

	,CONSTRAINT Depot_Region_FK FOREIGN KEY (Code_Region) REFERENCES Region(Code_Region)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Editeur
#------------------------------------------------------------

CREATE TABLE Editeur(
        Nom_Editeur     Varchar (50) NOT NULL ,
        Adresse_Editeur Varchar (50) NOT NULL ,
        Raison_Sociale  Varchar (50) NOT NULL
	,CONSTRAINT Editeur_PK PRIMARY KEY (Nom_Editeur)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Ouvrage
#------------------------------------------------------------

CREATE TABLE Ouvrage(
        Titre_Ouvrage Varchar (50) NOT NULL ,
        Numero_ISBN   Int NOT NULL ,
        Ecrivain      Varchar (50) NOT NULL ,
        Theme         Varchar (50) NOT NULL ,
        Nom_Editeur   Varchar (50) NOT NULL
	,CONSTRAINT Ouvrage_PK PRIMARY KEY (Titre_Ouvrage)

	,CONSTRAINT Ouvrage_Editeur_FK FOREIGN KEY (Nom_Editeur) REFERENCES Editeur(Nom_Editeur)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Ecrivain
#------------------------------------------------------------

CREATE TABLE Ecrivain(
        idEcrivain   Varchar (50) NOT NULL ,
        Nom_Ecrivain Varchar (50) NOT NULL
	,CONSTRAINT Ecrivain_PK PRIMARY KEY (idEcrivain)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: stocker
#------------------------------------------------------------

CREATE TABLE stocker(
        Nom_Depot      Varchar (50) NOT NULL ,
        Titre_Ouvrage  Varchar (50) NOT NULL ,
        Nom_Editeur    Varchar (50) NOT NULL ,
        Quantite_Stock Int NOT NULL
	,CONSTRAINT stocker_PK PRIMARY KEY (Nom_Depot,Titre_Ouvrage,Nom_Editeur)

	,CONSTRAINT stocker_Depot_FK FOREIGN KEY (Nom_Depot) REFERENCES Depot(Nom_Depot)
	,CONSTRAINT stocker_Ouvrage0_FK FOREIGN KEY (Titre_Ouvrage) REFERENCES Ouvrage(Titre_Ouvrage)
	,CONSTRAINT stocker_Editeur1_FK FOREIGN KEY (Nom_Editeur) REFERENCES Editeur(Nom_Editeur)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: ecrire
#------------------------------------------------------------

CREATE TABLE ecrire(
        idEcrivain    Varchar (50) NOT NULL ,
        Titre_Ouvrage Varchar (50) NOT NULL
	,CONSTRAINT ecrire_PK PRIMARY KEY (idEcrivain,Titre_Ouvrage)

	,CONSTRAINT ecrire_Ecrivain_FK FOREIGN KEY (idEcrivain) REFERENCES Ecrivain(idEcrivain)
	,CONSTRAINT ecrire_Ouvrage0_FK FOREIGN KEY (Titre_Ouvrage) REFERENCES Ouvrage(Titre_Ouvrage)
)ENGINE=InnoDB;

