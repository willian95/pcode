<?php
 include '../../../core/Database.php';
 include '../../../core/db.php';
 $db = new Database();
            if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {
              $title  = mysqli_real_escape_string($db->link, $_POST['title']);
              $cat    = mysqli_real_escape_string($db->link, $_POST['cat']);
              $body   = mysqli_real_escape_string($db->link, $_POST['body']);
              $tags   = mysqli_real_escape_string($db->link, $_POST['tags']);
              $author = mysqli_real_escape_string($db->link, $_POST['author']);

              $permited  = array('jpg', 'jpeg' , 'png' , 'gif' );
              $file_name = $_FILES['image']['name'];
              $file_size = $_FILES['image']['size'];
              $file_temp = $_FILES['image']['tmp_name'];
              $div = explode('.', $file_name);
              $file_ext = strtolower(end($div));
              $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
              $uploaded_image = "../../images/".$unique_image;

              if ($title == "" || $cat == "" || $body == "" || $tags == "" || $author == "" || $file_name == "" ) {
                echo "Campos Erroneso";
              }elseif ($file_size > 5048567){
                  echo "La imagen Debe ser menor a un 1MB";
              }elseif (in_array($file_ext, $permited) === false){
                echo "Debes subir imagen Validas".implode(',', $permited);
              }else{
                move_uploaded_file($file_temp, $uploaded_image);
                $query = "INSERT INTO tbl_post(cat, title, body, image, author, tags) 
                VALUES ('$cat', '$title' ,'$body','$unique_image','$author','$tags')";

                $inserted_rows = $db->insert($query);
                if ($inserted_rows) {
                  echo "Post Publicado";
                  echo "<script>window.location = '../../index.php';</script>";
                }else{
                  echo "Algo Paso";
                }

              }
            }

             ?>