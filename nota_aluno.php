<!DOCTYPE html>
 <html>
  <head>
   <meta charset="utf-8">
   <title>nota do aluno</title>
   <style>
   input[type="text"]{
       height: 35px;
       width: 90%;
       text-align: center;
   }
   input[type="submit"]{
       height: 40px;
       width: 91%;
       text-align: center;
   }
   div{
       width: 100px;
       height: 100px;
       border-width: 2px;
       border-color: black;
       border-style: solid;
       display: inline-block;
       color: white;

    
    
   }
    .form{
        color: white;
        width: 400px;
        height: 150px;
        left: 50%;
        margin: -130px 0 0 -120px;
        padding: 10px;
        position: absolute;
        top: 50%;
        border-radius: 20px;
    }

   </style>
  </head>
  <body>
  <?php
   if(isset($_POST["nota1"])){
       $nota1 = $_POST["nota1"];
       $nota2 = $_POST["nota2"];
       $total = $nota1 + $nota2;
    

       if($total >= 70 and $total < 100){
           echo "voce esta aprovado sua nota da primeira prova foi de  : ". $nota1 ."<br>";
           echo "ja na segunda prova a nota foi de ". $nota2;
       }    
       elseif($total >= 60 and $total < 70){
           
           echo" voce esta aprovado mais sua nota foi baixa recomendado estudar mais a nota da sua primeira prova foi de : ". $nota1 ."<br>";
           echo "ja a nota da segunda prova foi de ". $nota2;
       }
       elseif($total < 60){
           echo "voce esta reprovado a nota da sua primeira prova foi de : ". $nota1 ."<br>";
           echo "ja a nota da s ua primeira prova foi de ". $nota2;
       }       
       elseif($total == 100){
           echo "parabens voce tirou : 100 a nota da sua primeira prova foi de :".$nota1 ."<br>";
           echo "e a nota da sua segunda prova foi de ". $nota2;
    }
    }  
  ?>
   <div id="form" class="form"><form method="post">
    <input type="text"  name="nota1" placeholder="1° nota"><br>
    <input type="text"  name="nota2" placeholder="2° nota"><br>
    <input type="submit"  value="enviar" size="40%">
   </form>
   </div>
  </body>
 </html>  