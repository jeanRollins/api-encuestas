<?php 

class LoginController extends LoginController
{
	public function __contruct()
	{
		$user = $this->GetInstance( "User" ) ;
	}

	private function Validate( $username , $password )
	{
		
	}

	public function Login() 
	{
		
	}
}