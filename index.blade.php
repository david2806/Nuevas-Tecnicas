<html>
    <head>
        <title>PRODCUTOS</title>
        
    </head>
    <body><center>

    	<div class="row">
    		<h3>LISTADO DE PRODUCTOS</h3>

             <form action="api/productos/show" method="GET">
                {!!csrf_field() !!}
                <input type="text" name ="tipo"/>
            
                <input type="submit" value ="Buscar por Tipo"/><br>
        </form>
        
    	</div>


    	<div class="row">
    		<table border="2">

    			<thead>
    				<th>Código</th>
    				<th>Tipo</th>
    				<th>Nombre</th>
    				<th>Precio</th>    				
    			</thead>


    			@foreach ($resultado as $li)
    			<tr>
    				<td>{{$li->codigo}}</td>
    				<td>{{$li->tipo}}</td>
    				<td>{{$li->nombre}}</td>
    				<td>{{$li->precio}}</td>
    			</tr>
    			@endforeach

    		</table>
    	</div><br>
    	<a href="productos/create"> <button>Ingresar Productos</button></a>                        
        	
	</center>
    </body>
</html>