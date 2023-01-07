-- phpMyAdmin SQL Dump
-- version 2.6.1-pl2
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generaci�n: 17-08-2005 a las 08:30:03
-- Versi�n del servidor: 4.0.22
-- Versi�n de PHP: 4.3.11
-- 
-- Base de datos: `mimedico_mimedicodb`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `clinicas`
-- 

CREATE TABLE `clinicas` (
  `id` int(11) NOT NULL auto_increment,
  `nombre` text NOT NULL,
  `logo` text,
  `foto1` text,
  `foto2` text,
  `foto3` text,
  `foto4` text,
  `descripcion` text NOT NULL,
  KEY `id` (`id`)
) TYPE=MyISAM AUTO_INCREMENT=68 ;

-- 
-- Volcar la base de datos para la tabla `clinicas`
-- 

INSERT INTO `clinicas` VALUES (42, 'Centro Medico la Familia', '0cmf1.jpg', '0cmf2.jpg', '0cmf3.jpg', '0cmf4.jpg', '0cmf5.jpg', '<p>Direccion: Urbanizacion la Rotaria 1era. Etapa Avenida 85 No. 80-44. Maracaibo - Estado Zulia.</p>\r\n<p>Telefonos: (0261) 7534770 - 7539223.</p>\r\n<p>RIF: J-07042369-2</p>');
INSERT INTO `clinicas` VALUES (43, 'Centro Clinico Jesus de Nazareno', '', '', '', '', '', '<p>Direcci&oacute;n: Circunvalaci&oacute;n No. 2 Sector el Pescadito. Maracaibo - Estado Zulia.</p>\r\n<p>Telefonos: (0261) 7869960 - 7878024.</p>\r\n<p>RIF: J-30933168-0</p>');
INSERT INTO `clinicas` VALUES (44, 'Servicios Medicos Universal', '', '', '', '', '', '<p>Direcci&oacute;n: Circunvalacion No. 3 Avenida 67 Diagonal a Centro 99 Barrio Rey de Reyes.&nbsp;Maracaibo - Estado Zulia.</p>\r\n<p>Telefonos: (0261) 7873878 - 7873998 - 7872827.</p>\r\n<p>RIF: J-30825423-1</p>');
INSERT INTO `clinicas` VALUES (45, 'Clinica Materno Infantil San Juan', 'csj1.jpg', 'csj2.jpg', '', '', '', '<p>Direcci&oacute;n: Calle 98 con Av. 57A No. 98-48 Circunvalacion No. 2 al Lado del Centro Comercial los Arcos. Maracaibo - Estado Zulia.</p>\r\n<p>Telefonos: (0261)&nbsp;7873935 -&nbsp;7870304. </p>\r\n<p>RIF: J-30457936-5</p>');
INSERT INTO `clinicas` VALUES (46, 'Centro Clinico la Sagrada Familia', 'clsf1.jpg', 'clsf2.jpg', 'clsf31.jpg', 'clsf41.jpg', 'clsf51.jpg', '<p>Direcci&oacute;n: Av. 83 con Prolongacion Amparo Via las Lomas. Maracaibo - Estado Zulia.</p>\r\n<p>Telefonos: (0261) 7900600 - 7900800&nbsp;- 7548442 - 7555786.</p>\r\n<p>Correo Electonico: <a href="mailto:atencion@lasagrada.com.ve">atencion@lasagrada.com.ve</a></p>\r\n<p>Pagina Web: <a href="http://www.lasagrada.com.ve">www.lasagrada.com.ve</a></p>\r\n<p>RIF: J-30541557-9</p>');
INSERT INTO `clinicas` VALUES (47, 'Centro Clinico Materno Pediatrico Zulia', 'cpz1.jpg', 'cpz2.jpg', 'cpz3.jpg', 'cpz4.jpg', 'cpz5.jpg', '<p>Direcci&oacute;n: Av. 100 (Sabaneta) No. 19F-200 Maracaibo - Estado Zulia.</p>\r\n<p>Telefono: &nbsp;(0261) 7291623.</p>\r\n<p>RIF: J-07010035-4</p>');
INSERT INTO `clinicas` VALUES (48, 'Centro Medico Chiquinquira', 'cmc1.jpg', 'cmc2.jpg', 'cmc3.jpg', 'cmc4.jpg', 'cmc5.jpg', '<h1 align="center">Laboratorio y Ecografia</h1>\r\n<p>Direcci&oacute;n: Av. La Limpia Frente al Politecnico Santiago Mari&ntilde;o Centro Comercial Kotech Local No. 7 Maracaibo - Estado Zulia.</p>\r\n<p>Telefono: (0261) 7188087.</p>\r\n<p>RIF: J-31335833-9</p>');
INSERT INTO `clinicas` VALUES (49, 'Clinica Sierra Maestra', '', 'csm2.jpg', 'csm3.jpg', 'csm4.jpg', 'csm5.jpg', '<p>Direcci&oacute;n: Av. Union con Av. 8 Urbanizacion la Alhambra Sierra Maestra. Maracaibo - Estado Zulia.</p>\r\n<p>Telefonos: (0261) 7345002 -&nbsp;7345009.</p>');
INSERT INTO `clinicas` VALUES (50, 'Centro de Especialidades Medico Odontologicas Punto Salud', '', 'ps2.jpg', 'ps3.jpg', 'ps4.jpg', 'ps5.jpg', '<p>Direcci&oacute;n: Av. La Limpia No. 77-65 al Lado de la Casa Electrica. Maracaibo - Estado Zulia.</p>\r\n<p>Telefono: (0261) 7781990.</p>\r\n<p>Correo Electronico: <a href="mailto:maria_borghol@yahoo.com">maria_borghol@yahoo.com</a></p>');
INSERT INTO `clinicas` VALUES (56, 'Centro Materno Infantil Santa Margarita', 'cmsm1.jpg', 'cmsm2.jpg', 'cmsm3.jpg', 'cmsm4.jpg', 'cmsm5.jpg', '<p>Direcci&oacute;n: Av. 15 las Delicia No. 89B-67. Maracaibo - Estado Zulia.</p>\r\n<p>Telefono: (0261) 7501911.</p>\r\n<p>Correo Electronico: <a href="mailto:cmisantamargarita@cantv.net">cmisantamargarita@cantv.net</a></p>\r\n<p>RIF: J- 07009421-4.</p>');
INSERT INTO `clinicas` VALUES (52, 'Clinica Sucre', 'cs1.jpg', 'cs2.jpg', 'cs3.jpg', 'cs4.jpg', 'cs5.jpg', '<p>Direcci&oacute;n: Av. 26 No. 61-31 Urbanizacion Sucre. Maracaibo - Estado Zulia.</p>\r\n<p>Telefonos: (0261) 7500121 al 127.</p>\r\n<p>Fax: (0261) 7500258.</p>\r\n<p>Correo Electronico: <a href="mailto:qvillalovosm@clinicasucre.com">qvillalovosm@clinicasucre.com</a></p>\r\n<p>Pagina Web: <a href="http://www.clinicasucre.com">www.clinicasucre.com</a></p>\r\n<p>RIF: J-07013308-2</p>');
INSERT INTO `clinicas` VALUES (53, 'Centro Medico Dental la Floresta', '', 'cmlf2.jpg', 'cmlf3.jpg', 'cmlf4.jpg', 'cmlf5.jpg', '<p>Direcci&oacute;n: Urbanizacion la Floresta calle 79 E 1era. Etapa Centro Comercial la Floresta Local No. 3. Maracaibo - Estado Zulia.</p>\r\n<p>Telefono: (0261) 7547159.</p>\r\n<p>RIF: J-03276468-8.</p>');
INSERT INTO `clinicas` VALUES (54, 'Clinica y Hospitalizacion Falcon', 'chf1.gif', 'chf2.jpg', 'chf3.jpg', 'chf4.jpg', 'chf5.jpg', '<p>Direcci&oacute;n: Calle 85 (Falcon) Esquina Avenida 8 (Santa Rita). Maracaibo - Estado Zulia.</p>\r\n<p>Telefono: (0261) 7960000.</p>\r\n<p>Correo Electronico: <a href="mailto:hosp_falcon@cantv.net">hosp_falcon@cantv.net</a></p>\r\n<p>Pagina Web: <a href="http://www.clinicafalcon.com">www.clinicafalcon.com</a></p>\r\n<p>RIF: J-07006860-4</p>\r\n<p>&nbsp;</p>');
INSERT INTO `clinicas` VALUES (55, 'Hospital Clinico', '0hc1.png', 'hc2.jpg', 'hc3.jpg', 'hc4.jpg', 'hc5.jpg', '<p>Direcci&oacute;n: Av. 15 con Calle 59 Frente a la Urbanizacion la Trinidad Prolongacion las Delicias. Maracaibo - Estado Zulia.</p>\r\n<p>Telefono: (0261) 7401600.</p>\r\n<p>Pagina Web: <a href="http://www.hospitalclinico.com">www.hospitalclinico.com</a></p>\r\n<p>RIF: J-30935811-1.</p>');
INSERT INTO `clinicas` VALUES (57, 'Instituto Zuliano de Ortopedia y Traumatologia (IZOT)', 'izot1.jpg', 'izto2.jpg', 'izto3.jpg', 'izto4.jpg', 'izto5.jpg', '<p>Direccion: Av. 15 las Delicia Esquina Calle 69 No. 68-94. Maracaibo - Estado Zulia.</p>\r\n<p>Telefono: (0261) 7590077.</p>\r\n<p>Correo Electronico: <a href="mailto:sermeca_izot@cantv.net">sermeca_izot@cantv.net</a></p>\r\n<p>RIF: J-07020491-5.</p>');
INSERT INTO `clinicas` VALUES (58, 'Servicios Medicos y de Laboratorio Dr. Hugo Sanchez Barboza', 'hsb1.jpg', 'hsb2.jpg', 'hsb3.jpg', 'hsb4.jpg', 'hsb5.jpg', '<p>Direcci&oacute;n: Avenida Principal de los Postes Negro No. 95-44 barrio San Jose con Calle Falcon. Maracaibo - estado Zulia.</p>\r\n<p>Telefono: (0261) 7832442.</p>\r\n<p>RIF: V-0182940-6.</p>');
INSERT INTO `clinicas` VALUES (59, 'Clinica Metropolitana de Maracaibo', '', '', '', '', '', '<p>Direccion: Av. 100 (Sabaneta) Entrada Urbanizacion el Varillal Frente al Centro Comercial el Varillal. Maracaibo - Estado Zulia.</p>\r\n<p>Telefonos: (0261) 7861572 - 7862016 - 7865357.</p>\r\n<p>RIF: J-30755069-4.</p>');
INSERT INTO `clinicas` VALUES (60, 'Policlinica Maracaibo', '', '', '', '', '', '<p>Direcci&oacute;n: Avenida 8 (Santa Rita) con Calle 71. Maracaibo - Estado Zulia.</p>\r\n<p>Telefonos: (0261) 7005100 - 7005133.</p>\r\n<p>RIF: J-07001535-7.</p>');
INSERT INTO `clinicas` VALUES (61, 'Policlinica Ciudad de Dios', 'pcd1.jpg', 'pcd2.jpg', 'pcd3.jpg', 'pcd4.jpg', 'pcd5.jpg', '<p>Direcci&oacute;n: Barrio Jose Gregorio Hernanadez Circunvalacion No. 2 Avenida Francisco de Miranda al lado de la Iglesia San Tarcisio. Maracaibo - Estado Zulia.</p>\r\n<p>Telefonos: (0261) 7869181 - 7880654.</p>\r\n<p>RIF: J-31371808-4</p>');
INSERT INTO `clinicas` VALUES (62, 'Centro Medico Medisur', '1cm1.jpg', '1cm2.jpg', '1cm3.jpg', '1cm4.jpg', '1cm5.jpg', '<p>Direccion: Sierra Maestra calle 18 entre Avenida 7 y 8. Maracaibo- Estado Zulia.</p>\r\n<p>Telefonos: (0261) 7380146- 7367018.</p>\r\n<p>RIF: J-30857081-8.</p>');
INSERT INTO `clinicas` VALUES (63, 'Consultorio San Ramon', '', 'csr1.jpg', 'csr2.jpg', 'csr3.jpg', 'csr4.jpg', '<p>Direcci&oacute;n: Avenida 41 con Calle 59 No. 28A-116. Maracaibo - Estado Zulia.</p>\r\n<p>Telefono: (0261) 7562908.</p>');
INSERT INTO `clinicas` VALUES (64, 'Centro Clinico Los Olivos', 'llo1.jpg', 'flo2.jpg', 'lo1.jpg', 'lo2.jpg', 'lo3.jpg', '<p>Direccion: Avenida La Limpia frente al Centro Comercial Galerias Mall. Maracaibo - Estado Zulia.</p>\r\n<p>Telefonos: (0261) 7009600- 7531504.</p>\r\n<p>RIF: J-07031840-6</p>\r\n<p>Pagina Web:&nbsp; <a href="http://www.centroclinicolosolivos.com.ve">www.centroclinicolosolivos.com.ve</a> </p>');
INSERT INTO `clinicas` VALUES (65, 'Policlinica Amado', 'pca11.jpg', 'pca2.jpg', 'pca3.jpg', 'pca4.jpg', 'pca5.jpg', '<p>Direcci&oacute;n: Calle 76 con Esquina 3Y No. 3Y- 18. Maracaibo - Estado Zulia.</p>\r\n<p>Telefono: (0261) 7905900.</p>\r\n<p>Correo Electronico: <a href="mailto:policlinicaamado_amado@cantv.net">policlinicaamado_amado@cantv.net</a></p>\r\n<p>RIF: J-07025324-0.</p>');
INSERT INTO `clinicas` VALUES (66, 'Torre Promotora Paraiso', '', '', '', '', '', '<p>Direcci&oacute;n: Calle 61 (Avenida Universidad) Entre Avenidas 10 y 11. Maracaibo - Estado Zulia.</p>\r\n<p>Telefono: (0261) 7401411.</p>');
INSERT INTO `clinicas` VALUES (67, 'Centro Medico Paraiso', 'cmp11.jpg', 'cmp12.jpg', 'cmp13.jpg', 'cmp14.jpg', 'cmp15.jpg', '<p>Direcci&oacute;n: Calle 61 (Avenida Universidad) Entre Avenidas 10 y 11. Maracaibo - Estado Zulia.</p>\r\n<p>Telefono: (0261) 7401411.</p>\r\n<p>Pagina Web: <a href="http://www.centromedicoparaiso.com.ve">www.centromedicoparaiso.com.ve</a> </p>\r\n<p>RIF: J-07000336-7.</p>');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `especialidad`
-- 

CREATE TABLE `especialidad` (
  `id` int(11) NOT NULL auto_increment,
  `id_clinica` int(11) NOT NULL default '0',
  `nombre` text NOT NULL,
  `descripcion` text,
  KEY `id` (`id`)
) TYPE=MyISAM AUTO_INCREMENT=24 ;

-- 
-- Volcar la base de datos para la tabla `especialidad`
-- 

INSERT INTO `especialidad` VALUES (2, 0, 'prueba', 'prueba');
INSERT INTO `especialidad` VALUES (3, 37, 'prueba2', NULL);
INSERT INTO `especialidad` VALUES (2, 37, 'prueba', NULL);
INSERT INTO `especialidad` VALUES (2, 40, 'prueba', NULL);
INSERT INTO `especialidad` VALUES (4, 52, 'Pediatria', NULL);
INSERT INTO `especialidad` VALUES (5, 47, 'Gineco-Obstetra', NULL);
INSERT INTO `especialidad` VALUES (6, 47, 'Sexologia', NULL);
INSERT INTO `especialidad` VALUES (4, 47, 'Pediatria', NULL);
INSERT INTO `especialidad` VALUES (7, 47, 'Cardiologia', NULL);
INSERT INTO `especialidad` VALUES (8, 47, 'Internista', NULL);
INSERT INTO `especialidad` VALUES (9, 47, 'Gastroenterologia', NULL);
INSERT INTO `especialidad` VALUES (10, 54, 'Dermatologia', NULL);
INSERT INTO `especialidad` VALUES (5, 46, 'Gineco-Obstetra', NULL);
INSERT INTO `especialidad` VALUES (11, 50, 'Odontologia', NULL);
INSERT INTO `especialidad` VALUES (7, 54, 'Cardiologia', NULL);
INSERT INTO `especialidad` VALUES (8, 54, 'Internista', NULL);
INSERT INTO `especialidad` VALUES (9, 54, 'Gastroenterologia', NULL);
INSERT INTO `especialidad` VALUES (4, 50, 'Pediatria', NULL);
INSERT INTO `especialidad` VALUES (5, 54, 'Gineco-Obstetra', NULL);
INSERT INTO `especialidad` VALUES (12, 46, 'Cirugia General', NULL);
INSERT INTO `especialidad` VALUES (13, 46, 'Urologia', NULL);
INSERT INTO `especialidad` VALUES (7, 46, 'Cardiologia', NULL);
INSERT INTO `especialidad` VALUES (8, 46, 'Internista', NULL);
INSERT INTO `especialidad` VALUES (14, 46, 'Traumatologia y Ortopedia', NULL);
INSERT INTO `especialidad` VALUES (11, 53, 'Odontologia', NULL);
INSERT INTO `especialidad` VALUES (15, 53, 'Bionalista', NULL);
INSERT INTO `especialidad` VALUES (4, 42, 'Pediatria', NULL);
INSERT INTO `especialidad` VALUES (8, 59, 'Internista', NULL);
INSERT INTO `especialidad` VALUES (8, 42, 'Internista', NULL);
INSERT INTO `especialidad` VALUES (8, 48, 'Internista', NULL);
INSERT INTO `especialidad` VALUES (16, 46, 'Cirugia de la Mano', NULL);
INSERT INTO `especialidad` VALUES (17, 43, 'Medico Cirujano', NULL);
INSERT INTO `especialidad` VALUES (17, 54, 'Medico Cirujano', NULL);
INSERT INTO `especialidad` VALUES (8, 52, 'Internista', NULL);
INSERT INTO `especialidad` VALUES (7, 52, 'Cardiologia', NULL);
INSERT INTO `especialidad` VALUES (14, 57, 'Traumatologia y Ortopedia', NULL);
INSERT INTO `especialidad` VALUES (5, 45, 'Gineco-Obstetra', NULL);
INSERT INTO `especialidad` VALUES (5, 48, 'Gineco-Obstetra', NULL);
INSERT INTO `especialidad` VALUES (5, 42, 'Gineco-Obstetra', NULL);
INSERT INTO `especialidad` VALUES (5, 55, 'Gineco-Obstetra', NULL);
INSERT INTO `especialidad` VALUES (15, 58, 'Bionalista', NULL);
INSERT INTO `especialidad` VALUES (18, 42, 'Patologo', NULL);
INSERT INTO `especialidad` VALUES (5, 56, 'Gineco-Obstetra', NULL);
INSERT INTO `especialidad` VALUES (19, 55, 'Oftalmologia', NULL);
INSERT INTO `especialidad` VALUES (11, 44, 'Odontologia', NULL);
INSERT INTO `especialidad` VALUES (5, 43, 'Gineco-Obstetra', NULL);
INSERT INTO `especialidad` VALUES (5, 49, 'Gineco-Obstetra', NULL);
INSERT INTO `especialidad` VALUES (6, 49, 'Sexologia', NULL);
INSERT INTO `especialidad` VALUES (7, 55, 'Cardiologia', NULL);
INSERT INTO `especialidad` VALUES (14, 42, 'Traumatologia y Ortopedia', NULL);
INSERT INTO `especialidad` VALUES (16, 42, 'Cirugia de la Mano', NULL);
INSERT INTO `especialidad` VALUES (5, 52, 'Gineco-Obstetra', NULL);
INSERT INTO `especialidad` VALUES (4, 48, 'Pediatria', NULL);
INSERT INTO `especialidad` VALUES (12, 54, 'Cirugia General', NULL);
INSERT INTO `especialidad` VALUES (20, 55, 'Neurologia', NULL);
INSERT INTO `especialidad` VALUES (8, 55, 'Internista', NULL);
INSERT INTO `especialidad` VALUES (11, 46, 'Odontologia', NULL);
INSERT INTO `especialidad` VALUES (17, 57, 'Medico Cirujano', NULL);
INSERT INTO `especialidad` VALUES (21, 54, 'Neurocirugia', NULL);
INSERT INTO `especialidad` VALUES (22, 54, 'Neumonologia', NULL);
INSERT INTO `especialidad` VALUES (4, 54, 'Pediatria', NULL);
INSERT INTO `especialidad` VALUES (16, 54, 'Cirugia de la Mano', NULL);
INSERT INTO `especialidad` VALUES (14, 54, 'Traumatologia y Ortopedia', NULL);
INSERT INTO `especialidad` VALUES (5, 60, 'Gineco-Obstetra', NULL);
INSERT INTO `especialidad` VALUES (8, 60, 'Internista', NULL);
INSERT INTO `especialidad` VALUES (4, 61, 'Pediatria', NULL);
INSERT INTO `especialidad` VALUES (17, 62, 'Medico Cirujano', NULL);
INSERT INTO `especialidad` VALUES (14, 62, 'Traumatologia y Ortopedia', NULL);
INSERT INTO `especialidad` VALUES (4, 63, 'Pediatria', NULL);
INSERT INTO `especialidad` VALUES (14, 61, 'Traumatologia y Ortopedia', NULL);
INSERT INTO `especialidad` VALUES (16, 61, 'Cirugia de la Mano', NULL);
INSERT INTO `especialidad` VALUES (5, 61, 'Gineco-Obstetra', NULL);
INSERT INTO `especialidad` VALUES (7, 61, 'Cardiologia', NULL);
INSERT INTO `especialidad` VALUES (11, 61, 'Odontologia', NULL);
INSERT INTO `especialidad` VALUES (20, 61, 'Neurologia', NULL);
INSERT INTO `especialidad` VALUES (8, 64, 'Internista', NULL);
INSERT INTO `especialidad` VALUES (5, 64, 'Gineco-Obstetra', NULL);
INSERT INTO `especialidad` VALUES (19, 64, 'Oftalmologia', NULL);
INSERT INTO `especialidad` VALUES (23, 0, 'Otorrinolaringologo', NULL);
INSERT INTO `especialidad` VALUES (23, 64, 'Otorrinolaringologo', NULL);
INSERT INTO `especialidad` VALUES (7, 65, 'Cardiologia', NULL);
INSERT INTO `especialidad` VALUES (21, 65, 'Neurocirugia', NULL);
INSERT INTO `especialidad` VALUES (8, 66, 'Internista', NULL);
INSERT INTO `especialidad` VALUES (20, 66, 'Neurologia', NULL);
INSERT INTO `especialidad` VALUES (7, 66, 'Cardiologia', NULL);
INSERT INTO `especialidad` VALUES (11, 66, 'Odontologia', NULL);
INSERT INTO `especialidad` VALUES (9, 66, 'Gastroenterologia', NULL);
INSERT INTO `especialidad` VALUES (14, 66, 'Traumatologia y Ortopedia', NULL);
INSERT INTO `especialidad` VALUES (5, 66, 'Gineco-Obstetra', NULL);
INSERT INTO `especialidad` VALUES (16, 66, 'Cirugia de la Mano', NULL);
INSERT INTO `especialidad` VALUES (4, 66, 'Pediatria', NULL);
INSERT INTO `especialidad` VALUES (5, 59, 'Gineco-Obstetra', NULL);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `medicos`
-- 

CREATE TABLE `medicos` (
  `id` int(11) NOT NULL auto_increment,
  `nombre` text NOT NULL,
  `foto` text NOT NULL,
  `resumen` text NOT NULL,
  `tarifas` text NOT NULL,
  `id_clinica` int(11) NOT NULL default '0',
  `municipio` text NOT NULL,
  `id_especialidad` int(11) NOT NULL default '0',
  `horarios` text NOT NULL,
  `contactos` text NOT NULL,
  `estado` text NOT NULL,
  KEY `id` (`id`)
) TYPE=MyISAM AUTO_INCREMENT=125 ;

-- 
-- Estructura de tabla para la tabla `noticias`
-- 

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL auto_increment,
  `titulo` text NOT NULL,
  `descripcion` text NOT NULL,
  KEY `id` (`id`)
) TYPE=MyISAM AUTO_INCREMENT=2 ;

-- 
-- Volcar la base de datos para la tabla `noticias`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `publicidad`
-- 

CREATE TABLE `publicidad` (
  `id` int(11) NOT NULL auto_increment,
  `nombre` text NOT NULL,
  `foto` text,
  KEY `id` (`id`)
) TYPE=MyISAM AUTO_INCREMENT=2 ;

-- 
-- Volcar la base de datos para la tabla `publicidad`
-- 

