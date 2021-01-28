<!DOCTYPE html>
<html>
<head>
    <title>ItsolutionStuff.com</title>
</head>
<body>
    <h1>{{ $title }}</h1>
    <p>{{ $body }}</p>
    <?php

    $pdo1 = new PDO("mysql:host=localhost;dbname=site_ecom", "root", "" , array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    $result2 = $pdo1->query("SELECT * FROM panier");
    $info2 = $result2->fetch(PDO::FETCH_OBJ);
    $link =  $info2->product;

    $pdo5 = new PDO("mysql:host=localhost;dbname=site_ecom", "root", "" , array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    $result = $pdo5->query("SELECT * FROM games WHERE id_games = $link;");
    $info = $result->fetch(PDO::FETCH_OBJ);?>
    <p>Merci d'avoir passé commande chez nous.
      Cet e-mail vous est envoyé pour vous informer votre paiement ainsi de votre accusé de reception, plus plus d'informations, n'hésitez pas à consultez notre FAQ ou notre espace client.</p>
    <p> Jeux : <?php echo $info->game_name;?></p>
        <p>type : <?php echo $info->game_type;?></p>
    <p>Mode de paiement : Carte de crédit / débit</p>
    <p>prix : <?php echo $info->prix;?></p></p>

    <p>Votre catalogue a par ailleurs été modifié par conséquence, vous pouvez vérifier les détails dans la section Catalogue de votre compte ConfiGaming.
Cette e-mail à été envoyé automatiquement, aucun e-mail enovoyé en réponse ne sera traité, veuillez envoyez vos questions via l'adresse ci-dessous :

configamingclient@gmail.com</p>
</body>
</html>
