
<?php

require("config/connection.php");

$username = "";
$email = "";
$errors = array();
if(isset($_POST['submit_btn']))
{
      $username = mysqli_real_escape_string($conn,$_POST['username']); 
           $email = mysqli_real_escape_string($conn,$_POST['email']); 
                $password = mysqli_real_escape_string($conn,$_POST['password']);
                     $password_1 = mysqli_real_escape_string($conn,$_POST['password_1']); 

                          if(empty($username))
                          {
                           array_push($errors, "username is required");
                     }

                     if(empty($email))
                     {
                           array_push($errors, "Email is required");
                     }

                     if(empty($password))
                     {
                           array_push($errors, "Password is required");
                     }

                     if(count($errors) == 0)
                     {
                           session_start();
                                $password =md5($password);
                                     $sql = "INSERT INTO registration (username,email,pass_word) VALUES('$username','$email','$password')";
                                     if(mysqli_query($conn,$sql))
                                     {
                                           
                                      $_SESSION['username'] =$username;
                                      echo $_SESSION['username'] =$username;
                                      header("location:register.php");
                                } 
                          }


                    }

                    ?>