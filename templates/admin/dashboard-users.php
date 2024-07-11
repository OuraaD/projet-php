<main>
    <h1>Users</h1>
    <table>
        <?php
        foreach ($users as $user) {
        ?>
            <tr>
                <td><?= $user['pseudo'] ?></td>
                <td><?= $user['email'] ?></td>
                <td><?= $user['statut'] ? 'admin' : 'user'; ?></td>

                <td><a class="btn btn-secondary" href="<?= SITE_NAME; ?>/dashboard/users/modifier/<?= $user['id'] ?>">Modifier</a></td>
                <td><a class="btn btn-warning" href="">Supprimer</a></td>


            </tr>
        <?php
        }

        ?>
    </table>
</main>