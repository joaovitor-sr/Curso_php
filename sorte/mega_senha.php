<!DOCTYPE html>
 <html>
  <head>
   <meta charset="utf8">
   <title>sorteios</title>
  </head>
  <body>
  teste a sorte aqui em baixo<br><br>
    <?php
  //mega senha PHP no navegador
   if(isset($_POST["num"])and $_POST["num"] >= 1000 and $_POST["num"] <= 9999){
       $num1 = $_POST["num"];
       
       $apos = rand(1000, 9999);

       if($num1 == $apos){
           echo "parabens voce <h1>ganhou</h1> o premio <br>";
       }
       elseif($num1 != $apos){
           echo "que pena voce errou<br> ";
       }
   }
   elseif($_POST["num"] < 1000){
       echo "esse valor é muito pequeno <br>";
       echo "escreva um numero de 1000 a 9999";
   }
   elseif($_POST["num"] > 9999){
       echo "esse valor é muito grande<br>";
       echo "escreva um numero de 1000 a 9999";
   }
  ?>
  
   <form method="post">
    seu numero<input type="text" min="1000" max="9999" name="num"><br>
    <input type="submit" value="enviar">
   </form>
  </body>
 </html>  
