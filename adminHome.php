<?php   
   	session_start();  
    if(!isset($_SESSION['adminName'])){
        header("location: index.php");
    }
?>

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

		<div id="index" class=" text-center">

			<h1>Admin Home page</h1>	
			<h2>I am Admin [<?php  echo $_SESSION['adminName'] ?>] </h2>
			<div>
				<form action="" method="post" style="padding-bottom: 100px;">
					<button type="submit" class="btn btn-info" name="lecture">Add Lecture</button>  
					<button type="submit" class="btn btn-danger" name="event">Add Event</button>  
					<button type="submit" class="btn btn-info" name="holiday">Add Holidays</button> 
					<a class="btn btn-danger" href="logout.php">Logout</a>	
  				</form>						
			</div>

			<?php if(isset($_SESSION['lecture'])) { ?>
            <?php 
                  echo '<script type="text/javascript">
                        alert("Hellow admin! Your lecture insert successfully.");
                     </script>';
                  ?> 
         <?php } ?>

         <?php if(isset($_SESSION['event'])) { ?>
            <?php 
                  echo '<script type="text/javascript">
                       alert("Hellow admin! Your event insert successfully.");
                     </script>';
                  ?> 
         <?php } ?>

         <?php if(isset($_SESSION['holiday'])) { ?>
            <?php 
                  echo '<script type="text/javascript">
                        alert("Hellow admin! Your holiday,s reason insert successfully.");
                     </script>';
                  ?> 
         <?php } ?>

			<?php if(isset($_POST['lecture'])) { ?>		
				
				<form action="allDataSet.php" method="POST">     		
					<div class="col-md-offset-2 col-md-8" style="background-color: #1abc9c;">		
						<h3>Add Lecture</h3>

							<div class="form-group">
								Lecture Name: <input type="text" name="lecture" required>
	                  </div>

	                  <div class="form-group">
								Faculty Name: <input type="text" name="faculty" required>
	                  </div>

	                  <div class="form-group">
								Start Date: <input type="date" name="startDate" required>
	                  
								End Date: <input type="date" name="endDate" required>
	                  </div>

	                  <div class="form-group">
								Start Time: <input type="text" name="startTime" required>
						                  
								End Time: <input type="text" name="endTime" required>
	                  </div>

	                  <div class="form-group">
								Day Name: <input type="text" name="day" required>
	                  </div>

							<button type="submit" class="btn btn-info" name="submit">Submit</button>  
					</div>				
				</form>
			<?php } ?>

			<?php if(isset($_POST['event'])) { ?>		
				
				<form action="allDataSet.php" method="POST">     		
					<div class="col-md-offset-2 col-md-8" style="background-color: #9C27B0;">		
						<h3>Add Event</h3>

							<div class="form-group">
								Event Name: <input type="text" name="eventName" required>
	                  </div>

	                  <div class="form-group">
								Description Name: <input type="text" name="description" required>
	                  </div>

	                  <div class="form-group">
								Date: <input type="date" name="date" required>							
	                  </div>

							<button type="submit" class="btn btn-info" name="event">Submit</button>  
					</div>				
				</form>
			<?php } ?>

			<?php if(isset($_POST['holiday'])) { ?>	
				
				<form action="allDataSet.php" method="POST">     		
					<div class="col-md-offset-2 col-md-8"  style="background-color: #4CAF50;">		
						<h3>Add Holidays</h3>							                 

	                  <div class="form-group">
								Date: <input type="date" name="date" required>							
	                  </div>
	                  <div class="form-group">
								Day: <input type="text" name="day" required>							
	                  </div>
	                  <div class="form-group">
								Reason: <input type="text"  name="reason" required>
	                  </div>
	                   <div class="form-group">
								Comments: <input type="text"  name="comments" required>
	                  </div>


							<button type="submit" class="btn btn-info" name="holiday">Submit</button>  
					</div>				
				</form>
			<?php } ?>   
		</div>

		<div id="footer">
			<h2 class="text-center">Classroom Management System</h2>		
		</div>

	</body>	
</html>

<?php unset($_SESSION['lecture']); ?>
<?php unset($_SESSION['event']); ?>
<?php unset($_SESSION['holiday']); ?>
