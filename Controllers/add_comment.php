<?php 
    require_once __DIR__ . "/../Database/Database.php";
    require_once __DIR__ . "/../Models/Comment.php"; 
    require_once __DIR__ . "/../Models/User.php"; 
    require_once __DIR__ . "/../Models/Client.php"; 

    session_start();   

if($_SERVER["REQUEST_METHOD"] === "POST"){

    $comment_text = $_POST["comment_text"];
    $rating = (int)$_POST["rating"];
    $id_car = (int)$_POST["id_car"];

    $uniqid = uniqid("Comment_");

    if(Comment::addComment( $_SESSION["user"]->getUserId(),  $id_car, $comment_text, $rating)){
        $_SESSION["uniqueCommentId"][Comment::getLastInseartedId()] = $uniqid;
        header("Location: /Views/carDetails.php?id={$id_car}&#{$uniqid}");
        exit();
        
    }

    echo "Error";
    die();
}

        header("Location: /Views/carDeatils.php?id={$id_car}");
        exit();