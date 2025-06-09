create database snapit;

use snapit;

create table users (
    id int primary key auto_increment,
    email varchar(100) unique not null,
    username varchar(100) unique not null,
    password varchar(100) not null,
    avatar_path varchar(50),
    created_at timestamp default CURRENT_TIMESTAMP   
);

create table tags (
    id int primary key auto_increment,
    name varchar(100)
);

create table users_images (
    id int primary key auto_increment,
    user_id int,
    tag_id int,
    name varchar(100) not null,
    image_path varchar(50),
    is_favorite boolean default 0,
    created_at timestamp default CURRENT_TIMESTAMP
);

create table comments (
    id int primary key auto_increment,
    user_id int,
	image_id int,
    message text,
    created_at timestamp default CURRENT_TIMESTAMP
);
    