<?php
	include ("conexion.php");
	include_once("header_admin.php");
	if (!empty($_GET['id'])) {

$id=$_GET['id'];
$sql="SELECT * FROM producto WHERE clave='$id'";
$resultado=mysqli_query($conex, $sql);
  }
   while($fila=mysqli_fetch_array($resultado)){
 ?>
<div>
	<div class="container2">
     <div class="login-container">
       <div class="register">
	<form action="editar.php" method="POST">
		<h2>Editar Producto</h2>
		<input type="hidden" name="id" value="<?php echo $fila['clave'] ?>">
		<h2>Clave: <?php echo $fila['clave'] ?></h2><br>
		<input type="text" name="descripcion" value="<?php echo $fila['descripcion'] ?>">
		<input type="number" name="costo" value="<?php echo $fila['costo'] ?>">
		<input type="numbre" name="cantidad" value="<?php echo $fila['cantidad'] ?>">
		<form action="upload.php" method="post" enctype="multipart/form-data">
		<input type="file" name="imagen"/ value="<?php echo $fila['imagen'] ?>">
		<input type="submit" name="editar" value="Actualizar">
		<button type="button" onclick="location.href='admin.php'">Regresar</button>
	</form>
	</div>
	</div>
</div>
</div>

<?php
}
if (isset($_POST['editar'])) {
	if(!empty($_POST['descripcion']) && !empty($_POST['costo']) && !empty($_POST['cantidad']) && !empty($_POST['imagen'])){

$id= $_POST['id'];
$desc=$_POST['descripcion'];
$costo=$_POST['costo'];
$cant=$_POST['cantidad'];
$image=$_POST['imagen'];

$sql2="UPDATE producto SET descripcion='$desc', costo='$costo',cantidad='$cant', imagen='$image' WHERE clave='$id'";
$resul= mysqli_query($conex, $sql2);
if($resul)
header('location:admin.php');
}
}
include_once("footer.php");
 ?>
