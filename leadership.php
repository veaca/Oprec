<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Oprec Kepanitiaan</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>P</b>MK</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>PKMBK</b>NAPAS</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="index.html">
            <i class="fa fa-home"></i> <span>Panduan</span>
          </a>
        </li>
        
        <li>
          <a href="kerohanian.php">
            <i class="fa fa-hand-o-right"></i> <span>Kerohanian</span>
          </a>
        </li>
        <li>
          <a href="komitmen.php">
            <i class="fa fa-heart"></i> <span>Komitmen</span>
          </a>
        </li>
        <li class="active">
          <a href="leadership.php">
            <i class="fa fa-user"></i> <span>Leadership</span>
          </a>
        </li>
        <li>
          <a href="skill.php">
            <i class="fa fa-star"></i> <span>Skill</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Leadership
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.html"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Leadership</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
           <div class="col-md-2"></div>
          <div class="col-md-8">
          <div class="box box-primary">
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="insertleadership.php" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label>Nama Interviewer</label>
                  <input type="text" required class="form-control" name="interviewer" placeholder="Nama interviewer">
                </div>
                <div class="form-group">
                  <label>NRP - Nama Applicant</label>
                  <select type="text" class="form-control" id="nrp" name="nrp" placeholder="Nama interviewer">
				  <?php
				  	include "selectnrp.php";
					for($i=0 ; $i<=$num; $i++){
						echo '<option value='.$data[$i]['nrp'].'>'.$data[$i]['nrp'].' - '.$data[$i]['nama'].' - '.$data[$i]['pil1'].' - '.$data[$i]['pil2'].' - '.$data[$i]['pil3'].'</option>';
					}
				  ?>
                  </select>
                </div>
                
                <div class="form-group">
                    <label>Apa yang kamu lakukan ketika skill yang kamu punya tidak sesuai dengan pekerjaan yang diberikan</label>
                    <div class="radio">
                      <label><input type="radio" required name="skilltidaksesuai" value="1" >Menolak pekerjaan tersebut<br></label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" name="skilltidaksesuai" value="2">Menolak dengan memberi alasan dan merekomendasikan ke orang lain<br></label>
                    </div>
					<div class="radio">
                      <label><input type="radio" name="skilltidaksesuai" value="3">Menerima tapi tidak mau menjadi PIC / penanggung jawab/ hanya bantu - bantu saja <br></label>
                    </div>
					<div class="radio">
                      <label><input type="radio" name="skilltidaksesuai" value="4">Mengambil pekerjaan itu tapi melakukannya dengan anggapan yang penting pekerjaan tersebut selesai<br></label>
                    </div>
					<div class="radio">
                      <label><input type="radio" name="skilltidaksesuai" value="5">Mengambil pekerjaan tersebut melakukan dengan sepenuh hati berusaha dan belajar (bertanya ke yang lain) dan bekerja untuk hasil yang maksimal<br></label>
                    </div>
                </div>  
                <div class="form-group">
                  <label>Notes Skill Tidak Sesuai</label>
                  <input type="text" class="form-control" name="skilltidaksesuainotes" placeholder="Masukkan catatan bila perlu">
                </div>  

                <div class="form-group">
                    <label>Sebutkan 3 kriteria yang harus dimiliki seorang pemimpin</label>
                    <label>BAGIAN INI TIDAK DIBACAKAN -> Nilai : mengayomi/merangkul, mempunyai visi, bertanggung jawab, dapat mengambil keputusan, pengendalian diri</label>
                    <div class="radio">
                      <label><input type="radio" required name="leaderkriteria" value="1" >menyebutkan 1 dari 5 nilai<br></label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" name="leaderkriteria" value="2">menyebutkan 2 dari 5 nilai<br></label>
                    </div>
				          	<div class="radio">
                      <label><input type="radio" name="leaderkriteria" value="3">menyebutkan 3 dari 5 nilai <br></label>
                    </div>
                </div>  
                <div class="form-group">
                  <label>notes kriteria pemimpin</label>
                  <input type="text" class="form-control" name="leaderkriterianotes" placeholder="Masukkan catatan bila perlu">
                </div>  

                <div class="form-group">
                  <label>Semisal suatu saat, kamu melakukan kesalahan yang fatal sehingga membuat semua anak satu sie mu memarahi bahkan mungkin membencimu, apa yang akan kamu lakukan?</label>
                  <div class="radio">
                      <label><input type="radio" required name="kesalahanbesar" value="1" >Terpaksa saya harus mundur<br></label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" name="kesalahanbesar" value="3">Yang penting saya minta maaf, dan melakukan tugas saya<br></label>
                    </div>
					<div class="radio">
                      <label><input type="radio" name="kesalahanbesar" value="5">Saya akan meminta maaf dan berjuang mengembalikan kepercayaan mereka<br></label>
                    </div>
                    
                </div> 
                <div class="form-group">
                  <label>Notes Kesalahan Besar</label>
                  <input type="text" class="form-control" name="kesalahanbesarnotes" placeholder="Masukkan catatan bila perlu">
                </div>
                <div class="form-group">
                  <label>Jika kamu menjadi pemimpin, siapakah yang akan kamu pilih, orang yang dekat (kamu percaya) atau orang yang memiliki track record baik (bisa bekerja)?</label>
                  <div class="radio">
                      <label><input type="radio" required name="memilihorang" value="Bisa dipercaya" >Memilih orang yang bisa dipercaya<br></label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" name="memilihorang" value="Bisa bekerja">Memilih orang yang bisa bekerja<br></label>
                    </div>
                    <div class="form-group">
                  <label>Notes Memilih Orang</label>
                  <input type="text" class="form-control" name="memilihorangnotes" placeholder="Masukkan catatan bila perlu">
                </div>
                </div>

                <div class="form-group">
                  <label>Jika suatu saat, ternyata pemimpinmu tidak melakukan tugasnya dengan baik sehingga mengakibatkan banyak staff yang ogah-ogahan, apa yang kamu lakukan untuk mengatasi itu?</label>
                  <div class="radio">
                      <label><input type="radio" required name="pemimpinhilang" value="5" >Tetap semangat, dan membantu mencari teman yang hilang<br></label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" name="pemimpinhilang" value="3">Yang penting tugas saya selesai<br></label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" name="pemimpinhilang" value="1">Saya tidak tahu, tidak berani handle<br></label>
                    </div>
                    <div class="form-group">
                  <label>Notes Pemimpin Hilang</label>
                  <input type="text" class="form-control" name="pemimpinhilangnotes" placeholder="Masukkan catatan bila perlu">
                </div>
                </div>
             
			  
               
             
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="reset" class="btn btn-default">Reset</button>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-2"></div>
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 0.0.1
    </div>
    <strong>Copyright &copy; 2018 <a>PKMBK NAPAS 2018/2019</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
