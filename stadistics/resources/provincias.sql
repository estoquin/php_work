-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 27-10-2020 a las 02:45:39
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `argentina`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE `provincias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) CHARACTER SET latin1 NOT NULL,
  `capital` varchar(100) CHARACTER SET latin1 NOT NULL,
  `superficie` int(11) NOT NULL,
  `altitud` int(11) NOT NULL,
  `poblacion` int(11) NOT NULL,
  `densidad` int(11) NOT NULL,
  `subd` int(11) NOT NULL,
  `idh` double NOT NULL,
  `porsup` double NOT NULL,
  `porpob` double NOT NULL,
  `info` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `provincias`
--

INSERT INTO `provincias` (`id`, `nombre`, `capital`, `superficie`, `altitud`, `poblacion`, `densidad`, `subd`, `idh`, `porsup`, `porpob`, `info`) VALUES
(1, 'Tucuman', 'san miguel de tucumán', 22525, 551, 1767500, 72, 17, 0.81, 0.81, 3.61, 'Tucumán es la provincia más pequeña de la Argentina. Sin embargo, la fuerza del trabajo, el compromiso y la perseverancia de sus hombres y mujeres, la consolidan como una de las cinco provincias más importantes del país.'),
(2, 'Buenos Aires', 'la plata', 307571, 54, 18004120, 53, 0, 0, 0, 0, 'Buenos Aires, la ciudad del tango, del asado, del fútbol… El centro de la sociedad argentina, llena de contrastes y emociones a flor de piel. Es una de las 20 ciudades más grandes del mundo, por lo que viajar a la capital de Argentina, también llamada “Baires”, no puede hacerse sin planificación.'),
(3, 'Santa Fe', 'santa fe', 133007, 53, 3397532, 25, 0, 0, 0, 0, 'Santa Fe es una ciudad histórica. Fue fundada en 1573 por Juan de Garay y es una de las primeras urbanizaciones del Río de la Plata. Su condición de ciudad-puerto y capital de provincia le da una particular vida económica y social en permanente diálogo entre tradiciones culturales y corrientes innovadoras.\r\n'),
(6, 'Jujuy', 'san salvador de jujuy', 53219, 3433, 727780, 13, 16, 0.82, 1.91, 1.68, 'La provincia de Jujuy es la que está más al norte de Argentina, es conocida como la Capital Nacional de la Pachamama, y limita al norte con Bolivia, al oeste con Chile, y con la provincia de Salta al sur y al este.'),
(7, 'salta', 'salta', 155488, 1246, 133365, 8, 0, 0.82, 0, 0, 'Los contrastes geográficos, que pasan de la puna a las llanuras subtropicales chaqueñas al oriente de la provincia, han favorecido a Salta, convirtiéndole en una de las provincias que más turistas atrae dentro de la Argentina'),
(8, 'Santiago del Estero', 'santiago del estero', 136351, 135, 928097, 7, 27, 0.81, 4.9, 2.17, 'La provincia de Santiago del Estero se ubica en el corazón del noroeste argentino y posee uno de los embalses más importantes y bellos de la región: el Dique Frontal Termas de Río Hondo.'),
(9, 'Chaco', 'resistencia', 99633, 102, 1192616, 12, 25, 0.8, 0, 0, 'La provincia del Chaco limita al oeste con Salta y Santiago del Estero, al sur con Santa Fe, al norte con Formosa y al este con Corrientes. Tres grandes ríos forman parte de sus lindes: el Bermejo, el Paraguay y el Paraná.'),
(10, 'Formosa', 'formosa', 72066, 115, 595280, 8, 9, 0.8, 2.59, 1.32, 'Si quieres visitar una provincia con alto nivel cultural e histórico tienes que ir a los lugares turísticos de Formosa. Se trata de los sitios ideales para conectarse con actividades feriales y espectáculos musicales.'),
(11, 'Misiones', 'posadas', 29801, 190, 1233177, 42, 17, 0.81, 0, 0, 'Naturaleza privilegiada y destinos culturales e históricos se conjugan para que muchos decidan conocer esta famosa ciudad. Su tierra colorada, imponentes saltos de agua e impenetrable selva son su mejor carta de presentación ante el mundo.'),
(12, 'Corrientes', 'corrientes', 88199, 96, 1070283, 13, 25, 0.81, 0, 0, 'Es una ciudad con un gran atractivo que disfrutas gracias a su variada riqueza forestal, montes y esteros. Su estilo colonial y autóctono en lo arquitectónico llama la atención entre el resto del país.'),
(13, 'Entre Rios', 'parana', 78781, 57, 1373270, 18, 17, 0.81, 2.83, 3.1, 'Una región rodeada por arroyos y ríos que le dan un gran valor turístico que no puedes dejar de visitar, es por ello que te traemos el mapa turístico de Entre Ríos, para que no pierdas la pista de este esplendido lugar, con gran cantidad de puentes y un túnel fluvial, este lugar ofrece al turista una variedad increíble de paisajes que harán de este lugar tu destino favorito.'),
(14, 'Cordoba', 'cordoba', 165310, 373, 3760450, 22, 26, 0.83, 5.94, 8.25, 'Quien visite Córdoba, encontrará una ciudad bulliciosa y llena de estudiantes universitarios. Podrá recorrer el Centro Histórico, caminar por la primera área peatonal del país, apreciar la Arquitectura Colonial nombrada patrimonio de la humanidad e ir de compras por los comercios del micro-centro y shoppings.'),
(15, 'Catamarca', 'san fernando del valle de catamarca', 102602, 3347, 396895, 4, 16, 0.83, 3.69, 0.92, 'Esta hermosa provincia, ubicada en el noroeste argentino es un sitio de una belleza única. Allí la fauna, en su mejor expresión aparece en los flamencos, vicuña, guanacos y otros animales que deleitan de este paraíso.'),
(16, 'La Rioja', 'la rioja', 89680, 6795, 387728, 4, 18, 0.83, 3.22, 0.83, 'Es una ciudad de 150.000 habitantes con un alto nivel de vida, bien comunicada y en una situación privilegiada para conocer toda la comunidad de La Rioja. Es una ciudad moderna que conserva un cuidado casco antiguo, muy agradable para pasear ya que casi todo él es peatonal, y con'),
(17, 'San Juan', 'san juan', 89651, 2269, 738959, 8, 19, 0.83, 3.22, 1.7, 'La ciudad de San Juan tiene una moderna arquitectura con calles y plazas frondozamente arboladas. A su alrededor encontramos ríos, cerros, valles y quebradas con paisajes deslumbrantes que constituyen un escenario ideal para la práctica de deportes extremos y turismo aventura.'),
(18, 'San Luis', 'san luis', 76748, 592, 502003, 6, 9, 0.83, 2.76, 1.08, 'Aquí puedes hacer pesca deportiva y cualquier tipo de actividad náutica porque ofrece distintos embalses cercanos como las de San Jerónimo. Y si deseas relajarte y alejarte del estrés de la ciudad, sus aguas termales son perfectas para ti.'),
(19, 'Mendoza', 'mendoza', 148827, 875, 1886000, 13, 18, 0.83, 5.35, 4.34, 'La provincia de Mendoza tiene una de las mejores concentraciones de atractivos turísticos de Argentina. Para empezar por lo más conocido, la ciudad capital es además una de las capitales vitivinícolas del planeta. Pero a ello hay que sumar la variedad de paisajes junto a la cordillera y pre cordillera andina, los sitios de interés históricos, el turismo aventura, las pistas de esquí. '),
(20, 'Rio Negro', 'viedma', 203013, 3554, 708799, 3, 13, 0.83, 7.3, 1.58, 'Fue realmente a fines del siglo XIX la verdadera puerta de entrada a la Patagonia Argentina. La Campaña al Desierto puso al descubierto una provincia que se vislumbró desde un primer momento con un enorme potencial económico.'),
(21, 'Neuquen', 'neuquen', 94078, 1086, 637913, 7, 16, 0.83, 3.38, 1.37, 'La zona de la estepa, con centro en la propia capital Neuquén, ofrece un tipo de actividad turística basado en la paleontología, con varias excavaciones y museos, y la más reciente Ruta del Vino, que congrega distintas bodegas que abren sus puertas a los visitantes.'),
(22, 'La Pampa', 'santa rosa', 143440, 279, 349299, 2, 22, 0.83, 5.16, 0.79, 'El campo, testigo silencioso de los cálidos atardeceres pampeanos, invita a compartir las tareas rurales, disfrutar de su tiempo y saborear el típico asado criollo.La Provincia brinda una experiencia viva, donde el ciervo colorado en época de brama es el protagonista del monte de caldén, mostrando a sus espectadores una escena palpitante que despierta los sentidos en medio de la naturaleza.'),
(23, 'Chubut', 'Rawson', 224686, 447, 587956, 3, 15, 0.83, 8.08, 1.26, 'Las ciudades importantes sobre la costa del océano, como Rawson, Puerto Madryn y Puerto Pirámides, en la Península Valdés, se vinculan con la zona cordillerana mediante excelentes rutas y caminos patagónicos. Así puede arribarse a las localidades de esta región: Esquel, Lago Puelo o Trevelin, entre otras.'),
(24, 'Tierra del fuego', 'Ushuaia', 21571, 144, 160720, 0, 5, 0.83, 2.66, 0.31, 'El turismo en la provincia constituye uno de los potenciales de mayor relevancia. Sus riquezas naturales y su variada geografía la muestran como un archipiélago lleno de bellezas que no ha estado exenta de la inspiración de escritores de la talla de Julio Verne, quienes han encontrado en el encanto fueguino una fuente de inspiración.'),
(25, 'Santa Cruz', 'Rio Gallegos', 243943, 3706, 273964, 1, 7, 0.83, 8.77, 0.68, 'La mítica Ruta Nacional 40 en Santa Cruz une el mar con la cordillera, los hielos milenarios y los secretos del horizonte infinito que conduce por el Corredor del Viento hacia la Ruta Azul. Una vuelta por la historia del planeta, de los tehuelches y los pioneros que tallaron este territorio pleno de naturaleza virgen.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `provincias`
--
ALTER TABLE `provincias`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `provincias`
--
ALTER TABLE `provincias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
