<?php
 $x = 1000;
$pos = rand(1000,9999);
 //mega senha PHP no cmd
if($x >= 1000 and $x <= 9999){
 if($x == $pos){
    echo "parabens voce ganhou";
 }
 elseif($x != $pos){
    echo "que pena voce perdeu";
 }
}
elseif($x < 1000){
    echo "esse valor é muito pequeno";
}

?>