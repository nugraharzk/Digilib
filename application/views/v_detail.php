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

    <!-- Memanggil Header Menu -->
    <?php $this->load->view('layout/top_menu') ?>

  <div class="login-logo">
    <a href="http://localhost/digilib/"><b>Digital Library </b>Pusjatan</a>
  </div>

    <h3><?php echo $arr->judul?></h3> 

<br>
<!-- /.login-box -->
<table class="table table-striped">
  <tbody>
    <tr>
      <td><th>Judul</th></td>
      <td><th>:</th></td>
      <td><th><?=$arr->judul?></th></td>
    </tr>
    
    <tr>
      <td><th>Penulis</th></td>
      <td><th>:</th></td>
      <td><th><?=$arr->penulis?></th></td>
    </tr>
    
    <tr>
      <td><th>Subjek</th></td>
      <td><th>:</th></td>
      <td><th><?=$arr->subjek?></th></td>
    </tr>
    
    <tr>
      <td><th>Kategori</th></td>
      <td><th>:</th></td>
      <td><th><?=$arr->kategori?></th></td>
    </tr>
    
    <tr>
      <td><th>Deskripsi</th></td>
      <td><th>:</th></td>
      <td><th><?=$arr->deskripsi?></th></td>
    </tr>
    
    <tr>
      <td><th>Lampiran</th></td>
      <td><th>:</th></td>
      <td><th><a href="<?=base_url();?>front/download/<?=$arr->id?>"><?=$arr->lampiran?></a></th></td>
    </tr>                                
  </tbody>
</table> 
<center>
  <?=anchor('', 'Kembali', [
    'class' => 'btn btn-primary',
    'role'  => 'button'
  ])?>
</center>


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