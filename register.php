<?php
session_start();
require("config/connection.php");
?>
<!DOCTYPE html>
<html>
<head>

	<title>ajax jquery</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/main.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
	<div class="container-fluid ">   
		<div class="col-md-2 form_bg">
			<h1 class="title">Register here to enjoy <span class="market">our Services</span></h1>
			<br/>
			<?php echo $_SESSION["username"] = $username;?>
			<form method="POST" action="register.php" name="register" onsubmit="return validate();">

				<?php include('errors.php');?>
				<label>Username</label>
				<input type="text" name="username" id="username" class="form-control" style="width:300px; " value="<?php echo $username; ?>"/>
				<br/>
				
				<label>Email</label>
				<input type="text" name="email" id="email" class="form-control" style="width:300px;" value="<?php echo $email; ?>"/>
				<br/>
				
				<label>Password</label>
				<input type="password" name="password" id="password" class="form-control" style="width:300px;" value="<?php echo $password; ?>"/>
				<br/>
				<label>Confirm Password</label>
				<input type="password" name="password_1" id="password_1" class="form-control" style="width:300px;"/>
				<br/>
				<button type="button" name="show_password" id="show_password" class="btn btn-default">Show Password</button>
			</br>
			<input type="radio" name="privacy" class="privacy_policy" />I agree to the terms of Service
		</br>
		<input type="submit" value="Submit" class="btn btn-success custom_submit" id="submit" name="submit_btn"/>
		<p>Already have an account?<button type="button" name="login" id="login" class="btn btn-info" data-toggle="modal" data-target="#loginModal">Login</button></p>
		

	</form>

</div>  
<div class="col-md-10 section_2">
	<div id="sidebar"> 
		<ul>
			<li><a href="#">Link1</a></li>
			<li><a href="#">Link2</a></li>
			<li><a href="#">Link3</a></li>
			<li><a href="#">Link4</a></li>
			<li><a href="#">Link5</a></li>
		</ul>
		<div id="sidebar-btn">
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<div class="input-group add-on search">
		<input class="form-control" placeholder="Search" name="srch-term" id="srch-term" type="text">
		<div class="input-group-btn">
			<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
		</div>
	</div>
	<div class="row no-pad">
		<div class="col-md-6 about">
			<h1 class="title">Control the way you work </h1>
			<p >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas placerat viverra odio eu congue. Nulla quam est, suscipit pulvinar lectus eget, egestas sodales erat. Praesent sit amet lacus ipsum. In fermentum nec velit in tristique. Duis interdum, tellus eu pellentesque euismod, augue ante viverra justo, sed ultrices nunc nulla nec arcu. Maecenas id quam et ante scelerisque consequat. Mauris vel lorem nisi. Nam sodales pretium rhoncus. Quisque sit amet nunc quis nunc consequat dictum at ac sapien. Suspendisse ac nunc interdum sapien aliquet euismod. Sed vitae efficitur metus, eget ultrices urna.</p>
		</div>
		<div class="col-md-6 image">
			<img src="img/control.jpg" alt="control" class="img-responsive">
		</div>
	</div>
	<h1 class="left-title">Our Services</h1>
	<div class="row no-pad">
		<div class="col-md-4 col-1 col">
			<figure>
				<img src="img/block-chain.jpg " class="img-responsive" />
				<figcaption>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas placerat viverra odio eu congue. Nulla quam est, suscipit pulvinar lectus eget, egestas sodales erat. Praesent sit amet lacus ipsum. In fermentum nec velit in tristique.
				</figcaption>
			</figure>
		</div>
		<div class="col-md-4 col-2 col">
			<figure>
				<img src="img/network-2.jpg" class="img-responsive" />
				<figcaption>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas placerat viverra odio eu congue. Nulla quam est, suscipit pulvinar lectus eget, egestas sodales erat. Praesent sit amet lacus ipsum. In fermentum nec velit in tristique.
				</figcaption>
			</figure>
		</div>
		<div class="col-md-4 col-3 col">
			<figure>
				<img src="img/network-3.jpg" class="img-responsive" />
				<figcaption>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas placerat viverra odio eu congue. Nulla quam est, suscipit pulvinar lectus eget, egestas sodales erat. Praesent sit amet lacus ipsum. In fermentum nec velit in tristique.
				</figcaption>
			</figure>
		</div>
	</div>

</div>	

</div>

<script>
	$(document).ready(function(){
		$('#show_password').on('click', function(){
			var passwordField = $('#password');
			var passwordField_1 = $('#password_1');
			var passwordFieldType=passwordField.attr('type');
			var passwordFieldType_1=passwordField_1.attr('type');

			if(passwordFieldType =='password' && passwordFieldType_1 =='password'){
				passwordField.attr('type','text');
				passwordField_1.attr('type','text');
				$(this).text('Hide');
			}
			else{
				passwordField.attr('type' ,'password');
				passwordField_1.attr('type' ,'password');
				$(this).text('Show');
			}
		});
		$('#sidebar-btn').click(function() {
			$('#sidebar').toggleClass('visible');
		});

		$('#login_button').click(function(){  
			var username = $('#username_2').val();  
			var password = $('#password_2').val();  
			if(username != '' && password != '')  
			{  
				$.ajax({  
					url:"action.php",  
					method:"POST",  
					data: {username:username, password:password},  
					success:function(data)  
		{  
					 // alert(data);  
					 if(data == 'No')  
					 {  
					 	alert("Wrong Data");  
					 }  
					 else  
					 {  
					 	$('#loginModal').hide();  
					 	window.location.href = "home.php";  
					 }  
					}  
				});  
			}  
			else  
			{  
				alert("Both Fields are required");  
			}  
		}); 
});
</script>
<!-- <script>
function validate()
{
    var User = document.register.username.value;
    var Email = document.register.name.value;
    var Pass = document.register.password.value;
   if(User == "")
   {
	  alert("please enter username");
	  return false;
   }
   if(Email == "")
   {
	  alert("please enter email");
	  return false;
   }
   if(Pass =="")
   {
	  alert("please enter pass");
	  return false;
   }
   return true;
}
</script> -->
</div>
<!-- modal -->
<div id="loginModal" class="modal fade" role="dialog">  
	<div class="modal-dialog">  
		<!-- Modal content-->  
		<div class="modal-content">  
			<div class="modal-header">  
				<button type="button" class="close" data-dismiss="modal">&times;</button>  
				<h4 class="modal-title">Login</h4>  
			</div>  
			<div class="modal-body">  
				<label>Username</label>  
				<input type="text" name="username" id="username_2" class="form-control" />  
				<br />  
				<label>Password</label>  
				<input type="password" name="password" id="password_2" class="form-control" />  
				<br />  
				<button type="button" name="login_button" id="login_button" class="btn btn-warning">Login</button>  
			</div>  
		</div>  
	</div>  
</div>
<!-- end modal -->
</body>
</html>