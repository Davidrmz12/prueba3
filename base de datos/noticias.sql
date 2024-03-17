-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-03-2024 a las 00:01:20
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `noticias`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `contenido` text NOT NULL,
  `fecha_publicacion` timestamp NOT NULL DEFAULT current_timestamp(),
  `imagen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `contenido`, `fecha_publicacion`, `imagen`) VALUES
(22, 'AsÃ­ fue el atentado de las disidencias de las Farc que provocÃ³ que el Gobierno suspendiera el cese al fuego', 'Una mayora indÃ­gena fue asesinada en medio de un ataque de integrantes de la disidencia Dagoberto Ramos de las Farc a los comuneros asentados en la zona rural de ToribÃ­o, al norte del departamento, en la tarde de este sÃ¡bado 16 de marzo.\r\n\r\nEste hecho, donde otros tres indÃ­genas resultaron heridos, sucediÃ³ en el sector de La Bodega cuando la guardia y la comunidad pretendÃ­an rescatar a un adolescente menor de edad luego de ser reclutado por esta organizaciÃ³n armada al margen de la ley.', '2024-03-17 22:26:11', 'imagenes/1-foto-20_44673241_20240317144600.png'),
(23, 'Margarita Rosa de Francisco se le bajÃ³ del bus de la Constituyente a Petro: â€œNo creo que sea viable en este momento y el presidente lo sabeâ€', 'La actriz Margarita Rosa de Francisco, enÃ©rgica defensora del presidente Gustavo Petro, esta vez se le bajÃ³ del bus, a propÃ³sito de la advertencia que lanzÃ³ el mandatario colombiano el pasado viernes desde Cali, de convocar una Asamblea Nacional Constituyente si no aprueban sus reformas.\r\n\r\nâ€œPermÃ­tanme dar mi arrogante opiniÃ³n: no creo que la propuesta de convocar a una Constituyente sea viable en este momento y el presidente lo sabe. No habrÃ­a quorum. El gran problema de la sociedad colombiana es que estamos en pleno cambio hacia una nueva mentalidadâ€, escribiÃ³ la actriz.', '2024-03-17 22:27:20', 'imagenes/EB7WINPHFNFYXMOCLT2KEAAE6A.avif'),
(24, 'Putin es reelegido para quinto mandato presidencial', 'Las autoridades rusas anunciaron este domingo (17.03.2024) los primeros resultados de la elecciÃ³n presidencial en Rusia. SegÃºn la informaciÃ³n entregada, Vladimir Putin obtuvo casi el 88% de los votos en unas elecciones muy cuestionadas en las que la oposiciÃ³n ha sido reprimida.\r\n\r\nSegÃºn la ComisiÃ³n Electoral Central de Rusia, Putin obtuvo mÃ¡s del 87% de los votos, con el 70% de las mesas escrutadas. El ente electoral informÃ³ tambiÃ©n que la participaciÃ³n ciudadana fue del 73,33%, y rozÃ³ el mÃ¡ximo histÃ³rico en unas elecciones presidenciales, que es de 74,66 por ciento (1991).\r\n\r\nPutin, de 71 aÃ±os, logrÃ³ su mayor victoria electoral desde que llegÃ³ al poder en el aÃ±o 2000, pese a la guerra en Ucrania y las sanciones econÃ³micas occidentales.\r\n\r\nSeguirÃ¡ siendo presidente de este paÃ­s durante otros seis aÃ±os, tras los que podrÃ¡ volver a presentarse a la reelecciÃ³n, ya que reformÃ³ en 2020 las clÃ¡usulas de la ConstituciÃ³n que le impedÃ­an seguir en el Kremlin.\r\n\r\nEl segundo candidato mÃ¡s votado fue el comunista NikolÃ¡i JaritÃ³nov con el 4 % de los votos, seguido por el representante del partido Gente Nueva, Vladislav Davankov, con 3,86 %. El Ãºltimo aspirante es el ultranacionalista Leonid Slutski, que suma el 3% de las papeletas.\r\n\r\nEn esta ocasiÃ³n, los electores rusos pudieron emitir su sufragio en tres modalidades: con la tradicional papeleta y electrÃ³nicamente, sea desde una terminal o a distancia por internet.\r\n\r\nUn total de 112 millones de electores estaban citados a la urnas para estos comicios presidenciales, los octavos en la historia de Rusia.\r\n\r\nmn (efe, afp)', '2024-03-17 22:35:38', 'imagenes/68598012_1004.webp');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
