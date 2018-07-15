<?php 
 ini_set('display_errors', 1);
require("includes/DbConnect.php");
$db = new DbConnect();
$con = $db->connect();

$output = '';
if(isset($_POST["query"]))
{
 $search = $_POST["query"];
 $sql = "
 SELECT n.titulo, n.cuerpo, u.user, c.nombre 
    FROM noticias n inner join users u on (u.id=n.id_autor) inner join categorias c on (c.id_categoria=n.id_categoria)
    WHERE n.titulo LIKE '%".$search."%'
 ";
}
else
{
 $sql = "SELECT n.titulo, n.cuerpo, u.user, c.nombre 
    FROM noticias n inner join users u on (u.id=n.id_autor) inner join categorias c on (c.id_categoria=n.id_categoria)
 ";
}
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result) > 0)
{
while ($row = mysqli_fetch_assoc($result)){  


    $output .= '
<div class="column">
<div class="callout">'.utf8_encode($row['cuerpo']).
'</p><p class="lead">'.$row['titulo'].
'</p><p class="subheader">Autor: '.$row['user'].' Categoria: '.$row['nombre'].
'</p></div>
</div> ';
   }
   echo $output;
  }
else
{
 echo 'No hay posts';
}





?>