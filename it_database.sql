CREATE DATABASE it_db;
USE it_db;

CREATE TABLE faculty( f_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
 f_name varchar(60) NOT NULL ,
  f_designation varchar(255) NOT NULL , 
  f_qualification varchar(255) NOT NULL ,
   f_image varchar(30) NOT NULL ,
    f_cv varchar(30) NOT NULL )ENGINE=InnoDB;

CREATE TABLE students ( s_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  full_name varchar(60) NOT NULL, 
  email varchar(30) NOT NULL,
  roll varchar(30) NOT NULL,
  phone varchar(30) NOT NULL,
  gender varchar(10) NOT NULL,
  image varchar(30) NOT NULL,
  password varchar(255) NOT NULL,
  hash varchar(255) NOT NULL,
  bio varchar(255) NOT NULL,
  work_ex varchar(255) NOT NULL,
  coding varchar(255) NOT NULL,
  cca varchar(255) NOT NULL,
  sports varchar(255) NOT NULL,
  active int(1) NOT NULL DEFAULT '0',
  logged_in boolean NOT NULL DEFAULT FALSE )ENGINE=InnoDB;

CREATE TABLE it_news( news_ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  news varchar(255) NOT NULL
 )ENGINE=InnoDB;