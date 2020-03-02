<!DOCTYPE html>
 <html>
  <head>
   <meta charset="utf-8">
   <title>Receita para todos</title>
  </head>
  <body>
  <?php
    if(isset($_POST["receitas"])){
        $receita = $_POST["receitas"];

        switch($receita){

          case 1:
            echo "<h2>Ingredientes cassata</h2><br>";
            echo "<br><ol>";
            echo "<li>3 CLARAS<BR><li>3 GEMAS <li>Uma pitada de SAL";
            echo "<li>1/2 colher de sopa de AMIDO DE MILHO <li>1 lata de LEITE CONDENSADO<li>";
            echo "2 mediadas da lata de leite condensado de leite integral<li>5 colheres de sopa de AÇÚCAR<li>";
            echo "1 lata de leite CREME sem soro";
            echo "</ol><br>";
            echo "<h2>ingreditentes calda</h2><br>";
            echo "<ul><li>4 colheres de sopa de achocolatado em pó";
            echo "<li>9 colheres de Agua sopa";
            echo "</ul>";
            break;
        }
       }
  ?>
   <form method="post">
    <select name="receitas">
     <option value="1">pudim de sorvete</option>
     <option value="2">pave de chocolate</option>
     <option value="3">sorvete de frutas</option>
     <option value="4">macarron</option>
    </select>
    <input type="submit" value="enviar">
   </form>
  </body>
 </html>  