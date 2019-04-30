<?php 
if (!empty($_POST['q']))
{
	include 'connect.php';
	$index=4;
	$q = $_POST['q'];
	$output = '';
	$query = "select nrp, nama, pil1, pil2, pil3 from dataoprec where nrp like '%".$q."%' or nama like '%".$q."%'";
	$result = mysql_query($query);
	if (!empty($result)) {
	while ($output=mysql_fetch_assoc($result)){
		echo $output['nrp'];
		echo " --";
		echo '<a>'.$output['nama'].'</a>';
		echo " Pil 1: ";
		echo $output['pil1'];
		echo " Pil 2: ";
		echo $output['pil2'];
		echo " Pil 3: ";
		echo $output['pil3'];
		echo "<br>";
	}
}
}
?>
 