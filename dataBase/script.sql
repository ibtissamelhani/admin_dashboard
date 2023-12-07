-- Active: 1700211668325@@127.0.0.1@3306@brief-6

-- creation des tableaux

CREATE TABLE users (
    id int PRIMARY KEY AUTO_INCREMENT,
    first_name varchar (20),
    last_name varchar (20),
    email varchar (20),
    password varchar(20),
    isAdmin BOOLEAN 
);
alter Table users
CHANGE isAdmin isAdmin BOOLEAN DEFAULT 0;

INSERT into users (first_name, last_name,email,password, isAdmin) VALUES ('james','bond','admin@gmail.com','123456',1);

CREATE TABLE categories (
    id int PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(20),
    description VARCHAR(100)
);

CREATE TABLE movies (
    id int PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(20),
    production_year VARCHAR(4),
    country VARCHAR(20),
    poster VARCHAR(255),
    category_id int,
    FOREIGN KEY (category_id) REFERENCES categories(id) ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE casts (
    id int PRIMARY KEY AUTO_INCREMENT,
    first_name varchar(20),
    last_name varchar (20),
    age int
);


CREATE TABLE stat(
    id int PRIMARY KEY AUTO_INCREMENT,
    stat varchar(20),
    user_id int,
    movie_id int,
    FOREIGN KEY (user_id) REFERENCES users(id) ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (movie_id) REFERENCES movies(id) ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE film_cast(
    id int PRIMARY KEY AUTO_INCREMENT,
    movie_id int,
    cast_id int,
    FOREIGN KEY (cast_id) REFERENCES casts(id) ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (movie_id) REFERENCES movies(id) ON UPDATE CASCADE ON DELETE CASCADE
);