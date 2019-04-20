<?php  


class HomeController extends Controller
{

	public function Test()
	{
		$user = $this->GetInstance("User")->GetUser('jsoto') ;

		return $this->WithJson( $user ) ;

		//var_dump( $users ) ;
	}
}