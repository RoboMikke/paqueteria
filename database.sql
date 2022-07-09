--Tabla provincia
CREATE TABLE provincia(
    codigo_provincia VARCHAR(5) PRIMARY KEY NOT NULL,
    nombre_provincia VARCHAR(20) NOT NULL
);

--Tabla destinatario
CREATE TABLE destinatario(
    pk_destinatario INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    destinatario VARCHAR(30) NOT NULL COMMENT 'Nombre del destinatario',
    direccion_destinatario TEXT NOT NULL
);

--Tabla poblacion
CREATE TABLE poblacion(
    pk_poblacion INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    poblacion VARCHAR(20) NOT NULL COMMENT 'Estado'
);

--Tabla camion
CREATE TABLE camion(
    matricula VARCHAR(7) PRIMARY KEY NOT NULL,
    modelo VARCHAR(20) NOT NULL,
    tipo VARCHAR(20) NOT NULL,
    potencia VARCHAR(20) NOT NULL
);

-- Tabla camionero
CREATE TABLE camionero(
    dni VARCHAR(9) PRIMARY KEY NOT NULL,
    nombre VARCHAR(20) NOT NULL,
    primer_apellido VARCHAR(20) NOT NULL,
    segundo_apellido VARCHAR(20) NULL,
    telefono VARCHAR(10) NOT NULL,
    salario DECIMAL(8,2) NOT NULL,
    fk_poblacion INT NOT NULL,
    FOREIGN KEY (fk_poblacion) REFERENCES poblacion (pk_poblacion)
);

--Tabla camionero_camion
CREATE TABLE camionero_camion(
    pk_camionero_camion INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    fk_camionero VARCHAR(9) NOT NULL,
    fk_camion VARCHAR(7) NOT NULL,
    fecha DATE NOT NULL COMMENT 'Fecha de conduccion',
    FOREIGN KEY(fk_camionero) REFERENCES camionero (dni),
    FOREIGN KEY(fk_camion) REFERENCES camion (matricula)
);

--Tabla paquete
CREATE TABLE paquete(
    codigo_paquete VARCHAR(5) PRIMARY KEY NOT NULL,
    descripcion TEXT NOT NULL,
    fk_destinatario INT NOT NULL,
    fk_camionero VARCHAR(9) NOT NULL COMMENT 'DNI del camionero',
    fk_provincia VARCHAR(5) NOT NULL COMMENT 'codigo de provincia',
    FOREIGN KEY (fk_destinatario) REFERENCES destinatario (pk_destinatario),
    FOREIGN KEY (fk_camionero) REFERENCES camionero (dni),
    FOREIGN KEY (fk_provincia) REFERENCES provincia (codigo_provincia)
)