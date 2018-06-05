<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>KEEP WORK</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/modernizr.custom.js"></script>
<script src="https://code.jquery.com/jquery-3.0.0.js"></script>
<script src="https://code.jquery.com/jquery-migrate-3.0.1.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body style="overflow: hidden;height:100%">
<a style="position:fixed;left:10%;top:10%" href=../php/login.php><img src="Logo.png" width="75  "></a> </div>

  <div class="intro text-center" style="height: 100%;">
    <div class="overlay" style="padding-top: 150px;padding-bottom: 200px;">
      <div class="container">
        <div class="row">
          <div class="intro-text">

          <?php

               include('../../../php/connection.php');
               echo '<h1>Hi '.$_SESSION["daftar"].' </h1>';
           ?>
            <h1>Welcome to <span class="brand">Keep Work</span></h1>
            <p>Thank You For Registering, We received a request to set your HireClub email to <p class="brand" style="color:#ed2553"><?php echo $_SESSION["email"]; ?></p>
               If this is correct, please confirm by clicking the button below. <br>
            </p>
            <?php echo '<a id="'.$_SESSION["email"].'" onclick="send(this.id)" class="btn btn-default btn-lg page-scroll">Send Confirmation Email</a>';
            ?>
            </div>
            <br>
            <br>
            <p>Once Send Confirmation Email clicked, all future messages about your Keep Work account will be sent to <?php echo $_SESSION["email"]; ?>.</p>
        </div>
      </div>
    </div>
  </div>

<script type="text/javascript" src="js/jquery.1.11.1.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/SmoothScroll.js"></script>
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="js/jquery.isotope.js"></script>
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script>
<script type="text/javascript" src="js/contact_me.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript">
     function send(x){

          $.ajax({    //create an ajax request to display.php
               type: "POST",
               url: "../../email/mail.php",
               data:{
                    email:x
               },
               success : function (result){
                         location.replace("../");

               },
               error : function(result){
                    alert("Email Invalid");
               }
          });
     }
</script>
</body>
</html>
