<?php
session_start();

// Initialisation des variables
$username = "";
$email    = "";
$errors = array(); 

// Connexion à la BDD
$db = mysqli_connect('localhost', 'root', 'root', 'registration');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // réception des valeurs d'entrées du formulaire
  // Sécurité : pour éviter les injections SQL grâce à : mysqli_real_escape_string()
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // Validation du formulaire (être sûre qu'il soit correctement rempli)
  // en ajoutant (array_push ()) l'erreur correspondant au tableau $errors 
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // Vérifier la base de données 
  // Si un utilisateur n'existe pas déjà avec le même nom d'utilisateur et / ou email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  // si un User existe
  if ($user) { 
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }
 // si une ad Mail existe
    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Enregistrement du User si pas d'erreur dans le formulaire
  if (count($errors) == 0) {

  // Sécurité : hash le mot de passe avant l'enregistrement
  	$password = hash('sha256', $password_1);  

  	$query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "Congratulations ! You are now registered to our newsletter ; )";
  	header('location: index2.php');
  }
}


// Login "USER"
if (isset($_POST['login_user'])) {
  // Sécurité : pour éviter les injections SQL grâce à : mysqli_real_escape_string()
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $password = hash('sha256', $password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['username'] = $username;
          $_SESSION['success'] = "You're now Logged in !";
          header('location: index2.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }
  
  ?>