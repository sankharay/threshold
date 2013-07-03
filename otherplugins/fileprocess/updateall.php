<?php

	error_reporting(E_ALL);
	
	ini_set('max_execution_time', 300);
	
	include 'reader.php';
	include ('../pluginurl.php');
    $excel = new Spreadsheet_Excel_Reader();
?>


 <?php
    $excel->read($excelupload.$_GET['file']); 
	$id = $_GET['id'];
	$dataarray = explode(",",$id);
  
  $process = 1;
  $dup = 0;
  $senddup=0;
  for($i=1;$i<=$excel->sheets[0]['numRows'];$i++){
	
		$dept = trim($excel->sheets[0]['cells'][$i][1]);
		 $selectdata = mysql_query("select * from thrashold16 where dept = '$dept'");
		 $duplicates = mysql_num_rows($selectdata);
		 if($duplicates > 0 )
		 {
			$dupli[] = $dept;
			$dup = $dup+1;
		 }
		$data1 = trim($excel->sheets[0]['cells'][$i][1]);
		$data2 = trim($excel->sheets[0]['cells'][$i][2]);
		if(in_array($data1, $dataarray))
		{
$result =mysql_query("UPDATE `thrashold16` SET `thrashold`='$data2' where `dept`='$data1'");
		$process++;
		}
	}
 	
	
	?>
<p style="color:#FFF">Product Updated</p>