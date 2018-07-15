<?php   
   ini_set('display_errors', 1);
   require("includes/DbConnect.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
   	$db = new DbConnect();

	$con = $db->connect();
      
      $myusername = $_POST['email'];
      $mypassword = md5($_POST['password']); 
      
      $sql = "SELECT id FROM users WHERE correo = '$myusername' and password = '$mypassword' and estado='1'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         $_SESSION['login_user'] = $myusername;
         //echo "Exitosa";
         header("location: index.php");
      }else {
         $error = "Tu email o contraseña son incorrectos";
         echo $error;
      }
   }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation.min.css">

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Mi primer Blog</title>
</head>
<body>

<h2 style="text-align: center; color: purple">Mi primer Blog</h2>
<h3 style="text-align: center;">Administradores de Mi primer Blog</h1>

<form class="log-in-form" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
  <h4 class="text-center">Login con tu correo asociado:</h4>
  <label>Email
    <input type="email" name="email" placeholder="somebody@example.com">
  </label>
  <label>Contraseña
    <input type="password" name="password" placeholder="Password">
  </label>
  <p><input type="submit" class="button expanded" value="Entrar"></input></p>
</form>


</body>
</html>