CREATE DATABASE HotelMoro;
USE HotelMoro;


CREATE TABLE Personas (
    id INT AUTO_INCREMENT,
    nombre VARCHAR(100),
    apellidos VARCHAR(100),
    dni VARCHAR(9),
    telefono VARCHAR(15),
    PRIMARY KEY(id)
);

INSERT INTO Personas (nombre, apellidos, dni, telefono) VALUES
('Gonzalo', 'Huancas', '75943018L', '654098325'),
('Robert', 'Mihailescu', '57438871P', '698456320'),
('Sergi', 'Perez', '84950612T', '634209458'),
('Naila', 'Husain', '56734129X', '698032459'),
('Michael', 'Ragel', '98054873F', '612090332');

CREATE TABLE RegistroHotel (
    id INT AUTO_INCREMENT,
    id_persona INT,
    hora_entrada TIMESTAMP,
    hora_salida TIMESTAMP,
    PRIMARY KEY(id),
    FOREIGN KEY (id_persona) REFERENCES Personas(id)
);

INSERT INTO RegistroHotel (id_persona, hora_entrada, hora_salida) VALUES
(1, '2024-04-02 14:00:00', '2024-04-03 12:00:00'),
(2, '2024-04-02 15:00:00', '2024-04-03 11:00:00'),
(3, '2024-04-02 16:00:00', '2024-04-03 10:00:00'),
(4, '2024-04-02 17:00:00', '2024-04-03 09:00:00'),
(5, '2024-04-02 18:00:00', '2024-04-03 08:00:00');
