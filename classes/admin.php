<?php

class Cl_User
{
	
	public $_con;

	/**
	 * it will initalize DBclass
	 */
	public function __construct()
	{
		$db = new Cl_DBclass();
		$this->_con = $db->con;
	}

    public function login($roll,$password)
	{

        $query = "SELECT id FROM admin WHERE department = '$roll' AND password = '$password'";
        echo $query;
		$result_login = mysqli_query($this->_con, $query);
		$count = mysqli_num_rows($result_login);
		$array = mysqli_fetch_array($result_login);
		if( $count == 1){
			$_SESSION['user'] = $roll;
			header("location: admin_panel.php"); // Redirecting To index Page
			return true;
		}else{
			throw new Exception( 'login failed' );
		}
		
	}



}