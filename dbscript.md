#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: users
#------------------------------------------------------------

CREATE TABLE users(
        username  Varchar (255) NOT NULL ,
        firstname Varchar (255) NOT NULL ,
        lastname  Varchar (255) NOT NULL ,
        password  Varchar (255) NOT NULL ,
        type      Varchar (255) NOT NULL
	,CONSTRAINT users_PK PRIMARY KEY (username)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: videos
#------------------------------------------------------------

CREATE TABLE videos(
        id_video         Int NOT NULL ,
        reponse_correcte Int NOT NULL ,
        url              Varchar (255) NOT NULL
	,CONSTRAINT videos_PK PRIMARY KEY (id_video)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: resultats
#------------------------------------------------------------

CREATE TABLE resultats(
        username       Varchar (100) NOT NULL ,
        resultat_quizz Int NOT NULL ,
        resultat_video Int NOT NULL
	,CONSTRAINT resultats_PK PRIMARY KEY (username)
)ENGINE=InnoDB;



Connection DB 000webhost.com

db name: id13151380_ffd
username: id13151380_jeremy
password: =7PX!xvY*Gl=#&8/