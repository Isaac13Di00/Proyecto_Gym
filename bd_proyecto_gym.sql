-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-06-2022 a las 00:13:39
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
-- Base de datos: `bd_proyecto_gym`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id` int(11) NOT NULL,
  `area` enum('Administrativo','Recepcion') NOT NULL,
  `sexo` enum('Hombre','Mujer','Otro') NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `tipo_sangre` enum('O-','O+','A+','A-','B+','B-','AB+','AB-') NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contra` varchar(255) NOT NULL,
  `calle` varchar(100) NOT NULL,
  `colonia` varchar(100) NOT NULL,
  `cp` varchar(5) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id`, `area`, `sexo`, `fecha_nacimiento`, `tipo_sangre`, `telefono`, `email`, `contra`, `calle`, `colonia`, `cp`, `nombre`, `estado`) VALUES
(1, 'Administrativo', 'Hombre', '2000-12-13', 'O-', '6671256649', 'isaac@gmail.com', 'isaac', 'Matteoti', 'Roma', '23050', 'Isaac Alejandro Pérez Castro', 1),
(2, 'Recepcion', 'Mujer', '1996-01-06', 'O+', '6121618998', 'michelle@gmail.com', '$2y$10$k9oqMD/tQBoloxlj2DmoUOjMKe4BEsbGIxaFtshXe3P1qMuQGyI2S', 'Ballena', '', '23030', 'Michelle Torres', 1),
(3, 'Administrativo', 'Otro', '2001-10-15', 'B+', '6121561880', 'niggelA@gmail.com', '$2y$10$TdMdwHdSqb5KRcB9RRm70unrbx/PPddaoxJF9mOKnLLKu5KrGbKum', 'Calle #4', 'Perla del golfo', '23060', 'Niggel Altamirano Hernandez', 1),
(4, 'Administrativo', 'Hombre', '2000-12-13', 'O+', '6671256648', 'correo@gmail.com', '$2y$10$atJLUXMH4nSak.NNnIFrSeE13M4ObB3UD38ga5lZGJgJARYJLiJma', 'Calle #1', 'Pesquera', '26051', 'Isaac Pérez', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE `asistencia` (
  `idCita` int(11) NOT NULL,
  `idAdministrador` int(11) NOT NULL,
  `asistencias` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `asistencia`
--

INSERT INTO `asistencia` (`idCita`, `idAdministrador`, `asistencias`) VALUES
(2, 2, 1),
(2, 2, 1),
(2, 2, 1),
(4, 2, 1),
(3, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `id` int(11) NOT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  `fecha` date NOT NULL,
  `asistencia` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`id`, `idUsuario`, `fecha`, `asistencia`) VALUES
(2, 111, '2022-06-13', 1),
(3, 111, '2022-06-21', 1),
(4, 111, '2022-06-19', 1),
(5, 111, '2022-06-23', 0),
(6, 111, '2022-07-19', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `test`
--

CREATE TABLE `test` (
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `test`
--

INSERT INTO `test` (`fecha`) VALUES
('0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `membresia` enum('Sencilla','Premium') NOT NULL,
  `miembro_desde` date NOT NULL,
  `vigencia` date NOT NULL,
  `sexo` enum('Hombre','Mujer','Otro') NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `tipo_sangre` enum('O-','O+','A+','A-','B+','B-','AB+','AB-') NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contra` varchar(255) NOT NULL,
  `calle` varchar(100) NOT NULL,
  `colonia` varchar(100) NOT NULL,
  `cp` varchar(5) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `fk_idAdministrador` int(11) DEFAULT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `membresia`, `miembro_desde`, `vigencia`, `sexo`, `fecha_nacimiento`, `tipo_sangre`, `telefono`, `email`, `contra`, `calle`, `colonia`, `cp`, `nombre`, `fk_idAdministrador`, `estado`) VALUES
(1, 'Sencilla', '2022-06-07', '2022-07-07', 'Hombre', '2002-06-04', 'O-', '6121564804', 'angel@gmail.com', 'angel', 'Calle', 'colonia', '23070', 'Angel Sanchez Gonzales', 1, 1),
(2, 'Premium', '2021-10-23', '2022-09-18', 'Mujer', '2000-03-18', 'A-', '139 903 75', 'jthomlinson0@meetup.com', '6gQDGPB0HO7', 'Autumn Leaf', 'Terrace', '2190', 'Jenny Thomlinson', 1, 1),
(3, 'Sencilla', '2021-06-04', '2022-02-25', 'Hombre', '1997-06-23', 'O-', '526 831 05', 'jpobjay1@arizona.edu', 'm7gt68bh', 'Kedzie', 'Plaza', '3713', 'Justin Pobjay', 1, 1),
(4, 'Sencilla', '2021-10-27', '2022-12-30', 'Hombre', '1991-02-16', 'O+', '569 751 43', 'zbeckett2@redcross.org', '0Q5TPH7NOBgA', 'Paget', 'Avenue', '6833', 'Zelig Beckett', 1, 1),
(5, 'Sencilla', '2022-02-05', '2023-06-26', 'Mujer', '2003-03-28', 'A+', '976 408 86', 'dnorkett3@foxnews.com', 'OVaI7V', 'Dryden', 'Point', '257', 'Dorine Norkett', 1, 1),
(6, 'Sencilla', '2022-02-07', '2022-08-01', 'Hombre', '1992-07-16', 'B-', '449 356 26', 'mloud4@patch.com', 'Btg0jjAWZJFv', 'Cordelia', 'Road', '613', 'Murry Loud', 1, 1),
(7, 'Premium', '2022-02-28', '2023-01-26', 'Otro', '1992-10-01', 'A+', '808 101 03', 'zorans5@woothemes.com', 'UpbBc0', 'Green', 'Avenue', '0376', 'Zach Orans', 1, 1),
(8, 'Sencilla', '2021-07-15', '2021-06-11', 'Otro', '1995-04-21', 'B-', '614 312 11', 'hmckibben6@bbc.co.uk', 'lp1lbidE', 'Northview', 'Alley', '45999', 'Haskel McKibben', 1, 1),
(9, 'Premium', '2021-01-09', '2022-05-14', 'Hombre', '1996-09-08', 'B-', '854 383 13', 'lde7@chicagotribune.com', 'f6rCSTxGKTU', 'Declaration', 'Trail', '32545', 'Leanora De Angelis', 1, 1),
(10, 'Sencilla', '2021-04-23', '2021-09-19', 'Hombre', '2001-09-14', 'AB+', '348 139 06', 'nfist8@ehow.com', 'yHDJ4MU', 'Gulseth', 'Way', '06407', 'Niven Fist', 1, 1),
(11, 'Premium', '2021-01-30', '2023-01-11', 'Otro', '1991-11-02', 'AB-', '447 841 34', 'mbenda9@auda.org.au', 'nJi5nsgYt7z', 'Almo', 'Terrace', '4984', 'Mata Benda', 1, 1),
(12, 'Premium', '2021-01-10', '2022-05-19', 'Mujer', '1996-08-12', 'AB-', '530 869 31', 'tcumbera@eventbrite.com', '4EpiYyRJUopW', 'Summerview', 'Road', '7', 'Thaddus Cumber', 1, 1),
(13, 'Sencilla', '2021-08-21', '2022-06-23', 'Hombre', '1993-07-10', 'A+', '651 822 10', 'lakasterb@wp.com', 'OW4v4GB', 'Esch', 'Trail', '63', 'Lindsay Akaster', 1, 1),
(14, 'Premium', '2021-01-27', '2021-10-12', 'Otro', '1996-03-07', 'O+', '611 285 49', 'schamanc@blogs.com', 'nsTVoX', 'Bonner', 'Hill', '677', 'Samara Chaman', 1, 1),
(15, 'Sencilla', '2022-03-03', '2023-11-17', 'Otro', '1994-03-13', 'O-', '228 142 98', 'cmatyashevd@edublogs.org', 'aX9BOoJXG2', 'Elgar', 'Way', '2433', 'Cameron Matyashev', 1, 1),
(16, 'Premium', '2022-05-15', '2022-01-29', 'Otro', '1997-04-18', 'B+', '445 617 82', 'nbrawleye@sbwire.com', 'SyQGpx7oqe', 'Del Sol', 'Avenue', '66', 'Normy Brawley', 1, 1),
(17, 'Premium', '2021-09-19', '2023-04-15', 'Hombre', '2003-01-26', 'B-', '488 770 74', 'tcreffieldf@dion.ne.jp', 'tcdANc', 'Kropf', 'Circle', '6096', 'Tracey Creffield', 1, 1),
(18, 'Premium', '2022-05-25', '2021-10-02', 'Hombre', '1996-07-05', 'O+', '261 154 59', 'dpendrichg@friendfeed.com', 'K4xrT2uF', 'Michigan', 'Parkway', '8', 'Dari Pendrich', 1, 1),
(19, 'Sencilla', '2021-10-11', '2022-01-31', 'Mujer', '1991-06-30', 'O+', '158 353 41', 'lclaybourneh@nyu.edu', 'FzBwmS5lQo', 'Londonderry', 'Parkway', '54', 'Lindsy Claybourne', 1, 1),
(20, 'Sencilla', '2022-03-30', '2023-05-23', 'Otro', '1997-02-21', 'A-', '838 829 22', 'cvaughami@squarespace.com', '5f0k1bZCa', 'Gerald', 'Junction', '14597', 'Cchaddie Vaugham', 1, 1),
(21, 'Sencilla', '2022-06-02', '2023-01-14', 'Otro', '1999-08-01', 'O+', '426 105 32', 'hkruschovj@list-manage.com', '3e53zHR2f', 'Bellgrove', 'Alley', '922', 'Harrie Kruschov', 1, 1),
(22, 'Sencilla', '2021-01-03', '2021-06-14', 'Mujer', '1992-06-13', 'AB-', '430 917 27', 'twolfordk@ameblo.jp', 'TQvgrTFVj', 'Main', 'Hill', '1368', 'Trude Wolford', 1, 1),
(23, 'Premium', '2021-01-07', '2021-10-23', 'Hombre', '2002-09-18', 'A-', '813 743 01', 'iwentl@people.com.cn', 'faE99p2', 'Grasskamp', 'Center', '128', 'Irvine Went', 1, 1),
(24, 'Premium', '2021-05-11', '2022-06-03', 'Hombre', '2004-01-28', 'O+', '277 534 33', 'amclewdm@sohu.com', 'G4PQpUNei3ei', 'Atwood', 'Park', '5061', 'Agnes McLewd', 1, 1),
(25, 'Sencilla', '2021-04-18', '2022-03-28', 'Hombre', '2000-09-14', 'AB-', '176 303 82', 'jbescobyn@tripod.com', 'h1CJ0uDLpG', 'Thompson', 'Plaza', '85486', 'Jasper Bescoby', 1, 1),
(26, 'Sencilla', '2021-03-29', '2021-08-21', 'Hombre', '2003-08-24', 'A-', '981 771 24', 'krultono@paypal.com', 'mLAsq1W', 'Drewry', 'Trail', '48361', 'Katherina Rulton', 1, 1),
(27, 'Premium', '2022-03-24', '2021-10-11', 'Otro', '1993-12-05', 'O+', '687 939 33', 'alempennyp@paginegialle.it', 'qwG7ox', 'Kedzie', 'Plaza', '2722', 'Alysa Lempenny', 1, 1),
(28, 'Premium', '2021-06-02', '2022-11-02', 'Mujer', '2000-02-27', 'O+', '370 680 67', 'rbrittinq@youtu.be', 'gip6DnwrMI4', 'Northwestern', 'Point', '7244', 'Rhonda Brittin', 1, 1),
(29, 'Premium', '2021-09-21', '2023-12-26', 'Hombre', '1990-04-01', 'A+', '785 207 60', 'fplumridger@telegraph.co.uk', 'YUYOXcD1pK', 'Anniversary', 'Crossing', '90', 'Franklin Plumridge', 1, 1),
(30, 'Sencilla', '2022-05-27', '2023-01-08', 'Mujer', '1992-03-17', 'A+', '844 581 64', 'kchaplins@discuz.net', 'oQICESqxSkj', 'Crowley', 'Crossing', '94', 'Kathy Chaplin', 1, 1),
(31, 'Sencilla', '2021-11-01', '2021-10-22', 'Mujer', '2003-09-08', 'O+', '302 602 95', 'cwhittyt@histats.com', 'AKkQQK', 'Susan', 'Pass', '88', 'Cornelle Whitty', 1, 1),
(32, 'Premium', '2021-04-24', '2023-03-30', 'Otro', '2000-12-12', 'A-', '662 420 00', 'bcarrenu@umn.edu', 'KHQI18yuNQxu', 'Nancy', 'Place', '686', 'Byrle Carren', 1, 1),
(33, 'Sencilla', '2021-05-28', '2023-08-02', 'Mujer', '2001-07-30', 'B+', '623 487 89', 'adenisotv@alexa.com', 'xExNX0b', 'Morning', 'Way', '0079', 'Allistir Denisot', 1, 1),
(34, 'Sencilla', '2021-05-01', '2022-07-31', 'Hombre', '1993-06-28', 'B+', '784 813 80', 'dsydesw@noaa.gov', 'E01rZtRPsMyj', 'Ridgeview', 'Place', '0', 'Derrik Sydes', 1, 1),
(35, 'Premium', '2021-11-03', '2022-03-03', 'Hombre', '1991-08-13', 'O-', '106 526 77', 'bsyvretx@go.com', '69Wnty', 'Mayer', 'Lane', '75710', 'Bordy Syvret', 1, 1),
(36, 'Premium', '2021-03-15', '2021-07-21', 'Otro', '2001-12-16', 'B-', '626 775 89', 'mpinksy@nih.gov', 'WA169Z', 'Debra', 'Court', '2', 'Marcelle Pinks', 1, 1),
(37, 'Premium', '2022-03-02', '2023-04-05', 'Otro', '1995-04-24', 'O+', '509 100 64', 'rcoggillz@walmart.com', 'wW7RSW', 'Carioca', 'Plaza', '82', 'Rodina Coggill', 1, 1),
(38, 'Sencilla', '2021-03-10', '2022-04-01', 'Mujer', '2002-08-07', 'AB-', '169 768 16', 'cspere10@bbc.co.uk', 'ARWi22JVLpb', 'Doe Crossing', 'Avenue', '010', 'Cully Spere', 1, 1),
(39, 'Premium', '2021-06-14', '2022-09-20', 'Otro', '2001-03-12', 'O-', '976 352 88', 'haingel11@e-recht24.de', 'Ji4rWtEd7', 'Northport', 'Place', '56', 'Hephzibah Aingel', 1, 1),
(40, 'Premium', '2022-03-09', '2022-10-20', 'Mujer', '2003-11-15', 'B-', '418 783 20', 'gaskew12@ustream.tv', '1SdWTN9I', 'Milwaukee', 'Place', '77', 'Godart Askew', 1, 1),
(41, 'Premium', '2021-07-20', '2022-03-03', 'Mujer', '1996-11-14', 'AB-', '161 851 16', 'btritton13@edublogs.org', 'HrLSqxYV', 'Cordelia', 'Circle', '20', 'Batsheva Tritton', 1, 1),
(42, 'Premium', '2021-09-13', '2022-08-08', 'Mujer', '2000-09-04', 'AB-', '351 944 96', 'sbowlas14@dedecms.com', 'hAecqcKtwI', 'Monument', 'Center', '2047', 'Sharla Bowlas', 1, 1),
(43, 'Sencilla', '2021-01-18', '2021-10-07', 'Mujer', '1998-06-12', 'O+', '360 368 20', 'rkrystof15@dmoz.org', 'dycPR9DFEDSR', 'Garrison', 'Point', '5779', 'Richard Krystof', 1, 1),
(44, 'Premium', '2021-03-07', '2022-04-29', 'Mujer', '1999-07-14', 'AB+', '427 123 73', 'wgillyett16@berkeley.edu', 'qvMm0RB5R5s', 'Gerald', 'Road', '294', 'Wilma Gillyett', 1, 1),
(45, 'Sencilla', '2021-04-21', '2023-09-30', 'Hombre', '1990-01-26', 'B-', '562 889 69', 'lwillcott17@howstuffworks.com', '0EnOAk', 'Hanson', 'Trail', '3624', 'Lela Willcott', 1, 1),
(46, 'Sencilla', '2021-04-07', '2021-09-16', 'Otro', '2003-06-26', 'O+', '666 622 53', 'sde18@fotki.com', 'C8JGfwhQb78', '6th', 'Pass', '98881', 'Sergeant de Merida', 1, 1),
(47, 'Premium', '2021-12-09', '2022-03-16', 'Otro', '2001-12-23', 'O+', '987 202 25', 'ffaragan19@vimeo.com', 'IThFCMPqoN', 'Golden Leaf', 'Alley', '41', 'Freeland Faragan', 1, 1),
(48, 'Sencilla', '2022-02-26', '2022-01-05', 'Otro', '1998-09-27', 'B-', '707 789 52', 'crothwell1a@howstuffworks.com', 'QNvlptTlX', 'Colorado', 'Court', '09', 'Clarice Rothwell', 1, 1),
(49, 'Premium', '2021-01-30', '2022-07-01', 'Otro', '1990-12-29', 'B+', '588 807 13', 'vregnard1b@ifeng.com', 'ppkGDTO', 'Summit', 'Parkway', '9', 'Vinny Regnard', 1, 1),
(50, 'Premium', '2022-02-27', '2021-12-03', 'Hombre', '1999-07-22', 'AB+', '719 470 84', 'adoale1c@bing.com', 'XOXCWaM0uvvr', 'Bobwhite', 'Trail', '26833', 'Averyl Doale', 1, 1),
(51, 'Premium', '2021-10-10', '2022-07-26', 'Hombre', '2002-08-23', 'B-', '513 987 52', 'nluetkemeyer1d@vinaora.com', 'CQxgdiLNwD', 'Hoepker', 'Court', '87032', 'Nelle Luetkemeyer', 1, 1),
(52, 'Premium', '2022-05-03', '2022-11-21', 'Mujer', '1990-03-27', 'AB+', '262 649 85', 'adebill1e@tripod.com', 'a6Wm3SvilA2Q', 'Hoepker', 'Place', '8', 'Ahmed Debill', 1, 1),
(53, 'Sencilla', '2021-10-15', '2023-08-10', 'Mujer', '1991-08-15', 'B+', '873 132 22', 'tkeal1f@seesaa.net', '3yQDgUUU', 'Kenwood', 'Crossing', '46', 'Torr Keal', 1, 1),
(54, 'Premium', '2021-08-03', '2021-08-26', 'Otro', '2003-04-01', 'O-', '736 349 44', 'kbresland1g@aboutads.info', 'GijQewaB', 'Claremont', 'Street', '06562', 'Katharyn Bresland', 1, 1),
(55, 'Premium', '2022-02-26', '2022-09-11', 'Otro', '2001-06-05', 'O-', '547 185 13', 'ecanon1h@newsvine.com', 'VPXwZu', 'Warner', 'Trail', '2', 'Elvis Canon', 1, 1),
(56, 'Premium', '2022-05-15', '2022-04-25', 'Mujer', '1990-05-16', 'AB-', '669 436 95', 'jicom1i@addthis.com', 'uCY36Ph96t', 'Erie', 'Center', '67', 'Jacqueline Icom', 1, 1),
(57, 'Sencilla', '2022-03-14', '2023-10-31', 'Hombre', '1997-06-22', 'A+', '158 295 83', 'knairn1j@eepurl.com', '0J1DOKqWBhc', 'Corben', 'Park', '314', 'Katinka Nairn', 1, 1),
(58, 'Sencilla', '2021-08-10', '2022-05-06', 'Hombre', '1994-02-04', 'A+', '626 584 25', 'imalafe1k@reverbnation.com', '13XUe2j', 'Hooker', 'Parkway', '75', 'Issiah Malafe', 1, 1),
(59, 'Premium', '2021-06-05', '2022-04-12', 'Mujer', '1990-04-19', 'A-', '893 320 95', 'hkiffin1l@youku.com', 'pcLFgEa163Hs', 'Pankratz', 'Center', '5113', 'Henrik Kiffin', 1, 1),
(60, 'Premium', '2021-09-15', '2023-09-08', 'Mujer', '1997-07-06', 'O-', '430 496 43', 'mmcgrah1m@live.com', 'hfcyvYuQFLs5', 'Union', 'Lane', '70', 'Madlin McGrah', 1, 1),
(61, 'Premium', '2021-10-09', '2021-11-26', 'Hombre', '2002-05-15', 'B-', '348 141 08', 'jturbern1n@uiuc.edu', 'uYHxnGIYm5', 'Pawling', 'Way', '419', 'Jake Turbern', 1, 1),
(62, 'Premium', '2021-08-07', '2023-03-28', 'Otro', '1997-01-27', 'B-', '688 386 26', 'cradin1o@bbb.org', 'ioDyH4O5hXVa', 'Mosinee', 'Circle', '0', 'Carson Radin', 1, 1),
(63, 'Premium', '2021-03-23', '2022-12-12', 'Hombre', '1999-08-11', 'B+', '996 560 09', 'zbraganza1p@slate.com', 'aar21ISX', 'Sullivan', 'Drive', '797', 'Zed Braganza', 1, 1),
(64, 'Premium', '2022-04-08', '2022-09-18', 'Mujer', '1999-01-11', 'A-', '408 167 88', 'ihalladay1q@moonfruit.com', 'D0CaajR9i3u', 'Lillian', 'Road', '84', 'Iago Halladay', 1, 1),
(65, 'Premium', '2022-03-25', '2022-08-25', 'Otro', '2001-08-08', 'A+', '530 589 19', 'bconyard1r@nytimes.com', '0PNNis9Ym3n', 'Blaine', 'Parkway', '051', 'Brooks Conyard', 1, 1),
(66, 'Sencilla', '2021-11-17', '2023-06-03', 'Otro', '1998-06-24', 'O+', '272 967 50', 'craithmill1s@scientificamerican.com', 'W7jV9YjSfQ9', 'Springs', 'Place', '0', 'Cheston Raithmill', 1, 1),
(67, 'Premium', '2022-02-15', '2023-07-13', 'Otro', '2000-07-14', 'A-', '447 707 04', 'lloughney1t@moonfruit.com', '9fZbmG6cSl7', 'Hanover', 'Lane', '4846', 'Lolly Loughney', 1, 1),
(68, 'Premium', '2022-01-18', '2023-01-19', 'Hombre', '1990-06-01', 'AB-', '234 929 92', 'sde1u@fotki.com', 'PNLnEE', 'Londonderry', 'Point', '3554', 'Starla De Cruce', 1, 1),
(69, 'Sencilla', '2022-05-25', '2021-08-02', 'Mujer', '1998-08-02', 'A-', '274 160 27', 'calsford1v@freewebs.com', 'FGMTaDw8nem', 'Lakeland', 'Terrace', '58', 'Caroline Alsford', 1, 1),
(70, 'Premium', '2022-03-07', '2023-03-20', 'Otro', '1995-11-23', 'A+', '571 997 55', 'eivankovic1w@ucoz.com', 'IXgqwiayTV', 'Bluejay', 'Center', '75496', 'Eleonore Ivankovic', 1, 1),
(71, 'Sencilla', '2021-06-05', '2023-09-21', 'Hombre', '2004-05-25', 'AB+', '338 119 47', 'aegarr1x@google.nl', 'yrQ3yvE', 'Corscot', 'Lane', '206', 'Arman Egarr', 1, 1),
(72, 'Sencilla', '2022-05-04', '2023-02-10', 'Otro', '1997-10-04', 'O-', '991 966 96', 'tkeitch1y@usnews.com', 'f6VAjHgva7', '8th', 'Park', '99087', 'Tommy Keitch', 1, 1),
(73, 'Sencilla', '2022-05-27', '2021-10-23', 'Hombre', '1995-08-05', 'B-', '213 873 17', 'wstefanovic1z@slideshare.net', 'Bn710Jzp', 'Sauthoff', 'Junction', '69992', 'Waylen Stefanovic', 1, 1),
(74, 'Sencilla', '2021-08-04', '2023-11-22', 'Mujer', '1997-03-18', 'AB+', '396 202 86', 'crammell20@webeden.co.uk', '1MQVQqIK0', 'Judy', 'Court', '23', 'Collette Rammell', 1, 1),
(75, 'Sencilla', '2022-02-21', '2023-08-03', 'Otro', '1990-12-28', 'AB+', '982 704 63', 'scopestick21@indiegogo.com', 'KolIdx0s', 'Trailsway', 'Lane', '32', 'Sheff Copestick', 1, 1),
(76, 'Premium', '2021-12-23', '2022-11-18', 'Hombre', '1990-05-31', 'A+', '429 646 68', 'daldham22@wunderground.com', 'ANqWGB', 'Holy Cross', 'Avenue', '7593', 'Desiree Aldham', 1, 1),
(77, 'Premium', '2022-04-28', '2022-12-16', 'Mujer', '1995-04-29', 'AB+', '542 849 98', 'owimbury23@accuweather.com', 'OSiBJUtF', 'North', 'Circle', '4', 'Otto Wimbury', 1, 1),
(78, 'Premium', '2021-05-16', '2023-09-04', 'Mujer', '1992-12-21', 'AB-', '201 738 06', 'shimsworth24@skyrock.com', 'ZSCHDKIgU', 'Forest Run', 'Drive', '24', 'Shellysheldon Himsworth', 1, 1),
(79, 'Sencilla', '2021-03-08', '2021-11-02', 'Hombre', '1998-07-22', 'A-', '245 109 84', 'cwegman25@ezinearticles.com', 'He5HOP', 'Grayhawk', 'Point', '20885', 'Christie Wegman', 1, 1),
(80, 'Sencilla', '2022-03-14', '2023-04-17', 'Hombre', '1993-09-17', 'O-', '171 776 42', 'sdayly26@icio.us', 'O0RKWtPc2j', 'Bartelt', 'Crossing', '6868', 'Sal Dayly', 1, 1),
(81, 'Premium', '2021-10-29', '2023-02-25', 'Otro', '1996-04-30', 'A+', '298 301 23', 'amellhuish27@domainmarket.com', 'Vz4A1q', 'Merrick', 'Alley', '738', 'Astrid Mellhuish', 1, 1),
(82, 'Premium', '2021-10-07', '2021-06-21', 'Hombre', '2000-05-08', 'B-', '212 284 85', 'crylett28@weibo.com', 'nM4cniy0xRB', 'Vahlen', 'Circle', '157', 'Carleton Rylett', 1, 1),
(83, 'Premium', '2021-01-26', '2022-12-20', 'Hombre', '2003-08-30', 'B+', '461 829 25', 'tspofforth29@canalblog.com', 'E4njzhrw', 'Manufacturers', 'Street', '54', 'Torin Spofforth', 1, 1),
(84, 'Sencilla', '2022-03-25', '2023-05-05', 'Hombre', '1996-04-08', 'B+', '310 681 55', 'sprestney2a@livejournal.com', 'hEw4zDvSQ', 'Clyde Gallagher', 'Drive', '4', 'Skipper Prestney', 1, 1),
(85, 'Sencilla', '2021-07-05', '2021-12-01', 'Mujer', '2003-08-23', 'O+', '605 888 11', 'bduffit2b@myspace.com', 'OepoVW', 'Reinke', 'Street', '6397', 'Brandtr Duffit', 1, 1),
(86, 'Sencilla', '2022-04-15', '2021-09-16', 'Hombre', '1999-11-09', 'AB-', '709 529 36', 'pcaffery2c@topsy.com', 'Z5TmZ5D1', 'Miller', 'Junction', '2628', 'Patrice Caffery', 1, 1),
(87, 'Sencilla', '2021-10-09', '2022-01-11', 'Mujer', '1994-05-16', 'O-', '130 431 92', 'gmathes2d@123-reg.co.uk', 'rxJv00izGc', 'Blackbird', 'Court', '783', 'Gilbertina Mathes', 1, 1),
(88, 'Premium', '2021-02-23', '2023-12-07', 'Otro', '1996-05-30', 'A+', '963 410 76', 'ieidelman2e@fastcompany.com', '8fk2Z8', 'Eagan', 'Point', '131', 'Igor Eidelman', 1, 1),
(89, 'Sencilla', '2021-04-15', '2023-12-06', 'Otro', '1993-02-02', 'AB-', '152 860 98', 'hmccambrois2f@mail.ru', 'Be6gbHpS9bi', 'Aberg', 'Terrace', '45', 'Hobey McCambrois', 1, 1),
(90, 'Premium', '2021-04-28', '2022-05-22', 'Hombre', '1996-06-12', 'O+', '486 476 47', 'sgapper2g@theglobeandmail.com', 'Q7dU23', 'Sullivan', 'Park', '35', 'Symon Gapper', 1, 1),
(91, 'Premium', '2022-04-03', '2023-08-31', 'Hombre', '2000-11-27', 'B-', '888 660 24', 'pdewis2h@storify.com', 'ygwbfs10kMLC', 'Delaware', 'Junction', '1', 'Papagena Dewis', 1, 1),
(92, 'Sencilla', '2022-04-29', '2022-10-11', 'Mujer', '1999-10-20', 'A+', '884 353 59', 'uraynton2i@washington.edu', '65AEyA', 'Roxbury', 'Way', '244', 'Ulrike Raynton', 1, 1),
(93, 'Sencilla', '2021-12-11', '2022-03-17', 'Mujer', '2004-02-24', 'AB-', '744 366 10', 'ibowie2j@flavors.me', '8rpw4WD', 'Jana', 'Pass', '863', 'Ira Bowie', 1, 1),
(94, 'Sencilla', '2022-05-28', '2023-12-29', 'Otro', '1993-03-22', 'O+', '691 819 95', 'wmeharg2k@archive.org', '28smLQX', 'Merchant', 'Circle', '02', 'Wain Meharg', 1, 1),
(95, 'Sencilla', '2021-03-21', '2023-11-05', 'Otro', '1997-04-10', 'A+', '509 539 13', 'rchisolm2l@nifty.com', 'rPMUUBvS', 'Morningstar', 'Crossing', '2624', 'Ruthie Chisolm', 1, 1),
(96, 'Sencilla', '2021-06-23', '2023-06-18', 'Mujer', '1996-11-19', 'A-', '437 506 00', 'rales2m@about.me', 'qL314hR', 'Basil', 'Lane', '66', 'Richy Ales', 1, 1),
(97, 'Sencilla', '2021-04-08', '2021-10-11', 'Mujer', '1991-12-31', 'O-', '579 309 52', 'hmaccall2n@intel.com', '91I8CwrcE', 'Sherman', 'Lane', '27', 'Holli MacCall', 1, 1),
(98, 'Premium', '2021-10-26', '2023-03-16', 'Otro', '1993-05-31', 'O-', '987 491 07', 'cphillis2o@furl.net', '8YZMmZ2mY', 'Hudson', 'Crossing', '5', 'Cort Phillis', 1, 1),
(99, 'Premium', '2021-02-13', '2022-04-09', 'Mujer', '1999-08-31', 'O-', '753 303 64', 'lsadat2p@goodreads.com', 'JqQBww2Bwb', 'Florence', 'Drive', '7630', 'Laney Sadat', 1, 1),
(100, 'Premium', '2022-01-13', '2023-07-13', 'Otro', '1995-06-04', 'O+', '871 303 81', 'mstanlike2q@walmart.com', '8UlbnmFfS', 'Brickson Park', 'Parkway', '27561', 'Millie Stanlike', 1, 1),
(101, 'Sencilla', '2022-02-11', '2022-06-02', 'Hombre', '2003-03-30', 'AB+', '772 127 03', 'nferenc2r@webmd.com', 'lvKH3S', 'Declaration', 'Pass', '594', 'Nessy Ferenc', 1, 1),
(103, '', '2022-06-12', '0000-00-00', '', '0000-00-00', '', '', '', '$2y$10$fNM8B./Ruib9Tk21K4ryhekkJQ.reSQ9oQPREfAMMXbYlZBfpHp4G', '', '', '', '', 1, 1),
(104, 'Sencilla', '2022-06-12', '2022-06-18', '', '2000-12-13', 'O-', '6671256649', 'isaacA@gmail.com', '$2y$10$WLJBbmC8d5t088RqmpPiDulNaOXcgAwjoG56uGmR4Hkwy7UItH84u', 'a', 's', '16316', 'Isaac Alejandro', 1, 1),
(105, 'Premium', '2022-06-12', '2022-06-27', '', '2001-05-16', 'O+', '6121618580', 'niggel@gmail.com', '$2y$10$UaIihZAkA3V92acz7QATb.y9qPIvgxLJN/FlRXWQ6rZq.YUZ04itu', 'e', 'w', '16501', 'Niggel Altamirano', 1, 1),
(108, 'Premium', '2022-06-12', '2022-06-27', '', '2001-05-16', 'O+', '6121618580', 'niggel@gmail.com', '$2y$10$CPamNEUygYrv0ersfN4Am.yMw6OlB77k5y3muRj5LpqI5EVDZjGwy', 'e', 'w', '16501', 'Niggel Altamiranod', 1, 1),
(109, 'Premium', '2022-06-12', '2022-06-27', '', '2001-05-16', 'O+', '6121618580', 'niggel@gmail.com', '$2y$10$DTos8/Zy6L36m3BBRG242OUBMGBT3hxbO02VtFifjjt4mN6lCtkfW', 'e', 'w', '16501', 'Niggel Altamiranodd', 1, 1),
(110, 'Premium', '2022-06-12', '2022-06-30', '', '1999-08-05', 'AB+', '6684513505', 'pepe@gmail.com', '$2y$10$8yQ/sTaMt6CYNml4Djzo2.I4QU7uzIAZL5PY6bMrFtg7TXOCbZCDG', 'e', 'e', '12356', 'Pepe Lopez', 1, 1),
(111, 'Premium', '2022-06-12', '2022-06-30', 'Hombre', '2001-04-25', 'O+', '6121615680', 'julian@gmail.com', '$2y$10$qUsBGGLVhThvRYdhQFj0jOTaTC0LaMxTr3Oxid23QU9cFtyIuDF2q', 'r', 'r', '12356', 'Julian Mendez', 1, 1),
(112, 'Sencilla', '2022-06-12', '2022-06-16', 'Otro', '1999-06-15', 'A+', '6516516510', 'pedro@gmail.com', '$2y$10$b2WEiOKrdMCiRE2zcvI4peb/VwHhsADrFteCsT4oUzbs5vuRnLwzO', 'calle', 'colonia', '23115', 'Pedro Victoriano', 2, 1),
(113, 'Premium', '2022-06-12', '2022-07-30', 'Hombre', '2000-12-06', 'O+', '6121561850', 'angelSanches@gmail.com', '$2y$10$Xos3z7/.3GafFP9NWHawBOmLyKBq4r1lRAdmLtemN7U4XY.1Xo6Bi', 'Perla', 'Animal', '23070', 'Angel Sanchez', 2, 1),
(114, 'Sencilla', '2022-06-12', '2022-07-20', 'Hombre', '2000-07-05', 'O+', '6121615864', 'juancho@gmail.com', '$2y$10$axe8ocESDJ2JDkdOQVQpHOF/UmohaegHnMwASt0miwLq.U2yOKnVC', 'Quesadilla', 'Cocina', '23090', 'Juancho Felipez', 2, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD KEY `idCita` (`idCita`),
  ADD KEY `idAdministrador` (`idAdministrador`);

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`),
  ADD KEY `fk_idAdministrador` (`fk_idAdministrador`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD CONSTRAINT `asistencia_ibfk_1` FOREIGN KEY (`idCita`) REFERENCES `citas` (`id`),
  ADD CONSTRAINT `asistencia_ibfk_2` FOREIGN KEY (`idAdministrador`) REFERENCES `administrador` (`id`);

--
-- Filtros para la tabla `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `citas_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`fk_idAdministrador`) REFERENCES `administrador` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
