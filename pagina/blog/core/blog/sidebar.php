<div class="col-md-5">
					<!--CATEGORY-->
					
			        <!--CATEGORY-->

			        <div class="well">
			        	<h3 class="border-b Gotham-Medium no-mayu margin-top-1 margin-bottom-10 black-666">Post destacados</h3>
			        	 <?php
				            $query = "SELECT  tbl_post.title,tbl_category.name,tbl_post.image,tbl_post.visit,tbl_post.id  FROM tbl_category inner join tbl_post on tbl_post.cat=tbl_category.id ORDER BY tbl_post.visit DESC";
				           			 $post = $db->select($query); 
				                     if ($post) {
				                      while($result = $post->fetch_assoc()){
				             ?>
			        	<figure class="snip0064">
						  <figcaption>
						    <p class="Gotham-Medium font-size15 letter-spacing unfirt"><?php echo $result['title']; ?></p>
						    <div class="pull-right margin10 Gotham-XLight"><?php echo $result['visit']; ?><i class="material-icons">favorite</i></div>
						   <h2><span>
						   <a class="link wow bounceIn animated animated  animated" href="feed/<?php echo $result['id']; ?>" >Leer Más</a></span></h2>
						    <span class="position unfirt font-size15 Gotham-XLight"><?php echo $result['name']; ?></span>
						  </figcaption>
						  <div class="image"><img src="images/<?php echo $result['image']; ?>" alt="sample10" /></div>
						  <a href="#"></a>
						</figure>
						<?php } } ?>
			        </div>
				</div>