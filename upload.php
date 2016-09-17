<?php
	session_start();
?>
<?php require_once('includes/form_functions.php'); ?>
<?php require_once('includes/functions.php'); ?>
<?php include_once('includes/database_connection.php'); ?>

<?php
	$uploadOk = 0;	
	$url = "admin_panel.php";
	$url .= "?upload=";
	
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	
	#echo $_FILES['fileToUpload']['name'];
	#echo file_exists($_FILES['fileToUpload']['tmp_name']) . "yo";
	#echo is_uploaded_file($_FILES['fileToUpload']['tmp_name']);

	if(!file_exists($_FILES['fileToUpload']['tmp_name']) || !is_uploaded_file($_FILES['fileToUpload']['tmp_name'])) {
	    $uploadOk = 0;
	}
	else if(isset($_POST["submit"])) {
	    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	        $uploadOk = 1;
	    } else {
	        $uploadOk = 0;
	    }
	}
	echo $uploadOk;
	$url .= $uploadOk;

	$file = basename($_FILES["fileToUpload"]["name"]);
	if ($uploadOk) {
		$query = "INSERT into uploads(title, filename, uploader, availability, year, department) ";
		$query .= "VALUES ('{$_POST["title"]}', '{$file}', '{$_SESSION['user
			']}' , '{$_POST["availability"]}', 'ALL', '{$_POST['department']}')";
		echo $query;
		$result = mysql_query($query);
	}
	header("Location:{$url}");
?>
