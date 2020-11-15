create database data_nilai;
use data_nilai;
create table data(
    -> id int auto_increment primary key,
    -> name varchar(255),
    -> divisi varchar(255),
    -> nilai int
    -> );
insert into data(name,divisi,nilai)
    -> values
    -> ('sarah','multimedia',80),
    -> ('farah','koki',85),
    -> ('farhan','marketer',83),
    -> ('aziz','multimedia',55),
    -> ('anggi','marketer',60),
    -> ('nisa','koki',65);
select count(name)
    -> from data;
select avg(nilai)
    -> from data;
select name
    -> from data
    -> where data.nilai>=80;
select name
    -> from data
    -> where data.nilai<=65;