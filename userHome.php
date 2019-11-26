<?php   
   	session_start();  
    if(!isset($_SESSION['userLogin'])){
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
			<h1>User Home page</h1>
			<h2>I am user  [<?php  echo $_SESSION['userName'] ?>] </h2>	
			<div>
				<form action="" method="post" style="padding-bottom: 100px;">

					<button type="submit" class="btn btn-info" name="lecture">See Lecture</button>  
					<button type="submit" class="btn btn-danger" name="event">See Event</button>  
					<button type="submit" class="btn btn-info" name="holiday">See Holidays</button> 
					<a class="btn btn-danger" href="logout.php">Logout</a>
					</form>						
			</div>	

			<?php if(isset($_POST['lecture'])) { ?>
				<?php 
					$conn =mysqli_connect('localhost','root','','cms'); 
					$sql="select*from lecture"; 
					$result=mysqli_query($conn,$sql);
				?>	
				<div class="row">
					<h3>See Lecture</h3>
					<div class="col-md-offset-2 col-md-8" style="background-color: #1abc9c;">	
						<table class="table">
		  					<thead>
		  						<th>Lecture</th>
		  						<th>Faculty</th>
		  						<th>Start Date</th>
		  						<th>End Date</th>
		                 	<th>Start Time</th>
		                 	<th>End Time</th>
		                 	<th>Day</th>
		  					</thead>

		  					<tbody align="center">
		  					<?php while($row = mysqli_fetch_assoc($result)) { ?>
		  						<tr>
		  							<td><label> <?= $row['lecture'] ?></label> </td>
		  							<td><label> <?= $row['faculty'] ?></label> </td>
		  							<td><label> <?= $row['startDate'] ?></label> </td>
		  							<td><label> <?= $row['endDate'] ?></label> </td>
		  							<td><label> <?= $row['startTime'] ?></label> </td>
		  							<td><label> <?= $row['endTime'] ?></label> </td>
		  							<td><label> <?= $row['day'] ?></label> </td>
		  						</tr>
		  					<?php } ?>
		  					</tbody>
		  				</table>
		  			</div>
		  		</div>	
			<?php } ?>

			<?php if(isset($_POST['event'])) { ?>
				<?php 
					$conn =mysqli_connect('localhost','root','','cms'); 
					$sql="select*from event"; 
					$result=mysqli_query($conn,$sql);
				?>	
				<div class="row">
					<h3>See Event</h3>
					<div class="col-md-offset-3 col-md-6" style="background-color: #9C27B0;">	
						<table class="table">
		  					<thead>
		  						<th>Event</th>
		  						<th>Description</th>
		  						<th>Date</th>
		  					</thead>

		  					<tbody align="center">
		  					<?php while($row = mysqli_fetch_assoc($result)) { ?>
		  						<tr>
		  							<td><label> <?= $row['event'] ?></label> </td>
		  							<td><label> <?= $row['description'] ?></label> </td>
		  							<td><label> <?= $row['date'] ?></label> </td>		  							
		  						</tr>
		  					<?php } ?>
		  					</tbody>
		  				</table>
		  			</div>
		  		</div>	
			<?php } ?>	

			<?php if(isset($_POST['holiday'])) { ?>
				<?php 
					$conn =mysqli_connect('localhost','root','','cms'); 
					$sql="select*from holiday"; 
					$result=mysqli_query($conn,$sql);
				?>	
				<div class="row">
					<h3>See Holiday</h3>
					<div class="col-md-offset-3 col-md-6" style="background-color: #4CAF50;">	
						<table class="table">
		  					<thead>		  						
		  						<th>Date</th>
		  						<th>Day</th>
		  						<th>Reason</th>
		  						<th>Comments</th>
		  						
		  					</thead>

		  					<tbody align="center">
		  					<?php while($row = mysqli_fetch_assoc($result)) { ?>
		  						<tr>
		  							<td><label> <?= $row['date'] ?></label> </td>
		  							<td><label> <?= $row['day'] ?></label> </td>
		  							<td><label> <?= $row['reason'] ?></label> </td>
		  							<td><label> <?= $row['comments'] ?></label> </td>	  							
		  									  							
		  						</tr>
		  					<?php } ?>
		  					</tbody>
		  				</table>
		  			</div>
		  		</div>	
			<?php } ?>	

	  	</div>    	
		
	
	<div id="footer">
			<h2 class="text-center">Classroom Management System</h2>		
	</div>

</body>	
</html>