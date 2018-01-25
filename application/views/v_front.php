<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Digilib Pusjatan</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url()?>assets/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?=base_url()?>assets/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>assets/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/css/AdminLTE.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?=base_url()?>assets/css/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<!-- 
    <?=anchor('./', 'Beranda') ?> |
    <?=anchor('auth/login', 'Login') ?> | -->

    <?php $this->load->view('layout/top_menu') ?>

<div class="login-box">
  <div class="login-logo">
    <a href="http://localhost/digilib/"><b>Digital Library </b>Pusjatan</a>
  </div>
  <p> <center>Digital Library Pusat Litbang Jalan dan Jembatan (Pusjatan) adalah layanan informasi digital yang menyediakan akses terbuka (Open Access) dan daring (online) kepada publik terkait dengan berbagai informasi publikasi di bidang jalan dan jembatan yang dihasilkan oleh seluruh unit kerja di lingkungan Pusjatan</center></p>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg"> </p>

    <!-- <form action="" method="post" role="form"> -->
      <div>
        <!-- Menampilkan flashdata error disini -->
        <?=validation_errors()?>
        <?=$this->session->flashdata('error')?>
      </div>
      
      <!-- Form isian yang diarahkan ke controller front method cariKeyword -->
      <?=form_open('front/cariKeyword')?>
      <input name="keyword" class="form-control input-lg" type="text" placeholder="Cari Koleksi">
      <br>
      <div class="row">
        
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Cari</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <!-- /.social-auth-links -->
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- Jika var search terisi maka ditampilkan -->
<?php if(isset($search)): ?>
    
  <div class="row">
    <div class="col-md-6 col-md-push-3">
      <div class="box">
            <div class="box-header">
              <h3 class="box-title" align="center"><i>Related Search (<?=$cari?>)</i></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-striped">
                <tbody><tr>
                  <th style="width: 10px">#</th>
                  <th>Title</th>
                  <!--<th>Date</th>-->
                  
                </tr>
                <?php $no=1; foreach($search as $row) : ?>
                <tr>
                  <td><?=$no?></td>
                  <!-- Anchor ke controller front method detail dengan parameter id dari search -->

                  <td><a href="<?php echo base_url();?>front/detail/<?=$row->id?>"><?=$row->judul?></td>
                  <td><?=$row->c_date?></td>
                </tr>
                <?php $no++;endforeach;?>
                
                
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
    </div>
    
  </div>
    
<?php endif;?>

<!-- jQuery 3 -->
<script src="<?=base_url()?>assets/js/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?=base_url()?>assets/js/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
