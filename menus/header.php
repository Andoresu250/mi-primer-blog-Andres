<?php
   include('session.php');
?>
<html>
   
   <head>
      <title>Bienvenido <?php echo $user_check; ?></title>
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation.min.css">
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <style>
      .floating-box {
          display: inline-block;
          width: 300px;
          height: 400px;
          margin: 10px;
      }

      </style>
   </head>
   
   <body>

   <?php

   include("menu.php");