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
    <link rel="stylesheet" href="css/panier.css"></link>
    <script src="js/panier.js"></script>
    <title>Document</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
          <div class="container">
            <a class="navbar-brand" href="logo">
                  <img class="logo" src="pngegg.png" alt="" width=11%>
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
                  <a class="nav-link" href="/">Acceuil
                        <span class="sr-only">(current)</span>
                      </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="member">Compte</a>
                </li>

              </ul>
            </div>
          </div>
        </nav>

        <!-- Page Content -->
        <div class="container">

        </div>
        <!-- /.container -->
            </header>

</body>
</html>
<div class="container-bag">
  <div class="heading">
    <h1>
      <span class="shopper"></span> Panier
    </h1>

    <a href="page.html" class="visibility-cart transition is-open">X</a>
  </div>

  <div class="cart transition is-open">

    <div class="table">

      <div class="layout-inline row th">
        <div class="col col-pro">Produit</div>
        <div class="col col-price align-center ">
          Prix
        </div>
        <div class="col col-qty align-center">QTE</div>
        <div class="col">TAXE</div>
        <div class="col">Total</div>
      </div>

      <div class="layout-inline row">
        <?php
        $pdo1 = new PDO("mysql:host=localhost;dbname=site_ecom", "root", "" , array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $result = $pdo1->query("SELECT * FROM games where id_games = '$_GET[id]'");
        $games = $result->fetch(PDO::FETCH_OBJ);
        ?>
        <div class="col col-pro layout-inline">
          <p><?php echo $games->game_name;?></p>
        </div>

        <div class="col col-price col-numeric align-center ">
          <p><?php echo $games->prix;?>€</p>
        </div>

        <div class="col col-qty layout-inline">
          <a href="#" class="qty qty-minus">-</a>
            <input type="numeric" value="1" />
          <a href="#" class="qty qty-plus">+</a>
        </div>

        <div class="col col-vat col-numeric">
          <p>2€</p>
        </div>
        <div class="col col-total col-numeric">
          <?php $tot = $games->prix + 2;?>
          <p> <?php echo $tot ?>€</p>
        </div>
      </div>

        <?php $link =  $games->id_games;?>


       <div class="tf">
          <div class="row layout-inline">
           <div class="col">
             <p>Total</p>
           </div>
           <div class="col"></div>
         </div>
       </div>
  </div>

    <a href="/myTestMail" class="btn btn-update">Buy
      <?php

          $pdo2 = new PDO("mysql:host=localhost;dbname=site_ecom", "root", "" , array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
          $result2 = $pdo2->query("SELECT * FROM id_ca where id_ca = 1");
          $ca = $result2->fetch(PDO::FETCH_OBJ);
          $ajout = 0;
          $ajout = $tot + $ca ->cas;
          $ajout2 = $tot + $ca ->cam;
          $ajout3 = $tot + $ca ->caa;
          $pdo2->exec("UPDATE `id_ca` SET `cas` = '$ajout', `cam` = '$ajout2', `caa` = '$ajout3' WHERE id_ca = 1;");
          //*********************************************** */
          $pdo3 = new PDO("mysql:host=localhost;dbname=site_ecom", "root", "" , array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
          $result3 = $pdo3->query("SELECT * FROM users");
          $sold = $result3->fetch(PDO::FETCH_OBJ);
          $retir = 0;
          $dispo = $sold->sold;
          $retir = $dispo - $tot;
          $pdo2->exec("UPDATE `users` SET `sold` = '$retir';");

          $pdo4 = new PDO("mysql:host=localhost;dbname=site_ecom", "root", "" , array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
          $result4 = $pdo4->query("SELECT * FROM panier");
          $pdo4->exec("UPDATE `panier` SET `product` = '$link';");


      ?>
    </a>

</div>
