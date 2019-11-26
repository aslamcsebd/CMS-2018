<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="ISO-8859-1">
		<title>User Home</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>

<!-------------- navbar  -------------->

		<nav class="navbar navbar-default">
	    	<div class="container">
	        	<div class="navbar-header">          
	            <a class="navbar-brand" href="#">Home Page</a>
	        	</div>

	        	<div class="collapse navbar-collapse">
	            <ul class="nav navbar-nav navbar-right">
	               <li class="active"><a href="#">Home</a></li>
	               <li><a href="#">Admin</a></li>
	               <li><a href="#">User</a></li>
	               <li><a href="#">Contact</a></li>
	           	</ul>             
	        	</div>
	    	</div>
		</nav>
		<h1>Login Page</h1>	
		<div id="index" class=" text-center">
			
			<div class="row">	
				<div class="col-md-offset-2 col-md-4" style="background-color: #1abc9c;">		
					<h3>Admin Login</h3>
					<form action="adminLogin.php" method="POST">
						<div class="form-group">
							Admin Id: <input type="text" name="adminId" placeholder="Admin Id" required>         
                  </div>
                  <div class="form-group">
							Password: <input type="password" name="password" placeholder="Password" required>
                  </div>
						<button type="submit" class="btn btn-info" name="submit">Login</button>  
					</form>				
				</div>

				<div class="col-md-offset-1 col-md-4" style="background-color: #2ecc71;">		
					<h3>User Login</h3>
					<form action="userLogin.php" method="POST">
						<div class="form-group">
							<label>User Id</label>							
							<input type="text" name="userId" placeholder="User Id" required>          
                  </div>
                  <div class="form-group">
							<label>Password</label>							
							<input type="password" name="password" placeholder="Password" required>          
                  </div>
						<button type="submit" class="btn btn-info" name="submit">Login</button>  
					</form>				
				</div>
			</div>				
     	</div>
     	
		<div id="footer">
			<h2 class="text-center">Classroom Management System</h2>		
		</div>
	</body>	
</html>