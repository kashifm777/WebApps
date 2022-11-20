<html>
	<head>
		<title>Create New User Account</title>

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
			<div class="body"><br>
				<center>
					<form class="center_form" action="new_user_form_handler.php" method="POST" id="new_user_from">
						<h2><i class="fa fa-user-plus" aria-hidden="true"></i> CREATE NEW USER ACCOUNT</h2><br>
						<table cellpadding='10'>
							<tr>
								<td><strong>ENTER LOGIN DETAILS</strong></td>
							</tr>
							<tr>
								<td>Enter a valid username  </td>
								<td><input type="text" name="username" required></td>
							</tr>
							<tr>
								<td>Enter your desired password</td>
								<td><input type="password" name="password" required></td>
							</tr>
							<tr>
								<td>Enter your email ID</td>
								<td><input type="text" name="email" required></td>
							</tr>
							<tr>
								<td><strong>ENTER CUSTOMER'S PERSONAL DETAILS</strong></td>
							</tr>
							<tr>
								<td>Enter your name  </td>
								<td><input type="text" name="name" required></td>
							</tr>
							<tr>
								<td>Enter your phone no.</td>
								<td><input type="text" name="phone_no" required></td>
							</tr>
							<tr>
								<td>Enter your address</td>
								<td><input type="text" name="address" required></td>
							</tr>
						</table><br>
						<input type="submit" value="Submit" name="Submit"><br>
				</form><br>
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