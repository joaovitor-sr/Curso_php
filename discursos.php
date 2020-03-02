<!DOCTYPE html>
 <html> 
  <head>
   <meta charset="utf-8">
   <title>discursonojutsu</title>
  </head>
  <body>
  <?php
    if(isset($_POST)){
        $dis = $_POST["discursonojutsu"];

        switch($dias){
          case 1:
              echo "<h1>Naruto</h1><br>";
              echo "<br>O naruto pode ser um pouco duro às vezes, talvez voce não saiba disso mas o naruto<br>";
              echo "também cresceu sem pai. Na verdade ele nunca conheceu nenhum de seus pais <br>";
              echo "e nnca teve nenhum amigo em nossa aldeia. Mesmo assim eu nucna <br>";
              echo "vi ele corar, ficar zankgado ou se dar por vencido, ele está sempre disposto a <br>";
              echo "melhorar, ele quer ser respeitado, é o sonho dele e o naruto daria  a vida por isso<br>";
              echo "sem hesitar. Meu palpiteé que ele se cansou de chorar e decidiu fazer alguma <br>";
              echo "coisa a respeito!<br>";
              break;
              
          case 2:
              echo "<h1>One piece</h1><br>";
              echo "<br>não é você...o homem que Roger está esperando... pelo menos, teach... não é<br>";
              echo "você!Assim como existem aqueles que herdam a vontade de Roger... tenho <br>";
              echo "certeza que um dia alguém vai herdar a vontade do Ace. mesmo que vocês acabem <br>";
              echo "com  alinhagem dele, nã iohá como pagarem sua chama. Ela vem sendo passada<br>";
              echo "desde tempos antigos... ER no futuro... Algum dia..Alguém aparecerá, carregando<br>";
              echo "toda a hisória daquele temopo, em suas costas";
              break;

           case 3:
                echo "<h1>Dragon ball </h1><br>";
                echo "<br>Gohan vê se você me escuta,não é pecado lutar pela justiça ao contrario é uma <br>";
                echo "boa ação, existe inimigos que não são convencidos com palavarsas, voce so tem que<br>";
                echo "soltar a furia que esta deentro do seu espirito, eu sei como voce se sente não precisa<br>";
                echo "mais suporta isso gohan <br>";
                echo "Gohan proteja os seres vivos e as plantas desse mundo que eu tanto amei, conto<br>";
                echo "com voce <br>";
                echo "quer ver em portugês? <a href=>SIM</a href>";
                break;

           case 4:   
                echo "<h1>Boku no hero academmai</h1><br>";
                echo "Se sentir que chegou ao seu limite, lembre-se do motivo pelo qual você<br>";
                echo "cerra os punhos, lembre-se porque resolveu trilhar este caminho e <br>";
                echo "permita que essa memória o carrege além de seus limites.<br>";
                break;

           case 5:   
                echo "<h1>attack on tita</h1><br>";  
                echo "Ficar e esperar só quer dizer que <br> seremos alvejados por mais pedras.<br>";
                echo "se preparem de uma vez!<br>";
                echo "nada faz sentido.<br>Não importa os sonhos e <br> esperanças que tinham...<br>";              
                echo "Não importa o quanto a <br> vida de vocês é abençoada... <br> ";
                echo "Será tudo igual quando <br> forem esmagados por rochas...<br>";
                echo "Todos morrerão um dia.<br>";
                echo "Quer dizer que a vida não tem sentido?";
                echo "Teve algum sentido em termos nascido?<br>";
                echo "O que vocês diriam dos nossos<br>companheiros que morreram?<br>";
                echo "As vidas deles não tinham sentido?<br>Não, tinham!<br>";
                echo "Somos nós que damos significado <br> às vidas dos nossos companheros!<br>";
                echo "Aqueles corajosos caídos! Aflitos e caídos!<br>";
                echo "Aqueles que se lembrarão <br>deles somos nós... Os vivos!<br>";
                echo "Morreremos aqui, e deixamos para os <br> que <br> ficarem encontrar significado nas <br>";
                echo "nossas vidas!<br>Esse é o unico método que temos para<br>";
                echo "nos rebelar contra esse mundo cruel!<br> Soldados, fúria!<br>";
                break;
    }
    }
  ?>
   <form method="post">
    <select name="discursonojutsu">
     <option value="1">naruto</option>
     <option value="2">One piece(barba branca)</option>
     <option value="3">Dragon ball (android)</option>
     <option value="4">Boku no hero academia</option> 
     <option value="5">attack on titan</option>
    </select>
    <input type="submit" vlaue="enviar">
   </forn>
  </body>
</html> 