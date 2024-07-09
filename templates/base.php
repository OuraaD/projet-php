<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/projet-php/public/css/style.css">
    <link rel="stylesheet" href="/projet-php/public/css/connexion.css">
    <link rel="stylesheet" href="/projet-php/public/css/home.css">
</head>

<body>
<header>
        <a href="<?= SITE_NAME; ?>/">Home</a>
        <a href="<?= SITE_NAME; ?>/contact">Contact</a>
        <a href="<?= SITE_NAME; ?>/connexion">Connexion</a>
    </header>
    
    <?= $content;?>

    <footer></footer>
</body>
</html>