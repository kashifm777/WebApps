<?php
	session_start();
?>
<html>
	<head>
		<title>View Booked Tickets</title>

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
					<li><a href="admin_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
					<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
				</ul>
			</div>
			<div class="body" style="padding: 100px 0px"><br>
				<form action="admin_view_booked_tickets_form_handler.php" method="post">
					<h2>VIEW LIST OF BOOKED TICKETS FOR A FLIGHT</h2>
					<center>
						<table cellpadding="5">
							<tr>
								<td class="fix_table">Enter the Flight No.</td>
								<td class="fix_table">Enter the Departure Date</td>
							</tr>
							<tr>
								<td class="fix_table"><input type="text" name="flight_no" required></td>
								<td class="fix_table"><input type="date" name="departure_date" required></td>
							</tr>
						</table><br>
						<div>
							<input type="submit" value="Submit" name="Submit">
						</div>
					</center>
				</form><br>
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