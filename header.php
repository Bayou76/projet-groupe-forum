<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>

<div class="bandeau">
    <div id="logo">
        <img src="./assets/images/logo_forum.png" alt="logo">
    </div>
    <div class="nom_forum">
        <p>LE FORUM DES DEV'</p>
    </div>

    <div class="boutons">
    <?php if( isset($_SESSION['login']) && $_SESSION['login'] !== null) : ?>
        <a href="deco.php" class="btn">Déconnexion</a>
    <?php else : ?>
        <a href="inscription.php" class="btn">Inscription</a>
        <a href="./utilisateur/login.php" class="btn">Connexion</a>
    <?php endif; ?>
    </div>
</div>

<div class="sections">
    <ul>
        <li>HTML/CSS</li>
        <li>JAVASCRIPT</li>
        <li>PHP</li>
        <li>FRAMEWORKS</li>
        <li>&#128269; RECHERCHE</li>
    </ul>
</div>
    
</body>

</html>