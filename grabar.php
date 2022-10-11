<?php
    include("conexion.php");
    $id=$_POST['id'];
    $co=$_POST['costo'];
    $fe=$_POST['fecha'];
    $usu=$_POST['usuario'];
    $cond=$_POST['cond'];
    $pl=$_POST['placa'];
    $dp=$_POST['dirpartida'];
    $dl=$_POST['dirllegada'];
    

    $consulta="insert into servicio_de_transporte (idServicio,costo,fecha, ciUsuario,ciConductor,placa, dirPartida, dirLlegada) 
    values ('$id','$co','$fe','$usu','$cond','$pl','$dp','$dl')";
    
    $res=mysqli_query($con,$consulta);
    if($res){

        echo "
            <script>
                alert('Datos Registrados');
                location.href='ingresar.php';
            </script> 
         ";
    }else{
        echo "error";
    }
    ?>