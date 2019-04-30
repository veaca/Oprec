<?php
	include "connect.php";
	
	$nrp = $_POST['nrp'];
	$interviewer = $_POST['interviewer'];
	$urutanprioritas = $_POST['urutanprioritas'];
	$urutanprioritasnotes = $_POST['urutanprioritasnotes'];
	$artikomitmen = $_POST['artikomitmen'];
	$artikomitmennotes = $_POST['artikomitmennotes'];
	$ekspektasikepanitiaan = $_POST['ekspektasikepanitiaan'];
	$ekspektasikepanitiaannotes = $_POST['ekspektasinotes'];
	$bukansiepilihan = $_POST['bukansiepilihan'];
	$bukansiepilihannotes = $_POST['bukansiepilihannotes'];
	
	$terlibatpelayanan = $_POST['terlibatpelayanan'];
	$terlibatpelayanannotes = $_POST['terlibatpelayanannotes'];
	$teskampus = $_POST['teskampus'];
	$teskampusnotes = $_POST['teskampusnotes'];
	$saranlowmotivation = $_POST['saranlowmotivation'];
	$sieyangmau = $_POST['sieyangmau'];
	$melayanipmk = $_POST['melayanipmk'];
	
	$query = "UPDATE dataoprec
				SET interviewerkomitmen = '$interviewer',
					urutanprioritas = '$urutanprioritas',
					urutanprioritasnotes = '$urutanprioritasnotes',
					artikomitmen = '$artikomitmen',
					artikomitmennotes = '$artikomitmennotes',
					ekspektasikepanitiaan = '$ekspektasikepanitiaan',
					ekspektasinotes = '$ekspektasikepanitiaannotes',
					bukansiepilihan = '$bukansiepilihan',
					bukansiepilihannotes = '$bukansiepilihan',
					terlibatpelayanan = '$terlibatpelayanan',
					terlibatpelayanannotes = '$terlibatpelayanannotes',
					teskampus = '$teskampus',
					teskampusnotes = '$teskampusnotes',
					saranlowmotivation = '$saranlowmotivation',
					sieyangmau = '$sieyangmau',
					melayanipmk = '$melayanipmk'
					WHERE nrp = '$nrp'";
	
	if(mysql_query($query)){
		header("Location:komitmen.php");
		
	}else{
		echo mysql_error();
	}
?>