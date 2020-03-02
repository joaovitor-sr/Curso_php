<!DOCTYPE html> 
 <html>
  <head>
   <meta charset="UTF-8">
   <title>Sessões em PHP</title>
  </head>
  <body>
   <?php
    session_start();
    $_SESSION['nome'] = 'registrado';

    echo '<a href="verificar.php">Verificar</a>';
   ?>
  </body>
 </html>
