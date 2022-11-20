<?php
	$page="aboutus";
	$title="About us";
	require_once('header.php');
	include('Admin/conn.php');
	$query="select * from pages where page_nm='about_us'";
	$result=mysqli_query($link,$query)  or die("Error fetching data.".mysqli_error($link));
	$row=mysqli_fetch_assoc($result);
	$desc1=$row['page_desc1'];
	$desc2=$row['page_desc2'];
	$desc3=$row['page_desc3'];
	$desc4=$row['page_desc4'];
	$desc5=$row['page_desc5'];
?>
<div class="row about_container">
    <div class="col-md-9">
        <div class="panel panel-default">
			<div class="panel-heading">About us</div>
            <div class="panel-body">
				<p class="about_us_info"><?php echo $desc1; ?></p>
				<p class="about_us_info"><?php echo $desc2; ?></p>
				<p class="about_us_info"><?php echo $desc3; ?></p>
				<p class="about_us_info"><?php echo $desc4; ?></p>
				<p class="about_us_info"><?php echo $desc5; ?></p>
            </div>
        </div>
    </div>
	<?php require('right_side_cart.php'); ?> 
</div>          
<?php require('footer.php'); ?>