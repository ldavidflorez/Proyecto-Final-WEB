-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-10-2021 a las 09:04:27
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbcompumall`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login_admin`
--

CREATE TABLE `login_admin` (
  `id` int(11) NOT NULL,
  `user` varchar(30) DEFAULT NULL,
  `pass` varchar(15) DEFAULT NULL,
  `nombre` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `login_admin`
--

INSERT INTO `login_admin` (`id`, `user`, `pass`, `nombre`) VALUES
(1, 'main_admin@compumall.com', 'admin1.2021', 'Mauricio'),
(2, 'second_admin@compumall.com', 'admin2.2021', 'Luis');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) DEFAULT NULL,
  `precio` varchar(20) DEFAULT NULL,
  `marca` varchar(100) DEFAULT NULL,
  `caracteristica` text DEFAULT NULL,
  `imagen` varchar(150) DEFAULT NULL,
  `tipo` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `precio`, `marca`, `caracteristica`, `imagen`, `tipo`) VALUES
(1, 'Vivobook S14 ', '$ 1.649.990', 'ASUS', 'Procesador: AMD RYZEN R5\r\nModelo tarjeta de video: Integrada\r\nTamaño de la pantalla: 14 pulgadas\r\nDisco duro HDD: No tiene\r\nUnidad de estado sólido SSD: 256GB', 'Asus_Vivobook.jfif', 'computadores'),
(2, 'Procesador Core-i3', '$455.000', 'Intel', 'Producto eficiente y de rendimiento estándar en programas de edición de video, contenido y juegos.\r\nMemoria caché de 6 MB, rápida y volátil.\r\nSoporta memoria RAM DDR4.\r\nSu potencia es de 65 W.\r\nCuenta con Hyper-Threading que favorece la ejecución de programas en simultáneo, al dividir el procesador físico en dos procesadores lógicos.Procesador avanzado de alto desempeño y marca líder en el rubro.', 'Core_i3.jpg', 'componentes'),
(3, 'Cámara interior 2K PAN /TILT', '$156.000', 'Eufy -Security', 'Esta cámara detecta personas y mascotas al instante. Sirve como sistema de Seguridad o Alarma, posee un Alto de	10.8 cm, un Peso de 0.217 kg. El Material es de Plástico. Compatibilidad con 	iOS o Android y Conexión WF Wireless.', 'Camara.jfif', 'accesorios'),
(4, 'NotebooK HP Pavilion Gaming 15', '$2.500.000', 'HP', 'Procesador: Intel Core i5.\r\nModelo tarjeta de video: NVIDIA GTX 1050.\r\nTamaño de la pantalla: 15.6 pulgadas.\r\nDisco duro HDD: No tiene.\r\nUnidad de estado sólido SSD: 256GB.', 'HP_Notebook.jfif', 'computadores'),
(5, 'ZenBook Duo 14 LED', '$3.200.450', 'ASUS', 'Procesador: Intel Core i7.\r\nModelo tarjeta de video: Integrada.\r\nTamaño de la pantalla: 14 pulgadas.\r\nDisco duro HDD: No tiene.\r\nUnidad de estado sólido SSD: 512GB.', 'Asus_Notebook.jfif', 'computadores'),
(6, 'Procesador Core-i5', '$ 712.000', 'INTEL', 'Ejecuta programas de edición de videos, creación de contenido, streaming y videojuegos sin afectar el rendimiento del dispositivo.\r\nMemoria caché de 12 MB, rápida y volátil.\r\nProcesador gráfico Intel UHD Graphics 630.\r\nSoporta memoria RAM DDR4.\r\nCuenta con Hyper-Threading que favorece la ejecución de programas en simultáneo, al dividir el procesador físico en dos procesadores lógicos.', 'Core_i5.jpg', 'componentes'),
(7, 'Escritorio Nilo Roch', '$523.000', 'Roch Ltd', 'Espesor: 15 mm.\r\nRequiere sistema de anclaje: No.\r\nAncho: 137,2 cm.\r\nAcabado: Brillante.\r\nInstrucciones de armado: Incluidas.', 'mesa.jfif', 'accesorios'),
(8, 'Pavilion Gaming 15', '$3.345.000', 'HP', 'Procesador: Intel Core i5.\r\nModelo tarjeta de video: NVIDIA GTX1660Ti.\r\nTamaño de la pantalla: 15.6 pulgadas.\r\nDisco duro HDD: No tiene.\r\nUnidad de estado sólido SSD: 512Gb.', 'HP_Pavilon.jfif', 'computadores'),
(9, 'Multifuncional WiFi DeskJet Ink Advantage 3775', '$268.000', 'HP', 'Tipo de impresión: Color.\r\nTipo de inyección: Tinta.\r\nConexión Bluetooth: No.\r\nConexión WiFi: Sí.\r\nEntradas USB: 1.', 'Impresora_Wifi.jfif', 'accesorios'),
(10, 'Impresora HP Laser MFP', '$489.000', 'HP', 'Tipo de impresión: Láser.\r\nTipo de inyección: Láser.\r\nConexión Bluetooth: No.\r\nConexión WiFi: Sí.\r\nEntradas USB: 1.', 'Impresora_Hp.jfif', 'accesorios'),
(11, 'Notebook Gamer Legion 5', '$4.350.000', 'LENOVO', 'Procesador: AMD RYZEN R5.\r\nModelo tarjeta de video: NVIDIA GeForce RTX 3060 6GB.\r\nTamaño de la pantalla: 15.6 pulgadas.\r\nDisco duro HDD: No tiene.\r\nUnidad de estado sólido SSD: 1TB.', 'Lenovo_Gamer.jfif', 'computadores'),
(12, 'Procesador Gamer Core_i9', '$ 1.679.990', 'INTEL', 'Ejecuta con rapidez y eficiencia cualquier tipo de programa sin afectar el funcionamiento total del dispositivo.\r\nMemoria caché de 16 MB, rápida y volátil.\r\nProcesador gráfico Intel UHD Graphics 630.\r\nSoporta memoria RAM DDR4.', 'Core_i9.jpg', 'componentes'),
(13, 'Multimedia Estudio en casa', '$362.000', 'Master_G', 'Conexión WiFi y Bluetooh: Si.\r\nProfundidad máxima: 19.5.\r\nHecho en: China.\r\nPeso: 5Kg.\r\nCanales: 2.1.', 'multimedia.jpg', 'accesorios'),
(14, 'Mouse Gamer Rgb Griffin', '$102.000', 'HP', 'Inalámbrico: No.\nCompatibilidad: Universal.\nModelo: 29REDM6070.\n', 'Mouse_Gamer.jfif', 'componentes'),
(15, 'Silla Gamer Ultimate Racing', '$580.000', 'NOVAHUS', 'Altura total: 125 - 133 cm.\r\nProfundidad: 52 cm.\r\nRespaldo reclinable: Sí.\r\nNivelación de altura: Sí.\r\nTipo: Sillas de oficina.', 'Silla_Gamer.jfif', 'accesorios'),
(16, 'Procesador AMD A-Series', '$300.000', 'AMD', 'Memoria caché de 2 MB, rápida y volátil.\r\nProcesador gráfico Radeon R7 Graphics.\r\nSoporta memoria RAM DDR4.\r\nSu potencia es de 65 W.', 'AMD.jpg', 'componentes'),
(17, 'Lenovo IdeaPad Notebook', '$3.100.000', 'LENOVO', 'Procesador: Ryzen AMD.\r\nModelo tarjeta de video: Integrated Intel Iris Xe Graphics.\r\nTamaño de la pantalla: 14 pulgadas.\r\nDisco duro HDD: No tiene.\r\nUnidad de estado sólido SSD: 256GB.', 'Lenovo_Ideapad.jfif', 'computadores'),
(18, 'Kit Teclado Y Mouse Logitech MK220 Inalambrico', '$320.000', 'LOGITECH', 'Diseño mucho más pequeño, las mismas teclas.\r\nTecnología inalámbrica avanzada de 2,4 GHz.\r\nCifrado AES de 128 bits.\r\nMenos complicaciones de pilas.\r\nDiseño elegante y minimalista.\r\nSimplicidad Plug and Play.\r\nTeclas silenciosas.', 'Combo.jfif', 'componentes'),
(19, 'Disco duro 4TB + USB 64GB', '$399.000', 'WESTERN DIGITAL', 'Tamaño de disco duro: 2.5pulg.\r\nSistema de formato de archivo: NTFS\r\nCapacidad: 4 TB\r\nEMPAQUETADO\r\nManual de usuario: Si\r\nCables incluidos: USB', 'DiscoDuro_USB.jfif', 'componentes'),
(20, 'Mouse inalámbrico HP', '$89.000', 'HP', 'Contiene usb inalámbrico.\r\nPosee rueda de desplazamiento.\r\nCon sensor óptico.\r\nResolución de 1000ppp.\r\nCreado para llevar a todas partes.\r\nControl inteligente y navegación fácil.', 'Mouse_Hp.jfif', 'componentes'),
(21, 'Notebook Lenovo 14w AMD', '$2.200.000', 'LENOVO', 'Disco duro HDD: No tiene.\r\nProfundidad: 22.5.\r\nUnidad óptica: No\r\nTamaño de la pantalla: 14 pulgadas.\r\nProcesador: AMD A6.\r\nTarjeta de Video: AMD Radeon R5 Graphics.', 'Lenovo_Notebook.jfif', 'computadores');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellidos` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `departamento` varchar(50) DEFAULT NULL,
  `municipio` varchar(50) DEFAULT NULL,
  `postal` int(7) DEFAULT NULL,
  `direccion` text DEFAULT NULL,
  `telefono` int(10) DEFAULT NULL,
  `observaciones` text DEFAULT NULL,
  `sexo` varchar(10) DEFAULT NULL,
  `producto` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `nombre`, `apellidos`, `email`, `departamento`, `municipio`, `postal`, `direccion`, `telefono`, `observaciones`, `sexo`, `producto`) VALUES
(1, 'Luis David ', 'Florez Pareja', 'desarrollador1@blackpool.co', 'Antioquia', 'Guarne', 55790, 'Vda. Juan XXIII.', 2147483647, 'NA', '2', '2'),
(2, 'Luis David ', 'Florez Pareja', 'desarrollador1@blackpool.co', 'Antioquia', 'Guarne', 550, 'Vda.', 2147483647, 'NA', 'Masculino', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `login_admin`
--
ALTER TABLE `login_admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user` (`user`),
  ADD UNIQUE KEY `pass` (`pass`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `login_admin`
--
ALTER TABLE `login_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
