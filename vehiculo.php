<?php include("template/cabecera.php"); ?>
<div  class="container">

<div class="row">
		
		<div class="col-md-5">
		<h1>REGISTRO DE SERVICIO DE TRANSPORTE</h1>
	
	<form method="post" action="grabar_ve.php">
<br>
		<label>Ingrese PLACA</label><br>
		<input type="varchar" name="placa" id="placa" class="form-control" placeholder=""><br>
		<label>Ingrese Color</label><br>
		<input type="texto" name="color" id="color" class="form-control" placeholder=""><br>
		<label>Ingrese Modelo</label><br>
		<input type="varchar" name="modelo" id="modelo" class="form-control"><br>
      <label>Ingrese Kilometraje</label><br>
		<input type="texto" name="kilometraje" id="kilometraje" class="form-control" placeholder=""><br>
		<label>Ingrese Capacidad</label><br>
		<input type="number" name="capacidad" id="capacidad" class="form-control"><br>


		<label>SUCURSAL</label>
		<select id="sucursal" name="sucursal" class="form-control">
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
		<br>
		<label>TALLER</label>
		<select id="taller" name="taller" class="form-control">
			<option value="S">Selecione un taller</option>
		
         <?php
			include("conexion.php");
			$consulta = "SELECT codTaller as tall 
			FROM taller ";
			$res=mysqli_query($con, $consulta);
        	while($reg = mysqli_fetch_array($res))
			{
				?>
				<option>
				<?php echo $reg['tall'];?></option>
				<?php
			}

			?>
		</select>

		


		<input type="submit" name="registrar" value="Registrar" class="btn btn-primary">
		
	</form>

	<br>
	<br>
</div>

</div>
</div>

<!-- LISTAR SUCURSALES --> 
<div class="container">
            <div class="row">
<div class="col-md-3"> </div>
                <div > 
                    <h2>LISTA DE SUCURSALES</h2>
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

 
