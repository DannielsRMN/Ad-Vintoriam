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
    fechaIngreso date,
    fechaReporte date
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
    total decimal(8,2),
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