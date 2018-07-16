<?php if ($_SESSION){ ?>
	<div class="top-bar">
  <div class="top-bar-left">
    <ul class="dropdown menu" data-dropdown-menu>
      <li><a href="index.php">Inicio</a></li>
    </ul>
  </div>
  <div class="top-bar-right">
    <ul class="menu">
      <li class="menu-text" style="font-weight: bold;"><?php echo $user_check; ?></li><li><a href="opciones.php">Opciones</a></li><li><a href = "logout.php">Cerrar</a></li>
    </ul>
  </div>
</div>
<?php }else{ ?>
<div class="top-bar">
  <div class="top-bar-left">
    <ul class="dropdown menu" data-dropdown-menu>
      <li><a href="index.php">Inicio</a></li>
    </ul>
  </div>
  <div class="top-bar-right">
    <ul class="menu">
      <li class="menu-text" style="font-weight: bold;">Invitado</li><li><a href="login.php">Login</a></li><li><a href = "register.php">Registrarse</a></li>
    </ul>
  </div>
</div>
<?php } ?>

   