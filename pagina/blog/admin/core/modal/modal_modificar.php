<form id="actualidarDatos">
<div class="modal fade" id="dataUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Modificar país:</h4>
      </div>
      <div class="modal-body">
			<div id="datos_ajax"></div>
          <div class="form-group">         
			       <input type="hidden" class="form-control" id="id" name="id">
          </div>
		  <div class="form-group">
            <label for="nombre" class="control-label">Titulo:</label>
            <input type="text" class="form-control" id="nombre" name="title" required maxlength="45">
          </div>
		  <div class="form-group">
            <label for="moneda" class="control-label">Contenido</label>
            <input type="text" class="form-control" id="moneda" name="body" required ">
          </div>
		  <div class="form-group">
            <label for="capital" class="control-label">Tags:</label>
            <input type="text" class="form-control" id="capital" name="tags" required maxlength="30"> 
          </div>
		  <div class="form-group">
            <label for="continente" class="control-label">Categoria:</label>
            <input type="text" class="form-control" id="continente" name="cat" required maxlength="15">
          </div>
          
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Actualizar datos</button>
      </div>
    </div>
  </div>
</div>
</form>