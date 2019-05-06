<?php
	include "connect.php";
	
	$nrp = $_POST['nrp'];
	$interviewer = $_POST['interviewer'];
	// $lahirbaru = $_POST['lahirbaru'];
	// $lahirbarunotes = $_POST['lahirbarunotes'];
	$sate = $_POST['sate'];
	$satenotes = $_POST['satenotes'];
	$tanyasate = $_POST['tanyasate'];
	$tanyasatenotes = $_POST['tanyasatenotes'];
	$komitsate = $_POST['komitsate'];
	$komitsatenotes = $_POST['komitsatenotes'];
	$persekutuan = $_POST['persekutuan'];
	$persekutuannotes = $_POST['persekutuannotes'];
	$hiduppersekutuan = $_POST['hiduppersekutuan'];
	$hiduppersekutuannotes = $_POST['hiduppersekutuannotes'];
	$kk = $_POST['kk'];
	// $pkk = $_POST['pkk'];
	// $bab8 = $_POST['bab8'];
	// $semuabab8 = $_POST['semuabab8'];
	// $tidakpik = $_POST['tidakpik'];
	// $lanjutkk = $_POST['lanjutkk'];
	// $pkk_kk = $_POST['pkk_kk'];
	// $temankk = $_POST['temankk'];
	// $tambahteman = $_POST['tambahteman'];
	// $ketemukk = $_POST['ketemukk'];
	// $babkk = $_POST['babkk'];
	// $lastkk = $_POST['lastkk'];
	// $kknotes = $_POST['kknotes'];
	$bedaagama = $_POST['bedaagama'];
	$bedaagamanotes = $_POST['bedaagamanotes'];
	$rokok = $_POST['rokok'];
	$rokoknotes = $_POST['rokoknotes'];
	$bohong = $_POST['bohong'];
	$bohongnotes = $_POST['bohongnotes'];
	$pornografi = $_POST['pornografi'];
	$pornonotes = $_POST['pornonotes'];
	$promelayani = $_POST['promelayani'];
	$rendahhati = $_POST['rendahhati'];
	$rendahhatinotes = $_POST['rendahhatinotes'];
	$denominasi = $_POST['denominasi'];
	$denominasinotes = $_POST['denominasinotes'];
	
	$query = "UPDATE dataoprec
				SET interviewerkerohanian = '$interviewer',
					sate = '$sate',
					satenotes = '$satenotes',
					tanyasate = '$tanyasate',
					tanyasatenotes = '$tanyasatenotes',
					komitsate = '$komitsate',
					komitsatenotes = '$komitsatenotes',
					persekutuan = '$persekutuan',
					persekutuannotes = '$persekutuannotes',
					hiduppersekutuan = '$hiduppersekutuan',
					hiduppersekutuannotes = '$hiduppersekutuannotes',
					kk = '$kk',
					bedaagama = '$bedaagama',
					bedaagamanotes = '$bedaagamanotes',
					rokok = '$rokok',
					rokoknotes = '$rokoknotes',
					bohong = '$bohong',
					bohongnotes = '$bohongnotes',
					pornografi = '$pornografi',
					pornonotes = '$pornonotes',
					promelayani = '$promelayani',
					rendahhati = '$rendahhati',
					rendahhatinotes = '$rendahhatinotes',
					denominasi = '$denominasi',
					denominasinotes = '$denominasinotes'


					WHERE nrp = '$nrp'";
	
	if(mysql_query($query)){
		header("Location:kerohanian.php");
		
	}else{
		echo mysql_error();
	}
?>