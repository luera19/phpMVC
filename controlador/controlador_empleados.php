<?php

include_once("modelo/empleado.php");
include_once("conexion.php");

Conectar::crearInstancia();

class ControladorEmpleados{

    public function inicio (){
       $empleados = Empleado::consultar();
       include_once("vistas/empleados/inicio.php");
    }

    //Funcion Crear
    public function create(){
        if($_POST){
            print_r($_POST);

            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];
            Empleado::crear($nombre,$correo);

            header("Location:./?controlador=empleados&accion=inicio");
        }
        include_once("vistas/empleados/create.php");
    }

    //Funcion Editar
    public function editar(){
       

            if($_POST){
                $id = $_POST['id'];
                $nombre = $_POST['nombre'];
                $correo = $_POST['correo'];
                
                Empleado::editar($id,$nombre,$correo);

                header("Location:./?controlador=empleados&accion=inicio");
            }

            $id=$_GET['id'];
            
            $empleado=(Empleado::buscar($id));
        
        
            include_once("vistas/empleados/update.php");

    }

    //Funcion Borrar    
    public function borrar(){
        include_once("vistas/empleados/delete.php");
        $id=$_GET['id'];
        Empleado ::borrar($id);

        header("Location:./?controlador=empleados&accion=inicio");
    }
    
}
