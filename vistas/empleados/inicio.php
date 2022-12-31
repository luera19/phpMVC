<div class="card">
    <div class="card-header">
        <a name="" id="" class="btn btn-success" href="?controlador=empleados&accion=create" role="button">Agregar Empleado</a>


    </div>



    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($empleados as $empleado) { ?>

                    <tr class="">
                        <td> <?php echo $empleado->id; ?> </td>
                        <td> <?php echo $empleado->nombre; ?> </td>
                        <td> <?php echo $empleado->correo; ?> </td>



                        <td>
                            <div class="btn-group" role="group" aria-label="">
                                <a href="?controlador=empleados&accion=editar&id=<?php echo $empleado->id; ?>" class="btn btn-info">Editar </a>
                                <a href="?controlador=empleados&accion=borrar&id=<?php echo $empleado->id; ?>" class="btn btn-danger">Borrar </a>


                                



                            </div>
                        </td>
                    </tr>
                <?php } ?>

            </tbody>
        </table>
    </div>

</div>