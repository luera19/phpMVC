<div class="card">
  <div class="card-header">
    Agregar Empleado
  </div>
  
  <div class="card-body">
    
    <form action="" method="post">
      <div class="mb-3">
        <label for="nombre" class="form-label"><b>Nombre:</b></label>
        
        <input required type="text" class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre del empleado">
          
      </div>

      <div class="mb-3">
        <label for="correo" class="form-label" placeholder="Ingrese su nombre"><b>Correo:</b> 
        
        </label>
        <input required type="email" class="form-control" name="correo" id="correo" aria-describedby="emailHelpId" placeholder="Correo del empleado">

      </div>

      <input name="" id="" class="btn btn-success" type="submit" value="Agregar empleado">

      <a href="?controlador=paginas&accion=inicio" class="btn btn-primary">Cancelar </a>

    </form>

  </div>

</div>