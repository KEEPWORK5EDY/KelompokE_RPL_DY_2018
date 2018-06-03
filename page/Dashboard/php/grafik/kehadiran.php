<?php

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
     <head>
          <meta charset="utf-8">
          <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
          <script src="https://code.jquery.com/jquery-3.0.0.js"></script>
          <script src="https://code.jquery.com/jquery-migrate-3.0.1.js"></script>

          <link href="../../assets/k-bootstrap/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
          <link href="../../assets/k-bootstrap/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

          <link rel="stylesheet" type="text/css" href="chart.css">
          <link rel="stylesheet" type="text/css" href="button.css">
          <link rel="stylesheet" type="text/css" href="style.css">
          <title></title>
     </head>
     <body>
          <div class="top-menu">
               <div class="col menu-col">
                    <div class="menu">
                         <h2>Pilihan</h2>
                         <div class="dropdown">
                         <button onclick="myFunction()" class="dropbtn">Variable</button>
                           <div id="myDropdown" style="position: fixed" class="dropdown-content">
                             <a id="day" onclick="">Day</a>
                             <a id="week" onclick="">Weak</a>
                             <a id="month" onclick="">Month</a>
                             <a id="year" onclick="">Years</a>
                           </div>
                           <input id=textF style="width: 140px" class="dropbtn" type="text" name="" value="" readonly>
                         </div>
                    </div>

               </div>
          <div>
               <div class="form-group" style="width: 340px;height: 70px">
                <label for="dtp_input2" class="col-md-2 control-label" style="width: 100%">Date Picking</label>
                <div id=KW_SKalender class="input-group date form_date col-md-5" style="width: 75%" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_inputS" data-link-format="yyyy-mm-dd">
                    <input class="form-control date" id="tglS" size="16" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="click glyphicon glyphicon-calendar"></span></span>
                </div>
                    <input  type="hidden" id="dtp_inputS" value="" readonly/><br/>
               </div>

               <div class="form-group" style="width: 340px;height: 70px">
                <label for="dtp_input2" class="col-md-2 control-label" style="width: 100%">Date Picking</label>
                <div id=KW_FKalender class="input-group date form_date col-md-5" style="width: 75%" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_inputF" data-link-format="yyyy-mm-dd">
                    <input class="form-control date" id="tglF" size="16" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="click glyphicon glyphicon-calendar"></span></span>
                </div>
                    <input  type="hidden" id="dtp_inputF" value="" readonly/><br/>
               </div>
          </div>
     </div>

          <div class="wrapper">
               <div id="chartHeader">
                    <h4 id="textHeader">Log Absensi</h4>
               </div>
          </div>


               <canvas id="Chart"></canvas>
               <script src="grafik.js"></script>

               <script type="text/javascript" src="../../assets/k-bootstrap/jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
               <script type="text/javascript" src="../../assets/k-bootstrap/bootstrap/js/bootstrap.min.js"></script>
               <script type="text/javascript" src="../../assets/k-bootstrap/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
               <script type="text/javascript" src="../../assets/k-bootstrap/js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>

     </body>
</html>
