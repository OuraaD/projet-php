<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../js/login.js" defer type="module"></script>
    <title>Log in</title>
    <link rel="stylesheet" href="/projet-php/public/css/connexion.css">
</head>

<body>
    <header></header>
    <main>


        <form>

            <h1>Connexion</h1>

            <div>
                <input type="email" id="email" placeholder="Entrez votre email" required>
            </div>

            <div>
                <input type="password" id="password" placeholder="Entrez votre mot de passe" required>
            </div>

            <div>
                <label><input type="checkbox">Se souvenir de moi</label>
            </div>

            <a href="#">Mot de passe oublié ?</a>
            <br>

            <input type="submit" class="btn" value="Connectez-vous">
            <br>

            <p>Vous n'avez pas de compte ? <a href="#">Enregistrez-vous</a></p>

        </form>

    </main>
    <footer>
    </footer>
</body>

</html>