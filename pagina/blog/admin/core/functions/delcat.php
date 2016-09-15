<?php 
include '../Database.php';
 include '../db.php';
 $db = new Database();
        
            $id = $_POST["delete_id"];
            $delquery = "DELETE FROM tbl_category WHERE id ='$id'";
            $deldata = $db->delete($delquery);

            if ($deldata) {
              echo "good";
            }
            
 


 ?> 
