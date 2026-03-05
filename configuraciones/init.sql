CREATE DATABASE IF NOT EXISTS portafolio_db;
USE portafolio_db;

-- tabla para los mensajes que se gestionarán
CREATE TABLE IF NOT EXISTS contactos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    mensaje TEXT NOT NULL,
    fecha DATETIME DEFAULT CURRENT_TIMESTAMP,
    leido BOOLEAN DEFAULT FALSE
);

CREATE TABLE IF NOT EXISTS perfil (
    cedula VARCHAR(20) PRIMARY KEY,
    nombre_alumno VARCHAR(100) NOT NULL,
    universidad VARCHAR(100),
    carrera VARCHAR(100),
    bio TEXT,
    habilidades TEXT,
    foto_url VARCHAR(255)
);

INSERT INTO perfil (cedula, nombre_alumno, universidad, carrera, bio, habilidades, foto_url)
VALUES (
    '30.701.348',
    'José Francisco Rodríguez',
    'Universidad de Oriente', 
    'Ingeniería en Computación',
    '22 años',
    'SQL, Backend, Docker, PHP, Python, C++',
    'pfpJF.jpg'
);

CREATE TABLE IF NOT EXISTS perfil_2 (
    cedula VARCHAR(20) PRIMARY KEY,
    nombre_alumno VARCHAR(100) NOT NULL,
    universidad VARCHAR(100),
    carrera VARCHAR(100),
    bio TEXT,
    habilidades TEXT,
    foto_url VARCHAR(255)
);

INSERT INTO perfil_2 (cedula, nombre_alumno, universidad, carrera, bio, habilidades, foto_url)
VALUES (
    '31.685.236',
    'Adrian Figueroa',
    'Universidad de Oriente', 
    'Ingeniería en Computación',
    '20 años',
    'SQL, Backend, Frontend, Docker, PHP, Python, C++',
    'Foto.jpg'
);