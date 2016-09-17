<?php 
	session_start();
?>
<?php 
		require_once("adminProfile.php");
?>
<?php
	$page = "login.php";
	// to change it to not after tha page is done
	if (isset($_SESSION['id'])) {
		header("Location:{$page}");
	}
	echo "<script type=\"text/javascript\">";
	if (isset($_GET['upload']) && $_GET['upload']==0) {
		echo "alert(\"File Is Not Uploaded Or Not Given\")";
	} else if(isset($_GET['upload']) && $_GET['upload']==1){
		echo "alert(\"File Is Uploaded\")";
	}
	echo "</script>";
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
				
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<a class="navbar-brand hover-mouse"  id="loghide" data-toggle="modal" data-target="#myModal">LogIn</a>
				</div>
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-sm">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h3 class="modal-title center" id="myModalLabel">Log In</h3>
							</div>
							<div class="md-col-8" style="margin:20px auto">
								<form method="post" action="admin_login.php">
									<div class="form-group">
										<input type="text" class="form-control" id="username" name="username" placeholder="Enter Username">
									</div>
									<div class="form-group">
										<input type="password" class="form-control" id="pass" name="pass" placeholder="Enter Password">
									</div>
									<button type="submit" class="btn btn-block btn-primary">Log In</button>
								</form>
							</div>
							<br>
							<div class="modal-footer">
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<div class="container" role="tabpanel" style="margin-top:0px;padding-top:0px;">
			<!-- tabs -->
			<ul class="nav nav-pills ">
				<li class="active"><a href="#upload" aria-controls="upload" role="tab" data-toggle="tab">Upload Notices</a></li>
				<!-- <li><a href="#history" aria-controls="history" role="tab" data-toggle="tab">History</a></li> -->
			</ul>
		</div>
		<!-- Tab Panes -->
		<div class="jumbotron no-padding">	
			<div class="tab-content" style="margin-top:10px;">
					<!-- Electronics -->
				<?php if (isset($_SESSION['user'])) {
					# code...
				?>
			    <div role="tabpanel" class="tab-pane active" id="upload">
			    		<div class="container">
			    		<h4 style="text-align:center">Upload Notice</h4>
			    			<form action="upload.php" method="post" enctype="multipart/form-data" style="margin:20px auto;width:50%">
							    <div class="form-group form-inline">
									<label for="title">Title:</label>
									<input style="width:30%" type="text" class="form-control" id="title" name="title" placeholder="Enter title">
								</div>
								Who can See the Notice
								<div class="radio">
									<label>
										<input type="radio" name="availability" id="Student" value="student">Student
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="availability" id="Teacher" value="teacher">Teacher
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="availability" id="Both" value="both">Both
									</label>
								</div>
								For Which Department
								<Select class="form-control" name="department">
									<option value="CSE">Computer Science And Engineering</option>
									<option value="ECE">Electronics and Communication</option>
									<option value="EEE">Electrical And Eceltronics</option>
									<option value="MED">Mechanical Enginnering</option>
									<option value="CED">Civil Engineering</option>
									<option value="ARCI">Architecthure</option>
									<option value="ALL" selected="selected">ALL</option>
								</Select>
								<br>
								<div class="form-group form-inline">
								    <label for="fileToUpload">Select File</label>
								    <Input  class="btn" type="file" name="fileToUpload" id="fileToUpload" role="button">
							    </div>		
							    <input type="submit" class="btn center" name="submit" value="Upload Notice" style="margin:auto">
							</form>	
			    		</div>		
			    </div>
			    <?php
			    	}
			    	else{
			    ?>
			     <div role="tabpanel" class="tab-pane active" id="upload">
			    		<div class="container">
			    		<h4 style="text-align:center">Please Log In To Upload Notice</h4>
			    		</div>
			    		</div>
			    <?php
					}
					?>
			    <!-- sanitary -->
			    <div role="tabpanel" class="tab-pane" id="history">
			    	<div class="container">
			    			history of notices	
			    		</div>
			    </div>
			</div>
		</div>	
	</body>
	<?php
	if(isset($_SESSION['user']))
	{
		echo " <script> $('#loghide').replaceWith($('#userprofile'));</script>";
	}
	else
	echo " <script> $('#userprofile').hide();</script>";

?>