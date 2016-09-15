<?php
if (isset($_GET['catid']) && !empty($_GET['catid'])) {
      $id = $_GET['catid'];
?>

<?php

      include('core/Database.php'); 
      include('core/Session.php');
      include('core/db.php');
      include('core/format.php');
      $db = new Database();
      $fm = new Format();
      setlocale(LC_TIME,'es_VE.utf8');
?>
<?php include 'core/blog/header.php'; ?>
<?php include 'core/blog/nav.php'; ?>
<div style="margin-top:100px;"></div>
<?php include 'core/blog/catde.php'; ?>
      <div class="container">
            <div class="row">
            <?php include 'core/blog/cat.php'; ?>                
            </div>
      </div>


<?php }
else{
      header("Location: ../404.php");
}
 ?>