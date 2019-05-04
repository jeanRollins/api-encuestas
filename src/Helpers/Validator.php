<?php 

class Validator
{
	private function Sanity( $data ) : string
	{
		$data  = trim( $data ) ;
		$data  = htmlspecialchars( $data ) ;
		$data  = filter_var( $data , FILTER_SANITIZE_STRING ) ;

		return $data ;
	}

	private function IsEmpty( $data ) : bool
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

	public function getSanity( $data )
	{
		return $this->Sanity( $data );
	}

	public function getIsEmpty( $data )
	{
		return $this->IsEmpty( $data );
	}

}