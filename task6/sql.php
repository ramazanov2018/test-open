<?php
/*--  структура таблиц  --*/
/*
CREATE TABLE open_users(
            id INT NOT NULL PRIMARY KEY ,
            fio VARCHAR (200) NOT NULL,
            position VARCHAR (200) NOT NULL
*/

/*
CREATE TABLE open_group(
            id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
            group_name VARCHAR (200) NOT NULL,
            user_id_city VARCHAR (200) NOT NULL
*/

/*
CREATE TABLE open_city(
            city VARCHAR (200) NOT NULL,
            flag INT NOT NULL
*/
/*--  структура таблиц  --*/



/*--  Запрос  --*/

//Третью   таблицу не смог должным образом  объединить



$sql = "SELECT  SUBSTRING(u.fio, 1, INSTR(u.fio, ' ')-1) AS 'userSurname',
        SUBSTRING(u.fio, INSTR(u.fio, ' ')+1) AS 'fio',
        u.id AS 'UserId',
        u.position,
        g.group_name,
        g.id AS 'groupId'
        FROM open_users u
        LEFT JOIN open_group g
        ON  g.user_id_city REGEXP ('^'+u.id+'%')
        GROUP BY u.id";

/*--  Запрос  --*/