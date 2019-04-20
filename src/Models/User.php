<?php 

class User extends Model
{
	
	private $db ;

	public function __construct()
	{
		$this->db = $this->GetDatabase()->Connect() ;
	}

	public function GetUsers()
	{
		$sql   = 'SELECT username, surname, type  FROM users ';
		$users = $this->db->query( $sql )->fetchAll(PDO::FETCH_OBJ) ;
		//$users = $stmt->;

		return $users ; 
	}

	public function GetUser( $username )
	{
		$sql   = "SELECT username, surname, type FROM users  where username='$username'" ;
		$user = $this->db->query( $sql )->fetch(PDO::FETCH_OBJ) ;
		//$users = $stmt->;

		return $user ; 
	}

}