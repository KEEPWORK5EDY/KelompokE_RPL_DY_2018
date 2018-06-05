<?php
     include "../../../../php/connection.php";

	$id_shift=$_POST["id"];
     $array=$_POST["vard"];

	// method get var id_shift
	$syntax=sprintf("select *from jadwal where id_shift='%s'",$id_shift);
	$query=mysqli_query($link,$syntax);

	$Qarray = array('id_pegawai' =>array());
     $Narray = array('id_pegawai' =>array());
     $Marray = array('id_pegawai'=>array());
     //$array = array('id_pegawai' =>array());

	while($data=mysqli_fetch_array($query)){
		array_push($Qarray['id_pegawai'],$data["id_pegawai"]);

	}

	$i=0;
	for(;$i<sizeof($array["id_pegawai"],0);$i++){
	////echo "\n"."aar: ".$array["id_pegawai"][$i];

		$pos1=1;
		//os2=0;

		for($j=0;$j<sizeof($Qarray["id_pegawai"],0);$j++){

			if(strcmp($array["id_pegawai"][$i],$Qarray["id_pegawai"][$j])==0){
				////echo $array["id_pegawai"][$i]." == ".$Qarray["id_pegawai"][$j]."\n";
				//echo $array["id_pegawai"][$i]." = ".$Qarray["id_pegawai"][$j]."\n";
				array_push($Marray['id_pegawai'],$array["id_pegawai"][$i]);
				$pos1=0;break;
			////echo "qarr :".$Qarray['id_pegawai'][$j]." ";
			}
		}

		if($pos1==1){
			array_push($Narray['id_pegawai'],$array["id_pegawai"][$i]);
		}
	}

	if(sizeof($Marray["id_pegawai"]>0)){
		$values=makeDel($Marray["id_pegawai"]);
		//print_r($values);
		$del=sprintf("DELETE FROM jadwal WHERE id_shift='%s' AND id_pegawai not in %s",$id_shift,$values);
		$query=mysqli_query($link,$del);
		//ho $del;
	}
	if(sizeof($Narray["id_pegawai"]>0)){
		$values=makeValues($Narray["id_pegawai"],$id_shift);
		//print_r($values);
		$insert=sprintf("INSERT INTO jadwal (id_shift,id_pegawai) values %s",$values);
		//ho $insert."\n";
	 	$query=mysqli_query($link,$insert);
	}


	function makeValues($data,$col){
		$hasil="";
		for($i=0;$i<sizeof($data);$i++){
			//$hasil.=$col.','.$data[$i].')';
			$hasil.=sprintf("('%s','%s')",$col,$data[$i]);
			if($i!=sizeof($data)-1){
				$hasil=$hasil.",";
			}
		}

		return $hasil;
	}
	function makeDel($data){
		$hasil="(";
		for($i=0;$i<sizeof($data);$i++){
			//$hasil.=$col.','.$data[$i].')';
			$hasil.=sprintf("'%s'",$data[$i]);
			if($i!=sizeof($data)-1){
				$hasil=$hasil.",";
			}
		}
		$hasil.=")";
		return $hasil;
	}
     //print (json_encode($array["id_pegawai"]));
     //echo $del;
     //////echo $id_shift;
?>
