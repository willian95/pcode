  <?php
      include('../Database.php'); 
      include('../Session.php');
      include('../db.php');
      include('../format.php');
      $db = new Database();
      $fm = new Format();
   ?>
  <table class="table table-centered" style=" text-align: center;"> 
                    <thead>
                      <tr>
                        <th>#</th>
                        <th style="text-align: center;">Categoria Disponible</th>
                       
                      </tr>
                    </thead>
                    <tbody>
                     <?php
                      $query = "SELECT * FROM tbl_category ORDER BY id DESC";
                      $category = $db->select($query);
                      if ($category) {
                        $i = 0;
                        while ($result = $category->fetch_assoc()) {
                            $i++;
                       ?>
                      <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $result['name']; ?></td>
                        <td><a  href="<?php echo $result['id']; ?>" class="btn btn-outline btn-warning">Editar</a></td>
                        <td><buttom type="buttom"  name="id" id="<?php echo $result['id']; ?>" class="btn_delete btn btn-outline btn-danger">Eliminar</buttom></td>
                      </tr>

                   <?php } }   ?>
                    </tbody>
                  </table>