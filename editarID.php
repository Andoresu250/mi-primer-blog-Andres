<?php ini_set('display_errors', 1);


    $titulo = utf8_decode($_POST['titulo']);
    $cuerpo = utf8_decode($_POST['cuerpo']);
    $categoria = $_POST['categoria'];

    $id = $_POST['id'];

    require("includes/DbConnect.php");
    $db = new DbConnect();
    $con = $db->connect();


       $sql = "UPDATE noticias SET titulo='$titulo', cuerpo='$cuerpo', id_categoria='$categoria' where id_noti='$id' ";

        if ($con->query($sql) === True) {

         echo 1;
      }else {
         echo 2;
      }
   
