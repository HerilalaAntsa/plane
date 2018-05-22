/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     22/05/2018 16:14:23                          */
/*==============================================================*/


drop table if exists ADMINISTRATEUR;

drop table if exists AVION;

drop table if exists CLIENT;

drop table if exists DETAILRESERVATION;

drop table if exists RESERVATION;

drop table if exists VOL;

/*==============================================================*/
/* Table: ADMINISTRATEUR                                        */
/*==============================================================*/
create table ADMINISTRATEUR
(
   IDADMIN              int not null auto_increment,
   NOMADMIN             varchar(50) not null,
   EMAILADMIN           varchar(50) not null,
   PASSWORDADMIN        varchar(50) not null,
   primary key (IDADMIN)
);

/*==============================================================*/
/* Table: AVION                                                 */
/*==============================================================*/
create table AVION
(
   IDAVION              int not null auto_increment,
   NOMAVION             varchar(50) not null,
   CONSOMMATIONAVION    double not null,
   NOMBREPASSAGERAVION  smallint not null,
   primary key (IDAVION)
);

/*==============================================================*/
/* Table: CLIENT                                                */
/*==============================================================*/
create table CLIENT
(
   IDCLIENT             int not null auto_increment,
   NOMCLIENT            varchar(50) not null,
   PRENOMCLIENT         varchar(50) not null,
   DATENAISSANCECLIENT  varchar(50) not null,
   EMAILCLIENT          varchar(50) not null,
   TELEPHONECLIENT      varchar(50) not null,
   ADRESSECLIENT        varchar(50) not null,
   SEXECLIENT           varchar(10),
   primary key (IDCLIENT)
);

/*==============================================================*/
/* Table: DETAILRESERVATION                                     */
/*==============================================================*/
create table DETAILRESERVATION
(
   IDDETAILRESERVATION  int not null auto_increment,
   IDRESERVATION        int not null,
   NOMPASSAGER          varchar(50),
   PRENOMPASSAGER       varchar(50),
   DATENAISSANCE        date,
   primary key (IDDETAILRESERVATION)
);

/*==============================================================*/
/* Table: RESERVATION                                           */
/*==============================================================*/
create table RESERVATION
(
   IDRESERVATION        int not null auto_increment,
   IDCLIENT             int not null,
   IDVOL                int not null,
   NUMERORESERVATION    varchar(50) not null,
   NOMBREADULTE         smallint not null,
   NOMBREENFANT         smallint not null,
   NOMBREBEBE           smallint not null,
   CLASSE               bool not null,
   primary key (IDRESERVATION)
);

/*==============================================================*/
/* Table: VOL                                                   */
/*==============================================================*/
create table VOL
(
   IDVOL                int not null auto_increment,
   IDAVION              int not null,
   VILLEDEPART          varchar(100) not null,
   VILLEARRIVE          varchar(100) not null,
   DATEDEPART           timestamp not null,
   DATEARRIVE           timestamp not null,
   DISTANCEVOL          double,
   TARIFENFANT          float,
   TARIFADULTE          float,
   TARIFBEBE            float,
   TARIFENFANTEAFFAIRE  float,
   TARIFADULTEAFFAIRE   float,
   TARIFBEBEAFFAIRE     float,
   primary key (IDVOL)
);

alter table DETAILRESERVATION add constraint FK_ASSOCIATION_5 foreign key (IDRESERVATION)
      references RESERVATION (IDRESERVATION) on delete restrict on update restrict;

alter table RESERVATION add constraint FK_ASSOCIATION_1 foreign key (IDCLIENT)
      references CLIENT (IDCLIENT) on delete restrict on update restrict;

alter table RESERVATION add constraint FK_RESERVATION_VOL foreign key (IDVOL)
      references VOL (IDVOL) on delete restrict on update restrict;

alter table VOL add constraint FK_ASSOCIATION_4 foreign key (IDAVION)
      references AVION (IDAVION) on delete restrict on update restrict;

