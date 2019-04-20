<?php

require_once 'Credentials.php' ;

class Connection
{

	private $dbh 	  = '' ;
	private $error	  = '' ;
    private $HOST 	  = DB_HOST ;
    private $USER 	  = DB_USER ;
    private $DB_NAME  = DB_NAME ;
    private $PASSWORD = DB_PASSWORD ; 

    public function __construct()
    {
    	$DNS = "pgsql:dbname=$this->DB_NAME;host=$this->HOST"  ;

    	try
    	{	
    		$this->dbh = new PDO ( $DNS , $this->USER , $this->PASSWORD  ) ; 
           	$this->dbh->exec('set names utf8') ;
    	}
    	catch( PDOException $exception )
    	{
            $this->error = $exception->getMessage() ;
            echo $this->error ;
    	}
    }

    public function Connect()
    {
        return $this->dbh ;
    }

}