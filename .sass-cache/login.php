<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<!--IMAGE Background-->
	<div class="back-login">
    <img src="../img/trainTScouleur.JPG" alt=""/>
  </div>

	<!--Titre TEMPLE STATION-->
	<div>
	  <p id="TSback" class="animated lightSpeedIn">TEMPLE STATION</p>
	</div>

	<!--En-tête formulaire-->
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
	<!--FORMULAIRE-->
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>

  		<div class="input-group">
  			<label>Username</label>
  			<input type="text" name="username" >
  		</div>

  		<div class="input-group">
  			<label>Password</label>
  			<input type="password" name="password">
  		</div>

  		<div class="input-group">
  			<button type="submit" class="btn" name="login_user">Login</button>
  		</div>

			<p>Not yet a member? <a class="sign" href="register.php">Sign up</a></p>
			<p>Or <a class="sign" href="../index.php?logout='1'">Back to site</a></p>

	</form>


</body>
</html>