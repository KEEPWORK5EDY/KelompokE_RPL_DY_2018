<?php
      session_start();
      if($_SESSION["EPemilik"]==NULL){
          header('Location: ../Login');
      }
      else{
           header('Location: php/dashboard.php');
      }
?>
