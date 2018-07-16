<?php 
include ("menus/header.php");
require("includes/DbConnect.php");
$db = new DbConnect();
$con = $db->connect();
?>
<h1>Noticias</h1>

<div class="form-group">
    <div class="input-group">
     <input type="text" name="search_text" id="search_text" placeholder="Buscar..." class="form-control" />
     </div>
     <div class="input-group">
          <?php
$sql1 = "SELECT id_categoria, nombre FROM categorias
 ";

$output = '';
$result1 = mysqli_query($con,$sql1);

  $output .= '<select name="categoria" id="select-text">';
while ($row1 = mysqli_fetch_assoc($result1)){  
  $output .= '<option value="'.$row1['id_categoria'].'">'.$row1['nombre'].'</option>';
}
  $output .= '</select>';

  echo $output;

?>
    </div>

   </div>



   <br />
<div class="row small-up-1 medium-up-2 large-up-3">

   <div id="result"></div>

 

</div>
<div class="row column">
<a class="button hollow expanded">Leer más</a>
</div>
<script type="text/javascript">
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"busqueda.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').bind("change keyup", function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });

$('#select-text').bind("change keyup", function(){
  var cat = $(this).val();
  if(cat != '')
  {
   load_data(cat);
  }
  else
  {
   load_data();
  }
 });

});
</script>