<?php 
	session_start();
?>
<?php
	$page = "login.php";
	// to change it to not after tha page is done
	if (isset($_SESSION['submit'])) {
		$query = "Update student ";
		$query .= "SET name={$_POST['title']}, ";
		$query .= "hostel={$_POST['hostel']}, ";
		$query .= "department={$_POST['department']}";
		$result = mysql_query($query);

		// header("Location:{$page}");
	}
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
		<title>Admin Panel | Online Notice Portal</title>

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
		<nav class="navbar navbar-default" role="navigation" style="margin-bottom: 5px;">
			<div class="container">
				<div class="navbar-header">
				<!-- this section for the mobile view -->
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
			      	<a class="navbar-brand" href="#">Online Notice Portal</a>
			    </div>
				
				<!-- <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<a class="navbar-brand hover-mouse"  id="loghide" data-toggle="modal" data-target="#myModal">LogIn</a>
				</div> -->
				
			</div>
		</nav>
		<div class="container" role="tabpanel" style="margin-top:0px;padding-top:0px;">
			<!-- tabs -->
			<ul class="nav nav-pills ">
				<li class="active"><a href="#upload" aria-controls="upload" role="tab" data-toggle="tab">Update Student Information</a></li>
				<!-- <li><a href="#history" aria-controls="history" role="tab" data-toggle="tab">History</a></li> -->
			</ul>
		</div>
		<!-- Tab Panes -->
		<div class="jumbotron no-padding">	
			<div class="tab-content" style="margin-top:10px;">
					<!-- Electronics -->
			    <div role="tabpanel" class="tab-pane active" id="upload">
			    		<div class="container">
			    		<h4 style="text-align:center">Update Student Information</h4>
			    			<form action="upload.php" method="post" enctype="multipart/form-data" style="margin:20px auto;width:50%">
							    <div class="form-group form-inline">
									<label for="title">Name:</label>
									<input style="width:30%" type="text" class="form-control" id="title" name="title" placeholder="Enter Name">
								</div>
								Select Hostel
								<Select class="form-control" name="hostel">
									<option value="DBH" selected="selected">DBH</option>
									<option value="MMH">MMH</option>
									<option value="KBH">KBH</option>
									<option value="MEGA">Mega Hostel</option>
									<option value="VBH">VBH</option>
									<option value="PGH">PGH</option>
									<option value="SBH">SBH</option>
									<option value="AGH">AGH</option>
								</Select>
								For Which Department
								<Select class="form-control" name="department">
									<option value="CSE" selected="selected">Computer Science And Engineering</option>
									<option value="ECE">Electronics and Communication</option>
									<option value="EEE">Electrical And Eceltronics</option>
									<option value="MED">Mechanical Enginnering</option>
									<option value="CED">Civil Engineering</option>
									<option value="ARCI">Architecthure</option>
									<!-- <option value="ALL" selected="selected">ALL</option> -->
								</Select>
								<br>
								
							    <input type="submit" class="btn center" name="submit" value="Update Infromation" style="margin:auto">
							</form>	
			    		</div>		
			    </div>
			    <!-- sanitary -->
			    <div role="tabpanel" class="tab-pane" id="history">
			    	<div class="container">
			    			history of notices	
			    		</div>
			    </div>
			</div>
		</div>	
	</body>