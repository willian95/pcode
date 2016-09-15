<?php
      if (isset($_GET['id']) || $_GET['id'] == NULL) {
      $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
      
      }

 ?>
<?php 
if( !$id ) 
      { 
            die('Intento de contaminar consulta'); 
      }
      else{
            echo "";
      }

?>
<?php include 'core/blog/header.php'; ?>
<?php include 'core/blog/nav.php'; ?>
<?php 
      include('core/Database.php'); 
      include('core/Session.php');
      include('core/db.php');
      include('core/format.php');
      $db = new Database();
      $fm = new Format();
      setlocale(LC_TIME,'es_VE.utf8');
      
?>
<?php include 'core/post/visit.php'; ?>
	
	<div style="margin-top:50px;"></div>
	<div class="single-background"></div>
<?php include 'core/post/body.php'; ?>	
<?php include 'core/blog/footer.php'; ?>