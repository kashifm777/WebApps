<?php
	session_start();
?>
<html>
	<head>
		<title>View Available Flights</title>
		
		<link rel="stylesheet" type="text/css" href="css/styles.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css" >
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
					<li><a href="customer_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
					<li><a href="home_page.php"><i class="fa fa-plane" aria-hidden="true"></i> About Us</a></li> 
					<li><a href="home_page.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
					<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
				</ul>
			</div>
			<div class="body" style="padding: 42px"><br>
				<form action="view_flights_form_handler.php" method="post">
					<center>
						<h2>SEARCH FOR AVAILABLE FLIGHTS</h2>
				
						<table cellpadding="5">
							<tr>
								<td class="fix_table">Enter the Origin</td>
								<td class="fix_table">Enter the Destination</td>
							</tr>
							<tr>
								<td class="fix_table">
									<input list="origins" name="origin" placeholder="From" required>
  									<datalist id="origins">
  						  				<option value="Karachi">
										<option value="Islamabad">
  						  				<option value="Lahore">
  						  				<option value="Hyderabad">
  										<option value="Multan">
  					  					<option value="Faisalabad">
										<option value="Peshawar">
										<option value="Quetta">
										<option value="Larakana">
										<option value="Rawalpindi">
										<option value="Gujranwala">
										<option value="Sialkot">
										<option value="Sukkur">
										<option value="Bahawalpur">
										<option value="Gujrat">
										<option value="Mardan">
										<option value="Rahim Yar Khan">
										<option value="Sargodha">
  					  					<option value="Jhang">
										<option value="Kasur">
										<option value="Sheikhupura">
										<option value="Nawabshah">
										<option value="Abbottabad">
										<option value="Chakwal">
										<option value="Jacobabad">
										<option value="Sahiwal">
										<option value="Mianwali">
										<option value="Mīrpur Khās">
										<option value="Chaman">
										<option value="Thatta">
  									</datalist>
								</td>
								<td class="fix_table">
									<input list="destinations" name="destination" placeholder="To" required>
  									<datalist id="destinations">
						  				<option value="Karachi">
  						  				<option value="Islamabad">
  										<option value="Lahore">
  				  						<option value="Hyderabad">
  										<option value="Multan">
  				  						<option value="Faisalabad">
										<option value="Peshawar">
										<option value="Quetta">
										<option value="Larakana">
										<option value="Rawalpindi">
										<option value="Gujranwala">
										<option value="Sialkot">
										<option value="Sukkur">
										<option value="Bahawalpur">
										<option value="Gujrat">
										<option value="Mardan">
										<option value="Rahim Yar Khan">
										<option value="Sargodha">
  						  				<option value="Jhang">
										<option value="Kasur">
										<option value="Sheikhupura">
										<option value="Nawabshah">
										<option value="Abbottabad">
										<option value="Chakwal">
										<option value="Jacobabad">
										<option value="Sahiwal">
										<option value="Mianwali">
										<option value="Mīrpur Khās">
										<option value="Chaman">
										<option value="Thatta">
									</datalist>
								</td>
							</tr>
							<tr>
								<td class="fix_table">Enter the Departure Date</td>
								<td class="fix_table">Enter the No. of Passengers</td>
							</tr><br>
							<tr>
								<td class="fix_table"><input type="date" name="dep_date" min=
									<?php 
										$todays_date=date('Y-m-d'); 
										echo $todays_date;
									?> 
									max=
										<?php 
											$max_date=date_create(date('Y-m-d'));
											date_add($max_date,date_interval_create_from_date_string("90 days")); 
											echo date_format($max_date,"Y-m-d");
										?>
									required>
								</td>
								<td class="fix_table"><input type="number" name="no_of_pass" placeholder="Eg. 5" required></td>
							</tr>
							<tr>
								<td class="fix_table">Enter the Class</td>
							</tr>
							<tr>
								<td class="fix_table">
									<select name="class">
  										<option value="economy">Economy</option>
  										<option value="business">Business</option>
  									</select>
  								</td>
							</tr>
						</table><br>
						<input type="submit" value="Search for Available Flights" name="Search">
					<center>	
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