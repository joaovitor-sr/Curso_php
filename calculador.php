<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
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
     #form{
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
  if(isset($_POST["numero1"])){
      $num1 = $_POST["numero1"];
      $num2 = $_POST["numero2"];
      $opt = $_POST["opc"];

      switch($opt){
          case 1:
            $total = $num1 + $num2;
            echo "o resultado é: " . $total;
            break;

            case 2:
                $total = $num1 - $num2;
                echo "o resultado é: ". $total;
                break;

            case 3:
                $total = $num1 * $num2;
                echo "o resultado é: ". $total;
                break;

            case 4:
                $total = $num1 / $num2;
                echo "o resultado é: ". $total;
                break;

            case 5:
                $total = sqrt($num1);
                echo "o resultado é: ". $total;
                break;

            case 6:
                $total = pow($num1, $num2);
                echo "o resultado é: ". $total;
    }
  }
 ?>
    <div class="form" id="form">
     <form method="post">
      <input type="text" name="numero1" placeholder="numero-1"><br>
      <input type="text" name="numero2" placeholder="numero-2"><br>
      <select name="opc">
       <option value="">Selecione</option>
       <option value="1">Soma</option>
       <option value="2">Subtração</option>
       <option value="3">Multiplicação</option>
       <option value="4">Divisão</option>
       <option value="5">Raiz</option>
       <option value="6">Potencia</option>
      </select>
      <input type="submit" value="enviar">
     </form>
    </div>
</body>
</html>