CREATE DATABASE pokedex;

CREATE TABLE pokemon (
                           id_incremental INT(11) PRIMARY KEY AUTO_INCREMENT,
                           id INT(30),
                           nombre varchar(50),
                           tipo varchar(50),
                           descripcion varchar(500),
                           imagen varchar(100)
);

INSERT INTO pokemon (id, nombre, tipo, descripcion, imagen) 
VALUES (1, 'Bulbasaur', 'planta.png', 'Este Pokémon nace con una semilla en el lomo, que brota con el paso del tiempo.', '1.png'),
(2, 'Ivysaur', 'planta.png', 'Cuando le crece bastante el bulbo del lomo, pierde la capacidad de erguirse sobre las patas traseras.', '2.png'),
(3, 'Venusaur', 'planta.png', 'La planta florece cuando absorbe energía solar, lo cual le obliga a buscar siempre la luz del sol.', '3.png');