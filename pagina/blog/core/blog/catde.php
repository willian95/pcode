<div class="well">

	<ul class="nav nav-pills">
	<li class="active Gotham-Light"><a  style="background-color: #ED5565;" href="index.php">Todos</a></li>			
			           	 <?php 
		                    $query = "SELECT * FROM tbl_category WHERE id='$id'";
		                    $category = $db->select($query);
		                    if ($category) {
		                     $result = $category->fetch_assoc();
		                      $d = $result['id']
		                   ?>
		                   <?php 
		                    $query = "SELECT count(*) as Cantidad FROM tbl_post WHERE cat ='$d'";
		                    $post = $db->select($query);
		                    $result1 = $post->fetch_assoc();
		                    $r = $result1['Cantidad'];
		                    	
		                     ?>
		                     	  
								  <li class="active Gotham-Light" ><a href="<?php echo $result['id'] ?>"> <?php echo $result['name']; ?><span class="badge"><?php echo $r;  ?></span></a></li>		
						     <?php  
				                    }else{
				                    		?>
				                    		<li class="active Gotham-Light" ><a href=""><span class="badge">Sin resultado</span></a></li>
				                    		<?php
				                    }
				                    
				            
				                    ?>
									</ul>
				                   <?php  ?>
</div>