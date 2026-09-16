CREATE DATABASE IF NOT EXISTS projeto_integrador CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE projeto_integrador;

CREATE TABLE usuarios
(
    id        INT AUTO_INCREMENT PRIMARY KEY,
    nome      VARCHAR(120) NOT NULL,
    email     VARCHAR(150) NOT NULL UNIQUE,
    senha     VARCHAR(255) NOT NULL,
    criado_em DATETIME     NOT NULL DEFAULT CURRENT_TIMESTAMP
);