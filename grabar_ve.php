<?php
 include("conexion.php");
 $placa=$_POST['placa'];
 $color=$_POST['color'];
 $modelo=$_POST['modelo'];
 $kilometraje=$_POST['kilometraje'];
 $capacidad=$_POST['capacidad'];
 $sucursal=$_POST['sucursal'];
 $taller=$_POST['taller'];

 

 $consulta="INSERT INTO `vehiculo`(`placa`, `color`, `modelo`, `kilometraje`, `capacidad`, 
 `codSucursal`, `codTaller`)
 VALUES ('$placa','$color','$modelo','$kilometraje','$capacidad','$sucursal','$taller')";
 
 $res=mysqli_query($con,$consulta);
 if($res){

     echo "
         <script>
             alert('Datos Registrados del vehiculo');
             location.href='vehiculo.php';
         </script> 
      ";
 }else{
     echo "error";
 }
    ?>