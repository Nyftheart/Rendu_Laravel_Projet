<!DOCTYPE html>
<html lang="FR" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/style_login.css">
  </head>
  <body>
    <div class ="back">
      <button><a href="/">Home page</a></button>
    </div>

<form class="box" method="post">
  <h1>Login</h1>
  <input type="text" name="username" placeholder="Pseudo">
  <input type="text" name="password" placeholder="Mot de passe">
  <input type="submit" name="submit" value="Login" >
</form>

  </body>
</html>


<?php

// parametre de connexion
$host_name = "localhost";
$database = "site_ecom";
$db_user_name = "root";
$db_password = "";
// connexion
$conn = mysqli_connect($host_name, $db_user_name, $db_password, $database);

// initialisation
// recuperation et insertion
if (isset($_POST['submit'])) {

    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

         $check = mysqli_query( $conn, "SELECT * FROM admin WHERE  nom_utilisateur = '$username' and mot_de_passe= '$password'");

        $nb_rows = mysqli_num_rows($check);
        if ($nb_rows >0) {
         session_start() ;
            $_SESSION['username'] = $username;
            header("location: /main") ;

        } else {
            echo "<p>Mauvais Pseudo/Mot de passe!<p>";
        }
    } else {
        echo "<p>Veuillez remplir tous les champs!<p>";
    }
}

?>
