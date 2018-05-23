<?php
include "../../../php/connection.php";

      /*$syntax = sprintf("SELECT id_usaha, nama_usaha FROM usaha WHERE email='%s'",$_SESSION["EPemilik"]);
      $id_usaha  = mysqli_query($link,$syntax);

      $syntax = sprintf("SELECT id_pegawai, nama FROM pegawai WHERE id_usaha='%s'",$id_usaha);
      $query = mysqli_query($link,$syntax);*/

      $syntax= sprintf("SELECT * FROM pegawai WHERE id_usaha = (SELECT id_usaha FROM usaha WHERE email='%s')",$_SESSION["EPemilik"]);
      $query = mysqli_query($link,$syntax);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">


<head>
  <!--Bootstrap core CSS-->
  <link href="../assets/css/bootstrap.css" rel="stylesheet">
  <!--external css-->
  <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />


  <!-- Custom styles for this template -->
  <link href="../assets/css/style.css" rel="stylesheet">
  <link href="../assets/css/style-responsive.css" rel="stylesheet">
  <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../assets/js/jquery-1.8.3.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../assets/css/daftar_karyawan.css">
  <script src="https://code.jquery.com/jquery-3.0.0.js"></script>
  <script src="https://code.jquery.com/jquery-migrate-3.0.1.js"></script>
  <script src="../../../js/loadPage.js" type="text/javascript"></script>
</head>
<body>
          <div class="col-lg-12  main-chart">
              <!-- /row mt -->
              <div id=page>
                <section id="main-content">
                    <section class="wrapper site-min-height">
                      <h3><i class="fa fa-angle-right"></i> List of Employees</h3><br>
                       <div class="container">
                        <?php if(mysqli_num_rows($query)>0){ ?>
                            <?php
                                $no = "tes12";$angka=1;$tes="";
                                while($data = mysqli_fetch_array($query)){?>
                                <div class="col-sm-4">
                                      <div class="panel panel-primary">
                                        <div class=" panel-heading">

                                           <div name"tes" class="text-row"><div class="text-name"><?php echo $data["id_pegawai"]; ?></div></div>
                                             <div class="icon-row">

                                                   <?php echo '<button type="button" class="btn btn-info btn-edit fa fa-pencil" data-toggle="modal" data-target="#data'.$data['id_pegawai'].'"></button>';
                                                         echo '<div id="data'.$data['id_pegawai'].'" class="modal fade" role="dialog">';

                                                                 echo'<div id="edit" class="modal-dialog">';

                                                                   echo'<div class="modal-content">';
                                                                          echo'<div class="modal-header">';
                                                                                echo'<button type="button" class="close" data-dismiss="modal">&times;</button>';
                                                                                echo'<h4 class="modal-title">'.$data["nama"].'</h4>';
                                                                           echo'</div>';

                                                                           echo'<div class="modal-body">';
                                                                                echo '<div class="img-rounded">';
                                                                                     echo  '<img src="../src/download.png" alt="" class="img-responsive center-block">';
                                                                                echo '</div>';

                                                                                echo'<div id="edit'.$data['id_pegawai'].'">
                                                                                               <div class="form-group row">
                                                                                                    <label for="inputEmail3" class="col-sm-2 col-form-label" style="margin-top: 1.4%;">Id Pegawai </label>
                                                                                                         <div class="col-sm-10">
                                                                                                              <input type="text" class="form-control id_kw" placeholder="Id" value='.$data["id_pegawai"].'>
                                                                                                         </div>
                                                                                               </div>
                                                                                               <div class="form-group row">
                                                                                                    <label for="inputPassword3" class="col-sm-2 col-form-label" style="margin-top: 1.4%;">Nama</label>
                                                                                                         <div class="col-sm-10">
                                                                                                              <input type="text" class="form-control name_kw" placeholder="Nama" value='.$data["nama"].'>
                                                                                                         </div>
                                                                                               </div>
                                                                                               <div class="form-group row">
                                                                                                    <label for="inputPassword3" class="col-sm-2 col-form-label" style="margin-top: 1.4%;">Password</label>
                                                                                                         <div class="col-sm-10">
                                                                                                              <input type="text" class="form-control pass_kw" placeholder="Password" value='.$data["password"].'>
                                                                                                         </div>
                                                                                               </div>';?>
                                                                                               <div class="button-container">
                                                                                                    <?php  echo '<button id="btn'.$data["id_pegawai"].'" type="submit" class="inp btn btn-default edit" data-dismiss="">Save</button>';
                                                                                                    ?>
                                                                                               </div>
                                                                                <?php echo '</div>';
                                                                           echo'</div>';

                                                                 echo'</div>';
                                                                 echo'</div>';
                                                              echo'</div>';


                                               echo'</div>';
                                            echo'</div>';?>
                                        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
                                        <div class="centered panel-footer"><?php echo $data["nama"];?></div>
                                     </div>
                                 </div>
                          <?php  } ?>
                      <?php } ?>
                    </div>


                    <div>
                         <button type="button" class="float pull-right btn btn-info btn-edit fa fa-plus" data-toggle="modal" data-target="#tes"></button>
                    </div>
                    <!-- Modal -->
                     <div id="tes" class="modal fade" role="dialog">
                       <div class="modal-dialog" >
                         <!-- Modal content-->
                         <div class="modal-content">
                           <div class="modal-header">
                             <button type="button" class="close" data-dismiss="modal">&times;</button>
                             <h4 class="modal-title">Add Employees</h4>
                           </div>
                           <div class="modal-body" style="padding-top: 0;padding-bottom: 0;">
                             <div class="img-rounded">
                               <img src="../src/download.png" alt="" class="img-responsive center-block">
                             </div>


                             <form action="dataP.php" method=post>

                                       <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label" style="margin-top: 1.4%;">Id Pegawai </label>
                                                 <div class="col-sm-10">
                                                      <input type="text" name=id_pegawai class="form-control">
                                                 </div>
                                       </div>
                                       <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-2 col-form-label" style="margin-top: 1.4%;">Nama</label>
                                                 <div class="col-sm-10">
                                                      <input type="text" name=nama class="form-control">
                                                 </div>
                                       </div>
                                       <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-2 col-form-label" style="margin-top: 1.4%;">Password</label>
                                                 <div class="col-sm-10">
                                                      <input type="text" name=password class="form-control">
                                                 </div>
                                       </div>
                                            <div class="modal-footer">
                                                 <button type="submit" name="submit" class="btn btn-default" onclick="" data-dismiss="">Save</button>
                                                 <button type="submit" name="submit" class="btn btn-default" data-dismiss="modal">close</button>
                                           </div>

                             </form>

                         </div>
                       </div>
                     </div>
                </div>

                          <!-- Modal end -->
             </section><!--/wrapper -->
           </section><!-- /MAIN CONTENT -->
         </div>
     </div>
     <!-- js placed at the end of the document so the pages load faster -->
     <script src="../assets/js/jquery.js"></script>
     <script src="../assets/js/jquery-1.8.3.min.js"></script>
     <script src="../assets/js/bootstrap.min.js"></script>
     <script class="include" type="text/javascript" src="../assets/js/jquery.dcjqaccordion.2.7.js"></script>
     <script src="../assets/js/jquery.scrollTo.min.js"></script>
     <script src="../assets/js/jquery.nicescroll.js" type="text/javascript"></script>
     <script src="../assets/js/jquery.sparkline.js"></script>

     <?php
          $syntaxJs= sprintf("SELECT * FROM pegawai WHERE id_usaha = (SELECT id_usaha FROM usaha WHERE email='%s')",$_SESSION["EPemilik"]);
          $queryJs= mysqli_query($link,$syntaxJs);


           if(mysqli_num_rows($queryJs)>0){ ?>
                <script>
                    $(document).ready(function(){

                          <?php
                            while($dataJs= mysqli_fetch_array($queryJs)){?>

                                        $("<?php echo "#btn".$dataJs['id_pegawai'];?>").click(function() {
                                             //update(this.id); // or alert($(this).attr('id'));
                                             //alert(buttonVar); // or alert($(this).attr('id'));
                                             //var x = document.getElementById("<?php //echo "#btn".$dataJs["id_pegawai"];?>");//.getElementsByTagName("BUTTON").length;
                                             //document.getElementById("tes").setAttribute("data-dismiss","modal");
                                             //x.setAttribute("data-dismiss","modal");
                                             var x = $("<?php echo "#edit".$dataJs['id_pegawai'];?> .id_kw").val();
                                             var y = $("<?php echo "#edit".$dataJs['id_pegawai'];?> .name_kw").val();
                                             var z = $("<?php echo "#edit".$dataJs['id_pegawai'];?> .pass_kw").val();
                                             var btn = $("<?php echo "#edit".$dataJs['id_pegawai'];?> .edit");
                                             var tmp;
                                             <?php echo ' tmp ="'.$dataJs["id_pegawai"].'"';?>
                                             //var a = x+ y +z ;
                                             //alert(tmp);
                                             //update(x,y,z);

                                             $.ajax({    //create an ajax request to display.php
                        				        type: "POST",
                        				        url: "update.php",
                                                data:{
                                                     id:x,name:y,pass:z,id_temp:tmp
                                                },
                                                success: function(response){
                                                     $(document).ajaxStop(function(){
                                                           window.location.reload();
                                                       });
                    				        }
                                           });document.getElementById("<?php echo "btn".$dataJs['id_pegawai'];?>").setAttribute("data-dismiss","modal");
                                        });

                         <?php
                         }?>
                    });
               </script><?php
          }
      ?>
     <script>
          /*
          $(document).ready(function() {
               $("#keepwork-3").click(function(){
                  //alert("button");
                  //document.getElementById("keepwork-3").setAttribute("data-dismiss","modal");

               });
          });*/

          function insert(a,b,c){
                 window.location.href = "updateD.php?name="+a;
                 return 1;
          }

          function closeModal(r) {
               //var list = document.getElementsByTagName("button")[0];
               //svar x = document.getElementById(r).getElementsByTagName("button").length;
               //var x = document.getElementById(r).getElementsByClassName("id_kw")[0].value;
               //var y = document.getElementById(r).getElementsByClassName("name_kw")[0].value;
               //var z = document.getElementById(r).getElementsByClassName("pass_kw")[0].value;
               //sinsert(x,y,z);
               //alert(r);
               //document.getElementById(r).setAttribute("data-dismiss","modal");
               //var a = r+p+l;
               //alert(a);
          }
     </script>

</body>
</html>
