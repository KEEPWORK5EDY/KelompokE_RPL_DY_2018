<?php

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
     <head>
          <meta charset="utf-8">
          <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
            <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
          <title></title>
     </head>
     <body>
          <canvas id="myChart" width="400" height="400"></canvas>
          <script>
          $(document).ready(function() {
                    $.ajax({
                          type: 'POST',
                          url: 'api.php',
                          data:data,
                          dataType: 'json',
                          success: function (data) {
                               alert(JSON.stringify(data));
                               /*lineChartData = data;//alert(JSON.stringify(data));
                               var myLine = new Chart(document.getElementById("myChart").getContext("2d")).Line(lineChartData);

                               var ctx = document.getElementById("canvas").getContext("2d");
                               window.myLine = new Chart(ctx).Line(lineChartData, {responsive: true});
                          */}
                     });
           });
          //var ctx = document.getElementById("myChart").getContext('2d');
          /*var myChart = new Chart(ctx, {
              type: 'bar',
              data: {
                  labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
                  datasets: [{
                      label: '# of Votes',
                      data: [12, 19, 3, 5, 2, 3],
                      backgroundColor: [
                          'rgba(255, 99, 132, 0.2)',
                          'rgba(54, 162, 235, 0.2)',
                          'rgba(255, 206, 86, 0.2)',
                          'rgba(75, 192, 192, 0.2)',
                          'rgba(153, 102, 255, 0.2)',
                          'rgba(255, 159, 64, 0.2)'
                      ],
                      borderColor: [
                          'rgba(255,99,132,1)',
                          'rgba(54, 162, 235, 1)',
                          'rgba(255, 206, 86, 1)',
                          'rgba(75, 192, 192, 1)',
                          'rgba(153, 102, 255, 1)',
                          'rgba(255, 159, 64, 1)'
                      ],
                      borderWidth: 1
                  }]
              },
              options: {
                  scales: {
                      yAxes: [{
                          ticks: {
                              beginAtZero:true
                          }
                      }]
                  }
              }
         });*/

          </script>


     </body>
</html>
