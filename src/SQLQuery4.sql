/****** Script for SelectTopNRows command from SSMS  ******/
SELECT TOP (1000) [id]
      ,[id_general]
      ,[ft_cliete_tercero]
      ,[ft_relacion_familiar_tercero]
      ,[ft_relacion_detalle]
      ,[ft_primer_nombre]
      ,[ft_segundo_nombre]
      ,[ft_apellido_paterno]
      ,[ft_apellido_materno]
      ,[ft_apellido_casada]
      ,[ft_pais_nacimiento]
      ,[ft_fecha_nacimiento]
      ,[ft_nacionaidad]
      ,[ft_genero]
      ,[ft_estado_civil]
      ,[ft_identificacion]
      ,[ft_pais_residencia]
      ,[ft_direccion_residencial]
      ,[ft_pais_residencia_fiscal]
      ,[ft_email]
      ,[ft_telefono_residencia]
      ,[ft_telefono_movil]
      ,[ft_profesion]
      ,[ft_ocupacion]
      ,[ft_lugar_trabajo]
      ,[ft_direccion_trabajo]
  FROM [masterdd].[dbo].[cc_terceros_autorizados]


  

ALTER TABLE paises
ADD ft_pagos_abonos varchar(250);