<!DOCTYPE html>
 <html>
   <head>
     <meta charset="UTF-8">
     <title>letras japonesas vesão completa</title>
     <style>

     #appearence-select{
         -webkit-appearance: none;
         appearance: none;
         background: url(https://www.webcis.com.br/images/imagens-noticias/select/ico-seta-appearance.gif) no-repeat #eeeeee;
         background-position: 218px center;
         width: 250px;
         height: 30px;
         border: 1px solid #ddd;

     }
     input[type="submit"]{
       background-color: !important;
       border: 1px solid transparent; 
     }
     .opt{
       color: white;
       width: 400px;
       height: 150px;
       left: 50%;
       margin: -130px 0 0 -210;
       padding: 10px;
       position: absolute;
       top: 50%;
       border-radius: 20px;
     }
     div{
       width: 100px;
       height: 100px;
       border-width: 2px;
       border-color: black;
       border-style: solid;
       display: inline-block;
       color : white;
     }
     </style>
   </head>
   <body>
     <?php
     if(isset($_POST["opt"])){
       $opt = $_POST["opt"];

       switch($opt){
         case 1:
          header("Location:http://localhost/quiz/linkjapon/letra_one_punch_1.html");
          break;

          case 2:
            header("location:http://localhost/quiz/linkjapon/letra_one_punch_2.html");
            break;

          case 3:
            header("location:http://localhost/quiz/linkjapon/letra_dr_stone_1.html");
            break;

          case 4:
            header("location:http://localhost/quiz/linkjapon/letra_dr_stone_2.html");
            break;
       }
     }k
     ?>
     <div class="opt" id="opt"><form method="post">
      <select id="appearence-select" name="opt">
         <option value="">Selecione</option>
         <option value="1">One punch man OP1</option>
         <option value="2">One punch man OP2</option>
         <option value="3">Dr stone OP1</option>
         <option value="4">Dr stone OP2</option>
       </select><br>
       <input type="submit" value="enviar">
     </form>
     </div>
   </body>
 </html>
    