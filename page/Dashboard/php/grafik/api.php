<?php
     $arrLabels = array("January","February","March","April","May","June","July");
     $arrDatasets = array('label' => "My First dataset",'fillColor' => "rgba(220,220,220,0.2)", 'strokeColor' => "rgba(220,220,220,1)", 'pointColor' => "rgba(220,220,220,1)", 'pointStrokeColor' => "#fff", 'pointHighlightFill' => "#fff", 'pointHighlightStroke' => "rgba(220,220,220,1)", 'data' => array('28', '48', '40', '19', '86', '27', '90'));

     $arrReturn = array(array('labels' => $arrLabels, 'datasets' => $arrDatasets));

     print (json_encode($arrReturn));
 ?>
