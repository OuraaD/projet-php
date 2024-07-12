<main>

    <h1>Connexion</h1>

    <div class="w-25 m-auto">

        <form action="/projet-php/login" method="post">
    
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">email</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Entrez votre adresse mail">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Entrez votre mot de passe">
    
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
    </div>


</main>