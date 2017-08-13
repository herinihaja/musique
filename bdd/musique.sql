/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  13/08/2017 12:27:46                      */
/*==============================================================*/


drop table if exists ADMIN;

drop table if exists ARTISTE;

drop table if exists CLIENT;

drop table if exists COMMENTAIRE;

drop table if exists JAIME;

drop table if exists LOGIN;

drop table if exists LOGINADMIN;

drop table if exists MUSIQUE;

drop table if exists TYPEMUSIQUE;

/*==============================================================*/
/* Table : ADMIN                                                */
/*==============================================================*/
create table ADMIN
(
   IDADMIN              int not null,
   NOM                  varchar(30) not null,
   PRENOM               varchar(30) not null,
   SEXE                 varchar(1) not null,
   LOGIN                varchar(50) not null,
   MOTDEPASSE           varchar(100) not null,
   primary key (IDADMIN)
);

/*==============================================================*/
/* Table : ARTISTE                                              */
/*==============================================================*/
create table ARTISTE
(
   IDARTISTE            int not null,
   NOM                  varchar(30) not null,
   PRENOM               varchar(30) not null,
   PSEUDO               varchar(30) not null,
   primary key (IDARTISTE)
);

/*==============================================================*/
/* Table : CLIENT                                               */
/*==============================================================*/
create table CLIENT
(
   IDCLIENT             int not null,
   NOM                  varchar(30) not null,
   PRENOM               varchar(30) not null,
   DATENAISSANCE        date not null,
   SEXE                 varchar(1) not null,
   primary key (IDCLIENT)
);

/*==============================================================*/
/* Table : COMMENTAIRE                                          */
/*==============================================================*/
create table COMMENTAIRE
(
   IDCOMMENTAIRE        int not null,
   IDCLIENT             int,
   IDMUSIQUE            int,
   CONTENU              varchar(1000) not null,
   DATECOMMENTAIRE      datetime not null,
   primary key (IDCOMMENTAIRE)
);

/*==============================================================*/
/* Table : JAIME                                                */
/*==============================================================*/
create table JAIME
(
   IDJAIME              int not null,
   IDCLIENT             int,
   IDMUSIQUE            int,
   VALEUR               bool not null,
   DATEJAIME            datetime not null,
   primary key (IDJAIME)
);

/*==============================================================*/
/* Table : LOGIN                                                */
/*==============================================================*/
create table LOGIN
(
   IDLOGIN              int not null,
   IDCLIENT             int,
   PSEUDO               varchar(30) not null,
   MOTDEPASSE           varchar(100) not null,
   DATELOGIN            date not null,
   primary key (IDLOGIN)
);

/*==============================================================*/
/* Table : LOGINADMIN                                           */
/*==============================================================*/
create table LOGINADMIN
(
   IDLOGINADMIN         int not null,
   PSEUDO               varchar(30),
   MOTDEPASSE           varchar(100),
   DATELOGIN            date,
   primary key (IDLOGINADMIN)
);

/*==============================================================*/
/* Table : MUSIQUE                                              */
/*==============================================================*/
create table MUSIQUE
(
   IDMUSIQUE            int not null,
   IDTYPEMUSIQUE        int not null,
   IDARTISTE            int not null,
   TITRE                varchar(100) not null,
   DESCRIPTION          varchar(1000) not null,
   LIENYOUTUBE          varchar(400) not null,
   primary key (IDMUSIQUE)
);

/*==============================================================*/
/* Table : TYPEMUSIQUE                                          */
/*==============================================================*/
create table TYPEMUSIQUE
(
   IDTYPEMUSIQUE        int not null,
   LIBELLE              varchar(90) not null,
   primary key (IDTYPEMUSIQUE)
);

alter table COMMENTAIRE add constraint FK_ASSOCIATION_4 foreign key (IDCLIENT)
      references CLIENT (IDCLIENT) on delete restrict on update restrict;

alter table COMMENTAIRE add constraint FK_COMS_MUSIQUE foreign key (IDMUSIQUE)
      references MUSIQUE (IDMUSIQUE) on delete restrict on update restrict;

alter table JAIME add constraint FK_CLIENT_JAIME foreign key (IDCLIENT)
      references CLIENT (IDCLIENT) on delete restrict on update restrict;

alter table JAIME add constraint FK_JAIME_MUSIQUE foreign key (IDMUSIQUE)
      references MUSIQUE (IDMUSIQUE) on delete restrict on update restrict;

alter table LOGIN add constraint FK_LOGIN foreign key (IDCLIENT)
      references CLIENT (IDCLIENT) on delete restrict on update restrict;

alter table MUSIQUE add constraint FK_ARTISTE_MUSIQUE foreign key (IDARTISTE)
      references ARTISTE (IDARTISTE) on delete restrict on update restrict;

alter table MUSIQUE add constraint FK_MUSIQUE_TYPE foreign key (IDTYPEMUSIQUE)
      references TYPEMUSIQUE (IDTYPEMUSIQUE) on delete restrict on update restrict;

