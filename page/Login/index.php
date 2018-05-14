<?php
      session_start();
      if($_SESSION["EPemilik"]==NULL){
          header('Location: php/login.php');
      }
      else{
           header('Location: ../Dashboard/');
      }

?>
