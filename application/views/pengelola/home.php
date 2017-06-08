
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Dashboard">
        <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

        <title>ADMIN PPID KABUPATEN NGANJUK </title>

        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url() ?>assets/css/bootstrap.css" rel="stylesheet">
        <!--external css-->
        <link href="<?php echo base_url() ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/zabuto_calendar.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/js/gritter/css/jquery.gritter.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/lineicons/style.css">    

        <!-- Custom styles for this template -->
        <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/css/style-responsive.css" rel="stylesheet">

        <script src="<?php echo base_url() ?>assets/js/chart-master/Chart.js"></script>

        <style type="text/css">
            #map{
                width: 800px;
                height: 550px;
                padding-left: 10%; 
            }
            .a{
                float: right;
            }

        </style>
    </head>

    <body>

        <section id="container" >
            <header class="header black-bg">
                <div class="sidebar-toggle-box">
                    <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation">
                    </div>
                </div>
                <!--logo start-->
                <a class="logo"><b>ADMIN PPID KABUPATEN NGANJUK</b></a>
                <!--logo end-->
                <div class="nav notify-row" id="top_menu">
                    <!--  notification start -->
                    <ul class="nav top-menu">
                    </ul>
                    <!--  notification end -->
                </div>
                <div class="top-menu">
                    <ul class="nav pull-right top-menu">
                        <li><a class="logout" href="Login.php">Logout</a></li>
                    </ul>
                </div>
            </header>
            <aside>
                <div id="sidebar"  class="nav-collapse ">
                    <!-- sidebar menu start-->
                    <ul class="sidebar-menu" id="nav-accordion">

                        <p class="centered"><img src="" class="img-circle" width="130"  height="140"></a></p>

                        <li>
                            <a class="active">
                            </a>
                        </li>
                        <li class="mt">
                            <a href="<?php echo base_url('pengelola_ppid') ?>">
                                <i class="fa"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="mt">
                          <a href="<?php echo base_url('pengelola_ppid/info_publik') ?>">
                            <span class="glyphicon glyphicon-files"></span>&nbsp;INFORMASI PUBLIK
                          </a>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;" >
                                <!-- <i></i> -->
                                <span>PERMOHONAN INFORMASI</span>
                            </a>
                            <ul class="sub">
                                <li><a  href="<?php echo base_url('pengelola_ppid/permohonan_perorangan') ?>">PERORANGAN</a></li>
                                <li><a  href="<?php echo base_url('pengelola_ppid/permohonan_badan') ?>">KELOMPOK/BADAN</a></li>
                            </ul>
                        </li>
                        <!-- <li class="sub-menu">
                            <a href="javascript:;" >
                                <i></i>
                                <span>PENGAJUAN KEBERATAN</span>
                            </a>
                            <ul class="sub">
                                <li><a  href="<?php echo base_url('pengelola_ppid/pengajuan_keberatan') ?>">ONLINE</a></li>
                                
                            </ul>
                        </li> -->
                        <li class="sub-menu">
                            <a href="<?php echo base_url('pengelola_ppid/pengajuan_keberatan') ?>" >
                                <!-- <i class="fa"></i> -->
                                  <span>PENGAJUAN KEBERATAN</span>
                            </a>
                        </li>

                        <li class="sub-menu">
                            <a href="<?php echo base_url('pengelola_ppid/tambah_pengguna') ?>" >
                                <!-- <i class="fa"></i> -->
                                  <span>TAMBAH PENGGUNA</span>
                            </a>
                        </li>

                    </ul>
                    <!-- sidebar menu end-->
                </div>
            </aside>
            <!--sidebar end-->

            <fieldset>
                <?php if ((isset($module))AND ( $module == 'info_publik')) { ?>
                    <section id="main-content">
                        <section class="wrapper">
                            <h3><i class="fa fa-angle-right"></i> INFORMASI PUBLIK</h3>
                            <div class="row mt">
                                <div class="col-md-12">
                                    <div class="content-panel">
                                        <h4><i class="fa fa-angle-right"></i>  SERTA MERTA</h4>
                                        <p>&nbsp;<a href="<?php echo base_url('pengelola_ppid/tambah_infopub') ?>" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp;Tambah Data</a></p>
                                        <hr>
                                        <table class="table table-striped table-advance table-hover">
                                            <thead>
                                                <tr>
                                                    <th width="30">No.</th>
                                                    <th width="110">Tgl. Upload</th>
                                                    <th width="70">Isi</th>
                                                    <th>Nama File</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div><!-- /content-panel -->
                                </div><!-- /col-md-12 -->
                            </div><!-- /row -->
                        </section>
                    </section>
                <?php }else if((isset($module))AND($module=='tambah_infopub')){ ?>
                <section id="main-content">
                        <section class="wrapper">
                            <h3><i class="fa fa-angle-right"></i> INFORMASI PUBLIK</h3>
                            <div class="row mt">
                                <div class="col-md-12">
                                    <div class="content-panel">
                                       <form class="form-vertical">
                                       <div class="form-group">
                                         <label>Jenis Informasi</label>
                                         <select class="form-control" name="jenis_infopub">
                                           <option>PIlih Jenis informasi Publik</option>
                                         </select>
                                       </div>
                                         <div class="form-group">
                                           <label>Judul informasi</label>
                                           <input type="text" name="nama_infopub" class="form-control" placeholder="nama informasi">
                                         </div>
                                         <div class="form-group">
                                           <label>Isi informasi</label>
                                           <textarea name="isi_infopub" class="form-control" placeholder="isi informasi"></textarea>
                                         </div>
                                         <div>
                                           <label>File pendukung</label>
                                           <input type="file" name="userfile" class="form-control">
                                         </div>
                                         <div class="form-group">
                                           <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-save">&nbsp;Tambah informasi</span></button>
                                         </div>
                                       </form>
                                    </div><!-- /content-panel -->
                                </div><!-- /col-md-12 -->
                            </div><!-- /row -->
                        </section>
                    </section>
                <?php }else if((isset($module))AND ($module=='permohonan_personal')){?>
                  <section id="main-content">
                        <section class="wrapper">
                            <h3><i class="fa fa-angle-right"></i> Data Permohonan Personal</h3>
                            <div class="row mt">
                                <div class="col-md-12">
                                    <div class="content-panel">
                                        <table class="table table-striped table-advance table-hover">
                                            <!-- <h4><i class="fa fa-angle-right"></i>&nbsp;HOME</h4> -->
                                        </table>
                                        <table class="table table-hover table-striped table-bordered">
                                          <thead>
                                            <tr>
                                              <td>Nama</td>
                                              <td>NIK</td>
                                              <td>Alamat</td>
                                              <td>Nomor Telp</td>
                                              <td>Email</td>
                                              <td>Info yang dibutuhkan</td>
                                              <td>Tujuan</td>
                                              <td>Cara memperoleh</td>
                                              <td>Cara Salinan</td>
                                              <td>Bukti</td>
                                            </tr>
                                          </thead>
                                        </table>
                                    </div><!-- /content-panel -->
                                </div><!-- /col-md-12 -->
                            </div><!-- /row -->
                        </section>
                    </section>
                <?php }else if((isset($module))AND($module=='permohonan_badan')){ ?>
                <section id="main-content">
                        <section class="wrapper">
                            <h3><i class="fa fa-angle-right"></i> Data Permohonan Kelompok / Badan</h3>
                            <div class="row mt">
                                <div class="col-md-12">
                                    <div class="content-panel">
                                        <table class="table table-striped table-advance table-hover">
                                            <!-- <h4><i class="fa fa-angle-right"></i>&nbsp;HOME</h4> -->
                                        </table>
                                        <table class="table table-hover table-striped table-bordered">
                                          <thead>
                                            <tr>
                                              <td>Nama</td>
                                              <td>Nomor Badan</td>
                                              <td>Alamat</td>
                                              <td>Nomor Telp</td>
                                              <td>Email</td>
                                              <td>Info yang dibutuhkan</td>
                                              <td>Tujuan</td>
                                              <td>Cara memperoleh</td>
                                              <td>Cara Salinan</td>
                                              <td>Bukti</td>
                                            </tr>
                                          </thead>
                                        </table>
                                    </div><!-- /content-panel -->
                                </div><!-- /col-md-12 -->
                            </div><!-- /row -->
                        </section>
                    </section>
                <?php }else if((isset($module))AND($module=='pengajuan_keberatan')){ ?>
                <section id="main-content">
                        <section class="wrapper">
                            <h3><i class="fa fa-angle-right"></i> Data Pengajuan Keberatan</h3>
                            <div class="row mt">
                                <div class="col-md-12">
                                    <div class="content-panel">
                                        <table class="table table-striped table-advance table-hover">
                                            <!-- <h4><i class="fa fa-angle-right"></i>&nbsp;HOME</h4> -->
                                        </table>
                                        <table class="table table-hover table-striped table-bordered">
                                          <thead>
                                            <tr>
                                              <td>Nama Pengaju</td>
                                              <td>Alamat Pengaju</td>
                                              <td>Nomor Telp Pengaju</td>
                                              <td>Email</td>
                                              <td>Alasan Pengajuan</td>
                                              <td>Tanggal</td>
                                            </tr>
                                          </thead>
                                        </table>
                                    </div><!-- /content-panel -->
                                </div><!-- /col-md-12 -->
                            </div><!-- /row -->
                        </section>
                    </section>
                <?php }else if((isset($module))AND ($module=='pengguna_baru')){ ?>
                <section id="main-content">
                        <section class="wrapper">
                            <h3><i class="fa fa-angle-right"></i> Pengguna baru</h3>
                            <div class="row mt">
                                <div class="col-md-12">
                                    <div class="content-panel">
                                        <table class="table table-striped table-advance table-hover">
                                            <h4><i class="glyphicon glyphicon-user"></i></h4>
                                        </table>
                                        <form class="form-horizontal">
                                              <div class="form-group">
                                                <label class="col-md-2 control-label ">Nama Pengguna</label>
                                                <div class="col-md-6">
                                                  <input type="text" name="nama_penggunabaru" class="form-control" placeholder="nama lengkap pengguna">
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                <label class="col-md-2 control-label ">Alamat Pengguna</label>
                                                <div class="col-md-6">
                                                  <textarea name="alamat_penggunabaru" class="form-control"></textarea>
                                                </div>
                                              </div>
                                            </form>
                                    </div><!-- /content-panel -->
                                </div><!-- /col-md-12 -->
                            </div><!-- /row -->
                        </section>
                    </section>
                <?php } else { ?>
                    <section id="main-content">
                        <section class="wrapper">
                            <h3><i class="fa fa-angle-right"></i> WELCOME TO DASHBOARD PPID KABUPATEN NGANJUK</h3>
                            <div class="row mt">
                                <div class="col-md-12">
                                    <div class="content-panel">
                                        <table class="table table-striped table-advance table-hover">
                                            <h4><i class="fa fa-angle-right"></i>  HOME</h4>
                                        </table>
                                    </div><!-- /content-panel -->
                                </div><!-- /col-md-12 -->
                            </div><!-- /row -->
                        </section>
                    </section>
                <?php } ?>
                <?php 
                unset($module) ?>
            </fieldset>

            <!-- js placed at the end of the document so the pages load faster -->
            <script src="<?php echo base_url() ?>assets/js/jquery.js"></script>
            <script src="<?php echo base_url() ?>assets/js/jquery-1.8.3.min.js"></script>
            <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
            <script class="include" type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.dcjqaccordion.2.7.js"></script>
            <script src="<?php echo base_url() ?>assets/js/jquery.scrollTo.min.js"></script>
            <script src="<?php echo base_url() ?>assets/js/jquery.nicescroll.js" type="text/javascript"></script>
            <script src="<?php echo base_url() ?>assets/js/jquery.sparkline.js"></script>


            <!--common script for all pages-->
            <script src="<?php echo base_url() ?>assets/js/common-scripts.js"></script>

            <!--script for this page-->
            <script src="<?php echo base_url() ?>assets/js/sparkline-chart.js"></script>    
            <script src="<?php echo base_url() ?>assets/js/zabuto_calendar.js"></script>     
    </body>
</html>
