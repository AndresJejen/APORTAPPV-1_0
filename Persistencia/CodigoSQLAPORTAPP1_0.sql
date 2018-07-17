create database Aportapp1_0;
use Aportapp1_0;

create table TipoDocumento
(
Cod_Tipo_Indentificacion integer not null auto_increment,
DescripcionTipoDoc varchar(10) not null,
primary key (Cod_Tipo_Indentificacion)
)ENGINE = INNODB;

create table Genero
(
Cod_Genero integer not null auto_increment,
DescripcionGenero varchar(10) not null,
primary key (Cod_Genero)
)ENGINE = INNODB;

create table EstadoPersona
(
Cod_EstadoPersona  integer not null auto_increment,
DescripcionEstadoPersona varchar(16),
primary key (Cod_EstadoPersona)
)ENGINE = INNODB;

create table TipoDeuda
(
Cod_TipoDeuda  integer not null auto_increment,
DescripcionEstadoPersona varchar(16),
primary key (Cod_TipoDeuda)
)ENGINE = INNODB;

create table EstadoDeuda
(
Cod_EstadoDeuda  integer not null auto_increment,
DescripcionEstadoDeuda varchar(16),
primary key (Cod_EstadoDeuda)
)ENGINE = INNODB;

create table Persona
(
Cod_Persona  integer not null auto_increment,
Id_Persona integer not null unique,
Cod_Tipo_Indentificacion integer not null,
Cod_Genero integer not null,
Nombre_Cliente varchar(50) not null,
Apellido1_Cliente varchar(50) not null,
Apellido2_Cliente varchar(50) not null,
Fecha_Nacimiento date not null,
Fecha_ingreso date not null,
Fecha_retiro date,
Telefono_Contacto varchar(20) not null,
Direccion varchar(50) not null,
Estado_Persona integer not null,
correo_Persona varchar(70) not null,
primary key (Cod_Persona),
foreign key (Cod_Tipo_Indentificacion) references TipoDocumento(Cod_Tipo_Indentificacion),
foreign key (Cod_Genero) references Genero(Cod_Genero),
foreign key (Estado_Persona) references EstadoPersona(Cod_EstadoPersona)
)ENGINE = INNODB;

ALTER TABLE `Persona` ADD UNIQUE(`Correo_Persona`);

create table Aportes
(
Cod_Pago integer not null auto_increment,
Cod_Persona integer not null,
FechaPagoAporte datetime not null,
ValorPago integer not null,
Referencia integer not null,
primary key (Cod_Pago),
foreign key (Cod_Persona) references Persona(Cod_Persona)
)ENGINE = INNODB;

create table Deuda
(
Cod_Deuda integer not null auto_increment,
Cod_Persona integer not null,
Cod_EstadoDeuda integer not null,
Cod_TipoDeuda integer not null,
Valor integer not null,
primary key (Cod_Deuda),
foreign key (Cod_Persona) references Persona(Cod_Persona),
foreign key (Cod_EstadoDeuda) references EstadoDeuda(Cod_EstadoDeuda),
foreign key (Cod_TipoDeuda) references TipoDeuda(Cod_TipoDeuda)
)ENGINE=INNODB;

create table AbonoDeuda
(
Cod_Abono integer not null auto_increment,
Cod_Deuda integer not null,
Abono integer not null,
primary key (Cod_Abono),
foreign key (Cod_Deuda) references Deuda(Cod_Deuda)
)ENGINE=INNODB;


create table PreguntasRecomendadas
(
Cod_Pregunta integer not null auto_increment,
Pregunta varchar(100) not null unique,
primary key (Cod_Pregunta)
)ENGINE=INNODB;


create table Administrador
(
Cod_Administrador integer not null auto_increment,
NombreAdmin varchar(20) not null unique,
Contraseña varchar(20) not null,
Pregunta integer not null,
Respuesta varchar(50) not null,
primary key (Cod_Administrador),
foreign key (Pregunta) references PreguntasRecomendadas(Cod_Pregunta)    
)ENGINE=INNODB;


create table Historial
(
Cod_Historial integer not null,
Fecha datetime not null,
Cod_Administrador integer not null,
Cod_Persona integer,
primary key (Cod_Historial),
foreign key (Cod_Administrador) references Administrador(Cod_Administrador),
foreign key (Cod_Persona) references Persona(Cod_Persona)
)ENGINE=INNODB;

 INSERT INTO `EstadoPersona` (`Cod_EstadoPersona`, `DescripcionEstadoPersona`) VALUES (NULL, 'Activo'),(NULL, 'InActivo'),(NULL, 'Activo Con deuda'), (NULL, 'Retirado');
 
 INSERT INTO `Genero` (`Cod_Genero`, `DescripcionGenero`) VALUES (NULL, 'Masculino'),(NULL, 'Femenino'),(NULL, 'Otro');
 
 INSERT INTO `TipoDocumento` (`Cod_Tipo_Indentificacion`, `DescripcionTipoDoc`) VALUES (NULL, 'CC'),(NULL, 'TI'),(NULL, 'CE'),(NULL, 'NIT'),(NULL, 'Otro');

INSERT INTO `EstadoDeuda` (`Cod_EstadoDeuda`, `DescripcionEstadoDeuda`) VALUES (NULL, 'Pagada'), (NULL, 'Activa');

INSERT INTO PreguntasRecomendadas (Cod_Pregunta,Pregunta) VALUES (NULL,'CÚAL ES EL NOMBRE DE TU MADRE');

INSERT INTO `Administrador` (`Cod_Administrador`, `NombreAdmin`, `Contraseña`, `Pregunta`, `Respuesta`) VALUES (NULL, 'Admin2', '123456',1, 'Juan');

