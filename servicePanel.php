<?php
	session_start();
?>
<?php require_once('includes/form_functions.php'); ?>
<?php require_once('includes/functions.php'); ?>
<?php include_once('includes/database_connection.php'); ?>
<?php 
	if (isset($_SESSION['name'])) {
		# code...
		$query = "SELECT department, hostel from student ";
		$query .= "WHERE rollno={$_SESSION['name']}";
		$result = mysql_query($query);
		$array = mysql_fetch_array($result);
		$hostel = $array['hostel'];
		$department = $array['department'];
	}
?>
<script type="text/javascript">
	function showNotice (file, id) {
		// alert(file);
		    var xmlhttp, content = "";
		    if (window.XMLHttpRequest){
		        // code for IE7+, Firefox, Chrome, Opera, Safari
		        xmlhttp=new XMLHttpRequest();
		    }
		    else{// code for IE6, IE5
		        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		    }
		    xmlhttp.onreadystatechange=function(){
		        if (xmlhttp.readyState==4 && xmlhttp.status==200){
		            document.getElementById(id).innerHTML=xmlhttp.responseText;
		          
		      }
		    }
		    xmlhttp.open("GET","ajax_practice.php?notice="+file,true);
		    xmlhttp.send();
	}

</script>
<div class="container" role="tabpanel" style="margin-top:0px;padding-top:0px;">
	<!-- tabs -->
	<ul class="nav nav-pills ">
		<li class="active"><a href="#admin" aria-controls="electronic" role="tab" data-toggle="tab">Admin Notice</a></li>
		<li><a href="#depatment" aria-controls="sanitary" role="tab" data-toggle="tab">
		<?php
			if (isset($department)) {
				echo $department;
			}
			else
				echo "Department";
		?>
		</a></li>
		<li><a href="#hostel" aria-controls="furniture" role="tab" data-toggle="tab">
		<?php
			if (isset($hostel)) {
				echo $hostel;
			}
			else
				echo "Hostel";
		?>
		</a></li>
		<li><a href="#student" aria-controls="tailor" role="tab" data-toggle="tab">Student</a></li>
	</ul>
</div>
			
			<!-- Tab Panes -->
<div class="jumbotron no-padding">	
	<div class="tab-content" style="margin-top:10px;">
			<!-- admin -->
	    <div role="tabpanel" class="tab-pane active" id="admin">
	    		<div class="container">
	    			<div class="md-col-4" style="float:left;">
	    				<h1>List Of Notices</h1>
							<ul style="width:95%;background-color:white;padding-left:0px;list-style:none;overflow:auto;">

								<?php
								if (isset($_SESSION['name'])) {
								  	# code...
								    
									$query = "SELECT title, filename from uploads ";
									$query .= "WHERE uploader='admin' ";
									$query .= "AND (availability='teacher' ";
									// $query .= "AND (availability='student' ";
									$query .= "OR availability='both')";
									//echo $query;
									$result = mysql_query($query);
									if (!$result) {
										echo "No Notice has been uploaded Yet";
									} else{
										while ($array = mysql_fetch_array($result)) {
											$filename = $array['filename'];
								?>
											<li onclick="showNotice('<?php echo $array["filename"]?>', 'displaynotice1')" style="width:100%;height:80px;border-bottom:1px solid black;padding-top:0px;padding-left:10px;cursor:pointer">
											<h4> <?php echo $array["title"]?></h4><br>
								<?php
											echo "</li>";	
										}
										
									}
								}
								?>
							<!-- </ul> -->
	    			</div>
	    			<div class="md-col-8" style="float:left;" id="displaynotice1">
	    				<h3 class="center">Notice Will Be Displayed Here</h3>
	    			</div>
	    			
	    		</div>
	    		
	    </div>
	    <!-- department -->
	    <div role="tabpanel" class="tab-pane" id="depatment">
	    		<div class="container">
	    			<div class="md-col-4" style="float:left;">
	    				<h1>List Of Notices</h1>
							<ul style="width:95%;background-color:white;padding-left:0px;list-style:none">

								<?php  
								if (isset($_SESSION['name'])) {
									$query = "SELECT title, filename from uploads ";
									$query .= "WHERE uploader='CSE' ";
									$query .= "AND (availability='student' ";
									$query .= "OR availability='both')";
									//echo $query;
									$result = mysql_query($query);
									if (!$result) {
										echo "No Notice has been uploaded Yet";
									} else{
										while ($array = mysql_fetch_array($result)) {
											$filename = $array['filename'];
								?>
											<li onclick="showNotice('<?php echo $array["filename"]?>', 'displaynotice2')" style="width:100%;height:80px;border-bottom:1px solid black;padding-top:0px;padding-left:10px;cursor:pointer">
											<h4> <?php echo $array["title"]?></h4><br>
								<?php
											echo "</li>";	
										}	
									}
								}
								?>
							<!-- </ul> -->
	    			</div>
	    			<div class="md-col-8" style="float:left;" id="displaynotice2">
	    				<h3 class="center">Notice Will Be Displayed Here</h3>
	    			</div>
	    			
	    		</div>
	    		
	    </div>
	    <!-- hostel -->
	    <div role="tabpanel" class="tab-pane" id="hostel">
	    		<div class="container">
	    			<div class="md-col-4" style="float:left;">
	    				<h1>List Of Notices</h1>
							<ul style="width:95%;background-color:white;padding-left:0px;list-style:none">

								<?php  
								if (isset($_SESSION['name'])) {
									$query = "SELECT title, filename from uploads ";
									$query .= "WHERE uploader='dbh' ";
									$query .= "AND (availability='student' ";
									$query .= "OR availability='both')";
									//echo $query;
									$result = mysql_query($query);
									if (!$result) {
										echo "No Notice has been uploaded Yet";
									} else{
										while ($array = mysql_fetch_array($result)) {
											$filename = $array['filename'];
								?>
											<li onclick="showNotice('<?php echo $array["filename"]?>', 'displaynotice3')" style="width:100%;height:80px;border-bottom:1px solid black;padding-top:0px;padding-left:10px;cursor:pointer">
											<h4> <?php echo $array["title"]?></h4><br>
								<?php
											echo "</li>";	
										}
										
									}
								}
								?>
							<!-- </ul> -->
	    			</div>
	    			<div class="md-col-8" style="float:left;" id="displaynotice3">
	    				<h3 class="center">Notice Will Be Displayed Here</h3>
	    			</div>
	    			
	    		</div>
	    		
	    </div>
	    <!-- studenr -->
	    <div role="tabpanel" class="tab-pane" id="student">
	    		<div class="container">
	    			<div class="md-col-4" style="float:left;">
	    				<h1>List Of Notices</h1>
							<ul style="width:95%;background-color:white;padding-left:0px;list-style:none">

								<?php  
								if (isset($_SESSION['name'])) {
									$query = "SELECT title, filename from uploads ";
									$query .= "WHERE uploader='student' ";
									$query .= "AND (availability='student' ";
									$query .= "OR availability='both')";
									//echo $query;
									$result = mysql_query($query);
									if (!$result) {
										echo "No Notice has been uploaded Yet";
									} else{
										while ($array = mysql_fetch_array($result)) {
											$filename = $array['filename'];
								?>
											<li onclick="showNotice('<?php echo $array["filename"]?>', 'displaynotice4')" style="width:100%;height:80px;border-bottom:1px solid black;padding-top:0px;padding-left:10px;cursor:pointer">
											<h4> <?php echo $array["title"]?></h4><br>
								<?php
											echo "</li>";	
										}
									}
								}
								?>
							<!-- </ul> -->
	    			</div>
	    			<div class="md-col-8" style="float:left;" id="displaynotice4">
	    				<h3 class="center">Notice Will Be Displayed Here</h3>
	    			</div>
	    			
	    		</div>
	    		
	    </div>
	</div>
</div>