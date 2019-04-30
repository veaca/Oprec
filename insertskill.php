<?php
	include "connect.php";
	
	$nrp = $_POST['nrp'];
	$interviewer = $_POST['interviewer'];
	$dampakpanitia = $_POST['dampakpanitia'];
	$notesdampak = $_POST['notesdampak'];
	$case1 = $_POST['case1'];
	$case1notes = $_POST['case1notes'];
	$case2 = $_POST['case2'];
	$case2notes = $_POST['case2notes'];
	$case3 = $_POST['case3'];
	$case3notes = $_POST['case3notes'];
	$tinggaldimana = $_POST['tinggaldimana'];
	$bagaimanakekampus = $_POST['bagaimanakekampus'];
	$pengalamanorganisasi = $_POST['pengalamanorganisasi'];
	$pelayanan = $_POST['pelayanan'];
	$pelayanannotes = $_POST['pelayanannotes'];
	$notesacaranapas = $_POST['notesacaranapas'];
	
	$query = "UPDATE dataoprec
				SET interviewerskill = '$interviewer',
					dampakpanitia = '$dampakpanitia',
					notesdampak = '$notesdampak',
					case1 = '$case1',
					case1notes = '$case1notes',
					case2 = '$case2',
					case2notes = '$case2notes',
					case3 = '$case3',
					case3notes = '$case3notes',
					tinggaldimana = '$tinggaldimana',
					bagaimanakekampus = '$bagaimanakekampus',
					pengalamanorganisasi = '$pengalamanorganisasi',
					pelayanan = '$pelayanan',
					pelayanannotes = '$pelayanannotes',
					notesacaranapas = '$notesacaranapas'
					
					
					WHERE nrp = '$nrp'";
	
	if(mysql_query($query)){
		header("Location:skill.php");
		
	}else{
		echo mysql_error();
	}
?>