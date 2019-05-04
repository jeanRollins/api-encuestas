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

	public function GetHelper( $helper )
	{
		require_once '../src/Helpers/' . $helper . '.php' ;

		return new $helper() ;
	}

	public function WithJson( $data )
	{
		header('Content-Type: application/json');

		echo  json_encode( $data )  ;	

	}



}