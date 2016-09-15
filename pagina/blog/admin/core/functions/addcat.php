<?php

      include('../Database.php'); 
      include('../Session.php');
      include('../db.php');
      include('../format.php');
      $db = new Database();
      $fm = new Format();


      
                $name = mysqli_real_escape_string($db->link, $_POST['name']);

                if (empty($name)) {
                echo '<div class="alert alert-danger alert-dismissible" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                      Campos Vacios
                      </div>';
                }else{
                  $query = "INSERT INTO tbl_category (name) VALUES ('$name')";
                  $catinsert = $db->insert($query);
                  if ($catinsert) {
                    echo '<div class="alert alert-success alert-dismissible" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                      Categoria Creada
                      </div>';
                  }else{
                    echo "Categoria No Creada";
                  }
                }

            
?>
