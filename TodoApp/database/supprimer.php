<?php

use function PHPSTORM_META\type;

require('./cnx.php');


try {
    if(isset($_POST['supprimer'])){

        $id = $_POST['id']; 

        
        if(!empty($_POST['supprimer'])){

            $sql = $conx->prepare('DELETE FROM stagiaire WHERE id=:id');

            $sql->bindParam(':id', $id, PDO::PARAM_INT);

            $sql->execute();

            header("Location: ../index.php");

        }
    
    
    }
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());

}

?>

