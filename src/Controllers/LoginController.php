<?php 

class LoginController extends Controller
{
	public function __contruct()
	{
		$user 		= $this->GetInstance( "User" ) ;
		$validator  = $this->GetHelper( "Validator" ) ;
	}

	private function Validate( $username , $password ) : bool
	{ 
		$userFounded = User::where( 'username', $username )->first();

		if( $userFounded == NULL ){

			return false ;
		}
		if( $username != $userFounded->username ){
			
			return false ;
		}
		if( !password_verify( $password , $userFounded->password ) ){
			
			return false ;
		}
		
		return true ;
	}

	public function Login() 
	{
		try {

			extract( $_POST );

			$response = $this->Validate( $username , $password ) ;

			return $this->WithJson( $response ) ;

		} 
		catch ( Exception $exception ) {
			
			return $this->WithJson( 'Error Login :' . $exception->getMessage() ) ;
		}
		
	}
}