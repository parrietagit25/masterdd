/****** Script for SelectTopNRows command from SSMS  ******/
SELECT TOP (1000) [id]
      ,[codigo]
      ,[descripcion]
      ,[detalle_programa]
  FROM [masterdd].[dbo].[codigos]

  INSERT INTO codigos (codigo, descripcion, detalle_programa)VALUES('1PPEP', 'Alcalde', 'Profesion de persona expuesta politicamente Alcalde');
INSERT INTO codigos (codigo, descripcion, detalle_programa)VALUES('2PPEP', 'Concejal', 'Profesion de persona expuesta politicamente Concejal');
INSERT INTO codigos (codigo, descripcion, detalle_programa)VALUES('3PPEP', 'Contralor', 'Profesion de persona expuesta politicamente Contralor');
INSERT INTO codigos (codigo, descripcion, detalle_programa)VALUES('4PPEP', 'Diputado', 'Profesion de persona expuesta politicamente Diputado');
INSERT INTO codigos (codigo, descripcion, detalle_programa)VALUES('5PPEP', 'Director de la UAF', 'Profesion de persona expuesta politicamente Director de la UAF');
INSERT INTO codigos (codigo, descripcion, detalle_programa)VALUES('6PPEP', 'Director general', 'Profesion de persona expuesta politicamente Director general');
INSERT INTO codigos (codigo, descripcion, detalle_programa)VALUES('7PPEP', 'Director nacional', 'Profesion de persona expuesta politicamente Director nacional');
INSERT INTO codigos (codigo, descripcion, detalle_programa)VALUES('8PPEP', 'Director provincial', 'Profesion de persona expuesta politicamente Director provincial');
INSERT INTO codigos (codigo, descripcion, detalle_programa)VALUES('9PPEP', 'Director regional', 'Profesion de persona expuesta politicamente Director regional');
INSERT INTO codigos (codigo, descripcion, detalle_programa)VALUES('10PPEP' , 'Fiscal de Cuentas', 'Profesion de persona expuesta politicamente Fiscal de Cuentas');
INSERT INTO codigos (codigo, descripcion, detalle_programa)VALUES('11PPEP' , 'Fiscal Superir', 'Profesion de persona expuesta politicamente Fiscal Superir');
INSERT INTO codigos (codigo, descripcion, detalle_programa)VALUES('12PPEP' , 'Gobernador', 'Profesion de persona expuesta politicamente Gobernador');
INSERT INTO codigos (codigo, descripcion, detalle_programa)VALUES('13PPEP' , 'Magistrado de la Corte Suprema de Justicia', 'Profesion de persona expuesta politicamente Magistrado de la Corte Suprema de Justicia');
INSERT INTO codigos (codigo, descripcion, detalle_programa)VALUES('14PPEP' , 'Magistrado del Tribunal de Cuentas', 'Profesion de persona expuesta politicamente Magistrado del Tribunal de Cuentas');
INSERT INTO codigos (codigo, descripcion, detalle_programa)VALUES('15PPEP' , 'Ministro consejero', 'Profesion de persona expuesta politicamente Contralor');
INSERT INTO codigos (codigo, descripcion, detalle_programa)VALUES('16PPEP' , 'Ministro de Estado', 'Profesion de persona expuesta politicamente Ministro de Estado');
INSERT INTO codigos (codigo, descripcion, detalle_programa)VALUES('17PPEP' , 'Presidente de la República', 'Profesion de persona expuesta politicamente Presidente de la República');
INSERT INTO codigos (codigo, descripcion, detalle_programa)VALUES('18PPEP' , 'Procurador General de la Administración', 'Profesion de persona expuesta politicamente Procurador General de la Administración');
INSERT INTO codigos (codigo, descripcion, detalle_programa)VALUES('19PPEP' , 'Procurador General de la Nación', 'Profesion de persona expuesta politicamente Procurador General de la Nación');
INSERT INTO codigos (codigo, descripcion, detalle_programa)VALUES('20PPEP' , 'Secretario general', 'Profesion de persona expuesta politicamente Secretario general');
INSERT INTO codigos (codigo, descripcion, detalle_programa)VALUES('21PPEP' , 'Subcontralor', 'Profesion de persona expuesta politicamente Subcontralor');
INSERT INTO codigos (codigo, descripcion, detalle_programa)VALUES('22PPEP' , 'Subdirector de la UAF', 'Profesion de persona expuesta politicamente Subdirector de la UAF');
INSERT INTO codigos (codigo, descripcion, detalle_programa)VALUES('23PPEP' , 'Subdirector general', 'Profesion de persona expuesta politicamente Subdirector general');
INSERT INTO codigos (codigo, descripcion, detalle_programa)VALUES('24PPEP' , 'Subdirector nacional', 'Profesion de persona expuesta politicamente Subdirector nacional');
INSERT INTO codigos (codigo, descripcion, detalle_programa)VALUES('25PPEP' , 'Subdirector provincial', 'Profesion de persona expuesta politicamente Subdirector provincial');
INSERT INTO codigos (codigo, descripcion, detalle_programa)VALUES('26PPEP' , 'Subdirector regional', 'Profesion de persona expuesta politicamente Subdirector regional');
INSERT INTO codigos (codigo, descripcion, detalle_programa)VALUES('27PPEP' , 'Subintendente', 'Profesion de persona expuesta politicamente Subintendente');
INSERT INTO codigos (codigo, descripcion, detalle_programa)VALUES('28PPEP' , 'Subsecretario general', 'Profesion de persona expuesta politicamente Subsecretario general');
INSERT INTO codigos (codigo, descripcion, detalle_programa)VALUES('29PPEP' , 'Superintendente', 'Profesion de persona expuesta politicamente Superintendente');
INSERT INTO codigos (codigo, descripcion, detalle_programa)VALUES('30PPEP' , 'Vicegobernador', 'Profesion de persona expuesta politicamente Vicegobernador');
INSERT INTO codigos (codigo, descripcion, detalle_programa)VALUES('31PPEP' , 'Viceministro', 'Profesion de persona expuesta politicamente Viceministro');
INSERT INTO codigos (codigo, descripcion, detalle_programa)VALUES('32PPEP' , 'Vicepresidente de la República', 'Profesion de persona expuesta politicamente Vicepresidente de la República');
INSERT INTO codigos (codigo, descripcion, detalle_programa)VALUES('33PPEP' , 'Otro', 'Profesion de persona expuesta politicamente Otro');


select * from cc_generales

67805034

INSERT INTO cc_generales (
fg_primer_nombre, 
fg_segundo_nombre, 
fg_apellido_paterno, 
fg_apellido_materno, 
fg_apellido_casada, 
fg_fecha_nacimiento, 
fg_cedula, 
fg_direccion_residencial, 
fg_telefono_residencia, 
fg_telefono_movil, 
fg_stat, 
fg_id_user) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)

INSERT INTO cc_generales (fg_primer_nombre, fg_segundo_nombre, fg_apellido_paterno, fg_apellido_materno, fg_apellido_casada, fg_fecha_nacimiento, fg_cedula, fg_direccion_residencial, fg_telefono_residencia, fg_telefono_movil, fg_stat, fg_id_user) 
VALUES ('2', '2', '2', '2', '2', '03 May, 2023', '2', '2', '2', '2', '1', '1')

INSERT INTO cc_declaracion (fd_actividad_principal, fd_otras_fuentes, fd_limite_compra, fd_forma_pago_1, fd_metodo_pago_1, fd_metodo_pago_2, id_general) 
VALUES 
('80FUE', '84FUE', '96LIM', '91FDP', '102MDP', '104MDP', '')

select * from cc_declaracion; //listo
select * from cc_uso_interno; // probar
select * from cc_adjuntos; // pasar la ruta de los documentos
select * from cc_beneficiario; //  probar
select * from cc_declaracion_jurada; // pasar la ruta de los documentos
select * from cc_generales; //  probar
select * from cc_ocupacionales; //  probar
select * from cc_personas_expuestas; //  verificar
select * from cc_referencias; // listo
select * from cc_terceros_autorizados; //  verificar


ALTER TABLE cc_declaracion
ALTER COLUMN fd_otras_fuentes VARCHAR(6);

ALTER TABLE cc_declaracion
ALTER COLUMN fd_limite_compra VARCHAR(6);

ALTER TABLE cc_declaracion
ALTER COLUMN fd_metodo_pago_1 VARCHAR(6);

ALTER TABLE cc_declaracion
ALTER COLUMN fd_metodo_pago_2 VARCHAR(6);

ALTER TABLE cc_declaracion
ALTER COLUMN fd_forma_pago_1 VARCHAR(6);

////////////////////////////////////////////////////////

ALTER TABLE cc_uso_interno
ALTER COLUMN fui_aprobacion_1 VARCHAR(6);

ALTER TABLE cc_uso_interno
ALTER COLUMN fui_aprobacion_2 VARCHAR(6);

ALTER TABLE cc_uso_interno
ALTER COLUMN fui_aprobacion_3 VARCHAR(6);

ALTER TABLE cc_uso_interno
ALTER COLUMN fui_aprobacion_4 VARCHAR(6);

ALTER TABLE cc_uso_interno
ALTER COLUMN ft_pais_residencia VARCHAR(6);

ALTER TABLE cc_uso_interno
ALTER COLUMN ft_pais_residencia_fiscal VARCHAR(6);

ALTER TABLE cc_uso_interno
ALTER COLUMN ft_profesion VARCHAR(6);

ALTER TABLE cc_uso_interno
ALTER COLUMN ft_ocupacion VARCHAR(6);

/////////////////////////////////////////////////////////////////

