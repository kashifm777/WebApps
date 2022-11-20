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
				<img class="logo" src="images/plane_4.jpg"/> 
				<enter><h1 id="title">Falcon Airlines</h1></center>
			</div>
			<div class="nav">
				<ul>
					<li><a href="admin_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
					<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
				</ul>
			</div>
			<div class="body" style="padding: 120px"><br>
			<center>
				<h2>LIST OF BOOKED TICKETS FOR THE FLIGHT</h2>
				<?php
					if(isset($_POST['Submit'])) {
						$data_missing=array();
						if(empty($_POST['flight_no']))
							$data_missing[]='Flight No.';
						
						else
							$flight_no=trim($_POST['flight_no']);
				
						if(empty($_POST['departure_date']))
							$data_missing[]='Departure Date';
				
						else
							$departure_date=$_POST['departure_date'];

						if(empty($data_missing)) {
							require_once('Database Connection file/mysqli_connect.php');
							$query="SELECT pnr,date_of_reservation,class,no_of_passengers,payment_id,customer_id FROM Ticket_Details where flight_no=? and journey_date=? and booking_status='CONFIRMED' ORDER BY class";
							$stmt=mysqli_prepare($dbc,$query);
							mysqli_stmt_bind_param($stmt,"ss",$flight_no,$departure_date);
							mysqli_stmt_execute($stmt);
							mysqli_stmt_bind_result($stmt,$pnr,$date_of_reservation,$class,$no_of_passengers,$payment_id,$customer_id);
							mysqli_stmt_store_result($stmt);
							if(mysqli_stmt_num_rows($stmt)==0)
								echo "<h3>No booked tickets information is available!</h3>";
					
							else {
								echo "<table cellpadding=\"10\"";
								echo "<tr><th>PNR</th>
								<th>Date of Reservation</th>
								<th>Class</th>
								<th>No. of Passengers</th>
								<th>Payment ID</th>
								<th>Customer ID</th>
								</tr>";
								while(mysqli_stmt_fetch($stmt)) {
        							echo "<tr>
										<td>".$pnr."</td>
										<td>".$date_of_reservation."</td>
										<td>".$class."</td>
										<td>".$no_of_passengers."</td>
										<td>".$payment_id."</td>
										<td>".$customer_id."</td>
        							</tr>";
    							}
    							echo "</table> <br>";
    						}
							mysqli_stmt_close($stmt);
							mysqli_close($dbc);
						}
						else {
							echo "The following data fields were empty! <br>";
							foreach($data_missing as $missing)
								echo $missing ."<br>";
						}
				
					}
					else
						echo "Submit request not received";
				?>
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