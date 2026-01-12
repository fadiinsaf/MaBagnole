<?php 
    require_once __DIR__ . "/../Database/Database.php";
    require_once __DIR__ . "/../Models/Comment.php"; 
    require_once __DIR__ . "/../Models/User.php"; 
    require_once __DIR__ . "/../Models/Client.php"; 

    session_start();   

if($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["id"])){
    
    $id = (int)$_GET["id"];
    $id_car = (int)$_GET["idcar"];

    if(Comment::deleteComment( $id)){
        header("Location: /Views/carDetails.php?id={$id_car}");
        exit();
    }

    echo "Error";
    die();
}
        header("Location: /Views/carDetails.php?id={$id_car}");
        exit();