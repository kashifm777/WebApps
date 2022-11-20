<?php
	session_start();
?>
<html>
	<head>
		<title>Welcome Administrator</title>

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
			<div class="body"><br><br><br><br>
				<h2>Welcome Administrator!</h2>
				<table cellpadding="5">
					<tr>
						<td class="admin_func"><a href="admin_view_booked_tickets.php"><i class="fa fa-plane" aria-hidden="true"></i> View List of Booked Tickets for a Flight</a>
						</td>
					</tr>
					<tr>
						<td class="admin_func"><a href="add_flight_details.php"><i class="fa fa-plane" aria-hidden="true"></i> Add Flight Schedule Details</a>						</td>
					</tr>
						<td class="admin_func"><a href="modify_flight_details.php"><i class="fa fa-plane" aria-hidden="true"></i> Modify Flight Schedule Details</a></td>
					</tr>
					<tr>
						<td class="admin_func"><a href="delete_flight_details.php"><i class="fa fa-plane" aria-hidden="true"></i> Delete Flight Schedule Details</a></td>
					</tr>
					<tr>
						<td class="admin_func"><a href="add_jet_details.php"><i class="fa fa-plane" aria-hidden="true"></i> Add Aircrafts Details</a></td>
					</tr>
					<tr>
						<td class="admin_func"><a href="activate_jet_details.php"><i class="fa fa-plane" aria-hidden="true"></i> Activate Aircraft</a></td>
					</tr>
					<tr>
						<td class="admin_func"><a href="deactivate_jet_details.php"><i class="fa fa-plane" aria-hidden="true"></i> Deactivate Aircraft</a></td>
					</tr>
				</table><br><br><br><br><br><br>
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