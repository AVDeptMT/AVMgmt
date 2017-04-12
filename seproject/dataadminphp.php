<!DOCTYPE html>
<html lang="en">
<head>
  <title>Database Administration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../seproject/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="../seproject/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
	  background-color: #0066CC;
      margin-bottom: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
    }
	label{
		margin-bottom: 20px;
	}
	.sub{
		margin-right: 20px;
	}
	.col-centered{
		float: none;
		margin: 0 auto;
	}
  </style>
</head>
<body>
<!--this php section establishes a link to our database-->
<?php
     $user = 'root';
     $password = 'root';
     $db = 'trans_path';
     $host = 'localhost';
     $port = 8889;

     $link = mysqli_init();
     $success = mysqli_real_connect(
        $link, 
        $host, 
        $user, 
        $password, 
        $db,
        $port
     );
?>
<div class="jumbotron">
  <div class="container-fluid text-center">
    <h2><img src="../seproject/images/avlogo.png" alt="HTML5 Icon" style = "float:left"><font color = "white">Audio/Visual Services</font><img src="../seproject/images/mtsuwhite.png" alt="HTML5 Icon" style = "float:right"></h2>      
    <h2><font size="6" color="white">Database Administration</font></h2>
  </div>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="homepage.html">Home</a></li>
        <li><a href="checkout.html">Checkout</a></li>
        <li><a href="checkin.html">Checkin</a></li>
        <li><a href="reports.html">Reports</a></li>
        <li class="active"><a href="dataadmin.html">Database Administration</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container-fluid">    
  <div class="row">
    <div class="col-sm-5 col-centered">
      <div class="panel panel-primary">
        <div class="panel-heading text-center">Administration Tool Selection</div>
        <div class="panel-body">
			<form action="*****">
			<ul>
				<li><label>
					Option Placeholder: <select>
										<option value="none"></option>
										<option value="overdue">placeholder</option>
								   </select>
					<br>
				</label></li>
				<li><label>
					Option Placeholder: <select>
										<option value="none"></option>
										<option value="placeholder">placeholder</option>
									 </select>
					<br>
				</label></li>
				<li><label>
					Option Placeholder: <select>
										<option value="none"></option>
										<option value="repair">placeholder</option>
								   </select>
					<br>
				</label></li>
				<li><label>
					<input class="sub" type="submit" value="Request Admin Tool"><input type="reset" value="Clear Request">
				</label></li>
			</ul>
			</form>
		</div>
      </div>
    </div>
  </div><br>
</div>
</body>
</html>
