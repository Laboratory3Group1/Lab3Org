CREATE DATABASE IF NOT EXISTS dbTaskManagement;
USE dbTaskManagement;

drop database dbTaskManagement;

CREATE TABLE tasks (
    id int primary key auto_increment,
    taskname varchar(255) not null,
    date datetime,
    status varchar(255) NOT NULL
);
