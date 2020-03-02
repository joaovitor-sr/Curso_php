<!DOCTYPE html> 
 <html> 
  <head>
   <meta charset="UTF-8">
   <title>medicina facil</title>
  </head>
  <body>
    <?php
     if(isset($_POST["doencas"])){
         $doenca = $_POST["doencas"];

         switch($doenca){
             case 1:
                echo "<h2>Gripe comum</h2><br>";
                echo "<br>A<b> Gripe comum</b> é uma doença infecciosa aguda, causada pelo vírus influenza, subdividido em 3<br>";
                echo "tipos: A, B, C, porém, apenas os tipos A e B têm relevância clínica em humanos. O vírus influenza <br>";
                echo "apresenta altas taxas de mutação e o vírus influenza A, que infecta aves e se adapta ocasionalmente <br>";
                echo "aos humanos, apresenta maior variabilidade e possui subtipos como H1N1, H2N2, e H3N3 que são <br>";
                echo "associados com maiores complicações. <br>";
                echo "<br>Os surtos de gripe são mais frequentes no inverno, mas diferente do que muitos pensam não é por <br>";
                echo "causa do tempo frio e sim devido aos ambientes ficarem fechados e as pessoas mais próximas, o que";
                echo "facilita a disseminação do vírus. A gripe costuma ser confundida com outras doenças, principalmente <br>";
                echo "com o resfriado. Apesar de serem patologias semelhantes, são causadas por agentes etiológicos <br>";
                echo "diferentes, sendo o Rinovírus o mais comum n ocaso dos resfriados, que atinge as vias respiratórias <br>";
                echo "altas e se manifesta de forma mais leve, com febre mais baixa, menos mal-estar, menos tosse e mais <br>";
                echo "secreção no nariz, que resulta em mais espirros. A gripe, por sua vez, se apresenta de forma bem <br>";
                echo "mais agressiva e costuma deixar o indivíduo infectado debilitado por alguns dias. Em geral, pegamos <br>";
                echo "bem mais resfriados do que gripe.<br>";
                echo "<br><h2><b>Transmissão do vírus</h2></b><br>";
                echo "A transmissão do vírus a gripe ocorre de pessoa para pessoa através de partículas infectadas<br>";
                echo "eliminadas através da tosse ou espirro, mas também pode ocorrer através da contaminação de <br>";
                echo "superfícies por via respiratoria. Geralmente ocorre a inalação partículas de secreção infectadas em <br>";
                echo "suspensão no ar. A tosse é o meio mais comum de eliminar gotículas contaminadas, pois o vírus <br>";
                echo "atinge a traqueia.<br>";
                echo "<br><b><h2>Sintomas<h2></b><br>";
                echo "Os sintomas levam em méida entre 3 e 4 dias para se manifestarem. Os sintomas clássicos incluem <br>";
                echo "febre alta, muitatosse, dor de garganta e fortes dores no corpo, fadiga, calafrios e congestão nasal.<br>";
                echo "O vírus se espalha pelas vias respiratórias, incluindo os pulmõese pode atingir a corrente sanguínea <br>";
                echo "e se espalhar para outros órgãos. Em idosos a gripe pode causar problemas mais graves como <br>";
                echo "pneumonia e evoluir para óbito <br>";
                echo "<br><h2><b>Diagnóstico</b></h2><br>";
                echo "em geral, o diagnostico é apenas clínico,s em a utilização de exames laboratoriais. São analisados os <br>";
                echo "principais sintomas como a febre, dores no corpo e os problemas respiratórios. <br>";
                echo "<br><h2><b>Tratamento</h2></b><br>";
                echo "Na grande maioria dos casos, o tratamento é apenas para aliviar os sintomas e são receitados <br>";
                echo "analgésicos e antitérmicos, para as dores e controle da febre,repouso e hidratação. <br>";
                echo "<br><h2><b>Prevenção</h2></b><br>";
                echo "A principal forma de prevenção da doença é atraves da vacinação anual. No Brasil o calendario de <br>";
                echo "vacinação costuma ter início no mês de abril e tem como público alvo pessoas com 60 anos ou mais, <br>";
                echo "gestantes, mulheres no período de até 45 dias após o parto, crianças entreseis meses e cinco anos <br>";
                echo "de idade, profissionais de saúde e indivíduos imunocompremetidos, que fazem parte do grupo de <br>";
                echo "risco par a as complicações ocasionadas pela gripe. O vírus costuma ser discretamente diferente a <br>";
                echo "cada gripe, por isso pde-se dizer que cada vez que uma pesosa fica gripada é uma gripe diferente. <br>";
                echo "Outro ponto importante par aprevenir a disseminação da doença é a questão da higiene,<br>";
                echo "recomendado a utilização de lenços de papel toda vez ue for tossir ou espirrar e lavar bem as mãos. <br>";
                echo "<br>Vale ressaltar que a vacina contra a gripe não protege contra o resfiado. Como foi dito<br>";
                echo "anteriormentem, são vírus diferentes que causam as doenças.";
                break;

             case 2:
                echo "<b><h1>Resfriado</h1></b><br>";
                break; 
         }
     }
    ?>
   <form method="post">
    <select name="doencas">
     <option value="">Selecionar</option>
     <option value="1">Gripe comum</option>
     <option value="2">Resfriado</option>
     <option value="3">Hemorroida</option>
    </select>
    <input type="submit" value="enviar">
   </form>
  </body>
 </html>