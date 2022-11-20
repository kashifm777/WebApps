<?php
    session_start();
    $con=mysqli_connect("localhost","root","","airline_reservation");
    if(!isset($con))
        die("Database Not Found");   

    if(isset($_REQUEST["u_sub"])) {
        $id=$_POST['pnr'];
        if($id!='') {
            $query=mysqli_query($con ,"select * from passengers where pnr='".$id."'");
            $res=mysqli_fetch_row($query);
            $query0=mysqli_query($con ,"select * from ticket_details where pnr='".$id."'");
            $res0=mysqli_fetch_row($query0);
            $query1=mysqli_query($con ,"select * from payment_details where pnr='".$id."'");
            $res1=mysqli_fetch_row($query1);
            if($res) {
                $_SESSION['user']=$id;
                header('location:pnrcheckall.php');
            }
            else {
                echo '<script>';
                echo 'alert("Wrong PNR Number")';
                echo '</script>';
            }
            if($res0) {
                $_SESSION['user']=$id;
                header('location:pnrcheckall.php');
            }
            else {
                echo '<script>';
                echo 'alert("Wrong PNR Number")';
                echo '</script>';
            }
            if($res1) {
                $_SESSION['user']=$id;
                header('location:pnrcheckall.php');
            }
            else {
                echo '<script>';
                echo 'alert("Wrong PNR Number")';
                echo '</script>';
            }
        }
        else {
            echo '<script>';
            echo 'alert("Wrong PNR Number")';
            echo '</script>';
        }
    }
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <link rel="stylesheet" type="text/css" href="css/styles.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
		<link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">

        <title>All PNR numbers</title>        
    </head>

    <body>
        <div class="container">
            <div class="header">
				<img class="logo" src="images/caa.jpg"/> 
				<center><h1 id="title">Falcon Airlines</h1></center>
			</div>
			<div class="nav">
				<ul>
					<li><a href="home_page.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
					<li><a href="login_page.php"><i class="fa fa-ticket" aria-hidden="true"></i> Book Tickets</a></li>
					<li><a href="home_page.php"><i class="fa fa-plane" aria-hidden="true"></i> About Us</a></li>
					<li><a href="home_page.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
					<li><a href="login_page.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
				</ul>
			</div>
            <div class="body" style="padding: 100px 0px">
                <center>
                    <img src="images/pia.jpg" width="180px" height="150px"><br><br>
                    <form id="index" action="pnrall.php" method="post">
                        <input type="text" name="pnr" placeholder="Enter Your PNR Number"><br><br>
                        <input type="submit" name="u_sub" value="Check"><br>                                   
                    </form>  
                </center>
            </div>
            <div class="footer"> 
      		  	<center>&copy
          			<script type="text/javascript">
            			document.write(new Date().getFullYear());
          			</script> 
					  All Right Reserved
				</center>
      		</div>
        </div>
    </body>
</html>
