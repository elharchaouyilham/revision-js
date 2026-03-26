create database bibliotheque;
use bibliotheque;
create table utilisateur (
id int primary key auto_increment ,
name varchar(30),
email varchar (50),
password varchar(10)
);
 create table role (
 id int primary key auto_increment ,
 title enum ('adherent','bibliothecaire')
 );
 create table profile(
id int primary key auto_increment ,  
name varchar(40),
email varchar(30),
image varchar(50)
 );
create table post(
id int primary key auto_increment ,


 );
create table commentaire(
id int primary key auto_increment ,
description text
 );
create table experience(
id int primary key auto_increment ,
 );