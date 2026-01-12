<?php 
    session_start();


    require_once __DIR__ . "/../Database/Database.php";
    require_once __DIR__ . "/../Models/Category.php";    

if($_SERVER["REQUEST_METHOD"] === "POST"){

    $description = $_POST["description"];
    $name = $_POST["name"];

    if(Category::createCategory( $name,  $description)){
        header("Location: /Views/adminCategoriesManagment.php");
        exit();
    }

    echo "Error";
    die();
}

    header("Location: /Views/adminCategoriesManagment.php");
exit();