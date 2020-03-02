<!DOCTYPE html>
 <html lang="pt_br"> 
  <head>
   <meta charset="UTF-8">
   <title>Usuario 2.0</title>
   <style>
    input[type="text"]{
        height: 35px;
        width: 90%;
        text-align: center;
    }
    input[type="password"]{
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
        width: 350px;
        height: 140px;
        left: 50%;
        margin: -130px 0 0 -160px;
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
  <body>
  <?php
 if(isset($_POST["usuario"])){
     $nick = $_POST["usuario"];
     $senha = $_POST["senha"];

     if($nick = "João" and $senha = "j21042005"){
     }
     
 }
  ?>
  <div class="form" id="form">
   <form method="post" action="C:\xampp\htdocs\quiz\lin\user.php">
   <input type="text" name="usuario"><br>
   <input type="password" name="senha"><br>
   <input type="submit" value="enviar">
   </form>
   </div>
  </body>
 </html>