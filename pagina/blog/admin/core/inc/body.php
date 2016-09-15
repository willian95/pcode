  <header class="head">
    
  </header>
  <ul class="nav nav-tabs">
  <li class="active"><a href="#home" data-toggle="tab" aria-expanded="false">Home</a></li>
  <li class=""><a href="#cate" data-toggle="tab" aria-expanded="true">Categoria</a></li>
    <li class=""><a href="#post" data-toggle="tab" aria-expanded="true">Añadir Post</a></li>
    <li class=""><a href="#postlist" data-toggle="tab" aria-expanded="true">Lista Post</a></li>
  </ul>
<div id="myTabContent" class="tab-content" style="margin-top: 20px;">
  <?php include('core/controllers/dashboard.php'); ?>
  <?php include('core/controllers/category.php'); ?>
  <?php include('core/controllers/post.php'); ?>
  <?php include('core/controllers/listpost.php'); ?>
</div>
    
      
 

        
     <!-- <main class="mdl-layout__content">
        
       
        <?php //include('core/controllers/post.php'); ?>
        <?php //include('core/controllers/listpost.php'); ?>
      </main>  -->