<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <!--Finalize title & add favicon to site (logo)-->
        <title>Swift E-Commerce</title>
        
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <!--Varify if two view ports are needed-->
        <meta name="viewport" content="width=device-width, inital-scale=1">
        
      
    </head>

    <body>

    <!-- navigation bar -->
		<nav class="navbar navbar-expand-md navbar-dark bg-dark">
			<div class="container-fluid">
				<a href="index.php"><img src="images/" alt="Company Logo"></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-end" id="navbar">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="index.php">HOME</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="services.php">SERVICES</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="offers.php">OFFERS</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="about.php">ABOUT US</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="contact.php">CONTACT US</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" button type="button" href="login.php" class="btn btn-primary" style="background-color: 	#d9e2ef; color:#000000;">Login/Sign Up</button></a>
						</li>	
					</ul>
				</div>
			</div>
		</nav>

		<div class="container-sm">
		<h2>Musella Hotel</h2>
		<br />
		<h3>Login</h3>
		<br /> 
        
		<form method="POST" action="<?php echo htmlentities( $_SERVER['PHP_SELF']); ?>">
		<div class="form-group row">
				<div class="col-md-4">
					<input type="text" name="uname" class="form-control" placeholder="Enter Username">
					
					<br /><br />
					<input type="email" name="email" class="form-control" placeholder="Enter email">
					
					<br /><br />
					<textarea name="subject" class=" form-control" placeholder="Type message subject" rows="1" cols="33"></textarea>
					<br /><br />
					<label for="message"><strong>Tell us</strong></label>
					<textarea  name="message" class=" form-control" placeholder="Type your messaege here" rows="5" cols="33"></textarea>
					<br /><br/>
					
					<input type="submit" class="btn btn-primary btn-lg" name="submit" value="Submit Form" required>
					<br /><br />
					<p>Don't have an account? <a href="register.php">Register today</a>.</p>
				</div>
			</div>
		</form>
      
	</div>

		
     
      

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   


    </body>
    <footer>
        
    </footer>



</html>