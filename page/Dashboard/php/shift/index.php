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


     <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
     <link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
     <link rel="stylesheet" href="css/jadwal.css"> <!-- Resource style -->
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
     <style media="screen">
          .hidden-btn{
               visibility: hidden;
          }
          .show-btn{
               visibility: visible;
          }
     </style>

</head>

          <div class="col-lg-12  main-chart">
              <!-- /row mt -->
              <div id=page>
                <section id="main-content">
                    <section class="wrapper site-min-height">
                         <div class="cd-schedule loading">
                        	<div class="timeline">
                        		<ul id=board>
                                   <?php

                                        $syntax=sprintf("SELECT min(hour(jam_mulai)) m ,max(hour(jam_akhir)) a from shift where id_usaha=(select id_usaha from usaha where email='%s') order by jam_mulai ",$_SESSION["EPemilik"]);
                                        $query=mysqli_query($link,$syntax);
                                        if(mysqli_num_rows($query)>0){
                                             $jam_mulai;
                                             $jam_akhir;
                                             while ($data=mysqli_fetch_array($query)) {
                                                  $jam_mulai=$data["m"];
                                                  $jam_akhir=$data["a"];
                                             }
                                             if($jam_mulai!=0){
                                                  $jam_mulai-=1;
                                             }
                                             if($jam_akhir!=0){
                                                  $jam_akhir+=1;
                                             }
                                             for ($i=$jam_mulai; $i <=$jam_akhir ; $i++) {
                                                 $jam="";
                                                 if($i<10){
                                                      $jam="0"+$i;
                                                 }else{
                                                      $jam=$i;
                                                 }
                                                  echo '<li><span>'.$jam.':00</span></li>';
                                                  echo '<li><span>'.$jam.':30</span></li>';
                                             }
                                        }else {
                                             echo "<li><span>08:00</span></li>
                                                   <li><span>08:30</span></li>
                                                   <li><span>09:00</span></li>
                                                   <li><span>09:30</span></li>
                                                   <li><span>10:00</span></li>";
                                        }
                                    ?>

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
                                                  $eventNum=1+($a%4);

                                                  if(mysqli_num_rows($queryShift)>0){
                                                       while($data = mysqli_fetch_array($queryShift)){
                                                            $id_shift="jadwal/";
                                                            $id_shift.=(string)$data["hari"];
                                                            $id_shift.='.php#';
                                                            $id_shift.=(string)$data["id_shift"];
                                                            $event="event-";

                                                            if($eventNum>=5){
                                                                 $eventNum=1;
                                                            }
                                                            $event.=(string)($eventNum++);
                                                            echo '<li class="single-event" data-start="'.$data["jam_mulai"].'" data-end="'.$data["jam_akhir"].'"  data-content="'.$id_shift.'" data-event="'.$event.'" onclick="btnAddShift(0);setPos('.$data["id_shift"].')">';
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
                                             <button id=check class="btn" onclick="editJadwal();check('add','click');"><i id="checkB" class="fa fa-check"></i></button>
                                             <button id=add class="btn" onclick="showS();add('add','click');querydaftar()"><i id="plusB" class="fa fa-plus"></i></button>

                                        </div>
                        			</div>

                        			<div class="header-bg"></div>
                        		</header>

                        		<div class="body">
                        			<div class="event-info"></div>
                        			<div class="body-bg"></div>
                        		</div>
                        		<a href="#0" class="close" onclick="btnAddShift(1);closeS();check('add','click')">Close</a>

                        	</div>

                        	<div class="cover-layer" onclick="btnAddShift(1);closeS();check('add','click')"></div>
                        </div>


                        <button id=btntambahShift style="width:90px;height:90px" class="contact100-btn-show" data-toggle="modal" data-target="#tambahShift">+
                        </button>

                      <script src="js/modernizr.js"></script>

                      <script>
                        if( !window.jQuery ) document.write('<script src="js/jquery-3.0.0.min.js"><\/script>');
                      </script>
                      <script src="js/main.js"></script> <!-- Resource jQuery -->

    </section><!--/wrapper -->
      </section><!-- /MAIN CONTENT -->
    </div>
    <!-- Trigger the modal with a button -->
<!-- Modal -->
<div id="tambahShift" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>

             <h4 class="contact100-form-title modal-title" style="padding: 5px;">TAMBAHKAN SHIFT</h4>
        </span>
      </div>
      <div class="modal-body">

				<div class="wrap-input100 validate-input bg1">
					<span class="label-input100">Nama Shift</span>
					<input id="nama_shift" class="input100" type="text" placeholder="Masukkan Nama Shift" required>
				</div>

                    <div class="shift-waktu" style="display:flex">
     				<div class="wrap-input50 validate-input bg1" style="width:50%;">
     					<span class="label-input100">Jam Mulai</span>
     					<input id="jam_mulai" class="input100" type="time" value="00:00" required="">
     				</div>
     				<div class="wrap-input50 validate-input bg1" style="width:50%;" >
     					<span class="label-input100">Jam Selesai</span>
     					<input id="jam_akhir" class="input100" type="time" required="">
     				</div>
                         <input id="hari" type="hidden" value="" required>
                    </div>

				<div class="wrap-input100 input100-select bg1">
					<span class="label-input100">Pilih Hari</span>
					<div>
						<select class="js-select2" name="hari">
							<option value="0">Please chooses</option>
							<option onclick="sel(this)" value="Monday">Monday</option>
							<option onclick="sel(this)" value="Tuesday">Tuesday</option>
							<option onclick="sel(this)" value="Wednesday">Wednesday</option>
							<option onclick="sel(this)" value="Thursday">Thursday</option>
							<option onclick="sel(this)" value="Friday">Friday</option>
							<option onclick="sel(this)" value="Saturday">Saturday</option>
							<option onclick="sel(this)" value="Sunday">Sunday</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>

				<div class="form-btn">

					<button onclick="shift();" class="contact100-form-btn" style="margin-top:-45px;padding:10px;margin-left: 70%;">
						<span>
							Tambahkan
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>

      </div>
    </div>

  </div>
</div>

    <div id="snackbar" style="width: 29%;height: 100%;">
     <div class="top-bottom">
         <button class="btn" style="position:fixed" onclick="closeS();check('add','click');"><i class="fa fa-close"></i></button>
         <input id=pos type="hidden" style="width:90px;height:30px;" name="" value="" />

     </div>
         <div id="container-data" class="Drag grid-container" ondrop="drop(event)" ondragover="allowDrop(event)">

         </div>
    </div>


    <!-- js placed at the end of the document so the pages load faster -->

    <script type="text/javascript">

          $(function(){
               var d = new Date(),
                h = (d.getHours()<10?'0':'') + d.getHours(),
                m = (d.getMinutes()<10?'0':'') + d.getMinutes();
                i = h + ':' + m;
                var jam_mulai=document.getElementById("jam_mulai").value=i;

          });
          function btnAddShift(x){
               if(x==1){
                    document.getElementById("btntambahShift").setAttribute("class", "show-btn contact100-btn-show")
               }else {
                    document.getElementById("btntambahShift").setAttribute("class", "hidden-btn");
               }
          }
          function del(x){
               var id=x.substring(3);
               $.ajax({
                    type: "POST",
                    url: "deleteShift.php",
                    data:{
                         id_shift:id
                    },
                    success : function(result){
                         $(document).ajaxStop(function(){
                              alert(result);
                             window.location.reload();
                             //document.getElementById("<?php// echo "btn".$dataJs['id_pegawai'];?>").setAttribute("data-dismiss","modal");
                             //location.reload();
                             //setTimeout(function(){document.location.href = "daftar_karyawan.php"},500);
                        });
                    },
                    error : function(result){
                         alert(result);
                    }
               });

          }
          function sel(x) {
               document.getElementById("hari").value=x.value;
          }
          function shift(){
               var nama_shift=document.getElementById("nama_shift").value;
               var jam_mulai=document.getElementById("jam_mulai").value;
               var jam_akhir=document.getElementById("jam_akhir").value;
               var hari=document.getElementById("hari").value;
               //alert(jam_mulai.length);
               if(nama_shift.length==0 || jam_mulai.length==0 || jam_akhir.length==0 || hari.length==0){
                    document.getElementById("nama_shift").placeholder="Field tidak boleh kosong";
                    //document.getElementById("nama_shift").styleColor="red";
               }else {
                    //alert(nama_shift);
                    $.ajax({
                         type: "POST",
                         url: "form.php",
                         data:{
                              nama_shift:nama_shift,
                              jam_mulai:jam_mulai,
                              jam_akhir:jam_akhir,
                              hari:hari
                         },
                         success : function(result){
                              $(document).ajaxStop(function(){
                                  window.location.reload();
                                  //document.getElementById("<?php// echo "btn".$dataJs['id_pegawai'];?>").setAttribute("data-dismiss","modal");
                                  //location.reload();
                                  //setTimeout(function(){document.location.href = "daftar_karyawan.php"},500);
                             });
                         },
                         error : function(result){
                              alert("error");
                         }
                    });
               }

          }
         function editJadwal(){
              //alert(document.getElementById('pos').value);
              var id_pegawai = {
                "id_pegawai":[]
              };


              var x = document.getElementById("shift").querySelectorAll("input.id_pegawai");
              var id = document.getElementById("pos").value;

              var i;
              //var tes="";
              for (i = 0; i < x.length; i++) {
                  id_pegawai["id_pegawai"][i]=x[i].value;
              }
              //alert(data["id_shift"][0]);

              $.ajax({
                   type: "POST",
                   url: "editMember.php",
                   data:{
                        vard:id_pegawai,
                        id:id
                   },
                   success : function(result){
                     alert("success");
                   },
                   error : function(result){
                        alert("error");
                   }
            });
         }

         function querydaftar() {

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
                                                  x+='<input class=id_pegawai type="hidden" value="'+data["id_pegawai"][yy]+'" />';
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
