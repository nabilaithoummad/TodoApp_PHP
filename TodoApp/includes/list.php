<section class="w-100 pt-5">

    <?php
        $sql = $conx->query('SELECT * FROM stagiaire');
        $stagiaires = $sql->fetchAll(PDO::FETCH_ASSOC);


    ?>

    <div class="w-50 mx-auto">
        <h1 class="text-center">List Des Stagiaires</h1>
    </div>
    <div class="w-50 mx-auto">
        <a class="btn btn-primary" href="../TodoApp/includes/form.php">Ajouter Nouveau Stagiaire</a>
    </div>
    <table class="table table-striped w-50 mx-auto my-4">
        <thead>
            <tr>
                <th scope="col" class="text-center">Prenom</th>
                <th scope="col" class="text-center">Nom</th>
                <th scope="col" class="text-center">Age</th>
                <th scope="col" class="text-center"></th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($stagiaires as $stagiaire) { ?>
            <tr>
                <td class="text-center"><?php echo $stagiaire['prenom'] ?></td>
                <td class="text-center"><?php echo $stagiaire['nom'] ?></td>
                <td class="text-center"><?php echo $stagiaire['age'] ?></td>
                <td class="text-center d-flex flex-row justify-content-around">
                    <form action="../TodoApp/includes/modiform.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $stagiaire['id'] ?>"/>
                        <input type="submit" name="modifier" value="modifier" class="btn btn-primary"/>
                    </form>
                    <form action="../TodoApp/database/supprimer.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $stagiaire['id'] ?>"/>
                        <input type="submit" name="supprimer" value="supprimer" class="btn btn-danger"/>
                    </form>
                </td>
            </tr>
            <?php } ?>


        </tbody>
    </table>
</section>
