<?php
 //elefante colorido no cmd

 $x = rand(1,11);

 $seu = rand(1,11);
 $meu = rand(1,11);
 $nosso = rand(1,11);

  if($meu == 1){
      echo "camisa: azul \n";
  }
  elseif($meu == 2){
      echo "Camisa: Verde \n";
  }
  elseif($meu == 3){
      echo "camisa: Amarelo \n";
  }
  elseif($meu == 4){
      echo "camisa: Roxo \n";
  }
  elseif($meu == 5){
      echo "camisa: Rosa \n";
  }
  elseif($meu == 6){
      echo "camisa: Vermelho \n";
  }
  elseif($meu == 7){
      echo "camisa: Laranja \n";
  }
  elseif($meu == 8){
      echo "camisa: Marrom \n";
  }
  elseif($meu == 9){
      echo "camisa: Cinza \n";
  }
  elseif($meu == 10){
      echo "camisa: preto \n";
  }
  elseif($meu == 11){
      echo "camisa: Branca \n";
  }

  if($seu == 1){
      echo "calça: Azul\n";
  }
  elseif($seu == 2){
      echo "calça: verde \n";
  }
  elseif($seu == 3){
      echo "calça: Amarelo \n";
  }
  elseif($seu == 4){
      echo "calça: Roxo\n";
  }
  elseif($seu == 5){
      echo "calça: Rosa \n";
  }
  elseif($seu == 6){
      echo "calça: Vermelho \n";
  }
  elseif($seu == 7){
      echo "calça: laranja \n";
  }
  elseif($seu == 8){
      echo "calça: Marrom \n";
  }
  elseif($seu == 9){
      echo "calça: cinza \n";
  }
  elseif($seu == 10){
      echo "calça: branco \n";
  }
  elseif($seu == 11){
      echo "calça: preto \n";
 }


 if($nosso == 1){
     echo "meia: Azul \n";
 }
 elseif($nosso == 2){
     echo "meia: verde \n";
 }
 elseif($nosso == 3){
     echo "meia: amarelo \n";
 }
 elseif($nosso == 4){
     echo "meia: Roxo \n";
 }
 elseif($nosso == 5){
     echo "meia: Rosa \n";
 }
 elseif($nosso == 6){
     echo "meia: Vermelho \n";
 }
 elseif($nosso == 7){
     echo "meia: laranja \n";
 }
 elseif($nosso == 8){
     echo "meia: marrom \n ";
 }
 elseif($nosso == 9){
     echo "meia: cinza \n";
 }
 elseif($nosso == 10){
     echo "meia: branco \n";
 }
 elseif($nosso == 11){
     echo "meia: preto \n";
 }
  

 if($x == 1){
     echo "\n Azul \n ";
 }
 elseif($x == 2){
     echo "\n Verde \n";
 }
 elseif($x == 3){
     echo "\n Amarelo \n";
 }
 elseif($x == 4){
     echo "\n Roxo \n ";
 }
 elseif($x == 5){
     echo "\n Rosa \n ";
 }
 elseif($x == 6){
     echo "\n Vermelho \n ";
 }
 elseif($x == 7){
     echo "\n Laranja \n ";
 }
 elseif($x == 8){
     echo "\n Marrom \n";
 }
 elseif($x == 9){
     echo "\n cinza \n ";
 }
 elseif($x == 10){
     echo "\n Branco \n";
 }
 elseif($x == 11){
     echo "\n preto\n ";
 } 

 if($meu == $x or $seu == $x or $nosso == $x){
     echo "\n voce pode passar";
 }
 elseif($meu != $x and $seu != $x and $nosso != $x){
     echo "\n voce tera que correr";
 }
?>
