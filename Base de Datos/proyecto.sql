create database YOU_SCHOOLINE;
use YOU_SCHOOLINE;

create table alumno
(
id_estudiante int (2) primary key auto_increment, 
nombre varchar(60) not null, 
apellido varchar(60) not null, 
contraseña varchar(20) not null, 
correo varchar (60)not null, 
edad int(2)not null,
sexo char(1)not null,
telefono varchar(10)not null
);

create table docente
(
id_docente  int (6) primary key  auto_increment, 
nombre varchar(60) not null, 
apellido varchar(60) not null, 
contraseña varchar(20) not null, 
correo varchar (50)not null, 
sexo char(1)not null,
telefono varchar(10)not null,
cargo varchar(20) 
);

create table asignatura
(
id_asignatura  int(10)primary key auto_increment,
asignatura varchar(20)not null,

id_docente int(6)not null,
constraint fk_docente_asignatura
foreign key (id_docente)
references docente(id_docente)
);

create table curso
(
id_curso int(4)primary key auto_increment,

id_asignatura int(10) not null,
constraint fk_asignatura_curso
foreign key (id_asignatura)
references asignatura(id_asignatura)
);


create table matricula
(
id_matricula int(3)primary key auto_increment,

id_curso int (4)not null,
constraint fk_curso_matricula
foreign key(id_curso)
references curso(id_curso),


id_estudiante int(10) not null,

constraint fk_alumno_matricula
foreign key (id_estudiante)
references alumno(id_estudiante)
);


create table evaluacion
(
id_evaluacion int (8)primary key auto_increment,
calificacion float(5.0)not null,
duracion time not null, 

id_estudiante int(10) not null,
constraint fk_alumno_evaluacion
foreign key (id_estudiante)
references alumno(id_estudiante),

id_docente int(6)not null,
constraint fk_docente_evaluacion
foreign key (id_docente)
references docente(id_docente)
);

create table reporte_resultado
(
id_reporte_resultado int(5)primary key auto_increment,  
observaciones varchar(100)not null,

id_estudiante int(10) not null,
constraint fk_alumno_reporte_resultado
foreign key (id_estudiante)
references alumno(id_estudiante),

id_evaluacion int (8) not null,
constraint fk_evaluacion_reporte_resultado
foreign key (id_evaluacion)
references evaluacion(id_evaluacion),

id_asignatura int(10) not null,
constraint fk_asignatura_reporte_resultado
foreign key (id_asignatura)
references asignatura(id_asignatura)
);

create table coordinador
 (
 id_coordinador  int (6) primary key  auto_increment, 
 nombre varchar(20) not null, 
 apellido varchar(20) not null, 
 contraseña varchar(20) not null, 
 correo varchar (20)not null, 
 sexo char(1)not null,
 telefono varchar(10)not null,
 cargo varchar(20),
 
 id_docente int(6)not null,
 constraint fk_docente_coordinador
 foreign key (id_docente)
 references docente (id_docente)
);

create table modificacion
(
id_modificacion int(8)primary key auto_increment,
fechaModificacion datetime not null,
observaciones varchar(100) not null,

id_matricula int(3) not null,
constraint fk_matricula_modificacion
foreign key (id_matricula)
references matricula(id_matricula),

id_asignatura int(10) not null,
constraint fk_asignatura_modificacion
foreign key (id_asignatura)
references asignatura(id_asignatura),

id_evaluacion int (8) not null,
constraint fk_evaluacion_modificacion
foreign key (id_evaluacion)
references evaluacion(id_evaluacion),

id_docente int(6)not null,
constraint fk_docente_modificacion
foreign key (id_docente)
references docente(id_docente),

id_coordinador int(6)not null,
constraint fk_coordinador_modificacion
foreign key (id_coordinador)
references coordinador(id_coordinador)
);


insert into alumno values ('1','Carlos Antonio', 'Rojas Garcia', 'joseesputo', 'carlosrojas21@gmail.com', '15', 'M', '3158364837');
insert into alumno values ('2','Eduar Stiven', 'Zamora Luna','asfethyjw', 'eduarstiven@gmail.com', '16', 'M', 3173742648);
insert into alumno values ('3','Jennifer Tatiana', 'Rojas Garcia','esdethyks', 'tatigarcias22@gmail.com', '15', 'F', '3204756352');
insert into alumno values ('4','Alison Tatiana', '','Kdksdjskd236', 'alitatiana22@gmail.com', '16', 'F', '3183647246'); 
insert into alumno values ('5','Cristian Alexander', 'Agudelo Gonzalez','tjsrngq12', 'alex173757@gmail.com', '14', 'M', '3053487585');
insert into alumno values ('6','Juan David', 'Ballesteros Urrea','qwertyui23', 'naujdavid2002.02@gmail.com', '16', 'M', '3103130118');
insert into alumno values ('7','Dainer Jhojan', 'Beltran Rodriguez','zxcvbnmw12', 'dainert29@gmail.com', '15', 'M', '3114498676');
insert into alumno values ('8','andres sneyder ', 'celis ardila','Kmbtj5423', 'andresceli1407@outlook.com', '15', 'M', '3214387336');
insert into alumno values ('9','Brayan Andrés', 'Cubillos Camelo.','sjdyensk45', 'brayan12091997@gmail.com', '15', 'M', '3022120502');
insert into alumno values ('10','Daniel Mauricio ', 'Devia Rodriguez','kdsmsndn77', 'danmao2602@gmail.com', '16', 'M', '3143896840');
insert into alumno values ('11','Edwards junior', 'figueroa estanislao','sjnshrw84', 'edwards.figueroa11@gmail.com', '15', 'M', '3229332848');
insert into alumno values ('12','Brayan Stevan', 'Galeano Muñoz','Kjftskcm55s', 'brayangaleano06@gmail.com', '14', 'M', '3004801663');
insert into alumno values ('13','Marlon Yamid', 'Gonzalez Garcia','Jsjahsjs44s', 'nicolasgarciab85@gmail.com', '15', 'M', '3138980260');
insert into alumno values ('14','Andrés felipe', 'Guzmán cabezas','PIGPIG22', 'andresf145guzman@gmail.com', '15', 'M', '3204845667');
insert into alumno values ('15','Bryan Stalin', 'Jimeneze Torres','windows3421', 'brstalinho@hotmail.com', '16', 'M', '3209339809');
insert into alumno values ('16','Juan pablo', 'Marin Osorio','door25485', 'juanpmarin222@gmail.com', '16', 'M', '3115619717');
insert into alumno values ('17','Leidy Johana', 'Marulanda Hernandez','Maruhe382', 'marulandaleidyjohanah@gmail.com', '16', 'F', '3126120301');
insert into alumno values ('18','Sergio Esteban ', 'Medina Ariza','darkphonix6253', 'Sergiomedina321321@gmail.com', '17', 'M', '3017854851');
insert into alumno values ('19','Victor Manuel', 'Molina Castiblanco','fornite666', 'victormanuel.molinacastiblanco@gmail.com', '16', 'M', '3148797626');
insert into alumno values ('20','anyi liced', 'ruiz suarez','Morena69', 'alrsuarez@hotmail.com', '16', 'F', '3126136037');
insert into alumno values ('21','Julieth alejandra ', 'Calderon Barragan','blackjack22', 'alejacalderon24@gmail.com', '17', 'F', '3207392548');
insert into alumno values ('22','Angie Alexandra', 'Saavedra Grajales','Kofla29121', 'saavedraan06@gmail.com', '16', 'F', '3132721979');
insert into alumno values ('23','Danna', 'Saavedra Moreno','poirhsysj44', 'Dasavedra45@gmail.com', '15', 'F', '3172946184');
insert into alumno values ('24','Julian Andres', 'vargas aguilar ','mnbvcdsdx22', 'sihjulian@hotmail.com', '17', 'M', '3016853226');
insert into alumno values ('25','Dilan Camilo', 'Plazas Olivos','elñero23812', 'dilan.olivos2015@gmail.com', '17', 'M', '3219152179');
insert into alumno values ('26','Andrea', 'Rojas Garcia','Lodjds443', 'andrerojas44@gmail.com', '15', 'F', '3179254916');
insert into alumno values ('27','Carlos Sebastian', 'Moreno Herrera','mcnsdsdkjk342', 'Carlosmoreno@gmail.com', '15', 'M', '3173749252');
insert into alumno values ('28','Valeria Beltran', 'Pacheco Rueda','yevsdkssj44', 'vale25482', '16', 'F', '3204719462');
insert into alumno values ('29','Brandon', 'Varon Herrera','lolforever44', 'brandonvaron45@gmail.com', '17', 'M', '3202446584');
insert into alumno values ('30','Laura Camila', 'Herrera Garcia','amogatitos44', 'lauraherrera@gmail.com', '16', 'F', '3159265837');
insert into alumno values ('31','Ana Maria', 'Cardozo Olivos','ksydnskd44', 'mariacardo55@gmail.com', '16', 'F', '3117352948');
insert into alumno values ('32','Roxi Camila', 'Cardenas Galindo','amdsdxs44', 'Roxgalindo23@gmail.com', '15', 'F', '3155391652');

select * from asignatura;
delete from alumno where alumno . id_estudiante = 31;
delete from alumno where alumno . id_estudiante = 32;

insert into docente values ('1', 'Jose Maria', 'Molina Ariza', 'Prototibus6472', 'Josemolina7253@Outlook.es', 'M', '3207592648', 'Maestro');
insert into docente values ('2', 'Gloria Edith', 'Solano Rueda', 'Golla1973', 'ja6974453gmail@Outlook.es', 'F', '3202239157', 'Maestra');
insert into docente values ('3', 'Carlos Andres', 'Acosta Grajales', 'ronco729723', 'ronco2000@hotmail.com', 'M', '3129373629', 'Maestro');
insert into docente values ('4', 'Nelly Andrea', 'Moreno Aguilar', 'Bologas2345', 'Nelly1968@hotmail.com', 'F', '3129373629', 'Maestra');
insert into docente values ('5', 'Marco', 'Medina Olivos', 'Jaksuesks22', 'Medinamarco34@gmail.com', 'M', '3169153853', 'Maestro');
insert into docente values ('6', 'Nelly Graciela', 'Guzman Garcia', '723uwjtsks', 'Nellyguzman@hotmail.com', 'M', '3141059683', 'Maestra');
insert into docente values ('7', 'Omar Andres', 'Saavedra Zabala', 'Blackcuervo22', 'Omarzaba332@hotmail.com', 'M', '3106292558', 'Maestro');


insert into asignatura values ('1', 'Español', '2');
insert into asignatura values ('2', 'Matematicas', '5');
insert into asignatura values ('3', 'Ingles', '7');
insert into asignatura values ('4', 'Tecnologia', '1');
insert into asignatura values ('5', 'Sociales', '3');
insert into asignatura values ('6', 'Fisica', '6');
insert into asignatura values ('7', 'Biologia', '4');
insert into asignatura values ('8', 'Geologia', '7');

update asignatura 
set id_docente = 5	
where id_asignatura = 5;
