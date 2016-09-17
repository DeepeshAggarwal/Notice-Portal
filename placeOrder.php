<?php
   require_once 'classes/config.php';
   $con = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
   if( mysqli_connect_error()) echo "Failed to connect to MySQL: " . mysqli_connect_error();
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
		<title>Best Services in World</title>

		<!-- CSS files -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">

		<!-- js files -->
		<script src="js/jquery1.11.2.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
       
       <!-- modify address and mobile -->
		<script>
		function modifyAddress()
		{
			document.getElementById('textAddress').disabled=false;
			return false;
		}

        function modifyMobile()
        {
        	document.getElementById('mobile').disabled=false;
        	return false;
        }

		</script>

       <!-- save address and mobile -->

      <script>
function saveAddress(modifiedValue)
 { 
 	alert(modifiedValue);
 	var xmlhttp;
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  
  xmlhttp.onreadystatechange=function(){
    if (xmlhttp.readyState==4 && xmlhttp.status==200){   
    	  
    	document.getElementById('textAddress').disabled = true; 
  	}
}

  xmlhttp.open("GET","saveAddress.php?value="+modifiedValue,true);
  xmlhttp.send();

  
}
</script>


    </head>
    <body>

    <!-- Header Section -->
		
	<nav class="navbar navbar-default" role="navigation" style="margin-bottom: 5px;">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
	      	<a class="navbar-brand" href="#">Services</a>
	    </div>
		
	</div>
</nav>	
	<!-- End Header Section -->

	<div class="container" style="margin-top:30px">
	<div class="row">
	<div class="col-md-5" style="margin-top:30px">

      <?php
      if(isset($_SESSION['email']))
      {
      	$user_email = $_SESSION['email'];
        $saltQuery2 = "SELECT address, mobile FROM customers WHERE email = '$user_email';";
        $result_pass2 = mysqli_query($con, $saltQuery2);
        $row2 = mysqli_fetch_assoc($result_pass2);
        $area_address = $row2['address'];
        $mobile = $row2['mobile'];
      ?> 
      
        <div style='width:400px;margin:auto'>
	        <textarea class='form-control' id='textAddress' rows='4' onchange="saveAddress(this.value)" disabled><?php echo $area_address; ?> </textarea>
	        <button type='button' class='btn btn-info btn-sm' style='margin-left:115px;margin-top:12px' onclick='modifyAddress();'>modify address</button>
	        <button type='button' class='btn btn-info btn-sm' style='margin-left:10px;margin-top:12px'>save</button>
        </div>
        
        <div class='form-group' style='margin-top:40px;margin-left:auto;margin-right:auto;width:400px;'>
	        <div class='input-group'>
	        	<span class='input-group-addon'>mobile</span>
	        	<input type='text' class='form-control' id='mobile' aria-describedby='mobile' value='<?php echo $mobile ?>' disabled>
	        </div>
	        <button type='button' class='btn btn-info btn-sm' style='margin-left:140px;margin-top:12px' onclick='modifyMobile();'>modify</button>
	        <button type='button' class='btn btn-info btn-sm' style='margin-left:10px;margin-top:12px'>save</button>
      	</div>
     <?php
      }
      else
      {
     
         // second
     ?>

         <div class='panel-group' id='accordion' role='tablist' aria-multiselectable='true'>
  <div class='panel panel-default'>
    <div class='panel-heading' role='tab' id='headingOne'>
     <h4 class='panel-title'>
        <a data-toggle='collapse' data-parent='#accordion' href='#collapseOne' aria-expanded='true' aria-controls='collapseOne'>
          Sign up
        </a>
      </h4>
    </div>
    <div id='collapseOne' class='panel-collapse collapse in' role='tabpanel' aria-labelledby='headingOne'>
      <div class='panel-body'>
       <!--  signup  -->
      <form method='post' action='user_register.php' id='user_form' name='user_form'>
								<div class='form-group'>
								<input type='text' class='form-control' id='email' name='email' placeholder='Email-Id'>
								</div>
								<div class='form-group'>
								<input type='text' class='form-control' id='mobile' name='mobile' placeholder='Mobile'>
								</div>
								<div class='form-group'>
								<input type='password' class='form-control' id='pass' name='pass' placeholder='Enter Password'>
								</div>
								<button type='submit' class='btn btn-block btn-primary' name='submit'>signup</button>
	  </form>

      </div>
    </div>
  </div>
  <div class='panel panel-default'>
    <div class='panel-heading' role='tab' id='headingTwo'>
      <h4 class='panel-title'>
        <a class='collapsed' data-toggle='collapse' data-parent='#accordion' href='#collapseTwo' aria-expanded='false' aria-controls='collapseTwo'>
          Login
        </a>
      </h4>
    </div>
    <div id='collapseTwo' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingTwo'>
      <div class='panel-body'>
       <!--  login -->
       <form method='post' action='user_login.php'>
								<div class='form-group'>
								<input type='text' class='form-control' id='email' name='email' placeholder='Email-Id'>
								</div>
								<div class='form-group'>
								<input type='password' class='form-control' id='pass' name='pass' placeholder='Enter Password'>
								</div>
								<button type='submit' class='btn btn-block btn-primary' name='submit'>Login</button>
		 </form>

      </div>
    </div>
  </div>
</div>

        <?php
        }
        ?>

	</div>

    <div class="col-md-2">

    <?php
    if(!isset($_SESSION['email']))
    {
    ?>

    <div style='height:150px;width:81px;margin-top:15px;border-left: solid #dedede;float:right'>
    </div>
    <p style='text-align:center;margin-top:172px;color:#b0b0b0'>OR</p>
    <div style='height:150px;width:81px;margin-top:0px;border-left: solid #dedede;float:right'>
    </div>

    <?php
    }
    ?>

    </div>

	<div class="col-md-5">

      <?php
      if(isset($_SESSION['email']))
      {

        $saltQuery = "SELECT mobile,address FROM customers WHERE email = '$user_email';";
        $result_pass = mysqli_query($con, $saltQuery);
        $row = mysqli_fetch_assoc($result_pass);
        $mobile = $row['mobile'];
        $address = $row['address'];
        if(is_null($address))
        {
        	$placeholder = "Enter your address";
        	$value ="";
        }
        else
        {
        	$placeholder = "";
        	$value = $address;
        }


         echo "<p style='margin-top:10px;font-size:22px'>When we will arrive at your house</p>";
         echo "<div style='background-color:#234567;height:360px;margin-top:22px'>";
      	 echo "<div style='width:370px;margin:auto;padding-top:40px'>";
      	 echo "<form>";
									echo "<div class='form-group'>";
									echo "<input type='text' class='form-control' id='name' placeholder='Enter your name'>";
									echo "</div>";
									echo "<div class='form-group'>";
									echo "<input type='text' class='form-control' id='email' name='email' placeholder='$user_email' disabled>";
									echo "</div>";
									echo "<div class='form-group'>";
									echo "<input type='text' class='form-control' id='mobile' value='$mobile'>";
									echo "</div>";
									echo "<div class='form-group'>";
									echo "<input type='text' class='form-control' id='address' placeholder='$placeholder' value='$value'>";
									echo "</div>";
									echo "<div class='form-group'>";
									echo "<input type='text' class='form-control' id='date' placeholder='Enter service date'>";
									echo "</div>";
								
									echo "<button type='submit' class='btn btn-block btn-success'>Place Service";
									echo "</button>";
		echo "</form>";
		echo "</div>";
      	echo "</div>";

      }
      else
      {
      	echo "<p style='margin-top:10px;font-size:22px'>Fill your details and place order as a guest";
      	echo "</p>";
      	echo "<div style='background-color:#234567;height:360px;margin-top:22px'>";
      	echo "<div style='width:370px;margin:auto;padding-top:40px'>";
      	echo "<form>";
									echo "<div class='form-group'>";
									echo "<input type='text' class='form-control' id='name' placeholder='Enter your name'>";
									echo "</div>";
									echo "<div class='form-group'>";
									echo "<input type='text' class='form-control' id='email' name='email' placeholder='Enter email'>";
									echo "</div>";
									echo "<div class='form-group'>";
									echo "<input type='text' class='form-control' id='mobile' placeholder='Enter mobile'>";
									echo "</div>";
									echo "<div class='form-group'>";
									echo "<input type='text' class='form-control' id='address' placeholder='Enter your address'>";
									echo "</div>";
									echo "<div class='form-group'>";
									echo "<input type='text' class='form-control' id='date' placeholder='Enter service date'>";
									echo "</div>";
									
								
									echo "<button type='submit' class='btn btn-block btn-success'>Place Service";
									echo "</button>";
		echo "</form>";
		echo "</div>";
      	echo "</div>";
      }

      ?>

	</div>
	</div>
	</div>


    </body>
    </html>