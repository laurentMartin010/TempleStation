<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


	<!--Titre TEMPLE STATION-->
	<div>
	  <p id="TSback" class="animated rubberBand">TEMPLE STATION</p>
	</div>

	<div class="header">
		<h2><span id="TSback">TS</span>Home Page</h2>
	</div>
	<div class="content">
  		<!-- notification message -->
  		<?php if (isset($_SESSION['success'])) : ?>
      	<div class="error success" >
      		<h3>
          	<?php 
          		echo $_SESSION['success']; 
          		unset($_SESSION['success']);
          	?>
      		</h3>
      	</div>
  		<?php endif ?>

    	<!-- logged in user information -->
    	<?php  if (isset($_SESSION['username'])) : ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong> !</p><br>
			<p><a class="sign" href="register.php">Back to Register</a></p><br>
			<p><a class="sign" href="../index.php?logout='1'">Back to site</a> </p><br>
			
    	<?php endif ?>
	</div>
		
</body>
</html>