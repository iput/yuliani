<!DOCTYPE html>
<html lang="en">
<head>
  <title>PPID Kabupaten Nganjuk</title>
  <link rel="icon" type="image/png" href="<?php echo base_url() ?>images//nganjuk.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/css/bootstrap-theme.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .headline{
      font:12px/14px "Trebuchet MS", Arial, Helvetica, sans-serif; color:#7c0914; font-weight:bold}

    .news {margin-bottom:20px}
    .news h2{height:28px; position:relative; margin-bottom:12px}
    .news p{margin-bottom:10px}

    .dropdown-submenu {
    position: relative;
    }

    .dropdown-submenu .dropdown-menu {
        top: 0;
        left: 100%;
        margin-top: -1px;
    }

    .navbar-br,
    .navbar-na > li > a {
      text-shadow: 0 1px 0 rgba(200, 200, 200, .25);
    }
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-br" href="#"><img src="<?php echo base_url() ?>images//log.png" width="150" height="50" alt="" title=""></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo base_url('landing') ?>">Beranda</a></li>
        
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Profil
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url('landing/latar_belakang') ?>">Latar Belakang</a></li>
            <li><a href="<?php echo base_url('landing/organisasi_ppid') ?>">Susunan Organisasi PPID</a></li>
            <li><a href="<?php echo base_url('landing/Kedudukan') ?>">Kedudukan & Penunjukan PPID</a></li>
            <li><a href="<?php echo base_url('landing/tugas_fungsi') ?>">Tugas & Fungsi PPID</a></li>
          
          </ul>
        </li>
        <li class="dropdown">
          <a class="test" data-toggle="dropdown" href="#">Informasi Publik
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url('landing/setiap_saat') ?>">Informasi Setiap Saat</a></li>
            <li><a href="<?php echo base_url('landing/berkala') ?>">Informasi Berkala</a></li>
            <li><a href="<?php echo base_url('landing/serta_merta') ?>">Informasi Serta Merta</a></li>
            <li><a href="<?php echo base_url('landing/dikecualikan') ?>">Informasi Dikecualikan</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Alur Informasi
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url('landing/get_informasi') ?>">Tata Cara Memperoleh Informasi</a></li>
            <li><a href="<?php echo base_url('landing/kirim_keberatan') ?>">Tata Cara Mengajukan Keberatan</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Permohonan Informasi
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url('landing/download_permohonan') ?>">Download Form Permohonan Informasi</a></li>
            <li class="dropdown">
              <a class="test" href="<?php echo base_url('landing/permohonan_personal') ?>">Form Permohonan Informasi</a>
            </li>
            
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Pengajuan Keberatan
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url('landing/download_keberatan') ?>">Download Form Pengajuan Keberatan</a></li>
            <li><a href="<?php echo base_url('landing/pengajuan_keberatan')?>">Form Pengajuan Keberatan</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">PPID Pembantu
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li class="dropdown-submenu">
              <a class="test" href="#">Sekretariat Daerah <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Sekretaris Daerah</a></li>
                <li><a href="#">Asisten Perekonomian & Pembangunan</a></li>
                <li><a href="#">Asisten Pemeritahan & Kesra</a></li>
                <li><a href="#">Asisten Administrasi Umum</a></li>
                <li><a href="#">Sekretaris DPRD</a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" href="#">Badan & Inspektorat<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Badan Perancangan & Pembangunan Daerah</a></li>
                <li><a href="#">Badan Kepegawaian Daerah</a></li>
                <li><a href="#">Badan Pemberdayaan Masyarakat & Pemerintahan Desa</a></li>
                <li><a href="#">Badan Pemberdayaan Perempuan & KB</a></li>
                <li><a href="#">Badan Pelayanan Perijinan Terpadu</a></li>
                <li><a href="#">Badan Penanggulangan Bencana Daerah</a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" href="#">Dinas Daerah<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Dinas Kesehatan</a></li>
                <li><a href="#">Dinas Pendidikan Pemuda & Olahraga</a></li>
                <li><a href="#">Dinas Kehutanan</a></li>
                <li><a href="#">Dinas Pendapatan Pengelolaan Keuangan & Aset</a></li>
                <li><a href="#">Dinas Peternakan & Perikanan</a></li>
                <li><a href="#">Dinas Pertanian</a></li>
                <li><a href="#">Dinas Perindustrian Perdagangan Koperasi Pertambangan & Energi</a></li>
                <li><a href="#">Dinas PU Pengairan</a></li>
                <li><a href="#">Dinas PU Cipta Karya & Tata Ruang</a></li>
                <li><a href="#">Dinas PU Bina Marga</a></li>
                <li><a href="#">Dinas Kebudayaan & Pariwisata</a></li>
                <li><a href="#">Dinas Kependudukan & Catatan Sipil</a></li>
                <li><a href="#">Dinas Perhubungan</a></li>
                <li><a href="#">Dinas Komunikasi & Informatika</a></li>
                <li><a href="#">Dinas Sosial Tenaga Kerja & Transmigrasi</a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" href="#">Rumah Sakit & Puskesmas<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">RSUD Nganjuk</a></li>
                <li><a href="#">RSUD Kertosono</a></li>
                <li><a href="#">Rumah Sakit di Nganjuk</a></li>
                <li><a href="#">Daftar Dokter di Puskesmas</a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" href="#">Kantor & Satuan<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Kantor Ketahanan Pangan</a></li>
                <li><a href="#">Kantor Kesbangpolinmas</a></li>
                <li><a href="#">Kantor Perpustakaan & Arsip Daerah</a></li>
                <li><a href="#">Kantor Lingkungan Hidup</a></li>
                <li><a href="#">Satuan Polisi Pamong Praja</a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" href="#">Kecamatan<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="http://www2.nganjukkab.go.id/?page_id=849">Kecamatan Bagor</a></li>
                <li><a href="http://www2.nganjukkab.go.id/?page_id=227">Kecamatan Baron</a></li>
                <li><a href="http://www2.nganjukkab.go.id/?page_id=216">Kecamatan Berbek</a></li>
                <li><a href="http://www2.nganjukkab.go.id/?page_id=225">Kecamatan Kertosono</a></li>
                <li><a href="http://www2.nganjukkab.go.id/?page_id=223">Kecamatan Loceret</a></li>
                <li><a href="http://www2.nganjukkab.go.id/?page_id=202">Kecamatan Nganjuk</a></li>
                <li><a href="http://www2.nganjukkab.go.id/?page_id=220">Kecamatan Ngetos</a></li>
                <li><a href="http://www2.nganjukkab.go.id/?page_id=229">Kecamatan Ngronggot</a></li>
                <li><a href="http://www2.nganjukkab.go.id/?page_id=212">Kecamatan Pace</a></li>
                <li><a href="http://www2.nganjukkab.go.id/?page_id=231">Kecamatan Patianrowo</a></li>
                <li><a href="http://www2.nganjukkab.go.id/?page_id=214">Kecamatan Prambon</a></li>
                <li><a href="http://www2.nganjukkab.go.id/?page_id=218">Kecamatan Sawahan</a></li>
                <li><a href="http://www2.nganjukkab.go.id/?page_id=208">Kecamatan Sukomoro</a></li>
                <li><a href="http://www2.nganjukkab.go.id/?page_id=210">Kecamatan Tanjunganom</a></li>
                <li><a href="http://www2.nganjukkab.go.id/?page_id=204">Kecamatan Wilangan</a></li>
                <li><a href="http://www2.nganjukkab.go.id/?page_id=862">Kecamatan Rejoso</a></li>
                <li><a href="http://www2.nganjukkab.go.id/?page_id=868">Kecamatan Gondang</a></li>
                <li><a href="http://www2.nganjukkab.go.id/?page_id=871">Kecamatan Ngluyu</a></li>
                <li><a href="http://www2.nganjukkab.go.id/?page_id=873">Kecamatan Lengkong</a></li>
                <li><a href="http://www2.nganjukkab.go.id/?page_id=881">Kecamatan Jatikalen</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <!-- <li><a href="galeri.php">Galeri</a></li> -->
        <li><a href="<?php echo  base_url('landing/kontak_kami') ?>">Kontak Kami</a></li>
      </ul>

    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
  <div class="container">
  <!--Start Carousel-->
  <div id="myCarousel" class="carousel slide">
    <div class="carousel-inner">
      <div class="item active"> <img src="<?php echo base_url() ?>images//berdaya.jpg" alt="Image">
        <div class="carousel-caption">
          
        </div>
      </div>
      <div class="item"> <img src="<?php echo base_url() ?>images//slider_nus.jpg" alt="Image">
        <div class="carousel-caption">
        </div>
      </div>
      <div class="item"> <img src="<?php echo base_url() ?>images//yes.png" alt="Image">
        <div class="carousel-caption">
        </div>
      </div>
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div class="text-left"><br>
  <div class="row">
    <?php if ((isset($module))AND($module=='latar_belakang')) {?>
    <div class="col-sm-8 well"> 
      <div>
        <h2 class="text-center title">Latar Belakang</h2><br>
              <ul>
              </ul> 
      </div>
    </div>
    <?php } else if((isset($module))AND ($module=='organisasi_ppid')){ ?>
    <div class="col-sm-8 well"> 
      <div>
        <h2 class="text-center title">Struktur organisasi PPID</h2><br>
              <ul>
              </ul> 
      </div>
    </div>
    <?php }else if((isset($module))AND ($module=='Kedudukan_ppid')){ ?>
    <div class="col-sm-8 well"> 
      <div>
        <h2 class="text-center title">Kedudukan Organisasi PPID</h2><br>
          <ul></ul> 
      </div>
    </div>
    <?php }else if((isset($module))AND($module=='tugas_fungsi')){ ?>
    <div class="col-sm-8 well"> 
      <div>
        <h2 class="text-center title">Tugas fungsi PPID</h2><br>
          <ul></ul> 
      </div>
    </div>
    <?php }else if((isset($module))AND($module=='setiap_saat')){ ?>
    <div class="col-sm-8 well"> 
      <div>
        <h2 class="text-center title">Informasi Setiap saat</h2><br>
          <ul></ul>

      </div>
    </div>
    <?php }else if((isset($module))AND($module=='berkala')){ ?>
    <div class="col-sm-8 well"> 
      <div>
        <h2 class="text-center title">Informasi Berkala</h2><br>
          <ul></ul> 
      </div>
    </div>
    <?php } else if((isset($module))AND($module=='serta_merta')){ ?>
    <div class="col-sm-8 well"> 
      <div>
        <h2 class="text-center title">Informasi Serta Merta</h2><br>
          <ul></ul> 
      </div>
    </div>
    <?php } else if((isset($module))AND($module=='dikecualikan')){ ?>
    <div class="col-sm-8 well"> 
      <div>
        <h2 class="text-center title">Informasi Dikecualikan</h2><br>
          <ul></ul> 
      </div>
    </div>
    <?php }else if((isset($module))AND ($module=='get_informasi')){ ?>
    <div class="col-sm-8 well"> 
      <div>
        <h2 class="text-center title">Download Informasi</h2><br>
          <ul></ul> 
          <img src="<?php echo base_url('images/permohonan-informasi.jpg') ?>" style="width:650px;height:1000px;">
      </div>
    </div>
    <?php }else if((isset($module))AND ($module=='kirim_keberatan')){ ?>
    <div class="col-sm-8 well"> 
      <div>
        <h2 class="text-center title">Kirim Pengajuan Keberatan</h2><br>
          <ul></ul>
          <img src="<?php echo base_url('images/pengajuan-keberatan.jpg') ?>" style="width:650px;height:1000px;">
      </div>
    </div>
    <?php }else if((isset($module))AND ($module=='download_permohonan')){ ?>
    <div class="col-sm-8 well"> 
      <div>
        <h2 class="text-center title">Menu Download permohonan</h2><br>
          <ul></ul>
      </div>
    </div>
    <?php }else if((isset($module))AND ($module=='permohonan_personal')){ ?>
    <div class="col-sm-8 well"> 
      <div>
        <h2 class="text-center title">Menu permohonan</h2><br>
        <div class="alert alert-success" style="display: none;"></div>
          <ul></ul>
          <form class="form-vertical" action="<?php echo base_url('landing/tambahPermohonan') ?>" method="POST">
            <div class="form-group">
              <label>Nama</label>
              <input type="text" name="nama_pemohon" class="form-control" placeholder="masukan nama anda">
            </div>
            <div class="form-group">
              <label>NIK</label>
              <input type="text" name="nik_pemohon" class="form-control" placeholder="NIK anda">
            </div>
            <div class="form-group">
              <label>Alamat</label>
              <textarea class="form-control" name="alamat_pemohon"></textarea>
            </div>
            <div class="form-group">
              <label>Nomor Telepon</label>
              <input type="text" name="telp_pemohon" class="form-control" placeholder="Masukan nomor aktif">
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" name="email_pemohon" class="form-control" placeholder="masukan email anda">
            </div>
            <div class="form-group">
              <label>Kategori Pemohon</label>
              <select class="form-control" name="kategori_pemohon">
                <option>PIlih Kategori Pemohon</option>
                <option value="personal">Perorangan</option>
                <option value="kelompok">Kelompok/Badan</option>
              </select>
            </div>
            <div class="form-group">
              <label>Informasi yang diinginkan</label>
              <input type="text" name="info_diinginkan_pemohon" class="form-control" placeholder="masukan informasi yang anda perlukan">
            </div>
            <div class="form-group">
              <label>Tujuan Mengajukan informasi</label>
              <textarea class="form-control" name="tujuan_pemohon"></textarea>
            </div>
            <div class="form-group">
              <label>Cara Memperoleh</label>
              <select class="form-control" name="cara_peroleh_pemohon">
                <option value="">PIlih Cara memperoleh Informasi</option>
                <option value="melihat">melihat</option>
                <option value="membaca">membaca</option>
                <option value="mendengarkan">mendengarkan</option>
                <option value="mencatat">mencatat</option>
                <option value="hardcopy">hardcopy</option>
                <option value="softcopy">soft copy</option>
              </select>
            </div>
            <div class="form-group">
              <label>Cara mendapatkan salinan</label`>
              <select class="form-control" name="cara_mengambil_pemohon">
                <option value="">PIlih cara mendapatkan salinan informasi</option>
                <option value="kurir">Kurir</option>
                <option value="langsung">mengambil langsung</option>
                <option value="pos">post</option>
                <option value="email">email</option>
                <option value="fax">fax</option>
              </select>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Ajukan permohonan</button>
            </div>
          </form>
      </div>
    </div>
    <?php }else if((isset($module))AND ($module=='download_keberatan')){ ?>
    <div class="col-sm-8 well"> 
      <div>
        <h2 class="text-center title">Menu Download Keberatan/h2><br>
          <ul></ul>
      </div>
    </div>
    <?php }else if((isset($module))AND ($module=='pengajuan_keberatan')){ ?>
    <div class="col-sm-8 well"> 
      <div>
      <div class="alert alert-success" style="display: none;"></div>
        <h2 class="text-center title">Form Pengajuan Keberatan</h2><br>
          <ul></ul>
          <form class="form-vertical" method="POST" action="<?php echo base_url('landing/tambahPengajuan') ?>">
            <div class="form-group">
              <label>Nama</label>
              <input type="text" name="nama_pengaju" class="form-control" placeholder="masukan nama anda">
            </div>
            <div class="form-group">
              <label>NIK Pengajuan</label>
              <input type="text" name="nik_pengaju" class="form-control" placeholder="masukan nik pengaju">
            </div>
            <div class="form-group">
              <label>Alamat</label>
              <textarea class="form-control" name="alamat_pengaju"></textarea>
            </div>
            <div class="form-group">
              <label>Nomor Telepon</label>
              <input type="text" name="telp_pengaju" class="form-control" placeholder="Masukan nomor aktif">
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" name="email_pengaju" class="form-control" placeholder="masukan email anda">
            </div>
            <div class="form-group">
              <label>Alasan Pengajuan</label>
              <textarea name="alasan_pengaju" class="form-control" placeholder="alasan pengajuan keberatan"></textarea>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Ajukan Keberatan</button>
            </div>
          </form>
      </div>
    </div>
    <?php }else if((isset($module))AND ($module=='kontak_kami')){ ?>
    <div class="col-sm-8 well"> 
      <div>
        <h2 class="text-center title">Kontak Kami</h2><br>
          <ul></ul>
      </div>
    </div>
    <?php }else{ ?>
    <div class="col-sm-8 well"> 
      <div>
        <h2 class="text-center title">SELAMAT DATANG DI PPID KAB. NGANJUK</h2><br>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
    <?php } ?>
    <div class="col-sm-4">
      <div class="form-group well">
      </div>

<div>
<!--         <a style="font-family: Times New Roman; font-weight:bold; font-size: 20px; color: black">Selamat Datang di PPID Kabupaten Nganjuk</a> -->
       <img src="<?php echo base_url() ?>images//yes.png" class="img-responsive well" style="width:100%" alt="Image">
      </div>
      <div class="text-left well" >
          <a href="index.php" style="height:27px; margin-bottom:5px">BERITA/ ARTIKEL</a>
      </div>
    </div>
  </div>
</div><br>

<script>
$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });

  <?php if ($this->session->flashdata('sukses')): ?>
    $('.alert-success').html('<?php echo $this->session->flashdata('sukses') ?>').fadeIn().delay(2000).fadeOut('slow');
  <?php endif ?>
});
</script>

<footer class="container-fluid text-center" style="background-color: black">
  <div style="color: white">Copyright © 2017 PKLI UIN Maulana Malik Ibrahim Malang</div>
</footer>

</body>
</html>
