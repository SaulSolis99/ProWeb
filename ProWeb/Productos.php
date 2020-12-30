<?php
include ("conexion.php");
$sql='SELECT * FROM producto';
$resultado = mysqli_query($conex, $sql);
 ?>

 <div>
 	<table cellpadding="20" cellspacing="40" >
 		<thead>
 			<tr>
 				<th>Clave</th>
 				<th>Descripcion</th>
 				<th>Costo</th>
 				<th>Cantidad</th>
 				<th>Imagen</th>
 				<th>Acciones</th>
 			</tr>
 		</thead>
 		<tbody>
 			<?php
 			while($filas=mysqli_fetch_array($resultado)){
 			?>
 			<tr>
 				<td><?php echo $filas['clave']; ?></td>
 			<td><?php echo $filas['descripcion']; ?></td>
 			<td><?php echo $filas['costo']; ?></td>
 			<td><?php echo $filas['cantidad']; ?></td>
 			<td><?php echo $filas['imagen']; ?></td>
 			<td>
 				<button type="button" onclick="location.href='editar.php?id=<?php echo $filas['clave']; ?>'">Editar</button>
 				<button type="button" onclick="location.href='eliminar.php?id=<?php echo $filas['clave']; ?>'">Eliminar</button>
 			</td>
 			</tr>
 			<?php }?>
 		</tbody>
 	</table>
 	<button type="button" onclick="location.href='agregar.php'" style="float: right;">Agregar Producto</button>
 	<center><button type="button" onclick="location.href='index.php'" style="float: center;">Cerrar Sesion</button></center>
 </div>
