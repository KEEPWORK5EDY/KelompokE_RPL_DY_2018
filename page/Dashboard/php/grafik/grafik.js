var variable;
var dayS;
var hari=[""];
var ctx={};
$(document).ready(function(){

     document.getElementById('textF').value="day";
     variable="day";
     queryTime("1");
     grafik();

});

function queryTime(x){
     $.ajax({    //create an ajax request to display.php
       type: "POST",
       url: "time.php",
       success: function(time){
            //dayS=time["tanggal_daftar"];

                 var str=time.substring(2,time.length-2);
                 var dd="";
                 var mm=[];
                 var i=0;
                 for(;i<str.length;i++){
                    if(str.charAt(i)=='-'){
                       mm="/"+dd+mm;
                       dd="";
                    }
                    else{
                         dd+=str.charAt(i);
                    }
                 }
                    mm=dd+mm;
                    ////alert(mm);
                    const month = ["January", "February", "March", "April", "May", "June","July", "August", "September", "October", "November", "December"];
                    dayS= mm.substring(0, 2)+'/'+ month[parseInt(mm.substring(3, 5))-1]+'/'+mm.substring(6);
               kalander();
          }
     });

}

//var date_input=$('input[name="date"]');
//$('#kalander1').datetimepicker({format: "dd MM yyyy - hh:ii"});
function kalander() {

     var today = new Date();
     var dd = today.getDate();
     var mm = today.getMonth()+1; //January is 0!
     var yyyy = today.getFullYear();
     const month = ["January", "February", "March", "April", "May", "June","July", "August", "September", "October", "November", "December"];
     if(dd<10) {
         dd = '0'+dd
     }

     hari[0]=todayS = dd + ' ' + month[mm-1] + ' ' + yyyy;
     if(mm<10) {
         mm = '0'+mm
     }
     ////alert(dayS);
     hari[1]=todayF = yyyy + '-' + mm + '-' + dd ;
     var end=dd + '/' + month[mm-1] + '/' + yyyy;
     document.getElementById('tglS').value=todayS;
     document.getElementById('dtp_inputS').value=todayF;

     document.getElementById('tglF').value=todayS;
     document.getElementById('dtp_inputF').value=todayF;

      $('#KW_SKalender').datetimepicker({
           useCurrent: true,
           weekStart: 1,
           todayBtn:  1,
           autoclose: 1,
           todayHighlight: 1,
           startView: 2,
           minView: 2,
           forceParse: 0,
           startDate: dayS,
           endDate: end
      }).on('changeDate', function(e){
           var date =$("#dtp_inputS").val();
           //hari[1]=$("#dtp_inputF").val();
           ////alert(hari[1]);
           //queryTime(date);
           //variable="day";
           //hari[1]=$("#dtp_inputF").val();

           //grafik();

      });

      $('#KW_FKalender').datetimepicker({
           useCurrent: true,
           weekStart: 1,
           todayBtn:  1,
           autoclose: 1,
           todayHighlight: 1,
           startView: 2,
           minView: 2,
           forceParse: 0,
           startDate: dayS,
           endDate: end
      }).on('changeDate', function(e){
           var date =$("#dtp_inputF").val();
           ////alert(dayS);
           ////alert(date)
      });
      //$('#KW_FKalender').data("DateTimePicker").minDate(e.date);



}

function myFunction() {
   document.getElementById("myDropdown").classList.toggle("show");
}
$('#day').click(function(){
     document.getElementById('textF').value="day";
     variable="day";
     grafik();
});

$('#week').click(function(){
     document.getElementById('textF').value="weak";
     //ctx.removeData();
     variable="week";
     grafik();
});
$('#month').click(function(){
     document.getElementById('textF').value="month";
});
$('#year').click(function(){
     document.getElementById('textF').value="year";
});

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

   var dropdowns = document.getElementsByClassName("dropdown-content");
   var i;
   for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
       openDropdown.classList.remove('show');
      }
   }
  }
}

/*
var jsonfile = {
  "total_xy":[],
  "koordinat_y'":[],
  "absensi_xy":[]
};*/

     /*var labels = jsonfile.jsonarray.map(function(e) {
        return e.name;
     });*/

function grafik(){
     var date =$("#dtp_inputS").val();
     //alert(date);
     //var s={"jsonarray":};
     $.ajax({    //create an ajax request to display.php
          type: "POST",
          url: "api.php",
          data:{
               vard:variable,
               pilihan:date
          },
          dataType: 'json',
        success : function (result) {
             //alert(variable);
             ////alert(result["pilihan"][0]);
            // alert(hari[1]);
             //s={JSON.parse(result)};
             ////alert(result['data'].length);
             //for (var i = 0; i < result['data'].length; i++) {
                  ////alert(result['nama_shift'][i]);
               //   jsonfile.total[i]=result['data'][i];
                 // jsonfile.nama_shift[i]=result['nama_shift'][i];
                  //jsonfile.jsonarray[i]=result[i];
                  ////alert(s[i]);
             //}
          $('canvas').remove();
          $("div.wrapper").append('<canvas id="Chart"></canvas>');
          var ctx = document.getElementById('Chart').getContext("2d");

          var gradientStroke = ctx.createLinearGradient(500, 0, 100, 0);
          gradientStroke.addColorStop(0, '#80b6f4');

          gradientStroke.addColorStop(1, '#f49080');

          /*var data = jsonfile.total.map(function(e) {
               ////alert(e);
             return e;
          });

          var labels = jsonfile.nama_shift.map(function(e) {
               ////alert(e);
             return e;
        });*/
          var kwChart = new Chart(ctx, {

              type: 'line',
              data: {
                  labels: result['koordinat_y'],
                  datasets: [{
                      label:"Jumlah Jadwal Absensi",
                      borderColor: "GREY",
                      pointBorderColor: gradientStroke,
                      pointBackgroundColor: gradientStroke,
                      pointHoverBackgroundColor: gradientStroke,
                      pointHoverBorderColor: gradientStroke,
                      fill: false,
                      borderWidth: 4,
                      data:result['data']
                      //data: [100, 120, 150, 170, 180, 170, 160]
                 },{
                     label: "Absensi",
                     borderColor: gradientStroke,
                     pointBorderColor: gradientStroke,
                     pointBackgroundColor: gradientStroke,
                     pointHoverBackgroundColor: gradientStroke,
                     pointHoverBorderColor: gradientStroke,
                     pointBorderWidth: 5,
                     pointHoverRadius: 10,
                     pointHoverBorderWidth: 1,
                     pointRadius: 3,
                     fill: false,
                     borderWidth: 4,
                     data: result['absensi']
                 }]
              },
              options: {
                    title: {
                    display: false,
                    text: ''
                    },
                    legend: {
                      position: "bottom"
                    },
                    scales: {
                      yAxes: [{
                          ticks: {
                              fontColor: "rgba(0,0,0,0.5)",
                              fontStyle: "bold",
                              beginAtZero: true,
                              stepSize: 50,
                              maxTicksLimit: 5,
                              padding: 20
                          },
                          gridLines: {
                              drawTicks: false,
                              display: true
                          }

                      }],
                      xAxes: [{
                          gridLines: {
                              zeroLineColor: "transparent"
                          },
                          ticks: {
                              padding: 20,
                              fontColor: "rgba(0,0,0,0.5)",
                              fontStyle: "bold"
                          }
                      }]
                    }
                }
           });
          }
        });
     }
