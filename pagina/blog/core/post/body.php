  <?php 
            $query = "SELECT * FROM tbl_post WHERE id=$id";
            $post = $db->select($query);
            
            if ($post) {
              while($result = $post->fetch_assoc()){
?>
  <div class="container">
		<div class="col-md-12 post-relax">
			 <div class="demo-card-wide mdl-card mdl-shadow--2dp">
			  <div class="mdl-card__title">
			  		<img src="images/<?php echo $result['image']; ?>">

			  </div>
			  <h3 class="Gotham-Medium no-mayu" style="margin-left:15px;"><?php echo $result['title']; ?></h3>
		
			  <hr>
			  <div class="mdl-color-text--grey-700 mdl-card__supporting-text Gotham-Thin-open container">
              <?php echo utf8_encode($result['body']); ?>
            </div>
			  <div class="mdl-card__actions mdl-card--border">
			     <div class="row">
				  <div class="col-md-8">
				  	<div class="mdl-card__supporting-text">
				    
				   <spam><i class="material-icons i-position">access_time</i><?php echo $fm->formatDate($result['date']); ?></spam>
				    <i class="material-icons i-position" role="presentation">favorite</i><?php echo $result['visit']; ?>
		                <span class="visuallyhidden">favorites</span>
				  	</div>
				  </div>
				  </div>
			  </div>
			  <div class="mdl-card__menu">
			  
			  </div>
			</div>
			<br>


			<div class="row">
				<div class="col-md-7">
					<div class="demo-card-wide mdl-card mdl-shadow--2dp">
						<div class="container-fluid">
							<h3 class="border-b Gotham-Bold font-size25 margin-top-1 margin-bottom-10 black-666 no-mayu">Post Relacionados</h3>
						</div>
						<section class="autoplay slider" style="padding:20px 0">
						<?php 
		                 //ORDER BY RAND()
		                $catid = $result['cat'];
		                $queryrelated = "SELECT * FROM tbl_post WHERE cat='$catid'  LIMIT 6";
		                $relatedpost = $db->select($queryrelated);
		                if ($relatedpost) {
		                    while ($rresult = $relatedpost->fetch_assoc()) {
		                 ?>
					    <div>
					      <img src="images/<?php echo $rresult['image']; ?>">
					    </div>
					    	<?php 
			                      }
			                  }else{
			                    echo "No Tenemos Nadita";
			                  }
			                 ?> 
					  </section>
					</div>
				</div>
				<?php
} //While
?>
<?php
} //IF DEL WHILE 
 else{
  header("Location: 404.php");
} 
?> 

				<div class="col-md-5">
						<div class="demo-card-wide mdl-card mdl-shadow--2dp">
							<div class="container-fluid">
								<h3 class="border-b Gotham-Bold font-size25 margin-top-1 margin-bottom-10 black-666 no-mayu">Ultimos Post</h3>	
							</div>
							<?php 
			                    $query = "SELECT * FROM tbl_post ORDER BY id DESC LIMIT 3 ";
			                    $post = $db->select($query);
			                    if ($post) {
			                      while($result = $post->fetch_assoc()){


			                   ?>
							<div class="col-md-12">
								<div class="col-md-4">
									<img src="images/<?php echo $result['image']; ?>">
								</div>
								<div class="col-md-8" style="padding-left:5px !important;">
								  <div class="Gotham-Medium"><?php echo $result['title']; ?></div>
								  <p><?php echo substr($result['body'],6); ?></p>
								  <div class=" wow bounceIn animated animated font-size12" style="display: inline-block;"><?php echo $fm->formatDate($result['date']); ?></div>
								  <a class="link  wow bounceIn animated animated pull-right Gotham-Thin" href="feed/<?php echo $result['id']; ?>" style="visibility: visible; animation-name: bounceIn;">Leer Más</a>
								</div>
							</div>
							<hr>
							 <?php  
                    }
                    }
                    ?>
						</div>

				</div>
			</div>

		</div>
	</div>