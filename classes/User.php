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

	/**
	 * this will handles user registration process
	 * @param array $data
	 * @return boolean true or false based success 
	 */
	
    /**
    * handles login section
    */

    public function login($roll,$password)
	{

        $query = "SELECT name FROM student WHERE rollno = '$roll' AND password = '$password'";
			$result_login = mysqli_query($this->_con, $query);
			$count = mysqli_num_rows($result_login);
			$array = mysqli_fetch_array($result_login);
			if( $count == 1){
				$_SESSION['name'] = $roll;
				header("location: index.php"); // Redirecting To index Page
				return true;
			}else{
				throw new Exception( 'login failed' );
			}
		
	}



}