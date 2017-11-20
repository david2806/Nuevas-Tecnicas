<center><h3>INGRESAR PRODUCTOS</h3><br>
	<form action="store" method="POST" role="form">
		
		{{csrf_field()}}
		<div>
			<label>Tipo:</label>
			<input type="text" name="tipo">
		</div>

		<br>
		<div>
			<label>Nombre:</label>
			<input type="text" name="nombre">
		</div>
		<br>
		
		<div>
			<label>Precio:</label>
			<input type="text" name="precio">
		</div>
		<br>

		<div>
			<br><input type="submit" value ="Guardar"/>
		</div>
		
	</form>
	</center>