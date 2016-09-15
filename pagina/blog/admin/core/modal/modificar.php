<?php
/*-----------------------
Autor: Obed Alvarado
http://www.obedalvarado.pw
Fecha: 27-02-2016
Version de PHP: 5.6.3
----------------------------*/
	# conectare la base de datos
    $con=@mysqli_connect('localhost', 'root', '', 'pcode');
    if(!$con){
        die("imposible conectarse: ".mysqli_error($con));
    }
    if (@mysqli_connect_errno()) {
        die("Connect failed: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
	/*Inicia validacion del lado del servidor*/
	if (empty($_POST['id'])) {
           $errors[] = "ID vacío";
           echo $_POST['id'];
        } else if (empty($_POST['title'])){
			$errors[] = "Código vacío";
		} else if (empty($_POST['body'])){
			$errors[] = "Nombre vacío";
		} else if (empty($_POST['tags'])){
			$errors[] = "Moneda vacío";
		} else if (empty($_POST['cat'])){
			$errors[] = "Capital vacío";
		} else if (
			!empty($_POST['id']) && 
			!empty($_POST['title']) && 
			!empty($_POST['body']) &&
			!empty($_POST['tags']) &&
			!empty($_POST['cat'])

			
		){

		// escaping, additionally removing everything that could be (html/javascript-) code

		$title=mysqli_real_escape_string($con,(strip_tags($_POST["title"],ENT_QUOTES)));
		$body=mysqli_real_escape_string($con,(strip_tags($_POST["body"],ENT_QUOTES)));
		$tags=mysqli_real_escape_string($con,(strip_tags($_POST["tags"],ENT_QUOTES)));
		$cat=mysqli_real_escape_string($con,(strip_tags($_POST["cat"],ENT_QUOTES)));
		$id=intval($_POST['id']);
		$sql="UPDATE tbl_post SET title ='".$title."', body='".$body."',
		tags='".$tags."', cat='".$cat."' WHERE id='".$id."'";
		$query_update = mysqli_query($con,$sql);
			if ($query_update){
				$messages[] = "Los datos han sido actualizados satisfactoriamente.";
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
			}
		} else {
			$errors []= "Error desconocido.";
		}
		
		if (isset($errors)){
			
			?>
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong> 
					<?php
						foreach ($errors as $error) {
								echo $error;
							}
						?>
			</div>
			<?php
			}
			if (isset($messages)){
				
				?>
				<div class="alert alert-success" role="alert">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>¡Bien hecho!</strong>
						<?php
							foreach ($messages as $message) {
									echo $message;
								}
							?>
				</div>
				<?php
			}

?>	