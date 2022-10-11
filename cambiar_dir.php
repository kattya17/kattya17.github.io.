<?php
    include("conexion.php");
    $codsucursal=$_POST['codsucursal'];
    $direccion=$_POST['direccion'];
 
    

    $consulta="update sucursal set direccion='$direccion'
     where codSucursal='$codsucursal';";
    
    $res=mysqli_query($con,$consulta);
    if($res){

        echo "
            <script>
                alert('Datos Cambiados');
                location.href='sucursal.php';
            </script> 
         ";
    }else{
        echo "error";
    }
    ?>