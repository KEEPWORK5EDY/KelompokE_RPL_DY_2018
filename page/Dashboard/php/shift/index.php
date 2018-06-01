<?php
     include "../../../../php/connection.php";

 ?>
<head>
     <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600" rel="stylesheet">
     <script src="https://code.jquery.com/jquery-3.0.0.js"></script>
     <script src="https://code.jquery.com/jquery-migrate-3.0.1.js"></script>
     <link href="../../assets/css/style.css" rel="stylesheet">
     <link href="../../assets/css/style-responsive.css" rel="stylesheet">
     <link href="../../assets/css/bootstrap.css" rel="stylesheet">
     <script src="../../assets/js/jquery.js"></script>
     <script src="../../assets/js/jquery-1.8.3.min.js"></script>
     <script src="../../assets/js/bootstrap.min.js"></script>
     <link rel="stylesheet" type="text/css" href="../../../assets/css/tampilan.css">
     <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
     <link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="css/drag&drop.css"> <!-- Resource style -->
     <link rel="stylesheet" href="css/jadwal.css"> <!-- Resource style -->
     <link rel="stylesheet" href="css/slidebar.css"> <!-- Resource style -->


     <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600" rel="stylesheet">
     <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
     <link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
     <link rel="stylesheet" href="css/jadwal.css"> <!-- Resource style -->
     <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
     <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
     <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
     <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
     <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
     <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
     <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
     <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
     <link rel="stylesheet" type="text/css" href="css/util.css">
     <link rel="stylesheet" type="text/css" href="css/main.css">

</head>

          <div class="col-lg-12  main-chart">
              <!-- /row mt -->
              <div id=page>
                <section id="main-content">
                    <section class="wrapper site-min-height">
                         <div class="cd-schedule loading">
                        	<div class="timeline">
                        		<ul>
                                   <li><span>07:00</span></li>
                                   <li><span>07:30</span></li>
                                   <li><span>08:00</span></li>
                                   <li><span>08:30</span></li>
                                   <li><span>09:00</span></li>
                                   <li><span>09:30</span></li>
                                   <li><span>10:00</span></li>
                                   <li><span>10:30</span></li>
                                   <li><span>11:00</span></li>
                                   <li><span>11:30</span></li>
                                   <li><span>12:00</span></li>
                                   <li><span>12:30</span></li>
                                   <li><span>13:00</span></li>
                                   <li><span>13:30</span></li>
                                   <li><span>14:00</span></li>
                                   <li><span>14:30</span></li>
                                   <li><span>15:00</span></li>
                                   <li><span>15:30</span></li>
                                   <li><span>16:00</span></li>
                                   <li><span>16:30</span></li>
                                   <li><span>17:00</span></li>
                                   <li><span>17:30</span></li>
                                   <li><span>18:00</span></li>
                        		</ul>

                        	</div> <!-- .timeline -->


                        	<div class="events">
                        		<ul>
                                   <?php
                                        $day=array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday");
                                        for($a=0;$a<7;$a++){
                                   ?>
                        			<li class="events-group">
                        				<?php echo'<div class="top-info"><span>'.$day[$a].'</span></div>';?>

                        				<ul>
                        					<?php
                                                  $shift=sprintf("SELECT * FROM shift WHERE hari='%s' AND id_usaha=(SELECT id_usaha FROM usaha WHERE email='%s')",$day[$a],$_SESSION["EPemilik"]);
                                                  //echo $shift;
                                                  $queryShift = mysqli_query($link,$shift);
                                                  $eventNum=1;
                                                  if(mysqli_num_rows($queryShift)>0){
                                                       while($data = mysqli_fetch_array($queryShift)){
                                                            $id_shift="jadwal/";
                                                            $id_shift.=(string)$data["hari"];
                                                            $id_shift.='.php#';
                                                            $id_shift.=(string)$data["id_shift"];
                                                            $event="event-";
                                                            if($eventNum==5){
                                                                 $eventNum=1;
                                                            }
                                                            $event.=(string)($eventNum++);
                                                            echo '<li class="single-event" data-start="'.$data["jam_mulai"].'" data-end="'.$data["jam_akhir"].'"  data-content="'.$id_shift.'" data-event="'.$event.'" onclick=setPos('.$data["id_shift"].')>';
                                        					echo	'<a href="#0">';
                                        							echo '<em class="event-name">'.$data["nama_shift"].'</em>';
                                        						echo'</a>';
                                        				echo'</li>';
                                                       }
                                                  }
                                             ?>
                        				</ul>
                        			</li>
                              <?php } ?>
                        		</ul>
                        	</div>
                        	<div  id=event-modalS class="event-modal">
                        		<header class="header">
                        			<div class="content">
                        				<span class="event-date"></span>
                        				<h3 class="event-name"></h3>
                                        <div class="tambah">
                                             <button id=check class="btn" onclick="tes();check('add','click');"><i id="checkB" class="fa fa-check"></i></button>
                                             <button id=add class="btn" onclick="showS();add('add','click');coba()"><i id="plusB" class="fa fa-plus"></i></button>

                                        </div>
                        			</div>

                        			<div class="header-bg"></div>
                        		</header>

                        		<div class="body">
                        			<div class="event-info"></div>
                        			<div class="body-bg"></div>
                        		</div>
                        		<a href="#0" class="close" onclick="closeS();check('add','click')">Close</a>

                        	</div>

                        	<div class="cover-layer" onclick="closeS();check('add','click')"></div>
                        </div>
                        <div class="event-modal">
                          <header class="header">
                            <div class="content">
                              <span class="event-date"></span>
                              <h3 class="event-name"></h3>
                            </div>

                            <div class="header-bg"></div>
                          </header>

                          <div class="body">
                            <div class="event-info"></div>
                            <div class="body-bg"></div>
                          </div>

                          <a href="#0" class="close">Close</a>
                        </div>
                        <a href="tambah_shift/index.html">
                        <button class="contact100-btn-show">+
                        </button>
                      </a>
                        <div class="wrap-contact100">
                          <button class="contact100-btn-hide" >
                            <i class="fa fa-close" aria-hidden="true"></i>
                          </button>
                        <div class="cover-layer"></div>
                      </div> <!-- .cd-schedule -->
                      <script src="js/modernizr.js"></script>
                      <script src="js/jquery-3.0.0.min.js"></script>
                      <!--===============================================================================================-->
                        <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
                      <!--===============================================================================================-->
                        <script src="vendor/animsition/js/animsition.min.js"></script>
                      <!--===============================================================================================-->
                        <script src="vendor/bootstrap/js/popper.js"></script>
                        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
                      <!--===============================================================================================-->
                        <script src="vendor/select2/select2.min.js"></script>
                      <!--===============================================================================================-->
                        <script src="vendor/daterangepicker/moment.min.js"></script>
                        <script src="vendor/daterangepicker/daterangepicker.js"></script>
                      <!--===============================================================================================-->
                        <script src="vendor/countdowntime/countdowntime.js"></script>
                      <!--===============================================================================================-->
                        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
                        <script src="js/map-custom.js"></script>
                      <!--===============================================================================================-->
                        <script src="js/main.js"></script>
                      <script>
                        if( !window.jQuery ) document.write('<script src="js/jquery-3.0.0.min.js"><\/script>');
                      </script>
                      <script src="js/main.js"></script> <!-- Resource jQuery -->

    </section><!--/wrapper -->
      </section><!-- /MAIN CONTENT -->
    </div>

    <div id="snackbar" style="width: 29%;height: 100%;">
     <div class="top-bottom">
         <button class="btn" onclick="closeS()"><i class="fa fa-close"></i></button>
         <input id=pos type="hidden" style="width:90px;height:30px;" name="" value="" />
         <button id=tes class="btn" onclick="tes()"><i class="fa fa-plus"></i></button>
     </div>
         <div id="container-data" class="Drag main-chart grid-container" ondrop="drop(event)" ondragover="allowDrop(event)">

         </div>
    </div>


    <!-- js placed at the end of the document so the pages load faster -->

    <script type="text/javascript">
         function coba() {

             //alert(3);
             var id_shiftV=document.getElementById('pos').value;
             $.ajax({    //create an ajax request to display.php
                   type: "POST",
                   url: "select.php",
                   data:{
                        id_shift:id_shiftV
                   },
                   dataType: 'json',
                   success : function (data){
                        //alert(data["nama"]);
                        //alert(data["nama"].length);
                        //var tmp="";
                        var node = document.getElementById('container-data');
                        var x="";
                        var yy=0;
                       //var obj = JSON.parse(data['nama']);
                        while( yy<(data["nama"].length)){

                             //tmp+=data["nama"][x]+"\n";
                             //tmp=data["nama"][x];
                              //x+='<div class=col-sm-2 class="drag" ondrop="drop(event)" ondragover="allowDrop(event)">';
                              x+='<div id=griddivimg'+yy+' class="grid-item">';
                                   x+='<div id=divimg'+yy+'>';
                                        x+="<div class='col-sm-2 centered'>";
                                             x+='<div class="centere-profile">';
                                                  x+='<a>';
                                                       x+='<img id=img'+yy+' draggable="true" ondragstart="drag(event)" src="sdownload.png" width="60"/>';
                                                  x+='</a>';
                                                  x+='<div id=nm'+yy+' class="centere-name">';
                                                       x+='<a>'+data["nama"][yy]+'</a>';
                                                  x+="</div>";
                                             x+="</div>";
                                        x+="</div>";
                                   x+='</div>';
                              x+="</div>";
                              yy++;

                              //x+=data["nama"][yy++];
                        }

                        node.innerHTML=x;
                        //alert(obj["nama"][0]);
                        //alert(tmp);
                   },
                   error:function(data){
                       alert("error"); //===Show Error Message====
                   }
             });
          }
    </script>
    <script type="text/javascript" src="js/drag&Drop.js"> </script>
    <script type="text/javascript" src="js/slidebar.js"> </script>
</div>
