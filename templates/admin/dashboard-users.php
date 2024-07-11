<main>
    <h1>Users</h1>
    <table>
        <?php
        foreach ($users as $user) {
        ?>
            <tr>
                <td>
                <?= $user['pseudo']?>
                </td>
                <td>
                <?= $user['email']?>
                </td>
                <td>
                <?= $user['statut']?>
                </td>
            </tr>
        <?php
        }

        ?>
    </table>
</main>