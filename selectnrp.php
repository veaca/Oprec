<?php
	include "connect.php";

	$query = mysql_query("SELECT nrp, nama, pil1, pil2, pil3 FROM dataoprec ");
	

	$num=mysql_num_rows($query);
	
	// while ($data[$i] = mysql_fetch_assoc($query)){
	// 	// echo $data['nrp'].' '.$data['nama'];
	// }

	// if ($num > 0 ){
	// 	while (mysql_fetch_assoc($query)){
			
	// 	}
	// }
	for($i=0 ; $i<=$num ; $i++){
		$data[$i] = mysql_fetch_array($query);
		//echo $data['nrp'].' '.$data['nama'];
	}

	
	
	
?>