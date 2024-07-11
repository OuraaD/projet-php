<main>

    <h1>Formulaire de modification</h1>

    <form action="<?php SITE_NAME; ?>/dasboard/users/update" method="POST">
        <div>
            <label for="userName">Username</label>
            <input type="userName" id="userName" name="password" value="<?= $user ['pseudo']?>">
        </div>

        <div>
            <label for="email">email</label>
            <input type="email" id="email" name="email" value="<?= $user ['email']?>">
        </div>

    </form>

</main>