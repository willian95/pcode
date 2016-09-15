<?php 
 include 'Session.php';
 Session::init();
?>

<?php include 'db.php'; ?>
<?php include 'Database.php'; ?>
<!DOCTYPE html>
<html class="no-js before-run" lang="en">
<head>
  <meta charset="utf-8">
  <link rel="icon" href="../images/icon.ico" type="image/x-icon"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">

  <title>Login | Dashboard</title>



  <!-- Stylesheets -->
  <link rel="stylesheet" href="../admin/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../admin/assets/css/bootstrap-extend.min.css">
  <link rel="stylesheet" href="../admin/assets/css/site.min.css">

  <link rel="stylesheet" href="../admin/assets/vendor/animsition/animsition.css">
  <link rel="stylesheet" href="../admin/assets/vendor/asscrollable/asScrollable.css">
  <link rel="stylesheet" href="../admin/assets/vendor/switchery/switchery.css">
  <link rel="stylesheet" href="../admin/assets/vendor/intro-js/introjs.css">
  <link rel="stylesheet" href="../admin/assets/vendor/slidepanel/slidePanel.css">
  <link rel="stylesheet" href="../admin/assets/vendor/flag-icon-css/flag-icon.css">


  <!-- Page -->
  <link rel="stylesheet" href="../admin/assets/css/pages/login.css">

  <!-- Fonts -->
  <link rel="stylesheet" href="../admin/assets/fonts/web-icons/web-icons.min.css">
  <link rel="stylesheet" href="../admin/assets/fonts/brand-icons/brand-icons.min.css">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>


  <!--[if lt IE 9]>
    <script src="../../assets/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->

  <!--[if lt IE 10]>
    <script src="../../assets/vendor/media-match/media.match.min.js"></script>
    <script src="../../assets/vendor/respond/respond.min.js"></script>
    <![endif]-->

  <!-- Scripts -->
  <script src="../admin/assets/vendor/modernizr/modernizr.js"></script>
  <script src="../admin/assets/vendor/breakpoints/breakpoints.js"></script>
  <script>
    Breakpoints();
  </script>
</head>
<body class="page-login layout-full">
<?php
 $db = new Database();

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
        header("Location: ../admin/html/index.php");
       //echo "<script>window.location = 'index.php';</script>";
    } else { echo "<span style='color:red;font-size:18px;'>Username 
   or Password Not Matched ".$password." !!</span>";}
 }
?>
<!-- Page -->
  <div class="page animsition vertical-align text-center" data-animsition-in="fade-in"
  data-animsition-out="fade-out">>
    <div class="page-content vertical-align-middle">
      <div class="brand">
        <img class="brand-img" src="../images/icon.png" alt="..." height="50" width="50">
        <h2 class="brand-text">Paraguaná CODE</h2>
      </div>
      <p>Solo Miembros Autorizado</p>
      <form method="post" action="login.php">
        <div class="form-group">
          <label class="sr-only" for="inputName">Name</label>
          <input type="text" class="form-control" id="inputName" placeholder="Username" required="1" 
     name="username">
        </div>
        <div class="form-group">
          <label class="sr-only" for="inputPassword">Password</label>
          <input type="password" placeholder="Password" required="1" 
    name="password" class="form-control" id="inputPassword" />
        </div>
        <button type="submit" class="btn btn-primary btn-block">Inciar Session</button>
      </form>
      

      <footer class="page-copyright">
        <p>By: Paraguaná CODE</p>
        <p>© 2016. All RIGHT RESERVED.</p>
        <div class="social">
          <a href="javascript:void(0)">
            <i class="icon bd-twitter" aria-hidden="true"></i>
          </a>
          <a href="javascript:void(0)">
            <i class="icon bd-facebook" aria-hidden="true"></i>
          </a>
          <a href="javascript:void(0)">
            <i class="icon bd-dribbble" aria-hidden="true"></i>
          </a>
        </div>
      </footer>
    </div>
  </div>
  <!-- End Page -->

  <!-- Core  -->
  <script src="../admin/assets/vendor/jquery/jquery.js"></script>
  <script src="../admin/assets/vendor/bootstrap/bootstrap.js"></script>
  <script src="../admin/assets/vendor/animsition/jquery.animsition.js"></script>
  <script src="../admin/assets/vendor/asscroll/jquery-asScroll.js"></script>
  <script src="../admin/assets/vendor/mousewheel/jquery.mousewheel.js"></script>
  <script src="../admin/assets/vendor/asscrollable/jquery.asScrollable.all.js"></script>
  <script src="../admin/assets/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>

  <!-- Plugins -->
  <script src="../admin/assets/vendor/switchery/switchery.min.js"></script>
  <script src="../admin/assets/vendor/intro-js/intro.js"></script>
  <script src="../admin/assets/vendor/screenfull/screenfull.js"></script>
  <script src="../admin/assets/vendor/slidepanel/jquery-slidePanel.js"></script>

  <script src="../admin/assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>

  <!-- Scripts -->
  <script src="../admin/assets/js/core.js"></script>
  <script src="../admin/assets/js/site.js"></script>

  <script src="../admin/assets/js/sections/menu.js"></script>
  <script src="../admin/assets/js/sections/menubar.js"></script>
  <script src="../admin/assets/js/sections/sidebar.js"></script>

  <script src="../admin/assets/js/configs/config-colors.js"></script>
  <script src="../admin/assets/js/configs/config-tour.js"></script>

  <script src="../admin/assets/js/components/asscrollable.js"></script>
  <script src="../admin/assets/js/components/animsition.js"></script>
  <script src="../admin/assets/js/components/slidepanel.js"></script>
  <script src="../admin/assets/js/components/switchery.js"></script>
  <script src="../admin/assets/js/components/jquery-placeholder.js"></script>

  <script>
    (function(document, window, $) {
      'use strict';

      var Site = window.Site;
      $(document).ready(function() {
        Site.run();
      });
    })(document, window, jQuery);
  </script>

</body>

</html>