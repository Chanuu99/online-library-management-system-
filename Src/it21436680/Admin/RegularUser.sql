CREATE DATABASE online_library;

CREATE TABLE regular_user (
  Frist_Name varchar(200) NOT NULL,
  Last_Name varchar(200) NOT NULL,
  Email varchar(200) NOT NULL DEFAULT '@gmail.com',
  Password varchar(12) DEFAULT NULL,
  
  RID int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT
);

ALTER TABLE regular_user AUTO_INCREMENT=1;
/*
insert into regular_user(Frist_Name, Last_Name, Email, Password) values('Hashini','Nanayakkara','hashinin@gmail.com','Fy3246#') 
insert into regular_user(Frist_Name, Last_Name, Email, Password) values('David','Jons','djons@gmail.com','123#') 
*/