<?php
include ("menus/header.php");

if (!$_SESSION) {
	header('Location: index.php');
}

ini_set('display_errors', 1);
require("includes/DbConnect.php");
if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
    $titulo = utf8_decode($_POST['titulo']);
    $cuerpo = utf8_decode($_POST['cuerpo']);
    $categoria = $_POST['categoria'];

    $db = new DbConnect();

  	$con = $db->connect();

  	$sqlC = "
	 SELECT id, user, correo from users where correo='$user_check'
	 ";

	 $result = mysqli_query($con,$sqlC);
	while ($row = mysqli_fetch_assoc($result)){ 
		$id = $row['id'];
	}


       $sql = "INSERT INTO noticias (id_noti, titulo, cuerpo, id_autor, id_categoria) VALUES (NULL, '$titulo', '$cuerpo', '$id','$categoria')";

        if ($con->query($sql) === True) {

         header("location: opciones.php");
      }else {
         $error = "Error";
         echo $error;
      }
   }

?>

<br>
<br>

<form class="log-in-form" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
  <h4 class="text-center">Crear Noticia</h4>
  <label>Titulo
    <input type="text" name="titulo" placeholder="Barranquilla por siempre!" required>
  </label>
  <label>Cuerpo de la noticia
    <textarea name="cuerpo" placeholder="Cuerpo de la noticia..." required></textarea>
  </label>
  <label>Categoria
     <select name="categoria">
	    <option value="1">Soccer</option>
	    <option value="2">Cultura</option>
  	</select>
  </label>
  <p><input type="submit" class="button expanded" value="Crear"></input></p>
</form>