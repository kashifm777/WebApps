<?php
  session_start();
  error_reporting(0);

  $con=mysqli_connect("localhost","root","","airline_reservation");
  $q=mysqli_query($con,"select pnr,flight_no,journey_date, class, booking_status, no_of_passengers, lounge_access, priority_checkin, insurance, payment_id, customer_id from ticket_details where pnr='".$_SESSION['user']."'");
  $n=  mysqli_fetch_assoc($q);
  $stname= $n['pnr'];
  $flight_no= $n['flight_no'];
  $journey_date= $n['journey_date'];
  $class= $n['class'];
  $booking_status= $n['booking_status'];
  $no_of_passengers= $n['no_of_passengers'];
  $lounge_access= $n['lounge_access'];
  $priority_checkin= $n['priority_checkin'];
  $insurance= $n['insurance'];
  $payment_id= $n['payment_id'];
  $customer_id= $n['customer_id'];

  $id=$_SESSION['user'];
  $result = mysqli_query($con,"SELECT * FROM passengers WHERE pnr='".$_SESSION['user']."'");

  while($row = mysqli_fetch_array($result)) {
?>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>PNR Status</title>

    <link rel="stylesheet" type="text/css" href="css/styles.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
		<link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    
    <script type="text/javascript">
      function printpage() {
        var printButton = document.getElementById("print");
        printButton.style.visibility = 'hidden';
        window.print();
        printButton.style.visibility = 'visible';
      }
    </script>  
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
    <div class="body"><br>
      <center>
        <h1>Civil Aviation Authority of Pakistan</h1>
        <h2>Boarding Pass - Flight Reservation Slip</h2>
        <h4><?php echo $booking_status;?></h4>
        <table>
          <tr>
            <td>PNR : </td>
            <td><?php echo $id;?></td>
          </tr>
          <tr>
            <td>Flight No : </td>
            <td><?php echo $flight_no;?></td>
          </tr>
          <tr>
            <td>Date of journey : </td>
            <td><?php echo $journey_date;?></td>
          </tr>
          <tr>
            <td>Class : </td>
            <td><?php echo $class;?></td>
          </tr>
          <tr>
            <td>Payment ID : </td>
            <td><?php echo $payment_id;?></td>
          </tr>
          <tr>
            <td>Lounge Access : </td>
            <td><?php echo $lounge_access;?></td>
          </tr>
          <tr>
            <td>Priority Checkin : </td>
            <td><?php echo $priority_checkin;?></td>
          </tr>
          <tr>
            <td>Insurance : </td>
            <td><?php echo $insurance;?></td><br>
          </tr>
          <tr>
            <td>Booked By (Username) : </td>
            <td><?php echo $customer_id;?></td>
          </tr>
          <tr>
            <td>Status: </td>
            <td><?php echo $booking_status;?></td>
          </tr>
          <tr>
            <td>No. of Passengers: </td>
            <td> <?php echo $no_of_passengers;?></td>
          </tr>
        </table><br>
        <table>
          <tr>
            <td>
              <?php
                $picfile_path ='images/';  
                $result1 = mysqli_query($con,"SELECT * FROM passengers where ='".$_SESSION['user']."'");
                while($row1 = mysqli_fetch_array($result1)) {
                  $picsrc=$picfile_path.$row1['s_pic'];  
                  echo "<center><img src='images/shutterock_2.jpg' class='img-thumbnail' width='180px' style='height:180px;'></center>";
                  echo"<div>";
                }
              ?>
            </td>
          </tr>
          <tr>
            <td>PNR : </td>
            <td><?php echo $stname;?> </td>
          </tr>   
          <tr>
            <td>Passenger No : </td>
            <td><?php echo ''. $row[0]. '   ' ?>
          </tr>    
          <tr>
            <td>Name</td>
            <td><?php echo ''. $row[2]. '   ' ?><br>
              <?php echo ' Age - '.$row[3] ?>
            </td>
          </tr>                
          <tr>
            <td>Gender</td>
            <td><?php echo $row[4] ?> </td>
          </tr>   
          <tr>
            <td>Meail Choice</td>
            <td><?php echo $row[5] ?></td>
          </tr>
          <tr>
            <td>Frequent Flier No. </td>
            <td> <?php echo $row[6] ?> </td>
          </tr>   
        </table><br>
        <?php } ?>
        <input type="submit" id="print" class="toggle btn btn-primary" value="Print" onclick="printpage();"><br><br>
        <a href="pnr.php">Check other PNR</a>
      </center><br>
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