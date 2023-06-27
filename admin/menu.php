
<?php
	session_start();
	if(!$_SESSION['uname'] && (!$_SESSION['pass'])){
		header("location: ../login.php");
	}
?>
<div id="top">
			<h1>Car Company</a></h1>
			<div id="top-navigation">
			<strong><a href="logout.php">Log out</a></strong>
				
			</div>
		</div>
<div id="navigation">
			<ul>
			    <li><a href="index.php"><span>Dashboard</span></a></li>
			    <li><a href="add_vehicles.php"><span>Vehicle Management</span></a></li>
			    <li><a href="client_requests.php"><span>Hire Requests</span></a></li>
			    <li><a href="index.php"><span>Messages</span></a></li>

			</ul>
		</div>