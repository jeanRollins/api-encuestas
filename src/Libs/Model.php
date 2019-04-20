<?php 


class Model
{
	/*
		Retorna un objeto de la clase Connection instanciado.
	*/			
	public function GetDatabase()
	{
		require_once '../src/Config/Connection.php' ;

		return new Connection ;
	}
}