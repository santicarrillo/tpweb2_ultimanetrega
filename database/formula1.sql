-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-10-2023 a las 20:03:16
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
-- Base de datos: `formula1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calendario`
--

CREATE TABLE `calendario` (
  `id` int(50) NOT NULL,
  `fecha` varchar(100) NOT NULL,
  `circuito` varchar(100) NOT NULL,
  `podio` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `calendario`
--

INSERT INTO `calendario` (`id`, `fecha`, `circuito`, `podio`) VALUES
(1, '03 - 05 - March', 'Sakhir - Bahrain', '1° Verstappen -\r\n2° Perez -\r\n3° Alonso'),
(2, '17 - 19 - March', 'Saudi Arabia - Jeddah', '1° Perez -\r\n2° Verstappen -\r\n3° Alonso\r\n'),
(3, '31 - 02 - March - Apr', 'Australia - Albert Park', '1° Verstappen -\r\n2° Perez -\r\n3° Alonso'),
(4, '28 - 30 - Apr', 'Baku - Azerbaijan', '1° Perez -\r\n2° Verstappen -\r\n3° Leclerc'),
(5, '05 - 07 - May', 'United States - Miami', '1° Verstappen -\r\n2° Perez -\r\n3° Alonso'),
(6, '19 - 21 - May', 'Imola - Italy', 'Race Cancel'),
(7, '26 - 28 - May', 'Monaco - Monte Carlo', '1° Verstappen -\r\n2° Alonso -\r\n3° Ocon'),
(8, '02 - 04 - Jun', 'Sapin - Circuit of Barcelona-Catalunya', '1° Verstappen -\r\n2° Hamilton -\r\n3° Russell'),
(9, '16 - 18 - Jun', 'Canada - Circuit Gilles - Villeneuve', '1° Verstappen -\r\n2° Alonso -\r\n3° Hamilton'),
(10, '30 - 02 - Jun - Jul', 'Red Bull Ring - Austria', '1° Verstappen -\r\n2° Leclerc -\r\n3° Perez'),
(11, '07 - 09 - Jul', 'Silverstone - Great Britain', '1° Verstappen -\r\n2° Norris -\r\n3° Hamilton'),
(12, '21 - 23 - Aug', 'Hungaroring - Hungary', '1° Verstappen -\r\n2° Norris -\r\n3° Perez'),
(13, '28 - 30 - Jul', 'Spa-Francorchamps - Belgium', '1° Verstappen -\r\n2° Perez -\r\n3° Leclerc'),
(14, '25 - 27 - Aug', 'Zandvoort - Netherlands', '1° Verstappen -\r\n2° Alonso -\r\n3° Gasly'),
(15, '01 - 03 - Sep', 'Monza - Italy', '1° Verstappen -\r\n2° Perez -\r\n3° Sainz'),
(16, '15 - 17 - Sep', 'Marina Bay - Singapore', '1° Sainz -\r\n2° Norris -\r\n3° Hamilton'),
(17, '22 - 24 - Sep', 'Suzuka - Japon', '1° Verstappen -\r\n2° Norris -\r\n3° Piastri'),
(18, '06 - 08 - Oct', 'Lusail International Circuit - Qatar', '1° Vestappen -\r\n2° Piastri -\r\n3° Norris'),
(19, '20 - 22 - Octubre', 'Austin - United States', ''),
(20, '27 - 29 - Octubre', 'Autódromo Hermanos Rodríguez - México', ''),
(21, '03 - 05 - Noviembre', 'Interlagos - Brasil ', ''),
(22, '16 - 18 - Noviembre', 'Las Vegas - United States', ''),
(23, '24 - 26 - Noviembre', 'Yas Marina - Abu Dhabi', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escuderias`
--

CREATE TABLE `escuderias` (
  `id` int(11) NOT NULL,
  `equipos` varchar(250) NOT NULL,
  `pilotos` varchar(200) NOT NULL,
  `img` varchar(50) DEFAULT NULL,
  `description` varchar(200) NOT NULL,
  `puntos_equipo` int(11) NOT NULL,
  `pos_equipos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `escuderias`
--

INSERT INTO `escuderias` (`id`, `equipos`, `pilotos`, `img`, `description`, `puntos_equipo`, `pos_equipos`) VALUES
(1, 'Red Bull', 'Max Verstappen y Sergio Pérez', 'img/63476a959a57ef.png', 'Red Bull no era ajeno a la F1, como patrocinador, antes de ingresar formalmente como equipo oficial en 2004. Sin embargo, la escala de su éxito durante la década siguiente fue asombrosa. Después de un', 583, 1),
(2, 'Mercedes AMG F1', 'Lewis Hamilton y George Russell', 'img/63476aa90203af.png', 'El renacimiento moderno de Mercedes en la F1 comenzó con la creación de un equipo oficial para 2010, la plataforma para un ascenso meteórico en el orden de los Grandes Premios. El equipo generó un gra', 273, 2),
(3, 'Ferrari', 'Carlos Sainz y Charles Leclerc', 'img/634765aa6a7222.png', 'Para muchos, Ferrari y la Fórmula 1 se han vuelto inseparables. El único equipo que ha competido en todas las temporadas desde que comenzó el campeonato mundial, el Cavallino Rampante ha crecido desde', 228, 3),
(4, 'Aston Martin', 'Fernando Alonso y Lance Stroll\r\n', 'img/63f476ab5c263f.png', 'La incursión original de Aston Martin en la Fórmula 1 (hace más de medio siglo) duró sólo cinco carreras. Pero esta vez la cosa va en serio. Este equipo de F1 no es ajeno al éxito, ya que ganó con su ', 217, 4),
(5, 'McLaren', 'Lando Norris y Oscar Piastri', 'img/6347h6abfefe3e.png', 'Desde que ingresó al deporte en 1966 bajo la guía y el incansable esfuerzo del fundador epónimo Bruce, el éxito de McLaren ha sido impresionante. Cinco brillantes décadas han dado lugar a innumerables', 115, 5),
(6, 'Alpine', 'Pierre Gasly y Esteban Ocon', 'img/63476ayc5c7d32.png', 'Puede que Alpine sea un nombre relativamente nuevo en la Fórmula 1, pero la famosa división de autos deportivos de Renault tiene mucha herencia en el deporte del motor. El cambio de marca del equipo e', 73, 6),
(7, 'Williams', 'Alexander Albon y Logan Sargeant', 'img/63476ad0b24675.png', 'Impulsado por la brillantez y la pasión del fallecido Sir Frank Williams, Williams creció desde sus humildes comienzos hasta convertirse en un gigante de la Fórmula 1, sin rival, excepto Ferrari y McL', 21, 7),
(8, 'Haas', 'Kevin Magnussen  y Nico Hülkenberg', 'img/63476ad8b9d420.png', 'Haas, el equipo más joven de la parrilla, hizo su impresionante debut en 2016 y, en el proceso, se convirtió en el primer equipo de F1 liderado exclusivamente por estadounidenses en tres décadas. Fund', 12, 8),
(9, 'Alfa Romeo', 'Valtteri Bottas y Zhou Guanyu', 'img/63476ae4c35cdd.png', 'El nombre Alfa Romeo cuenta con conexiones con la Fórmula 1 que se remontan a los inicios del campeonato en 1950. Un avance rápido hasta el siglo XXI y el toque italiano se combina con la sensibilidad', 10, 9),
(10, 'AlphaTauri', 'Yuki Tsunoda y Liam Lawson', 'img/63476b340f9095.png', 'Establecido en 2006 como un equipo en el que los jóvenes pilotos del prodigioso grupo de talentos de Red Bull podían iniciarse en la F1, AlphaTauri (originalmente llamado Toro Rosso) se formó a partir', 3, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pilotos`
--

CREATE TABLE `pilotos` (
  `id` int(50) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `descripcion` varchar(1000) NOT NULL,
  `campeonato` int(200) NOT NULL,
  `puntos` int(100) NOT NULL,
  `id_escuderia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pilotos`
--

INSERT INTO `pilotos` (`id`, `nombre`, `descripcion`, `campeonato`, `puntos`, `id_escuderia`) VALUES
(1, 'Max Verstasppen', 'Es Max por nombre y Max por naturaleza.\r\nVerstappen, que llegó como el competidor más joven de la Fórmula 1 con solo 17 años.\r\nEl holandés con cara de niño y corazón de león tomó al Toro Rosso (y luego al Red Bull) por los cuernos con su instintivo estilo de carrera.\r\nEl anotador de puntos más joven de la F1 pronto se convirtió en el ganador de carreras más joven (a la edad de 18 años y 228 días). \r\nDespués de convertirse en el primer campeón mundial de Holanda con sólo 24 años, las expectativas para el líder de la próxima generación están por las nubes, pero con Verstappen existe la sensación de que el cielo es el límite.\r\n', 1, 364, 1),
(2, 'Sergio Perez', 'Es el luchador con un toque gentil de la tierra de la Lucha Libre.\r\nLa reputación de Pérez en la F1 se ha construido sobre enfoques opuestos a las carreras de Gran Premio. Por un lado, es un combatiente contundente que se abre camino entre el grupo y llega a los puntos, por otro lado, Pérez es un operador suave, un maestro en el manejo de neumáticos para obtener un rendimiento extra y darle ventaja en la estrategia.\r\nEn Sakhir 2020 también igualó al héroe y compatriota Pedro Rodríguez al tomar la bandera a cuadros en primer lugar, una actuación que le valió un asiento con los aspirantes al título Red Bull.\r\nAllí brindó un fuerte apoyo a las campañas ganadoras del campeonato de 2021 y 2022 de Max Verstappen. Aunque puede que no estén aseguradas más victorias, especialmente con Verstappen como compañero de equipo, pero Pérez, trabajando duro y corriendo con el corazón, sí lo está.\r\n', 2, 219, 2),
(3, 'Fernando Alonso', 'Se necesitaba a alguien muy especial para derrocar a la leyenda de Ferrari, Michael Schumacher, de su trono, y el hecho de que fue Fernando Alonso quien lo hizo, dice todo lo que necesitas saber sobre el español.\r\nDespués de dos años alejado de las carreras de Fórmula 1, y con dos victorias en Le Mans en el bolsillo, Alonso regresó con Alpine en 2021. Su velocidad y determinación no disminuyeron, volvió al podio ese año, pero frustrado por la poca confiabilidad y la falta de contrato a largo plazo, así es como en la temporada siguiente optó por abandonar el barco una vez más.\r\nAhora Alonso espera que Aston Martin sea el equipo con el que finalmente vuelva a ganar, ya que tiene asuntos pendientes con la F1.', 3, 170, 3),
(4, 'Lewis Hamilton', '\'Still I Rise\': estas son las palabras estampadas en la parte posterior del casco de Lewis Hamilton y tatuadas en sus hombros, y desde que aniquiló las expectativas con una de las mejores actuaciones de novato en la historia de la F1 en 2007, eso es literalmente todo lo que ha hecho: ascender a encabezó la lista de poles de todos los tiempos por delante de su héroe Ayrton Senna, saltó al primer lugar en la columna de victorias superando al inimitable Michael Schumacher y luego igualó los siete títulos mundiales del legendario alemán.', 4, 164, 4),
(5, 'Carlos Sainz', 'Es el matador de la realeza del hipismo madrileño. \r\nDespués de ingresar al Bull Ring de la F1 junto a Max Verstappen en Toro Rosso en 2015, Sainz rápidamente mostró su espíritu de lucha. Un corredor tenaz, pone el auto al límite mientras se abre paso entre el pelotón.\r\nDespués de seguir las huellas de neumáticos de su famoso padre, Sainz ha tenido grandes botas que llenar: primero en McLaren, donde reemplazó a su héroe de la infancia, Fernando Alonso, y ahora en Ferrari, en el asiento que antes pertenecía a Sebastian Vettel. ', 5, 117, 5),
(6, 'Charles Leclerc', 'Al ascender a la F1 en 2018, Leclerc mostró destellos de ritmo vertiginoso los sábados y brillantez en las carreras los domingos, arrastrando su Sauber más allá de sus límites y ganándose un asiento de carrera en Ferrari que el dinero no se puede comprar para 2019, poniéndose en los zapatos. del último campeón del mundo de la Scuderia, Kimi Raikkonen. \r\nLas temporadas 2020 y 21 dieron pocos frutos para Ferrari, pero Leclerc mantuvo su determinación de emerger como un verdadero contendiente al título en 2022. Con tres victorias, 11 podios y nueve poles, fue el único hombre capaz de luchar consistentemente por el campeón. Max Verstappen.', 6, 111, 6),
(7, 'George Russell', 'Es el conductor con el lema: “En caso de duda, vaya a toda velocidad”. George Russell lo ha vivido a lo largo de su carrera en la F1 hasta la fecha, superando a su experimentado compañero de equipo Robert Kubica en los 21 Grandes Premios de su temporada de novato, volviendo a colocar a Williams en el podio en 2021 y logrando su primera victoria con Mercedes en 2022.', 7, 109, 7),
(8, 'Lando Norris', 'McLaren tuvo al adolescente británico en sus libros durante dos años antes de acelerarlo hacia la galaxia de estrellas de la F1 en 2019. Norris, un petardo en su carrera junior, con predilección por las poles y las peleas rueda con rueda, no dejó ellos abajo.\r\nEn 2020 consiguió su primer podio, y le siguieron más en las dos temporadas siguientes (estuvo a punto de ganar en Rusia 2021), mientras dominaba a otro compañero de equipo de mayor rango, Daniel Ricciardo, para establecerse firmemente en el nivel superior de la F1.', 8, 79, 8),
(9, 'Lance Stroll', 'troll tiene el potencial de ser un elemento fijo a largo plazo en la Fórmula 1, como lo ilustra ampliamente su primera pole y otros dos podios en 2020.\r\nEsto se produjo después de que su padre Lawrence liderara el consorcio que se hizo cargo de Force India a mediados de la temporada 2018 y luego lo transformara de Racing Point a Aston Martin para 2021', 9, 47, 9),
(10, 'Pierre Gasly', 'El piloto francés fue convocado para debutar en 2017 en Malasia en lugar de Daniil Kvyat y, tras demostrar su valía, fue nombrado piloto de Toro Rosso al año siguiente. Tras 21 carreras más en su incipiente carrera, Gasly ascendió nuevamente, esta vez para reemplazar al pez gordo de Red Bull, Daniel Ricciardo.\r\nCuando el impulso de AlphaTauri se estancó en 2022, Gasly decidió que era hora de un cambio, en la forma del equipo francés Alpine, con su compatriota francés y viejo adversario, Esteban Ocon, como compañero de equipo. La pregunta ahora es si podrá recuperar el impulso y tener otra oportunidad de llegar a lo más alto de la F1.', 10, 37, 10),
(11, 'Esteban Ocon', 'Ocon esperó el momento oportuno y, después de un año al margen como piloto reserva de Mercedes, encontró el camino de regreso a un asiento de carrera para 2020 con Renault, que se convirtió en Alpine para 2021, cuando su espera finalmente dio sus frutos, ya que anotó. su primera victoria en F1 (y la de la famosa marca francesa).\r\nNada en la carrera de Ocon en el deporte del motor ha sido fácil, pero si Ocon ha logrado regresar a la parrilla de F1 y subir al podio, es gracias a una combinación de confianza en sí mismo, determinación y un talento que está a la altura de los mejores.', 11, 36, 11),
(12, 'Oscar Piastri', 'Subcampeón británico de F4. Campeón de Fórmula Renault. Campeón de F3. Campeón de F2 (por más de 50 puntos). Piastri no se limitó a subir la escalera del monoplaza júnior, sino que la subió para llamar ruidosamente a la puerta de la F1.\r\n\r\nPiastri fue tan impresionante que dos equipos de F1 se pelearon por sus servicios para 2023, añadiendo una nueva dimensión al mercado de pilotos y a la llamada \'temporada tonta\'.\r\nDespués de una reunión de la Junta de Reconocimiento de Contratos, se confirmó que era McLaren, y no su patrocinador de larga data Alpine, quien tenía derecho a los servicios de Piastri, y con quien el joven de 21 años está listo para hacer realidad su sueño de F1.', 12, 36, 12),
(13, 'Alexander Albon', 'Graduado en la gran liga de F1 junto con otro contemporáneo, Lando Norris, en 2019, Albon habló en la pista con Toro Rosso en las primeras carreras, lo que le valió un ascenso a mitad de temporada a Red Bull Racing.\r\nAlbon, un elegante adelantador con mentalidad de campeonato, no se inmutó al asociarse con Max Verstappen durante la segunda mitad de su temporada de novato, logrando resultados entre los seis primeros en ocho de sus nueve carreras de 2019 con Red Bull.\r\nEl desafío de Albon ahora es grande: aprovechar al máximo una segunda oportunidad poco común en la F1.', 13, 21, 13),
(14, 'Nico Hulkenberg', 'Cuando alcanzó el récord no deseado de más salidas de carreras sin un podio, se rió de ello y lo consideró el comienzo de la \"era Hulkenberg\".\r\nAfortunadamente, incluso después de que Renault lo abandonara a finales de 2019, la era del popular alemán continuó con algunas unidades suplentes (y destacadas) en 2020 y 2022', 14, 9, 14),
(15, ' Valtteri Bottas', 'Bottas subió un nivel en 2019, cuatro victorias le aseguraron un convincente segundo lugar en el campeonato detrás de Hamilton, pero eso se redujo a dos victorias frente a las 11 de su compañero de equipo en 2020 y luego solo una en 2021, lo que llevó a Mercedes a dejarlo después de cinco temporadas.\r\nEn 2022, comenzó un nuevo capítulo en su carrera en la F1, reemplazando a su compatriota Kimi Raikkonen para liderar una alineación completamente nueva en Alfa Romeo y tomando al novato chino Zhou Guanyu bajo su protección.', 15, 6, 15),
(16, 'Zhou Guanyu ', 'Su paso a la academia de Renault para 2019 coincidió con su debut en la Fórmula 2, con Zhou fortaleciendo su confianza en la serie a través de múltiples victorias y poles a lo largo de tres temporadas, lo que lo llevó a competir por el título de pilotos en 2021. \r\nEso fue suficiente para convencer al director del equipo Alfa Romeo, Fred Vasseur, de confiar en Zhou para 2022 y presentarlo junto al ex piloto de Mercedes Valtteri Bottas, lo que le permitió a Zhou lograr su sueño de competir en F1, e incluso ver cómo le va frente a su rival. propio héroe de la infancia, Fernando Alonso.', 16, 4, 16),
(17, 'Yuki Tsunoda ', 'Después de un comienzo lento en la F3, seguido de una campaña de debut enormemente impresionante en la F2 que lo vio terminar tercero en el campeonato y conseguir tres victorias en el camino, Tsunoda demostró que tenía la velocidad y el arte de competir para abrirse camino hacia la cima. Cuadrícula F1.\r\nPuede que no se haya adaptado a las carreras de Gran Premio tan rápido como lo hizo a la F2, pero con el tiempo aún podría encontrarse luchando en la parte más dura con un Red Bull.', 17, 3, 17),
(18, 'Kevin Magnussen ', 'Después de un año en Estados Unidos, compitiendo en Indy y autos deportivos, entre otras cosas, regresó al equipo estadounidense en 2022, consiguiendo su primera pole position en el Gran Premio de Brasil.\r\nSus maniobras sustanciosas y su enfoque descarado le han ganado una reputación de chico malo en la pista, algo que todavía lo deja desconcertado. Fuera del coche, Magnussen se muestra relajado y afable. Después de todo, tiene el trabajo de sus sueños y sólo está aquí para competir.', 18, 2, 18),
(19, 'Logan Sargeant ', 'Desde el quinteto de apariciones de Alexander Rossi con Manor al final de la temporada 2015, un estadounidense no ha aparecido en la parrilla de F1, y Sargeant espera cambiar eso en su primera temporada.\r\nY con tres carreras que se celebrarán en los EE. UU. en 2023, la última estrella de la F1 de Estados Unidos contará con un gran apoyo local durante su campaña de novato.', 19, 0, 19),
(20, 'Liam Lawson', '', 20, 0, 20),
(26, 'Sebastian Vettel', '', 1, 600, 21),
(27, 'kimi', '', 2, 540, 22);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `calendario`
--
ALTER TABLE `calendario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `escuderias`
--
ALTER TABLE `escuderias`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indices de la tabla `pilotos`
--
ALTER TABLE `pilotos`
  ADD PRIMARY KEY (`id_escuderia`) USING BTREE;

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `calendario`
--
ALTER TABLE `calendario`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `escuderias`
--
ALTER TABLE `escuderias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `escuderias`
--
ALTER TABLE `escuderias`
  ADD CONSTRAINT `fk_id_escuderia` FOREIGN KEY (`id`) REFERENCES `pilotos` (`id_escuderia`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
