<?php 

class Validator
{
	public function Sanity( $data ) : string
	{
		$data  = trim( $data ) ;
		$data  = htmlspecialchars( $data ) ;
		$data  = filter_var( $data , FILTER_SANITIZE_STRING ) ;

		return $data ;
	}

	public function IsEmpty( $data ) : bool
	{
		if( empty( $data ) )
		{
			return false ;
		}

		if( is_null( $data ) )
		{
			return false ;
		}

		if( !isset( $data ) )
		{
			return false ;
		}

		return true ;
	}



}