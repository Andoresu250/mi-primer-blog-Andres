<?php include ("menus/header.php");
?>
<h1>Noticias</h1>

<div class="form-group">
    <div class="input-group">
     <input type="text" name="search_text" id="search_text" placeholder="Buscar..." class="form-control" />
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
 $('#search_text').keyup(function(){
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
});
</script>