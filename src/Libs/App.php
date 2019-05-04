<?php 

class App
{

	protected $controller = 'home' ;

	protected $method = 'index' ;

	protected $params = '[]' ;


	public function __construct()
	{
		$url = $this->GetUrl() ;

		if( $url[0] != 'api' )
		{
			echo 'Route api not found, please check you route.' ;  
			return ;
		}

		$url[1] =  ucwords( $url[1] ) . 'Controller';
		$routeFile = '../src/Controllers/' . $url[1] . '.php';

		if( !is_file( $routeFile ) )
		{
			echo 'Route not found, please check you route.' ;  
			return ;
		}

		$this->controller = $url[1] ;
		unset( $url[1] ) ;

		require_once '../src/Controllers/' . $this->controller . '.php' ;
		$this->controller = new $this->controller ;

		if( !isset( $url[2] ) )		
		{
			echo 'Please add a route.' ;  
			return ;	
		}

		if ( !method_exists( $this->controller , $url[2] ))
		{
			echo 'Method not found, please check you route.' ;  
			return ;	
		}

		$this->method = $url[2] ;
		unset( $url[2] ) ;

		$this->params = $url ? array_values( $url )  :  [] ;
 
		call_user_func_array( [$this->controller, $this->method] , $this->params ) ;
	}


	private function GetUrl()
	{	
		if( isset( $_GET['url'] ) ){

			$url = explode( '/' ,  filter_var( rtrim( $_GET['url'] , '/' ) , FILTER_SANITIZE_URL ) )  ;

			return $url ;
		}
	}

	private function Redirect()
	{
		header('Location: http://localhost/api-encuestas/public/home/index/') ;
		exit;
	}
}

