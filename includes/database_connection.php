<?php require_once 'constants.php'; ?>

<?php
	$connect = mysql_connect($DB_server, $DB_user_name, $DB_password );
	
	if(mysql_select_db($DB_name , $connect))
	{}

	else
		die('Error conection to the MYSQL Server');
?>