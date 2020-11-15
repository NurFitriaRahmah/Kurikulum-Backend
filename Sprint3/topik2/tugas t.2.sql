create database pondokit;
use pondokit;
create table santri
(
    id int auto_increment primary key,
    name varchar(200),
    age int,
    divisi varchar(200)
);
insert into santri(name,age,divisi)
    values
    ('silva', 15, 'programmer'),
    ('aldi', 15, 'marketer'),
    ('putri', 17, 'multimedia'),
    ('evan', 19, 'programmer'),
    ('salsa', 16, 'koki'),
    ('angga', 18, 'multimedia'),
    ('elsa', 20, 'marketer'),
    ('akhsan', 25, 'networker'),
    ('anggi', 21, 'networker'),
    ('fadhil', 18, 'marketer'),
    ('ema', 18, 'koki'),
    ('sarah', 20, 'koki'),
    ('febri', 16, 'multimedia'),
    ('jihan', 18, 'programmer'),
    ('umar', 19, 'marketer'),
    ('fauzan', 17, 'multimedia'),
    ('arin', 22, 'koki'),
    ('syarif', 25, 'programmer'),
    ('farhan', 16, 'networker'),
    ('silmi', 19, 'koki');
select name,age,divisi from santri where id = 13;
update santri
set name = 'Ahsan S', age = 23, divisi = 'Programmer'
where id = 17;
delete from santri where id = 19;
insert into santri(name,age,divisi)
     values
     ('zahra', 19, 'koki'),
     ('andi', 20, 'programmer'),
     ('laras', 22, 'multimedia'),
     ('a', 25, 'marketer'),
     ('b', 23, 'marketer');
select * from santri
order by age desc;
select * from santri
order by age;
select * from santri
limit 15;
select count(*)
from santri;
select * avg(id)
from santri;
select count(id), age
from santri
group by age;