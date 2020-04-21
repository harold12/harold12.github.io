

create table `piloto` (
  `piloto_id` int not null, `nombre` int not null, 
  `celular_piloto` int not null, `documento_piloto` int not null, 
  `disponibilidad` int not null
); 
alter table 
  `piloto` 
add 
  primary key `piloto_piloto_id_primary`(`piloto_id`); 

create table `cliente` (
    `cliente_id` int not null, `nombre` int not null, 
    `celular_cliente` int not null, `documento_cliente` int not null, 
    `direccion_cliente` int not null, 
    `piloto_id` int not null
  ); 
alter table 
  `cliente` 
add 
  primary key `cliente_cliente_id_primary`(`cliente_id`); 
alter table 
  `cliente` 
add 
  unique `cliente_piloto_id_unique`(`piloto_id`)