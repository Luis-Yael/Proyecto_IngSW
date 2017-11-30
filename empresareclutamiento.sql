-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-11-2017 a las 12:48:28
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `empresareclutamiento`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aceptados`
--

CREATE TABLE `aceptados` (
  `id_aceptado` int(10) NOT NULL,
  `Empresa` varchar(30) NOT NULL,
  `id_candidato` varchar(30) NOT NULL,
  `telefono` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `aceptados`
--

INSERT INTO `aceptados` (`id_aceptado`, `Empresa`, `id_candidato`, `telefono`) VALUES
(10, 'Sabormex', '13', '2224567890'),
(11, 'Pcreative', '14', '273245521');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id_admin` int(11) NOT NULL,
  `nombre_admin` varchar(100) NOT NULL,
  `login_admin` varchar(100) DEFAULT NULL,
  `pwd_admin` varchar(100) DEFAULT NULL,
  `nivel_usuario` varchar(10) NOT NULL,
  `usuario_id_usuario` int(11) NOT NULL,
  `evaluador_id_evaluador` int(11) NOT NULL,
  `candidato_id_candidato` int(11) NOT NULL,
  `empresa_id_empresa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `candidato`
--

CREATE TABLE `candidato` (
  `id_candidato` int(11) NOT NULL,
  `nombre_cand` varchar(200) NOT NULL,
  `ap_paterno` varchar(80) NOT NULL,
  `ap_materno` varchar(80) NOT NULL,
  `email_cand` varchar(80) DEFAULT NULL,
  `tel_fijo` varchar(50) DEFAULT NULL,
  `tel_movil` varchar(50) DEFAULT NULL,
  `login_cand` varchar(100) DEFAULT NULL,
  `pwd_cand` varchar(100) DEFAULT NULL,
  `retribucion` varchar(50) DEFAULT NULL,
  `jornada` varchar(80) DEFAULT NULL,
  `grado_est` varchar(100) DEFAULT NULL,
  `nivel_estudio` varchar(10) NOT NULL,
  `habilidades` varchar(150) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `nivel_usuario` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `candidato`
--

INSERT INTO `candidato` (`id_candidato`, `nombre_cand`, `ap_paterno`, `ap_materno`, `email_cand`, `tel_fijo`, `tel_movil`, `login_cand`, `pwd_cand`, `retribucion`, `jornada`, `grado_est`, `nivel_estudio`, `habilidades`, `foto`, `nivel_usuario`) VALUES
(1, 'Henry', 'Rueda', 'Mendoza', 'cubano98@hotmail.com', '2224557812', '2412567', 'cubano12', '12345', '$2500', '9am-6pm', 'licenciatura', '2', 'Puntualidad, facilidad de palabra', 'cand7.jpg', '1'),
(2, 'Israel ', 'Escobar', 'Tello', 'chispa12@hotmail.com', '2224345678', '2342134', 'chispas12', '12345', '$3000', '12pm-8pm', 'maestria', '3', 'Programar, diseño de software y hardware', 'cand1.jpg', '1'),
(3, 'Yareli', 'Ramos', 'Franco', 'yarelosa69@hotmail.com', '2224445688', '2335566', 'yarelosa69', '123', '$5000', '11am-8pm', 'licenciatura', '2', 'Programacion de paginas web, aplicaciones moviles', 'cand8.jpg', '1'),
(4, 'Esau ', 'Gonzalez', 'Gonzalez', 'esau8@live.com.mx', '2227889191', '2178809', 'esau8', '123', '$1500', '1pm-9pm', 'bachiller', '1', 'Puntualidad, limpieza e el trabajo, respeto a los compañeros', 'cand9.jpg', '1'),
(5, 'Misael', 'Limon', 'Martinez', 'teporocho8@gmail.com', '2224567790', '2192575', 'misa88', '1234', '$2000', '12pm-9pm', 'licenciatura', '2', 'Desarrollo web, armado de circuitos electronicos', 'cand13.jpg', '1'),
(6, 'Luis', 'Moyotl', 'Pani', 'daritzo18@gmail.com', '2244642211', '1290017', 'wuicho8', '123', '$4000', '3pm-10pm', 'licenciatura', '2', 'Mecanica en general, electronico experimentado', 'cand12.jpg', '1'),
(7, 'Guadalupe', 'Morales', 'Teyssier', 'lupita48@hotmail.com', '2731112457', '2412555', 'lupis48', '123', '$6000', '12pm-7pm', 'licenciatura', '2', 'Facilidad de palabra con terceras personas', 'cand11.jpg', '1'),
(8, 'Denzel ', 'Hernandez', 'Chevalier', 'denzel@puebla.com', '2224556555', '2251233', 'denzel14', '12345', '$3000', '9am-4pm', 'bachiller', '1', 'Facil comunicacion, entendimiento', 'cand2.jpg', '1'),
(9, 'Vicente', 'Garcia', 'Serrano', 'chente@fernandez.com', '2228998121', '2988811', 'chente11', '12345', '$8000', '9am-9pm', 'maestria', '3', 'Habilidad para todo lo que se me ponga enfrente', 'cand10.jpg', '1'),
(10, 'David', 'Serapio', 'Reynoso', 'serafin@gmail.com', '2221223433', '2417712', 'serafin12', '123', '$1500', '12pm-4pm', 'licenciatura', '2', 'Jugar futbol, manejar auto, camion y bicicleta ', 'cand5.jpg', '1'),
(11, 'Diana', 'Cortes', 'Romero', 'dianita@pandita.com', '2226177789', '2331990', 'dianita99', '12345', '$2500', '9am-5pm', 'licenciatura', '2', 'Habilidad en el manejo de la computadora, paqueteria de office', 'cand4.jpg', '1'),
(12, 'Claudio', 'Ramirez', 'Sandoval', 'claudio89@hotmail.com', '2229001211', '2113223', 'clau12', '12345', '$4000', '8am-5pm', 'maestria', '3', 'Certificacion en programacion movil y web', 'cand3.jpg', '1'),
(13, 'Heber', 'Sanchez', 'Gonzalez', 'hebersg@hotmail.com', '123456987', '987546321', 'heber', '123', '$5000', '9am-3pm', 'licenciatura', '2', '', 'cand6.jpg', '1'),
(14, 'Pedro', 'Juarez', 'Garcia', 'pedro@hotmail.com', '5558889963', '2731158969', 'pedro12', '12345', '$7000', '8am-4pm', 'maestria', '3', '', 'cand14.jpg', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `candidato_has_empresa`
--

CREATE TABLE `candidato_has_empresa` (
  `candidato_id_candidato` int(11) NOT NULL,
  `empresa_id_empresa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id_empresa` int(11) NOT NULL,
  `nombre_emp` varchar(100) NOT NULL,
  `jefe_personal` varchar(100) NOT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `login_empresa` varchar(100) DEFAULT NULL,
  `pwd_empresa` varchar(100) DEFAULT NULL,
  `dir_postal` int(11) DEFAULT NULL,
  `email_emp` varchar(100) DEFAULT NULL,
  `puesto` varchar(80) DEFAULT NULL,
  `desc_puesto` varchar(150) DEFAULT NULL,
  `rango_salarial` varchar(80) DEFAULT NULL,
  `jornada_laboral` varchar(50) DEFAULT NULL,
  `req_puesto` varchar(100) DEFAULT NULL,
  `ofertas_trabajo` varchar(150) DEFAULT NULL,
  `nivel_usuario` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id_empresa`, `nombre_emp`, `jefe_personal`, `telefono`, `login_empresa`, `pwd_empresa`, `dir_postal`, `email_emp`, `puesto`, `desc_puesto`, `rango_salarial`, `jornada_laboral`, `req_puesto`, `ofertas_trabajo`, `nivel_usuario`) VALUES
(1, 'Sabormex', 'Fidel Martinez Guzman', '2224567890', 'fidel', '12345', 72490, 'sabormex@hotmail.com', '', 'Dar capacitaciones a los nuevos empleados', '1000-1500', '10am-6pm', 'Actitud emprendedora, buenos modales', '', '2'),
(2, 'Oxxo', 'José Luis Robles Mendoza', '2221257634', 'oxxo123', '123', 72489, 'tiendasoxxo@hotmail.com', 'Cajero', 'Ayuda en el are de cajas de cobro', '1000-1200', '8am-10pm', 'Amabilidad, disponibilidades de tiempo', '', '2'),
(3, 'Gamesa', 'Mariano Solano Ramirez', '2229226789', 'mariano12', '12345', 74312, 'marianito@gmail.com', 'Repartidor', 'Ayudar en la reparticion de mercancia en la ciudad', '1500-2000', '12pm-8pm', 'Saber manejar, licencia vigente, puntualidad', '', '2'),
(4, 'Pcreative', 'Antonio Alvarez Gomez', '273245521', 'jok022', '123', 17455, 'jok022@hotmail.com', '', 'Programación de diferentes aplicaciones web ', '700-1200', '9am-4pm', 'Programacion en html5, manejo de frameworks ', '', '2'),
(5, 'Matel', 'Eugenio Reynoso Marquez', '2225677712', 'euge123', '12345678', 78213, 'matel22@gmail.com', 'Gerente de almacen', 'Encargado de gestionar el almacen de juguetes', '2000-3500', '9am-6pm', 'Puntualidad, conocimientos en finanzas y contaduria', '', '2'),
(6, 'Programaton', 'Leon Larregui Gonzalez', '2212367890', 'zoe12', '12345', 75234, 'andromeda@live.com.mx', 'Diseñador', 'Diseño de la publicidad de la campaña Andromeda', '1500-2000', '8am-4pm', 'Conocimiento en photoshop y otros entornos de diseño grafico', '', '2'),
(7, 'Walmart', 'Eduardo Manriquez Sanchez', '2225771234', 'eduardo3431', '123', 77480, 'walmart@tiendas.com', 'Vigilante', 'Encargado de la seguridad de la tienda', '2500-4000', '9am-9pm', 'Precision, valentia, compromiso.', '', '2'),
(8, 'Sears', 'Guadalupe Miño Gutierrez', '2223889064', 'lupita23', '1234', 74120, 'searsmeentiende@hotmail.com', 'Vendedora', 'Persona asignada a un departamento de la tienda para laborar', '1500-2500', '11am-9pm', 'Limpieza, buena presentacion, excelente uso de palabra', '', '2'),
(9, 'Comex', 'Leonardo Romero Toxqui', '2255633456', 'leo123', '12345', 17248, 'comex@pinturas.com.mx', 'Pintor', 'Ayudante en el area de pinturas y esmaltes', '1000-1200', '9am-6pm', 'Puntualidad, saber desenvolverse en el ambito lboral', '', '2'),
(10, 'SearchMyMed', 'Erick Martinez Garcia', '2224556911', 'perico69', '123', 74289, 'smm@hotmail.com', 'Programador android', 'Persona que se desenvuelva en el ambiente de programacion en android studio', '2000-3500', '12pm-8pm', 'Programacion en java, android studio, disponibilidad de tiempo', '', '2'),
(11, 'Coco Pizza', 'Luigi Italiany Rabiotti', '277883425', 'pizza123', '12345', 76331, 'luigi42@live.com.edu', 'Repartidor', 'Ayudante de reparticion de pedidos ', '600-1000', '12pm-8pm', 'Saber manejar, licencia de conduccion de moto', '', '2'),
(12, 'Kelloggs', 'Ricardo Anaya Lopez', '2222981222', 'ricardo12', '1234', 78213, 'kelloggs@hotmail.com', 'Gerente de proceso', 'Encargado de que se lleve a cabo el correcto proceso de produccion', '2000-3000', '9am-6pm', 'Conocimientos en la industria', '', '2'),
(13, 'CBTIS', 'Hipolito Moreno Charpe', '2225667788', 'cbtis123', '123', 18990, 'cbtis260@gmail.com', 'Profesor EF', 'Profesor de educacion fisica', '3500-6000', '7am-2pm', 'Titulacion en licenciatura de cultura fisica', '', '2'),
(14, 'Adata', 'Kyoto Honda Mushi', '2221665678', 'honda17', '123', 71889, 'adata77@hotmail.com', 'Formateador', 'Persona capacitada en el manejo de unidades de disco duro ', '1000-1300', '12pm-8pm', 'Conocimientos de unidades de disco duro', '', '2'),
(15, 'Coca Cola', 'Armando Vargas Ortega', '2221338745', 'armando12', '123', 56177, 'cocacolacompany@hotmail.com', 'Jefe de produccion', 'Atencion al proceso correcto de produccion ', '3000-5000', '7am-4pm', 'Licenciatura en ingenieria quimica ', '', '2'),
(16, 'One Job', 'Alberto Rendon Soto', '2229226042', 'albertors', '12345', 72495, 'alberto_egs@live.com.mx', 'Administrador', 'Ayudar a administrar la empresa de reclutamiento de personal', '1500-2300', '9am-6pm', 'Manejo de computadora y paqueteria de office', '', '2'),
(17, 'Samsung', 'Lorena Lopez Limon', '2233452212', 'lore34', '123', 76211, 'samsung@marca.com.mx', 'Promotor', 'Persona encargada de promocionar la marca', '1200-1800', '9am-6pm', 'Buena actitud, puntualidad, facilidad de palabra', '', '2'),
(18, 'Torres JV', 'Luis Betancourt Lopez', '2243126788', 'torres1', '123', 65219, 'torresjv@hotmail.com', 'Abogado', 'Persona que se encargue de gestionar el buffet juridico de abogados', '8000-12000', '9am-9pm', 'Excelente presentacion, puntualidad, porte', '', '2'),
(19, 'Mister Tennis', 'Arturo Loaiza Vera', '2256771234', 'mister123', '12345', 76555, 'mistertennis@puebla.com', 'Vendedor', 'Encargado de realizar ventas dentro de la tienda', '1800-3000', '1pm-9pm', 'Puntualidad, facilidad de palabra', '', '2'),
(20, 'Suburbia', 'Edgar Hernandez Marquez', '2225869900', 'subur34', '123', 78900, 'suburbia@tiendas.com.mx', 'Sastre', 'Persona encargada del departamento de sastreria en probadores', '1200-3000', '11am-6pm', 'Habilidad en sastreria, puntualidad', '', '2'),
(21, 'Segor', 'Hugo Gonzalez Saavedra', '2731112255', 'hugo', '12345', 94140, 'segor@hotmail.com', 'Administrador de ventas', 'Administrar ventas y pedidos de la empresa', '3000-5000', '8am-4pm', 'Administrador, responsabilidad, puntualidad', '', '2'),
(22, 'Sabormex', 'Eduardo Alvarez Sanchez', '2224485896', 'sabormex', '123', 72589, 'sabormex@gmail.com', 'Programador web', 'Desarrollo de aplicaciones web', '5000-8000', '8am-4pm', 'Ingeniero en computacion, habilidades de programacion', '', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluador`
--

CREATE TABLE `evaluador` (
  `id_evaluador` int(11) NOT NULL,
  `nombre_eval` varchar(100) NOT NULL,
  `login_eval` varchar(100) DEFAULT NULL,
  `pwd_eval` varchar(100) DEFAULT NULL,
  `nivel_usuario` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `evaluador`
--

INSERT INTO `evaluador` (`id_evaluador`, `nombre_eval`, `login_eval`, `pwd_eval`, `nivel_usuario`) VALUES
(1, 'Antonio', 'antonio', '123', '3'),
(2, 'Luis', 'luis', '123', '3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudes_empleo`
--

CREATE TABLE `solicitudes_empleo` (
  `id_solicitud` int(10) NOT NULL,
  `id_candidato` varchar(30) NOT NULL,
  `empresa` varchar(30) NOT NULL,
  `nombre_cand` varchar(30) NOT NULL,
  `habilidades_candidato` varchar(30) NOT NULL,
  `cita_emp` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `solicitudes_empleo`
--

INSERT INTO `solicitudes_empleo` (`id_solicitud`, `id_candidato`, `empresa`, `nombre_cand`, `habilidades_candidato`, `cita_emp`) VALUES
(1, '13', 'Sabormex', 'Heber Sanchez Gonzalez', '', '2224567890'),
(2, '14', 'Pcreative', 'Pedro Juarez Garcia', '', '273245521');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usr` varchar(100) DEFAULT NULL,
  `login_usr` varchar(100) DEFAULT NULL,
  `pwd_usr` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre_usr`, `login_usr`, `pwd_usr`) VALUES
(1, 'Esau', 'esau', '123'),
(2, 'Leonardo', 'leonardo', '123'),
(3, 'Carlos', 'carlos', '123'),
(4, 'Jose', 'jose', '123'),
(5, 'Jesus', 'jesus', '123');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vdatos1`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vdatos1` (
`id_solicitud` int(10)
,`id_candidato` varchar(30)
,`id_empresa` int(11)
,`empresa` varchar(30)
,`nombre_cand` varchar(30)
,`habilidades_candidato` varchar(30)
,`cita_emp` varchar(10)
,`telefono` varchar(50)
,`puesto` varchar(80)
,`grado_est` varchar(100)
,`nivel_estudio` varchar(10)
);

-- --------------------------------------------------------

--
-- Estructura para la vista `vdatos1`
--
DROP TABLE IF EXISTS `vdatos1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vdatos1`  AS  select `se`.`id_solicitud` AS `id_solicitud`,`se`.`id_candidato` AS `id_candidato`,`e`.`id_empresa` AS `id_empresa`,`se`.`empresa` AS `empresa`,`se`.`nombre_cand` AS `nombre_cand`,`se`.`habilidades_candidato` AS `habilidades_candidato`,`se`.`cita_emp` AS `cita_emp`,`e`.`telefono` AS `telefono`,`e`.`puesto` AS `puesto`,`c`.`grado_est` AS `grado_est`,`c`.`nivel_estudio` AS `nivel_estudio` from ((`solicitudes_empleo` `se` join `empresa` `e` on((convert(`se`.`empresa` using utf8) = `e`.`nombre_emp`))) join `candidato` `c` on((`se`.`id_candidato` = `c`.`id_candidato`))) order by `c`.`nivel_estudio` desc ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aceptados`
--
ALTER TABLE `aceptados`
  ADD PRIMARY KEY (`id_aceptado`);

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_admin`,`usuario_id_usuario`,`evaluador_id_evaluador`,`candidato_id_candidato`,`empresa_id_empresa`),
  ADD KEY `fk_administrador_usuario1_idx` (`usuario_id_usuario`),
  ADD KEY `fk_administrador_evaluador1_idx` (`evaluador_id_evaluador`),
  ADD KEY `fk_administrador_candidato1_idx` (`candidato_id_candidato`),
  ADD KEY `fk_administrador_empresa1_idx` (`empresa_id_empresa`);

--
-- Indices de la tabla `candidato`
--
ALTER TABLE `candidato`
  ADD PRIMARY KEY (`id_candidato`);

--
-- Indices de la tabla `candidato_has_empresa`
--
ALTER TABLE `candidato_has_empresa`
  ADD PRIMARY KEY (`candidato_id_candidato`,`empresa_id_empresa`),
  ADD KEY `fk_candidato_has_empresa_empresa1_idx` (`empresa_id_empresa`),
  ADD KEY `fk_candidato_has_empresa_candidato1_idx` (`candidato_id_candidato`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Indices de la tabla `evaluador`
--
ALTER TABLE `evaluador`
  ADD PRIMARY KEY (`id_evaluador`);

--
-- Indices de la tabla `solicitudes_empleo`
--
ALTER TABLE `solicitudes_empleo`
  ADD PRIMARY KEY (`id_solicitud`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aceptados`
--
ALTER TABLE `aceptados`
  MODIFY `id_aceptado` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `candidato`
--
ALTER TABLE `candidato`
  MODIFY `id_candidato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id_empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT de la tabla `evaluador`
--
ALTER TABLE `evaluador`
  MODIFY `id_evaluador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `solicitudes_empleo`
--
ALTER TABLE `solicitudes_empleo`
  MODIFY `id_solicitud` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `fk_administrador_candidato1` FOREIGN KEY (`candidato_id_candidato`) REFERENCES `candidato` (`id_candidato`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_administrador_empresa1` FOREIGN KEY (`empresa_id_empresa`) REFERENCES `empresa` (`id_empresa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_administrador_evaluador1` FOREIGN KEY (`evaluador_id_evaluador`) REFERENCES `evaluador` (`id_evaluador`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_administrador_usuario1` FOREIGN KEY (`usuario_id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `candidato_has_empresa`
--
ALTER TABLE `candidato_has_empresa`
  ADD CONSTRAINT `fk_candidato_has_empresa_candidato1` FOREIGN KEY (`candidato_id_candidato`) REFERENCES `candidato` (`id_candidato`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_candidato_has_empresa_empresa1` FOREIGN KEY (`empresa_id_empresa`) REFERENCES `empresa` (`id_empresa`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
