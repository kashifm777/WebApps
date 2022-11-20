<?php
	session_start();
?>
<html>
	<head>
		<title>Welcome to Falcon Airlines</title>
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
					<li>
					<?php
						if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Customer')
							echo "<a href=\"book_tickets.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";

						else if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Administrator')
							echo "<a href=\"admin_ticket_message.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";

						else
							echo "<a href=\"login_page.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
					?>
					</li>
					<li><a href="home_page.php"><i class="fa fa-plane" aria-hidden="true"></i> About Us</a></li>
					<li><a href="home_page.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
					<li><a href="pnrall.php"><i class="fa fa-ticket" aria-hidden="true"></i> Check PNR </a></li>
					<li>
					<?php
						if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Customer')
							echo "<a href=\"customer_homepage.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";

						else if (isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Administrator')
							echo "<a href=\"admin_homepage.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";

						else
							echo "<a href=\"login_page.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
					?>
					</li>
					<li><a href="new_user.php"><i class="fa fa-user-plus " aria-hidden="true"></i> Sign up</a></li>

				</ul>
			</div>
			<div>
				<img src="images/pia.jpg" width=100% height=78% style="float:left">
			</div>
			<div class="footer">
      			<center>
					&copy
        			<script type="text/javascript">
          				document.write(new Date().getFullYear());
        			</script> 
					All Right Reserved
				</center>
			</div>
		</div>
	</body>
</html>