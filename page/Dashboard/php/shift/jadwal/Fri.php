<?php
     include "../../../../../php/connection.php";

     $shift=sprintf("SELECT * FROM shift WHERE id_usaha=(SELECT id_usaha FROM usaha WHERE email='%s') AND hari='Fri'",$_SESSION["EPemilik"]);
     //echo $shift;
     $queryShift = mysqli_query($link,$shift);

     if(mysqli_num_rows($queryShift)>0){
          while($jadwalShift = mysqli_fetch_array($queryShift)){
               $id_shift=(string)$jadwalShift["id_shift"];

               echo '<div id="'.$id_shift.'">
                        <div>isi dari event abs circuit zik "'.$id_shift.'" "'.$jadwalShift["nama_shift"].'"</div>
                    </div>';
          }
     }
 ?>
