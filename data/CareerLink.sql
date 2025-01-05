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
   
   CREATE Table offres_emploi(
    id int AUTO_INCREMENT PRIMARY KEY,
    poste VARCHAR(250),
    salaire FLOAT(20,2),
    qualifications_requises VARCHAR(250),
    lieu_travail VARCHAR(250),
    date_create  date,
    id_categorie int ,
    id_recruteur int ,
    date_delete  date,
    Foreign Key (id_categorie) REFERENCES categories(id) ON DELETE CASCADE ON UPDATE CASCADE,
    Foreign Key (id_recruteur) REFERENCES users(id) ON DELETE CASCADE ON UPDATE CASCADE

   );

   CREATE table offre_emploi_tags(
     id int AUTO_INCREMENT PRIMARY KEY,
      id_offre_emploi int ,
      id_tag int ,
        Foreign Key ( id_offre_emploi) REFERENCES offres_emploi(id) ON DELETE CASCADE ON UPDATE CASCADE,
       Foreign Key (id_tag) REFERENCES tags(id) ON DELETE CASCADE ON UPDATE CASCADE


   );
   CREATE Table emploi_candidat(
    status VARCHAR(250),
     id_offre_emploi int ,
      id_candidat int ,
      date_postulation DATETIME,
      Foreign Key ( id_offre_emploi) REFERENCES offres_emploi(id) ON DELETE CASCADE ON UPDATE CASCADE,
        Foreign Key (id_candidat) REFERENCES users(id) ON DELETE CASCADE ON UPDATE CASCADE,
           PRIMARY KEY(id_offre_emploi,id_candidat)


   );
 