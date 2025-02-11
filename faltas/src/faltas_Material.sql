SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Crear base de datos si no existe
CREATE DATABASE IF NOT EXISTS `faltas_faterial` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `faltas_faterial`;

-- Tabla de materiales
CREATE TABLE `materiales` (
  `num_proyecto` INT(11) NOT NULL AUTO_INCREMENT,
  `referencia` TEXT NOT NULL,
  `cantidad` INT(11) NOT NULL,
  `tipo` VARCHAR(25) NOT NULL,
  PRIMARY KEY (`num_proyecto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Tabla de datos relacionados con los materiales
CREATE TABLE `materiales_datos` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `fecha_modificacion` DATETIME NOT NULL,
  `referencia` TEXT NOT NULL,
  `num_proyecto` INT(11),
  PRIMARY KEY (`id`),
  FOREIGN KEY (`num_proyecto`) REFERENCES `materiales` (`num_proyecto`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;
