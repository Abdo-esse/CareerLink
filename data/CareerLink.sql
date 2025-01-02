-- Active: 1733434204073@@127.0.0.1@3306
CREATE DATABASE CareerLink ;
use CareerLink;
 CREATE Table roles(
    id int AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(50)
 );
 CREATE table users(
    id int AUTO_INCREMENT PRIMARY KEY,
    `name`  VARCHAR(250),
    email  VARCHAR(250),
    `password`  VARCHAR(250),
    id_role int ,
    FOREIGN KEY (id_role) REFERENCES roles(id) ON DELETE CASCADE ON UPDATE CASCADE
 );

 CREATE table info_recruteurs(
    id int AUTO_INCREMENT PRIMARY KEY,
    name_entreprise VARCHAR(250),
    email_professionnel  VARCHAR(250),
    id_recruteur int ,
    Foreign Key (id_recruteur) REFERENCES users(id) ON DELETE CASCADE ON UPDATE CASCADE
 );

 CREATE Table categories (
    id int AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(250),
    id_admin int ,
    date_delete  date,
    Foreign Key (id_admin) REFERENCES users(id) ON DELETE CASCADE ON UPDATE CASCADE


 );

  CREATE Table  tags (
    id int AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(250),
    id_admin int ,
    date_delete  date,
    Foreign Key (id_admin) REFERENCES users(id) ON DELETE CASCADE ON UPDATE CASCADE

  );
   
   CREATE Table emploi(
    
   )
