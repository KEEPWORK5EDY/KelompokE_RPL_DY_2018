<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>KeepWork! - Karyawan</title>

    <!-- Bootstrap core CSS
    <link href="assets/css/bootstrap.css" rel="stylesheet">
	  -->
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!--<link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<link rel="stylesheet" type="text/css" href="assets/css/tampilan.css">
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



                    <!-- settings end -->

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

              	  <p class="centered"><a href="profile.html"><img src="assets/img/LogoKeepwork.png" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">KEEPWORK</h5>
              	  <li class="mt">
                      <a  href="index.html">
                          <i class="fa fa-dashboard"></i>
                          <span>Home</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a class="active" href="javascript:;" ><em class="active fa fa-desktop"></em> <span>Employee</span></a>
                      <ul class="sub">
                          <li><a  href="daftar_karyawan.php">List of Employee</a></li>
                          <li><a  href="jadwal.html">Schedule</a></li>
                          <li><a  href="kehadiran.html">Attend</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a  href="javascript:;" ><em class="fa fa-cogs"></em> <span>Setting</span></a>
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
                	<h3><i class="fa fa-angle-right"></i> List Of Employees</h3>
                	<hr>
      				<div class="row mt">
      					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
      						<div class="project-wrapper">
      		                    <div class="project">
      		                        <div class="photo-wrapper">
      		                            <div class="photo">
      		                            	<a class="fancybox" href="assets/img/portfolio/port04.jpg"><img class="img-responsive" src="assets/img/portfolio/port04.jpg" alt=""></a>
      		                            </div>
      		                            <div class="overlay"></div>
      		                        </div>
      		                    </div>
      		                </div>
      					</div><!-- col-lg-4 -->

      					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
      						<div class="project-wrapper">
      		                    <div class="project">
      		                        <div class="photo-wrapper">
      		                            <div class="photo">
      		                            	<a class="fancybox" href="assets/img/portfolio/port05.jpg"><img class="img-responsive" src="assets/img/portfolio/port05.jpg" alt=""></a>
      		                            </div>
      		                            <div class="overlay"></div>
      		                        </div>
      		                    </div>
      		                </div>
      					</div><!-- col-lg-4 -->

      					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
      						<div class="project-wrapper">
      		                    <div class="project">
      		                        <div class="photo-wrapper">
      		                            <div class="photo">
      		                            	<a class="fancybox" href="assets/img/portfolio/port06.jpg"><img class="img-responsive" src="assets/img/portfolio/port06.jpg" alt=""></a>
      		                            </div>
      		                            <div class="overlay"></div>
      		                        </div>
      		                    </div>
      		                </div>
      					</div><!-- col-lg-4 -->
      				</div><!-- /row -->

      				<div class="row mt">
      					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
      						<div class="project-wrapper">
      		                    <div class="project">
      		                        <div class="photo-wrapper">
      		                            <div class="photo">
      		                            	<a class="fancybox" href="assets/img/portfolio/port01.jpg"><img class="img-responsive" src="assets/img/portfolio/port01.jpg" alt=""></a>
      		                            </div>
      		                            <div class="overlay"></div>
      		                        </div>
      		                    </div>
      		                </div>
      					</div><!-- col-lg-4 -->

      					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
      						<div class="project-wrapper">
      		                    <div class="project">
      		                        <div class="photo-wrapper">
      		                            <div class="photo">
      		                            	<a class="fancybox" href="assets/img/portfolio/port02.jpg"><img class="img-responsive" src="assets/img/portfolio/port02.jpg" alt=""></a>
      		                            </div>
      		                            <div class="overlay"></div>
      		                        </div>
      		                    </div>
      		                </div>
      					</div><!-- col-lg-4 -->

      					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
      						<div class="project-wrapper">
      		                    <div class="project">
      		                        <div class="photo-wrapper">
      		                            <div class="photo">
      		                            	<a class="fancybox" href="assets/img/portfolio/port03.jpg"><img class="img-responsive" src="assets/img/portfolio/port03.jpg" alt=""></a>
      		                            </div>
      		                            <div class="overlay"></div>
      		                        </div>
      		                    </div>
      		                </div>
      					</div><!-- col-lg-4 -->
      				</div><!-- /row -->

      				<div class="row mt mb">
      					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
      						<div class="project-wrapper">
      		                    <div class="project">
      		                        <div class="photo-wrapper">
      		                            <div class="photo">
      		                            	<a class="fancybox" href="assets/img/portfolio/port04.jpg"><img class="img-responsive" src="assets/img/portfolio/port04.jpg" alt=""></a>
      		                            </div>
      		                            <div class="overlay"></div>
      		                        </div>
      		                    </div>
      		                </div>
      					</div><!-- col-lg-4 -->

      					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
      						<div class="project-wrapper">
      		                    <div class="project">
      		                        <div class="photo-wrapper">
      		                            <div class="photo">
      		                            	<a class="fancybox" href="assets/img/portfolio/port05.jpg"><img class="img-responsive" src="assets/img/portfolio/port05.jpg" alt=""></a>
      		                            </div>
      		                            <div class="overlay"></div>
      		                        </div>
      		                    </div>
      		                </div>
      					</div><!-- col-lg-4 -->

      					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
      						<div class="project-wrapper">
      		                    <div class="project">
      		                        <div class="photo-wrapper">
      		                            <div class="photo">
      		                            	<a class="fancybox" href="assets/img/portfolio/port06.jpg"><img class="img-responsive" src="assets/img/portfolio/port06.jpg" alt=""></a>
      		                            </div>
      		                            <div class="overlay"></div>
      		                        </div>
      		                    </div>
      		                </div>
      					</div><!-- col-lg-4 -->
      				</div><!-- /row -->

      		</section><! --/wrapper -->
            </section><!-- /MAIN CONTENT -->


              <div class="row">
                  <div class="col-lg-3 col-lg-12 main-chart">
<!-- /row mt -->

                    <!-- /row -->

					<!-- /row -->

					<!-- /row -->

                  </div><!-- /col-lg-9 END SECTION MIDDLE -->


      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  <!-- /col-lg-3 -->
              </div><! --/row -->
          </section>
      </section>

      <!--main content end-->
      <!--footer start-->      <!--footer end-->
  </section>

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
