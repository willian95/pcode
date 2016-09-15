
<?php
      include('core/Database.php'); 
      include('core/Session.php');
      Session::checkSession();
      include('core/db.php');
      include('core/format.php');
      $db = new Database();
      $fm = new Format();
      setlocale(LC_TIME,'es_VE.utf8');
?>
<?php
  
     include('core/inc/header.php'); 
     include('core/inc/body.php'); 
     include('core/inc/footer.php'); 
?>
  


 