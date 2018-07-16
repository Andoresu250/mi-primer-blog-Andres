<?php
session_start();   
if ($_SESSION) {
	$user_check = $_SESSION['login_user'];  
}else{
	$user_check = "Invitado";
}

