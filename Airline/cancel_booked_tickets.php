<?php
	session_start();
?>
<html>
	<head>
		<title>Cancel Booked Tickets</title>

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
					<li><a href="customer_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
					<li><a href="home_page.php"><i class="fa fa-plane" aria-hidden="true"></i> About Us</a></li>
					<li><a href="home_page.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
					<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
				</ul>
			</div>
			<div class="body" style="padding: 100px"><br>
				<center>
					<form action="cancel_booked_tickets_form_handler.php" method="post">
						<h2>CANCEL BOOKED TICKETS</h2>
						<?php
							if(isset($_GET['msg']) && $_GET['msg']=='failed')
								echo "<strong style='color: red'>*Invalid PNR, please enter PNR again</strong><br><br>";
						?>
						<table cellpadding="5">
							<tr>
								<td>Enter the PNR</td>
							</tr>
							<tr>
								<td><input type="text" name="pnr" required></td>
							</tr>
						</table><br>
						<div>
							<input type="submit" value="Cancel Ticket" name="Cancel_Ticket">
						</div>
					</form>
				</center><br>
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