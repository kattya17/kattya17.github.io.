<?php include("template/cabecera.php"); ?>
 
<div class="container">
<div class="row">	
<div class="col-md-5">
		<h1>REGISTRO DE SERVICIO DE SUCURSAL</h1>
	
	<form method="post" action="grabar_suc.php">
<br>
		<label>Ingrese codigo sucursal</label><br>
		<input type="number" name="codsucursal" id="codsucursal" class="form-control" placeholder=""><br>
		<label>Ingrese Direccion</label><br>
		<input type="text" name="direccion" id="direccion" class="form-control" placeholder=""><br>



		<input type="submit" name="registrar_suc" value="Registrar_suc" class="btn btn-primary">
		
	</form>

	<br>
	<br>
</div>
</div>
</div>
<div class="container">
<div class="row">		
<div class="col-md-5">
		<h1>CAMBIO DE DIRECCION</h1>
	
	<form method="post" action="cambiar_dir.php">
    <br>
		<label>Ingrese codigo sucursal</label><br>
      <select id="codsucursal" name="codsucursal" class="form-control">
			<option value="S">Selecione codigo de sucursal</option>
		
			<?php
			include("conexion.php");
			$consulta = "SELECT codSucursal as suc 
			FROM sucursal ";
			$res=mysqli_query($con, $consulta);
        	while($reg = mysqli_fetch_array($res))
			{
				?>
				<option>
				<?php echo $reg['suc'];?></option>
				<?php
			}

			?>
		</select>

		<label>Ingrese NUEVA Direccion</label><br>
		<input type="text" name="direccion" id="direccion" class="form-control" placeholder=""><br>



		<input type="submit" name="cambiar_dir" value="cambiar" class="btn btn-primary">
		
	</form>

	<br>
	<br>
</div>
</div>
</div>

<div class="container">
            <div class="row">
<div class="col-md-3"> </div>
                <div > 
                    <h2>LISTA - SERVICIO DE SUCURSALES</h2>
                    <br>
<table class="table table-stripe table-border table-hover">
<thead class="table-active">
    <tr align="center" class="table-dark">
        <th>codigo sucursal</th>
        <th>DIRECCION</th>
        <th>CANTIDAD DE AUTOS</th>
          
    </tr>
    <?php
        include("conexion.php");
        $consulta ="select * from sucursal";
        $res = mysqli_query($con,$consulta);
        while($reg=mysqli_fetch_array($res)){
            echo "<tr>";
            echo "<td>".$reg['codSucursal']."</td>";
            echo "<td>".$reg['direccion']."</td>";
            echo "<td>".$reg['cantVehiculos']."</td>";
          
           
            
            echo "</tr>";

        }
    ?>
     </thead>
    
</table>





