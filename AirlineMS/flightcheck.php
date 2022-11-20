<?php
  session_start();
  error_reporting(0);

  $con=mysqli_connect("localhost","root","","airline_reservation");
  $q=mysqli_query($con,"select pnr from flight_details where departure_date='".$_SESSION['user']."'");
  $n=  mysqli_fetch_assoc($q);
  $stname= $n['pnr'];
  $id=$_SESSION['user'];

  $result = mysqli_query($con,"SELECT * FROM flight_details WHERE departure_date='".$_SESSION['user']."'");
                    
  while($row = mysqli_fetch_array($result)) {
?>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Flight Status</title>

    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="stylesheet" type="text/css" href="css/styles.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">  

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
					<li><a href="customer_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
					<li><a href="home_page.php"><i class="fa fa-plane" aria-hidden="true"></i> About Us</a></li>
					<li><a href="home_page.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
					<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
				</ul>
			</div>
      <div class="body"><br>
        <center>
          <h1>Civil Aviation Authority Pakisatn<br>
            Flight Running on
            <? php echo ''.$row[3].'   ' ?>
              [ From : <?php echo ' '. $row[1].'   ' ?> 
              To : <?php echo ' '. $row[2].'   ' ?>]
          </h1><br>
          <?php
            $picfile_path ='images/';
            $result1 = mysqli_query($con,"SELECT * FROM passengers where ='".$_SESSION['user']."'");
            while($row1 = mysqli_fetch_array($result1)) {                  
              $picsrc=$picfile_path.$row1['s_pic'];
              echo "<center><img src='images/piaa.jpg' class='img-thumbnail' width='180px' style='height:180px;'></center>";
              echo"<div>";
            }
          ?>
          <table>
            <tr>
              <td> <font style="font-family: Verdana;">Flight</font></td>&nbsp&nbsp Jet ID:<?php echo ''. $row[11]. '   ' ?>
              <td colspan="3"> <?php echo ''. $row[0]. '   ' ?>
            </tr>
            <tr>
              <td><font style="font-family: Verdana;">From</font></td>
              <td colspan="2">
                <?php echo ''. $row[1].'   ' ?>
                <?php echo ''.$row[5].'   ' ?>
              </td>
              <td><font style="font-family: Verdana;"> To</font></td>
              <td>
                <?php echo ''. $row[2].'   ' ?>
                <?php echo ''.$row[6].'   ' ?>
              </td>
            </tr>
            <tr>
              <td> <font style="font-family: Verdana;">Arrival Date:</font></td>
              <td colspan="2"> <?php echo $row[4] ?></td><br>&nbsp&nbsp
              <td><font style="font-family: Verdana;"> Price Economy Class:</font></td>
              <td colspan="2">  <?php echo $row[9] ?> </td>
			        <td><font style="font-family: Verdana;"> Price Business class:</font></td>
              <td> <?php echo $row[10] ?> </td>
            </tr>
          </table>
          <?php } ?>
          <input type="submit" id="print" class="toggle btn btn-primary" value="Print" onclick="printpage();"><br><br>
          <a href="flightlist.php">Check other Date</a>
        </center>
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


                     