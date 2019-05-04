<?php  




/*

-Crear relacion entre de una tabla a otra:
	
	alter table users add constraint fk_id_type foreign key (type) references type_user(id_type) on delete cascade on update cascade ;

-insertar

	insert into users ( id_user, username, surname, type, validator ) values ( 3 , 'jvidal','javier vidal',3,'vtwat3b5ns3');


*/

?>