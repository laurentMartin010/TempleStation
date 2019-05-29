<!--La partie du code qui reçoit les données de formulaire est écrite dans le fichier server.php-->
<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration en PHP et MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<!--Image Background-->
	<div class="back-register">
      <img src="../img/TsCartes2.JPG" alt=""/>
  </div>

	<!--Titre TEMPLE STATION-->
	<div>
	  <p id="TSback" class="animated zoomIn">TEMPLE STATION</p>
	</div>

	<!--EN-TETE FORMULAIRE-->
  	<div class="header">
  		<h2>Register</h2>
  	</div>
	
	<!--FORMULAIRE-->
  <form method="post" action="register.php">
  		<?php include('errors.php'); ?>
  		
				<div class="input-group">
  	  		<label>Username</label>
  	  		<input type="text" name="username" value="<?php echo $username; ?>">
  			</div>

  			<div class="input-group">
  	  		<label>Email</label>
  	  		<input type="email" name="email" value="<?php echo $email; ?>">
  			</div>

  			<div class="input-group">
  	  		<label>Password</label>
  	   		<input type="password" name="password_1">
  			</div>

  			<div class="input-group">
  				<label>Confirm password</label>
  			<input type="password" name="password_2">
  			</div>

  			<div class="input-group">
  				<button type="submit" class="btn" name="reg_user">Register</button>
  			</div>

  			<p>Already a member? <a class="sign" href="login.php">Sign in</a></p>
				<p>Or <a class="sign" href="../index.php?logout='1'">Back to site</a></p>				
  </form>
	
</body>
</html>