<?php

	error_reporting(E_ALL);
	
	ini_set('max_execution_time', 300);
	
	include 'reader.php';
	include ('../pluginurl.php');
    $excel = new Spreadsheet_Excel_Reader();
?>


 <?php
    $excel->read($excelupload.$_GET['file']);    
    $x=2;
	


//  echo $excel->sheets[0]['cells'][5][3];
//  exit;
//  echo $excel->sheets[0]['numRows'];
//  echo $excel->sheets[0]['numCols'];
  
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
		 else
		 { 
		$data1 = trim($excel->sheets[0]['cells'][$i][1]);
		$data2 = trim($excel->sheets[0]['cells'][$i][2]);
$result =mysql_query("INSERT INTO `thrashold16` (`dept`, `thrashold`) VALUES ('$data1', '$data2')");
		$process++;
		 }
	}
 	
	
	?>
	<div class="alert alert-block ">
							<button data-dismiss="alert" class="close" type="button">×</button>
<h4 class="alert-heading">Warning!</h4><p>
                            <?php
		echo '<br>Records Updated<br>';
		echo "Total : ".$dup." Duplicates<br>";
		if($dup != "")
		{
		echo "Duplicate Dept. : ";
		for($i=0;$i<$dup;$i++)
		{
		$senddup .= $dupli[$i].","; 
		?>
        <a href="<?php echo $applicationurl; ?>/home/edit/<?php echo $dupli[$i]; ?>" target="_blank"><?php echo $dupli[$i]; ?></a>&nbsp;&nbsp;
        
<?php
		}
		}
		echo $senddup;
  ?>
<input type="submit" value="Update All" onclick="return updateall('<?php echo $senddup; ?>','<?php echo $_GET['file']; ?>');" />
<span id="updatingnotify"></span>
  </p>
	</div>
    

<script>
function updateall(id,file)
{
alert(id);
alert(file);
$("#updatingnotify").load('<?php echo $applicationurl; ?>/otherplugins/fileprocess/updateall.php?id='+id+'&file='+file);
	return false;
}
</script>