<?php 

	function redirect_to($page)
	{
		header("Location:{$page}");
		exit;
	}


	/*$required_fields = array('username' , 'name', 'email_id','password' );
        foreach ($required_fields as $value ) 
        {
            if(!isset($_POST['value']) || empty($_POST['value']) )
            {
                $error[] = $value; 
            }

            # code...
            #redirect_to(sign_up.php)
    	}
    */

?>