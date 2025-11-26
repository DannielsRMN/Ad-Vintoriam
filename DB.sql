Create database Dimesaur;
Use Dimesaur;

Create table usuario(
	id int primary key auto_increment,
    username varchar(100) not null,
    password_hash varchar(150) not null,
    fullname varchar(150) null,
    limiteDiario decimal(5,2),
    presupuesto decimal(8,2),
    telefono varchar(9) not null,
    fondosTotal decimal(10,2) not null default (0)
);

Create table categoria(
	id int primary key auto_increment,
    nombre varchar(150) not null,
    descripcion varchar(250) null
);

Create table gasto(
	id int primary key auto_increment,
    nombre varchar(150) not null,
    descripcion varchar(250) null,
    precioUnitario decimal(5,2) not null,
    cantidad int not null,
    usuario int,
    categoria int,
    
    foreign key (usuario) references usuario(id),
    foreign key (categoria) references categoria(id)
);

Create table ingreso(
	id int primary key auto_increment,
    descripcion varchar(250) null,
    monto decimal(8,2) not null,
	tipoIngreso varchar(100) not null,
	fechaIngreso date,
    horaIngreso time,
    usuario int,
    
    foreign key (usuario) references usuario(id)
);

Insert Into categoria (nombre, descripcion) values ("Transporte", "Gastos realizados en la movilización y transporte entre locaciones (p. ej., bus, taxi, combustible)");
Insert Into categoria (nombre, descripcion) values ("Alimentación", "Gastos asociados a la compra de comida, abarrotes, restaurantes y bebidas.");
Insert Into categoria (nombre, descripcion) values ("Hogar y Vivienda", "Costos relacionados con el alquiler, hipoteca, mantenimiento, reparaciones y artículos para el hogar.");
Insert Into categoria (nombre, descripcion) values ("Ocio y Entretenimiento", "Gastos destinados a actividades recreativas, cine, deportes, viajes cortos y pasatiempos.");
Insert Into categoria (nombre, descripcion) values ("Educación", "Inversiones en formación académica, matrícula, libros, cursos, talleres y materiales de estudio.");
Insert Into categoria (nombre, descripcion) values ("Misceláneos", "Egresos varios o poco frecuentes que no encajan en las otras categorías (p. ej., donaciones, regalos, multas).");
Insert Into categoria (nombre, descripcion) values ("Servicio de Internet", "Costo fijo o variable del servicio de acceso a internet en el hogar o móvil.");
Insert Into categoria (nombre, descripcion) values ("Servicio de Luz", "Gasto mensual correspondiente al consumo de energía eléctrica.");
Insert Into categoria (nombre, descripcion) values ("Servicio de Agua", "Gasto mensual correspondiente al consumo de agua potable y alcantarillado.");
Insert Into categoria (nombre, descripcion) values ("Servicio de Telefonía", "Costo asociado a planes móviles o fijos, recargas y llamadas.");

INSERT INTO `dimesaur`.`usuario` (`username`, `password_hash`, `fullname`, `limiteDiario`, `presupuesto`, `telefono`, `fondosTotal`) VALUES ('DannielsRMN', 'contraseña', 'Danniels Rafael Martel Neira', '67', '4500', '965865859', '45000');

INSERT INTO `dimesaur`.`gasto` (`nombre`, `descripcion`, `precioUnitario`, `cantidad`, `usuario`, `categoria`) VALUES ('Cuaderno', 'Estudio', '16', '5', '1', '6');
INSERT INTO `dimesaur`.`gasto` (`nombre`, `descripcion`, `precioUnitario`, `cantidad`, `usuario`, `categoria`) VALUES ('Slime Rancher', 'Steam', '17', '1', '1', '4');
INSERT INTO `dimesaur`.`gasto` (`nombre`, `descripcion`, `precioUnitario`, `cantidad`, `usuario`, `categoria`) VALUES ('Mouse', 'Electrodomestico', '81', '2', '1', '5');
INSERT INTO `dimesaur`.`gasto` (`nombre`, `descripcion`, `precioUnitario`, `cantidad`, `usuario`, `categoria`) VALUES ('Banderola', 'Decoracion', '167', '2', '1', '2');
INSERT INTO `dimesaur`.`gasto` (`nombre`, `descripcion`, `precioUnitario`, `cantidad`, `usuario`, `categoria`) VALUES ('Monitor', 'Comida', '541', '1', '1', '5');
INSERT INTO `dimesaur`.`gasto` (`nombre`, `descripcion`, `precioUnitario`, `cantidad`, `usuario`, `categoria`) VALUES ('Hosting', 'Servicio', '16', '5', '1', '1');
