CREATE DATABASE pokedex;

CREATE TABLE pokemones (
                           id_incremental INT(11) PRIMARY KEY AUTO_INCREMENT,
                           id INT(30),
                           nombre varchar(50),
                           tipo varchar(50),
                           descripcion varchar(500),
                           imagen varchar(100)
);