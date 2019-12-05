Create table user(
    username varchar(100) primary key,
    password varchar(100),
    nama varchar(100),
    status varchar(100)
);

Insert into user(Username, Password, Nama, Status)
Values ("admin", "1234", "Admin Aplikasi", "Administrator");

Insert into user(Username, Password, Nama, Status)
Values("adul", "1111", "Adul Adullah", "Member");