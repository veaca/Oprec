<?php
	include "connect.php";
	
	$nrp = $_POST['nrp'];
	$interviewer = $_POST['interviewer'];
	$lahirbaru = $_POST['lahirbaru'];
	$lahirbarunotes = $_POST['lahirbarunotes'];
	$sate = $_POST['sate'];
	$satenotes = $_POST['satenotes'];
	$komitsate = $_POST['komitsate'];
	$komitsatenotes = $_POST['komitsatenotes'];
	$kk = $_POST['kk'];
	$pkk = $_POST['pkk'];
	$bab8 = $_POST['bab8'];
	$semuabab8 = $_POST['semuabab8'];
	$tidakpik = $_POST['tidakpik'];
	$lanjutkk = $_POST['lanjutkk'];
	$pkk_kk = $_POST['pkk_kk'];
	$temankk = $_POST['temankk'];
	$tambahteman = $_POST['tambahteman'];
	$ketemukk = $_POST['ketemukk'];
	$babkk = $_POST['babkk'];
	$lastkk = $_POST['lastkk'];
	$kknotes = $_POST['kknotes'];
	$bedaagama = $_POST['bedaagama'];
	$bedaagamanotes = $_POST['bedaagamanotes'];
	$rokok = $_POST['rokok'];
	$rokoknotes = $_POST['rokoknotes'];
	$bohong = $_POST['bohong'];
	$bohongnotes = $_POST['bohongnotes'];
	$pornografi = $_POST['pornografi'];
	$pornonotes = $_POST['pornonotes'];
	
	
	$query = "UPDATE dataoprec
				SET interviewerkerohanian = '$interviewer',
					lahirbaru = '$lahirbaru',
					lahirbarunotes = '$lahirbarunotes',
					sate = '$sate',
					satenotes = '$satenotes',
					komitsate = '$komitsate',
					komitsatenotes = '$komitsatenotes',
					kk = '$kk',
					pkk = '$pkk',
					bab8 = '$bab8',
					semuabab8 = '$semuabab8',
					tidakpik = '$tidakpik',
					lanjutkk = '$lanjutkk',
					pkk_kk = '$pkk_kk',
					temankk = '$temankk',
					tambahteman = '$tambahteman',
					ketemukk = '$ketemukk',
					babkk = '$babkk',
					lastkk = '$lastkk',
					kknotes = '$kknotes',
					bedaagama = '$bedaagama',
					bedaagamanotes = '$bedaagamanotes',
					rokok = '$rokok',
					rokoknotes = '$rokoknotes',
					bohong = '$bohong',
					bohongnotes = '$bohongnotes',
					pornografi = '$pornografi',
					pornonotes = '$pornonotes'
					
					WHERE nrp = '$nrp'";
	
	if(mysql_query($query)){
		header("Location:kerohanian.php");
		
	}else{
		echo mysql_error();
	}
?>