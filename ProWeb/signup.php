<?php
include("conexion.php");
session_start();
if(isset($_POST['registra'])){

	if(!empty($_POST['nombre']) && !empty($_POST['contraseña']) && !empty($_POST['ccontraseña']) && !empty($_POST['cuenta'])
 && !empty($_POST['tipo'])){

		$nombre = $_POST['nombre'];
		$cuenta = $_POST['cuenta'];
		$contra = $_POST['contraseña'];
		$ccontra = $_POST['ccontraseña'];
		$longitud = [".strlen($contra)."];
		$tipo = $_POST['tipo'];

			if($contra == $ccontra){
					$consulta = "INSERT INTO usuario(cuenta, contraseña, nombre, tipo)
					 VALUES ('$cuenta' , '$contra' ,'$nombre', '$tipo')";
					$resultado = mysqli_query($conex, $consulta);
				if($resultado){
						echo '<script language="javascript">alert("Usuario registrado exitosamente");</script>';
						$_SESSION['cuenta']=$cuenta;
						$_SESSION['contra']=$contra;
				}else{
					echo '<script language="javascript">alert("La cuenta '.$cuenta.' ya fue registrada anteriormente o hubo un error");</script>';
				}
			}else{
				echo '<script language="javascript">alert("La contraseña no coincide con la confirmacion");</script>';
			}
			}

	}else{
		echo '<script language="javascript">alert("Por favor complete todos los campos");</script>';
	}
include_once("header.php");
 ?>

   <div class="container">
     <div class="signup-container">
       <div class="register">
         <form action="signup.php" method="POST">
					 <input type="text" name="cuenta" placeholder="Ingresa tu cuenta" class="cuenta" required>
           <input type="text" name="nombre" placeholder="Ingresa tu nombre(s)" class="nombre" required>
					 <input type="text" name="tipo" class="tipo" placeholder="Ingresa el tipo de usuario" required>
           <input type="password" name="contraseña" placeholder="Ingresa contraseña" class="pass" required>
           <input type="password" name="ccontraseña" placeholder="Confirma contraseña" class="repass" required>
           <input type="submit" name="registra" class="submit" value="REGISTRAR"><br>
         </form>
       </div>
       </div>
		 </div>

<?php
include_once("footer.php");
?>
