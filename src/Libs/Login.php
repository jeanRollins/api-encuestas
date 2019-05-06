<?php

App::use( 'Models' , 'Login' ) ;

class Login
{
    protected $user ;

    public function __construct()
    {
        User::all()  ;
    }

}
