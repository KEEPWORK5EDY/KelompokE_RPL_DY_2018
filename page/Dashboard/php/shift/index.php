<?php
     include "../../../../php/connection.php";

 ?>
<head>
     <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600" rel="stylesheet">
     <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
     <link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
     <link rel="stylesheet" href="css/jadwal.css"> <!-- Resource style -->
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
                                                            echo '<li class="single-event" data-start="'.$data["jam_mulai"].'" data-end="'.$data["jam_akhir"].'"  data-content="'.$id_shift.'" data-event="'.$event.'">';
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

                        	<div class="cover-layer"></div>
                        </div> <!-- .cd-schedule -->
                        <script src="js/modernizr.js"></script>
                        <script src="js/jquery-3.0.0.min.js"></script>
                        <script>
                        	if( !window.jQuery ) document.write('<script src="js/jquery-3.0.0.min.js"><\/script>');
                        </script>
                        <script src="js/main.js"></script> <!-- Resource jQuery -->

    </section><!--/wrapper -->
      </section><!-- /MAIN CONTENT -->
    </div>
</div>
