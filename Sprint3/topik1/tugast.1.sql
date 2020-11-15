create database pondokit;
use pondokit;
create table santri
(
    id int auto_increment primary key,
    name varchar(20),
    age int,
    birth_place varchar(20),
    birth_date date,
    hobby varchar(20)
);
rename table santri to siswa;
