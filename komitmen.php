<!-- CATATAN TAMBAHANNYA BELOM YAH -->
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
        <li class="active">
          <a href="komitmen.php">
            <i class="fa fa-heart"></i> <span>Komitmen</span>
          </a>
        </li>
        <li>
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
        Komitmen
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.html"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Komitmen</li>
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
            <form role="form" action="insertkomitmen.php" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label>Nama Interviewer</label>
                  <input type="text" required class="form-control" name="interviewer" placeholder="Nama interviewer">
                </div>
                <div class="form-group">
                  <label>NRP - Nama Applicant</label>
                  <select type="text" class="form-control" id="nrp" name="nrp" placeholder="">
				    <?php
				  	include "selectnrp.php";
					for($i=0 ; $i<=$num; $i++){
						echo '<option value='.$data[$i]['nrp'].'>'.$data[$i]['nrp'].' - '.$data[$i]['nama'].' - '.$data[$i]['pil1'].' - '.$data[$i]['pil2'].' - '.$data[$i]['pil3'].'</option>';
					}
				  ?>
                  </select>
                </div>
                 
                <div class="form-group">
                    <label>Urutan Prioritas</label>
                    <div class="radio">
                      <label><input type="radio" required name="urutanprioritas" value="3" >Akademik - PMK - Ormawa Lain <br></label>
                    </div>
                    <div class="radio">
                      <label><input type="radio"   name="urutanprioritas" value="1">Akademik - Ormawa Lian - PMK<br></label>
                    </div>
                </div>  
                <div class="form-group">
                  <label>Notes Urutan Prioritas</label>
                  <input type="text" class="form-control" name="urutanprioritasnotes" placeholder="Masukkan catatan tentang priortias Applicant">
                </div>  
                <div class="form-group">
                  <label>Apa itu komitmen?</label>
                  <div class="radio">
                      <label><input type="radio" required name="artikomitmen" value="3" >Lebih tinggi dari janji<br></label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" name="artikomitmen" value="2">Komitmen sama dengan janji<br></label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" name="artikomitmen" value="1">Dibawah janji / tidak tahu<br></label>
                    </div>
                </div>  
				    <div class="form-group">
                  <label>Notes Arti Komitmen</label>
                  <input type="text"  class="form-control" name="artikomitmennotes" placeholder="Masukkan catatan bila perlu">
                </div>  
                <div class="form-group">
                  <label>Jika ekspektasi terhadap kepanitian ini tidak seperti yang kamu bayangkan? Apa tindakanmu? Jelaskan semisal ada permasalahan, atau ada sesuatu hal yang membuat Applicant
				  tidak nyaman.</label>
                  <div class="radio">
                      <label><input type="radio"  required name="ekspektasikepanitiaan" value="3" >Saya akan bertahan (Alasan bertahan karena ini merupakan pelayanan)<br></label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" name="ekspektasikepanitiaan" value="2">Saya akan bertahan (Jika applicant mencoba mencari solusi) <br></label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" name="ekspektasikepanitiaan" value="1">Saya tidak akan bertahan (Berhenti) <br></label>
                    </div>
                </div> 
                <div class="form-group">
                  <label>Notes Ekspektasi Kepanitiaan</label>
                  <input type="text" class="form-control" name="ekspektasinotes" placeholder="Masukkan catatan bila perlu">
                </div>
                <div class="form-group">
                  <label>Jika kamu ditempatkan di tempat yang bukan sie pilihan. Bagaimana pendapatmu?</label>
                  <div class="radio">
                      <label><input type="radio" required name="bukansiepilihan" value="3" >Saya akan bertahan (Jika alasan dikarenakan ini merupakan sebuah pelayanan)<br></label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" name="bukansiepilihan" value="2">Saya akan bertahan (Jika alasan dikarenakan solusi lain) <br></label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" name="bukansiepilihan" value="1">Saya akan bertahan daripada tidak ada kegiatan lain (Daripada gabut)<br></label>
                    </div>
					<div class="radio">
                      <label><input type="radio" name="bukansiepilihan" value="0">Saya tidak akan bertahan <br></label>
                    </div>
					
					<div class="form-group">
                  <label>Notes Ditempatkan Sie Lain</label>
                  <input type="text" class="form-control" name="bukansiepilihannotes" placeholder="Masukkan catatan bila perlu">
                </div>
				
                </div>
				
				<div class="form-group">
                  <label>Ketika tidak diterima di panitia, apakah mau terlibat dalam pelayanan di PMKBK/NAPAS?</label>
                  <div class="radio">
                      <label><input type="radio" required name="terlibatpelayanan" value="Ya" >Ya bersedia<br></label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" name="terlibatpelayanan" value="Ragu"> Masih belum tahu. Tidak tahu<br></label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" name="terlibatpelayanan" value="Tidak">Tidak .<br></label>
                    </div>
				<div class="form-group">
                  <label>Notes Pelayanan di PKMBK/NAPAS</label>
                  <input type="text" class="form-control" name="terlibatpelayanannotes" placeholder="Tulis pelayanan bidang apa yang diminati . Contoh : WL, pemusik, tamborin">
                </div>
             
			 <div class="form-group">
                  <label>Akankah ingin mengikuti SBMPTN /Tes ujian masuk ke kampus lain?</label>
                  <div class="radio">
                      <label><input type="radio" required name="teskampus" value="Ya, Akan" >Ya, Akan<br></label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" name="teskampus" value="Ada Rencana">Belum tahu. Ada rencana tes ulang<br></label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" name="teskampus" value="Tidak">Tidak.<br></label>
                    </div>
				<div class="form-group">
                  <label>Notes Tes SBMPTN/ Tes ujian masuk Kampus lain.</label>
                  <input type="text" class="form-control" name="teskampusnotes" placeholder="Tulis informasi tambahan ">
                </div>
                <div class="form-group">
                <label>Jika kamu sedang low motivation di dalam pelayanan ini, apakah yang harus dilakukan untuk menambah motivasimu? Baik dari dirimu sendiri atau orang lain</label>
                <input type="text" class="form-control" name="saranlowmotivation" placeholder="Isikan jawaban applicant">
                </div>
                <div class="form-group">
                <label>Jika kamu tidak diterima di ketiga sie yang kamu inginkan, apakah kamu bersedia untuk ditempatkan di sie lain, misal masuk ke Dana/DPK/PDD? Atau dipindah ke PKMBK ke NaPas dan sebaliknya?</label>
                <input type="text" class="form-control" name="sieyangmau" placeholder="Isikan jawaban applicant">
                </div>
                 <div class="form-group">
                <label>Apabila anda tidak diterima, apakah anda ingin melayani di PMK?</label>
                <input type="text" class="form-control" name="melayanipmk" placeholder="Isikan jawaban applicant">
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
    <strong>Copyright &copy; 2018 <a>PKMBK - NAPAS 2018/2019 </a>.</strong> All rights
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
