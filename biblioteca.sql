-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-12-2020 a las 09:40:14
-- Versión del servidor: 10.4.16-MariaDB
-- Versión de PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `biblioteca`
--
CREATE DATABASE IF NOT EXISTS `biblioteca` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `biblioteca`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `no_control` int(10) NOT NULL,
  `nombreAlum` varchar(50) NOT NULL,
  `apellidoPatAlum` varchar(30) NOT NULL,
  `apellidoMatAlum` varchar(30) NOT NULL,
  `fechaNacAlum` date NOT NULL,
  `CalleCasaAlum` varchar(50) NOT NULL,
  `NumCasaAlum` int(11) NOT NULL,
  `sexoAlum` varchar(1) NOT NULL,
  `carreraAlum` varchar(50) NOT NULL,
  `semestreAlum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`no_control`, `nombreAlum`, `apellidoPatAlum`, `apellidoMatAlum`, `fechaNacAlum`, `CalleCasaAlum`, `NumCasaAlum`, `sexoAlum`, `carreraAlum`, `semestreAlum`) VALUES
(1699599, 'Sergio', 'Cruz', 'Caseres', '1996-09-30', 'Polyuc', 52, 'M', 'Biología', 9),
(1725090, 'Mixtli', 'de la Cruz', 'Ojeda', '1997-05-04', 'Rosas', 21, 'F', 'Sistemas', 7),
(1819036, 'Angel', 'Tuz', 'Canche', '1998-10-20', 'Lirios', 46, 'M', 'TICs', 5),
(1823062, 'Francesco', 'LaFran', 'Perez', '1998-11-10', 'Claveles', 98, 'M', 'Lengua extranjera', 5),
(1952021, 'Francoise', 'Toledo', 'Roman', '2000-05-05', 'Nicolas Bravo', 22, 'M', 'Civil', 3),
(1952034, 'Maria', 'Hernandez', 'Dibala', '1999-10-27', 'Orquidias', 1, 'F', 'Arquitectura', 4),
(2031004, 'Diana', 'Perez', 'Ramirez', '2000-09-07', 'San Salvador', 36, 'F', 'Civil', 2),
(2031018, 'Casimiro', 'Andrade', 'Ramirez', '2000-01-13', 'Manuel Ávila', 666, 'M', 'Sistemas', 1),
(2031049, 'Mario', 'Merlon', 'Smith', '2000-04-09', 'Vega', 33, 'M', 'Biología', 1),
(2031055, 'Laura', 'Hernandez', 'Tuz', '2000-07-03', 'Ursulo Galvan', 55, 'F', 'Administracion', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_prestamo_x_investigacion`
--

CREATE TABLE `detalle_prestamo_x_investigacion` (
  `id_prestamo` varchar(30) NOT NULL,
  `id_investigacion` varchar(30) NOT NULL,
  `no_ejemplar_investigacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detalle_prestamo_x_investigacion`
--

INSERT INTO `detalle_prestamo_x_investigacion` (`id_prestamo`, `id_investigacion`, `no_ejemplar_investigacion`) VALUES
('1', '111', 8),
('2', '222', 10),
('3', '333', 11),
('4', '444', 23),
('5', '555', 98),
('6', '666', 45),
('7', '777', 24),
('8', '888', 87),
('9', '999', 2),
('10', '010', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_prestamo_x_libro`
--

CREATE TABLE `detalle_prestamo_x_libro` (
  `id_prestamo` varchar(30) NOT NULL,
  `id_libro` varchar(30) NOT NULL,
  `no_ejemplar_libro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detalle_prestamo_x_libro`
--

INSERT INTO `detalle_prestamo_x_libro` (`id_prestamo`, `id_libro`, `no_ejemplar_libro`) VALUES
('1', 'LT20FK1925', 1),
('2', 'LT28DA2017', 3),
('3', 'LT97FD1880', 4),
('4', 'NV03LT1869', 5),
('5', 'NV26MCDESC', 6),
('6', 'NV33AS1951', 10),
('7', 'NV55MP1914', 9),
('8', 'PO99HO1572', 8),
('9', 'TG01WS1870', 31),
('10', 'VG32BS2010', 19);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_prestamo_x_periodico`
--

CREATE TABLE `detalle_prestamo_x_periodico` (
  `id_prestamo` varchar(30) NOT NULL,
  `id_periodico` varchar(30) NOT NULL,
  `no_ejemplar_periodico` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detalle_prestamo_x_periodico`
--

INSERT INTO `detalle_prestamo_x_periodico` (`id_prestamo`, `id_periodico`, `no_ejemplar_periodico`) VALUES
('1', 'p1', 3),
('2', 'p2', 4),
('3', 'p3', 5),
('4', 'p4', 9),
('5', 'p5', 12),
('6', 'p6', 10),
('7', 'p7', 16),
('8', 'p8', 7),
('9', 'p9', 20),
('10', 'p10', 21);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_prestamo_x_resvista`
--

CREATE TABLE `detalle_prestamo_x_resvista` (
  `id_prestamo` varchar(30) NOT NULL,
  `id_revista` varchar(30) NOT NULL,
  `no_ejemplar_revista` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detalle_prestamo_x_resvista`
--

INSERT INTO `detalle_prestamo_x_resvista` (`id_prestamo`, `id_revista`, `no_ejemplar_revista`) VALUES
('1', '1', 4),
('2', '2', 19),
('3', '3', 20),
('4', '4', 22),
('5', '5', 21),
('6', '6', 30),
('7', '7', 5),
('8', '8', 9),
('9', '9', 10),
('10', '10', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_prestamo_x_software`
--

CREATE TABLE `detalle_prestamo_x_software` (
  `id_prestamo` varchar(30) NOT NULL,
  `id_software` varchar(30) NOT NULL,
  `no_ejemplar_software` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detalle_prestamo_x_software`
--

INSERT INTO `detalle_prestamo_x_software` (`id_prestamo`, `id_software`, `no_ejemplar_software`) VALUES
('1', 's1', 16),
('2', 's2', 8),
('3', 's3', 14),
('4', 's4', 18),
('5', 's5', 8),
('6', 's6', 27),
('7', 's7', 4),
('8', 's8', 1),
('9', 's9', 12),
('10', 's10', 30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `investigación`
--

CREATE TABLE `investigación` (
  `id_investigaciones` varchar(10) NOT NULL,
  `nombre_investigacion` varchar(70) NOT NULL,
  `Nombre_inv` varchar(50) NOT NULL,
  `ApellidoPat_inv` varchar(50) NOT NULL,
  `ApellidoMat_inv` varchar(50) NOT NULL,
  `MesPublicación-Inv` varchar(20) NOT NULL,
  `AñoPublicación_Inv` int(11) NOT NULL,
  `TipoContenido` varchar(50) NOT NULL,
  `Sexo-Investigadores` varchar(1) NOT NULL,
  `id_prestamo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `investigación`
--

INSERT INTO `investigación` (`id_investigaciones`, `nombre_investigacion`, `Nombre_inv`, `ApellidoPat_inv`, `ApellidoMat_inv`, `MesPublicación-Inv`, `AñoPublicación_Inv`, `TipoContenido`, `Sexo-Investigadores`, `id_prestamo`) VALUES
('010', 'El Africa', 'Franco', 'Escamilla', 'Garcia', 'Agosto', 2000, 'Informativo', 'M', '1'),
('111', 'Las Amazonas', 'Hugo', 'Sanches', 'Norberto', 'Abril', 2003, 'Informativo', 'M', '2'),
('222', 'El Chapo', 'Francisco', 'Grijalva', 'Ramirez', 'Marzo', 2004, 'Descriptivo', 'M', '3'),
('333', 'Michael Jackson', 'Medina', 'Carballo', 'Humberto', 'Octubre', 1990, 'Descriptivo', 'M', '4'),
('444', 'CHERNOBYL', 'Marco', 'Aldair', 'Alejandro', 'Junio', 1800, 'Analogia', 'M', '5'),
('555', 'Disneyland', 'Richard', 'God', 'Poderoso', 'Septiembre', 2003, 'Descriptivo', 'M', '6'),
('666', 'Computadoras', 'Melisa', 'Rivera', 'Rogriguez', 'Octubre', 2011, 'Informativo', 'F', '7'),
('777', 'Los juegos matan', 'Alfredo', 'Lopez', 'Sanches', 'Agosto', 2015, 'Informativo', 'M', '8'),
('888', 'Las redes sociales', 'Ariana', 'Grande', 'Pequeña', 'Febrero', 2016, 'Informativo', 'F', '9'),
('999', 'El internet', 'Tomas', 'Holan', 'Araña', 'Julio', 2018, 'Informativo', 'M', '10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id_libros` varchar(10) NOT NULL,
  `nombreLibro` varchar(70) NOT NULL,
  `NombreAutorLib` varchar(30) NOT NULL,
  `ApellidoAPLib` varchar(30) NOT NULL,
  `PaisLibro` varchar(30) NOT NULL,
  `FechaPubLibro` date NOT NULL,
  `GeneroLibro` varchar(30) NOT NULL,
  `Editorial-Libro` varchar(70) NOT NULL,
  `EdicionLibro` int(11) NOT NULL,
  `id_prestamo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id_libros`, `nombreLibro`, `NombreAutorLib`, `ApellidoAPLib`, `PaisLibro`, `FechaPubLibro`, `GeneroLibro`, `Editorial-Libro`, `EdicionLibro`, `id_prestamo`) VALUES
('LT20FK1925', 'El Proceso', 'Franz', 'Kafka', 'Alemania', '1925-03-01', 'Literatura', 'Verlag Die Schmiede', 5, '34'),
('LT28DA2017', 'La Divina Comedia', 'Dante', 'Alighieri', 'Italia', '2017-01-21', 'Literaria', 'Pluton Ediciones', 1, '38'),
('LT97FD1880', 'Los hermanos Karamazov', 'Fiodor', 'Dostoyevski', 'Rusia', '1880-03-02', 'Literaria', 'El Mensajero Ruso', 4, '40'),
('NV03LT1869', 'La guerra y la paz', 'Leon', 'Tolstoi', 'Rusia', '1869-07-16', 'Novela', 'El Mensajero Ruso', 5, '39'),
('NV26MCDESC', 'Don Quijote de la Mancha', 'Miguel', 'de Cervantes', 'España', '2011-10-23', 'Novela', 'Francisco de Robles', 2, '35'),
('NV33AS1951', 'El Principito', 'Antoine', 'de Saint-Exupery', 'Francia', '1951-11-29', 'Novelo', 'Reynal & Hitchcock', 3, '33'),
('NV55MP1914', 'En busca del tiempo del tiempo perdido', 'Marcel', 'Proust', 'Francia', '1914-08-06', 'Novela', 'Editions Grasset', 1, '31'),
('PO99HO1572', 'La Iliada', 'Homero', 'Contrera', 'Antigua Grecia', '1572-10-17', 'Poema', 'Juan Pachuco', 13, '36'),
('TG01WS1870', 'Hamlet', 'William', 'Shakespear', 'Inglaterra', '1870-08-14', 'Tragedia', 'Piudipai', 23, '37'),
('VG32BS2010', 'Halo: Rich', 'Bungie', 'Studios', 'Estados Unidos', '2010-10-14', 'Videojuego', 'Microsoft Game Studios', 26, '32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maestros`
--

CREATE TABLE `maestros` (
  `rfc` varchar(10) NOT NULL,
  `nombreM` varchar(30) NOT NULL,
  `apellidoMP` varchar(30) NOT NULL,
  `apellidoMM` varchar(30) NOT NULL,
  `FechaNacM` date NOT NULL,
  `estadocivilMaestro` varchar(50) NOT NULL,
  `sexoMaestro` varchar(1) NOT NULL,
  `areaMaestro` varchar(30) NOT NULL,
  `curpMaestro` varchar(30) NOT NULL,
  `nivelEstudioMaestro` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `maestros`
--

INSERT INTO `maestros` (`rfc`, `nombreM`, `apellidoMP`, `apellidoMM`, `FechaNacM`, `estadocivilMaestro`, `sexoMaestro`, `areaMaestro`, `curpMaestro`, `nivelEstudioMaestro`) VALUES
('AM162450', 'Juan', 'Perez', 'Sanchez', '1985-05-05', 'Casado(a)', 'M', 'Administración', '8ftyh79y9giygjf87u', 'Licenciatura'),
('AM633212', 'Perecila', 'Ceballos', 'Pascual', '1976-10-12', 'Casado(a)', 'F', 'Administración', '87whtj8g7h3wf784iiu', 'Licenciatura'),
('AR102533', 'Pablo', 'Oyosa', 'Castillo', '1980-02-10', 'Casado(a)', 'M', 'Arquitectura', 'g978oyfigfihlh7h30', 'Licenciatura'),
('AR531201', 'Ernesto', 'Chi', 'Vera', '1974-06-09', 'Viudo(a)', 'M', 'Arquitectura', 'fuyg678o3uju2o837h', 'Maestria'),
('BL331250', 'Margarita', 'Grijalva', 'Rivera', '1979-07-23', 'Soltero(a)', 'F', 'Biología', 'ef0849h49p387fhwiohf8', 'Doctorado'),
('CV200101', 'Edward', 'Culen', 'Lubo', '1985-05-04', 'Viudo(a)', 'M', 'Civil', 'yegfq784hbfiy73qgo9h78e', 'Maestria'),
('CV551066', 'Maximiliano', 'Fernandez', 'Cruz', '1980-09-09', 'Casado(a)', 'M', 'Civil', 'hi78t8hdbu8w9f9', 'Doctorado'),
('LE54XX21', 'Marcock', 'Suarez', 'Ramos', '1985-01-05', 'Soltero(a)', 'M', 'Lengua extranjera', '8hw89fn4hruiweh82309', 'Doctorado'),
('SC412136', 'Arcadio', 'Gutierrez', 'Ruiz', '1979-03-18', 'Soltero(a)', 'M', 'Sistemas', 'ndy3i4i83ib94jignu', 'Licenciatura'),
('TC059812', 'Johana', 'Sandoval', 'Ramirez', '1981-10-04', 'Divorciado(a)', 'F', 'TICs', 'ejf9pt834laih798', 'Maestria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maestros_autores`
--

CREATE TABLE `maestros_autores` (
  `PK_maestroautores` varchar(30) NOT NULL,
  `fk_id_libro` varchar(30) NOT NULL,
  `fk_rfc_maestro` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `maestros_autores`
--

INSERT INTO `maestros_autores` (`PK_maestroautores`, `fk_id_libro`, `fk_rfc_maestro`) VALUES
('maestro1', 'LT20FK1925', 'AM162450'),
('maestro10', 'VG32BS2010', 'TC059812'),
('maestro2', 'LT28DA2017', 'AM633212'),
('maestro3', 'LT97FD1880', 'AR102533'),
('maestro4', 'NV03LT1869', 'AR531201'),
('maestro5', 'NV26MCDESC', 'BL331250'),
('maestro6', 'NV33AS1951', 'CV200101'),
('maestro7', 'NV55MP1914', 'CV551066'),
('maestro8', 'PO99HO1572', 'LE54XX21'),
('maestro9', 'TG01WS1870', 'SC412136');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `multas`
--

CREATE TABLE `multas` (
  `id_prestamo` varchar(30) NOT NULL,
  `cantidad_multa` int(11) NOT NULL,
  `estado_multa` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `multas`
--

INSERT INTO `multas` (`id_prestamo`, `cantidad_multa`, `estado_multa`) VALUES
('1', 12, 1),
('2', 100, 1),
('3', 20, 0),
('4', 13, 1),
('5', 32, 0),
('6', 90, 1),
('7', 200, 0),
('8', 39, 0),
('9', 64, 1),
('10', 56, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodico`
--

CREATE TABLE `periodico` (
  `id_periodico` varchar(10) NOT NULL,
  `Editorial` varchar(30) NOT NULL,
  `Fecha-publicacionPrd` date NOT NULL,
  `CalleDirecciónPrd` varchar(70) NOT NULL,
  `NumCasaDireccionPrd` int(11) NOT NULL,
  `Tipo-Impresión` varchar(30) NOT NULL,
  `Periodo-Impresión` int(11) NOT NULL,
  `Lugar-PublicaciónPrd` varchar(30) NOT NULL,
  `Telefono-Periodico` int(11) NOT NULL,
  `id-prestamo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `periodico`
--

INSERT INTO `periodico` (`id_periodico`, `Editorial`, `Fecha-publicacionPrd`, `CalleDirecciónPrd`, `NumCasaDireccionPrd`, `Tipo-Impresión`, `Periodo-Impresión`, `Lugar-PublicaciónPrd`, `Telefono-Periodico`, `id-prestamo`) VALUES
('p1', 'El Peso', '1989-04-02', 'Av. Juares, calle Hidalgo', 123, 'Pression', 1990, 'Chetumal', 1234567891, '21'),
('p10', 'Tus Chismes', '2018-11-08', 'Av. Carlos, calle Montero', 12, 'TotalGraphics', 2019, 'Yucatan', 1234567900, '30'),
('p2', 'World News', '1980-08-29', 'Av. Leon, calle Flamingo', 14, 'Graficos Pionera', 1980, 'Playa del Carmen', 1234567892, '22'),
('p3', 'El Nuevo Diario', '1990-07-10', 'Av. MiTia, calle EnTanga', 11, 'xpresson', 2000, 'Sinaloa', 1234567893, '23'),
('p4', 'Cinco Días', '2004-10-08', 'Av. Harry, calle Potter', 19, 'HotColor', 2005, 'México City', 1234567894, '24'),
('p5', 'Noticia del día', '0000-00-00', 'Av. Colocio, calle Arturo', 89, 'Mundo Grafico', 2008, 'Veracruz', 1234567895, '25'),
('p6', 'El bato de la bici', '1992-10-23', 'Av. Isael, calle Canul', 209, 'SuperPrint', 1993, 'Baja California Sur', 1234567896, '26'),
('p7', 'Local News', '1992-10-23', 'Al. Francisco, calle Ramirez', 108, 'Lozano Impresores', 2003, 'Oaxaca', 1234567897, '27'),
('p8', 'NewYork Times', '2010-02-10', 'Av. Alejandro, calle Alvarez', 98, 'Imprenta Chingona', 2011, 'Chiapas', 1234567898, '28'),
('p9', 'ElPeriodico', '2012-01-12', 'Av. Papi, calle Chulo', 45, 'EcoPrint', 2013, 'Tabasco', 1234567899, '29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamo`
--

CREATE TABLE `prestamo` (
  `id_prestamo` int(11) NOT NULL,
  `fecha_prestamo` date NOT NULL,
  `fecha_devolucion` date NOT NULL,
  `estado_de_volucion` tinyint(1) NOT NULL,
  `observaciones` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `prestamo`
--

INSERT INTO `prestamo` (`id_prestamo`, `fecha_prestamo`, `fecha_devolucion`, `estado_de_volucion`, `observaciones`) VALUES
(1, '2020-05-02', '2020-07-01', 1, ''),
(2, '2020-12-05', '2020-11-22', 1, ''),
(3, '2020-08-14', '2020-08-16', 1, ''),
(4, '2020-06-07', '2020-10-18', 0, ''),
(5, '2020-10-18', '2020-11-18', 1, ''),
(6, '2020-06-09', '2020-12-23', 0, ''),
(7, '2020-01-01', '2020-02-01', 1, ''),
(8, '2020-06-06', '2020-07-06', 1, ''),
(9, '2020-07-09', '2020-08-09', 1, ''),
(10, '2020-05-06', '2020-10-17', 0, ''),
(25, '2020-12-05', '2020-11-22', 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamo_x_alumno`
--

CREATE TABLE `prestamo_x_alumno` (
  `id_prestamo` varchar(10) NOT NULL,
  `no_control` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `prestamo_x_alumno`
--

INSERT INTO `prestamo_x_alumno` (`id_prestamo`, `no_control`) VALUES
('1', '1819036'),
('2', '2031018'),
('3', '2031004'),
('4', '1823062'),
('5', '1952021'),
('6', '2031055'),
('7', '1952034'),
('8', '2031049'),
('9', '1725090'),
('10', '1699599');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamo_x_maestro`
--

CREATE TABLE `prestamo_x_maestro` (
  `id_prestamo` varchar(10) NOT NULL,
  `rfc` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `prestamo_x_maestro`
--

INSERT INTO `prestamo_x_maestro` (`id_prestamo`, `rfc`) VALUES
('1', 'AM162450'),
('2', 'AM633212'),
('3', 'AR102533'),
('4', 'AR531201'),
('5', 'BL331250'),
('6', 'CV200101'),
('7', 'CV551066'),
('8', 'LE54XX21'),
('9', 'SC412136'),
('10', 'TC059812');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `revistas`
--

CREATE TABLE `revistas` (
  `id_revista` varchar(30) NOT NULL,
  `nombreRevista` varchar(30) NOT NULL,
  `nombreAutorRvs` varchar(30) NOT NULL,
  `apellidoAutorRvs` varchar(30) NOT NULL,
  `EditorialPublicaRvs` varchar(70) NOT NULL,
  `DireccionEditorialRvs` varchar(70) NOT NULL,
  `TipoContenidoRvs` varchar(30) NOT NULL,
  `FechaPublicacionRvs` date NOT NULL,
  `LugarEdicionRvs` varchar(30) NOT NULL,
  `id_prestamo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `revistas`
--

INSERT INTO `revistas` (`id_revista`, `nombreRevista`, `nombreAutorRvs`, `apellidoAutorRvs`, `EditorialPublicaRvs`, `DireccionEditorialRvs`, `TipoContenidoRvs`, `FechaPublicacionRvs`, `LugarEdicionRvs`, `id_prestamo`) VALUES
('1', 'Revista Neo', 'Carlo ', 'Asueta', 'Ediciones El Naranjo', 'miraflores #13', 'Animales', '2006-06-30', 'Mexico', '41'),
('10', 'PuroMarketing', 'Monse', 'Ramirez', 'Editorial Jus', 'Sierra #66', 'Marketing', '2005-07-09', 'Sinaloa', '50'),
('2', 'InformaBTL', 'Juan', 'Lopez', 'Alfaomega Grupo Editor', 'Independencia #156', 'Noticias', '2005-07-01', 'Queretaro', '42'),
('3', 'Fortune en Español', 'Pedro', 'Masias', 'Ediciones Era, SA de CV', 'Maxuchak #43', 'Finansas', '2005-07-02', 'Michoacan', '43'),
('4', 'Forbes mexico', 'Enrique', 'Segoviano', 'Editores Mexicanos Unidos', 'Insurgentes #54', 'Finansas', '2005-07-03', 'Chiapas', '44'),
('5', 'Merca 2.0 ', 'German', 'Garmendia', 'Jorale Editores, SA de CV', 'Pucte #65', 'Mercadotecnia', '2005-07-04', 'QuintanaRoo', 'Recuperando datos. Espere unos'),
('6', 'Expansión ', 'Fernando', 'Rodriguez', 'Grupo Editor Orfila Valentini, SA de CV', 'Juarez #52', 'Periodismo', '2005-07-05', 'Tamaulipas', '46'),
('7', 'Alto Nivel ', 'Miguel', 'Montero', 'Editorial Progreso, S.A. de C.V.', 'Francisco #12', 'Economia', '2005-07-06', 'Veracruz', '47'),
('8', 'Entrepreneur ', 'Francisco', 'Villa', 'Nostra Ediciones', 'Avila #77', 'Finansas', '2005-07-07', 'Tabasco', '48'),
('9', 'Marketing4eCommerce México ', 'Laura', 'Pico', 'Editorial Sexto Piso', 'Montaña #99', 'Ecomerce', '2005-07-08', 'Yucatan', '49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `software`
--

CREATE TABLE `software` (
  `id_software` varchar(10) NOT NULL,
  `Nombre-Software` varchar(30) NOT NULL,
  `Creador-Software` varchar(30) NOT NULL,
  `Mes_PublicaciónSoft` int(11) NOT NULL,
  `Año_Publica` int(11) NOT NULL,
  `Tipo-Software` varchar(30) NOT NULL,
  `Tamaño-Software` int(11) NOT NULL,
  `Versión-Software` int(11) NOT NULL,
  `Costo-Software` varchar(30) NOT NULL,
  `id_prestamo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `software`
--

INSERT INTO `software` (`id_software`, `Nombre-Software`, `Creador-Software`, `Mes_PublicaciónSoft`, `Año_Publica`, `Tipo-Software`, `Tamaño-Software`, `Versión-Software`, `Costo-Software`, `id_prestamo`) VALUES
('s1', 'Microsoft Windows 10', 'Microsoft', 7, 2015, 'Sistema Operativo', 5, 20, 'Gratuita', '11'),
('s10', 'Acrobat Reader', 'John Warnock', 4, 1992, 'Documentación', 908, 202, 'Paga o Gratuita', '20'),
('s2', 'Linux', 'Linus Torvalds', 8, 1991, 'Sistema Operativo', 3, 17, 'Gratuita', '12'),
('s3', 'Wizard', 'Emmanuel Ramirez', 10, 2000, 'Diseño Grafico', 70, 12, 'Paga o Gratuita', '13'),
('s4', 'Spotify', 'Daniel Ek', 10, 2008, 'Musica', 788, 3, 'Paga o Gratuita', '14'),
('s5', 'Skype', 'Janus Friis y Niklas Zennström', 8, 2003, 'Comunicación', 105, 8, 'Paga o Gratuita', '15'),
('s6', 'McAfee', 'Fransisco Duco', 6, 2009, 'Antivirus', 90, 11, 'Gratuita', '16'),
('s7', 'Photoshop', 'Thomas Knoll', 8, 1990, 'Edición de imagen', 4, 10, 'Paga', '17'),
('s8', 'Autocad', 'John Walker ', 10, 1982, 'Graficacion', 2, 20, 'Paga', '18'),
('s9', 'Corel Draw', 'Michel Bouillon y Pat Beirne', 3, 1989, 'Graficación', 110, 39, 'Paga', '19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` varchar(10) NOT NULL,
  `nombreU` varchar(30) NOT NULL,
  `ApellidoUP` varchar(30) NOT NULL,
  `ApellidoUM` varchar(30) NOT NULL,
  `fechaN` date NOT NULL,
  `correo` varchar(30) NOT NULL,
  `contraseña` varchar(30) NOT NULL,
  `apodo` varchar(30) NOT NULL,
  `telefono` bigint(100) NOT NULL,
  `sexo` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombreU`, `ApellidoUP`, `ApellidoUM`, `fechaN`, `correo`, `contraseña`, `apodo`, `telefono`, `sexo`) VALUES
('u1', 'Wolf', 'Montero', 'Cortez', '2000-05-30', 'itwolf117@gmail.com', 'password', 'Wolf', 983107505, 'M'),
('u2', 'Alejandor', 'Alvarez', 'Carranza ', '1999-11-24', 'platinorifa@gmail.com', 'password', 'Platino', 983104759, 'M'),
('u3', 'Jorge ', 'Sierra', 'Lopez', '1995-05-05', 'jorgue23@gmail.com', 'password', 'Gorge el curioso', 983135206, 'M'),
('u4', 'Enrique', 'Toledo', 'Ortiz', '1999-04-04', 'enr45@gmail.com', 'password', 'kike', 983145026, 'M'),
('u5', 'Jesus', 'Vega', 'Cortez', '1990-04-07', 'jesss8@gmail.com', 'password', 'yisus', 983167489, 'M'),
('u6', 'Juan', 'Castro', 'Ramirez', '2000-03-04', 'juan789@gmail.com', 'password', 'jim', 9831079645, 'M'),
('u7', 'Emanuel', 'Uc', 'German', '2000-05-06', 'emn@gmail.com', 'password', 'ema', 9830321456, 'M'),
('u8', 'Ivan', 'Mondragon', 'Arceo', '2000-04-06', 'ivan56@gmail.com', 'password', 'iran', 9831456987, 'M'),
('u9', 'Jade', 'Garcia', 'Tome', '2000-03-09', 'jade5432@gmail.com', 'password', 'jade', 98314565789, 'F'),
('u10', 'Tomas', 'Chel', 'Ortega', '2000-01-07', 'toma4as@gmail.com', 'password', 'tomas', 9831325478, 'M');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`no_control`),
  ADD KEY `nombreAlum` (`nombreAlum`),
  ADD KEY `apellidoPatAlum` (`apellidoPatAlum`),
  ADD KEY `apellidoMatAlum` (`apellidoMatAlum`),
  ADD KEY `fechaNacAlum` (`fechaNacAlum`),
  ADD KEY `sexoAlum` (`sexoAlum`);

--
-- Indices de la tabla `detalle_prestamo_x_investigacion`
--
ALTER TABLE `detalle_prestamo_x_investigacion`
  ADD KEY `id_prestamo` (`id_prestamo`),
  ADD KEY `id_investigacion` (`id_investigacion`);

--
-- Indices de la tabla `detalle_prestamo_x_libro`
--
ALTER TABLE `detalle_prestamo_x_libro`
  ADD KEY `id_prestamo` (`id_prestamo`),
  ADD KEY `id_libro` (`id_libro`);

--
-- Indices de la tabla `detalle_prestamo_x_periodico`
--
ALTER TABLE `detalle_prestamo_x_periodico`
  ADD KEY `id_prestamo` (`id_prestamo`),
  ADD KEY `id_periodico` (`id_periodico`);

--
-- Indices de la tabla `detalle_prestamo_x_resvista`
--
ALTER TABLE `detalle_prestamo_x_resvista`
  ADD KEY `id_prestamo` (`id_prestamo`),
  ADD KEY `id_revista` (`id_revista`),
  ADD KEY `id_revista_2` (`id_revista`);

--
-- Indices de la tabla `detalle_prestamo_x_software`
--
ALTER TABLE `detalle_prestamo_x_software`
  ADD KEY `id_prestamo` (`id_prestamo`),
  ADD KEY `id_software` (`id_software`);

--
-- Indices de la tabla `investigación`
--
ALTER TABLE `investigación`
  ADD PRIMARY KEY (`id_investigaciones`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id_libros`);

--
-- Indices de la tabla `maestros`
--
ALTER TABLE `maestros`
  ADD PRIMARY KEY (`rfc`),
  ADD KEY `nombreM` (`nombreM`),
  ADD KEY `apellidoMP` (`apellidoMP`),
  ADD KEY `apellidoMM` (`apellidoMM`),
  ADD KEY `FechaNacM` (`FechaNacM`),
  ADD KEY `sexoMaestro` (`sexoMaestro`);

--
-- Indices de la tabla `maestros_autores`
--
ALTER TABLE `maestros_autores`
  ADD PRIMARY KEY (`PK_maestroautores`),
  ADD KEY `fk_id_libro` (`fk_id_libro`),
  ADD KEY `fk_rfc_maestro` (`fk_rfc_maestro`);

--
-- Indices de la tabla `multas`
--
ALTER TABLE `multas`
  ADD KEY `id_prestamo` (`id_prestamo`);

--
-- Indices de la tabla `periodico`
--
ALTER TABLE `periodico`
  ADD PRIMARY KEY (`id_periodico`);

--
-- Indices de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD PRIMARY KEY (`id_prestamo`) USING BTREE;

--
-- Indices de la tabla `prestamo_x_alumno`
--
ALTER TABLE `prestamo_x_alumno`
  ADD KEY `id_prestamo` (`id_prestamo`),
  ADD KEY `no_control` (`no_control`);

--
-- Indices de la tabla `prestamo_x_maestro`
--
ALTER TABLE `prestamo_x_maestro`
  ADD KEY `rfc` (`rfc`),
  ADD KEY `id_prestamo` (`id_prestamo`);

--
-- Indices de la tabla `revistas`
--
ALTER TABLE `revistas`
  ADD PRIMARY KEY (`id_revista`);

--
-- Indices de la tabla `software`
--
ALTER TABLE `software`
  ADD PRIMARY KEY (`id_software`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD KEY `apellido_mat_mas` (`ApellidoUM`),
  ADD KEY `apellido_pat_mas` (`ApellidoUP`),
  ADD KEY `sexo_mas` (`sexo`),
  ADD KEY `fecha_mas` (`fechaN`),
  ADD KEY `nombre_alumno` (`nombreU`),
  ADD KEY `id_alumno` (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  MODIFY `id_prestamo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;


CREATE USER 'Administrador'@'localhost' IDENTIFIED BY 'Password123!';

GRANT ALL PRIVILEGES ON `biblioteca`.* TO `Administrador`@`localhost` WITH GRANT OPTION;

CREATE USER 'Bibliotecario'@'localhost' IDENTIFIED BY 'Biblioteca123!';

GRANT SELECT, INSERT, UPDATE, DELETE, REFERENCES, ALTER, CREATE VIEW, SHOW VIEW ON `biblioteca`.`prestamo` TO `Bibliotecario`@`localhost`;

GRANT SELECT, INSERT, UPDATE, DELETE, REFERENCES, ALTER, CREATE VIEW, SHOW VIEW ON `biblioteca`.`multas` TO `Bibliotecario`@`localhost`;


COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
