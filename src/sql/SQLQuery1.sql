/****** Script for SelectTopNRows command from SSMS  ******/
SELECT TOP (1000) [id]
      ,[nombre]
      ,[email]
      ,[password]
      ,[tipo_user]
      ,[stat]
  FROM [masterdd].[dbo].[usuarios]

CREATE TABLE paises (
id int not null IDENTITY(1,1) primary key,
codigo varchar(2),
nombre varchar(80)
);

select * from paises;
INSERT INTO paises (codigo, nombre) VALUES('AF', 'Afganistán');
INSERT INTO paises (codigo, nombre) VALUES('AX', 'Islas Gland');
INSERT INTO paises (codigo, nombre) VALUES('AL', 'Albania');
INSERT INTO paises (codigo, nombre) VALUES('DE', 'Alemania');
INSERT INTO paises (codigo, nombre) VALUES('AD', 'Andorra');
INSERT INTO paises (codigo, nombre) VALUES('AO', 'Angola');
INSERT INTO paises (codigo, nombre) VALUES('AI', 'Anguilla');
INSERT INTO paises (codigo, nombre) VALUES('AQ', 'Antártida');
INSERT INTO paises (codigo, nombre) VALUES('AG', 'Antigua y Barbuda');
INSERT INTO paises (codigo, nombre) VALUES('AN', 'Antillas Holandesas');
INSERT INTO paises (codigo, nombre) VALUES('SA', 'Arabia Saudí');
INSERT INTO paises (codigo, nombre) VALUES('DZ', 'Argelia');
INSERT INTO paises (codigo, nombre) VALUES('AR', 'Argentina');
INSERT INTO paises (codigo, nombre) VALUES('AM', 'Armenia');
INSERT INTO paises (codigo, nombre) VALUES('AW', 'Aruba');
INSERT INTO paises (codigo, nombre) VALUES('AU', 'Australia');
INSERT INTO paises (codigo, nombre) VALUES('AT', 'Austria');
INSERT INTO paises (codigo, nombre) VALUES('AZ', 'Azerbaiyán');
INSERT INTO paises (codigo, nombre) VALUES('BS', 'Bahamas');
INSERT INTO paises (codigo, nombre) VALUES('BH', 'Bahréin');
INSERT INTO paises (codigo, nombre) VALUES('BD', 'Bangladesh');
INSERT INTO paises (codigo, nombre) VALUES('BB', 'Barbados');
INSERT INTO paises (codigo, nombre) VALUES('BY', 'Bielorrusia');
INSERT INTO paises (codigo, nombre) VALUES('BE', 'Bélgica');
INSERT INTO paises (codigo, nombre) VALUES('BZ', 'Belice');
INSERT INTO paises (codigo, nombre) VALUES('BJ', 'Benin');
INSERT INTO paises (codigo, nombre) VALUES('BM', 'Bermudas');
INSERT INTO paises (codigo, nombre) VALUES('BT', 'Bhután');
INSERT INTO paises (codigo, nombre) VALUES('BO', 'Bolivia');
INSERT INTO paises (codigo, nombre) VALUES('BA', 'Bosnia y Herzegovina');
INSERT INTO paises (codigo, nombre) VALUES('BW', 'Botsuana');
INSERT INTO paises (codigo, nombre) VALUES('BV', 'Isla Bouvet');
INSERT INTO paises (codigo, nombre) VALUES('BR', 'Brasil');
INSERT INTO paises (codigo, nombre) VALUES('BN', 'Brunéi');
INSERT INTO paises (codigo, nombre) VALUES('BG', 'Bulgaria');
INSERT INTO paises (codigo, nombre) VALUES('BF', 'Burkina Faso');
INSERT INTO paises (codigo, nombre) VALUES('BI', 'Burundi');
INSERT INTO paises (codigo, nombre) VALUES('CV', 'Cabo Verde');
INSERT INTO paises (codigo, nombre) VALUES('KY', 'Islas Caimán');
INSERT INTO paises (codigo, nombre) VALUES('KH', 'Camboya');
INSERT INTO paises (codigo, nombre) VALUES('CM', 'Camerún');
INSERT INTO paises (codigo, nombre) VALUES('CA', 'Canadá');
INSERT INTO paises (codigo, nombre) VALUES('CF', 'República Centroafricana');
INSERT INTO paises (codigo, nombre) VALUES('TD', 'Chad');
INSERT INTO paises (codigo, nombre) VALUES('CZ', 'República Checa');
INSERT INTO paises (codigo, nombre) VALUES('CL', 'Chile');
INSERT INTO paises (codigo, nombre) VALUES('CN', 'China');
INSERT INTO paises (codigo, nombre) VALUES('CY', 'Chipre');
INSERT INTO paises (codigo, nombre) VALUES('CX', 'Isla de Navidad');
INSERT INTO paises (codigo, nombre) VALUES('VA', 'Ciudad del Vaticano');
INSERT INTO paises (codigo, nombre) VALUES('CC', 'Islas Cocos');
INSERT INTO paises (codigo, nombre) VALUES('CO', 'Colombia');
INSERT INTO paises (codigo, nombre) VALUES('KM', 'Comoras');
INSERT INTO paises (codigo, nombre) VALUES('CD', 'República Democrática del Congo');
INSERT INTO paises (codigo, nombre) VALUES('CG', 'Congo');
INSERT INTO paises (codigo, nombre) VALUES('CK', 'Islas Cook');
INSERT INTO paises (codigo, nombre) VALUES('KP', 'Corea del Norte');
INSERT INTO paises (codigo, nombre) VALUES('KR', 'Corea del Sur');
INSERT INTO paises (codigo, nombre) VALUES('CI', 'Costa de Marfil');
INSERT INTO paises (codigo, nombre) VALUES('CR', 'Costa Rica');
INSERT INTO paises (codigo, nombre) VALUES('HR', 'Croacia');
INSERT INTO paises (codigo, nombre) VALUES('CU', 'Cuba');
INSERT INTO paises (codigo, nombre) VALUES('DK', 'Dinamarca');
INSERT INTO paises (codigo, nombre) VALUES('DM', 'Dominica');
INSERT INTO paises (codigo, nombre) VALUES('DO', 'República Dominicana');
INSERT INTO paises (codigo, nombre) VALUES('EC', 'Ecuador');
INSERT INTO paises (codigo, nombre) VALUES('EG', 'Egipto');
INSERT INTO paises (codigo, nombre) VALUES('SV', 'El Salvador');
INSERT INTO paises (codigo, nombre) VALUES('AE', 'Emiratos Árabes Unidos');
INSERT INTO paises (codigo, nombre) VALUES('ER', 'Eritrea');
INSERT INTO paises (codigo, nombre) VALUES('SK', 'Eslovaquia');
INSERT INTO paises (codigo, nombre) VALUES('SI', 'Eslovenia');
INSERT INTO paises (codigo, nombre) VALUES('ES', 'España');
INSERT INTO paises (codigo, nombre) VALUES('UM', 'Islas ultramarinas de Estados Unidos');
INSERT INTO paises (codigo, nombre) VALUES('US', 'Estados Unidos');
INSERT INTO paises (codigo, nombre) VALUES('EE', 'Estonia');
INSERT INTO paises (codigo, nombre) VALUES('ET', 'Etiopía');
INSERT INTO paises (codigo, nombre) VALUES('GB', 'Inglaterra');
INSERT INTO paises (codigo, nombre) VALUES('FO', 'Islas Feroe');
INSERT INTO paises (codigo, nombre) VALUES('PH', 'Filipinas');
INSERT INTO paises (codigo, nombre) VALUES('FI', 'Finlandia');
INSERT INTO paises (codigo, nombre) VALUES('FJ', 'Fiyi');
INSERT INTO paises (codigo, nombre) VALUES('FR', 'Francia');
INSERT INTO paises (codigo, nombre) VALUES('GA', 'Gabón');
INSERT INTO paises (codigo, nombre) VALUES('GM', 'Gambia');
INSERT INTO paises (codigo, nombre) VALUES('GE', 'Georgia');
INSERT INTO paises (codigo, nombre) VALUES('GS', 'Islas Georgias del Sur y Sandwich del Sur');
INSERT INTO paises (codigo, nombre) VALUES('GH', 'Ghana');
INSERT INTO paises (codigo, nombre) VALUES('GI', 'Gibraltar');
INSERT INTO paises (codigo, nombre) VALUES('GD', 'Granada');
INSERT INTO paises (codigo, nombre) VALUES('GR', 'Grecia');
INSERT INTO paises (codigo, nombre) VALUES('GL', 'Groenlandia');
INSERT INTO paises (codigo, nombre) VALUES('GP', 'Guadalupe');
INSERT INTO paises (codigo, nombre) VALUES('GU', 'Guam');
INSERT INTO paises (codigo, nombre) VALUES('GT', 'Guatemala');
INSERT INTO paises (codigo, nombre) VALUES('GF', 'Guayana Francesa');
INSERT INTO paises (codigo, nombre) VALUES('GN', 'Guinea');
INSERT INTO paises (codigo, nombre) VALUES('GQ', 'Guinea Ecuatorial');
INSERT INTO paises (codigo, nombre) VALUES('GW', 'Guinea-Bissau');
INSERT INTO paises (codigo, nombre) VALUES('GY', 'Guyana');
INSERT INTO paises (codigo, nombre) VALUES('HT', 'Haití');
INSERT INTO paises (codigo, nombre) VALUES('HM', 'Islas Heard y McDonald');
INSERT INTO paises (codigo, nombre) VALUES('HN', 'Honduras');
INSERT INTO paises (codigo, nombre) VALUES('HK', 'Hong Kong');
INSERT INTO paises (codigo, nombre) VALUES('HU', 'Hungría');
INSERT INTO paises (codigo, nombre) VALUES('IN', 'India');
INSERT INTO paises (codigo, nombre) VALUES('ID', 'Indonesia');
INSERT INTO paises (codigo, nombre) VALUES('IR', 'Irán');
INSERT INTO paises (codigo, nombre) VALUES('IQ', 'Iraq');
INSERT INTO paises (codigo, nombre) VALUES('IE', 'Irlanda');
INSERT INTO paises (codigo, nombre) VALUES('IS', 'Islandia');
INSERT INTO paises (codigo, nombre) VALUES('IL', 'Israel');
INSERT INTO paises (codigo, nombre) VALUES('IT', 'Italia');
INSERT INTO paises (codigo, nombre) VALUES('JM', 'Jamaica');
INSERT INTO paises (codigo, nombre) VALUES('JP', 'Japón');
INSERT INTO paises (codigo, nombre) VALUES('JO', 'Jordania');
INSERT INTO paises (codigo, nombre) VALUES('KZ', 'Kazajstán');
INSERT INTO paises (codigo, nombre) VALUES('KE', 'Kenia');
INSERT INTO paises (codigo, nombre) VALUES('KG', 'Kirguistán');
INSERT INTO paises (codigo, nombre) VALUES('KI', 'Kiribati');
INSERT INTO paises (codigo, nombre) VALUES('KW', 'Kuwait');
INSERT INTO paises (codigo, nombre) VALUES('LA', 'Laos');
INSERT INTO paises (codigo, nombre) VALUES('LS', 'Lesotho');
INSERT INTO paises (codigo, nombre) VALUES('LV', 'Letonia');
INSERT INTO paises (codigo, nombre) VALUES('LB', 'Líbano');
INSERT INTO paises (codigo, nombre) VALUES('LR', 'Liberia');
INSERT INTO paises (codigo, nombre) VALUES('LY', 'Libia');
INSERT INTO paises (codigo, nombre) VALUES('LI', 'Liechtenstein');
INSERT INTO paises (codigo, nombre) VALUES('LT', 'Lituania');
INSERT INTO paises (codigo, nombre) VALUES('LU', 'Luxemburgo');
INSERT INTO paises (codigo, nombre) VALUES('MO', 'Macao');
INSERT INTO paises (codigo, nombre) VALUES('MK', 'ARY Macedonia');
INSERT INTO paises (codigo, nombre) VALUES('MG', 'Madagascar');
INSERT INTO paises (codigo, nombre) VALUES('MY', 'Malasia');
INSERT INTO paises (codigo, nombre) VALUES('MW', 'Malawi');
INSERT INTO paises (codigo, nombre) VALUES('MV', 'Maldivas');
INSERT INTO paises (codigo, nombre) VALUES('ML', 'Malí');
INSERT INTO paises (codigo, nombre) VALUES('MT', 'Malta');
INSERT INTO paises (codigo, nombre) VALUES('FK', 'Islas Malvinas');
INSERT INTO paises (codigo, nombre) VALUES('MP', 'Islas Marianas del Norte');
INSERT INTO paises (codigo, nombre) VALUES('MA', 'Marruecos');
INSERT INTO paises (codigo, nombre) VALUES('MH', 'Islas Marshall');
INSERT INTO paises (codigo, nombre) VALUES('MQ', 'Martinica');
INSERT INTO paises (codigo, nombre) VALUES('MU', 'Mauricio');
INSERT INTO paises (codigo, nombre) VALUES('MR', 'Mauritania');
INSERT INTO paises (codigo, nombre) VALUES('YT', 'Mayotte');
INSERT INTO paises (codigo, nombre) VALUES('MX', 'México');
INSERT INTO paises (codigo, nombre) VALUES('FM', 'Micronesia');
INSERT INTO paises (codigo, nombre) VALUES('MD', 'Moldavia');
INSERT INTO paises (codigo, nombre) VALUES('MC', 'Mónaco');
INSERT INTO paises (codigo, nombre) VALUES('MN', 'Mongolia');
INSERT INTO paises (codigo, nombre) VALUES('MS', 'Montserrat');
INSERT INTO paises (codigo, nombre) VALUES('MZ', 'Mozambique');
INSERT INTO paises (codigo, nombre) VALUES('MM', 'Myanmar');
INSERT INTO paises (codigo, nombre) VALUES('NA', 'Namibia');
INSERT INTO paises (codigo, nombre) VALUES('NR', 'Nauru');
INSERT INTO paises (codigo, nombre) VALUES('NP', 'Nepal');
INSERT INTO paises (codigo, nombre) VALUES('NI', 'Nicaragua');
INSERT INTO paises (codigo, nombre) VALUES('NE', 'Níger');
INSERT INTO paises (codigo, nombre) VALUES('NG', 'Nigeria');
INSERT INTO paises (codigo, nombre) VALUES('NU', 'Niue');
INSERT INTO paises (codigo, nombre) VALUES('NF', 'Isla Norfolk');
INSERT INTO paises (codigo, nombre) VALUES('NO', 'Noruega');
INSERT INTO paises (codigo, nombre) VALUES('NC', 'Nueva Caledonia');
INSERT INTO paises (codigo, nombre) VALUES('NZ', 'Nueva Zelanda');
INSERT INTO paises (codigo, nombre) VALUES('OM', 'Omán');
INSERT INTO paises (codigo, nombre) VALUES('NL', 'Países Bajos');
INSERT INTO paises (codigo, nombre) VALUES('PK', 'Pakistán');
INSERT INTO paises (codigo, nombre) VALUES('PW', 'Palau');
INSERT INTO paises (codigo, nombre) VALUES('PS', 'Palestina');
INSERT INTO paises (codigo, nombre) VALUES('PA', 'Panamá');
INSERT INTO paises (codigo, nombre) VALUES('PG', 'Papúa Nueva Guinea');
INSERT INTO paises (codigo, nombre) VALUES('PY', 'Paraguay');
INSERT INTO paises (codigo, nombre) VALUES('PE', 'Perú');
INSERT INTO paises (codigo, nombre) VALUES('PN', 'Islas Pitcairn');
INSERT INTO paises (codigo, nombre) VALUES('PF', 'Polinesia Francesa');
INSERT INTO paises (codigo, nombre) VALUES('PL', 'Polonia');
INSERT INTO paises (codigo, nombre) VALUES('PT', 'Portugal');
INSERT INTO paises (codigo, nombre) VALUES('PR', 'Puerto Rico');
INSERT INTO paises (codigo, nombre) VALUES('QA', 'Qatar');
INSERT INTO paises (codigo, nombre) VALUES('RE', 'Reunión');
INSERT INTO paises (codigo, nombre) VALUES('RW', 'Ruanda');
INSERT INTO paises (codigo, nombre) VALUES('RO', 'Rumania');
INSERT INTO paises (codigo, nombre) VALUES('RU', 'Rusia');
INSERT INTO paises (codigo, nombre) VALUES('EH', 'Sahara Occidental');
INSERT INTO paises (codigo, nombre) VALUES('SB', 'Islas Salomón');
INSERT INTO paises (codigo, nombre) VALUES('WS', 'Samoa');
INSERT INTO paises (codigo, nombre) VALUES('AS', 'Samoa Americana');
INSERT INTO paises (codigo, nombre) VALUES('KN', 'San Cristóbal y Nevis');
INSERT INTO paises (codigo, nombre) VALUES('SM', 'San Marino');
INSERT INTO paises (codigo, nombre) VALUES('PM', 'San Pedro y Miquelón');
INSERT INTO paises (codigo, nombre) VALUES('VC', 'San Vicente y las Granadinas');
INSERT INTO paises (codigo, nombre) VALUES('SH', 'Santa Helena');
INSERT INTO paises (codigo, nombre) VALUES('LC', 'Santa Lucía');
INSERT INTO paises (codigo, nombre) VALUES('ST', 'Santo Tomé y Príncipe');
INSERT INTO paises (codigo, nombre) VALUES('SN', 'Senegal');
INSERT INTO paises (codigo, nombre) VALUES('CS', 'Serbia y Montenegro');
INSERT INTO paises (codigo, nombre) VALUES('SC', 'Seychelles');
INSERT INTO paises (codigo, nombre) VALUES('SL', 'Sierra Leona');
INSERT INTO paises (codigo, nombre) VALUES('SG', 'Singapur');
INSERT INTO paises (codigo, nombre) VALUES('SY', 'Siria');
INSERT INTO paises (codigo, nombre) VALUES('SO', 'Somalia');
INSERT INTO paises (codigo, nombre) VALUES('LK', 'Sri Lanka');
INSERT INTO paises (codigo, nombre) VALUES('SZ', 'Suazilandia');
INSERT INTO paises (codigo, nombre) VALUES('ZA', 'Sudáfrica');
INSERT INTO paises (codigo, nombre) VALUES('SD', 'Sudán');
INSERT INTO paises (codigo, nombre) VALUES('SE', 'Suecia');
INSERT INTO paises (codigo, nombre) VALUES('CH', 'Suiza');
INSERT INTO paises (codigo, nombre) VALUES('SR', 'Surinam');
INSERT INTO paises (codigo, nombre) VALUES('SJ', 'Svalbard y Jan Mayen');
INSERT INTO paises (codigo, nombre) VALUES('TH', 'Tailandia');
INSERT INTO paises (codigo, nombre) VALUES('TW', 'Taiwán');
INSERT INTO paises (codigo, nombre) VALUES('TZ', 'Tanzania');
INSERT INTO paises (codigo, nombre) VALUES('TJ', 'Tayikistán');
INSERT INTO paises (codigo, nombre) VALUES('IO', 'Territorio Británico del Océano Índico');
INSERT INTO paises (codigo, nombre) VALUES('TF', 'Territorios Australes Franceses');
INSERT INTO paises (codigo, nombre) VALUES('TL', 'Timor Oriental');
INSERT INTO paises (codigo, nombre) VALUES('TG', 'Togo');
INSERT INTO paises (codigo, nombre) VALUES('TK', 'Tokelau');
INSERT INTO paises (codigo, nombre) VALUES('TO', 'Tonga');
INSERT INTO paises (codigo, nombre) VALUES('TT', 'Trinidad y Tobago');
INSERT INTO paises (codigo, nombre) VALUES('TN', 'Túnez');
INSERT INTO paises (codigo, nombre) VALUES('TC', 'Islas Turcas y Caicos');
INSERT INTO paises (codigo, nombre) VALUES('TM', 'Turkmenistán');
INSERT INTO paises (codigo, nombre) VALUES('TR', 'Turquía');
INSERT INTO paises (codigo, nombre) VALUES('TV', 'Tuvalu');
INSERT INTO paises (codigo, nombre) VALUES('UA', 'Ucrania');
INSERT INTO paises (codigo, nombre) VALUES('UG', 'Uganda');
INSERT INTO paises (codigo, nombre) VALUES('UY', 'Uruguay');
INSERT INTO paises (codigo, nombre) VALUES('UZ', 'Uzbekistán');
INSERT INTO paises (codigo, nombre) VALUES('VU', 'Vanuatu');
INSERT INTO paises (codigo, nombre) VALUES('VE', 'Venezuela');
INSERT INTO paises (codigo, nombre) VALUES('VN', 'Vietnam');
INSERT INTO paises (codigo, nombre) VALUES('VG', 'Islas Vírgenes Británicas');
INSERT INTO paises (codigo, nombre) VALUES('VI', 'Islas Vírgenes de los Estados Unidos');
INSERT INTO paises (codigo, nombre) VALUES('WF', 'Wallis y Futuna');
INSERT INTO paises (codigo, nombre) VALUES('YE', 'Yemen');
INSERT INTO paises (codigo, nombre) VALUES('DJ', 'Yibuti');
INSERT INTO paises (codigo, nombre) VALUES('ZM', 'Zambia');
INSERT INTO paises (codigo, nombre) VALUES('ZW', 'Zimbabue');


ALTER TABLE paises
ADD stat int;

update paises set stat = 1;


select * from paises

create table codigos(
id int primary key identity(1,1), 
codigo varchar(5), 
descripcion varchar(50), 
detalle_programa varchar(100)
);

INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('01GEN', 'Masculino', 'Conosca a su cliente, genero masculino');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('02GEN', 'Femenino', 'Conosca a su cliente, genero femenino');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('03GEN', 'Otro', 'Conosca a su cliente, genero otro');

select * from codigos where codigo like '%PRO';

INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('04ECL', 'Solteroa', 'Conosca a su cliente, estado civil Soltero');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('05ECL', 'Casadoa', 'Conosca a su cliente, estado civil Casado');

DROP TABLE codigos

INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('06PRO', 'Abogado', 'Conosca a su cliente, profesion Abogado ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('07PRO', 'Actuario', 'Conosca a su cliente, profesion Actuario ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('08PRO', 'Agencia de Seguridad', 'Conosca a su cliente, profesion Agencia de Seguridad ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('09PRO', 'Agente Deportivo', 'Conosca a su cliente, profesion Agente Deportivo ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('10PRO', 'Agente Inmobiliario', 'Conosca a su cliente, profesion Agente Inmobiliario ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('11PRO', 'Agricultor', 'Conosca a su cliente, profesion Agricultor ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('12PRO', 'Almacenamiento', 'Conosca a su cliente, profesion Almacenamiento ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('13PRO', 'Ama de Casa', 'Conosca a su cliente, profesion Ama de Casa ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('14PRO', 'Arte', 'Conosca a su cliente, profesion Arte ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('15PRO', 'Asalariado', 'Conosca a su cliente, profesion Asalariado ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('16PRO', 'Asesor Fiscal / Financiero', 'Conosca a su cliente, profesion Asesor Fiscal / Financiero ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('17PRO', 'Asesora de Inversión', 'Conosca a su cliente, profesion Asesora de Inversión ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('18PRO', 'Banca y Finanzas', 'Conosca a su cliente, profesion Banca y Finanzas ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('19PRO', 'Cadena de Restaurantes', 'Conosca a su cliente, profesion Cadena de Restaurantes ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('20PRO', 'Casa de Cambio', 'Conosca a su cliente, profesion Casa de Cambio ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('21PRO', 'Casa de Empeño', 'Conosca a su cliente, profesion Casa de Empeño ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('22PRO', 'Casa de Remesas', 'Conosca a su cliente, profesion Casa de Remesas ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('23PRO', 'Casa de Valores', 'Conosca a su cliente, profesion Casa de Valores ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('24PRO', 'Casino', 'Conosca a su cliente, profesion Casino ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('25PRO', 'Coaching', 'Conosca a su cliente, profesion Coaching ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('26PRO', 'Comunicación y Telefonía', 'Conosca a su cliente, profesion Comunicación y Telefonía ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('27PRO', 'Concesionario de Autos', 'Conosca a su cliente, profesion Concesionario de Autos ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('28PRO', 'Construcción', 'Conosca a su cliente, profesion Construcción ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('29PRO', 'Consultor de Riesgo', 'Conosca a su cliente, profesion Consultor de Riesgo ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('30PRO', 'Contador', 'Conosca a su cliente, profesion Contador ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('31PRO', 'Cooperativas de Ahorro y Crédito', 'Conosca a su cliente, profesion Cooperativas de Ahorro y Crédito ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('32PRO', 'Corredor Bienes Raíces', 'Conosca a su cliente, profesion Corredor Bienes Raíces ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('33PRO', 'Corredor de Bolsa', 'Conosca a su cliente, profesion Corredor de Bolsa ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('34PRO', 'Corredor de Seguros', 'Conosca a su cliente, profesion Corredor de Seguros ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('35PRO', 'Correos y Telégrafos', 'Conosca a su cliente, profesion Correos y Telégrafos ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('36PRO', 'Cumplimiento Normativo', 'Conosca a su cliente, profesion Cumplimiento Normativo ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('37PRO', 'Dependiente', 'Conosca a su cliente, profesion Dependiente ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('38PRO', 'Deportista', 'Conosca a su cliente, profesion Deportista ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('39PRO', 'Desempleado', 'Conosca a su cliente, profesion Desempleado ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('40PRO', 'Distribuidor de Alimentos', 'Conosca a su cliente, profesion Distribuidor de Alimentos ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('41PRO', 'Economista', 'Conosca a su cliente, profesion Economista ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('42PRO', 'Emprendedor', 'Conosca a su cliente, profesion Emprendedor ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('43PRO', 'Energía e Hidroeléctrica', 'Conosca a su cliente, profesion Energía e Hidroeléctrica ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('44PRO', 'Entretenimiento', 'Conosca a su cliente, profesion Entretenimiento ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('45PRO', 'Estudiante', 'Conosca a su cliente, profesion Estudiante ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('46PRO', 'Factoring', 'Conosca a su cliente, profesion Factoring ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('47PRO', 'Funcionario', 'Conosca a su cliente, profesion Funcionario ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('48PRO', 'Importador / Exportador', 'Conosca a su cliente, profesion Importador / Exportador ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('49PRO', 'Independiente', 'Conosca a su cliente, profesion Independiente ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('50PRO', 'Industria Farmacéutica', 'Conosca a su cliente, profesion Industria Farmacéutica ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('51PRO', 'Industria Médica', 'Conosca a su cliente, profesion Industria Médica ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('52PRO', 'Industria Petrolera', 'Conosca a su cliente, profesion Industria Petrolera ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('53PRO', 'Industria Química', 'Conosca a su cliente, profesion Industria Química ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('54PRO', 'Industria Textil', 'Conosca a su cliente, profesion Industria Textil ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('55PRO', 'Ingeniero Civil', 'Conosca a su cliente, profesion Ingeniero Civil ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('56PRO', 'Ingeniero Industrial', 'Conosca a su cliente, profesion Ingeniero Industrial ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('57PRO', 'Inversionista', 'Conosca a su cliente, profesion Inversionista ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('58PRO', 'Logística', 'Conosca a su cliente, profesion Logística ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('59PRO', 'Marítimo y Portuario', 'Conosca a su cliente, profesion Marítimo y Portuario ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('60PRO', 'Minería', 'Conosca a su cliente, profesion Minería ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('61PRO', 'Notario', 'Conosca a su cliente, profesion Notario ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('62PRO', 'ONG', 'Conosca a su cliente, profesion ONG ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('63PRO', 'Organizador de Eventos', 'Conosca a su cliente, profesion Organizador de Eventos ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('64PRO', 'Piloto', 'Conosca a su cliente, profesion Piloto ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('65PRO', 'Policía', 'Conosca a su cliente, profesion Policía ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('66PRO', 'Promotora', 'Conosca a su cliente, profesion Promotora ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('67PRO', 'Seguros y Reaseguros', 'Conosca a su cliente, profesion Seguros y Reaseguros ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('68PRO', 'Servicio al Cliente', 'Conosca a su cliente, profesion Servicio al Cliente ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('69PRO', 'Tecnología e Informática', 'Conosca a su cliente, profesion Tecnología e Informática ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('70PRO', 'Trader', 'Conosca a su cliente, profesion Trader ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('71PRO', 'Transporte de Valores', 'Conosca a su cliente, profesion Transporte de Valores ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('72PRO', 'Transportista', 'Conosca a su cliente, profesion Transportista ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('73PRO', 'Turismo y Hotelería', 'Conosca a su cliente, profesion Turismo y Hotelería ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('74PRO', 'Ventas al por Mayor', 'Conosca a su cliente, profesion Ventas al por Mayor ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('75PRO', 'Ventas al por Menor', 'Conosca a su cliente, profesion Ventas al por Menor ');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('76PRO', 'Otro:', 'Conosca a su cliente, profesion Otro: ');

INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('77FUE', 'Asalariado', 'Conosca a su cliente, fuente de ingreso Asalariado');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('78FUE', 'Jubilado', 'Conosca a su cliente, fuente de ingreso Jubilado');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('79FUE', 'Independiente Formal', 'Conosca a su cliente, fuente de ingreso Independiente');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('80FUE', 'Empresario', 'Conosca a su cliente, fuente de ingreso Empresario');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('81FUE', 'Emprendedor', 'Conosca a su cliente, fuente de ingreso Emprendedor');

INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('82FUE', 'Comisiones', 'Conosca a su cliente, fuente de ingreso Comisiones');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('83FUE', 'Ganancias', 'Conosca a su cliente, fuente de ingreso Ganancias');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('84FUE', 'Herencia', 'Conosca a su cliente, fuente de ingreso Herencia');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('85FUE', 'Ingresos por actividad económica', 'Conosca a su cliente, fuente de ingreso Ingresos');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('86FUE', 'Negocio propio', 'Conosca a su cliente, fuente de ingreso Negocio propio');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('87FUE', 'Préstamo personal', 'Conosca a su cliente, fuente de ingreso Préstamo personal');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('88FUE', 'Retirado', 'Conosca a su cliente, fuente de ingreso Retirado');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('89FUE', 'Salarios', 'Conosca a su cliente,fuente de ingreso Salarios');


INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('90FDP', 'Contado', 'Conosca a su cliente, forma de pago contado');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('91FDP', 'Financiado', 'Conosca a su cliente, forma de pago Financiado');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('92FDP', 'Financiado al 100%', 'Conosca a su cliente, forma de pago Financiado al 100%');

INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('93LIM', '10k - 25k', 'Conosca a su cliente, fuente de ingreso limite 10k - 25k');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('94LIM', '25k - 50k', 'Conosca a su cliente, fuente de ingreso limite 25k - 50k');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('95LIM', '50k - 100k', 'Conosca a su cliente, fuente de ingreso limite 50k - 100k');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('96LIM', '100k - 150k', 'Conosca a su cliente, fuente de ingreso limite 100k - 150k');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('97LIM', '150k - 250k', 'Conosca a su cliente, fuente de ingreso limite 150k - 250k');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('98LIM', '250k - 1M', 'Conosca a su cliente, fuente de ingreso limite 250k - 1M');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('99LIM', '1M - 10M', 'Conosca a su cliente, fuente de ingreso limite 1M - 10M');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('100LIM', ' > 10M ', 'Conosca a su cliente,fuente de ingreso limite  > 10M');

INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('101MDP', 'ACH', 'Conosca a su cliente, metodo de pago ACH');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('102MDP', 'Deposito Bancario', 'Conosca a su cliente, metodo de pago Ganancias');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('103MDP', 'Yappi', 'Conosca a su cliente, metodo de pago Herencia');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('104MDP', 'Cheque - 150k', 'Conosca a su cliente, metodo de pago Ingresos');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('105MDP', 'Tarjeta de debito', 'Conosca a su cliente, metodo de pago propio');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('106MDP', 'Tarjeta de Credito', 'Conosca a su cliente, metodo de pago personal');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('107MDP', 'Financiado al 100%', 'Conosca a su cliente, metodo de pago Retirado');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('108MDP', 'Carta promesa de pago', 'Conosca a su cliente, metodo de pago Salarios');

select * from codigos where codigo like '%LIM'

INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('109BFF', 'Beneficiario Cliente', 'Conosca a su cliente, Beneficiario final cliente');
INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('110BFF', 'Beneficiario Tercero', 'Conosca a su cliente, Beneficiario final tercero');

INSERT INTO codigos (codigo, descripcion, detalle_programa) VALUES('111BFF', 'Beneficiario Familiar', 'Conosca a su cliente, Beneficiario relacion con el cliente familiar');

ALTER TABLE codigos
ALTER COLUMN codigo varchar(6);