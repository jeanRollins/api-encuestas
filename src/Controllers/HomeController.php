<?php  


class HomeController extends Controller
{

	public function Test()
	{
		echo $this->GetInstance("User")->name ;
	}
}