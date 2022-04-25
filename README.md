# Refinancia
Información consultas Sql
create temp table estados_clientes(
	select c.idestadoCliente, ce.estadoCliente
	from clientes c
	left join  clientes_estados on (c.idestado_cliente=ce.idestadocliente)
	order by idestadocliente asc
	limit 10
);



CREATE TABLE ciudades
(
  codigo character varying(11) NOT NULL, 
  nombre character varying(50), 
  tipo_ciudad "char", 
  CONSTRAINT cp_ciudades PRIMARY KEY (codigo)
)

select *  from ciudades 
where nombre in ('BOGOTA','CALI','MEDELLIN')



alter temp table estados_clientes(
	select c.idestadoCliente, ce.estadoCliente, cast(ciudad)
	from clientes );

drop estados_clientes
