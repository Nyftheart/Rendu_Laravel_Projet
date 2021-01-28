<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/page.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <script src="bootstrap/bootstrap.bundle.min.js"></script>
    <script src="bootstrap/jquery.slim.min.js"></script>
    <script src="https://kit.fontawesome.com/27a8d3385a.js" crossorigin="anonymous"></script>
    <script src="page.js"></script>
    <title>ShOpShOp</title>
</head>
<body>
    <header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
  <div class="container">
    <a class="navbar-brand" href="logo">
          <img src="pngegg.png" alt="" width=11%>
        </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="wrap">
          <div class="search">





          </div>
       </div>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Acceuil
                <span class="sr-only">(current)</span>
              </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/member">Compte</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/recherche.php">recherche</a>
        </li>


        <li class="nav-item">
          <a class="nav-link" href="/Conecadmin.php">admin</a>
        </li>

    </div>
  </div>
  <li class="nav-item">
        <a id="navbarDropdown"  href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color:red;">
            {{ Auth::user()->name }}
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="nav-link" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                @csrf
            </form>
        </div>
  </li>
</nav>

<!-- Page Content -->
<div class="container">

</div>

<?php

$pdo1 = new PDO("mysql:host=localhost;dbname=site_ecom", "root", "" , array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));


  $result = $pdo1->query("SELECT * FROM games");



?>

<!-- /.container -->
    </header>

    <div class="title">
      <h2 class=titleh2> Titre</h2>
    </div>

    <div class="news">
      <h3 class=news-title> Section</h3>
      <div class="liste" display=flex>



      </div>
    </div>


    <div class="liste">
      <?php while($games = $result->fetch(PDO::FETCH_OBJ)) {?>
      <div class="item-list">
        <h5><?php echo $games->game_name;?></h5>
        <img class ="list-img" src="img/<?php echo $games->img;?>">
        <a class="achat" href="product.php?id=<?php echo $games->id_games?>">
          Info
        </a>

      </div>
                <?php }?>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>
</html>
