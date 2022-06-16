/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de cr�ation :  6/16/2022 11:17:20 AM                    */
/*==============================================================*/


drop table if exists level;

drop table if exists score;

drop table if exists player;

/*==============================================================*/
/* Table : level                                                */
/*==============================================================*/
create table level
(
   level_id             int not null AUTO_INCREMENT,
   name                 varchar(254),
   photo                varchar(254),
   primary key (level_id)
);

/*==============================================================*/
/* Table : score                                                */
/*==============================================================*/
create table score
(
   score_id             int not null AUTO_INCREMENT,
   player_id              int not null,
   level_id             int not null,
   date                 datetime,
   time_spent           int,
   primary key (score_id)
);

/*==============================================================*/
/* Table : player                                                 */
/*==============================================================*/
create table player
(
   player_id              int not null AUTO_INCREMENT,
   playername             varchar(254),
   email                varchar(254),
   password             varchar(254),
   primary key (player_id)
);

alter table score add constraint FK_Association_1 foreign key (player_id)
      references player (player_id) on delete restrict on update restrict;

alter table score add constraint FK_Association_2 foreign key (level_id)
      references level (level_id) on delete restrict on update restrict;

