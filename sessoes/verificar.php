<?php
 session_start();

 if($_SESSION['nome'] == "logado"){
     echo "Você esta logado";
 }
 else{
     header ("Location:index.php");
 }
?>