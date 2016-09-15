<div class="well">

	<ul class="nav nav-pills">
				
			           	 <?php 
		                    $query = "SELECT * FROM tbl_category";
		                    $category = $db->select($query);
		                    if ($category) {
		                      while($result = $category->fetch_assoc()){
		                      $d = $result['id']
		                   ?>
		                   <?php 
		                    $query = "SELECT count(*) as Cantidad FROM tbl_post WHERE cat ='$d'";
		                    $post = $db->select($query);
		                    $result1 = $post->fetch_assoc();
		                    $r = $result1['Cantidad'];
		                    	
		                     ?>
								  <li class="active Gotham-Light" ><a href="category/<?php echo $result['id'] ?>"> <?php echo $result['name']; ?><span class="badge"><?php echo $r;  ?></span></a></li>		
						     <?php  
				                    }
				                    
				                    }
				                    ?>
								<?php
								$query = "SELECT count(*) as Pos FROM tbl_post";
								$p = $db->select($query);
								$resu = $p->fetch_assoc();
								$c = $resu['Pos'];
								 ?>
				                    <li class="Gotham-Light pull-right active">
				                    	<a style="background-color: #2ECC71;" href="">Total de post<span class="badge"><?php echo $c; ?></span></a>
				                    </li>
</ul>
				                   
</div>