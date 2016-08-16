<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>YSC | Doctor Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url()."assets"?>/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()."assets"?>/font-awesome-4.6.3/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url()."assets"?>/ionicons-2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()."assets"?>/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url()."assets"?>/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url()."assets"?>/index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Y</b>SC</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>YSC</b>app</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url()."assets"?>/dist/img/avatar5.png" class="user-image" alt="User Image">
              <span class="hidden-xs">Alexadre pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url()."assets"?>/dist/img/avatar5.png" class="img-circle" alt="User Image">

                <p>
                  Alexadre pierce - Doctor
                  <small>Member since June. 2016</small>
                </p>
              </li>
              <!-- Menu Body -->

              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="<?php echo base_url()."index.php/auth/logout" ?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url()."assets"?>/dist/img/avatar5.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexadre pierce</p>
          <a>Doctor</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">NAVIGATION</li>
        <li class="treeview">
          <a href="<?php echo base_url()."index.php/doctor" ?>">
            <i class="fa fa-dashboard"></i> <span>Available Slot</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Patient List</span>
            <!-- <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span> -->
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url()."index.php/doctor/list_Uncheck" ?>"><i class="fa fa-circle-o"></i>Unchecked In</a></li>
            <li><a href="<?php echo base_url()."index.php/doctor/list_Check" ?>"><i class="fa fa-circle-o"></i>Checked In</a></li>
          </ul>
        </li>
        <li>
          <a href="<?php echo base_url()."index.php/doctor/pass" ?>">
            <i class="fa fa-th"></i> <span>Edit Password</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Patient List
        <small>Unchecked in</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Patient List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Date</th>
                  <th>Slot</th>
                  <th>Name</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>14/08/2016</td>
                  <td>08.00</td>
                  <td>Andi Nugraha</td>
                  <td>
                      <a href="<?php echo base_url()."index.php/doctor/list_uncheck" ?>" class="btn btn-default btn-flat">Skip</a>
                      <a href="<?php echo base_url()."index.php/doctor/list_check" ?>" class="btn btn-default btn-flat">Check In</a>
                  </td>
                </tr>
                <tr>
                  <td>14/08/2016</td>
                  <td>08.15</td>
                  <td>Budi Santoso</td>
                  <td>
                      <a href="<?php echo base_url()."index.php/doctor/list_uncheck" ?>" class="btn btn-default btn-flat">Skip</a>
                      <a href="<?php echo base_url()."index.php/doctor/list_check" ?>" class="btn btn-default btn-flat">Check In</a>
                  </td>
                </tr>
                <tr>
                  <td>14/08/2016</td>
                  <td>08.30</td>
                  <td>Cepi Ramdani</td>
                  <td>
                      <a href="<?php echo base_url()."index.php/doctor/list_uncheck" ?>" class="btn btn-default btn-flat">Skip</a>
                      <a href="<?php echo base_url()."index.php/doctor/list_check" ?>" class="btn btn-default btn-flat">Check In</a>
                  </td>
                </tr>
                <tr>
                  <td>14/08/2016</td>
                  <td>10.15</td>
                  <td>Doni</td>
                  <td>
                      <a href="<?php echo base_url()."index.php/doctor/list_uncheck" ?>" class="btn btn-default btn-flat">Skip</a>
                      <a href="<?php echo base_url()."index.php/doctor/list_check" ?>" class="btn btn-default btn-flat">Check In</a>
                  </td>
                </tr>
                <tr>
                  <td>15/08/2016</td>
                  <td>08.00</td>
                  <td>Mirna Agustian</td>
                  <td>
                      <a href="<?php echo base_url()."index.php/doctor/list_uncheck" ?>" class="btn btn-default btn-flat">Skip</a>
                      <a href="<?php echo base_url()."index.php/doctor/list_check" ?>" class="btn btn-default btn-flat">Check In</a>
                  </td>
                </tr>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.6
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url()."assets"?>/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url()."assets"?>/bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url()."assets"?>/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url()."assets"?>/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()."assets"?>/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()."assets"?>/dist/js/demo.js"></script>
</body>
</html>