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

