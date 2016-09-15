<?php include('Database.php'); ?>
<?php include('db.php'); ?>
<?php 
include('Session.php');
Session::init();
 ?>
<?php include('format.php'); ?>

<?php 
$db = new Database();
$fm = new Format();
 ?>
<?php


 if($_SERVER["REQUEST_METHOD"] == "POST"){
$username = $_POST['username'];
$password = sha1($_POST['password']);


    $query = "SELECT * FROM tbl_user WHERE username='$username' 
     and password='$password'";
    $result = $db->select($query);
    if ($result != false) {
        $value = $result->fetch_assoc(); 
        Session::set("login", true);
        Session::set("username", $value['username']);
        Session::set("userId", $value['id']);
        Session::set("userRole", $value['role']);
        header("Location: ../index.php");
       //echo "<script>window.location = 'index.php';</script>";
    } else { echo "<span style='color:red;font-size:18px;'>Username 
   or Password Not Matched ".$password." !!</span>";}
 }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Material Design Login Form</title>
    <link rel="stylesheet" href="login/css/style.css">
  </head>

  <body>

    <hgroup>
  <h1>Material Design Form</h1>
  <h3>By Josh Adamous</h3>
</hgroup>

<form method="post" action="login.php">
  <div class="group">
    <input type="text"  name="username">
    <span class="highlight"></span>
    <span class="bar"></span>
    <label>Usuario</label>
  </div>
  <div class="group">
    <input type="password"  name="password">
          <span class="highlight"></span>
          <span class="bar"></span>
    <label>Contraseña</label>
  </div>
  <input type="submit" class="button buttonBlue" value="Enviar">
    
  
</form>

<footer><a href="http://www.polymer-project.org/" target="_blank"><img src="https://www.polymer-project.org/images/logos/p-logo.svg"></a>
  <p>You Gotta Love <a href="http://www.polymer-project.org/" target="_blank">Google</a></p>
</footer>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="login/js/index.js"></script>

    
    
    
  </body>
</html>
