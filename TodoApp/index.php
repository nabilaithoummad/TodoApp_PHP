<?php
    require_once('./database/cnx.php')
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
            <li class="nav-item"><a class="nav-link" href="/index.php">List</a></li>
            <li class="nav-item"><a class="nav-link" href="../TodoApp/includes/form.php">Ajouter</a></li>
        </ul>
    </header>
    
    <?php
        include_once('../TodoApp/includes/list.php');
    ?>

</body>
</html>