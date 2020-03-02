<!DOCTYPE html>
<html lang="pt_BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bhaskara</title>
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
   #form{
     color: white;
     width: 400px;
     height: 159px;
     left: 45%;
     margin: -130px 0 0 -120px;
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
     color: white;
   }
  </style>
</head>
<?php
 if(isset($_POST["a"]) and isset($_POST["b"]) and isset($_POST["c"])){
   $a = $_POST["a"];
   $b = $_POST["b"];
   $c = $_POST["c"];

   $delta = ($b * $b) - ((4 * $a)* $c);
   echo "o delta é: ". $delta;

   $x1 = (-$b + sqrt($delta)) / (2 * $a);
   $x2 = (-$b - sqrt($delta)) / (2 * $a);

   echo "o x1 é: ". $x1;
   echo "o x2 é: ". $x2;
 }
 else{
   echo "";
 }
?>
<body>
<div class="form" id="form">
 <form method="post" action="">
  <input type="text" name="a" placeholder="A"><br>
  <input type="text" name="b" placeholder="B"><br>
  <input type="text" name="c" placeholder="C"><br>
  <input type="submit" value="enviar">
 </form>
 </form>
</body> 
</html>