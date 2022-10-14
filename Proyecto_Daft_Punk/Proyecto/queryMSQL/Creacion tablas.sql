CREATE TABLE tb_continentes(
    id_registro BIGINT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR (200),
    fec_cre DATE DEFAULT NOW()
);

CREATE TABLE tb_usuarios (
    id_registro BIGINT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR (200),
    apellido VARCHAR (200),
    correo VARCHAR (255),
    edad INTEGER,
    id_continentes BIGINT,
    clave TEXT, 
    fec_cre DATE DEFAULT NOW()
);
