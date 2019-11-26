<?php
	session_start();	
	$conn =mysqli_connect('localhost','root','','cms');  

	if(isset($_POST['lecture'])) {

		$lecture=$_POST['lecture'];
		$faculty=$_POST['faculty'];
		$startDate=$_POST['startDate'];
		$endDate=$_POST['endDate'];

		$startTime=$_POST['startTime'];	
		$startTime = date('h:i A', strtotime($startTime));

		$endTime=$_POST['endTime'];
		$startTime = date('h:i A', strtotime($endTime));

		$day=$_POST['day'];


		$lectureInsert="insert into lecture values (null, '$lecture','$faculty','$startDate','$endDate','$startTime','$endTime','$day')";
		$result=mysqli_query($conn,$lectureInsert);

		
		if($result) {	
			$_SESSION['lecture']=true;
			header("Location: adminHome.php");
		}else{
			echo "have problem";
	    }
	}

	if(isset($_POST['event'])) {

		$eventName=$_POST['eventName'];
		$description=$_POST['description'];
		$date=$_POST['date'];

	
		$eventInsert="insert into event values (null, '$eventName','$description','$date')";
		$result=mysqli_query($conn,$eventInsert);
		
		if($result) {	
			$_SESSION['event']=true;
			header("Location: adminHome.php");
		}else{
			echo "have problem";
	    }
	}

	if(isset($_POST['holiday'])) {

		$date=$_POST['date'];
		$day=$_POST['day'];
		$reason=$_POST['reason'];
		$comments=$_POST['comments'];	

		$holidayInsert="insert into holiday values (null,'$date','$day','$reason','$comments')";
		$result=mysqli_query($conn,$holidayInsert);

		
		if($result) {	
			$_SESSION['holiday']=true;
			header("Location: adminHome.php");
		}else{
			echo "have problem";
	    }
	}


?>