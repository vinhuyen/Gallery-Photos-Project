create database doanPhotos;
use doanPhotos;

create table Admin(
idAdmin int(10) primary key,
nameAdmin varchar (50) not null unique
);

create table Users(
userID int(10) primary key,
pass varchar(50) not null unique,
userName varchar(50) not null unique,
customerID int(10) unique not null,
foreign key(customerID) references Customer(customerID)
);

create table Customer(
customerID int(10) primary key,
cusName varchar(50) not null,
address varchar(50) not null,
email varchar(50) not null unique,
phone int(10) not null);

create table Photos(
idPhoto int(10) primary key,
idCategory int(10) not null,
namePhoto varchar(50) not null,
descriptions mediumtext not null,
foreign key(idCategory) references Category(idCategory)
);

create table Wishlist(
idPhoto int(10),
customerID int(10),
foreign key(idPhoto) references Photos(idPhoto),
foreign key(customerID) references Customer(customerID)
 );


create table Comments(
idcomment int(10) primary key,
customerID int(10) not null,
content varchar(1000) not null,
idPhoto int(10) not null,
foreign key(customerID) references Customer(customerID),
foreign key(idPhoto) references Photos(idPhoto)
);

create table Category(
idCategory int(10) primary key,
CategoryPhoto varchar(100) not null);