<?php

//include '../Models/User.php';

class HomeController extends Controller
{
	protected $user;

	public function __construct()
	{	
		//Se instancia El objeto User
		$this->user = $this->GetInstance( "User" ) ;

	}
	
	public function test()
	{
		//obtiene todos los usuarios del modelo 'User' (Tabla users)
		$users = User::all();

		//muestro atributo username del modelo User
		 
		foreach($users as $us)
		{
			echo $us->username . '<br>' ;
		}		
		
		//Agregar un usuario a la tabla
		$_username = 'ltapia';
		$_surname  = 'Luis Tapia' ;
		User::create([ 'username' => $_username , 'surname' => $_surname]) ;

		//Encuentra un usuario de la tabla ('nombre de la columna', 'parametro')
		$userFounded = User::where( 'username', $_username )->first();
		var_dump( $userFounded );

		//Borra un usuario del modelo, devolviendolo por parametro
		$deletedRows = User::where( 'username', $_username )->delete() ;

	} 

	public function testing()
	{
		$_username  = 'cmaturana' ;
		$_surname   = 'Franco Maturana' ; 
		$password   = '123456' ;
		$_password  =  password_hash( $password , PASSWORD_BCRYPT );

		$response = User::create([ 'username' => $_username , 'surname' => $_surname , 'password' => $_password]) ;
	}

}