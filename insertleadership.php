<?php
	include "connect.php";
	
	$nrp = $_POST['nrp'];
	$interviewer = $_POST['interviewer'];
	$skilltidaksesuai = $_POST['skilltidaksesuai'];
	$skilltidaksesuainotes = $_POST['skilltidaksesuainotes'];
	$artipemimpin = $_POST['artipemimpin'];
	$artipemimpinnotes = $_POST['artipemimpinnotes'];
	$kesalahanbesar = $_POST['kesalahanbesar'];
	$kesalahanbesarnotes = $_POST['kesalahanbesarnotes'];
	$memilihorang = $_POST['memilihorang'];
	$memilihorangnotes = $_POST['memilihorangnotes'];
	
	$query = "UPDATE dataoprec
				SET interviewerleadership = '$interviewer',
					skilltidaksesuai = '$skilltidaksesuai',
					skilltidaksesuainotes = '$skilltidaksesuainotes',
					artipemimpin = '$artipemimpin',
					artipemimpinnotes = '$artipemimpinnotes',
					kesalahanbesar = '$kesalahanbesar',
					kesalahanbesarnotes = '$kesalahanbesarnotes',
					memilihorang = '$memilihorang',
					memilihorangnotes = '$memilihorangnotes'
					WHERE nrp = '$nrp'";
	
	if(mysql_query($query)){
		header("Location:leadership.php");
		
	}else{
		echo mysql_error();
	}
?>