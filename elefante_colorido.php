<!DOCTYPE html>
 <html>
  <head>
   <meta charset="utf8">
   <title>elefante colorido</title>

   <style>
       .elefante{
        align-text: ;
       }
   </style>
  </head>
  <body>
  <div id="elefante" class="elfante">Elefante Colorido</div>
  <?php 
  //elefante colorido no navegador
  $seu = rand(1,11);
  $meu = rand(1,11);
  $nosso = rand(1,11);

    if($seu == 1){
        echo "<div align=right>camisa :<font color=blue> azul</font> </div><br>";
    }
    elseif($seu == 2){
        echo "<div align=right>camisa :<font color=green> verde</font></div><br>";
    }
    elseif($seu == 3){
        echo "<div align=right>camisa: <font color=yellow>Amarelo</font></div><br>";
     }
    elseif($seu == 4){
        echo "<div align=right>camisa:<font color=#993399> Roxo</font></div><br>";
    }
    elseif($seu == 5){
        echo "<div align=right>camisa:<font color=#FF1493> Rosa</font> </div><br>";
    }
    elseif($seu == 6){
        echo "<div align=right>camisa: <font color=red>Vermelho</font></div><br>";
    }
    elseif($seu == 7){
        echo "<div align=right>camisa:<font color=orange> Laranja</font></div><br>";
    }
    elseif($seu == 8){
        echo "<div align=right>camisa:<font color=brow> Marrom</font></div><br>";
    }
    elseif($seu == 9){
        echo "<div align=right>camisa: <font color=#a9a9a9>Cinza</font></div><br>"; 
    }
    elseif($seu == 10){
        echo "<div align=right>camisa:<font color=#d3d3d3> branca</font></div><br>";
    }
    elseif($seu == 11){
        echo "<div align=right>camisa: preta</div><br>";
    }
    
    
        if($meu == 1){
        echo "<div alignt=right>calça:<font color=blue> azul</font></div><br>";
    }
    elseif($meu == 2){
        echo "<div align=right>calça:<font color=green> verde</font></div><br>";
    }
    elseif($meu == 3){
        echo "<div align=right>calça:<font color=yellow> amarelo</font></div><br>";
    }
    elseif($meu == 4){
        echo "<div align=right>calça:<font color=#993399> Roxo</font></div><br>";
    }
    elseif($meu == 5){
        echo "<div align=right>calça:<font color=#FF1493> Rosa</font></div><br>";
    }
    elseif($meu == 6){
        echo "<div align=right>calça:<font color=red> Vermelho</font></div><br>";
    }
    elseif($meu == 7){
        echo "<div align=right>calça:<font color=orange> Laranja</font></div><br>";
    }
    elseif($meu == 8){
        echo "<div align=right>calça:<font color=brow> Marrom</font></div><br>";
    }
    elseif($meu == 9){
        echo "<div align=right>calça:<font color=#a9a9a9> Cinza</font></div> <br>";
    }
    elseif($meu == 10){
        echo "<div align=right>calça:<font color=#d3d3d3> branca</font></div><br>";
    }
    elseif($meu == 11){
        echo "<div align=right>calça: Preta</div><br>";
    }

    if($nosso == 1){
        echo "<div align=right>meia:<font color=blue> Azul</font></div><br>";
    }
    elseif($nosso == 2){
        echo "<div align=right>meia:<font color=green> verde</font></div><br>";
    }
    elseif($nosso == 3){
        echo "<div align=right>meia:<font color=yellow> Amarela</font></div><br>";
    }
    elseif($nosso == 4){
        echo "<div align=right>meia:<font color=#993399> Roxa</font></div><br>";
    }
    elseif($nosso == 5){
        echo "<div align=right>meia:<font color=#FF1493> Rosa</font></div><br>";
    }
    elseif($nosso == 6){
        echo "<div align=right>meia:<font color=red> Vermelho</font></div><br>";
    }
    elseif($nosso == 7){
        echo "<div align=right>meia:<font color=orange> Laranja</font></div><br>";
    }
    elseif($nosso == 8){
        echo "<div align=right>meia:<font color=brow> Marrom</font></div><br>";
    }
    elseif($nosso == 9){
        echo "<div align=right>meia:<font color=#a9a9a9> Cinza</font></div><br>";
    }
    elseif($nosso == 10){
        echo "<div align=right>meia:<font color=#d3d3d3> Branca</font></div><br>";
    }
    elseif($nosso == 11){
        echo "<div align=right>meia: preta </div><br>";
    }

    
   if(isset($_POST["text"])){
       $x = $_POST["text"];

       switch($x){

        case 1:

        $cor = rand(1,11);

        if($cor == 1 ){
            echo "<h3><font color=blue>Azul</font></h3>";
            break;
        }
        elseif($cor == 2){
            echo "<h3><font color=green>Verde</font></h3>";
            break;
        }
        elseif($cor == 3){
            echo "<h3><font color=yellow>Amarelo</font></h3>";
            break;
        }
        elseif($cor == 4){
            echo "<h3><font color=#993399>Roxo</font></h3>";
            break;
        }
        elseif($cor == 5){
            echo "<h3><font color=#FF1493>Rosa</font></h3>";
            break; 
        }
        elseif($cor == 6){
            echo "<h3><font color=red>Vermelho</font></h3>";
            break;
        }
        elseif($cor == 7){
            echo "<h3><font color=orange>Laranja</font></h3>";
            break;
        }
        elseif($cor == 8){
            echo "<h3><font color=brow>Marrom</font></h3>";
            break;

        }
        elseif($cor == 9){
            echo "<h3><font color=#a9a9a9>Cinza</font></h3>";
            break;
        }
        elseif($cor == 10){
            echo "<h3><font color=#d3d3d3>Branco</font></h3>";
            break;
        }
        elseif($cor == 11){
            echo "<h3>Preto</h3>";
            break;
        }

        break;

      
        case 2:
            echo "ok";
            break;
    }

    if($meu == $cor or $nosso == $cor or $seu == $cor){
        echo "<br><br><h4>voce passa direto</h4>";
    }
    elseif($meu != $cor and $nosso != $cor and $seu != $cor){
        echo "<br><br><h4>voce tera que correr</h4>";
    }

   }
  ?>
  
   <form method="post">
    <select name="text">
     <option value="1">que cor?</option>
     <option value="2">parar</option>
    </select>
    <input type="submit" value="enviar">
   </form>
  </body>
 </html> 