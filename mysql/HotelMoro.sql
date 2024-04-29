-- Crear la base de datos HotelMoro
CREATE DATABASE IF NOT EXISTS HotelMoro;
USE HotelMoro;

-- Tabla para los clientes del hotel
CREATE TABLE IF NOT EXISTS cliente (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    habitacion INT NOT NULL,
    fecha_entrada DATE NOT NULL,
    fecha_salida DATE NOT NULL
);

-- Insertar algunos datos de ejemplo en la tabla cliente
INSERT INTO cliente (nombre, email, habitacion, fecha_entrada, fecha_salida)
VALUES 
    ('Juan Gonzales', 'juan24@gmail.com', 101, '2024-04-20', '2024-04-25'),
    ('Maria Garcia', 'maria24@gmail.com', 102, '2024-04-21', '2024-04-26');

-- Tabla para el personal del hotel
CREATE TABLE IF NOT EXISTS personal (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    puesto VARCHAR(100) NOT NULL,
    seccion VARCHAR(100) NOT NULL
);

-- Insertar algunos datos de ejemplo en la tabla personal
INSERT INTO personal (nombre, email, puesto, seccion)
VALUES 
    ('Pedro Lopez', 'pedrohm@hotelmoro.com', 'Limpieza', 'Piso'),
    ('Ana Martinez', 'anahm@hotelmoro.com', 'Recepción', 'Atención al Cliente');

-- Secciones para el personal del hotel
INSERT INTO personal (nombre, email, puesto, seccion)
VALUES 
    ('Laura Gomez', 'laurahm@hotelmoro.com', 'Mantenimiento', 'Área Técnica'),
    ('Javier Ruiz', 'javierhm@hotelmoro.com', 'Seguridad', 'Vigilancia');

-- Agregar más secciones y empleados según sea necesario

