<?php


try{
    $conx = new PDO('mysql:host=localhost;dbname=TodoApp','root','');

    $conx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e){
    die("Connection failed: " . $e->getMessage());
}


?>