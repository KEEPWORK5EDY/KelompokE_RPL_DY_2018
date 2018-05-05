
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>KEEP WORK</title>

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

      <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
      <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" type="text/css" href="../css/style.css">

</head>

<body>

<!-- Mixins-->
<!-- Pen Title-->
<div class="pen-title">
  <img src="../image/Logo.png" width="150" />
  <span><br><br><i class='fa fa-code'></i> TETAP BEKERJA DIMANAPUN </span>
</div>
<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Login</h1>
    <form action="loginsrc.php" method="post">
      <div class="input-container">
        <input type="#{type}" id="#{label}" required="required" name="Email"/>
        <label for="#{label}">Email</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="#{label}" required="required" name="Password"/>
        <label for="#{label}">Password</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button name="Signin"><span>Sign In</span></button>
      </div>
      <div class="footer"><a href="#">Forgot your password?</a></div>
    </form>
  </div>
  <div class="card alt">
    <div class="toggle"></div>
    <h1 class="title">Register
      <div class="close"></div>
    </h1>
    <form action="form.php" method="post">
      <div class="input-container">
        <input type="#{type}" id="#{label}" required="required" name="Email"/>
        <label for="#{label}">Email</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="#{label}" required="required" name="Password"/>
        <label for="#{label}">Password</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="#{type}" id="#{label}" required="required" name="Nama"/>
        <label for="#{label}">Nama</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="date" id="datepicker" required="required" name="Tanggal_Lahir"/>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button name="Signup"><span>Sign Up</span></button>
      </div>
    </form>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>



    <script  src="../js/index.js"></script>




</body>

</html>
