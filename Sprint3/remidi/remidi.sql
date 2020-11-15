create database contoh1;
use contoh1;
create table siswa (id int primary key, nama varchar (100));
insert into siswa (id, nama)
    -> values
    -> (1, 'farhan'),
    -> (2, 'rizky'),
    -> (3, 'alfan'),
    -> (4, 'revan'),
    -> (5, 'aldi');
create table nilai (id int primary key, siswa_id int, nilai int, foreign
key (siswa_id) references siswa(id));
insert into nilai (id, siswa_id, nilai)
    -> values
    -> (1, 1, 75),
    -> (2, 2, 80),
    -> (3, 3, 85),
    -> (4, 4, 55),
    -> (5, 5, 59);
select count(nama) from siswa;
select nama 
    -> from siswa
    -> inner join nilai
    -> on siswa.id=nilai.id
    -> where nilai.nilai >=75;
select nama
    -> from siswa
    -> inner join nilai
    -> on siswa.id=nilai.id
    -> where nilai.nilai < 60;