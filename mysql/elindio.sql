-- Crear la base de datos elindio
CREATE DATABASE IF NOT EXISTS elindio;

-- Usar la base de datos elindio
USE elindio;

-- Tabla para los clientes del hotel
CREATE TABLE IF NOT EXISTS cliente (
    id INT AUTO_INCREMENT PRIMARY KEY, -- Identificador único del cliente
    nombre VARCHAR(100) NOT NULL, -- Nombre del cliente
    email VARCHAR(100) NOT NULL, -- Correo electrónico del cliente
    DNI VARCHAR(20) NOT NULL, -- Nuevo campo para el DNI del cliente
    cantidad_personas INT NOT NULL, -- Nuevo campo para la cantidad de personas
    habitacion INT NOT NULL, -- Número de habitación reservada por el cliente
    fecha_entrada DATE NOT NULL, -- Fecha de entrada del cliente
    fecha_salida DATE NOT NULL -- Fecha de salida del cliente
);

-- Insertar algunos datos de ejemplo en la tabla cliente
INSERT INTO cliente (nombre, email, DNI, cantidad_personas, habitacion, fecha_entrada, fecha_salida)
VALUES 
    ('Juan Gonzales', 'juan24@gmail.com', '12345678A', 1, 101, '2024-04-20', '2024-04-25'), -- Ejemplo de cliente 1
    ('Maria Garcia', 'maria24@gmail.com', '98765432B', 2, 102, '2024-04-21', '2024-04-26'); -- Ejemplo de cliente 2

-- Tabla para el personal del hotel
CREATE TABLE IF NOT EXISTS personal (
    id INT AUTO_INCREMENT PRIMARY KEY, -- Identificador único del empleado
    nombre VARCHAR(100) NOT NULL, -- Nombre del empleado
    email VARCHAR(100) NOT NULL, -- Correo electrónico del empleado
    DNI VARCHAR(20) NOT NULL, -- Nuevo campo para el DNI del personal
    edad INT NOT NULL, -- Nuevo campo para la edad del personal
    puesto VARCHAR(100) NOT NULL, -- Puesto de trabajo del empleado
    seccion VARCHAR(100) NOT NULL -- Sección laboral del empleado
);

-- Insertar algunos datos de ejemplo en la tabla personal
INSERT INTO personal (nombre, email, DNI, edad, puesto, seccion)
VALUES 
    ('Pedro Lopez', 'pedrohm@elindio.com', '11111111X', 35, 'Limpieza', 'Piso'), -- Ejemplo de empleado 1
    ('Ana Martinez', 'anahm@elindio.com', '22222222Y', 28, 'Recepcion', 'Atencion al Cliente'); -- Ejemplo de empleado 2

-- Secciones para el personal del hotel
INSERT INTO personal (nombre, email, DNI, edad, puesto, seccion)
VALUES 
    ('Laura Gomez', 'laurahm@elindio.com', '33333333Z', 42, 'Mantenimiento', 'Area Tecnica'), -- Ejemplo de empleado 3
    ('Javier Ruiz', 'javierhm@elindio.com', '44444444W', 30, 'Seguridad', 'Vigilancia'); -- Ejemplo de empleado 4

-- Agregar más secciones y empleados según sea necesario
