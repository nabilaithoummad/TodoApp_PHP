<?php

use function PHPSTORM_META\type;

require('./cnx.php');


try {
    if(isset($_POST['modifierst'])){

        $id = $_POST['id']; 
        $prenom = $_POST['prenom']; 
        $nom = $_POST['nom']; 
        $age = $_POST['age']; 
        
        if(!empty($_POST['modifierst'])){

            $sql = $conx->prepare('UPDATE stagiaire SET prenom=:prenom,nom=:nom,age=:age WHERE id=:id');

            $sql->bindParam(':id', $id, PDO::PARAM_INT);
            $sql->bindParam(':prenom', $prenom, PDO::PARAM_STR);
            $sql->bindParam(':nom', $nom, PDO::PARAM_STR);
            $sql->bindParam(':age', $age, PDO::PARAM_INT);

            $sql->execute();

            header("Location: ../index.php");


        }
    
    
    }
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());

}

?>

