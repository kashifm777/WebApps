<?php
	session_start();
?>
<html>
	<head>
		<title>Enter Travel/Ticket Details</title>

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
			<div class="body" style="padding: 2px">
					<?php
						$no_of_pass=$_SESSION['no_of_pass'];
						$class=$_SESSION['class'];
						$count=$_SESSION['count'];
						$flight_no=$_POST['select_flight'];
						$_SESSION['flight_no']=$flight_no;
						
						echo "<h2>ADD PASSENGERS DETAILS</h2>";
						echo "<form action=\"add_ticket_details_form_handler.php\" method=\"post\">";
						while($count<=$no_of_pass) {
							echo "<p><strong>PASSENGER ".$count."<strong></p>";
							echo "<table>";
							echo "<tr>";
							echo "<td>Passenger's Name</td>";
							echo "<td>Passenger's Age</td>";
							echo "<td>Passenger's Gender</td>";
							echo "<td>Passenger's Inflight Meal</td>";
							echo "<td>Passenger's Frequent Flier ID (if applicable)</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td><input type=\"text\" name=\"pass_name[]\" required></td>";
							echo "<td><input type=\"number\" name=\"pass_age[]\" required></td>";
							echo "<td>";
							echo "<select name=\"pass_gender[]\">";
  							echo "<option value=\"male\">Male</option>";
  							echo "<option value=\"female\">Female</option>";
  							echo "<option value=\"other\">Other</option>";
  							echo "</select>";
  							echo "</td>";
  							echo "<td>";
							echo "<select name=\"pass_meal[]\">";
  							echo "<option value=\"yes\">Yes</option>";
  							echo "<option value=\"no\">No</option>";
  							echo "</select>";
  							echo "</td>";
  							echo "<td><input type=\"text\" name=\"pass_ff_id[]\"></td>";
							echo "</tr>";
							echo "</table>";
							echo "<br><hr>";
							$count=$count+1;
						}
						echo "<br><h2>ENTER TRAVEL DETAILS</h2>";
						echo "<table>";
						echo "<tr>";
						echo "<td>Do you want access to our Premium Lounge? </td>";
						echo "<td>Do you want to opt for Priority Checking? </td>";
						echo "<td>Do you want to purchase Travel Insurance? </td>";
						echo "</tr>";
						echo "<tr>";
						echo "<td>";
						echo "Yes <input type='radio' name='lounge_access' value='yes' checked/> No <input type='radio' name='lounge_access' value='no'/>";
  						echo "</td>";
  						echo "<td>";
						echo "Yes <input type='radio' name='priority_checkin' value='yes' checked/> No <input type='radio' name='priority_checkin' value='no'/>";
  						echo "</td>";
  						echo "<td>";
						echo "Yes <input type='radio' name='insurance' value='yes' checked/> No <input type='radio' name='insurance' value='no'/>";
  						echo "</td>";
						echo "</tr>";
						echo "</table>";
						echo "<br><br>";
						echo "<center><input type=\"submit\" value=\"Submit Travel/Ticket Details\" name=\"Submit\"></center>";
						echo "</form>";
					?>
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