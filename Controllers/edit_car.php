<?php 
    session_start();
    require_once __DIR__ . "/../Database/Database.php";
    require_once __DIR__ . "/../Models/Car.php";    

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $brand = $_POST["brand"];
    $model = $_POST["model"];
    $PricePerDay = (int)$_POST["pricePerDay"];
    $id_category = (int)$_POST["id_category"];
    $description = $_POST["description"];
    $image = $_POST["image"];
    $availability = (int)$_POST["availability"];
    $id = (int)$_POST["id"];


    if(Car::editCars($brand,$model,$PricePerDay,
    $image,$id_category, $availability,
    $description,$id)){
        header("Location: /Views/adminFleetManagment.php");
        exit();
    }

    echo "Error";
    die();
}

header("Location: /Views/adminFleetManagment.php");
exit();