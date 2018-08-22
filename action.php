<?php  
session_start();  
require("config/connection.php"); 
if(isset($_POST["username"]))  
{ 

      $user_name = mysqli_real_escape_string($conn,$_POST['username']); 
      $password = mysqli_real_escape_string($conn,$_POST['password']); 
      $password =md5($password); 
      $query = "  
      SELECT * FROM registration  
      WHERE username = '$user_name'  
      AND pass_word = '$password'  
      ";  
      $result = mysqli_query($conn, $query);  
      if(mysqli_num_rows($result) > 0)  
      {  
       echo  $_SESSION['username'] = $user_name;
       echo 'Yes';  

 }  
 else  
 {  
       echo 'No';  
 }  
}  
if(isset($_POST["action"]))  
{  
     
      unset($_SESSION["username"]);  
}  
?>  

