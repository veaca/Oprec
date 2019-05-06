<?php
	include "connect.php";
	
	$nrp = $_POST['nrp'];
	$interviewer = $_POST['interviewer'];
	$skilltidaksesuai = $_POST['skilltidaksesuai'];
	$skilltidaksesuainotes = $_POST['skilltidaksesuainotes'];
	$leaderkriteria = $_POST['leaderkriteria'];
	$leaderkriterianotes = $_POST['leaderkriterianotes'];
	$kesalahanbesar = $_POST['kesalahanbesar'];
	$kesalahanbesarnotes = $_POST['kesalahanbesarnotes'];
	$memilihorang = $_POST['memilihorang'];
	$memilihorangnotes = $_POST['memilihorangnotes'];
	$pemimpinhilang = $_POST['pemimpinhilang'];
	$pemimpinhilangnotes = $_POST['pemimpinhilangnotes'];
	
	$query = "UPDATE dataoprec
				SET interviewerleadership = '$interviewer',
					skilltidaksesuai = '$skilltidaksesuai',
					skilltidaksesuainotes = '$skilltidaksesuainotes',
					leaderkriteria = '$leaderkriteria',
					leaderkriterianotes = '$leaderkriterianotes',
					kesalahanbesar = '$kesalahanbesar',
					kesalahanbesarnotes = '$kesalahanbesarnotes',
					memilihorang = '$memilihorang',
					memilihorangnotes = '$memilihorangnotes',
					pemimpinhilang = '$pemimpinhilang',
					pemimpinhilangnotes = '$pemimpinhilangnotes'
					WHERE nrp = '$nrp'";
	
	if(mysql_query($query)){
		header("Location:leadership.php");
		
	}else{
		echo mysql_error();
	}
?>