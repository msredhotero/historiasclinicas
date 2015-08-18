-- phpMyAdmin SQL Dump
-- version 4.3.13
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 12-08-2015 a las 19:38:59
-- Versión del servidor: 5.5.32-cll-lve
-- Versión de PHP: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `datafutbol_sist`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sede`
--

CREATE TABLE IF NOT EXISTS `sede` (
  `id` int(11) NOT NULL,
  `id_organizador` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `direccion_gmap` varchar(300) NOT NULL,
  `latitud` varchar(20) DEFAULT NULL,
  `longitud` varchar(20) DEFAULT NULL,
  `orden` int(11) NOT NULL,
  `estado` enum('activa','desactiva') NOT NULL DEFAULT 'activa'
) ENGINE=MyISAM AUTO_INCREMENT=76 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sede`
--

INSERT INTO `sede` (`id`, `id_organizador`, `nombre`, `direccion`, `direccion_gmap`, `latitud`, `longitud`, `orden`, `estado`) VALUES
(1, 1, 'Area Chica', 'Cuyo 300, Martínez', 'Cuyo 300, Martínez, San Isidro, Buenos Aires', '-34.4861', '-58.507972', 2, 'activa'),
(2, 1, 'Thames Fútbol', 'Thames 400, San Isidro', 'Thames 400, San Isidro, Buenos Aires, Argentina', '-34.5016647', '-58.5461274', 4, 'activa'),
(3, 1, 'Roca Fútbol', 'Gral. Roca 100', 'Gral. Roca 100, Olivos, Buenos Aires', '-34.5343666', '-58.4976196', 1, 'activa'),
(4, 1, 'Casa Fútbol', 'Yapeyú 52', 'Yapeyú 52, Martínez, Argentina', '-34.4949962', '-58.498321', 3, 'activa'),
(5, 1, 'Il Doumo', 'Santa Fe 200, Martínez', 'Santa Fe 200, Martínez, Buenos Aires, Argentina', '-34.4759126', '-58.5111296', 0, 'activa'),
(6, 1, 'Nueva Sede', 'Av. del Libertador 300, Ciudad de Buenos Aires', 'Av. del Libertador 300, Ciudad de Buenos Aires, Argentina', '-34.5911021', '-58.37786', 0, 'activa'),
(7, 3, 'Los Álamos', 'Gonzalo Castañares 465', 'http://maps.google.com/?ie=UTF8&ll=-34.586582,-58.398165&spn=0.006174,0.013078&hnear=Buenos+Aires,+Ciudad+Aut%C3%B3noma+de+Buenos+Aires,+Argentina&t=w&z=17', NULL, NULL, 2, 'activa'),
(8, 3, 'La Canchita', 'Pedro Goyena 3434', 'http://maps.google.com/?ie=UTF8&ll=-34.581459,-58.37719&spn=0.006174,0.013078&hnear=Buenos+Aires,+Ciudad+Aut%C3%B3noma+de+Buenos+Aires,+Argentina&t=w&z=17', NULL, NULL, 1, 'activa'),
(9, 2, 'Area Chica', 'Cuyo 1925, Martínez', 'Cuyo 1925, Martínez, Buenos Aires.', '-34.4946403', '-58.5252378', 3, 'activa'),
(10, 5, 'Área Grande', 'Av San Martin 233', 'Av San Martin 233, Ciudad de Buenos Aires', '-34.6052544', '-58.3737101', 0, 'activa'),
(11, 2, 'Thames Futbol', 'Av. Diego Carman 681, San Isidro', 'Av. Diego Carman 681, San Isidro', '-34.4973956', '-58.5439266', 2, 'activa'),
(12, 2, 'Parque Norte', 'Av. Lugones y Guiraldes', 'Av. Lugones y Guiraldes', NULL, NULL, 1, 'activa'),
(13, 6, 'La Quinta del Futbol', 'J.F.Kennedy y Cesar bacle, los Nogales Malvinas Argentinas', 'John F. Kennedy 1220, Los Polvorines, Buenos Aires', NULL, NULL, 0, 'activa'),
(14, 12, 'Camp Nou', 'Avinguda Aristides Maillol, s/n, 08028, Barcelona', 'Avinguda Aristides Maillol, s/n, 08028, Barcelona', '41.379123', '2.1199778', 0, 'activa'),
(15, 12, 'Santiago Bernabéu', 'Avenida de Concha Espina, 1, Madrid', 'Avenida de Concha Espina, 1, Madrid', '40.452002', '-3.6887686', 0, 'activa'),
(16, 6, 'QdF', 'cesar bacle 1380', '-34.521693,-58.692448', NULL, NULL, 0, 'activa'),
(17, 2, 'Carmelita', 'avenida matus', 'dasdasdadsad', NULL, NULL, 0, 'activa'),
(18, 15, 'Predio Terra Nova', 'ruta 11(av.122) y 635', 'ruta 11 y 635', NULL, NULL, 0, 'activa'),
(19, 20, 'Palermo Futbol', 'El Salvador 5301, Ciudad de Buenos Aires', 'El Salvador 5301, Ciudad de Buenos Aires', '-34.5873909', '-58.4301224', 0, 'activa'),
(28, 14, 'Parque Norte', 'Belgrano - Int. Guiraldes s/n, Ciudad Autónoma de Buenos Aires', 'Parque Norte, Ciudad Autónoma de Buenos Aires, Argentina', '-34.5470244', '-58.4337441', 1, 'activa'),
(20, 28, 'Predio Norte', '41 e/ 7 y 8, La Plata', 'http://maps.google.com/?ll=-34.909056,-57.957805&spn=0.004707,0.006899&t=m&z=17', NULL, NULL, 1, 'activa'),
(21, 28, 'Garra Charrúa', '64 e/ 7 y 8, La Plata', 'http://maps.google.com/?ll=-34.9249,-57.93609&spn=0.004706,0.006899&t=m&z=17', NULL, NULL, 2, 'activa'),
(22, 30, 'Parador 7', 'Avenida Crovara 2145, La Tablada, Buenos Aires.', 'Esteban Crovara 2250-2299 Tablada, Buenos Aires, Argentina', '-34.686625', '-58.5206772', 0, 'activa'),
(23, 30, 'El Jabon Federal Futbol.', 'Bustamante Tablada, Buenos Aires, Argentina', '-34.675963,-58.503182', NULL, NULL, 0, 'activa'),
(24, 30, 'La Esquina Futbol 5', 'Araujo esquina Avenida Directorio, Mataderos, Ciudad Autónoma de Buenos Aires.', 'Araujo 1402-1500 Ciudad Autónoma de Buenos Aires, Argentina', NULL, NULL, 0, 'activa'),
(25, 16, 'Area Chica', 'Cuyo 1925, Martínez', 'Cuyo 1925, Martínez, Buenos Aires, Argentina', '-34.4946403', '-58.5252378', 0, 'activa'),
(26, 16, 'Parque Norte', 'Av. Lugones y Guiraldes', 'Parque Norte, Capital Federal, Argentina', '-34.5470244', '-58.4337441', 0, 'activa'),
(27, 16, 'Thames Futbol', 'Av. Diego Carman 681, San Isidro', 'Av. Diego Carman 681, San Isidro', NULL, NULL, 0, 'activa'),
(29, 14, 'Nuñez', 'Cantilo y General Paz', '-34° 32'' 14.41", -58° 27'' 29.94"', '-34.5391739', '-58.4556621', 2, 'activa'),
(30, 14, 'Area Grande', 'La Plata 302 - Quilmes', 'Avenida La Plata 302, Quilmes, Buenos Aires, Argentina', '-34.7255918', '-58.2855332', 0, 'activa'),
(31, 34, 'Cancha 1 - Complejo Deportivo Funes', 'Av. Fuerza Aérea 190 - 2132, Funes | http://copapymes.com/como-llegar.php', ' -32.931453, -60.818918', '-32.9314839', '-60.8201128', 0, 'activa'),
(32, 18, 'Loma Verde', 'Camino de las toscas y calle 115', '-34.322448,-58.841391', NULL, NULL, 0, 'activa'),
(33, 39, 'Campo de Fútbol Lomo Blanco', 'Las Palmas de Gran Canaria', 'https://www.google.es/maps/place/35423+Lomo+Blanco,+Las+Palmas/@28.0852607,-15.4452067,218m/data=!3m1!1e3!4m2!3m1!1s0xc4092c188c60469:0xf3046a37bec9b549!6m1!1e1', NULL, NULL, 0, 'activa'),
(34, 38, 'Tasagaya', 'Güímar', 'http://maps.google.es/maps?q=tasagaya&um=1&ie=UTF-8&hl=es&sa=N&tab=wl', NULL, NULL, 0, 'activa'),
(41, 41, 'Al Cubo Godoy Cruz', 'Independencia y Cubillos, Godoy Cruz, Mendoza', 'https://maps.google.com/?ll=-32.937442,-68.827039&spn=0.004412,0.005681&hnear=Mendoza,+Argentina&t=h&z=18', '-32.9318184', '-68.8238023', 0, 'activa'),
(40, 7, 'GEBA SEDE  SAN MARTIN ', 'Av. Figueroa Alcorta 5575. Capital Federal', 'Av. Figueroa Alcorta 5575. Ciudad Autonoma de Buenos Aires, Argentina', '-34.5604114', '-58.4259227', 0, 'activa'),
(42, 42, '"Complejo Arena" Monte Grande', 'Alsina y Alem doble', 'Alsina y Alem doble', NULL, NULL, 0, 'activa'),
(43, 34, 'Cancha 2 - Complejo Deportivo Funes', 'Av. Fuerza Aérea 190 - 2132, Funes | http://copapymes.com/como-llegar.php', '-32.931453, -60.818918', NULL, NULL, 0, 'activa'),
(44, 34, 'Cancha 3 - Complejo Deportivo Funes', 'Av. Fuerza Aérea 190 - 2132, Funes | http://copapymes.com/como-llegar.php', '-32.931453, -60.818918', NULL, NULL, 0, 'activa'),
(45, 34, 'Cancha 4 - Complejo Deportivo Funes', 'Av. Fuerza Aérea 190 - 2132, Funes | http://copapymes.com/como-llegar.php', '-32.931453, -60.818918', NULL, NULL, 0, 'activa'),
(46, 34, 'Cancha 5 - Complejo Deportivo Funes', 'Av. Fuerza Aérea 190 - 2132, Funes | http://copapymes.com/como-llegar.php', '-32.931453, -60.818918', NULL, NULL, 0, 'activa'),
(47, 34, 'Cancha 6 - Complejo Deportivo Funes', 'Av. Fuerza Aérea 190 - 2132, Funes | http://copapymes.com/como-llegar.php', '-32.931453, -60.818918', NULL, NULL, 0, 'activa'),
(48, 43, 'TIFOSI', 'Blvd Diaz Ordaz ', 'https://maps.google.com/maps?q=Tifosi+Futbol+San+Pedro,+San+Pedro+Garza+Garc%C3%ADa,+Mexico&hl=es&ie=UTF8&ll=25.652823,-100.419416&spn=0.048821,0.070982&sll=37.0625,-95.677068&sspn=43.713406,72.685547&oq=tifosi&hq=Tifosi+Futbol&hnear=San+Pedro,+San+Pedro+Garza+Garc%C3%ADa,+Nuevo+Le%C3%B3n,+M%C3%A9xi', NULL, NULL, 0, 'activa'),
(49, 43, 'Nueva Liga IENU', 'Cumbres Elite', 'Cumbres Elite', NULL, NULL, 0, 'activa'),
(50, 44, 'Club Unidad de Matanza', 'Pizarro 1368 Esquina Av de Mayo, Ramos Mejía', 'Cnel. Bartolomé Pizarro 1368 Ramos Mejía, Buenos Aires, Argentina', NULL, NULL, 0, 'activa'),
(51, 2, 'Canchas Calcio', 'Constituyentes 1100', 'Constituyentes 1100, Lomas Altas, Miguel Hidalgo, Ciudad de México, México', NULL, NULL, 0, 'activa'),
(52, 16, 'Banade Fútbol', 'H. Irigoyen 1290, Martinez', 'https://maps.google.com.ar/maps?ie=UTF8&cid=11011240888017788623&q=Club+Banade&iwloc=A&gl=AR&hl=es ', NULL, NULL, 0, 'activa'),
(53, 45, 'CIRCULO MILITAR DE OLIVOS', 'VILLATE 456', 'Villate 456 olivos', NULL, NULL, 0, 'activa'),
(54, 45, 'C.A. TELEFONOS', 'Madero 1699', 'Madero 1699', NULL, NULL, 0, 'activa'),
(55, 47, 'Club Social, Cultural, Deportivo y Recreativo Hércules', 'Las Heras 140', 'Las Heras 140, Charata, Chaco', '-27.215425', '-61.1950407', 0, 'activa'),
(56, 48, 'Heroes Futbol 5', 'Av. Francia esq. Brown', 'http://maps.google.com/maps?saddr=Rosario,+Santa+Fe,+Argentina&daddr=Av.francia+esquina+brown&hl=es-419&ll=-32.625497,-59.837036&spn=2.336303,3.521118&sll=-32.932889,-60.663022&sspn=0.002274,0.003439&geocode=FSs2Cf4dfE1i_Clb19c1k1O2lTFXpVgC6YZA7A%3BFVqq6v0d1bu5_CFI5lvXtJWOuCm7OEUmFQV1lTFI5lvXtJWOuA&', NULL, NULL, 0, 'activa'),
(57, 34, 'Cancha 7 - Complejo Deportivo Funes', 'Av. Fuerza Aérea 1901 - 2132, Funes | http://copapymes.com/como-llegar.php', '-32.931453, -60.818918', NULL, NULL, 0, 'activa'),
(58, 34, 'Cancha 8 - Complejo Deportivo Funes', 'Av. Fuerza Aérea 1901 - 2132, Funes | http://copapymes.com/como-llegar.php', '-32.931453, -60.818918', NULL, NULL, 0, 'activa'),
(59, 34, 'Cancha 9 - Complejo Deportivo Funes', 'Av. Fuerza Aérea 1901 - 2132, Funes | http://copapymes.com/como-llegar.php', '-32.931453, -60.818918', NULL, NULL, 0, 'activa'),
(60, 49, 'Mario Bravo ', 'Mario Bravo 1232 ', 'Mario Bravo 1232 ', '-34.5952824', '-58.4149184', 3, 'activa'),
(61, 49, 'Cabrera Futbol', 'José Antonio Cabrera 3550 ', 'José Antonio Cabrera 3550 ', NULL, NULL, 1, 'activa'),
(63, 34, 'Cancha 10 - Complejo Deportivo Funes', 'Av. Fuerza Aérea 1901 - 2132, Funes | http://copapymes.com/como-llegar.php', '-32.931453, -60.818918', NULL, NULL, 0, 'activa'),
(62, 49, 'Mario Bravo (cancha 2)', 'Mario Bravo 1232 ', 'Mario Bravo 1232 ', NULL, NULL, 2, 'activa'),
(64, 49, 'El Salvador', 'El Salvador 5301', 'El Salvador 5301', NULL, NULL, 0, 'activa'),
(65, 20, 'Obras Públicas de Vicente López', 'Juan Díaz de Solís 1851, Vicente López', 'Juan Díaz de Solís 1851, Vicente López', '-34.5150719', '-58.4739584', 0, 'activa'),
(66, 16, 'Muni Fútbol', 'Miguel Sanchez 1100', '---', NULL, NULL, 0, 'activa'),
(67, 51, 'Monumental Mario Raúl Bonel', '3 de Febrero 250', '<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.ar/maps?f=q&amp;source=s_q&amp;hl=es-419&amp;geocode=&amp;q=3+de+Febrero+250,+San+Isidro,+Buenos+Aires&amp;aq=0&amp;oq=3+de+febrero+250&amp;sll=-38.452918,-63.598921&amp;sspn', NULL, NULL, 0, 'activa'),
(68, 51, 'Uruguay Sports Center', 'Uruguay 3250 y Av. Sucre', '<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.ar/maps?f=q&amp;source=s_q&amp;hl=es-419&amp;geocode=&amp;q=Uruguay+3250,+Victoria,+Buenos+Aires&amp;aq=0&amp;oq=uruguay+3250&amp;sll=-34.471653,-58.518269&amp;sspn=0.005006,', NULL, NULL, 0, 'activa'),
(69, 16, 'El Molino Fútbol', 'Godoy Cruz 1671, Benavidez', '-', NULL, NULL, 0, 'activa'),
(70, 16, 'Grun Fútbol', 'Av Miguel Sanchez 999', 'https://goo.gl/maps/22eT7', NULL, NULL, 0, 'activa'),
(71, 16, 'Barra Norte', 'Boulogne Sur Mer y Colectora, Don Torcuato', '---', NULL, NULL, 0, 'activa'),
(72, 53, 'UGAB', 'Armenia 1318/1352 2º piso', 'Armenia 1322, Ciudad de Buenos Aires, Argentina', '-34.5920031', '-58.4312136', 0, 'activa'),
(73, 20, 'Grun Futbol de Nuñez', 'Miguel Sanchez 999 (ex Crisólogo Larralde) altura Av. Libertador 7400', '<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=d&amp;source=s_d&amp;saddr=Avenida+Cris%C3%B3logo+Larralde+1051,+Buenos+Aires,+Argentina&amp;daddr=Avenida+Cris%C3%B3logo+Larralde+1001,+Buenos+Aires,+Argentina&amp;hl', NULL, NULL, 0, 'activa'),
(74, 48, 'Pichincha Multiespacio Deportivo', 'Brown 3135', 'https://www.google.com.ar/maps/place/Brown+3135,+Rosario,+Santa+Fe/@-32.932236,-60.6636823,164m/data=!3m1!1e3!4m2!3m1!1s0x95b7ab527b418bcf:0xe0dcaf84885190f5', NULL, NULL, 0, 'activa'),
(75, 48, 'A Confirmar', 'A Confirmar', '-', NULL, NULL, 0, 'activa');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `sede`
--
ALTER TABLE `sede`
  ADD PRIMARY KEY (`id`), ADD KEY `id_organizador` (`id_organizador`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `sede`
--
ALTER TABLE `sede`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=76;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
