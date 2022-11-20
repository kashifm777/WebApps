<?php
	session_start();
?>
<html>
	<head>
		<title>Account Login</title>
		<style>
			input {
    			border: 1.5px solid brown;
    			border-radius: 4px;
    			padding: 7px 30px;
			}
			input[type=submit] {
				background-color: brown;
				color: white;
    			border-radius: 30px;
    			padding: 7px 45px;
    			margin: 0px 60px
			}
		</style>
		<link rel="stylesheet" type="text/css" href="css/styles.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
		<link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
	</head>
	<body>
		<div class="container">
			<div class="header">
				<img class="logo" src="images/caa.jpg"/> 
				<center><h1 id="title">Falcon Airlines</h1></center>
			</div>
			<div class="nav">
				<ul>
					<li><a href="home_page.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
					<li><a href="login_page.php"><i class="fa fa-ticket" aria-hidden="true"></i> Book Tickets</a></li>
					<li><a href="home_page.php"><i class="fa fa-plane" aria-hidden="true"></i> About Us</a></li>
					<li><a href="home_page.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
					<li><a href="login_page.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
				</ul>
			</div>
			<div class="body" style="padding: 80px">
				<form class="float_form" style="padding-left: 40px" action="login_handler.php" method="POST"><br>
					<fieldset style="border: 2px solid brown">
						<legend>Login Details: </legend>
						<strong>Username:</strong><br>
						<input type="text" name="username" placeholder="Enter your username" required><br><br>
						<strong>Password:</strong><br>
						<input type="password" name="password" placeholder="Enter your password" required><br><br>
						<strong>User Type:</strong><br>
						Customer <input type='radio' name='user_type' value='Customer' checked/> Administrator <input type='radio' name='user_type' value='Administrator'/><br>
						<?php
							if(isset($_GET['msg']) && $_GET['msg']=='failed')
								echo "<br><strong style='color:red'>Invalid Username/Password</	strong><br><br>";
						?>
						<input type="submit" name="Login" value="Login">
					</fieldset>
					<a href="new_user.php"><i class="fa fa-user-plus" aria-hidden="true"></i> Create New User Account?</a>
				</form><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			</div>
			<div class="footer"> 
      		  	<center>&copy
          			<script type="text/javascript">
            			document.write(new Date().getFullYear());
          			</script> 
					  All Right Reserved
				</center>
      		</div>
		</div>
	</body>
</html>