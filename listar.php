<?php include("template/cabecera.php"); ?>


<div class="container">
            <div class="row">
                <div class="col-md-3"> </div>
                <div > 
                    <h2>LISTA - SERVICIO DE TRANSPORTE</h2>
                    <br>
<table class="table table-stripe table-border table-hover">
<thead class="table-active">
    <tr align="center" class="table-dark">
        <th>ID SERVICIO</th>
        <th>COSTO</th>
        <th>FECHA</th>
        <th>ID Us.</th>
        <th>ID Con.</th>
        <th>PLACA</th>
        <th>DIRECCION PARTIDA</th>
        <th>DIRECCION LLEGADA</th>
        
        
    </tr>
    <?php
        include("conexion.php");
        $consulta ="select * from servicio_de_transporte";
        $res = mysqli_query($con,$consulta);
        while($reg=mysqli_fetch_array($res)){
            echo "<tr>";
            echo "<td>".$reg['idServicio']."</td>";
            echo "<td>".$reg['costo']."</td>";
            echo "<td>".$reg['fecha']."</td>";
            echo "<td>".$reg['ciUsuario']."</td>";
            echo "<td>".$reg['ciConductor']."</td>";
            echo "<td>".$reg['placa']."</td>";
            echo "<td align='center'>".$reg['dirPartida']."</td>";
            echo "<td align='center'>".$reg['dirLlegada']."</td>";
            
            
            echo "<td>";   
            echo "</td>";
           
            
            echo "</tr>";

        }
    ?>
     </thead>
    
</table>
<br>
<a href="registro.php"><button type="button" class="btn btn-primary"> Registrar nuevo Empleado </button></a>
<br>