<?php 

class Controller
{
	/*
		Recibe un una variable con el nombre del modelo y devuelve un objeto instanciado.
	*/			
	public function GetInstance( $model )
	{
		require_once '../src/Models/' . $model . '.php' ;

		return new $model() ;
	}

}