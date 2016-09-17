<?php
	session_start();
	// $_SESSION['email'] = '11547'
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
		<title>Online Notice Portal</title>

		<!-- CSS files -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" href="css/select2.css">
		<link rel="stylesheet" href="css/select2-bootstrap.css">

		<!-- js files -->
		<script src="js/jquery1.11.2.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script src="js/select2.js"></script>
		<!-- <script type="text/javascript" scr="js/serviceList.js"></script>-->
	</head>
	<body>

	<!-- User Drop Down Profile menu -->
	<?php 
		require_once("userProfile.php");
	?>

	<!-- Header Section -->	
	<?php 
		require_once("header.php");
	?>	
	<!-- End Header Section -->

	<!-- logIn and SignUp -->
	<?php 
		require_once("signLog.php");
	?>

	<!-- End logIn and SignUp -->

	<!-- Services Section -->
	<?php
		require_once("servicePanel.php");
	?>		
	<!-- End Of Service Section -->

    <!-- footer -->
<!--     <div style ='background-color:#5d6b69;height:100px;bottom:0px;margin-bottom:0px;width:100%;margin-top:50px;'>
    	where is this
    </div>
 -->    <!-- end footer -->


<!-- select box -->
	<script>
	    $(function(){
	      // turn the element to select2 select style
	      $('#select2').select2();
	  		
	    });
  	</script>
</body>
</html>

<!-- login php section -->
<?php
	if(isset($_SESSION['name']))
	{
		echo " <script> $('#loghide').replaceWith($('#userprofile'));</script>";
	}
	else
	echo " <script> $('#userprofile').hide();</script>";

?>