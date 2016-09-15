<?php 
define("HOST", "localhost");
define("USER", "root");
define("PASS", "");
define("NAME", "pcode");
$con = mysqli_connect(HOST,USER,PASS,NAME);
 $insert = "UPDATE tbl_post SET visit=visit+1 WHERE id=$id";
 $update = $con->query($insert) || die ("No se ha podido Guardar");



 ?>

