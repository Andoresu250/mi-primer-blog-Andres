<?php

if (!$_SESSION) {
	header('Location: index.php');
}

if (!$_GET) {
	header('Location: index.php');
}

$id_eliminar = $_GET["delete"];

require("includes/DbConnect.php");
$db = new DbConnect();
$con = $db->connect();

$sql = "DELETE FROM noticias where id_noti='$id_eliminar'";

        if ($con->query($sql) === True) {

         header("location: opciones.php");
      }else {
         $error = "Error";
         echo $error;
      }

;