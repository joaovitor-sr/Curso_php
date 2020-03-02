<!DOCTYPE html>
 <html>
  <head>
   <meta charset="UTF-8">
   <title>especies de mamiferos</title>
   <style>
    .form{
        align-text: top;
        align-text: center;
        
    }
   </style>
  </head>
  <body>
  <?php
   if(isset($_POST["racas"])){
       $racas = $_POST["racas"];

       switch($racas){
           case 1:
            echo "<h2>Pinguin</h2><br>";
            echo "<br>o pinguim(<b>Pingüim</b>)é uma ave de familia <b>Spheninsciade</b>, caracteristica do hemisfério sul, em especial na<br>";
            echo "Antártida e ilhas dos mares austrais, chegando à Terra do Fogo, ilhas malvinas e África do sul, entre outros. Apesar da <br>";
            echo "maior diversidade de pinguins encontrar-se na Antártida e regiões polares, há também espécies que habitam nos trópicos <br>";
            echo "como por exempolo o pinguin-das-galápagos. A morfologia dos pinguins reflete várias adaptações à vida no meio aquático:<br>";
            echo "como por exemplo o pinguim-das-galápagos. A morfologia dos pinguins reflete várias adaptações à vida no meio aquático:<br>";
            echo "o corpo é fusiforme; as asas atrofiadas desempenham a função de barbatanas e a pele são é impermelizada através <br>";
            echo "da secreção de óleos. Os pinguins alimentam-se de pequenos peixes,krill e outras formasx de vida marinhak, sendo por sua <br>";
            echo "vez vítimas da predução de orcas e focas-leopardo.<br><br>";
            echo 'O nome "pinguin" vem de uma outra ave, que habitava as regiões do Ártico e que foi extinta pela ação do homem, o arau-';
            echo "<br>gigante(<b>Pinguinus impennis). quando os exploradores europeus descobriram no hemisfério sul as aves conhecidas <br>";
            echo "hoje como pinguins, eles notaram a aparência muito similar ao arau-gigante, ou mesmo se confundidndo com as araus, e as <br>";
            echo "batizaram com esse nome,que persiste até atualidade.Apesar de parecidos, araus e pinguins não têm nenhum<br>";
            echo "parentesco próximo. O termo pinguim é originário do galês pen gwyn, o antigo nome popular dos araus-gigantes nas ilhas<br>";
            echo "Britânicas.<br>";
            echo "<br>Os primeiros pinguins apareceram no registro geológico do Eocénico. Os pinguins constituem a família Sphenischidade e a <br>";
            echo "ordem Sphenisciformes (de acordo com a taxonomia de Sibley-ahiquist, fariam parte da ordem Ciconiformes). É uma ave <br>";
            echo "marinha e nadadora, chegando a noadar com uma velocidade de 45km/h, passando a maior parte do tempo na água.";
            break;

         case 2:
            echo "<h2>Leão</h2><br>";
            echo "<br>O leão (nome cientifico panthera leo) é uma espécie de mamifero carnivoro do gênero panthera e <br>";
            echo "da familia felidae. A especie é atualmente encontrada na África subsariana e na ásia, com uma única população <br>";
            echo "remanescente em perigo, no parquenacional da floresta de Gir, guarat, india foi extinto na África do norte e no <br>";
            echo "sudoeste asiático em tempo históricos, e até o pleistoceno Superior, há cerca de 10 000 anos, era o mais difundido<br>";
            echo "grande mamifero terrestre depois dos humanos, sendo encontrado na maior parte da Áfica,em muito da Eurásia, da <br>";
            echo "Europa Ocidental à índia, e na América, do Yukon ao México. É uma dos quatro grandes felinos, com alguns machos <br>";;
            echo "excedendo 250 quilogramas em peso, sendo o segundo maior felino recente depois do tigre.";
            break;

         case 3:
            echo "<h2>Urso</h2><br>";
            echo "<br>os ursosos constituem em uma família de mamíferos plantígrados, da orde carnivora, geralmente <br>";
            echo "de grande porte, contendo os ursos e os pandas. Embora classificado como urso, e logo após, como procionídeo, junto<br>";
            echo "como o panda-vermelho, o panda-gigante foi recolocado dcentro da família dos ursídeos evido às novas pesquisas <br>";
            echo "genéticas. Algumas caractérisitcas comuns dos ursos são pelagem espessa, rabo curto, o olfato desenvolvida e as garras <br>";
            echo "não retráteis. Os ursídeos são geralmente animais omnivoros<br>";
            echo "<br>As espécies mais antigas e primitivas desta família estão reunidas no gênero Ballusia, do mioceno inferior, que ainda <br>";
            echo "retêm caracterísitcas similares aos hemicyonidae. Do Baullusia descendente o gênero ursavus, fonte dos ursíneos, e talvez o <br>";
            echo "agriarctos, ancestral dos agrioteríneos. <br>";
            break;
            
            
     }
   }
  ?>
   <div id="form"class="form"><form method="post">
    <select name="racas">
     <option value="">Selecione</option>
     <option value="1">Pinguin</option>
     <option value="2">Leão</option>
     <option value="3">Urso</option>
    </select><br>
    <input type="submit" value="enviar">
   </form>
   </div> 
   
  </body>
 </html>

