create database coba;
use coba;
create table users(id int primary key, nama varchar(255));
insert into users(id, nama) 
    -> values
    -> (1, 'salsa25'),
    -> (2, 'reva12');
create table identitas(id int primary key, user_id int, telepon int, 
    -> foreign key (user_id) references users(id));
insert into identitas(id, user_id, telepon)
    -> values
    -> (1, 1, 111),
    -> (2, 2, 222);
select *
    -> from users
    -> inner join identitas 
       on users.id = identitas.id;
select identitas.user_id, users.nama, identitas.telepon
    -> from identitas
    -> inner join users 
       on identitas.id = users.id;
------------------------------------------------------------------------
create table alamat(id int primary key, user_id int, nama varchar(255)
    -> , foreign key (user_id) references users(id));
insert into alamat(id, user_id, alamat)
    -> values
    -> (1, 1, 'jakarta'),
    -> (2, 2, 'surabaya');
select *
    -> from users
    -> inner join identitas on users.id = identitas.id
    -> inner join alamat on users.id = alamat.id;
select identitas.user_id, users.nama, identitas.telepon, alamat.alamat
    -> from identitas
    -> inner join users on identitas.id = users.id
    -> inner join alamat on identitas.id = alamat.id;
------------------------------------------------------
create table kategori_alamat(id int primary key, alamat_id int,  
    -> nama varchar(255), foreign key (alamat_id) references alamat(id));
insert into kategori_alamat(id, alamat_id, nama)
    -> values
    -> (1, 1, 'rumah'),
    -> (2, 2, 'kantor');
select *
    -> from users
    -> inner join identitas on users.id = identitas.id
    -> inner join alamat on users.id = alamat.id
    -> inner join kategori_alamat on users.id = kategori_alamat.id;
select identitas.user_id, users.nama, identitas.telepon, alamat.alamat,
    -> kategori_alamat.nama
    -> from users
    -> inner join identitas on users.id = identitas.id
    -> inner join alamat on users.id = alamat.id
    -> inner join kategori_alamat on users.id = kategori_alamat.id;