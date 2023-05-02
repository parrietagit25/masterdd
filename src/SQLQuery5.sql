USE [master]
GO
/****** Object:  Database [masterdd]    Script Date: 5/1/2023 11:44:15 PM ******/
CREATE DATABASE [masterdd]
 CONTAINMENT = NONE
 ON  PRIMARY 
( NAME = N'masterdd', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL16.SQLEXPRESS\MSSQL\DATA\masterdd.mdf' , SIZE = 8192KB , MAXSIZE = UNLIMITED, FILEGROWTH = 65536KB )
 LOG ON 
( NAME = N'masterdd_log', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL16.SQLEXPRESS\MSSQL\DATA\masterdd_log.ldf' , SIZE = 8192KB , MAXSIZE = 2048GB , FILEGROWTH = 65536KB )
 WITH CATALOG_COLLATION = DATABASE_DEFAULT, LEDGER = OFF
GO
ALTER DATABASE [masterdd] SET COMPATIBILITY_LEVEL = 160
GO
IF (1 = FULLTEXTSERVICEPROPERTY('IsFullTextInstalled'))
begin
EXEC [masterdd].[dbo].[sp_fulltext_database] @action = 'enable'
end
GO
ALTER DATABASE [masterdd] SET ANSI_NULL_DEFAULT OFF 
GO
ALTER DATABASE [masterdd] SET ANSI_NULLS OFF 
GO
ALTER DATABASE [masterdd] SET ANSI_PADDING OFF 
GO
ALTER DATABASE [masterdd] SET ANSI_WARNINGS OFF 
GO
ALTER DATABASE [masterdd] SET ARITHABORT OFF 
GO
ALTER DATABASE [masterdd] SET AUTO_CLOSE OFF 
GO
ALTER DATABASE [masterdd] SET AUTO_SHRINK OFF 
GO
ALTER DATABASE [masterdd] SET AUTO_UPDATE_STATISTICS ON 
GO
ALTER DATABASE [masterdd] SET CURSOR_CLOSE_ON_COMMIT OFF 
GO
ALTER DATABASE [masterdd] SET CURSOR_DEFAULT  GLOBAL 
GO
ALTER DATABASE [masterdd] SET CONCAT_NULL_YIELDS_NULL OFF 
GO
ALTER DATABASE [masterdd] SET NUMERIC_ROUNDABORT OFF 
GO
ALTER DATABASE [masterdd] SET QUOTED_IDENTIFIER OFF 
GO
ALTER DATABASE [masterdd] SET RECURSIVE_TRIGGERS OFF 
GO
ALTER DATABASE [masterdd] SET  DISABLE_BROKER 
GO
ALTER DATABASE [masterdd] SET AUTO_UPDATE_STATISTICS_ASYNC OFF 
GO
ALTER DATABASE [masterdd] SET DATE_CORRELATION_OPTIMIZATION OFF 
GO
ALTER DATABASE [masterdd] SET TRUSTWORTHY OFF 
GO
ALTER DATABASE [masterdd] SET ALLOW_SNAPSHOT_ISOLATION OFF 
GO
ALTER DATABASE [masterdd] SET PARAMETERIZATION SIMPLE 
GO
ALTER DATABASE [masterdd] SET READ_COMMITTED_SNAPSHOT OFF 
GO
ALTER DATABASE [masterdd] SET HONOR_BROKER_PRIORITY OFF 
GO
ALTER DATABASE [masterdd] SET RECOVERY SIMPLE 
GO
ALTER DATABASE [masterdd] SET  MULTI_USER 
GO
ALTER DATABASE [masterdd] SET PAGE_VERIFY CHECKSUM  
GO
ALTER DATABASE [masterdd] SET DB_CHAINING OFF 
GO
ALTER DATABASE [masterdd] SET FILESTREAM( NON_TRANSACTED_ACCESS = OFF ) 
GO
ALTER DATABASE [masterdd] SET TARGET_RECOVERY_TIME = 60 SECONDS 
GO
ALTER DATABASE [masterdd] SET DELAYED_DURABILITY = DISABLED 
GO
ALTER DATABASE [masterdd] SET ACCELERATED_DATABASE_RECOVERY = OFF  
GO
ALTER DATABASE [masterdd] SET QUERY_STORE = ON
GO
ALTER DATABASE [masterdd] SET QUERY_STORE (OPERATION_MODE = READ_WRITE, CLEANUP_POLICY = (STALE_QUERY_THRESHOLD_DAYS = 30), DATA_FLUSH_INTERVAL_SECONDS = 900, INTERVAL_LENGTH_MINUTES = 60, MAX_STORAGE_SIZE_MB = 1000, QUERY_CAPTURE_MODE = AUTO, SIZE_BASED_CLEANUP_MODE = AUTO, MAX_PLANS_PER_QUERY = 200, WAIT_STATS_CAPTURE_MODE = ON)
GO
USE [masterdd]
GO
/****** Object:  Table [dbo].[cc_adjuntos]    Script Date: 5/1/2023 11:44:15 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[cc_adjuntos](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[id_general] [int] NULL,
	[fdcad_documento_identidad] [varchar](100) NULL,
	[fdcad_recibo] [varchar](100) NULL,
	[fdcad_aviso_operaciones] [varchar](100) NULL,
	[fdcad_evidencia_ingresos] [varchar](100) NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[cc_beneficiario]    Script Date: 5/1/2023 11:44:15 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[cc_beneficiario](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[id_general] [int] NULL,
	[fb_cliete_tercero] [varchar](10) NULL,
	[fb_relacion_familiar_tercero] [varchar](10) NULL,
	[fb_relacion_detalle] [varchar](10) NULL,
	[fb_primer_nombre] [varchar](50) NULL,
	[fb_segundo_nombre] [varchar](50) NULL,
	[fb_apellido_paterno] [varchar](50) NULL,
	[fb_apellido_materno] [varchar](50) NULL,
	[fb_apellido_casada] [varchar](50) NULL,
	[fb_pais_nacimiento] [varchar](5) NULL,
	[fb_fecha_nacimiento] [date] NULL,
	[fb_nacionaidad] [varchar](5) NULL,
	[fb_genero] [varchar](5) NULL,
	[fb_estado_civil] [varchar](5) NULL,
	[fb_identificacion] [varchar](20) NULL,
	[fb_pais_residencia] [varchar](5) NULL,
	[fb_direccion_residencial] [varchar](150) NULL,
	[fb_pais_residencia_fiscal] [varchar](5) NULL,
	[fb_email] [varchar](50) NULL,
	[fb_telefono_residencia] [varchar](15) NULL,
	[fb_telefono_movil] [varchar](15) NULL,
	[fb_profesion] [varchar](5) NULL,
	[fb_ocupacion] [varchar](5) NULL,
	[fb_lugar_trabajo] [varchar](100) NULL,
	[fb_direccion_trabajo] [varchar](150) NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[cc_declaracion]    Script Date: 5/1/2023 11:44:15 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[cc_declaracion](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[id_general] [int] NULL,
	[fd_actividad_principal] [varchar](5) NULL,
	[fd_otras_fuentes] [varchar](5) NULL,
	[fd_limite_compra] [varchar](5) NULL,
	[fd_metodo_pago_1] [varchar](5) NULL,
	[fd_metodo_pago_2] [varchar](5) NULL,
	[fd_forma_pago_1] [varchar](5) NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[cc_declaracion_jurada]    Script Date: 5/1/2023 11:44:15 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[cc_declaracion_jurada](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[id_general] [int] NULL,
	[fdc_nombre_completo] [varchar](50) NULL,
	[fdc_fecha] [date] NULL,
	[fdc_firma] [varchar](100) NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[cc_generales]    Script Date: 5/1/2023 11:44:15 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[cc_generales](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[fg_primer_nombre] [varchar](50) NULL,
	[fg_segundo_nombre] [varchar](50) NULL,
	[fg_apellido_paterno] [varchar](50) NULL,
	[fg_apellido_materno] [varchar](50) NULL,
	[fg_apellido_casada] [varchar](50) NULL,
	[fg_pais_nacimiento] [varchar](50) NULL,
	[fg_fecha_nacimiento] [date] NULL,
	[fg_nacionalidad] [varchar](5) NULL,
	[fg_genero] [varchar](5) NULL,
	[fg_estado_civil] [varchar](5) NULL,
	[fg_cedula] [varchar](20) NULL,
	[fg_pais_residencia] [varchar](5) NULL,
	[fg_direccion_residencial] [varchar](250) NULL,
	[fg_pais_residencia_fiscal] [varchar](5) NULL,
	[fg_email] [varchar](100) NULL,
	[fg_telefono_residencia] [varchar](15) NULL,
	[fg_telefono_movil] [varchar](15) NULL,
	[fg_stat] [int] NULL,
	[fg_fecha_log] [datetime] NULL,
	[fg_id_user] [int] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[cc_ocupacionales]    Script Date: 5/1/2023 11:44:15 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[cc_ocupacionales](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[id_general] [int] NULL,
	[fo_profesion] [varchar](5) NULL,
	[fo_ocupacion] [varchar](5) NULL,
	[fo_lugar_trabajo] [varchar](100) NULL,
	[fo_direccion_trabajo] [varchar](150) NULL,
	[fo_correo_trabajo] [varchar](80) NULL,
	[fo_telefono_trabajo] [varchar](15) NULL,
	[fo_nombre_negocio] [varchar](100) NULL,
	[fo_aviso_operaciones] [varchar](50) NULL,
	[fo_licita_estado] [varchar](5) NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[cc_personas_expuestas]    Script Date: 5/1/2023 11:44:15 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[cc_personas_expuestas](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[id_general] [int] NULL,
	[fp_beneficiario] [varchar](2) NULL,
	[fp_nombre_completo] [varchar](50) NULL,
	[fp_cargo_actual] [varchar](5) NULL,
	[fp_otro] [varchar](5) NULL,
	[fp_fecha] [date] NULL,
	[fp_cargo_anterior] [varchar](5) NULL,
	[fp_fecha_anterior] [date] NULL,
	[fp_comentario] [varchar](250) NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[cc_referencias]    Script Date: 5/1/2023 11:44:15 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[cc_referencias](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[id_general] [int] NULL,
	[fr_razon_social_1] [varchar](50) NULL,
	[fr_actividad_1] [varchar](50) NULL,
	[fr_relacion_cliente_1] [varchar](50) NULL,
	[fr_telefono_1] [varchar](15) NULL,
	[fr_correo_electronico_1] [varchar](50) NULL,
	[fr_razon_social_2] [varchar](100) NULL,
	[fr_actividad_2] [varchar](50) NULL,
	[fr_relacion_cliente_2] [varchar](50) NULL,
	[fr_telefono_2] [varchar](15) NULL,
	[fr_correo_electronico_2] [varchar](50) NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[cc_terceros_autorizados]    Script Date: 5/1/2023 11:44:15 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[cc_terceros_autorizados](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[id_general] [int] NULL,
	[ft_cliete_tercero] [varchar](10) NULL,
	[ft_relacion_familiar_tercero] [varchar](10) NULL,
	[ft_relacion_detalle] [varchar](10) NULL,
	[ft_primer_nombre] [varchar](50) NULL,
	[ft_segundo_nombre] [varchar](50) NULL,
	[ft_apellido_paterno] [varchar](50) NULL,
	[ft_apellido_materno] [varchar](50) NULL,
	[ft_apellido_casada] [varchar](50) NULL,
	[ft_pais_nacimiento] [varchar](5) NULL,
	[ft_fecha_nacimiento] [date] NULL,
	[ft_nacionaidad] [varchar](5) NULL,
	[ft_genero] [varchar](5) NULL,
	[ft_estado_civil] [varchar](5) NULL,
	[ft_identificacion] [varchar](20) NULL,
	[ft_pais_residencia] [varchar](5) NULL,
	[ft_direccion_residencial] [varchar](150) NULL,
	[ft_pais_residencia_fiscal] [varchar](5) NULL,
	[ft_email] [varchar](50) NULL,
	[ft_telefono_residencia] [varchar](15) NULL,
	[ft_telefono_movil] [varchar](15) NULL,
	[ft_profesion] [varchar](5) NULL,
	[ft_ocupacion] [varchar](5) NULL,
	[ft_lugar_trabajo] [varchar](100) NULL,
	[ft_direccion_trabajo] [varchar](150) NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[cc_uso_interno]    Script Date: 5/1/2023 11:44:15 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[cc_uso_interno](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[id_general] [int] NULL,
	[fui_nombre_completo_1] [varchar](50) NULL,
	[fui_aprobacion_1] [varchar](5) NULL,
	[fui_fecha_1] [date] NULL,
	[fui_nombre_completo_2] [varchar](50) NULL,
	[fui_aprobacion_2] [varchar](5) NULL,
	[fui_fecha_2] [date] NULL,
	[fui_nombre_completo_3] [varchar](50) NULL,
	[fui_aprobacion_3] [varchar](5) NULL,
	[fui_fecha_3] [date] NULL,
	[fui_nombre_completo_4] [varchar](50) NULL,
	[fui_aprobacion_4] [varchar](5) NULL,
	[fui_fecha_4] [date] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[codigos]    Script Date: 5/1/2023 11:44:15 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[codigos](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[codigo] [varchar](6) NULL,
	[descripcion] [varchar](50) NULL,
	[detalle_programa] [varchar](100) NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[paises]    Script Date: 5/1/2023 11:44:15 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[paises](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[codigo] [varchar](2) NULL,
	[nombre] [varchar](80) NULL,
	[stat] [int] NULL,
	[ft_pagos_abonos] [varchar](250) NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[usuarios]    Script Date: 5/1/2023 11:44:15 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[usuarios](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[nombre] [varchar](100) NULL,
	[email] [varchar](80) NULL,
	[password] [varchar](255) NULL,
	[tipo_user] [varchar](50) NULL,
	[stat] [int] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
ALTER TABLE [dbo].[cc_generales] ADD  DEFAULT (getdate()) FOR [fg_fecha_log]
GO
USE [master]
GO
ALTER DATABASE [masterdd] SET  READ_WRITE 
GO
