<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
		<title>Best Services in World</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		
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
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<p class="navbar-brand">service provider section</p>

				</div>
			</div>	
		</nav>

<!-- jumbotron -->

<div class="container">
<div class="jumbotron">
<div class="row">
<div class="col-md-8">

gdgergrdgrgre
</div>
<div class="col-md-4" style="backgroun-color:#eeeeee;">
<h4>REGISTER NOW & start selling services online</h4>
			    				<form>
									<div class="form-group">
										<input type="text" class="form-control" id="company" placeholder="company name">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" id="email" placeholder="email">
									</div>
									<div class="form-group">
										<input type="text"  class="form-control" id="mobile" placeholder="mobile">
									</div>

								    <div class="form-group">
										<input type="text" class="form-control" id="email" placeholder="email">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" id="area" placeholder="enter area you want to provide service">
									</div>
                                    <div class="row">
                                    <div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" id="category" placeholder="enter the category">
									</div>
									</div>
                                    <div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" id="product" placeholder="enter the stuffs you want to service">
									</div>
									</div>
									</div>
									<div class="form-group">
										<input type="text" class="form-control" id="address" placeholder="enter your address">
									</div>
								
										<button type="submit" class="btn btn-block btn-primary">Submit</button>
									</form>
</div>
</div>
</div>
</div>

<!-- canvas -->
       <div class="container" style="margin-top: 15px">
       <p style="text-align:center;font-size:35px;">How To List Yourself As a Service Provider</p>
       <div class="row" style="margin-top:70px;">
       <div class="col-md-4 text-center">
           <canvas id="myCanvas1" style="height:70px">
Your browser</canvas>
       <p style="font-size:18px">Register Yourself</p>
       </div>
        <div class="col-md-4 text-center">
                 <canvas id="myCanvas2" style="height:70px;">
Your browser</canvas>
        <p style="font-size:18px">Our representative will contact you shortly</p>
        </div>
          <div class="col-md-4 text-center">
                 <canvas id="myCanvas3" style="height:70px;">
Your browser</canvas>
        <p style="font-size:18px">Start Selling Online</p>
        </div>
       </div>
       </div>

       <!-- we are here section -->

       <div style ='background-color: #5d6b69;height:390px;margin-top:80px'>
       <div class="container">
      <p style="font-size:25px;margin-top:50px;text-align:center">We Are Here To Help You Successfully</p>
      <p style="font-size:25px;text-align:center">Increase Your Service Demand</p>
      <div class="row" style="margin-top:40px">
      <div class="col-md-4" style="color:#b3b3b3">
      <p>After successfully recieving your details</p>
      <p>we analyze tha data you have given to us</p>
      <p>and according to that we list you in our </p>
      <p>online service world.</p>
      </div>
      <div class="col-md-4" style="color:#b3b3b3">
      <p>Once you are listed in our website you can</p>
      <p>sell your services online right at that moment.</p>
      <p>our representative will be in contact with you</p>
      <p>continously after registration for any kind of</p>
      <p>help.</p>
      </div>
      <div class="col-md-4" style="color:#b3b3b3">
      <p>Listing of services on ------------ is absolutely</p>
      <p>free. We does not charge anything to you for</p>
      <p>listing your services online.</p>
      </div>
      </div>
      </div>
       </div>

    <!-- header -->

    <div style="height:50px">
    <p style="text-align:center;margin-top:60px";>For any query mail us at : --------</p>
    </div>



           

       <!-- canvas script -->
       <script>

       var c = document.getElementById("myCanvas1");
var ctx = c.getContext("2d");
ctx.fillStyle = "#5dcaf5";
ctx.beginPath();
ctx.arc(144, 75, 65, 0, 2 * Math.PI);
ctx.closePath();
ctx.fill();

ctx.font = 60 +"px serif";
ctx.fillStyle = 'white';
ctx.textAlign = 'center';
ctx.fillText('1', 144, 90);



var c = document.getElementById("myCanvas2");
var ctx = c.getContext("2d");
ctx.fillStyle = "#5dcaf5";
ctx.beginPath();
ctx.arc(144, 75, 65, 0, 2 * Math.PI);
ctx.closePath();
ctx.fill();

ctx.font = 60 +"px serif";
ctx.fillStyle = 'white';
ctx.textAlign = 'center';
ctx.fillText('2', 144, 90);

var c = document.getElementById("myCanvas3");
var ctx = c.getContext("2d");
ctx.fillStyle = "#5dcaf5";
ctx.beginPath();
ctx.arc(144, 75, 65, 0, 2 * Math.PI);
ctx.closePath();
ctx.fill();

ctx.font = 60 +"px serif";
ctx.fillStyle = 'white';
ctx.textAlign = 'center';
ctx.fillText('3', 144, 90);

</script>


	</body>
	</html>