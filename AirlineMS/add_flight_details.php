<?php
	session_start();
?>
<html>
	<head>
		<title>Add Flight Schedule Details</title>

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
			<div>
				<ul>
					<li><a href="admin_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
					<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
				</ul>
			</div>
			<div class="body">
				<br><form action="add_flight_details_form_handler.php" method="post">
					<h2>ENTER THE FLIGHT SCHEDULE DETAILS</h2>
					<?php
						if(isset($_GET['msg']) && $_GET['msg']=='success')
							echo "<strong style='color: green'>The Flight Schedule has been successfully added.</strong><br><br>";
				
						else if(isset($_GET['msg']) && $_GET['msg']=='failed')
							echo "<strong style='color: red'>*Invalid Flight Schedule Details, please enter again.</strong><br><br>";
					?>
					<center>
						<table cellpadding="5">
							<tr>
								<td class="fix_table">Flight Number</td>
							</tr>
							<tr>
								<td class="fix_table"><input type="text" name="flight_no" required></td>
							</tr>
							<tr>
								<td class="fix_table">Origin</td>
								<td class="fix_table">Destination</td>
							</tr>
							<tr>
								<td class="fix_table"><input type="text" name="origin" required></td>
								<td class="fix_table"><input type="text" name="destination" required></td>
							</tr>	
							<tr>
								<td class="fix_table">Departure Date</td>
								<td class="fix_table">Arrival Date</td>
							</tr>
							<tr>
								<td class="fix_table"><input type="date" name="dep_date" required></td>
								<td class="fix_table"><input type="date" name="arr_date" required></td>
							</tr>
							<tr>
								<td class="fix_table">Departure Time</td>
								<td class="fix_table">Arrival Time</td>
							</tr>
							<tr>
								<td class="fix_table"><input type="time" name="dep_time" required></td>
								<td class="fix_table"><input type="time" name="arr_time" required></td>
							</tr>
							<tr>
								<td class="fix_table">Number of Seats in Economy Class</td>
								<td class="fix_table">Number of Seats in Business Class</td>
							</tr>
							<tr>
								<td class="fix_table"><input type="number" name="seats_eco" required></td>
								<td class="fix_table"><input type="number"" name="seats_bus" required></td>
							</tr>
							<tr>
								<td class="fix_table">Ticket Price(Economy Class)</td>
								<td class="fix_table">Ticket Price(Business Class)</td>
							</tr>
							<tr>
								<td class="fix_table">
									<input type="number" name="price_eco" required>
								</td>
								<td class="fix_table">
									<input type="number" name="price_bus" required>
								</td>
							</tr>
							<tr>
								<td class="fix_table">Jet ID</td>
							</tr>
							<tr>
								<td class="fix_table">
									<input type="text" name="jet_id" required>
								</td>
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