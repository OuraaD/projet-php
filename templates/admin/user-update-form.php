<main>

    <h1>Formulaire de modification</h1>

    <form action="/projet-php/dashboard/users/update" method="POST">


        <div>
            <label for="email">email</label>
            <input type="text" id="email" name="email" value="<?= $user['email'] ?>">
        </div>

        <div>
            <label for="userName">Username</label>
            <input type="text" id="userName" name="pseudo" value="<?= $user['pseudo'] ?>">
        </div>



        <div>

            <input type="hidden" value="<?= $user['id'] ?>" name="id">
        </div>



        <div>
            <label for="Admin">Admin</label>
            <input type="radio" value="true" id="Admin" name="statut" <?= ($user['statut']) ? 'checked' : '' ?>>

            <label for="User">User</label>
            <input type="radio" value="false" id="User" name="statut" <?= ($user['statut'] == false) ? 'checked' : ''  ?>>
        </div>

        <input type="submit" value="Modifier">

    </form>

</main>