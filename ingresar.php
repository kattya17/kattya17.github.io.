<?php include("template/cabecera.php"); ?>




<div  class="container">

<div class="row">
		
		<div class="col-md-5">
		<h1>REGISTRO DE SERVICIO DE TRANSPORTE</h1>
	
	<form method="post" action="grabar.php">
<br>
		<label>Ingrese ID</label><br>
		<input type="number" name="id" id="id" class="form-control" placeholder=""><br>
		<label>Ingrese Costo</label><br>
		<input type="number" name="costo" id="costo" class="form-control" placeholder=""><br>
		<label>Ingrese Fecha</label><br>
		<input type="date" name="fecha" id="fecha" class="form-control"><br>

		<label>Usuario</label>
		<select id="usuario" name="usuario" class="form-control">
			<option value="S">Selecione un usuario</option>
		
			<?php

			include("conexion.php");
			$consulta = "SELECT p.ci, concat(p.paterno,' ', p.materno,' ', p.nombre) as nom 
			FROM persona p , usuario u  where u.ciUsuario = p.ci;";
			$res=mysqli_query($con, $consulta);
			while($reg = mysqli_fetch_array($res))
			{
				?>
				<option value="<?php echo $reg['ci'];
				?>">
				<?php echo $reg['nom'];?></option>
				<?php
			}

			?>
		</select>
		<br>
		<label>Conductor</label>
		<select id="conductor" name="cond" class="form-control">
			<option value="S">Selecione un conductor</option>
		
			<?php
			include("conexion.php");
			$consulta = "SELECT p.ci, concat(p.paterno,' ', p.materno,' ', p.nombre) as nom1
			FROM persona p , conductor c 
			where c.ciConductor = p.ci";
			$res=mysqli_query($con, $consulta);
			while($reg = mysqli_fetch_array($res))
			{
				?>
				<option value="<?php echo $reg['ci'];
				?>">
				<?php echo $reg['nom1'];?></option>
				<?php
			}

			?>
		</select>

		<br>
		<label>Ingrese Placa</label><br>
		<input type="text" name="placa" id="placa" class="form-control" placeholder=""><br>
		<label>Ingrese Direccion de Partida</label><br>
		<input type="text" name="dirpartida" id="dirpartida" class="form-control" placeholder=""><br>
		<label>Ingrese Direccion de Llegada</label><br>
		<input type="text" name="dirllegada" id="dirllegada" class="form-control" placeholder=""><br><br>
		


		<input type="submit" name="registrar" value="Registrar" class="btn btn-primary">
		<a href="listar.php"><button type="button" class="btn btn-primary"> Mostrar Lista </button></a>
		
	</form>

	<br>
	<br>
</div>
<div class="col-md-3"></div>
</div>
</div>


