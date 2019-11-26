<?php   
   session_start();

   $userId=$_POST['adminId'];
   $password=$_POST['password'];

   $conn =mysqli_connect('localhost','root','','cms');  

   $sql="select * from admin where adminId='$adminId' AND password='$password' ";

   $result=mysqli_query($conn,$sql);

   if ($result) {   

      $adminName=$userId; 
      $_SESSION['adminName']=$adminName;
      
      $_SESSION['adminLogin']=true;
      header("Location: adminHome.php"); 

   }else{
         header("Location: index.php");
   }
?>