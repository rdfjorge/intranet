CREATE TABLE dbo.t_usuarios(
	[id_usuario]	[int] IDENTITY(1,1) NOT FOR REPLICATION NOT NULL,
	[nm_login]		[varchar](50) NOT NULL,
	[nm_usuario]	[varchar](100) NOT NULL,
	[nm_senha]		[varchar](128) NULL,
	[id_empresa]	[smallint] NOT NULL,
	[nm_email]		[varchar](200) NULL,
	[dt_criacao]	[smalldatetime] NULL,
	[dt_alteracao]	[smalldatetime] NULL,
	[dv_ativo]		[bit] NULL,
 CONSTRAINT [PK_t_usuario] PRIMARY KEY CLUSTERED 
(
	[id_usuario] ASC
)
)
GO

insert into dbo.t_usuarios
select
	[nm_login]		= 'rodolfo',
	[nm_usuario]	= 'Rodolfo Jorge',
	[nm_senha]		= '1a11a0e7157968ba16f4c643ae73a94678bff833d2819fc4abee4cc4f561630d8abdb130fdb0a3ed64a069b2c673903913523a3ba7aa77c4056e015116f11959',
	[id_empresa]	= 1,
	[nm_email]		= 'rdfjorge@gmail.com',
	[dt_criacao]	= getdate(),
	[dt_alteracao]	= null,
	[dv_ativo]		= 1


insert into dbo.t_usuarios
select
	[nm_login]		= 'thiago',
	[nm_usuario]	= 'Thiago Iglesias',
	[nm_senha]		= 'thiago',
	[id_empresa]	= 1,
	[nm_email]		= 'thiago@thiagoci.com',
	[dt_criacao]	= getdate(),
	[dt_alteracao]	= null,
	[dv_ativo]		= 1


update dbo.t_usuarios set nm_senha = 'dc58rfgR' where id_usuario = 1


SELECT * FROM dbo.t_usuarios