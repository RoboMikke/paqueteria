--Tabla provincia
CREATE TABLE provincia(
    codigo_provincia VARCHAR(5) PRIMARY KEY NOT NULL,
    nombre_provincia VARCHAR(20) NOT NULL
);

--Tabla destinatario
CREATE TABLE destinatario(
    pk_destinatario INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    destinatario VARCHAR(30) NOT NULL COMMENT'Nombre del destinatario',
    direccion_destinatario TEXT NOT NULL
);

--Tabla poblacion


--Tabla camion


-- Tabla camionero


--Tabla camionero_camion


--Tabla paquete