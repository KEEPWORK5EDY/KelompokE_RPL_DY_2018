<?php
     include "../../../../php/connection.php";
     //$arrLabels = array("January","February","March","April","May","June","July");
     //$arrDatasets = array('label' => "My First dataset",'fillColor' => "rgba(220,220,220,0.2)", 'strokeColor' => "rgba(220,220,220,1)", 'pointColor' => "rgba(220,220,220,1)", 'pointStrokeColor' => "#fff", 'pointHighlightFill' => "#fff", 'pointHighlightStroke' => "rgba(220,220,220,1)", 'data' => array('28', '48', '40', '19', '86', '27', '90'));

     //$arrReturn = array(array('labels' => $arrLabels, 'datasets' => $arrDatasets));


     $variable=$_POST["vard"];
     $pilihan=$_POST["pilihan"];

     // query max kehadiran tiap shift perhari
     if(strcmp($variable,"day")==0){
          //$array = array();
          //print (json_encode($arrLabels));
          $timezone = date_default_timezone_get();
          //echo "The current server timezone is: " . $timezone;
          $date = date('m/d/Y h:i:s a', time());
          //echo "date : $date";
          $dayD=date('Y-m-d');
          //$d=spintf("%s",date("D",strtotime($t)));
          $sd = $pilihan[0];
          $dt = new DateTime($sd);
          $date = $dt->format('l');

          //$day=date("l",strtotime("-1 days"));
          $day=date("l");
          $array = array('data' =>array(), 'koordinat_y' => array(),'absensi' => array(), 'pilihan' => array());
          array_push($array['pilihan'],$pilihan[0]);
          array_push($array['pilihan'],$pilihan[1]);

          $syntax=sprintf("SELECT id_shift,COUNT(id_shift) AS total FROM jadwal WHERE id_shift IN (SELECT id_shift FROM shift WHERE hari='%s' AND id_usaha=(SELECT id_usaha FROM usaha WHERE Email='%s')) group by id_shift",$day,$_SESSION["EPemilik"]);
          $query=mysqli_query($link,$syntax);
          if(mysqli_num_rows($query)>0){
               while ($data=mysqli_fetch_array($query)) {
                    array_push($array['data'],$data['total']);

                    $syntaxS=sprintf("SELECT * FROM shift WHERE id_shift='%s'",$data['id_shift']);
                    $queryS=mysqli_query($link,$syntaxS);
                    if(mysqli_num_rows($queryS)>0){
                         while ($dataS=mysqli_fetch_array($queryS)) {
                              $syntaxA=sprintf("SELECT COUNT(%s) AS total FROM absensi WHERE id_shift='%s'",$data['id_shift'],$data['id_shift']);
                              $queryA=mysqli_query($link,$syntaxA);
                              while ($dataA=mysqli_fetch_array($queryA)){
                                   array_push($array['absensi'],$dataA['total']);
                              }
                              array_push($array['koordinat_y'],$dataS['nama_shift']);
                         }
                    }
                    //$array[]=$data['tes'];
               }
          }
               //$array[]=$data['tes'];
          print (json_encode($array));
     }
     else if(strcmp($variable,"week")==0){
          $mon=date("Y-m-d", strtotime('monday this week'));
          $sun=date("Y-m-d", strtotime('sunday this week'));
          //$arrLabels = array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"), 'koordinat_y' => array(),'absensi' => array());

          //$mon=date("l", strtotime('monday this week'));
          //$d=spintf("%s",date("D",strtotime($t)));
          $day=date("l");
          $array = array('data' =>array(), 'koordinat_y' => array(),'absensi' => array());

          $syntax=sprintf("SELECT sum(absensi) as total ,hari FROM (SELECT s.id_shift,hari,COUNT(j.id_shift) AS absensi FROM shift s,jadwal j WHERE s.id_shift=j.id_shift AND id_usaha=(SELECT id_usaha FROM usaha WHERE email='%s') GROUP BY s.id_shift) AS tes GROUP BY hari",$_SESSION["EPemilik"]);
          $query=mysqli_query($link,$syntax);
          if(mysqli_num_rows($query)>0){
               while ($data=mysqli_fetch_array($query)){
                    array_push($array['data'],$data['total']);
                    array_push($array['koordinat_y'],$data['hari']);
               }
          }
          for($a=0;$a<6;$a++){
               for($b=0;$b<=6-$a-1;$b++){
                     if(date("N",strtotime($array['koordinat_y'][$b]))>date("N",strtotime($array['koordinat_y'][$b+1]))){
                             $tmp=$array['koordinat_y'][$b];
                             $array['koordinat_y'][$b]=$array['koordinat_y'][$b+1];
                             $array['koordinat_y'][$b+1]=$tmp;

                             $tmp=$array['data'][$b];
                             $array['data'][$b]=$array['data'][$b+1];
                             $array['data'][$b+1]=$tmp;

                             $tmp=$array['absensi'][$b];
                             $array['absensi'][$b]=$array['absensi'][$b+1];
                             $array['absensi'][$b+1]=$tmp;
                     }
                 }
          }
          $hari = array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday");
          for($a=0;$a<6;$a++){
               if($array['koordinat_y'][$a]==null){
                    $array['koordinat_y'][$a]=$hari[$a];
               }
          }
               //$array[]=$data['tes'];
          print(json_encode($array));
     }
     //query yang hadir
     //select id_shift,count(id_shift) from absensi where id_shift in (select id_shift from shift where hari='Wednesday' and id_usaha=(select id_usaha from usaha where Email='zikri')) group by id_shift;

 ?>
