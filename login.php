<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "logindb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<title>Web Development</title>
	
  </head>
  <body>
	<section class="vh-100 gradient-custom">
		<div class="container py-5 h100">
		  <div class="row d-flex justify-content-center align-items-center h-100">
			<div class="col-10 col-md-8 col-lg-6 col-xl-5">
			  <div class="card bg-dark text-white" style="border-radius: 1rem;">
				<div class="card-body p-4 text-center">
	  
				  <div class="mb-md-3 mt-md-4">

                  <form id="frmlogin">
	  
					<h2 class="fw-bold mb-2 text-uppercase">Login</h2>
					<p class="text-white-50 mb-5">Please enter your Username and password!</p>
	  
					<div data-mdb-input-init class="form-outline form-white mb-4">
					  <input type="email" id="txtusername" name="txtusername" class="form-control form-control-lg" />
					  <label class="form-label" for="typeEmailX">Username</label>
					</div>
	  
					<div data-mdb-input-init class="form-outline form-white mb-4">
					  <input type="password" id="txtpasword" name="txtpassword" class="form-control form-control-lg" />
					  <label class="form-label" for="typePasswordX">Password</label>
					</div>
	  	  
					<button data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-light btn-lg px-5" id="btnlogin" type="submit">Login</button>
                  </form>
				  </div>	  
				</div>
			  </div>
			</div>
		  </div>
		</div>
	  </section>

    <script>
      $(document).ready(function(){

        $("#btnlogin").click(function(){
            //alert('hello');
            $.post("login_req.php",$("form#frmlogin").serialize(),function(d){

			alert(d);
        });
		});

      });

    </script>
  </body>
</html>