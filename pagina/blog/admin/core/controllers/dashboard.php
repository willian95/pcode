<div class="tab-pane fade" id="home">
  <div class="container">
      <div class="row">
          <div class="col-md-3">
              <?php
              $query = "SELECT count(*) as Cantidad FROM tbl_post";
              $post = $db->select($query);
              $result1 = $post->fetch_assoc();
              $r = $result1['Cantidad'];
              ?>
              <div class="well well-white">
               Publicaciones actuales <span class="new badge red"><?php echo  $r; ?></span>
              </div>
          </div>
          <div class="col-md-3">
              <?php
                $query = "SELECT count(*) as Cantidad FROM tbl_user";
                $post = $db->select($query);
                $result1 = $post->fetch_assoc();
                $r = $result1['Cantidad'];
                ?>
              <div class="well well-white">
               Administradores del sitio <span class="new badge red"><?php echo  $r; ?></span>
              </div>
          </div>
          <div class="col-md-6">
              <div class="well well-white">
                <?php 
                $query = "SELECT * FROM tbl_post ORDER BY tbl_post.date DESC LIMIT 4";
                $tbl = $db->select($query);
                if ($tbl) {
                ?>
                <table class="table table-striped table-hove">
                  <thead>
                    <th>#</th>
                    <th>Titulo</th>
                    <th>Fecha</th>
                    <th>Categoria</th>
                    <th>Imagen</th>
                    <th>Tags</th>
                  </thead>
                  <tbody>
               <?php
              while ($result = $tbl->fetch_assoc()) {
               ?>
                <tr class="thcenter">
                    <td><?php echo $result['id']; ?></td>
                    <td><?php echo $result['title']; ?></td>
                    <td><?php echo $result['date']; ?></td>
                    <td><?php echo $result['cat']; ?></td>
                    <td><img class="img-responsive" width="80px" height="80px" src="images/<?php echo $result['image']; ?>"></i>
                    </td>
                    <td>
                      <span class="label label-success"><?php echo $result['tags']; ?></span>
                    </td>
                  </tr>
                  <?php   
                  }
                  }
                  else{
                  ?>
                  <tr><td>No se encontro nada</td></tr>
                 
                   <?php   
                    }
                    ?>
                  </tbody>
                </table>
              </div>
          </div>
      </div>
  </div>



  </div>