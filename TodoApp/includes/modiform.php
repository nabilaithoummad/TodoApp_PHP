<?php
    require_once('../database/cnx.php')
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <title>Document</title>
</head>
<body>



    <header class="navbar navbar-expand-lg bg-light d-flex flex-row justify-content-center">
        <ul class="nav">
            <li class="nav-item"><a class="nav-link" href="../index.php">List</a></li>
            <li class="nav-item"><a class="nav-link" href="./modiform.php">Ajouter</a></li>
        </ul>
    </header>

<?php



try {
    if(isset($_POST['modifier'])){

        if(!empty($_POST['id'])){

            $id = $_POST['id']; 

            $sql = $conx->prepare('SELECT * FROM stagiaire WHERE id='.$id);

            $sql->execute();

            $result = $sql->fetchAll(PDO::FETCH_ASSOC);

            $data = $result[0];

        }
    
    
    }
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());

}

?>




    <section class="w-100 pt-5">
        <div class="w-50 mx-auto">
            <h1 class="text-center">Modifier Ce Stagiaire</h1>
        </div>

        <form class="w-50 mx-auto" action="../database/modifier.php" method="post">
            <div class="w-100 py-3">
                <input class="form-control" type="hidden" name="id" value="<?php echo $data['id'] ?>"/>
            </div>   
            <div class="w-100 py-3">
                <label class="label-control">Prénom</label>
                <input class="form-control" type="text" name="prenom" value="<?php echo $data['prenom'] ?>"/>
            </div>
            <div class="w-100 py-3">
                <label class="label-control">Nom</label>
                <input class="form-control" type="text" name="nom" value="<?php echo $data['nom'] ?>"/>
            </div>
            <div class="w-100 py-3">
                <label class="label-control">Age</label>
                <input class="form-control" type="number" min="14" max="30" name="age" value="<?php echo $data['age'] ?>"/>
            </div>
            <div class="w-100 py-3 d-flex flex-row justify-content-center">
                <input type="submit" value="Modifier" name="modifierst" class="btn btn-primary w-25"/>
            </div>
        </form>
    </section>



</body>
</html>