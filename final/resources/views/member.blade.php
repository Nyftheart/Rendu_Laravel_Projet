<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/page.css">
    <link rel="stylesheet" href="css/member.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <script src="bootstrap/bootstrap.bundle.min.js"></script>
    <script src="bootstrap/jquery.slim.min.js"></script>
    <script src="https://kit.fontawesome.com/27a8d3385a.js" crossorigin="anonymous"></script>
    <script src="js/page.js"></script>
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
          <a class="nav-link" href="#">Compte</a>
        </li>

      </ul>
    </div>
  </div>
</nav>


<!-- Page Content -->
<div class="container" >

</div>
<!-- /.container -->
    </header>
    <?php $pdo1 = new PDO("mysql:host=localhost;dbname=site_ecom", "root", "" , array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    $result = $pdo1->query("SELECT * FROM users");
    $clients = $result->fetch(PDO::FETCH_OBJ)
    ?>
    <div class="compte-box" style="margin-top:150px;">
        <h2>Compte utilisateur</h2>
        <form>
          <div class="user-box">
            <label>Nom d'utilisateur : <?php echo $clients->name;?></label>
          </div>
          <div class="user-box">
            <label>Adresse e-mail : <?php echo $clients->email;?></label>
          </div>
          <div class="user-box">
            <label>Porte-monnaie : <?php echo $clients->sold;?> €</label>
          </div>
          <a href="#">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </a>
        </form>
      </div>

</body>
</html>
