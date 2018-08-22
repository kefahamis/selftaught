<?php  
//check.php  
require("../config/connection.php");

if(isset($_POST["user_name"]))
{
 $username = mysqli_real_escape_string($conn, $_POST["user_name"]);
 $sql = "SELECT * FROM registration WHERE username = '".$username."'";
 $result = mysqli_query($conn, $sql);

 if(mysqli_num_rows($result) > 0)
 {
     echo '<span class="text-danger">Username not available</span>';
     

 }
 else{
     echo '<span class="success">Username Available</span>';

 }
}
?>