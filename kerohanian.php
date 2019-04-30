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
        
        <li class="active">
          <a href="kerohanian.php">
            <i class="fa fa-hand-o-right"></i> <span>Kerohanian</span>
          </a>
        </li>
        <li>
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
        Kerohanian
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.html"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Kerohanian</li>
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
            <form role="form" action="insertkerohanian.php" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label>Nama Interviewer</label>
                  <input type="text" required class="form-control" name="interviewer" placeholder="Nama interviewer">
                </div>

               <!-- INI YG DROP DOWN  -->
             <div class="form-group">
                      <label>NRP - Nama Applicant </label>
    				  <select type="text" class="form-control" id="nrp" name="nrp" placeholder="" onchange="">
              <?php
                include "selectnrp.php";
              for($i=0 ; $i<=$num; $i++){
                echo '<option value='.$data[$i]['nrp'].'>'.$data[$i]['nrp'].' - '.$data[$i]['nama'].' - '.$data[$i]['pil1'].' - '.$data[$i]['pil2'].' - '.$data[$i]['pil3'].'</option>';
              }
              ?>
              </select>
              </div> 
 
                <!-- INI YANG AJAX -->
                <!-- <div class="form-group">
                <label>NRP Applicant</label>
                <input type="text" name="search_txt" placeholder="keyword" id="search-bar" value="">
                <div id="hasil">
                </div>
                <script type="text/javascript" src="js/jquery.min.js"></script>
                <script type="text/javascript">
                  $(document).ready(function(){
                    load_data();

                    function load_data(query)
                    {
                      $.ajax({
                        url:"fetch.php",
                        method:"POST",
                        data:{
                          q:query
                        },
                        success:function(data)
                        {
                          $('#hasil').html(data);
                        }
                      });
                    }
                    $('#search-bar').keyup(function(){
                      var search = $(this).val();
                      if (search != ''){
                        load_data(search);
                      }
                    });
                  });

                </script>
                </div> -->
                  
               
               
                <div class="form-group">
                    <label>Apakah sudah lahir baru?</label>
                    <div class="radio">
                    <!-- VALUE SUDAH 0 -->
                      <label><input type="radio" required name="lahirbaru" value="0" > Sudah<br></label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" name="lahirbaru" value="0"> Belum<br></label>
                    </div>
					<div class="radio">
                      <label><input type="radio" name="lahirbaru" value="0"> Tidak tahu /Tidak mengerti<br></label>
                    </div>
                </div>  
                <div class="form-group">
                  <label>Notes lahir baru</label>
                  <input type="text" class="form-control" name="lahirbarunotes" placeholder="Masukkan catatan bila perlu">
                </div>  
                <div class="form-group">
                  <label>Apa itu saat teduh?</label>
                  <div class="radio">
                      <label><input type="radio" required name="sate" value="3" > Membangun Relasi dengan Tuhan.<br></label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" name="sate" value="2"> Baca Firman Tuhan + Doa.<br></label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" name="sate" value="1"> Tidak Mengerti <br></label>
                    </div>
                </div> 
				<div class="form-group">
                  <label>Bagaimana Kehidupan saat teduhmu?</label>
                  <input type="text" class="form-control" name="satenotes" placeholder="Masukkan catatan mengenai saat teduh yang sedang dijalani Applicant.">
                </div>   
                <div class="form-group">
                  <label>Apa kamu berkomitmen memperbaiki saat teduhmu?</label>
                  <div class="radio">
                      <label><input type="radio" required name="komitsate" value="3" >Ya, saya siap dan berjanji di hadapan Tuhan . / Sudah Rutin bersaat teduh<br></label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" name="komitsate" value="2">Oke, aku usahakan <br></label>
                    </div>
					<div class="radio">
                      <label><input type="radio" name="komitsate" value="1">Masih belum tau<br></label>
                    </div>
                    <!-- NILAI SUDAH 1 -->
                    <div class="radio">
                      <label><input type="radio" name="komitsate" value="1">Tidak, tidak akan memperbaiki saat teduh .<br></label>
                    </div>
                </div> 
                <div class="form-group">
                  <label>Notes saat teduh</label>
                  <input type="text" class="form-control" name="komitsatenotes" placeholder="Masukkan catatan bila perlu">
                </div>
                <div class="form-group">
                  <label>Bagaimana kehidupan KKmu?</label>
                  <div class="radio">
                      <label><input type="radio" required name="kk" value="3" >Aktif dan rutin.<br></label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" name="kk" value="2">Tidak aktif dan tidak jelas.(tantang mau KK lanjut KK tidak)<br></label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" name="kk" value="1">Bubar.(tantang mau KK lanjut KK tidak)<br></label>
                    </div>
                </div>  
                <div class="form-group">
                  <label>Siapa PKKmu saat PIK?</label>
                  <input type="text" required class="form-control" name="pkk" placeholder="Nama PKK.">
                </div>
                <div class="form-group">
                  <label>Apakah selesai sampai bab 8?</label>
                  <input type="text" required class="form-control" name="bab8" placeholder="Selesai sampai bab 8? ">
                </div>
                <div class="form-group">
                  <label>Apakah semua kelompok PIKmu selesai sampai bab 8?</label>
                  <input type="text" required class="form-control" name="semuabab8" placeholder=" Apakah semua selesai sampai bab 8?">
                </div>
                <div class="form-group">
                  <label>Apakah ada temanmu yg tidak mengikuti PIK? Siapa dan Tambahkan alasan!</label>
                  <input type="text" required class="form-control" name="tidakpik" placeholder="AKK yang tidak ikut PIK">
                </div>
                <div class="form-group">
                    <label>Apakah kamu lanjut KK?</label>
                    <div class="radio">
                      <label><input type="radio" required name="lanjutkk" value="Ya" > Ya<br></label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" name="lanjutkk" value="Tidak"> Tidak<br></label>
                    </div>
                </div>   
                <div class="form-group">
                  <label>Siapa PKKmu saat KK?</label>
                  <input type="text" class="form-control" name="pkk_kk" placeholder="Nama PKK saat KK">
                </div>
                <div class="form-group">
                  <label>Sebutkan teman satu KKmu</label>
                  <input type="text" class="form-control" name="temankk" placeholder="Teman KK">
                </div>
                <div class="form-group">
                  <label>Apakah ada pengurangan / penambahan anggota di kelompokmu?</label>
                  <input type="text" class="form-control" name="tambahteman" placeholder="Tambah / kurang teman KK">
                </div>
                <div class="form-group">
                  <label>Sudah mulai KK? Udah ketemu KK berapa kali? (Kumpul dihitung, tidak harus tentang materi)</label>
                  <input type="text" class="form-control" name="ketemukk" placeholder="Ketemu KK setelah PIK">
                </div>
                <div class="form-group">
                  <label>Materi KK sampai BAB berapa?</label>
                  <input type="text" class="form-control" name="babkk" placeholder="BAB KK">
                </div>
                <div class="form-group">
                  <label>Kapan terakhir KK?</label>
                  <input type="text" class="form-control" name="lastkk" placeholder="Terakhir KK">
                </div>
                <div class="form-group">
                  <label>Notes KK</label>
                  <input type="text" class="form-control" name="kknotes" placeholder="Masukkan catatan mengenai KK bila perlu">
                </div>
                <div class="form-group">
                    <label>Apa pendapatmu mengenai pacaran beda agama?</label>
                    <div class="radio">
                      <label><input type="radio" required name="bedaagama" value="1" > Boleh<br></label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" name="bedaagama" value="3"> Tidak boleh<br></label>
                    </div>
                </div>   
                <div class="form-group">
                  <label>Notes Beda Agama</label>
                  <input type="text" class="form-control" name="bedaagamanotes" placeholder="Masukkan penjelasan Applicant mengenai jawaban pacaran beda agama.">
                </div>
                  <div class="form-group">
                    <label>Apa pendapatmu mengenai rokok/electric/sisha/dsb?</label>
                    <div class="radio">
                      <label><input type="radio" required name="rokok" value="1" > Boleh.<br></label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" name="rokok" value="3"> Tidak boleh.<br></label>
                    </div>
                </div>   
                <div class="form-group">
                  <label>Notes Rokok</label>
                  <input type="text" class="form-control" name="rokoknotes" placeholder="Masukkan penjelasan Applicant mengenai Rokok">
                </div>
                  <div class="form-group">
                    <label>Apa pendapatmu mengenai bohong putih/bohong demi kebaikan?</label>
                    <div class="radio">
                      <label><input type="radio" required name="bohong" value="1" > Boleh .<br></label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" name="bohong" value="3"> Tidak boleh. <br></label>
                    </div>
                </div>   
                <div class="form-group">
                  <label>Notes Berbohong Demi Kebaikan</label>
                  <input type="text" class="form-control" name="bohongnotes" placeholder="Masukkan penjelasan Applicant mengenai berbohong demi kebaikan">
                </div>
                  <div class="form-group">
                    <label>Apa pendapatmu mengenai kewajaran dalam pornografi?</label>
                    <div class="radio">
                      <label><input type="radio" required name="pornografi" value="1"> Boleh. <br></label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" name="pornografi" value="3"> Tidak boleh. <br></label>
                    </div>
                </div>   
                <div class="form-group">
                  <label>Notes Kewajaran Pornografi</label>
                  <input type="text" class="form-control" name="pornonotes" placeholder="Masukkan penjelasan Applicant mengenai kewajaran pornografi">
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
      <b>Version</b> 0.0.2
    </div>
    <strong>Copyright &copy; 2018 <a>PKMBK - NAPAS 2018/2019 </a>.</strong> All rights
    reserved.
  </footer>

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<!-- <script type="text/javascript">
  function cari(){
    $.ajax({
      type : 'POST',
      url : 'asd.php',
      complete : function(XHTMLResponse){
        
      }
    })
  }
</script> -->
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
<script>
            $(document).ready(function(e)){
              $("#search").keyup(function())
              {
                $("#here").show();
                var x = $(this).val();
                $.ajax(
                {
                  type:'GET',
                  url:'fetch.php',
                  data:'q='+x,
                  success:function(data)
                  {
                    $(#here).html(data);
                  }
                })
              }
            }
          </script>
</body>
</html>
