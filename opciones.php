<?php 

include ("menus/header.php");

if (!$_SESSION) {
	header('Location: index.php');
}

ini_set('display_errors', 1);
require("includes/DbConnect.php");
$db = new DbConnect();
$con = $db->connect();

$sql = "
 SELECT n.id_noti, n.titulo, n.cuerpo, u.user, c.nombre 
    FROM noticias n inner join users u on (u.id=n.id_autor) inner join categorias c on (c.id_categoria=n.id_categoria)
    WHERE u.correo='$user_check'
 ";


?>


<ul class="menu align-center">
  <li><a href="crearNoticia.php">Crear noticias</a></li>
</ul>

<h3>Mis noticias</h3>
 <table id="showTable">
<thead>
		    <tr>
		      <th>Titulo</th>		      
		      <th>Opción</th>
		    </tr>
		  </thead>
		  <tbody>
		  
<?php

$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result) > 0)
{
while ($row = mysqli_fetch_assoc($result)){  
	 
	echo "<tr><td><b>".$row['titulo']."</b></td><td><a href='eliminar.php?delete=".$row['id_noti']."'><span style='color: red'> Eliminar</span></a><a href='#'><span style='color: green'> Editar</span></a></td></tr>";
	}
}else{
	echo "No tienes posts creados";
}
?>

</tbody>
</table>
