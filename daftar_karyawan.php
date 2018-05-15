<!DOCTYPE html>

<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>KeepWork! - Admin</title>

    <!--Bootstrap core CSS-->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />


    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
       <link rel="stylesheet" type="text/css" href="assets/css/Gaya.css">
       </head>

      <body>

       <section id="container" >
           <!-- **********************************************************************************************************************************************************
           TOP BAR CONTENT & NOTIFICATIONS
           *********************************************************************************************************************************************************** -->
           <!--header start-->
           <header class="header black-bg">
                   <div class="sidebar-toggle-box">
                       <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
                   </div>
                 <!--logo start--><a href="index.html" class="logo"><strong>KeepWork!</strong></a><!--logo end-->
                 </div>
                 <div class="top-menu">
                   <ul class="nav pull-right top-menu">
                         <li><a class="logout" href="login.html">Logout</a></li>
                   </ul>
                 </div>
             </header>
           <!--header end-->
           <!-- **********************************************************************************************************************************************************
           MAIN SIDEBAR MENU
           *********************************************************************************************************************************************************** -->
           <!--sidebar start-->
           <aside>
               <div id="sidebar"  class="nav-collapse ">
                   <!-- sidebar menu start-->
                   <ul class="sidebar-menu" id="nav-accordion">

                       <p class="centered"><a  href="profile.html"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
                       <h5 class="centered">KEEPWORK</h5>
                       <li class="mt">
                           <a  href="index.html">
                               <i class="fa fa-home"></i>
                               <span>Home</span>
                           </a>
                       </li>

                       <li class="sub-menu">
                           <a class="active" href="javascript:;" ><em class="fa fa-desktop"></em> <span>Employees</span></a>
                           <ul class="sub">
                               <li><a  href="daftar_karyawan.php">List of Employees</a></li>
                               <li><a  href="jadwal.html">Schedule</a></li>
                               <li><a  href="kehadiran.html">Attend</a></li>
                           </ul>
                         </li>

                         <li class="sub-menu">
                             <a  href="javascript:;" ><em class="fa fa-cogs"></em> <span>Settings</span></a>
                             <ul class="sub">
                                 <li><a  href="akun.html">Account</a></li>
                                 <li><a  href="pengaturan.html">Setting</a></li>
                                 <li><a  href="bantuan.html">Help</a></li>
                             </ul>
                         </li>

                     </ul>
                     <!-- sidebar menu end-->
                 </div>
             </aside>
             <!--sidebar end-->

             <!-- **********************************************************************************************************************************************************
             MAIN CONTENT
             *********************************************************************************************************************************************************** -->
             <!--main content start-->
             <section id="main-content">
                 <section class="wrapper site-min-height">
                 	<h3><i class="fa fa-angle-right"></i> List of Employees</h3><br>

                <div class="container">
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="panel panel-primary">
                        <div class="centered panel-heading">1</div>
                        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
                        <div class="centered panel-footer">Buy 50 mobiles and get a gift card</div>
                        <!-- Trigger the modal with a button -->
                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>
                <!-- Modal -->
                <div class="modal fade" id="myModal" role="dialog">
                  <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Modal Header</h4>
                      </div>
                      <div class="modal-body">
                        <?php include 'tampil.php'; ?>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
<!--yang bagus end-->
        </div>
      </div>
      <div class="col-sm-4">
        <div class="panel  panel-primary">
          <div class="centered panel-heading">2</div>
          <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
          <div class="centered panel-footer"><?php  ?></div>
          <button type="button" class="btn btn-xs">Edit</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="panel  panel-primary">
          <div class="centered panel-heading">3</div>
          <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
          <div class="centered panel-footer">Buy 50 mobiles and get a gift card</div>
          <button type="button" class="btn btn-xs">Edit</button>
        </div>
      </div>
    </div>
  </div><br>

  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <div class="panel panel-primary">
          <div class="centered panel-heading">4</div>
          <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
          <div class="centered panel-footer">Buy 50 mobiles and get a gift card</div>
          <button type="button" class="btn btn-xs">Edit</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="panel panel-primary">
          <div class="centered panel-heading">5</div>
          <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
          <div class="centered panel-footer">Buy 50 mobiles and get a gift card</div>
          <button type="button" class="btn btn-xs">Edit</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="panel panel-primary">
          <div class="centered panel-heading">6</div>
          <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
          <div class="centered panel-footer">Buy 50 mobiles and get a gift card</div>
          <button type="button" class="btn btn-xs">Edit</button>
        </div>
      </div>


    </div>
  </div><br>

       		</section><!--/wrapper -->
             </section><!-- /MAIN CONTENT -->


                       <!-- js placed at the end of the document so the pages load faster -->
                       <script src="assets/js/jquery.js"></script>
                       <script src="assets/js/jquery-1.8.3.min.js"></script>
                       <script src="assets/js/bootstrap.min.js"></script>
                       <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
                       <script src="assets/js/jquery.scrollTo.min.js"></script>
                       <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
                       <script src="assets/js/jquery.sparkline.js"></script>


                       <!--common script for all pages-->
                       <script src="assets/js/common-scripts.js"></script>
                       <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
                          <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

                          <!--script for this page-->
                          <script src="assets/js/sparkline-chart.js"></script>
                        <script src="assets/js/zabuto_calendar.js"></script>



                        <script type="application/javascript">
                              $(document).ready(function () {
                                  $("#date-popover").popover({html: true, trigger: "manual"});
                                  $("#date-popover").hide();
                                  $("#date-popover").click(function (e) {
                                      $(this).hide();
                                  });

                                  $("#my-calendar").zabuto_calendar({
                                      action: function () {
                                          return myDateFunction(this.id, false);
                                        },
                                                        action_nav: function () {
                                                            return myNavFunction(this.id);
                                                        },
                                                        ajax: {
                                                            url: "show_data.php?action=1",
                                                            modal: true
                                                        },
                                                        legend: [
                                                            {type: "text", label: "Special event", badge: "00"},
                                                            {type: "block", label: "Regular event", }
                                                        ]
                                                    });
                                                });
                                                function myNavFunction(id) {
                                                    $("#date-popover").hide();
                                                    var nav = $("#" + id).data("navigation");
                                                    var to = $("#" + id).data("to");
                                                    console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
                                                }
                                            </script>
                                          </body>
                                        </html>