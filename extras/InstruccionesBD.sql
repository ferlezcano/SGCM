--Crear base de datos con nombre "sgcm"

create TABLE usuario (
    id_usuario serial NOT NULL,
    nombre character varying(50) NOT NULL,
    apellido character varying(50) NOT NULL,
    usuario character varying(10) NOT NULL,
    correo_electronico character varying(100),
    ult_conexion timestamp without time zone,
    estado character varying(1) NOT NULL,
    usu_alta character varying(10) NOT NULL,
    fecha_alta timestamp without time zone NOT NULL,
    usu_mod character varying(10),
    fecha_mod timestamp without time zone,
    contrasenha character varying(100) NOT NULL,
    CONSTRAINT pk_usuario PRIMARY KEY (id_usuario)
);

insert into usuario (nombre, apellido, usuario,estado,usu_alta,fecha_alta,contrasenha)
values ('Fernando', 'Lezcano Miranda', 'ferlezcano', 'A', 'admin', now(), '39edd2da41552996f897bf8b659492a8')
