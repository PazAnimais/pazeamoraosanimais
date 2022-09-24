<?php
include('config/verifica_login.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Painel Administrativo</title>
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="../assets/img/icons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../assets/img/icons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/icons/favicon-16x16.png">
  <link rel="manifest" href="../assets/img/icons/site.webmanifest">

</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">

      <!-- Left Navbar -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="/admin" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="suporte.php" class="nav-link">Suporte</a>
        </li>
      </ul>

      <!-- Right Navbar -->
      <ul class="navbar-nav ml-auto">

        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-comments"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-header">0 Mensagens</span>
            <a href="#" class="dropdown-item dropdown-footer">Ver todas as mensagens</a>
          </div>
        </li>

        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <!--<span class="badge badge-warning navbar-badge">15</span>-->
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-header">0 Notificações</span>

            <a href="#" class="dropdown-item dropdown-footer">Ver todas notificações</a>
          </div>
        </li>

      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="/admin" class="brand-link">
        <span class="brand-text font-weight-light">Painel Administrativo</span>
      </a>

      <?php require 'sidebar.php'; ?>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item">
            <a href="/admin" class="nav-link active" style="background-color: #000">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="contatos.php" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Contatos
                <span class="right badge badge-danger" style="background-color: #FF0000">Novo</span>
              </p>
            </a>
          </li>

          <div class="dropdown-divider"></div>

          <li class="nav-item">
            <a href="config/logout.php" class="nav-link">
              <i class="nav-icon fas fa-door-closed"></i>
              <p>
                Sair do Painel
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a style="color:#FF0000" href="/admin">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">

          <div class="col-lg-8">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Olá!</h5>
                <br><br>
                <p class="card-text">
                  Este é o painel que controlará as ações do site. <br><br>
                  Qualquer dúvida, entre em contato pelo Whatsapp ou Telegram, no número (35) 9 8408-6154. <br><br>
                  <strong>hebertdev82</strong>
                </p>

              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Feito por <a href="mailto:hebertdev82@gmail.com" target="_blank" style="color:#FF0000; font-weight: bold;">hebertdev82</a>
    </div>
    <!-- Default to the left -->
    <strong>Copyright <i style="color:#FF0000" class="fa fa-copyright"></i>
      <script>
        document.write(new Date().getFullYear())
      </script> <a style="color:#FF0000" href="https://pazeamoraosanimais.ong.br" target="_blank">Paz e Amor aos Animais</a>.
    </strong> Todos os Direitos Reservados.
  </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
</body>

</html>