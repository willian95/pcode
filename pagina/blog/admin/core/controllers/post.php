  <div class="tab-pane fade" id="post">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="well well-write">
					<div class="panel panel-bordered panel-dark">
		            <div class="panel-heading">
		              <h3 class="panel-title">Añadir Posst</h3>
		            </div>
            		<form method="post" action="core/functions/addpost.php" enctype="multipart/form-data">
		            <div class="panel-body">
		            <h4 class="example-title">Titulo Dewl Post</h4>
		            <input type="text" name="title" class="form-control round" id="name">
		            <h4>Caterias</h4>
		            <select class="form-control" name="cat" id="cat">
		            <?php
		            $query = "SELECT * FROM tbl_category";
		            $category = $db->select($query);
		            if ($category) {
		              while ($result = $category->fetch_assoc()) {
		              ?>
		                    <option value="<?php echo $result['id'];?>"><?php echo $result['name'];?></option>
		                     <?php
		              }
		            }
		             ?>
		            </select>
			            <h4 class="example-title">Subir Imagen</h4>
			                    <input type="file" name="image">
			                 <h4 class="example-title">Tags</h4>
			                 <input type="text" name="tags" class="form-control " id="tags">
			                 <br>
			                 <h4 class="example-title">Author</h4>
			                 <input type="text" name="author" class="form-control " id="author" value="<?php echo Session::get('username'); ?>">
			                 <br>
			                <textarea id="redactor_content" name="body">
								<h2>Hello and Welcome</h2>
								
							</textarea>
			                  <br>
			                  <br>
			              <button type="submit" class="btn btn-block btn-success">Enviar</button>
			            </div>
			          </div>
					</div>
				</div>












				<div class="col-md-6">
					<div class="well well-write">
					<h3 class="text-center">Lista De Todos los post</h3>
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