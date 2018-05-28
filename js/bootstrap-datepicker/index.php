<!DOCTYPE html>
<html lang="en" dir="ltr">
     <head>
          <meta charset="utf-8">
          <title>ss</title>
          <!--  jQuery -->
          <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

          <!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
          <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /><!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->

<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
<link rel="stylesheet" type="text/css" src="css/bootstrap-datepicker.css"/>
     </head>
     <body>
          <div class="bootstrap-iso">
           <div class="container-fluid">
            <div class="row">
             <div class="col-md-6 col-sm-6 col-xs-12">

              <!-- Form code begins -->
              <form method="post">
                <div class="form-group"> <!-- Date input -->
                  <label class="control-label" for="date">Date</label>
                  <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text"/>
                </div>
                <div class="form-group"> <!-- Submit button -->
                  <button class="btn btn-primary " name="submit" type="submit">Submit</button>
                </div>
               </form>
               <!-- Form code ends -->

              </div>
            </div>
           </div>
          </div>

          <script>
              $(document).ready(function(){
                var date_input=$('input[name="date"]'); //our date input has the name "date"
                var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
                var options={
                  format: 'mm/dd/yyyy',
                  container: container,
                  todayHighlight: true,
                  autoclose: true,
                };
                date_input.datepicker(options);
           });
         </script>
     </body>
</html>
