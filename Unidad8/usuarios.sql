-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-12-2022 a las 13:51:19
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `php_avanzado`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `email` varchar(80) NOT NULL,
  `contrasena` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`email`, `contrasena`) VALUES
('carlosm@gmail.com', '$2y$05$PLBLtFDdl9UTLz/5i43pe.0TYP42848Le2CUdsZK0gj1IEa3LQOaa'),
('cliente@gmail.com', '$2y$05$02PlJEZKEW9BodgCUK4opulPOp/zJS66W/cKX90337JAZVb3HMXmq'),
('iaraximenanuss@gmail.com', '$2y$05$NDVuIsUJlgNnO3B/THNNPOpYwcD.SyFlz0.4myRUn8SZbmL8/3U6y'),
('iarunus19995@gmail.com', '$2y$05$CxXKjmv0Iwy6l3/wymAp3.ClfoKGYawy.Ulj/zVOiljJRiouZ75j.'),
('juan1@gmail.com', '$2y$05$aLnWJrsAL2pdZUVfbudW3eFukrAAsj2W97it8ZGxDweQlI2HsYmOa'),
('Julian12@gmail.com', '$2y$05$wWrXCW1vwaLQ6xVRI1r3teL7o.ygFcb.X1lLnlUQoB3hiHbYgVomC'),
('znuss33@gmail.com', '$2y$05$Rb/yCTkMnsf3khzRWb/MqegNno7migWjBjeiL4t.Hz.di2dZ1kQy.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`email`(60));
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
