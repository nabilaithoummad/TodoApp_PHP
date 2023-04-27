<?php

require('./cnx.php');


try {
    if(isset($_POST['ajouter'])){
        $prenom = $_POST['prenom']; 
        $nom = $_POST['nom']; 
        $age = $_POST['age']; 
        if(!empty($_POST['ajouter'])){
            $sql = $conx->prepare('INSERT INTO stagiaire (prenom,nom,age)VALUES(?,?,?)');
            $result = $sql->execute([$prenom,$nom,$age]);
            header("Location: ../index.php");

        }
    
    
    }
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());

}

?>




















