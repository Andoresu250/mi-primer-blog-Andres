<?php
include ("menus/header.php");
  ini_set('display_errors', 1);
if (!$_SESSION) {
	header('Location: index.php');
}
if (!$_GET) {
	header('Location: index.php');
}

$id = $_GET["id"];




require("includes/DbConnect.php");
$db = new DbConnect();
$con = $db->connect();

$sql = "
 SELECT n.titulo, n.cuerpo, u.user, c.nombre
    FROM noticias n inner join users u on (u.id=n.id_autor) inner join categorias c on (c.id_categoria=n.id_categoria)
    WHERE n.id_noti LIKE '$id'
 ";

$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result) > 0)
{
while ($row = mysqli_fetch_assoc($result)){  
	$titulo = $row['titulo'];
	$cuerpo = $row['cuerpo'];
	$nombre = $row['nombre'];
}
}




?>


<br>
<br>

<form class="log-in-form" id="submit_form" method="POST">
  <h4 class="text-center">Editar Noticia</h4>
  <label>Titulo
    <input type="text" name="titulo" value="<?php echo $titulo ?>" required>
  </label>
  <label>Cuerpo de la noticia
    <textarea name="cuerpo" required><?php echo utf8_encode($cuerpo) ?></textarea>
  </label>
  <label>Categoria
     <select name="categoria">
     <?php if ($nombre=='Soccer') {
     	?>
     	<option value="1">Soccer</option>
	    <option value="2">Cultura</option>
     	<?php
     	}else{
     		?>
	    <option value="2">Cultura</option>
		<option value="1">Soccer</option>
     		<?php
     	}
      ?>
	    
  	</select>
  </label>
  <input type="hidden" name="id" value="<?php echo $id ?>" >
  <p><button type="submit" class="button expanded">Editar</button></p>
</form>


<script type="text/javascript">
$("#submit_form").on('submit', function(e){
	e.preventDefault();
	$.ajax({
		url:"editarID.php",
		method:"POST",
		data:new FormData(this),
		contentType:false,
		processData:false,
		success:function(data){
			if(data == 1){
				alert("Editado exitosamente");
			}else{
				alert("Error");
			}
		}
	})
});
 </script>