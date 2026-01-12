<?php 
    session_start();
    require_once __DIR__ . "/../Database/Database.php";
    require_once __DIR__ . "/../Models/Category.php";    

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $name = $_POST["name"];
    $description = $_POST["description"];
    $id = (int)$_POST["id"];


    if(Category::editCategory( $name, $description, $id)){
        header("Location: /Views/adminCategoriesManagment.php");
        exit();
    }

    echo "Error";
    die();
}

        header("Location: /Views/adminCategoriesManagment.php");
exit();