  <?php
              $query = "SELECT * FROM tbl_post WHERE cat='$id'";
              $post = $db->select($query,'set name utf8');
              if ($post) {
                  while ($result = $post->fetch_assoc()) {  
   ?>

   <div class="col-md-4">
<div class="demo-card-wide mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title showhim" >
  <div class="baget Gotham-Thin showme"><?php echo $fm->formatDate($result['date']); ?></div>
 	<img src="images/<?php echo $result['image']; ?>">
    <h2 class="mdl-card__title-text">Welcome</h2>
  </div>
  <div class="mdl-card__supporting-text width100">
      <div class="Gotham-Bold  no-mayu font-size28"><?php echo ucwords($result['title']); ?>
        <div class="pull-right font-size18">
            <div class="material-icons mdl-badge mdl-badge--overlap" data-badge="<?php echo $result['visit']; ?>"><i class="fa fa-eye" aria-hidden="true"></i></div>
        </div>
      </div>
  </div>



  
  
  <div class="mdl-card__supporting-text">
    <?php echo utf8_encode($fm->textShorten($result['body'], 150)); ?>
  </div>
  <div class="mdl-card__actions mdl-card--border">
    <?php $cat = $result['cat'] ?>
    <ul class="nav nav-pills" style="display: inline-block;">
      <?php
      $query = "SELECT * FROM tbl_category WHERE id='$cat'";
      $in = $db->select($query);
      if ($in) {
          while ($r = $in->fetch_assoc()) {
      ?>
      <li class="active Gotham-Light" ><a class="<?php echo $r['class']; ?>"><?php echo $r['name']; ?><span class="badge"></span></a></li>
      <?php

          }
      }

       ?>   
    </ul>

    <a class="btn btn-x3 wow bounceIn animated animated pull-right" href="feed/<?php echo $result['id']; ?>" style="visibility: visible; animation-name: bounceIn;">Leer Más</a>
  </div>
  <div class="mdl-card__menu">
   
  </div>
</div>
<br>
</div>

<?php } }else{
	echo "No Hay Datos";
	} ?>    