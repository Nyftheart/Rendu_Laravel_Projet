<?php ini_set('display_errors','off'); ?>

<!DOCTYPE html>
<html lang="FR">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Tableau de bort</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
          <a class="nav-link" href="/">
              <img src="img/dashboard.png" alt="">
              <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider d-none d-md-block">
      <li class="nav-item active">
          <a class="nav-link" href="/blank">
              <img src="img/manette.png" alt="">
              <span>Jeux</span></a>
      </li>
      <li class="nav-item active">
          <a class="nav-link" href="/tables">
              <img src="img/user.png" alt="">
              <span>Utilisateur</span></a>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider">


    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

              </a>


        </nav>

        <?php
        $pdo5 = new PDO("mysql:host=localhost;dbname=site_ecom", "root", "" , array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $result = $pdo5->query("SELECT * FROM users WHERE id = '$_GET[id]';");
        $info = $result->fetch(PDO::FETCH_OBJ);

        if (!empty($_POST)) {
            //*********************************************** */
            // Insetion

            $_POST["name1"] = htmlentities($_POST["name"], ENT_QUOTES);
            $_POST["email1"] = htmlentities($_POST["email"], ENT_QUOTES);
            $_POST["sold1"] = htmlentities($_POST["sold"], ENT_QUOTES);
            $result = $pdo5->exec("UPDATE `users` SET `name` = '$_POST[name]', `email` = '$_POST[email]', `sold` = '$_POST[sold]' WHERE id = '$_GET[id]';");

            echo "Donnée(s) Enregister";
            header('Refresh: 0');
            //*********************************************** */
        }


        ?>

        <div class="starter-template">
            <form method="POST" action="" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="titre">Nom</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $info->name;?>">
                    <label for="titre">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value = "<?php echo $info->email;?>">
                    <label for="titre">Sold</label>
                    <input type="text" class="form-control" id="sold" name="sold" value = "<?php echo $info->sold;?>">

                </div>

                <button type="submit" class="btn btn-primary">Enregister</button>

            </form>


</div>
</body>
