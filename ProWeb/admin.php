<?php
include_once("header_admin.php");
 ?>
<div class="container">
	<div id="tabs">
  <ul>
    <li><a href="#Productos">Productos</a></li>
  </ul>
  <div id="Productos">
  	<h2>Productos</h2>
  	<?php
include("Productos.php");
//include("tabPedidos.php");
 ?>
    </div>
  </div>
</div>
 <?php
include_once("footer.php");
  ?>
