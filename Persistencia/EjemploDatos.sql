/*Recordar que se debe modificar el root en 000webhost junto con el nombre de la base de datos.*/

USE `aportapp1_0`;


INSERT INTO `Persona` (`Cod_Persona`, `Id_Persona`, `Cod_Tipo_Indentificacion`, `Cod_Genero`, `Nombre_Cliente`, `Apellido1_Cliente`, `Apellido2_Cliente`, `Fecha_Nacimiento`, `Fecha_ingreso`, `Fecha_retiro`, `Telefono_Contacto`, `Direccion`, `Estado_Persona`, `correo_Persona`) VALUES (NULL, '1024581966', '1', '1', 'Andres', 'Jejen', 'Cortes', '1997-07-08', '2018-07-09', NULL, '3115834418', 'CR 72 C 55 B 43 S', '1', 'gajcam@gmail.com');


/*Procedimiento Almacenado validacion ingreso*/
DROP procedure IF EXISTS `LoginValidate`;

DELIMITER $$
USE `aportapp1_0`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `LoginValidate`(IN `_Nombre` VARCHAR(20), IN `_Pass` VARCHAR(20))
BEGIN SELECT Administrador.NombreAdmin from Administrador where Administrador.NombreAdmin = _Nombre AND Administrador.Contrasena = _Pass; 
END$$

DELIMITER ;


/*Procedimiento Almacenado Validacion existencia de administrador*/
DROP procedure IF EXISTS `AdminExist`;

DELIMITER $$
USE `aportapp1_0`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `AdminExist`(
IN _Nombre varchar(20)
)
BEGIN
SELECT NombreAdmin FROM administrador where administrador.NombreAdmin =  _Nombre;
END$$

DELIMITER ;

/*Procedimiento Almacenado Validacion de la respuesta*/
USE `aportapp1_0`;
DROP procedure IF EXISTS `SelectRespuesta`;

DELIMITER $$
USE `aportapp1_0`$$
CREATE PROCEDURE `SelectRespuesta` (
IN `_Nombre` VARCHAR(20), 
IN `_Resp` VARCHAR(50))
BEGIN
SELECT Respuesta from Administrador
where NombreAdmin = _Nombre and Respuesta = _Resp;
END$$

DELIMITER ;

/*Procedimiento Almacenado Actualización Contraseña*/
USE `aportapp1_0`;
DROP procedure IF EXISTS `UpdatePass`;

DELIMITER $$
USE `aportapp1_0`$$
CREATE PROCEDURE `UpdatePass` (
IN `_Nombre` VARCHAR(20), 
IN `_Pass` VARCHAR(20))
BEGIN
Update Administrador
SET Contrasena = _Pass 
Where NombreAdmin= _Nombre;
END$$

DELIMITER ;

/*Procedimiento Almacenado Todas las personas*/
USE `aportapp1_0`;
DROP procedure IF EXISTS `TodosPersonas`;

DELIMITER $$
USE `aportapp1_0`$$
CREATE PROCEDURE `TodosPersonas` ()
BEGIN
SELECT Per.Id_Persona, Per.Nombre_Cliente, Per.Apellido1_Cliente, Per.Apellido2_Cliente, Est.DescripcionEstadoPersona 
from Persona Per, estadopersona Est 
where Per.Estado_Persona = Est.Cod_EstadoPersona;
END$$

DELIMITER ;