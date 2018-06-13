/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     13/06/2018 01:18:25                          */
/*==============================================================*/


drop table if exists candidat;

drop table if exists cv;

drop table if exists detailoffre;

drop table if exists offre;

drop table if exists societe;

/*==============================================================*/
/* Table: candidat                                              */
/*==============================================================*/
create table candidat
(
   id_candidat          int not null,
   nom                  varchar(20),
   prenom               varchar(30),
   pass                 varchar(20),
   mail                 varchar(10),
   adresse              varchar(30),
   tel                  varchar(14),
   dateNaissance        date not null,
   primary key (id_candidat)
);

/*==============================================================*/
/* Table: cv                                                    */
/*==============================================================*/
create table cv
(
   id_cv                int not null,
   id_candidat          int,
   civilite             varchar(15),
   experience           text,
   formation            text,
   competence           text,
   situation            varchar(20) not null,
   domaine              varchar(10),
   disponibilite        varchar(15) not null,
   ville                varchar(10),
   niveauEtude          varchar(10),
   nom                  varchar(50),
   prenom               varchar(50),
   email                varchar(50),
   telephone            varchar(50),
   sexe                 varchar(1),
   datenaissance        date,
   photo                varchar(500),
   primary key (id_cv)
);

/*==============================================================*/
/* Table: detailoffre                                           */
/*==============================================================*/
create table detailoffre
(
   id_detail_offre      int not null,
   id_offre             int not null,
   missions             text,
   competence_req       varchar(30),
   primary key (id_detail_offre)
);

/*==============================================================*/
/* Table: offre                                                 */
/*==============================================================*/
create table offre
(
   id_offre             int not null,
   id_societe           int not null,
   poste                varchar(20),
   primary key (id_offre)
);

/*==============================================================*/
/* Table: societe                                               */
/*==============================================================*/
create table societe
(
   id_societe           int not null,
   nom                  varchar(20),
   primary key (id_societe)
);

alter table cv add constraint FK_ASSOCIATION_1 foreign key (id_candidat)
      references candidat (id_candidat) on delete restrict on update restrict;

alter table detailoffre add constraint FK_ASSOCIATION_2 foreign key (id_offre)
      references offre (id_offre) on delete restrict on update restrict;

alter table offre add constraint FK_ASSOCIATION_3 foreign key (id_societe)
      references societe (id_societe) on delete restrict on update restrict;

