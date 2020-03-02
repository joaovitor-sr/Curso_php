<!DOCTYPE html> 
 <html>
  <head>
   <meta charset="utf8">
   <title>raspadinha php</title>
  </head>
  <body>
      <?php
       if(isset($_POST["nom"])){
           $res = $_POST["nom"];
            $raspadinha = rand(1,100);

            if($res <= 100){
            if($res == $raspadinha){
                echo "parabens voce ganhou";
            }
            elseif
            ($res != $raspadinha){
              echo "que pena voce perdeu";
            }
        }
        elseif($res > 100){
            echo "o limite foi execiddio o limite de numeros é 100";
        }
       }
      ?>
   <form method="post">
    <input type="text" name="nom">
    <input type="submit" value="enviar">
   </form>    
  </body>
 </html>
