<?php
	session_start();
?>
<html>
	<head>
		
		<title>Add Aircrafts Details</title>

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
			<div class="body"><br>
				<center>
					<form action="add_jet_details_form_handler.php" method="post">
						<h2>ENTER THE AIRCRAFTS DETAILS</h2>
						<div>
							<?php
								if(isset($_GET['msg']) && $_GET['msg']=='success')
									echo "<strong style='color: green'>The Aircraft has been successfully added.</strong><br><br>";
				
								else if(isset($_GET['msg']) && $_GET['msg']=='failed')
									echo "<strong style='color:red'>*Jet ID already exists, please enter a new Jet ID.</strong><br><br>";
							?>
						</div>
						<table cellpadding="5">
							<tr>
								<td class="fix_table">Enter a valid Jet ID</td>
							</tr>
							<tr>
								<td class="fix_table"><input type="text" name="jet_id" required></td>
							</tr>
							<tr>
								<td class="fix_table">Enter the Jet Type/Model</td>
							</tr>
							<tr>
								<td class="fix_table"><input type="text" name="jet_type" required></td>
							</tr>
							<tr>
								<td class="fix_table">Enter the total capacity of the Jet</td>
							</tr>
							<tr>
								<td class="fix_table"><input type="number" name="jet_capacity" required></td>
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