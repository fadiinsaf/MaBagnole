<?php 
    session_start();


    require_once __DIR__ . "/../Database/Database.php";
    require_once __DIR__ . "/../Models/Car.php";    

if($_SERVER["REQUEST_METHOD"] === "POST"){

    $brand = $_POST["brand"];
    $model = $_POST["model"];
    $pricePerDay = $_POST["pricePerDay"];
    $id_category = $_POST["id_category"];
    $description = $_POST["description"];
    $image = $_POST["image"];



    if(Car::addCars($brand,$model,$pricePerDay,$image,$id_category,$description)){
        header("Location: /Views/adminFleetManagment.php");
        exit();
    }

    echo "Error";
    die();
}

header("Location: /Views/adminFleetManagment.php");
exit();