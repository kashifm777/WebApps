<?php
    session_start();

    $con=mysqli_connect("localhost","root","","airline_reservation");
    if(!isset($con))
        die("Database Not Found");

    if(isset($_REQUEST["u_sub"])) {
        $id=$_POST['pnr'];

        if ($id != '') {
            $query=mysqli_query($con ,"select * from flight_details where departure_date='".$id."'");
            $res=mysqli_fetch_row($query);
            $query0=mysqli_query($con ,"select * from flight_details where departure_date='".$id."'");
            $res0=mysqli_fetch_row($query0);
            $query1=mysqli_query($con ,"select * from flight_details where departure_date='".$id."'");
            $res1=mysqli_fetch_row($query1);

            if($res) {
                $_SESSION['user']=$id;
                header('location:flightcheck.php');
            }
            else {
                echo '<script>';
                echo 'alert("No Flight")';
                echo '</script>';
            }
            if($res0) {
                $_SESSION['user']=$id;
                header('location:flightcheck.php');
            }
            else {
                echo '<script>';
                echo 'alert("No Flight")';
                echo '</script>';
            }
   
            if($res1) {
                $_SESSION['user']=$id;
                header('location:flightcheck.php');
            }
            else {
                echo '<script>';
                echo 'alert("No Flight")';
                echo '</script>';
            }
        }
        else {
            echo '<script>';
            echo 'alert("No Flight")';
            echo '</script>';
        }
    }
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <style>
            input {
    			border: 1.5px solid brown;
    			border-radius: 4px;
    			padding: 7px 10px;
			}
			input[type=submit] {
				background-color: brown;
				color: white;
    			border-radius: 30px;
			}
        </style>

        <link rel="stylesheet" type="text/css" href="css/styles.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">

        <title>List of Flights</title>
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
            <div class="body" style="padding: 100px">
                <form id="index" action="flightlist.php" method="post">
                    <center>
                        <img src="images/caa.jpg" style="width:180px; height:150px; border: 4px solid brown" ><br><br>
                        <input type="text" id="u_id" name="pnr" class="form-control" style="width:300px; margin-left: 66px;" placeholder="YYYY-MM-DD"><br><br>
                        <input type="submit" name="submit" value="Check Flights"><br>
                    </center>
                </form> <br>
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
