ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY '';
#--Codigo para crear la base de la base de datos que se usará para el proyecto
#Se elimina la base de datos si es que existe una con el mismo nombre
drop database if exists proyecto_gym;
#Creamos la base de datos
create database proyecto_gym;
use proyecto_gym;
#--Creamos las tablas
drop table if exists administrador;
create table administrador(
    id int primary key auto_increment,
    nombre varchar(120) not null,
    area enum('administrativo', 'recepcion', 'entrenador', 'gerencia') not null,
    email varchar(120) not null,
    contra varchar(60) not null
);
drop table if exists usuarios;
create table usuarios (
    id int primary key auto_increment,
    idAdministrador int not null,
    foreign key fk_idAdministrador(idAdministrador) references administrador(id) on delete no action on update cascade,
    nombre varchar(120) not null,
    edad int not null,
    tipo_de_membresia int not null,
    email varchar(120) not null,
    contra varchar(60) not null
);
drop table if exists citas;
create table citas(
    id int primary key auto_increment,
    idUsuario int not null,
    foreign key fk_idUser(idUsuario) references usuarios(id) on delete no action on update cascade,
    fecha datetime,
    mensaje text
);
drop table if exists asistencias;
create table asistencias(
    idCita int not null,
    foreign key fk_idCita(idCita) references citas(id) on delete no action on update cascade,
    idUsuario int not null,
    foreign key fk_idUser(idUsuario) references usuarios(id) on delete no action on update cascade,
    confirmacion boolean not null
);