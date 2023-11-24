-- Active: 1700211668325@@127.0.0.1@3306@brief-6

-- creation des tableaux
CREATE TABLE genres (
    id int PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(20)
);


CREATE TABLE films (
    id int PRIMARY KEY AUTO_INCREMENT,
    titre VARCHAR(20),
    duree int,
    date_trans date,
    genre_id int,
    FOREIGN KEY(genre_id) REFERENCES genres(id) ON UPDATE CASCADE
);



CREATE TABLE casts (
    id int PRIMARY KEY AUTO_INCREMENT,
    nom varchar(20),
    prenom VARCHAR(20),
    age int
);

CREATE TABLE film_cast (
    id int PRIMARY KEY AUTO_INCREMENT,
    role VARCHAR(20),
    film_id int,
    cast_id int,
    FOREIGN KEY(film_id) REFERENCES films(id) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY(cast_id) REFERENCES casts(id) ON DELETE CASCADE ON UPDATE CASCADE
);

