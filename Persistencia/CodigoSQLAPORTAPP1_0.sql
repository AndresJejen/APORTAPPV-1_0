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
foreign key (Cod_TipoDeuda) references TipoDeuda(Cod_TipoDeuda),
)ENGINE=INNODB;

create table AbonoDeuda
(
Cod_Abono integer not null auto_increment,
Cod_Deuda integer not null,
Abono integer not null,
primary key (Cod_Abono),
foreign key (Cod_Deuda) references Deuda(Cod_Deuda)
)ENGINE=INNODB;

create table Administrador
(
Cod_Administrador integer not null auto_increment,
NombreAdmin varchar(20) not null unique,
Contraseña varchar(20) not null,
Pregunta varchar(50) not null,
Respuesta varchar(50) not null,
primary key (Cod_Administrador)
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


