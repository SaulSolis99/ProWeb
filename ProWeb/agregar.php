<?php
	include ("conexion.php");
	include_once("header_admin.php");
if (isset($_POST['agregar'])) {
	if(!empty($_POST['clave']) && !empty($_POST['descripcion']) && !empty($_POST['costo']) && !empty($_POST['cantidad']) && !empty($_POST['imagen'])){

$clave= $_POST['clave'];
$descripcion=$_POST['descripcion'];
$costo=$_POST['costo'];
$cantidad=$_POST['cantidad'];
$imagen=$_POST['imagen'];

$sql="INSERT INTO producto(clave, descripcion, costo, cantidad, imagen) VALUES ('$clave', '$descripcion', '$costo', '$cantidad', '$imagen')";
mysqli_query($conex, $sql);
if($clave!=null)
header('location:admin.php');
}
}
 ?>
<div>
	<div class="container2">
     <div class="login-container">
       <div class="register">
	<form action="agregar.php" method="POST">
		<h2>Añadir Producto</h2>
		<input type="text" placeholder="Ingresa la Clave" name="clave" required>
		<input type="text" placeholder="Ingresa la Descripcion del Producto" name="descripcion" required>
		<input type="number" placeholder="Ingresa el Costo" name="costo" required>
		<input type="number" placeholder="Ingresa la Cantidad" name="cantidad" required>
		<form action="upload.php" method="post" enctype="multipart/form-data">
		<input type="file" name="imagen"/>
		<input type="submit" name="agregar" value="Agregar">
		<button type="button" onclick="location.href='admin.php'">Regresar</button>
	</form>
	</div>
	</div>
</div>
</div>

<?php
include_once("footer.php");
 ?>
