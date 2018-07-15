<?php   
   ini_set('display_errors', 1);
   require("includes/DbConnect.php");
    session_start();   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
    $db = new DbConnect();

  $con = $db->connect();
      
      $myemail = $_POST['email'];
      $myuser = $_POST['user'];
      $mypassword = md5($_POST['password']); 
      
       $sql = "INSERT INTO users (id, user, password, correo, estado, tipo) VALUES (NULL, '$myuser', '$mypassword', '$myemail', 1, 1)";

        if ($con->query($sql) === True) {
         $_SESSION['login_user'] = $myemail;
         header("location: index.php");
      }else {
         $error = "Error";
         echo $error;
      }
   }
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation.min.css">

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Mi primer Blog</title>
</head>
<body>

<h2 style="text-align: center; color: purple">Mi primer Blog</h2>
<h3 style="text-align: center;">Administradores de Mi primer Blog</h1>

<form class="log-in-form" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
  <h4 class="text-center">Registrarte con tu correo asociado:</h4>
  <label>Email
    <input type="email" name="email" placeholder="somebody@example.com" required>
  </label>
  <label>User
    <input type="text" name="user" placeholder="andres..." required>
  </label>
  <label>Contraseña
    <input type="password" name="password" placeholder="Password" required>
  </label>
  <p><input type="submit" class="button expanded" value="Registrate"></input></p>
</form>


</body>
</html>