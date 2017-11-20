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
values ('Fernando', 'Lezcano Miranda', 'ferlezcano', 'A', 'ferlezcano', now(), '39edd2da41552996f897bf8b659492a8');
insert into usuario (nombre, apellido, usuario,estado,usu_alta,fecha_alta,contrasenha)
values ('Lisa', 'Argüello', 'larguello', 'A', 'ferlezcano', now(), '1fa9730d29c5e78814a43092b6b8d3b0');


CREATE TABLE rol (
    id_rol serial NOT NULL,
    nombre character varying(10) NOT NULL,
    descripcion character varying(100) NOT NULL,
    estado character varying(1) NOT NULL,
    usu_alta character varying(10) NOT NULL,
    fecha_alta timestamp without time zone NOT NULL,
    usu_mod character varying(10),
    fecha_mod timestamp without time zone,
    CONSTRAINT pk_rol PRIMARY KEY (id_rol)   
);

insert into rol (nombre,descripcion,estado,usu_alta,fecha_alta) values ('Operador', 'Operador', 'A', 'ferlezcano', now());
insert into rol (nombre,descripcion,estado,usu_alta,fecha_alta) values ('Supervisor', 'Supervisor', 'A', 'ferlezcano', now());

CREATE TABLE rol_x_usuario (
    id_rol integer,
    id_usuario integer
);
ALTER TABLE rol_x_usuario ADD CONSTRAINT "FK_rol_id_rol" FOREIGN KEY (id_rol) REFERENCES rol(id_rol);
ALTER TABLE rol_x_usuario ADD CONSTRAINT "FK_usuario_id_usuario" FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario);

insert into rol_x_usuario values (1,1);
insert into rol_x_usuario values (2,2);

CREATE TABLE opcion (
    id_opcion serial NOT NULL,
    nombre character varying(100) NOT NULL,
    descripcion character varying(100) NOT NULL,
    url character varying(500) NOT NULL,
    estado character varying(1) NOT NULL,
    usu_alta character varying(10) NOT NULL,
    fecha_alta timestamp without time zone NOT NULL,
    usu_mod character varying(10),
    fecha_mod timestamp without time zone,
    CONSTRAINT pk_opcion PRIMARY KEY (id_opcion)
);

insert into opcion (nombre,descripcion,url,estado,usu_alta,fecha_alta) values ('Inicio','Página inicial', '/SGCM/pages/index.php','A', 'ferlezcano',now());
insert into opcion (nombre,descripcion,url,estado,usu_alta,fecha_alta) values ('Listado de pacientes','Listado de pacientes', '/SGCM/pages/pacienteList.php','A', 'ferlezcano',now());

select * from opcion

create TABLE opciones_x_rol (
    id_opcion integer NOT NULL,
    id_rol integer NOT NULL
);
ALTER TABLE ONLY opciones_x_rol ADD CONSTRAINT fk_opciones_relations_opcion FOREIGN KEY (id_opcion) REFERENCES opcion(id_opcion) ON UPDATE RESTRICT ON DELETE RESTRICT;
ALTER TABLE ONLY opciones_x_rol ADD CONSTRAINT fk_opciones_relations_rol FOREIGN KEY (id_rol) REFERENCES rol(id_rol) ON UPDATE RESTRICT ON DELETE RESTRICT;

insert into opciones_x_rol values (1,1);
insert into opciones_x_rol values (1,2);
insert into opciones_x_rol values (2,2);



