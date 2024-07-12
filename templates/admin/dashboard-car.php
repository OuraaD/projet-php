<main>
    <h1>Tableau de bord des véhicules</h1>
  
    <table>
        <?php
        foreach ($cars as $key) {
        ?>
            <tr>
                <td><?= $key['id'] ?></td>
                <td><?= $key['model'] ?></td>
                <td><?= $key['description'] ?></td>
                <td><?= $key['prix'] ?></td>
                <td><?= $key['image_pass'] ?></td>



                <td><a class="btn btn-secondary" href="<?= SITE_NAME; ?>/dashboard/users/modifier/<?= $user['id'] ?>">Modifier</a></td>
                <td><a class="btn btn-warning" href="">Supprimer</a></td>


            </tr>
        <?php
        }

        ?>
    </table>




</main>



