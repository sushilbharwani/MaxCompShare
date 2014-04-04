<?php
$file = fopen("Book1.csv","r");
$rowtitle = fgetcsv($file);
$count = count($rowtitle);
$maxarray = array();
$i=1;
while(!feof($file))
{
     $row = fgetcsv($file);
	 for($j=2;$j<$count;$j++) {
			   if($i==1) {
					   $maxarray[$rowtitle[$j]] = Array($row[$j],$row[0],$row[1]); ///To initialise the value
			  }
			 else {
					   if($row[$j]>=$maxarray[$rowtitle[$j]][0]) ///Check maximum value
						   $maxarray[$rowtitle[$j]] = Array($row[$j],$row[0],$row[1]);
			   }
	 }
	 $i++;
}

fclose($file);

	foreach($maxarray as $key => $value) {
     echo $value[0].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$value[1].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$value[2].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$key.'<br /><br />';
	}
?>