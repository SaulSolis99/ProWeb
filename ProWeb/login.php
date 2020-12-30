<?php
include("conexion.php");
session_start();
if(isset($_POST['inicia'])){

  if(!empty($_POST['cuenta']) && !empty($_POST['contraseña'])){

    $cuenta = $_POST['cuenta'];
    $contraseña = $_POST['contraseña'];

      $consulta = "SELECT cuenta, contraseña, tipo FROM usuario WHERE cuenta ='$cuenta'";
      $resultado = mysqli_query($conex, $consulta);
      $dato = mysqli_fetch_array($resultado);

      if($dato['contraseña'] == $contraseña){
        $cuenta = $dato['cuenta'];
        echo '<script language="javascript">alert("Bienvenido ...'.$cuenta.'");</script>';
       $_SESSION['cuenta']=$cuenta;
        $_SESSION['contra']=$contraseña;
       if($dato['tipo'] == 'admin'){
          header('location:admin.php');
        }else{
          header('location:index.php');
        }
      }else{
        echo '<script language="javascript">alert("La contraseña ingresada es erronea");</script>';
      }

  }else{
    echo '<script language="javascript">alert("Por favor complete todos los campos");</script>';
  }
}

include_once("header.php");
 ?>
   <div class="container">
     <div class="login-container">
       <div class="register">
         <h2 align="center">Iniciar Sesión</h2>
         <form action="login.php" method="POST">
           <input type="text" name="cuenta" placeholder="Ingresa cuenta" class="cuenta">
           <input type="password" name="contraseña" placeholder="Ingresa contraseña" class="pass">
           <input type="submit" name="inicia" class="submit" value="INICIAR SESIÓN"><br>
           <a href="signup.php"> Registrate aquí</a><br>
           <a href="recover.php">¡Olvidaste la contraseña?  Recuperala aquí</a>
         </form>
       </div>
       </div>
     </div>
<?php
include_once("footer.php");
 ?>
