CREATE DATABASE USUARIOS;
USE  USUARIOS;

-- Creo tabla de Usuario
CREATE TABLE usuarios(
  id INT PRIMARY KEY AUTO_INCREMENT NOT NULL UNIQUE,
  username VARCHAR(30) NOT NULL UNIQUE,
  nombre VARCHAR(50),
  apellido VARCHAR(50),
  email VARCHAR(100) NOT NULL UNIQUE,
  direccion VARCHAR(50),
  id_ciudad INT,
  telefono SMALLINT(30),
  avatar VARCHAR(255),
  password VARCHAR(255) NOT NULL,
  tipoCons INT,
  rol_id INT
);

-- Creo tabla de Roles

CREATE TABLE roles(
  id INT UNIQUE PRIMARY KEY AUTO_INCREMENT,
  nombre VARCHAR(50),
  usuario_id INT
);

-- Agrego las claves foraneas de cada tabla

ALTER TABLE usuarios ADD FOREIGN KEY (rol_id) REFERENCES roles(id);
ALTER TABLE roles ADD FOREIGN KEY (usuario_id) REFERENCES usuarios(id);

-- Agrego Roles
INSERT INTO roles (IDRol, NombreDelRol) VALUES (default, 'administrador'), (default, 'cliente'), (default, 'editor'),
(default, 'proveedor'), (default, 'distribuidor'), (default, 'vendedor');
