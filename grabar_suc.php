<?php
    include("conexion.php");
    $codsucursal=$_POST['codsucursal'];
    $direccion=$_POST['direccion'];
 
    

    $consulta="INSERT INTO `sucursal`(`codSucursal`, `direccion`, `cantVehiculos`) 
    VALUES ('$codsucursal','$direccion','null')";
    
    $res=mysqli_query($con,$consulta);
    if($res){

        echo "
            <script>
                alert('Datos Registrados');
                location.href='sucursal.php';
            </script> 
         ";
    }else{
        echo "error";
    }
    ?>