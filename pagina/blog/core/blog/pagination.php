 <?php 

$query = "SELECT * FROM tbl_post";
$result = $db->select($query);
$total_rows = mysqli_num_rows($result);
$total_pages = ceil($total_rows/$per_page);



echo '<center>';
echo '<ul class="pagination">';
if ($total_pages <= $per_page) {$di = 'class="disabled"';}else{$di = 'class=""';}
if ($total_pages <= $per_page) {$ba = '<a href="#">';}else{$ba = '<a href="#asd">';}  
echo "<li ".$di.">".$ba.'<'."</a></li> ";  

for ($i=1; $i<=$total_pages; $i++) { 
  $active = '';
  if (isset($_GET['page']) && $i == $_GET['page']) 
  {
  $active = 'class="active"';
  }

  
    echo "<li ".$active."><a  href='p/".$i."'>".$i."</a></li> ";
 
}; 

echo "<li ><a href='p/$total_pages'>".'>'."</a> </li>"; 

echo '</ul> '; 
echo '</center>';
?> 