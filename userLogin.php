<?php   

   session_start();  

   $userId=$_POST['userId'];
   $password=$_POST['password'];

   $conn =mysqli_connect('localhost','root','','cms');  

   $sql="select * from user where userId='$userId' AND password='$password' "; 

   $result=mysqli_query($conn,$sql);

   if ($result) {    

      $userName=$userId; 
      $_SESSION['userName']=$userName;
      
      $_SESSION['userLogin']=true;
      header("Location: userHome.php");
      
   }else{
         header("Location: index.php");
   }
?>