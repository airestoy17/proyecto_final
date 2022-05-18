-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 18-05-2022 a las 23:27:22
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema_control_vehicular`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Conductores`
--

CREATE TABLE `Conductores` (
  `Id` int(11) NOT NULL,
  `Domicilio` varchar(100) NOT NULL,
  `GrupoSanguineo` char(3) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `FechaNacimiento` date NOT NULL,
  `Firma` varchar(200) NOT NULL,
  `Foto` varchar(200) NOT NULL,
  `Donador` tinyint(1) DEFAULT NULL,
  `Antigüedad` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Conductores`
--

INSERT INTO `Conductores` (`Id`, `Domicilio`, `GrupoSanguineo`, `Nombre`, `FechaNacimiento`, `Firma`, `Foto`, `Donador`, `Antigüedad`) VALUES
(1, '22 Del Mar Pass', 'O', 'Mallory', '2022-02-09', 'fima.png', 'foto.png', 0, 3),
(2, '5 Cordelia Park', 'AB', 'Ichabod', '2021-03-08', 'fima.png', 'foto.png', 0, 7),
(3, '99 Vahlen Lane', 'AB', 'Nedda', '2021-09-13', 'fima.png', 'foto.png', 1, 9),
(4, '95 Sachtjen Center', 'B', 'Jessika', '2021-07-11', 'fima.png', 'foto.png', 1, 9),
(5, '4 Anderson Road', 'O', 'Dasha', '2021-04-07', 'fima.png', 'foto.png', 1, 1),
(6, '9 Bobwhite Terrace', 'O', 'Carny', '2022-02-28', 'fima.png', 'foto.png', 0, 1),
(7, '5491 Luster Terrace', 'B', 'Talbot', '2021-08-28', 'fima.png', 'foto.png', 1, 4),
(8, '8536 Bultman Avenue', 'AB', 'Giavani', '2021-07-28', 'fima.png', 'foto.png', 1, 9),
(9, '9', '9', '9', '2022-02-23', '9', '9', 1, 9),
(10, 'Avenida Siempre Viva #32', 'B+', 'Homero Simpson', '2022-04-27', 'foto.png', 'foto.png', 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Cuentas`
--

CREATE TABLE `Cuentas` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `tipo` char(1) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `bloqueado` tinyint(1) DEFAULT NULL,
  `intentos` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Cuentas`
--

INSERT INTO `Cuentas` (`username`, `password`, `tipo`, `status`, `bloqueado`, `intentos`) VALUES
('Juan', 'J1234', 'A', 1, 1, 0),
('Julio', 'J1234', 'A', 0, 1, 0),
('Maria', 'M1234', 'U', 0, 1, 0),
('Oscar', 'O1234', 'U', 0, 1, 3),
('Rosa', 'R1234', 'A', 1, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Licencias`
--

CREATE TABLE `Licencias` (
  `NumLicencia` int(11) NOT NULL,
  `Tipo` char(1) NOT NULL,
  `FechaExp` date NOT NULL,
  `FechaVencimiento` date NOT NULL,
  `Restriccion` varchar(100) DEFAULT NULL,
  `IdConductor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Licencias`
--

INSERT INTO `Licencias` (`NumLicencia`, `Tipo`, `FechaExp`, `FechaVencimiento`, `Restriccion`, `IdConductor`) VALUES
(2, 'a', '2022-02-15', '2022-02-03', 'No', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Multas`
--

CREATE TABLE `Multas` (
  `Folio` int(11) NOT NULL,
  `ClaveAgente` int(11) NOT NULL,
  `Motivo` varchar(100) NOT NULL,
  `Fundamento` varchar(100) NOT NULL,
  `Fecha` date NOT NULL,
  `Hora` time NOT NULL,
  `Lugar` varchar(50) NOT NULL,
  `Conductor` varchar(50) NOT NULL,
  `Entidad` varchar(50) NOT NULL,
  `Garantia` varchar(50) NOT NULL,
  `Agente` varchar(50) NOT NULL,
  `Propietario` varchar(50) NOT NULL,
  `IdVehiculo` int(11) DEFAULT NULL,
  `NumLicencia` int(11) DEFAULT NULL,
  `FolioTarjeta` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Multas`
--

INSERT INTO `Multas` (`Folio`, `ClaveAgente`, `Motivo`, `Fundamento`, `Fecha`, `Hora`, `Lugar`, `Conductor`, `Entidad`, `Garantia`, `Agente`, `Propietario`, `IdVehiculo`, `NumLicencia`, `FolioTarjeta`) VALUES
(1, 2132, 'Estacionar en zona prohibida', 'ART II', '2022-04-27', '21:25:36', 'Centro de Queretaro', 'Ausentee', 'Qro', 'Placa tomada', 'Rodrigo Cruz Garrido', 'Alfredo Vanegas Arcega', 1, 2, 1),
(2, 123123, 'Estacionamiento ilegal', 'Art. II', '2022-04-27', '20:22:00', 'Centro de Qro', 'Raymundo Garcia Garcia', 'Qro', 'Placa', 'Rodrigo Cruz Garrido', '', 1, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Propietarios`
--

CREATE TABLE `Propietarios` (
  `Id` int(11) NOT NULL,
  `RFC` varchar(13) NOT NULL,
  `Municipio` varchar(50) NOT NULL,
  `Localidad` varchar(50) NOT NULL,
  `Nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Propietarios`
--

INSERT INTO `Propietarios` (`Id`, `RFC`, `Municipio`, `Localidad`, `Nombre`) VALUES
(1, 'dawdwadwad', 'qro', 'qro', 'Alfredo Vanegas Arcega'),
(11, 'bdwiadw', 'Qro', 'Qro', 'Alejandro'),
(12, 'bdwiadaw', 'Qro', 'Qro', 'Alejandro2'),
(16, 'dwyuiogbda', 'Guadalajara', 'Jalisco', 'Pedro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TarjetasDeCirculacion`
--

CREATE TABLE `TarjetasDeCirculacion` (
  `Folio` int(11) NOT NULL,
  `Uso` varchar(20) NOT NULL,
  `Operacion` varchar(20) NOT NULL,
  `OficinaExp` varchar(20) NOT NULL,
  `NCI` varchar(20) NOT NULL,
  `FechaExp` date NOT NULL,
  `IdPropietario` int(11) DEFAULT NULL,
  `IdVehiculo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `TarjetasDeCirculacion`
--

INSERT INTO `TarjetasDeCirculacion` (`Folio`, `Uso`, `Operacion`, `OficinaExp`, `NCI`, `FechaExp`, `IdPropietario`, `IdVehiculo`) VALUES
(1, 'Personala', 'Personal', 'Qro', 'dwadwad', '2022-03-08', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TarjetasdeVerificacion`
--

CREATE TABLE `TarjetasdeVerificacion` (
  `FolioCertificado` int(11) NOT NULL,
  `Placa` varchar(7) NOT NULL,
  `TipoCarroceria` varchar(20) NOT NULL,
  `Entidad` varchar(50) NOT NULL,
  `Municipio` varchar(50) NOT NULL,
  `NumCentro` varchar(50) NOT NULL,
  `NumLineaVerificacion` varchar(50) NOT NULL,
  `TenicoVerificador` varchar(50) NOT NULL,
  `FechaExp` date NOT NULL,
  `HoraEntrada` time NOT NULL,
  `HoraSalida` time NOT NULL,
  `Motivo` varchar(50) NOT NULL,
  `TipoServicio` varchar(50) NOT NULL,
  `Semestre` varchar(10) NOT NULL,
  `Vigencia` date NOT NULL,
  `IdVehiculo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `TarjetasdeVerificacion`
--

INSERT INTO `TarjetasdeVerificacion` (`FolioCertificado`, `Placa`, `TipoCarroceria`, `Entidad`, `Municipio`, `NumCentro`, `NumLineaVerificacion`, `TenicoVerificador`, `FechaExp`, `HoraEntrada`, `HoraSalida`, `Motivo`, `TipoServicio`, `Semestre`, `Vigencia`, `IdVehiculo`) VALUES
(1, 'DWA123', 'Normal', 'Qro', 'Qro', '', '3', 'Manuel', '2022-03-08', '17:08:00', '17:08:00', 'Chequeo', '1', '3', '2022-03-16', 1),
(2, 'DWAD', 'Estandar', 'Qro', 'Qro', '', '2', 'Raymundo Garcia Garcia', '2022-04-27', '21:58:00', '21:56:00', 'Chequeo', 'Mantenimineto', '3', '2022-05-17', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Vehiculos`
--

CREATE TABLE `Vehiculos` (
  `Id` int(11) NOT NULL,
  `Color` varchar(50) NOT NULL,
  `Cilindraje` smallint(6) NOT NULL,
  `Capacidad` smallint(6) NOT NULL,
  `Puertas` smallint(6) NOT NULL,
  `Asientos` smallint(6) NOT NULL,
  `Combustible` varchar(20) NOT NULL,
  `Transmision` varchar(20) NOT NULL,
  `Clase` varchar(20) NOT NULL,
  `Tipo` varchar(20) NOT NULL,
  `RFA` varchar(20) NOT NULL,
  `Modelo` varchar(20) NOT NULL,
  `numMotor` varchar(20) NOT NULL,
  `Placa` varchar(10) NOT NULL,
  `Origen` varchar(50) NOT NULL,
  `numSerie` varchar(10) NOT NULL,
  `Marca` varchar(40) NOT NULL,
  `Submarca` varchar(40) NOT NULL,
  `Linea` varchar(40) NOT NULL,
  `CodigoVehicular` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Vehiculos`
--

INSERT INTO `Vehiculos` (`Id`, `Color`, `Cilindraje`, `Capacidad`, `Puertas`, `Asientos`, `Combustible`, `Transmision`, `Clase`, `Tipo`, `RFA`, `Modelo`, `numMotor`, `Placa`, `Origen`, `numSerie`, `Marca`, `Submarca`, `Linea`, `CodigoVehicular`) VALUES
(1, 'rojo', 8, 4, 4, 5, 'Normal', 'Manual', 'A', 'A', 'dnwandwanio', '2020', '213123', 'DWA123', 'qro', '3', 'Nissan', 'Sentra', '4', 'ndawdkwan');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Conductores`
--
ALTER TABLE `Conductores`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `Cuentas`
--
ALTER TABLE `Cuentas`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `Licencias`
--
ALTER TABLE `Licencias`
  ADD PRIMARY KEY (`NumLicencia`),
  ADD KEY `IdConductor` (`IdConductor`);

--
-- Indices de la tabla `Multas`
--
ALTER TABLE `Multas`
  ADD PRIMARY KEY (`Folio`),
  ADD KEY `IdVehiculo` (`IdVehiculo`),
  ADD KEY `NumLicencia` (`NumLicencia`),
  ADD KEY `FolioTarjeta` (`FolioTarjeta`);

--
-- Indices de la tabla `Propietarios`
--
ALTER TABLE `Propietarios`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `TarjetasDeCirculacion`
--
ALTER TABLE `TarjetasDeCirculacion`
  ADD PRIMARY KEY (`Folio`),
  ADD KEY `IdPropietario` (`IdPropietario`),
  ADD KEY `IdVehiculo` (`IdVehiculo`);

--
-- Indices de la tabla `TarjetasdeVerificacion`
--
ALTER TABLE `TarjetasdeVerificacion`
  ADD PRIMARY KEY (`FolioCertificado`),
  ADD KEY `IdVehiculo` (`IdVehiculo`);

--
-- Indices de la tabla `Vehiculos`
--
ALTER TABLE `Vehiculos`
  ADD PRIMARY KEY (`Id`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Licencias`
--
ALTER TABLE `Licencias`
  ADD CONSTRAINT `Licencias_ibfk_1` FOREIGN KEY (`IdConductor`) REFERENCES `Conductores` (`Id`),
  ADD CONSTRAINT `Licencias_ibfk_2` FOREIGN KEY (`IdConductor`) REFERENCES `Conductores` (`Id`);

--
-- Filtros para la tabla `Multas`
--
ALTER TABLE `Multas`
  ADD CONSTRAINT `Multas_ibfk_1` FOREIGN KEY (`IdVehiculo`) REFERENCES `Vehiculos` (`Id`),
  ADD CONSTRAINT `Multas_ibfk_2` FOREIGN KEY (`IdVehiculo`) REFERENCES `Vehiculos` (`Id`),
  ADD CONSTRAINT `Multas_ibfk_3` FOREIGN KEY (`NumLicencia`) REFERENCES `Licencias` (`NumLicencia`),
  ADD CONSTRAINT `Multas_ibfk_4` FOREIGN KEY (`FolioTarjeta`) REFERENCES `TarjetasDeCirculacion` (`Folio`);

--
-- Filtros para la tabla `TarjetasDeCirculacion`
--
ALTER TABLE `TarjetasDeCirculacion`
  ADD CONSTRAINT `TarjetasDeCirculacion_ibfk_1` FOREIGN KEY (`IdPropietario`) REFERENCES `Propietarios` (`Id`),
  ADD CONSTRAINT `TarjetasDeCirculacion_ibfk_2` FOREIGN KEY (`IdVehiculo`) REFERENCES `Vehiculos` (`Id`);

--
-- Filtros para la tabla `TarjetasdeVerificacion`
--
ALTER TABLE `TarjetasdeVerificacion`
  ADD CONSTRAINT `TarjetasdeVerificacion_ibfk_1` FOREIGN KEY (`IdVehiculo`) REFERENCES `Vehiculos` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
