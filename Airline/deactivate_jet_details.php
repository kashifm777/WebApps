<?php
	session_start();
?>
<html>
	<head>
		<title>Deactivate Aircraft</title>

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
					<li><a href="home_page.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
				</ul>
			</div>
			<div class="body" style="padding: 110px"><br>
				<center>
					<form action="deactivate_jet_details_form_handler.php" method="post">
						<h2>ENTER THE AIRCRAFT TO BE DEACTIVATED</h2>
						<?php
							if(isset($_GET['msg']) && $_GET['msg']=='success')
								echo "<strong style='color: green'>The Aircraft has been successfully deactivated.</strong><br><br>";
				
							else if (isset($_GET['msg']) && $_GET['msg']=='failed')
								echo "<strong style='color:red'>*Invalid Jet ID entered, please enter again.</strong><br><br>";
						?>
						<table cellpadding="5" style="padding-left: 20px;">
							<tr>
								<td class="fix_table">Enter a valid Jet ID</td>
							</tr>
							<tr>
								<td class="fix_table"><input type="text" name="jet_id" required></td>
							</tr>
						</table>
						<div>
							<input type="submit" value="Deactivate" name="Deactivate">
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