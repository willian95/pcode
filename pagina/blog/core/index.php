<?php
include('db.php');
include('Database.php');

$db = new Database();
$query = "SELECT * FROM tbl_post";
$post = $db->select($query);
$r = $post->fetch_assoc();
$i = $r['date'];
echo $i;
function dias_transcurridos($fecha_i,$fecha_f)
{
	$dias	= (strtotime($fecha_i)-strtotime($fecha_f))/86400;
	$dias 	= abs($dias); $dias = floor($dias);		
	return $dias;
}echo "<br>";
// Ejemplo de uso:
echo dias_transcurridos(".$i.",'2016-07-18');
echo date("$i");
// Salida : 17
echo "<br>";
$date = new DateTime('2000-01-01');
echo $date->format('Y-m-d H:i:s');


 ?>

 <a href="index.php?id=1">asds</a>