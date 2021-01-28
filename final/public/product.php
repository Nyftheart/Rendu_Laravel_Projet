<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="css/page.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <script src="bootstrap/bootstrap.bundle.min.js"></script>
    <script src="bootstrap/jquery.slim.min.js"></script>
    <script src="https://kit.fontawesome.com/27a8d3385a.js" crossorigin="anonymous"></script>
    <title>Document</title>
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
                   <input type="text" class="searchTerm" placeholder="What are you looking for?">
                   <button type="submit" class="searchButton">
                     <i class="fa fa-search"></i>
                  </button>
                </div>
             </div>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="page.html">Acceuil
                      <span class="sr-only">(current)</span>
                    </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="member.html">Compte</a>
              </li>

            </ul>
          </div>
        </div>
      </nav>
    </header>
    <main class="container-product">
      <?php
      $pdo1 = new PDO("mysql:host=localhost;dbname=site_ecom", "root", "" , array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
      $result = $pdo1->query("SELECT * FROM games where id_games = '$_GET[id]'");
      $games = $result->fetch(PDO::FETCH_OBJ);
      ?>
        <!-- Left Column / Headphones Image -->
        <div class="left-column">
          <img data-image="red" class="active" src="img/<?php echo $games->img;?>" alt="" style="height:680px;">
        </div>


        <!-- Right Column -->
        <div class="right-column">

          <!-- Product Description -->
          <div class="product-description">
            <span><?php echo $games->game_type;?></span>
            <h1><?php echo $games->game_name;?></h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos non mollitia eaque ratione quaerat qui recusandae tempora, totam amet, at a molestiae unde hic. Est hic saepe sed soluta iste!</p>
          </div>

          <!-- Product Configuration -->
          <div class="product-configuration">


            <!-- Cable Configuration -->
            <div class="cable-config">
              <span>Produit disponibles :</span>

              <div class="cable-choose">
                <button>Edition basique</button>
                <button>Edition collector</button>
                <button>Edition VIP</button>
              </div>
            </div>
          </div>

          <div class="product-avis">
              <h6> Note moyenne: 4.8/5 : </h6>
              <div class="product-box">
                  <h5> Un jeu diehard pour les tryhards<h5>
                  <p>TRES TRES BON JEUX J'ADORE (SARDOCHE) </p>
              </div>
          </div>

          <!-- Product Pricing -->
          <div class="product-price">
            <span><?php echo $games->prix;?>€</span>
            <a href="panier.php?id=<?php echo $games->id_games;?>" class="cart-btn">Ajouter au panier</a>
          </div>
        </div>
      </main>
</body>
</html>
