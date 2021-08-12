<div class="card">
    <div class="card-header">
        Editar Empleado
    </div>
    <div class="card-body">
       
        <form action="" method="post">

       

         <div class="mb-3">
           <label for="" class="form-label">ID:</label>
           <input readonly type="text"
             class="form-control" value=" <?php echo $empleado->id; ?>" name="id" id="id" aria-describedby="helpId" placeholder="ID empleado">
         </div>

            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre:</label>
              <input required type="text"
                class="form-control" value=" <?php echo $empleado->nombre; ?>" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre del Empleado">
            </div>

            <div class="mb-3">
              <label for="correo" class="form-label">Correo:</label>
              <input required type="email" value=" <?php echo $empleado->correo; ?>" class="form-control" name="correo" id="correo" aria-describedby="emailHelpId" placeholder="Correo del Empleado">
            </div>

            <input name="" id="" class="btn btn-success" type="submit" value="Actualizar Empleado">
            <a href="?controlador=empleados&accion=inicio" class="btn btn-secondary">Cancelar</a>
        </form>

    </div>
</div>