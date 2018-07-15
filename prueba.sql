-- phpMyAdmin SQL Dump
-- version 4.6.5.2deb1+deb.cihar.com~trusty.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 15-07-2018 a las 18:19:23
-- Versión del servidor: 5.6.33-0ubuntu0.14.04.1
-- Versión de PHP: 7.0.14-2+deb.sury.org~trusty+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `nombre`) VALUES
(1, 'Soccer'),
(2, 'Cultura');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id_noti` int(11) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `cuerpo` text NOT NULL,
  `id_autor` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id_noti`, `titulo`, `cuerpo`, `id_autor`, `id_categoria`) VALUES
(1, 'Barranquilla Bella', 'Barranquilla, capital del departamento Atlántico de Colombia, es una bulliciosa ciudad portuaria flanqueada por el río Magdalena. La ciudad es conocida por su gran Carnaval, que incluye artistas disfrazados de forma extravagante, carrozas elaboradas y música cumbia. En el elegante barrio El Prado, el Museo Romántico exhibe objetos de festivales pasados y exposiciones de colombianos famosos como el escritor Gabriel García Márquez.', 1, 2),
(2, 'Francia golea a Croacia y se proclama campeona del mundo por segunda vez', 'PREVIA\r\nMÁS INFORMACIÓN\r\nFrancia golea a Croacia y se proclama campeona del mundo por segunda vez Por aclamación, Luka Modric\r\nFrancia golea a Croacia y se proclama campeona del mundo por segunda vez GRÁFICO Francia vuelve al trono 20 años después\r\nUna Francia letal en ataque dejó en la lona a una más que digna Croacia (4-2) y se proclamó campeona del mundo en Rusia 20 años después de conquistar su primer Mundial. El conjunto de Didier Deschamps, con una de las generaciones más talentosas de su historia, fue demasiado para una Croacia valiente, muy superior en gran parte del partido, pero que no supo cómo contener el enorme potencial ofensivo de les bleus. La victoria de Francia dos años después de caer en la final de la Eurocopa ante Portugal demuestra que la hornada de jugadores que dirige Deschamps estaba predestinada a plantarse de nuevo en una final y en esta ocasión ganarla sin discusión.', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user` varchar(250) NOT NULL,
  `password` text NOT NULL,
  `correo` varchar(250) NOT NULL,
  `estado` int(11) NOT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `user`, `password`, `correo`, `estado`, `tipo`) VALUES
(1, 'andres187', '779d74c7d210bbaf1244aba00973c49f', 'andresfebo187@gmail.com', 1, 1),
(2, 'andres2', '827ccb0eea8a706c4c34a16891f84e7b', 'prueba@hotmail.com', 1, 1),
(3, 'andres22', '827ccb0eea8a706c4c34a16891f84e7b', 'prueba@hotmail.com2', 1, 1),
(4, 'andres11', '827ccb0eea8a706c4c34a16891f84e7b', 'prueba2@hotmail.com', 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id_noti`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id_noti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
